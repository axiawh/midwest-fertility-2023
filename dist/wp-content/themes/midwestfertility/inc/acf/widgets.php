<?php

class Catalyst_Widget_Logic 
{
    function __construct() 
    {
    	add_filter('dynamic_sidebar_params', [$this, 'widget_logic']);
	}

    public function widget_logic($params) 
    {
    	// get widget vars
		// $widget_name = $params[0]['widget_name'];
		$widget_id = $params[0]['widget_id'];
		$bHideWidget= true;

		$strWidgetVisibility= get_field('widget_visibility', 'widget_' . $widget_id);
		if($strWidgetVisibility === 'all')
		{
			$bHideWidget= false;
		}
		else if($strWidgetVisibility === 'all_but')
		{
			$strPageIDs= get_field('pageids_hide', 'widget_' . $widget_id);
			$bHideWidget= $this->should_hide_widget($strPageIDs, true);
		}
		else if($strWidgetVisibility === 'only')
		{
			$strPageIDs= get_field('pageids_show', 'widget_' . $widget_id);
			$bHideWidget= $this->should_hide_widget($strPageIDs, false);
		}

		// Hide the widget
		if($bHideWidget)
		{
			$params[0]['before_widget']= "<div style='display:none;'>"; 
			$params[0]['after_widget']= "</div>";
		}

		return $params;
    }

    public function should_hide_widget($strPageIDs, $bToHide)
	{
		if($strPageIDs) 
		{	
			// Remove any spaces from string.
			$strPageIDs= str_replace(" ", "", $strPageIDs);

			// Turn string of page ids into array of page ids.
			$aPageIDs= explode(",", $strPageIDs);

			if(count($aPageIDs) > 0)
			{
				$nCurrentPageID= get_the_ID();
				foreach($aPageIDs as $pageID)
				{
					if($nCurrentPageID == (int)$pageID)
					{
						return $bToHide;
					}
				}
			}
		}
		return !$bToHide;
	}
}
$pCatalyst_Widget_Logic= new Catalyst_Widget_Logic();
?>