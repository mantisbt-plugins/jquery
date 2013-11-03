<?php
# Copyright (C) 2009 John Reese, LeetCode.net
#
# This program is free software: you can redistribute it and/or modify
# it under the terms of the GNU Affero General Public License as published by
# the Free Software Foundation, either version 3 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU Affero General Public License for more details.


/**
 * Provides access to the jQuery library as a MantisBT plugin.
 */
class jQueryPlugin extends MantisPlugin {

	function register() {
		$this->name = 'jQuery Library';
		$this->description = 'Provides access to the jQuery and jQuery UI library in a single dependency.';

		$this->version = '1.9.1';
		$this->requires = array(
			'MantisCore' => '1.2.0',
		);

		$this->author	= 'John Reese';
		$this->contact	= 'jreese@leetcode.net';
		$this->url	= 'https://github.com/tkalbitz/jquery';
	}

	function hooks() {
		return array(
			'EVENT_LAYOUT_RESOURCES' => 'resources',
		);
	}

	/**
	 * Create the resource link to load the jQuery library.
	 */
	function resources( $p_event ) {
                return  '<link rel="Stylesheet" type="text/css" href="' . plugin_file( 'jquery-ui/css/ui-lightness/jquery-ui-min.css') . '" />' .
                        '<script type="text/javascript" src="' . plugin_file( 'jquery-ui/js/jquery-min.js' ) . '"></script>'.
                        '<script type="text/javascript">jQuery.noConflict();</script>' .
                        '<script type="text/javascript" src="' . plugin_file( 'jquery-ui/js/jquery-ui-min.js' ) . '"></script>';
	}
}

