<?php

class Template{
	/**
	 * Variable to store the template information
	 * @var string
	 */
  protected $content;
  /**
   * [__construct description]
   * @author KBRmedia <https://gempixel.com>
   * @version 1.0
   */
  public function __construct(){} 

  /**
   * Open the template file
   * @author KBRmedia <https://gempixel.com>
   * @version 1.0
   * @param   string $name file name
   */
  public function file($name){
     if(!file_exists($name)) die("Template file is not reachable.");
     $this->content = file_get_contents($name);
   }

  /**
   * Render file and empty memory
   * @author KBRmedia <https://gempixel.com>
   * @version 1.0
   */
  public function render(){
    echo $this->content;
    $this->content = "";
  }

  /**
   * [Assign a value to a template variable
   * @author KBRmedia <https://gempixel.com>
   * @version 1.0
   * @param   string $var template variable
   * @param   string $val assigne a value
   */
  public function assign($var,$val){
     $this->content = str_replace('{'.$var.'}', $val, $this->content);
  }
}
