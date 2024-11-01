<?php
/*
Plugin Name: TheCartPress, Australian States
Plugin URI: http://thecartpress.com
Description: Adds the Australian States to TheCartPress
Version: 1.0.0
Author: TheCartPress team
Author URI: http://thecartpress.com
License: GPL
Parent: thecartpress
*/

/**
 * This file is part of TheCartPress-Australian-State.
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

class TCPAustralianStates {

	function __construct() {
		add_action( 'tcp_states_loading', array( $this, 'tcp_states_loading'	) );
	}

	function tcp_states_loading() { ?>
,'AU': { //Australia
	'NSW' : 'New South Wales', 'QLD' : 'Queensland', 'SA' : 'South Australia', 'TAS' : 'Tasmania', 'VIC' : 'Victoria', 'WA' : 'Western Australia', 'ACT' : 'Australian Capital Territory', 'NT' : 'Northern Territory'
} <?php
	}
}

new TCPAustralianStates();
?>
