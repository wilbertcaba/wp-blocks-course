<?php

/**
 * Plugin Name: First Block
 * Plugin URI: http://wilbertcaba.com/
 * Description: A plugin to add a custom block to the Gutenberg editor.
 * Version: 1.0
 * Author: Wilbert Caba
 * Author URI: http://wilbertcaba.com/
 */

 function blocks_course_firstblock_init() {
    register_block_type_from_metadata( __DIR__ );
 };

 add_action("init", "blocks_course_firstblock_init");