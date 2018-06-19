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

if (!isConnect('admin')) {
    throw new Exception('{{401 - Accès non autorisé}}');
}

if (init('id') == '') {
	throw new Exception(__('L\'id ne peut etre vide', __FILE__));
}
$fullyKiosK = fullyKiosK::byId(init('id'));
if (!is_object($fullyKiosK)) {
	throw new Exception(__('L\'équipement est introuvable : ', __FILE__) . init('id'));
}
if ($fullyKiosK->getEqType_name() != 'fullyKiosK') {
	throw new Exception(__('Cet équipement n\'est pas de type fullyKiosK : ', __FILE__) . $fullyKiosK->getEqType_name());
}
$ip = $fullyKiosK->getConfiguration('addressip');
$password = $fullyKiosK->getConfiguration('password');

if($_SERVER['SERVER_NAME'] == config::byKey('externalAddr'))
	$url ='/plugins/fullyKiosK/proxy/'.init('id').'/'; // external -> proxy -> tablette
else
	$url = "http://{$ip}:2323/?cmd=deviceInfo&password={password}"; //local -> direct to tablet

?>
<iframe src="<?php echo $url?>" style="width:325px; margin:auto;display: block;height: 100%;"></iframe>
