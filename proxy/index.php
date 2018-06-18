<?php
/* This file is part of Jeedom.
*
* Jeedom is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* Jeedom is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
*/

	require_once dirname(__FILE__) . '/../../../core/php/core.inc.php';
	include_file('core', 'authentification', 'php');
			
	if (!isConnect('admin')) {
		throw new Exception('{{401 - Accès non autorisé}}');
	}

	if (init('Jeeid') == '') {
		throw new Exception(__('L\'id ne peut etre vide', __FILE__));
	}
	$worxLandroid = worxLandroid::byId(init('Jeeid'));
	if (!is_object($worxLandroid)) {
		throw new Exception(__('L\'équipement est introuvable : ', __FILE__) . init('Jeeid'));
	}
	if ($worxLandroid->getEqType_name() != 'worxLandroid') {
		throw new Exception(__('Cet équipement n\'est pas de type worxLandroid : ', __FILE__) . $worxLandroid->getEqType_name());
	}
	
	$ip = $worxLandroid->getConfiguration('addressip');
	$user = $worxLandroid->getConfiguration('user','admin');
	$pin = $worxLandroid->getConfiguration('pincode');
	$landroidURL = "http://{$user}:{$pin}@{$ip}/";

	$scheme = ( (! empty($_SERVER['REQUEST_SCHEME']) && $_SERVER['REQUEST_SCHEME'] == 'https') || (! empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (! empty($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443') )  ? 'https' : 'http';
	
	$proxypath = $scheme.'://'.$_SERVER['HTTP_HOST'].'/plugins/worxLandroid/proxy/'.init('Jeeid').'/';
	$url= $landroidURL.$_GET['Jeeq'].'?'.$_SERVER["QUERY_STRING"];

	include('vx_curl.class.php');
	$curl = new vx_curl();
	$curl->exec($url);
	if ($curl->headers['http_code'] != 0) //0=server introuvable par ex
	{
		//repost header
		foreach($curl->rawheaders as $header)
		{
			header(trim($header));
		}
		
		//redirect or output
		if(isset($curl->headers['location']))
		{
			header("Location: {$proxypath}".ltrim($curl->headers['location'],'/'), true, 302);
		}else{
			$content = $curl->content;
			$content = str_replace('<head>', '<head><base href="'.$proxypath.'">',$content);
			echo $content;
		}
		exit;
	}

	error_log("File does not exist: {$url}", 4); //for fail2ban
	header('HTTP/1.0 404 Not Found',true);
	exit;
