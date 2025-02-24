<?php
// This file is generated. Do not modify it manually.
return array(
	'column' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'jcore/column',
		'version' => '0.1.0',
		'title' => 'Jcore Column',
		'category' => 'widgets',
		'icon' => 'editor-justify',
		'description' => 'Jcore Column',
		'attributes' => array(
			'span' => array(
				'type' => 'number',
				'default' => 1
			),
			'useBreakpoints' => array(
				'type' => 'boolean',
				'default' => false
			),
			'breakpoints' => array(
				'type' => 'object',
				'default' => array(
					'xs' => 1,
					'md' => 2
				)
			)
		),
		'example' => array(
			
		),
		'supports' => array(
			'html' => false,
			'background' => array(
				'backgroundImage' => true,
				'backgroundSize' => true
			),
			'spacing' => array(
				'margin' => true,
				'padding' => true
			),
			'color' => array(
				'background' => true,
				'text' => false
			)
		),
		'parent' => array(
			'jcore/grid'
		),
		'textdomain' => 'jcore-grid',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css'
	),
	'grid' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'jcore/grid',
		'version' => '0.1.0',
		'title' => 'Jcore Grid',
		'category' => 'widgets',
		'icon' => 'grid-view',
		'description' => 'Jcore Grid',
		'attributes' => array(
			'blockType' => array(
				'type' => 'string',
				'default' => 'grid'
			),
			'autoSize' => array(
				'type' => 'boolean',
				'default' => true
			),
			'minSize' => array(
				'type' => 'string',
				'default' => ''
			),
			'breakpoints' => array(
				'type' => 'object',
				'default' => array(
					'xs' => 1,
					'md' => 2
				)
			),
			'preview' => array(
				'type' => 'boolean',
				'default' => false
			)
		),
		'example' => array(
			
		),
		'supports' => array(
			'align' => array(
				'wide',
				'full'
			),
			'background' => array(
				'backgroundImage' => true,
				'backgroundSize' => true
			),
			'spacing' => array(
				'margin' => true,
				'padding' => true
			),
			'color' => array(
				'background' => true,
				'text' => false
			),
			'html' => false
		),
		'textdomain' => 'jcore-grid',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css'
	)
);
