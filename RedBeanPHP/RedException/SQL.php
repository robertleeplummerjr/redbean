<?php

namespace RedBeanPHP\RedException;

/**
 * SQL Exception.
 * Represents a generic database exception independent of the underlying driver.
 *
 * @file       RedBeanPHP/RedException/SQL.php
 * @author     Gabor de Mooij and the RedBeanPHP Community
 * @license    BSD/GPLv2
 *
 * @copyright
 * (c) copyright G.J.G.T. (Gabor) de Mooij and the RedBeanPHP Community.
 * This source file is subject to the BSD/GPLv2 License that is bundled
 * with this source code in the file license.txt.
 */
class SQL extends Base
{
	/**
	 * @var string
	 */
	private $sqlState;

	/**
	 * Returns an ANSI-92 compliant SQL state.
	 *
	 * @return string $state ANSI state code
	 */
	public function getSQLState()
	{
		return $this->sqlState;
	}

	/**
	 * @todo parse state to verify valid ANSI92!
	 *       Stores ANSI-92 compliant SQL state.
	 *
	 * @param string $sqlState code
	 *
	 * @return void
	 */
	public function setSQLState( $sqlState )
	{
		$this->sqlState = $sqlState;
	}

	/**
	 * To String prints both code and SQL state.
	 *
	 * @return string $message prints this exception instance as a string
	 */
	public function __toString()
	{
		return '[' . $this->getSQLState() . '] - ' . $this->getMessage()."\n".
				'trace: ' . $this->getTraceAsString();
	}
}
