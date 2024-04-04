<?php
namespace Piwik\Plugins\W9999_HDDenMatomoPreventDropUTM;

use Piwik\Widget\WidgetsList;

class W9999_HDDenMatomoPreventDropUTM extends \Piwik\Plugin {

	public function registerEvents()
	{
		return array(
            'Tracker.PageUrl.getQueryParametersToExclude' => 'doNotExcludeParameters'
        );
	}

	public function doNotExcludeParameters(&$parametersToExclude)
    {
        $parametersToExclude = array();
    }

}
