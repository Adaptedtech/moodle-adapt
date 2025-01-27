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
 * @package   theme_atacado
 * @copyright 2022 - 2023 Marcin Czaja (https://rosea.io)
 * @license   Commercial https://themeforest.net/licenses
 *
 */

defined('MOODLE_INTERNAL') || die();

$page = new admin_settingpage('theme_atacado_general', get_string('generalsettings', 'theme_atacado'));

$name = 'theme_atacado/hintro';
$heading = get_string('hintro', 'theme_atacado', $a);
$setting = new alpha_setting_specialsettingheading($name, $heading,
    format_text(get_string('hintro_desc', 'theme_atacado', $a), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_atacado/darkmodetheme';
$title = get_string('darkmodetheme', 'theme_atacado');
$description = get_string('darkmodetheme_desc', 'theme_atacado');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/darkmodefirst';
$title = get_string('darkmodefirst', 'theme_atacado');
$description = get_string('darkmodefirst_desc', 'theme_atacado');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/sdarkmode';
$title = get_string('sdarkmode', 'theme_atacado');
$description = get_string('sdarkmode_desc', 'theme_atacado');
$default = 'Dark Mode';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/slightmode';
$title = get_string('slightmode', 'theme_atacado');
$description = get_string('slightmode_desc', 'theme_atacado');
$default = 'Light Mode';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/themeauthor';
$title = get_string('themeauthor', 'theme_atacado');
$description = get_string('themeauthor_desc', 'theme_atacado');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/backtotop';
$title = get_string('backtotop', 'theme_atacado');
$description = get_string('backtotop_desc', 'theme_atacado');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

// Video Size
$name = 'theme_atacado/forcefwvideo';
$title = get_string('forcefwvideo', 'theme_atacado');
$description = get_string('forcefwvideo_desc', 'theme_atacado', $a);
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Show hint for switched role.
$name = 'theme_atacado/showswitchedroleincourse';
$title = get_string('showswitchedroleincoursesetting', 'theme_atacado');
$description = get_string('showswitchedroleincoursesetting_desc', 'theme_atacado', $a);
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Show hint in hidden courses.
$name = 'theme_atacado/showhintcoursehidden';
$title = get_string('showhintcoursehiddensetting', 'theme_atacado');
$description = get_string('showhintcoursehiddensetting_desc', 'theme_atacado');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

// Show hint guest for access.
$name = 'theme_atacado/showhintcourseguestaccess';
$title = get_string('showhintcoursguestaccesssetting', 'theme_atacado');
$description = get_string('showhintcourseguestaccesssetting_desc', 'theme_atacado');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

// Show hint for self enrolment without enrolment key.
$name = 'theme_atacado/showhintcourseselfenrol';
$title = get_string('showhintcourseselfenrolsetting', 'theme_atacado');
$description = get_string('showhintcourseselfenrolsetting_desc', 'theme_atacado');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

// Unaddable blocks.
// Blocks to be excluded when this theme is enabled in the "Add a block" list: Administration, Navigation, Courses and
// Section links.
$default = 'navigation,settings,course_list,section_links';
$setting = new admin_setting_configtext(
    'theme_atacado/unaddableblocks',
    get_string('unaddableblocks', 'theme_atacado'),
    get_string('unaddableblocks_desc', 'theme_atacado'),
    $default,
    PARAM_TEXT
);
$page->add($setting);

// Google analytics block.
$name = 'theme_atacado/googleanalytics';
$title = get_string('googleanalytics', 'theme_atacado');
$description = get_string('googleanalyticsdesc', 'theme_atacado');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$settings->add($page);
