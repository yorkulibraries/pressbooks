<?php

namespace Pressbooks\HTMLBook\Component;

/**
 * Based on HTMLBook (Unofficial Draft 16 February 2016)
 *
 * HTML element: <section>
 *
 * Attribute requirements: `data-type="colophon"`, `data-type="acknowledgments"`, `data-type="afterword"`, or
 * `data-type="conclusion"`, depending on content
 *
 * Content model: First child must be either <h1> that contains backmatter section title, or Header block that contains backmatter title and optional subtitle content; then zero or more Block Elements; then zero or more Sect1 children (<section data-type="sect1">)
 *
 * Example
 *
 *     <section data-type="colophon">
 *       <h1>Colophon Title</h1>
 *       <p>Colophon content</p>
 *       <section data-type="sect1">
 *         <!-- Section content here... -->
 *       </section>
 *     </section>
 *
 * @see http://oreillymedia.github.io/HTMLBook/#_backmatter
 */
class Backmatter {

	/**
	 * @var string
	 */
	protected $tag = 'section';

	/**
	 * @var bool
	 */
	protected $dataTypeRequired = true;

	/**
	 * @var array
	 */
	protected $dataTypes = [
		'colophon',
		'acknowledgments',
		'afterword',
		'conclusion',
	];

}