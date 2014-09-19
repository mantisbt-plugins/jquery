<?php
# Copyright (C) 2009 - 2012  John Reese, LeetCode.net
# Copyright (C) 2012 - 2014  MantisBT Team - mantisbt-dev@lists.sourceforge.net
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
		$this->description = 'Provides access to the jQuery library in a single dependency.';

		$this->version = '1.11.1';
		$this->requires = array(
			# Plugin not needed with 1.3 (jQuery is bundled)
			'MantisCore' => '1.2.0, < 1.3',
		);

		$this->author	= 'John Reese and MantisBT Team';
		$this->contact	= 'mantisbt-dev@lists.sourceforge.net';
		$this->url		= 'https://github.com/mantisbt-plugins/jquery';
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
		return '<script type="text/javascript" src="' . plugin_file( 'jquery-min.js' ) . '"></script>'.
			'<script type="text/javascript">jQuery.noConflict();</script>';
	}
}
