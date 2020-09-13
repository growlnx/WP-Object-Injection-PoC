<?php

/**
 * @package WP-Object-Injection-PoC
 * @version 1.0
 */

/*
Plugin Name: WP Object Injection Proof of Concept
Plugin URI: https://github.com/growlnx/WP-Object-Injection-PoC
Description: This is a simple plugin to make PoC of PHP Object Injection in Wordpress.
Author: Growlnx
Version: 1.0
Author URI: https://github.com/growlnx/
*/

class OI
{

  function __construct($fcn = "system", $cmd = "id") {
    $this->fcn = $fcn;
    $this->cmd = $cmd;
  }

  function __wakeup() {
    if(!empty($this->cmd) and !empty($this->fcn)) {
      ($this->fcn)($this->cmd);
    }
  }

};
