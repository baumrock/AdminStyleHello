# Admin Style Hello

Demo module to show how to create admin style modules for ProcessWire

## QuickStart

The simplest admin style module you can get looks like this:

```php
<?php

namespace ProcessWire;

// load the AdminStyle trait
require_once $this->wire->config->paths->siteModules . "Less/AdminStyle.php";
class AdminStyleHello extends WireData implements Module
{
  // use the AdminStyle trait
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
```

And a simple less file could look like this:

```less
// load the base style
// you could also use reno theme as base for your admin style
@import "../../../../wire/modules/AdminTheme/AdminThemeUikit/uikit-pw/styles/rock.less";

// import google font
// note: check if that conflicts with GDPR in your country
@import (css)
  url("https://fonts.googleapis.com/css2?family=Caveat&display=swap");

// adjust rock and uikit variables
@rock-primary: blue;
@global-font-family: "Caveat";
```

<img src=https://i.imgur.com/dDHqiDS.png height=600>

## Advanced

For more advanced concepts see [AdminStyleRock](https://github.com/baumrock/AdminStyleRock)
