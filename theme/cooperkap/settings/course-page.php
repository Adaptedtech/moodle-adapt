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
 *
 * @package   theme_cooperkap
 * @copyright 2022 - 2023 Marcin Czaja (https://rosea.io)
 * @license   Commercial https://themeforest.net/licenses
 *
 */

defined('MOODLE_INTERNAL') || die();

$page = new admin_settingpage('theme_cooperkap_settingscourses', get_string('settingscourses', 'theme_cooperkap'));

$name = 'theme_cooperkap/defaultcourseimg';
$title = get_string('defaultcourseimg', 'theme_cooperkap');
$description = get_string('defaultcourseimg_desc', 'theme_cooperkap');
$opts = array('accepted_types' => array('.png', '.jpg', '.gif', '.webp', '.tiff', '.svg'));
$setting = new admin_setting_configstoredfile($name, $title, $description, 'defaultcourseimg', 0, $opts);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/courselistview';
$title = get_string('courselistview', 'theme_cooperkap');
$description = get_string('courselistview_desc', 'theme_cooperkap', $a);
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

// Show/hide course index navigation.
$name = 'theme_cooperkap/hidecourseindexnav';
$title = get_string('hidecourseindexnav', 'theme_cooperkap');
$description = get_string('hidecourseindexnav_desc', 'theme_cooperkap');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/cccteachers';
$title = get_string('cccteachers', 'theme_cooperkap');
$description = get_string('cccteachers_desc', 'theme_cooperkap');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/setcourseimage';
$title = get_string('setcourseimage', 'theme_cooperkap');
$setting = new admin_setting_configselect($name, $title, '', 0, array(
    0 => get_string('none', 'theme_cooperkap'),
    1 => get_string('yes', 'theme_cooperkap'),
));
$page->add($setting);

$name = 'theme_cooperkap/ipcoursesummary';
$title = get_string('ipcoursesummary', 'theme_cooperkap');
$description = get_string('ipcoursesummary_desc', 'theme_cooperkap');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

// Progress Bar.
$name = 'theme_cooperkap/courseprogressbar';
$title = get_string('courseprogressbar', 'theme_cooperkap');
$description = get_string('courseprogressbar_desc', 'theme_cooperkap', $a);
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/hcoursecard';
$heading = get_string('hcoursecard', 'theme_cooperkap');
$setting = new admin_setting_heading($name, $heading,
    format_text(get_string('hcoursecard_desc', 'theme_cooperkap'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_cooperkap/cccfooter';
$title = get_string('cccfooter', 'theme_cooperkap');
$description = get_string('cccfooter_desc', 'theme_cooperkap');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/stringaccess';
$title = get_string('stringaccess', 'theme_cooperkap');
$description = get_string('stringaccess_desc', 'theme_cooperkap');
$default = 'Get access';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/cccsummary';
$title = get_string('cccsummary', 'theme_cooperkap');
$description = get_string('cccsummary_desc', 'theme_cooperkap', $a);
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/maxcoursecardtextheight';
$title = get_string('maxcoursecardtextheight', 'theme_cooperkap');
$description = get_string('maxcoursecardtextheight_desc', 'theme_cooperkap');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$page->add($setting);

// Customize Course Card Desc Limit.
$name = 'theme_cooperkap/coursecarddesclimit';
$title = get_string('coursecarddesclimit', 'theme_cooperkap');
$description = get_string('coursecarddesclimit_desc', 'theme_cooperkap');
$setting = new admin_setting_configtext($name, $title, $description, '100');
$page->add($setting);

$name = 'theme_cooperkap/showcustomfields';
$title = get_string('showcustomfields', 'theme_cooperkap');
$description = get_string('showcustomfields_desc', 'theme_cooperkap');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/courselangbadge';
$title = get_string('courselangbadge', 'theme_cooperkap');
$description = get_string('courselangbadge_desc', 'theme_cooperkap', $a);
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

// Must add the page after definiting all the settings!
$settings->add($page);
