<?php
/**
 * @package     Joomla.Services
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

class ComponentContentArticlesListGet extends ApiControllerList
{
	/**
	 * Constructor.
	 *
	 * @param   JInput            $input  The input object.
	 * @param   JApplicationBase  $app    The application object.
	 */
	public function __construct(JInput $input = null, JApplicationBase $app = null)
	{
		parent::__construct($input, $app);

		// Use the default database.
		$this->setDatabase();

		// Set the controller options.
		$serviceOptions = array(
			'contentType' => 'application/vnd.joomla.list.v1',
			'describedBy' => 'http://docs.joomla.org/Schemas/articles/v1',
			'embeddedMap' => __DIR__ . '/embedded.json',
			'primaryRel'  => 'joomla:articles',
			'resourceMap' => realpath(__DIR__ . '/../resource.json'),
			'self'		  => '/joomla:articles',
			'tableName'   => '#__content',
		);

		$this->setOptions($serviceOptions);
	}

}
