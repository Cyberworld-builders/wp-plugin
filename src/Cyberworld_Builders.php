<?php

namespace CyberworldBuilders;

class Cyberworld_Builders {

  public function __construct(){
		register_activation_hook( CYBERBUILDERS_PATH.'/'.CYBERBUILDERS_FILE, array($this, 'plugin_activated'));
    register_deactivation_hook( CYBERBUILDERS__PATH.'/'.CYBERBUILDERS_FILE, array($this, 'plugin_deactivated'));
    $this->_init();
	}

	public function plugin_activated(){

	}

	public function plugin_deactivated(){

	}

	protected function _init(){


	}

}
