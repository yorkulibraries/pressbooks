<?php

namespace Pressbooks\HTMLBook\Inline;

/**
 * Based on HTMLBook (Unofficial Draft 16 February 2016)
 *
 * HTML element: <code>
 *
 * Example:
 *
 *     <p>Enter <code>echo "Hello World"</code> on the command line</p>
 *
 * @see http://oreillymedia.github.io/HTMLBook/#_literal_for_inline_code_elements_variables_functions_etc
 */
class Literal {

	/**
	 * @var string
	 */
	protected $tag = 'code';

	/**
	 * @var bool
	 */
	protected $dataTypeRequired = false;

	/**
	 * @var array
	 */
	protected $dataTypes = [];

}