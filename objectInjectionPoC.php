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

class ObjectInjection
{

  private $cmd = NULL;
  private $fcn = NULL;

  function __construct($fcn, $cmd) {
    $this->fcn = $fcn;
    $this->cmd = $cmd;
  }

  function __wakeup() {
    if(!is_null($this->cmd) and !is_null($this->fcn)) {
      ($this->fcn)($this->cmd);
    }
  }

};
