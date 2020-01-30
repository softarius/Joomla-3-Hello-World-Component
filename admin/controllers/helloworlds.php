<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * HelloWorlds Controller
 *
 * @since  0.0.1
 */
class HelloWorldControllerHelloWorlds extends JControllerAdmin
{
	/**
	 * Proxy for getModel.
	 *
	 * @param   string  $name    The model name. Optional.
	 * @param   string  $prefix  The class prefix. Optional.
	 * @param   array   $config  Configuration array for model. Optional.
	 *
	 * @return  object  The model.
	 *
	 * @since   1.6
	 */
	public function getModel($name = 'HelloWorld', $prefix = 'HelloWorldModel', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);

		return $model;
	}

	function important()
	{
		$cid = $this->input->get('cid', array(), 'array');
        foreach($cid as $c)
        {
           $this->getModel()->important($c,1);
        }
		$this->setRedirect(\JRoute::_('index.php?option=' . $this->option . '&view=' . $this->view_list, false));
	}

	function unimportant()
	{
		$cid = $this->input->get('cid', array(), 'array');
        foreach($cid as $c)
        {
           $this->getModel()->important($c,0);
        }
		$this->setRedirect(\JRoute::_('index.php?option=' . $this->option . '&view=' . $this->view_list, false));

	}
}
