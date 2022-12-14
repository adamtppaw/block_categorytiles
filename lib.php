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
 * Main Lib file.
 *
 * @package    block_categorytiles
 * @copyright  2022 Adam Pawełczak
 * @credits    N&N Group Solutions
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/* THEME_fordson BUILDING NOTES
 * =============================
 * Lib functions have been split into separate files, which are called
 * from this central file. This is to aid ongoing development as I find
 * it easier to work with multiple smaller function-specific files than
 * with a single monolithic lib file. This may be a personal preference
 * and it would be quite feasible to bring all lib functions back into
 * a single central file if another developer prefered to work in that way.
 */

defined('MOODLE_INTERNAL') || die();

function block_categorytiles_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {

    require_once("$CFG->libdir/filelib.php");
    $config = get_config('block_categorytiles');

    if ($context->contextlevel == CONTEXT_SYSTEM &&
            (preg_match('/categorytile[1-9]image/', $filearea) || $filearea === 'categorytile10image')) {
        $syscontext = context_system::instance();
        $component = 'block_' . $this->name;

        $revision = array_shift($args);
        if ($revision < 0) {
            $lifetime = 0;
        } else {
            $lifetime = 60 * 60 * 24 * 60;
            // By default, theme files must be cache-able by both browsers and proxies.
            if (!array_key_exists('cacheability', $options)) {
                $options['cacheability'] = 'public';
            }
        }

        $fs = get_file_storage();
        $relativepath = implode('/', $args);

        $fullpath = "/{$syscontext->id}/{$component}/{$filearea}/0/{$relativepath}";
        $fullpath = rtrim($fullpath, '/');
        if ($file = $fs->get_file_by_hash(sha1($fullpath))) {
            send_stored_file($file, $lifetime, 0, $forcedownload, $options);
            return true;
        } else {
            send_file_not_found();
        }
    }
}