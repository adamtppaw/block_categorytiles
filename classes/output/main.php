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
 * Class containing data for category tiles block.
 *
 * @package    block_categorytile
 * @copyright  2017 Ryan Wyllie <ryan@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace block_categorytiles\output;
defined('MOODLE_INTERNAL') || die();

use renderable;
use renderer_base;
use templatable;
use stdClass;

/**
 * Class containing data for my overview block.
 *
 * @copyright  2018 Bas Brands <bas@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class main implements renderable, templatable {

    /**
     * main constructor.
     *
     * @throws \dml_exception
     */
    public function __construct() {
        global $CFG;
        // Get plugin config.
        $config = get_config('block_categorytile');
    }

    /**
     * Export this data so it can be used as the context for a mustache template.
     *
     * @param \renderer_base $output
     * @return array Context variables for the template
     * @throws \coding_exception
     *
     */
    public function export_for_template(renderer_base $output) {
        global $CFG, $PAGE, $USER, $DB;
        $hascategorytile1 =
                (empty($PAGE->theme->settings->categorytile1 )) ? false :
                        format_string($PAGE->theme->settings->categorytile1);
        $categorytile1content = (empty($PAGE->theme->settings->categorytile1content)) ? false :
                format_text($PAGE->theme->settings->categorytile1content);
        $categorytile1buttontext = (empty($PAGE->theme->settings->categorytile1buttontext)) ? false :
                format_string($PAGE->theme->settings->categorytile1buttontext);
        $categorytile1buttonurl =
                (empty($PAGE->theme->settings->categorytile1buttonurl)) ? false : $PAGE->theme->settings->categorytile1buttonurl;
        $categorytile1target =
                (empty($PAGE->theme->settings->categorytile1target)) ? false : $PAGE->theme->settings->categorytile1target;
        $categorytile1image = (empty($PAGE->theme->settings->categorytile1image)) ? false : 'categorytile1image';
        if ($hascategorytile1 == true &&
                substr($categorytile1buttonurl, 0, strlen('/course/index.php?categoryid=')) === '/course/index.php?categoryid=') {
            $category_id = str_replace('/course/index.php?categoryid=', '', $categorytile1buttonurl);
            try {
                $category = core_course_category::get($category_id);
            } catch (\Exception $e) {
                $hascategorytile1 = false;
            }
        }

        $hascategorytile2 =
                (empty($PAGE->theme->settings->categorytile2 )) ? false :
                        format_string($PAGE->theme->settings->categorytile2);
        $categorytile2content = (empty($PAGE->theme->settings->categorytile2content)) ? false :
                format_text($PAGE->theme->settings->categorytile2content);
        $categorytile2buttontext = (empty($PAGE->theme->settings->categorytile2buttontext)) ? false :
                format_string($PAGE->theme->settings->categorytile2buttontext);
        $categorytile2buttonurl =
                (empty($PAGE->theme->settings->categorytile2buttonurl)) ? false : $PAGE->theme->settings->categorytile2buttonurl;
        $categorytile2target =
                (empty($PAGE->theme->settings->categorytile2target)) ? false : $PAGE->theme->settings->categorytile2target;
        $categorytile2image = (empty($PAGE->theme->settings->categorytile2image)) ? false : 'categorytile2image';
        if ($hascategorytile2 == true &&
                substr($categorytile2buttonurl, 0, strlen('/course/index.php?categoryid=')) === '/course/index.php?categoryid=') {
            $category_id = str_replace('/course/index.php?categoryid=', '', $categorytile2buttonurl);
            try {
                $category = core_course_category::get($category_id);
            } catch (\Exception $e) {
                $hascategorytile2 = false;
            }
        }

        $hascategorytile3 =
                (empty($PAGE->theme->settings->categorytile3 )) ? false :
                        format_string($PAGE->theme->settings->categorytile3);
        $categorytile3content = (empty($PAGE->theme->settings->categorytile3content)) ? false :
                format_text($PAGE->theme->settings->categorytile3content);
        $categorytile3buttontext = (empty($PAGE->theme->settings->categorytile3buttontext)) ? false :
                format_string($PAGE->theme->settings->categorytile3buttontext);
        $categorytile3buttonurl =
                (empty($PAGE->theme->settings->categorytile3buttonurl)) ? false : $PAGE->theme->settings->categorytile3buttonurl;
        $categorytile3target =
                (empty($PAGE->theme->settings->categorytile3target)) ? false : $PAGE->theme->settings->categorytile3target;
        $categorytile3image = (empty($PAGE->theme->settings->categorytile3image)) ? false : 'categorytile3image';
        if ($hascategorytile3 == true &&
                substr($categorytile3buttonurl, 0, strlen('/course/index.php?categoryid=')) === '/course/index.php?categoryid=') {
            $category_id = str_replace('/course/index.php?categoryid=', '', $categorytile3buttonurl);
            try {
                $category = core_course_category::get($category_id);
            } catch (\Exception $e) {
                $hascategorytile3 = false;
            }
        }

        $hascategorytile4 =
                (empty($PAGE->theme->settings->categorytile4 )) ? false :
                        format_string($PAGE->theme->settings->categorytile4);
        $categorytile4content = (empty($PAGE->theme->settings->categorytile4content)) ? false :
                format_text($PAGE->theme->settings->categorytile4content);
        $categorytile4buttontext = (empty($PAGE->theme->settings->categorytile4buttontext)) ? false :
                format_string($PAGE->theme->settings->categorytile4buttontext);
        $categorytile4buttonurl =
                (empty($PAGE->theme->settings->categorytile4buttonurl)) ? false : $PAGE->theme->settings->categorytile4buttonurl;
        $categorytile4target =
                (empty($PAGE->theme->settings->categorytile4target)) ? false : $PAGE->theme->settings->categorytile4target;
        $categorytile4image = (empty($PAGE->theme->settings->categorytile4image)) ? false : 'categorytile4image';
        if ($hascategorytile4 == true &&
                substr($categorytile4buttonurl, 0, strlen('/course/index.php?categoryid=')) === '/course/index.php?categoryid=') {
            $category_id = str_replace('/course/index.php?categoryid=', '', $categorytile4buttonurl);
            try {
                $category = core_course_category::get($category_id);
            } catch (\Exception $e) {
                $hascategorytile4 = false;
            }
        }

        $hascategorytile5 =
                (empty($PAGE->theme->settings->categorytile5 )) ? false :
                        format_string($PAGE->theme->settings->categorytile5);
        $categorytile5content = (empty($PAGE->theme->settings->categorytile5content)) ? false :
                format_text($PAGE->theme->settings->categorytile5content);
        $categorytile5buttontext = (empty($PAGE->theme->settings->categorytile5buttontext)) ? false :
                format_string($PAGE->theme->settings->categorytile5buttontext);
        $categorytile5buttonurl =
                (empty($PAGE->theme->settings->categorytile5buttonurl)) ? false : $PAGE->theme->settings->categorytile5buttonurl;
        $categorytile5target =
                (empty($PAGE->theme->settings->categorytile5target)) ? false : $PAGE->theme->settings->categorytile5target;
        $categorytile5image = (empty($PAGE->theme->settings->categorytile5image)) ? false : 'categorytile5image';
        if ($hascategorytile5 == true &&
                substr($categorytile5buttonurl, 0, strlen('/course/index.php?categoryid=')) === '/course/index.php?categoryid=') {
            $category_id = str_replace('/course/index.php?categoryid=', '', $categorytile5buttonurl);
            try {
                $category = core_course_category::get($category_id);
            } catch (\Exception $e) {
                $hascategorytile5 = false;
            }
        }

        $hascategorytile6 =
                (empty($PAGE->theme->settings->categorytile6 )) ? false :
                        format_string($PAGE->theme->settings->categorytile6);
        $categorytile6content = (empty($PAGE->theme->settings->categorytile6content)) ? false :
                format_text($PAGE->theme->settings->categorytile6content);
        $categorytile6buttontext = (empty($PAGE->theme->settings->categorytile6buttontext)) ? false :
                format_string($PAGE->theme->settings->categorytile6buttontext);
        $categorytile6buttonurl =
                (empty($PAGE->theme->settings->categorytile6buttonurl)) ? false : $PAGE->theme->settings->categorytile6buttonurl;
        $categorytile6target =
                (empty($PAGE->theme->settings->categorytile6target)) ? false : $PAGE->theme->settings->categorytile6target;
        $categorytile6image = (empty($PAGE->theme->settings->categorytile6image)) ? false : 'categorytile6image';
        if ($hascategorytile6 == true &&
                substr($categorytile6buttonurl, 0, strlen('/course/index.php?categoryid=')) === '/course/index.php?categoryid=') {
            $category_id = str_replace('/course/index.php?categoryid=', '', $categorytile6buttonurl);
            try {
                $category = core_course_category::get($category_id);
            } catch (\Exception $e) {
                $hascategorytile6 = false;
            }
        }

        $hascategorytile7 =
                (empty($PAGE->theme->settings->categorytile7 )) ? false :
                        format_string($PAGE->theme->settings->categorytile7);
        $categorytile7content = (empty($PAGE->theme->settings->categorytile7content)) ? false :
                format_text($PAGE->theme->settings->categorytile7content);
        $categorytile7buttontext = (empty($PAGE->theme->settings->categorytile7buttontext)) ? false :
                format_string($PAGE->theme->settings->categorytile7buttontext);
        $categorytile7buttonurl =
                (empty($PAGE->theme->settings->categorytile7buttonurl)) ? false : $PAGE->theme->settings->categorytile7buttonurl;
        $categorytile7target =
                (empty($PAGE->theme->settings->categorytile7target)) ? false : $PAGE->theme->settings->categorytile7target;
        $categorytile7image = (empty($PAGE->theme->settings->categorytile7image)) ? false : 'categorytile7image';
        if ($hascategorytile7 == true &&
                substr($categorytile7buttonurl, 0, strlen('/course/index.php?categoryid=')) === '/course/index.php?categoryid=') {
            $category_id = str_replace('/course/index.php?categoryid=', '', $categorytile7buttonurl);
            try {
                $category = core_course_category::get($category_id);
            } catch (\Exception $e) {
                $hascategorytile7 = false;
            }
        }

        $hascategorytile8 =
                (empty($PAGE->theme->settings->categorytile8 )) ? false :
                        format_string($PAGE->theme->settings->categorytile8);
        $categorytile8content = (empty($PAGE->theme->settings->categorytile8content)) ? false :
                format_text($PAGE->theme->settings->categorytile8content);
        $categorytile8buttontext = (empty($PAGE->theme->settings->categorytile8buttontext)) ? false :
                format_string($PAGE->theme->settings->categorytile8buttontext);
        $categorytile8buttonurl =
                (empty($PAGE->theme->settings->categorytile8buttonurl)) ? false : $PAGE->theme->settings->categorytile8buttonurl;
        $categorytile8target =
                (empty($PAGE->theme->settings->categorytile8target)) ? false : $PAGE->theme->settings->categorytile8target;
        $categorytile8image = (empty($PAGE->theme->settings->categorytile8image)) ? false : 'categorytile8image';
        if ($hascategorytile8 == true &&
                substr($categorytile8buttonurl, 0, strlen('/course/index.php?categoryid=')) === '/course/index.php?categoryid=') {
            $category_id = str_replace('/course/index.php?categoryid=', '', $categorytile8buttonurl);
            try {
                $category = core_course_category::get($category_id);
            } catch (\Exception $e) {
                $hascategorytile8 = false;
            }
        }

        $categorytile9image = (empty($PAGE->theme->settings->categorytile9image)) ? false : 'categorytile9image';
        $tekst9 = (empty($PAGE->theme->settings->categorytile9buttontext)) ? false :
                format_string($PAGE->theme->settings->categorytile9buttontext);
        $target9 = (empty($PAGE->theme->settings->categorytile1target)) ? false : $PAGE->theme->settings->categorytile1target;
        $hascategorytile9 = false;
        $result_array = array();
        $myuser = new stdClass();
        $myuser->id = $USER->id;
        profile_load_data($myuser);
        if (isset($myuser->profile_field_zawod) && $myuser_zawod = $myuser->profile_field_zawod) {
            if (isloggedin() && $myuser_zawod != '') {
                $tag = $DB->get_records('tag', array('name' => $myuser_zawod), 'name, id');
                if ($tag) {
                    $hascategorytile9 = $tekst9;
                    $tekst = $tekst9 . ': ' . $tag[array_key_first($tag)]->name;
                    $url9 = '/tag/index.php?id=' . $tag[array_key_first($tag)]->id;
                    array_push($result_array, array(
                            'hastile' => $tekst,
                            'tileimage' => $categorytile9image,
                            'content' => '',
                            'title' => $tekst,
                            'url' => $url9,
                            'class' => "col-md-4",
                            'button' => "<span class='btn btn-primary kafelek w-100'>$tekst</span>"
                    ));
                }
            }
        }

        $categorytile10image = (empty($PAGE->theme->settings->categorytile10image)) ? false : 'categorytile10image';
        $tekst10 = (empty($PAGE->theme->settings->categorytile10buttontext)) ? false :
                format_string($PAGE->theme->settings->categorytile10buttontext);
        $target10 = (empty($PAGE->theme->settings->categorytile1target)) ? false : $PAGE->theme->settings->categorytile1target;

        $result_array = array();
        $categorytilessum = 9 -
                (empty($hascategorytile1) + empty($hascategorytile2) + empty($hascategorytile3) + empty($hascategorytile4) +
                        empty($hascategorytile5) + empty($hascategorytile6) + empty($hascategorytile7) + empty($hascategorytile8) +
                        empty($hascategorytile9));
        if (isloggedin() && $USER->institution != '999999' && $USER->institution != '000') {
            $courses = $DB->get_records('course_categories', array('idnumber' => $USER->institution, 'parent' => 0), 'id');
            $courses = array_values($courses);
            if ($courses) {
                for ($i = 0; $i < count($courses); $i++) {
                    $tekst = (count($courses) > 1 ? $tekst10 . ' ' . ($i + 1) : $tekst10);
                    $url10 = '/course/index.php?categoryid=' . $courses[$i]->id;
                    array_push($result_array, array(
                            'hastile' => $tekst,
                            'tileimage' => $categorytile10image,
                            'content' => '',
                            'title' => $tekst,
                            'url' => $url10,
                            'class' => "col-md-" . (12 - (($categorytilessum % 3) * 4)),
                            'button' => "<span class='btn btn-primary kafelek w-100'>$tekst</span>"
                    ));
                }
            }
        }

        $categorytiles = ['hascategorytiles' => ($hascategorytile1 || $hascategorytile2 || $hascategorytile3 || $hascategorytile4 ||
                $hascategorytile5 || $hascategorytile6) ? true : false, 'categorytiles' => array(
                array(
                        'hastile' => $hascategorytile1,
                        'tileimage' => $categorytile1image,
                        'content' => $categorytile1content,
                        'title' => $hascategorytile1,
                        'url' => $categorytile1buttonurl,
                        'class' => "col-md-4",
                        'button' => "<span class='btn btn-primary kafelek w-100'>$categorytile1buttontext</span>"
                ),
                array(
                        'hastile' => $hascategorytile2,
                        'tileimage' => $categorytile2image,
                        'content' => $categorytile2content,
                        'title' => $hascategorytile2,
                        'url' => $categorytile2buttonurl,
                        'class' => "col-md-4",
                        'button' => "<span class='btn btn-primary kafelek w-100'>$categorytile2buttontext</span>"
                ),
                array(
                        'hastile' => $hascategorytile3,
                        'tileimage' => $categorytile3image,
                        'content' => $categorytile3content,
                        'title' => $hascategorytile3,
                        'url' => $categorytile3buttonurl,
                        'class' => "col-md-4",
                        'button' => "<span class='btn btn-primary kafelek w-100'>$categorytile3buttontext</span>"
                ),
                array(
                        'hastile' => $hascategorytile4,
                        'tileimage' => $categorytile4image,
                        'content' => $categorytile4content,
                        'title' => $hascategorytile4,
                        'url' => $categorytile4buttonurl,
                        'class' => "col-md-4",
                        'button' => "<span class='btn btn-primary kafelek w-100'>$categorytile4buttontext</span>"
                ),
                array(
                        'hastile' => $hascategorytile5,
                        'tileimage' => $categorytile5image,
                        'content' => $categorytile5content,
                        'title' => $hascategorytile5,
                        'url' => $categorytile5buttonurl,
                        'class' => "col-md-4",
                        'button' => " <span class='btn btn-primary kafelek w-100'>$categorytile5buttontext</span>"
                ),
                array(
                        'hastile' => $hascategorytile6,
                        'tileimage' => $categorytile6image,
                        'content' => $categorytile6content,
                        'title' => $hascategorytile6,
                        'url' => $categorytile6buttonurl,
                        'class' => "col-md-4",
                        'button' => " <span class='btn btn-primary kafelek w-100'>$categorytile6buttontext</span>"
                ),
                array(
                        'hastile' => $hascategorytile7,
                        'tileimage' => $categorytile7image,
                        'content' => $categorytile7content,
                        'title' => $hascategorytile7,
                        'url' => $categorytile7buttonurl,
                        'class' => "col-md-4",
                        'button' => "<span class='btn btn-primary kafelek w-100'>$categorytile7buttontext</span>"
                ),
                array(
                        'hastile' => $hascategorytile8,
                        'tileimage' => $categorytile8image,
                        'content' => $categorytile8content,
                        'title' => $hascategorytile8,
                        'url' => $categorytile8buttonurl,
                        'class' => "col-md-4",
                        'button' => "<span class='btn btn-primary kafelek w-100'>$categorytile8buttontext</span>"
                ),
        ),];
        $categorytiles['categorytiles'] = array_merge($result_array, $categorytiles['categorytiles']);
        return $categorytiles;
    }
}
