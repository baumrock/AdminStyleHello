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
      'version' => '0.0.2',
      'summary' => 'Hello World AdminStyle Module',
      'autoload' => true,
      'singular' => true,
      'icon' => 'smile-o',
      'requires' => [
        'ProcessWire>=3.0.178',
        'Less>=4',
      ],
    ];
  }

  public function ready()
  {
    $this->loadStyle(__DIR__ . "/style/hello.less");
  }
}
