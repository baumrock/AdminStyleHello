<?php

namespace ProcessWire;

/**
 * @author Bernhard Baumrock, 08.10.2022
 * @license Licensed under MIT
 * @link https://www.baumrock.com
 */

require_once $this->wire->config->paths->siteModules . "Less/AdminStyle.php";
class AdminStyleHello extends WireData implements Module
{
  use AdminStyle;

  public static function getModuleInfo()
  {
    return [
      'title' => 'AdminStyleHello',
      'version' => '0.0.1',
      'summary' => 'Hello World AdminStyle Module',
      'autoload' => true,
      'singular' => true,
      'icon' => 'smile-o',
      'requires' => [],
      'installs' => [],
    ];
  }

  public function getStyle()
  {
    return __DIR__ . "/style/hello.less";
  }
}
