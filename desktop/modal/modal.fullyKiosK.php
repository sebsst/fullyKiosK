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
$worxLandroid = worxLandroid::byId(init('id'));
if (!is_object($worxLandroid)) {
	throw new Exception(__('L\'équipement est introuvable : ', __FILE__) . init('id'));
}
if ($worxLandroid->getEqType_name() != 'worxLandroid') {
	throw new Exception(__('Cet équipement n\'est pas de type worxLandroid : ', __FILE__) . $worxLandroid->getEqType_name());
}
$ip = $worxLandroid->getConfiguration('addressip');
$user = $worxLandroid->getConfiguration('user','admin');
$pin = $worxLandroid->getConfiguration('pincode');

if($_SERVER['SERVER_NAME'] == config::byKey('externalAddr'))
	$url ='/plugins/worxLandroid/proxy/'.init('id').'/'; // external -> proxy -> mower
else
	$url = "http://{$user}:{$pin}@{$ip}"; //local -> direct to mower

?>
<iframe src="<?php echo $url?>" style="width:325px; margin:auto;display: block;height: 100%;"></iframe>

