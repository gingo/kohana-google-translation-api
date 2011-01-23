<?php defined('SYSPATH') or die('No direct script access.');

require_once Kohana::find_file('vendor', 'GoogleTranslate');

/**
* Kohana Google Translation API - Google Translation API module for Kohana.
* Copyright (C) 2010 Vladislav Gingo Skoumal
*
* Kohana Google Translation API is free software; you can redistribute it and/or
* modify it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
* (at your option) any later version.
*
* Kohana Google Translation API is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with Kohana Google Translation API; if not, write to the Free Software
* Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*
* @category Kohana Google Translation API
* @package Kohana Google Translation API
* @author Vladislav Gingo Skoumal
* @copyright 2011 Vladislav Gingo Skoumal
*/

/**
 * Google Translation API wrapper module.
 * Documentation http://www.codediesel.com/php/google-translation-php-wrapper/.
 * @author Vladislav Gingo Skoumal
 * @version 0.0.0.1
 */
class GTApi extends GoogleTranslateWrapper
{	
	/**
	 * GTAPI constructor.
	 */
	public function __construct()
	{		
		$this->_gtwrapper = new GoogleTranslateWrapper();
		$configuration = Kohana::config('gtapi');
		if($configuration->referer_url)
		{
			$this->setReferrer($configuration->referer_url);
		}
		if($configuration->api_key && $configuration->ip)
		{
			$this->setCredentials($configuration->api_key, $configuration->ip);	
		}
	}	
}


