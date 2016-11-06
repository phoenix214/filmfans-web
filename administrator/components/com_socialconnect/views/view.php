<?php
/**
 * @version		$Id: view.php 2437 2013-01-29 14:14:53Z lefteris.kavadas $
 * @package		SocialConnect
 * @author		JoomlaWorks http://www.joomlaworks.net
 * @copyright	Copyright (c) 2006 - 2013 JoomlaWorks Ltd. All rights reserved.
 * @license		http://www.joomlaworks.net/license
 */

// no direct access
defined('_JEXEC') or die ;

if (version_compare(JVERSION, '3.0', 'ge'))
{
	jimport('legacy.view.legacy');
	class SocialConnectView extends JViewLegacy
	{
	}

}
else
{
	jimport('joomla.application.component.view');
	class SocialConnectView extends JView
	{
	}

}
