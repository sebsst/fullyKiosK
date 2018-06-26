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
          fullyKiosK->setConfiguration('functionality::cron15::enable', '1');
        }
        fullyKiosK->setConfiguration('functionality::cron5::enable','');
        fullyKiosK->setConfiguration('functionality::cron::enable','');
        fullyKiosK->setConfiguration('functionality::cronHourly::enable','');
 
    }
  
}


function fullyKiosK_remove() {

}

?>
