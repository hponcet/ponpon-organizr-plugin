<?php
// PLUGIN INFORMATION
$GLOBALS['plugins']['ponponmenu'] = array( // Plugin Name
	'name' => 'Ponpon Menu', // Plugin Name
	'author' => 'hponcet', // Who wrote the plugin
	'category' => 'Interface', // One to Two Word Description
	'link' => '', // Link to plugin info
	'license' => 'personal', // License Type use , for multiple
	'idPrefix' => 'PONPONMENU', // html element id prefix (All Uppercase)
	'configPrefix' => 'PONPONMENU', // config file prefix for array items without the hypen (All Uppercase)
	'version' => '1.0.0', // SemVer of plugin
	'image' => 'data/plugins/test/logo.png', // 1:1 non transparent image for plugin
	'settings' => false, // does plugin need a settings modal?
	'bind' => true, // use default bind to make settings page - true or false
	'api' => 'api/v2/plugins/test/settings', // api route for settings page (All Lowercase)
	'homepage' => false // Is plugin for use on homepage? true or false
);

class TestPlugin extends Organizr
{
}
