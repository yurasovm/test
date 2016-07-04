<?php namespace Diz\Photos;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
      return [
        '\Diz\Photos\Components\Photos'=>'Photos',
      ];
    }

    public function registerSettings()
    {
    }
}
