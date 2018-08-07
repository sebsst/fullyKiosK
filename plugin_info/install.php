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
        
        foreach(fullyKiosK::$_actionMap as $cmdLogicalId => $params)
		    {
          
          $fullyKiosKCmd = $eqpt->getCmd('action', $cmdLogicalId);
			    if (is_object($fullyKiosKCmd)) {
            $fullyKiosKCmd->setEqLogic_id($eqpt->getId());
            $fullyKiosKCmd->setName(__($params['name'], __FILE__));
            $fullyKiosKCmd->setConfiguration('cmd', $params['cmd']);
            $fullyKiosKCmd->setConfiguration('listValue', json_encode($params['listValue']) ?: null);
            $fullyKiosKCmd->setName(__($params['name'], __FILE__));
            $fullyKiosKCmd->setDisplay('forceReturnLineBefore', $params['forceReturnLineBefore'] ?: false);
            $fullyKiosKCmd->setDisplay('message_disable', $params['message_disable'] ?: false);
            $fullyKiosKCmd->setDisplay('title_disable', $params['title_disable'] ?: false);
            $fullyKiosKCmd->setDisplay('title_placeholder', $params['title_placeholder'] ?: false);
            $fullyKiosKCmd->setDisplay('icon', $params['icon'] ?: false);				
            $fullyKiosKCmd->setDisplay('message_placeholder', $params['message_placeholder'] ?: false);

            $fullyKiosKCmd->setDisplay('title_possibility_list', json_encode($params['title_possibility_list'] ?: null));//json_encode(array("1","2"));
            $fullyKiosKCmd->setDisplay('icon', $params['icon'] ?: null);

            $fullyKiosKCmd->save();

            
          }
          
        
          
        }
        
        if( $eqpt->getConfiguration('refreshDelay', '') == '')
        { $eqpt->setConfiguration('refreshDelay', '15');
          $eqpt->save();
        
        }

 
    }
  
}


function fullyKiosK_remove() {

}

?>
