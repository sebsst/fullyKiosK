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

function fullyKiosK_install() {
  

}

function fullyKiosK_update() {

      foreach (eqLogic::byType('fullyKiosK', false) as $eqpt) {
        if( $eqpt->getConfiguration('refreshDelay','') == '')
        { $eqpt->setConfiguration('refreshDelay', '15');
          $eqpt->save();
        }
      // add actions if missing
         worxLandroidS::newAction($eqpt,'off_today',$commandIn,"off_today",'other');
         worxLandroidS::newAction($eqpt,'on_today',$commandIn,"on_today",'other');
         worxLandroidS::newAction($eqpt,'rain_delay_0',$commandIn,"0",'other');
         worxLandroidS::newAction($eqpt,'rain_delay_30',$commandIn,"30",'other');
         worxLandroidS::newAction($eqpt,'rain_delay_60',$commandIn,"60",'other');
         worxLandroidS::newAction($eqpt,'rain_delay_120',$commandIn,"120",'other');
         worxLandroidS::newAction($eqpt,'rain_delay_240',$commandIn,"240",'other');
 
    }
  
}


function fullyKiosK_remove() {

}

?>
