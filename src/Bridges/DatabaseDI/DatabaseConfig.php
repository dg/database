<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\Bridges\DatabaseDI;

use Nette\DI\Definitions\DynamicParameter;


/**
 * @internal
 */
final class DatabaseConfig
{
	/** @var string|DynamicParameter */
	public $dsn;

	/** @var ?string|DynamicParameter */
	public $user;

	/** @var ?string|DynamicParameter */
	public $password;

	/** @var array */
	public $options = [];

	/** @var bool */
	public $debugger = true;

	/** @var bool */
	public $explain = true;

	/** @var ?string */
	public $reflection;

	/** @var string */
	public $conventions = 'discovered';

	/** @var ?bool */
	public $autowired;
}
