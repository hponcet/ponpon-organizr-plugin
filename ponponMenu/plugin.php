<?php
// PLUGIN INFORMATION
$GLOBALS['plugins']['Ponpon'] = array( // Plugin Name
	'name' => 'Ponpon', // Plugin Name
	'author' => 'ponpon', // Who wrote the plugin
	'category' => 'Interface', // One to Two Word Description
	'link' => '', // Link to plugin info
	'license' => 'personal', // License Type use , for multiple
	'idPrefix' => 'PONPON', // html element id prefix (All Uppercase)
	'configPrefix' => 'PONPON', // config file prefix for array items without the hypen (All Uppercase)
	'version' => '1.0.0', // SemVer of plugin
	'image' => '', // 1:1 non transparent image for plugin
	'settings' => false, // does plugin need a settings modal?
	'bind' => false, // use default bind to make settings page - true or false
	'api' => 'api/v2/plugins/test/settings', // api route for settings page (All Lowercase)
	'homepage' => false // Is plugin for use on homepage? true or false
);

class TestPlugin extends Organizr
{
	public function _pluginGetSettings()
	{
		return [
			'Sample Settings' => [
				$this->settingsOption('html', 'HTML Note', ['html' => '<span lang="en">This is just a note</span>']),
			],
			'FYI' => [
				$this->settingsOption('html', 'HTML Note', ['html' => '<span lang="en">This is just a note</span>']),
			]
		];
	}
}