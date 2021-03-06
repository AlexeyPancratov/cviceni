<?php

/**
 * This file is part of the Nette Framework (http://nette.org)
 * Copyright (c) 2004 David Grudl (http://davidgrudl.com)
 */

namespace Nette\Security;


/**
 * Represents resource, an object to which access is controlled.
 */
interface IResource
{

	/**
	 * Returns a string identifier of the Resource.
	 * @return string
	 */
	function getResourceId();

}
