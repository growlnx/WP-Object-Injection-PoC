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

  private $cmd = "";
  private $fcn = "";

  function notEmptyArgs() {
    if($this->cmd != "" and $this->fcn != "") {
      return true;
    }
    return false;
  }

  function __construct($fcn, $cmd) {
    $this->fcn = $fcn;
    $this->cmd = $cmd;
  }

  function __destruct() {
    if($this->notEmptyArgs()) {
      ($this->fcn)($this->cmd);
    }
  }

  function __wakeup() {
    if($this->notEmptyArgs()) {
      ($this->fcn)($this->cmd);
    }
  }

};
