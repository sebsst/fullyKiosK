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
if (!isConnect()) {
    include_file('desktop', '404', 'php');
    die();
}
?>
<form class="form-horizontal">
<div class="panel panel-info" style="height: 100%;">
	<div class="panel-heading" role="tab">
		<h4 class="panel-title">
			Plugin worxLandroid
		</h4>
	</div>
	<div class="form-group">
		<br>
		<label class="col-sm-4 control-label">{{Configuration}} :</label>
		<div class="col-lg-4">
			<a class="btn btn-info" href=/index.php?v=d&m=worxLandroid&p=worxLandroid> {{Accès à la configuration}}</a>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label">{{Information sur le plugin}} :</label>
		<div class="col-lg-8">
			{{Ce plugin est gratuit pour que chacun puisse en profiter simplement.}}<br>
			{{il a ete testé avec le modele WG791E.1 firmware 2.47 et 2.61}}<br>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label">{{Source}} :</label>
		<div class="col-lg-8">
			{{Ce plugin a été développé avec l'aide de l'analyse du serveur web embarqué}}<br>
			{{ainsi que du projet worx-landroid-nodejs de mjiderhamn}}
		</div>
	</div>
</div>
</form>

