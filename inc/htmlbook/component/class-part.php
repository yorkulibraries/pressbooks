<?php

namespace Pressbooks\HTMLBook\Component;

/**
 * Based on HTMLBook (Unofficial Draft 16 February 2016)
 *
 * HTML element: <div>
 *
 * Attribute requirements: data-type="part"
 *
 * Content model: First child must be either <h1> that contains part title, or Header block that contains part title and
 * optional subtitle content; then zero or more Block Elements that compose the optional Part introduction; then one
 * or more <section> elements representing Book Component children other than a Part
 *
 * Example
 *
 *     <div data-type="part">
 *       <h1>Part One: Introduction to Backbone.js</h1>
 *       <p>Part Introduction...</p>
 *       <section data-type="chapter">
 *         <!-- Chapter content here -->
 *       </section>
 *     </div>
 *
 * @see http://oreillymedia.github.io/HTMLBook/#_part
 */
class Part {

	/**
	 * @var string
	 */
	protected $tag = 'div';

	/**
	 * @var bool
	 */
	protected $dataTypeRequired = true;

	/**
	 * @var array
	 */
	protected $dataTypes = [
		'part',
	];

}