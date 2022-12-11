<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin administration pages are defined here.
 *
 * @package     block_categorytiles
 * @category    admin
 * @copyright   2022 Adam Pawełczak <adam.pawelczak@nngsolutions.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    // phpcs:ignore Generic.CodeAnalysis.EmptyStatement.DetectedIf
    if ($ADMIN->fulltree) {
        // TODO: Define the plugin settings page - {@link https://docs.moodle.org/dev/Admin_settings}.

        // This is the descriptor for Category tile Spot One
        $name = 'block_categorytiles/categorytile1info';
        $heading = get_string('categorytile1', 'block_categorytiles');
        $information = get_string('categorytileinfodesc', 'block_categorytiles');
        $setting = new admin_setting_heading($name, $heading, $information);
        $settings->add($setting);

        // Category tile Spot One
        $name = 'block_categorytiles/categorytile1';
        $title = get_string('categorytiletitle', 'block_categorytiles');
        $description = get_string('categorytiletitledesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        // Background image setting.
        $name = 'block_categorytiles/categorytile1image';
        $title = get_string('categorytileimage', 'block_categorytiles');
        $description = get_string('categorytileimage_desc', 'block_categorytiles');
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'categorytile1image');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile1content';
        $title = get_string('categorytilecontent', 'block_categorytiles');
        $description = get_string('categorytilecontentdesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile1buttontext';
        $title = get_string('categorytilebuttontext', 'block_categorytiles');
        $description = get_string('categorytilebuttontextdesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile1buttonurl';
        $title = get_string('categorytilebuttonurl', 'block_categorytiles');
        $description = get_string('categorytilebuttonurldesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile1target';
        $title = get_string('categorytileurltarget' , 'block_categorytiles');
        $description = get_string('categorytileurltargetdesc', 'block_categorytiles');
        $target1 = get_string('categorytileurltargetself', 'block_categorytiles');
        $target2 = get_string('categorytileurltargetnew', 'block_categorytiles');
        $target3 = get_string('categorytileurltargetparent', 'block_categorytiles');
        $default = 'target1';
        $choices = array('_self'=>$target1, '_blank'=>$target2, '_parent'=>$target3);
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        // This is the descriptor for Category tile Spot Two
        $name = 'block_categorytiles/categorytile2info';
        $heading = get_string('categorytile2', 'block_categorytiles');
        $information = get_string('categorytileinfodesc', 'block_categorytiles');
        $setting = new admin_setting_heading($name, $heading, $information);
        $settings->add($setting);

        // Category tile Spot Two.
        $name = 'block_categorytiles/categorytile2';
        $title = get_string('categorytiletitle', 'block_categorytiles');
        $description = get_string('categorytiletitledesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        // Background image setting.
        $name = 'block_categorytiles/categorytile2image';
        $title = get_string('categorytileimage', 'block_categorytiles');
        $description = get_string('categorytileimage_desc', 'block_categorytiles');
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'categorytile2image');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile2content';
        $title = get_string('categorytilecontent', 'block_categorytiles');
        $description = get_string('categorytilecontentdesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile2buttontext';
        $title = get_string('categorytilebuttontext', 'block_categorytiles');
        $description = get_string('categorytilebuttontextdesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile2buttonurl';
        $title = get_string('categorytilebuttonurl', 'block_categorytiles');
        $description = get_string('categorytilebuttonurldesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile2target';
        $title = get_string('categorytileurltarget' , 'block_categorytiles');
        $description = get_string('categorytileurltargetdesc', 'block_categorytiles');
        $target1 = get_string('categorytileurltargetself', 'block_categorytiles');
        $target2 = get_string('categorytileurltargetnew', 'block_categorytiles');
        $target3 = get_string('categorytileurltargetparent', 'block_categorytiles');
        $default = 'target1';
        $choices = array('_self'=>$target1, '_blank'=>$target2, '_parent'=>$target3);
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        // This is the descriptor for Category tile Spot Three
        $name = 'block_categorytiles/categorytile3info';
        $heading = get_string('categorytile3', 'block_categorytiles');
        $information = get_string('categorytileinfodesc', 'block_categorytiles');
        $setting = new admin_setting_heading($name, $heading, $information);
        $settings->add($setting);

        // Category tile Spot Three.
        $name = 'block_categorytiles/categorytile3';
        $title = get_string('categorytiletitle', 'block_categorytiles');
        $description = get_string('categorytiletitledesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        // Background image setting.
        $name = 'block_categorytiles/categorytile3image';
        $title = get_string('categorytileimage', 'block_categorytiles');
        $description = get_string('categorytileimage_desc', 'block_categorytiles');
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'categorytile3image');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile3content';
        $title = get_string('categorytilecontent', 'block_categorytiles');
        $description = get_string('categorytilecontentdesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile3buttontext';
        $title = get_string('categorytilebuttontext', 'block_categorytiles');
        $description = get_string('categorytilebuttontextdesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile3buttonurl';
        $title = get_string('categorytilebuttonurl', 'block_categorytiles');
        $description = get_string('categorytilebuttonurldesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile3target';
        $title = get_string('categorytileurltarget' , 'block_categorytiles');
        $description = get_string('categorytileurltargetdesc', 'block_categorytiles');
        $target1 = get_string('categorytileurltargetself', 'block_categorytiles');
        $target2 = get_string('categorytileurltargetnew', 'block_categorytiles');
        $target3 = get_string('categorytileurltargetparent', 'block_categorytiles');
        $default = 'target1';
        $choices = array('_self'=>$target1, '_blank'=>$target2, '_parent'=>$target3);
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        // This is the descriptor for Category tile Spot Four
        $name = 'block_categorytiles/categorytile4info';
        $heading = get_string('categorytile4', 'block_categorytiles');
        $information = get_string('categorytileinfodesc', 'block_categorytiles');
        $setting = new admin_setting_heading($name, $heading, $information);
        $settings->add($setting);

        // Category tile Spot
        $name = 'block_categorytiles/categorytile4';
        $title = get_string('categorytiletitle', 'block_categorytiles');
        $description = get_string('categorytiletitledesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        // Background image setting.
        $name = 'block_categorytiles/categorytile4image';
        $title = get_string('categorytileimage', 'block_categorytiles');
        $description = get_string('categorytileimage_desc', 'block_categorytiles');
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'categorytile4image');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile4content';
        $title = get_string('categorytilecontent', 'block_categorytiles');
        $description = get_string('categorytilecontentdesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile4buttontext';
        $title = get_string('categorytilebuttontext', 'block_categorytiles');
        $description = get_string('categorytilebuttontextdesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile4buttonurl';
        $title = get_string('categorytilebuttonurl', 'block_categorytiles');
        $description = get_string('categorytilebuttonurldesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile4target';
        $title = get_string('categorytileurltarget' , 'block_categorytiles');
        $description = get_string('categorytileurltargetdesc', 'block_categorytiles');
        $target1 = get_string('categorytileurltargetself', 'block_categorytiles');
        $target2 = get_string('categorytileurltargetnew', 'block_categorytiles');
        $target3 = get_string('categorytileurltargetparent', 'block_categorytiles');
        $default = 'target1';
        $choices = array('_self'=>$target1, '_blank'=>$target2, '_parent'=>$target3);
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        // This is the descriptor for Category tile Spot Four
        $name = 'block_categorytiles/categorytile5info';
        $heading = get_string('categorytile5', 'block_categorytiles');
        $information = get_string('categorytileinfodesc', 'block_categorytiles');
        $setting = new admin_setting_heading($name, $heading, $information);
        $settings->add($setting);

        // Category tile Spot
        $name = 'block_categorytiles/categorytile5';
        $title = get_string('categorytiletitle', 'block_categorytiles');
        $description = get_string('categorytiletitledesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        // Background image setting.
        $name = 'block_categorytiles/categorytile5image';
        $title = get_string('categorytileimage', 'block_categorytiles');
        $description = get_string('categorytileimage_desc', 'block_categorytiles');
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'categorytile5image');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile5content';
        $title = get_string('categorytilecontent', 'block_categorytiles');
        $description = get_string('categorytilecontentdesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile5buttontext';
        $title = get_string('categorytilebuttontext', 'block_categorytiles');
        $description = get_string('categorytilebuttontextdesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile5buttonurl';
        $title = get_string('categorytilebuttonurl', 'block_categorytiles');
        $description = get_string('categorytilebuttonurldesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile5target';
        $title = get_string('categorytileurltarget' , 'block_categorytiles');
        $description = get_string('categorytileurltargetdesc', 'block_categorytiles');
        $target1 = get_string('categorytileurltargetself', 'block_categorytiles');
        $target2 = get_string('categorytileurltargetnew', 'block_categorytiles');
        $target3 = get_string('categorytileurltargetparent', 'block_categorytiles');
        $default = 'target1';
        $choices = array('_self'=>$target1, '_blank'=>$target2, '_parent'=>$target3);
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        // This is the descriptor for Category tile Spot Four
        $name = 'block_categorytiles/categorytile6info';
        $heading = get_string('categorytile6', 'block_categorytiles');
        $information = get_string('categorytileinfodesc', 'block_categorytiles');
        $setting = new admin_setting_heading($name, $heading, $information);
        $settings->add($setting);

        // Category tile Spot
        $name = 'block_categorytiles/categorytile6';
        $title = get_string('categorytiletitle', 'block_categorytiles');
        $description = get_string('categorytiletitledesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        // Background image setting.
        $name = 'block_categorytiles/categorytile6image';
        $title = get_string('categorytileimage', 'block_categorytiles');
        $description = get_string('categorytileimage_desc', 'block_categorytiles');
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'categorytile6image');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile6content';
        $title = get_string('categorytilecontent', 'block_categorytiles');
        $description = get_string('categorytilecontentdesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile6buttontext';
        $title = get_string('categorytilebuttontext', 'block_categorytiles');
        $description = get_string('categorytilebuttontextdesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile6buttonurl';
        $title = get_string('categorytilebuttonurl', 'block_categorytiles');
        $description = get_string('categorytilebuttonurldesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile6target';
        $title = get_string('categorytileurltarget' , 'block_categorytiles');
        $description = get_string('categorytileurltargetdesc', 'block_categorytiles');
        $target1 = get_string('categorytileurltargetself', 'block_categorytiles');
        $target2 = get_string('categorytileurltargetnew', 'block_categorytiles');
        $target3 = get_string('categorytileurltargetparent', 'block_categorytiles');
        $default = 'target1';
        $choices = array('_self'=>$target1, '_blank'=>$target2, '_parent'=>$target3);
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        // This is the descriptor for Category tile Spot
        $name = 'block_categorytiles/categorytile7info';
        $heading = get_string('categorytile7', 'block_categorytiles');
        $information = get_string('categorytileinfodesc', 'block_categorytiles');
        $setting = new admin_setting_heading($name, $heading, $information);
        $settings->add($setting);

        // Category tile Spot Seven
        $name = 'block_categorytiles/categorytile7';
        $title = get_string('categorytiletitle', 'block_categorytiles');
        $description = get_string('categorytiletitledesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        // Background image setting.
        $name = 'block_categorytiles/categorytile7image';
        $title = get_string('categorytileimage', 'block_categorytiles');
        $description = get_string('categorytileimage_desc', 'block_categorytiles');
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'categorytile7image');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile7content';
        $title = get_string('categorytilecontent', 'block_categorytiles');
        $description = get_string('categorytilecontentdesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile7buttontext';
        $title = get_string('categorytilebuttontext', 'block_categorytiles');
        $description = get_string('categorytilebuttontextdesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile7buttonurl';
        $title = get_string('categorytilebuttonurl', 'block_categorytiles');
        $description = get_string('categorytilebuttonurldesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile7target';
        $title = get_string('categorytileurltarget' , 'block_categorytiles');
        $description = get_string('categorytileurltargetdesc', 'block_categorytiles');
        $target1 = get_string('categorytileurltargetself', 'block_categorytiles');
        $target2 = get_string('categorytileurltargetnew', 'block_categorytiles');
        $target3 = get_string('categorytileurltargetparent', 'block_categorytiles');
        $default = 'target1';
        $choices = array('_self'=>$target1, '_blank'=>$target2, '_parent'=>$target3);
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        // This is the descriptor for Category tile Spot
        $name = 'block_categorytiles/categorytile8info';
        $heading = get_string('categorytile8', 'block_categorytiles');
        $information = get_string('categorytileinfodesc', 'block_categorytiles');
        $setting = new admin_setting_heading($name, $heading, $information);
        $settings->add($setting);

        // Category tile Spot Eight
        $name = 'block_categorytiles/categorytile8';
        $title = get_string('categorytiletitle', 'block_categorytiles');
        $description = get_string('categorytiletitledesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        // Background image setting.
        $name = 'block_categorytiles/categorytile8image';
        $title = get_string('categorytileimage', 'block_categorytiles');
        $description = get_string('categorytileimage_desc', 'block_categorytiles');
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'categorytile8image');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile8content';
        $title = get_string('categorytilecontent', 'block_categorytiles');
        $description = get_string('categorytilecontentdesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile8buttontext';
        $title = get_string('categorytilebuttontext', 'block_categorytiles');
        $description = get_string('categorytilebuttontextdesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile8buttonurl';
        $title = get_string('categorytilebuttonurl', 'block_categorytiles');
        $description = get_string('categorytilebuttonurldesc', 'block_categorytiles');
        $default = '';
        $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile8target';
        $title = get_string('categorytileurltarget' , 'block_categorytiles');
        $description = get_string('categorytileurltargetdesc', 'block_categorytiles');
        $target1 = get_string('categorytileurltargetself', 'block_categorytiles');
        $target2 = get_string('categorytileurltargetnew', 'block_categorytiles');
        $target3 = get_string('categorytileurltargetparent', 'block_categorytiles');
        $default = 'target1';
        $choices = array('_self'=>$target1, '_blank'=>$target2, '_parent'=>$target3);
        $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile9info';
        $heading = 'Mój zawód';
        $information = 'Opcje ikony zawodu';
        $setting = new admin_setting_heading($name, $heading, $information);
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile9buttontext';
        $title = 'Tytuł zawodu uzytkownika';
        $description = 'Teskt wyswietlany pod grafika prowadzaca do tagu z zawodem usera';
        $default = 'Mój zawód';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile9image';
        $title = 'Mój zawód';
        $description = 'Zmien grafike Mój zawód';
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'categorytile9image');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);


        $name = 'block_categorytiles/categorytile10info';
        $heading = 'Moja Szkola';
        $information = 'Opcje ikony instytucji';
        $setting = new admin_setting_heading($name, $heading, $information);
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile10buttontext';
        $title = 'Tytuł instytucji uzytkownika';
        $description = 'Teskt wyswietlany pod grafika prowadzaca do kursu zwiazanego z instytucja uzytkownika.';
        $default = 'Moja Szkoła';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        $name = 'block_categorytiles/categorytile10image';
        $title = 'Moja Szkola';
        $description = 'Zmien grafike Moja Szkola';
        $setting = new admin_setting_configstoredfile($name, $title, $description, 'categorytile10image');
        $setting->set_updatedcallback('theme_reset_all_caches');
        $settings->add($setting);

        // Must add the page after definiting all the settings!
        $settings->add($settings);
    }
}
