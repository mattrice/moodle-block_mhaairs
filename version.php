<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Block MHAAIRS version
 *
 * @package    block
 * @subpackage mhaairs
 * @copyright  2013-2014 Moodlerooms inc.
 * @author     Teresa Hardy <thardy@moodlerooms.com>
 * @author     Darko Miletic <dmiletic@moodlerooms.com>
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version = 2013120202;
$plugin->requires = 2010112400;
$plugin->cron      = 0;
$plugin->component = 'block_mhaairs';
$plugin->maturity  = MATURITY_STABLE;
$plugin->release   = '4.01 (2013120201)';
