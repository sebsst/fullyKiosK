<?php
//sudo apt-get install php5-curl
class vx_curl
{
	/**
	* Variable
	*/
	private $_Curl_Useragent = null;
	private $_curlHeader = array();
	private $_ckfile = null;
	private $postdatas = null;

	private $headers;
	private $rawheaders;
	private $content;
	private $url = null;

	/**
	* Constructor
	*/

	function __construct($initdefault=false)
	{
		if($initdefault)
		{
			$this->_Curl_Useragent = "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; fr; rv:1.9.2.23) Gecko/20110920 Firefox/3.6.23";
			$this->_ckfile = realpath('.')."/cookie".date('U').'-'.uniqid('sita').".txt";
		}
	}

// 	function __destruct()
// 	{
// 		if(file_exists($this->_ckfile))
// 		{
// 			unlink($this->_ckfile);
// 		}
// 	}

	/**
	* Methode magique __set()
	*
	* @param string $property Nom de la propriété
	* @param mixed $value Valeur à affecter à la propriété
	* @return void
	*/
	public function __set($Property, $value)
	{
		$PROPERTY = strtoupper($Property);
		$property = strtolower($Property);
		switch($PROPERTY)
		{
			case 'USER_AGENT':
				$this->_Curl_Useragent = $value;
				return;
				break;
			case 'COOKIES_FILE':
				$this->_ckfile = $value;
				return;
				break;
			case 'POST_DATAS':
				$this->postdatas = $value;
				return;
				break;
			case 'URL':
				$this->url = $value;
				return;
				break;
			default:
				return;
		}
	}

	/**
	* Methode magique __get()
	*
	* @param string $property Nom de la propriété à atteindre
	* @return mixed|null
	*/
	public function __get($property)
	{
		switch(strtoupper($property))
		{
			case 'USER_AGENT':
				return $this->_Curl_Useragent;
				break;
			case 'COOKIES_FILE':
				return $this->_ckfile;
				break;
			case 'COOKIES_CONTENT':
				$cookies_content = '';
				if(file_exists($this->_ckfile))
				{
					$cookies_content = file_get_contents($this->_ckfile);
				}
				return $cookies_content;
				break;
			case 'POSTDATAS':
			case 'POST_DATAS':
				return $this->postdatas;
				break;
			case 'HEADERS':
				return $this->headers;
				break;
			case 'RAWHEADERS':
				return $this->rawheaders;
				break;
				
			case 'CONTENT':
				return $this->content;
				break;
			case 'URL':
				return $this->url;
				break;
			default:
				return null;
		}
	}

	/// engine
	//CURLOPT_HEADERFUNCTION callback
	private function read_header($ch, $string)
	{
		$this->_curlHeader[]=$string;
		return strlen($string);
	}

	function exec($url=null, $postdata=null)
	{
		$this->_curlHeader=array();

		if($url!=null)
			$this->url = $url;

		if($postdata!=null)
			$this->postdatas = $postdata;

		if($this->url==null)
			return false;

		$ch = curl_init ();

		curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);// allow redirects
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);

		curl_setopt ($ch, CURLOPT_URL,$this->url);

		if($this->postdatas != null)
		{
			curl_setopt($ch, CURLOPT_POST, 1); // set POST method
			curl_setopt($ch, CURLOPT_POSTFIELDS, $this->postdatas);
		}
		//echo "this->_ckfile : ".$this->_ckfile."\n";
		if($this->_ckfile != null)
		{
			curl_setopt ($ch, CURLOPT_COOKIEJAR, $this->_ckfile);
			curl_setopt ($ch, CURLOPT_COOKIEFILE, $this->_ckfile);
		}

		if($this->_Curl_Useragent != null)
			curl_setopt ($ch, CURLOPT_USERAGENT,$this->_Curl_Useragent);

		curl_setopt($ch, CURLOPT_HEADERFUNCTION, array($this, 'read_header'));

		$this->content = curl_exec ($ch);
		$this->headers = curl_getinfo($ch);
		$this->rawheaders = $this->_curlHeader;

		foreach ($this->_curlHeader as $head)
		{
			$pos= strpos($head,':');
			if($pos!== false)
				$this->headers[trim(strtolower(substr ( $head , 0 ,$pos)))]=trim(substr ($head , $pos+1));
			else
				$this->headers[trim($head)]=trim($head);
		}

		curl_close($ch);
		return $this->content;
	}
}