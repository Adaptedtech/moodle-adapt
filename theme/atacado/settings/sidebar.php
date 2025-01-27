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

$page = new admin_settingpage('theme_atacado_settingssidebar', get_string('settingssidebar', 'theme_atacado'));

$name = 'theme_atacado/mycoursesontop';
$title = get_string('mycoursesontop', 'theme_atacado');
$description = get_string('mycoursesontop_desc', 'theme_atacado');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/hcustomsidebarlogo';
$heading = get_string('hcustomsidebarlogo', 'theme_atacado');
$setting = new admin_setting_heading($name, $heading,
    format_text(get_string('hcustomsidebarlogo_desc', 'theme_atacado'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_atacado/customsidebarlogo';
$title = get_string('customsidebarlogo', 'theme_atacado');
$description = get_string('customsidebarlogo_desc', 'theme_atacado');
$opts = array('accepted_types' => array('.png', '.jpg', '.svg', 'gif'));
$setting = new admin_setting_configstoredfile($name, $title, $description, 'customsidebarlogo', 0, $opts);
$page->add($setting);

$name = 'theme_atacado/customsidebardmlogo';
$title = get_string('customsidebardmlogo', 'theme_atacado');
$description = get_string('customsidebardmlogo_desc', 'theme_atacado');
$opts = array('accepted_types' => array('.png', '.jpg', '.svg', 'gif'));
$setting = new admin_setting_configstoredfile($name, $title, $description, 'customsidebardmlogo', 0, $opts);
$page->add($setting);

$name = 'theme_atacado/hcustomcontent';
$heading = get_string('hcustomcontent', 'theme_atacado');
$setting = new admin_setting_heading($name, $heading,
    format_text(get_string('hcustomcontent_desc', 'theme_atacado'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_atacado/customstcontent';
$title = get_string('customstcontent', 'theme_atacado');
$description = get_string('customstcontent_desc', 'theme_atacado');
$default = '';
$setting = new alpha_setting_confightmleditor($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/customsmcontent';
$title = get_string('customsmcontent', 'theme_atacado');
$description = get_string('customsmcontent_desc', 'theme_atacado');
$default = '';
$setting = new alpha_setting_confightmleditor($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/customsfcontent';
$title = get_string('customsfcontent', 'theme_atacado');
$description = get_string('customsfcontent_desc', 'theme_atacado');
$default = '';
$setting = new alpha_setting_confightmleditor($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/hcourseindexdrawer';
$heading = get_string('hcourseindexdrawer', 'theme_atacado');
$setting = new admin_setting_heading($name, $heading,
    format_text(get_string('hcourseindexdrawer_desc', 'theme_atacado'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_atacado/customcitcontent';
$title = get_string('customcitcontent', 'theme_atacado');
$description = get_string('customcitcontent_desc', 'theme_atacado', $a);
$default = '';
$setting = new alpha_setting_confightmleditor($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/customcibcontent';
$title = get_string('customcibcontent', 'theme_atacado');
$description = get_string('customcibcontent_desc', 'theme_atacado');
$default = '';
$setting = new alpha_setting_confightmleditor($name, $title, $description, $default);
$page->add($setting);

// Label.
$name = 'theme_atacado/hturnoffsidebar';
$heading = get_string('hturnoffsidebar', 'theme_atacado');
$setting = new admin_setting_heading($name, $heading,
    format_text(get_string('hturnoffsidebar_desc', 'theme_atacado'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_atacado/labelsidebaropened';
$title = get_string('labelsidebaropened', 'theme_atacado');
$description = get_string('labelsidebaropened_desc', 'theme_atacado', $a);
$default = 'Open the sidebar';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/labelsidebarclosed';
$title = get_string('labelsidebarclosed', 'theme_atacado');
$description = get_string('labelsidebarclosed_desc', 'theme_atacado', $a);
$default = 'Close the sidebar';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/hturnoffsidebar';
$heading = get_string('hturnoffsidebar', 'theme_atacado');
$setting = new admin_setting_heading($name, $heading,
    format_text(get_string('hturnoffsidebar_desc', 'theme_atacado'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_atacado/turnoffsidebarfp';
$title = get_string('turnoffsidebarfp', 'theme_atacado');
$description = get_string('turnoffsidebarfp_desc', 'theme_atacado');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/turnoffsidebardashboard';
$title = get_string('turnoffsidebardashboard', 'theme_atacado');
$description = get_string('turnoffsidebardashboard_desc', 'theme_atacado');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/turnoffsidebarcourse';
$title = get_string('turnoffsidebarcourse', 'theme_atacado');
$description = get_string('turnoffsidebarcourse_desc', 'theme_atacado');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/turnoffsidebarincourse';
$title = get_string('turnoffsidebarincourse', 'theme_atacado');
$description = get_string('turnoffsidebarincourse_desc', 'theme_atacado');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/turnoffsidebarreport';
$title = get_string('turnoffsidebarreport', 'theme_atacado');
$description = get_string('turnoffsidebarreport_desc', 'theme_atacado');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/turnoffsidebarstandard';
$title = get_string('turnoffsidebarstandard', 'theme_atacado');
$description = get_string('turnoffsidebarstandard_desc', 'theme_atacado');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/turnoffsidebaradmin';
$title = get_string('turnoffsidebaradmin', 'theme_atacado');
$description = get_string('turnoffsidebaradmin_desc', 'theme_atacado');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/hmycoursesbtn';
$heading = get_string('hmycoursesbtn', 'theme_atacado');
$setting = new admin_setting_heading($name, $heading,
    format_text(get_string('hmycoursesbtn_desc', 'theme_atacado'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_atacado/showmycoursesbox';
$title = get_string('showmycoursesbox', 'theme_atacado');
$description = get_string('showmycoursesbox_desc', 'theme_atacado');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/hidedetails';
$title = get_string('hidedetails', 'theme_atacado');
$description = get_string('hidedetails_desc', 'theme_atacado');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/stringmycourses';
$title = get_string('stringmycourses', 'theme_atacado');
$description = get_string('stringmycourses_desc', 'theme_atacado');
$default = 'My Courses';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/stringnocourses';
$title = get_string('stringnocourses', 'theme_atacado');
$description = get_string('stringnocourses_desc', 'theme_atacado');
$default = 'You are not enrolled in any courses.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/stringshowhidden';
$title = get_string('stringshowhidden', 'theme_atacado');
$description = get_string('stringshowhidden_desc', 'theme_atacado');
$default = 'Show hidden courses';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/stringshowonlyinprogress';
$title = get_string('stringshowonlyinprogress', 'theme_atacado');
$description = get_string('stringshowonlyinprogress_desc', 'theme_atacado');
$default = 'Only courses in progress';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/stringdetails';
$title = get_string('stringdetails', 'theme_atacado');
$description = get_string('stringdetails_desc', 'theme_atacado');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/stringallcourses';
$title = get_string('stringallcourses', 'theme_atacado');
$description = get_string('stringallcourses_desc', 'theme_atacado');
$default = '<span>List of all available courses</span>
<svg width="18"
height="18"
fill="none"
viewBox="0
0
24
24"><path
stroke="currentColor"
stroke-linecap="round"
stroke-linejoin="round"
stroke-width="1.5"
d="M13.75 6.75L19.25 12L13.75 17.25"></path>
<path
stroke="currentColor"
stroke-linecap="round"
stroke-linejoin="round"
stroke-width="1.5"
d="M19 12H4.75"></path></svg>';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/stringnocourses';
$title = get_string('stringnocourses', 'theme_atacado');
$description = get_string('stringnocourses_desc', 'theme_atacado');
$default = 'You are not enrolled in any courses.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/mycourseswrapperheight';
$title = get_string('mycourseswrapperheight', 'theme_atacado');
$description = get_string('mycourseswrapperheight_desc', 'theme_atacado');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/hsidebarcolors';
$heading = get_string('hsidebarcolors', 'theme_atacado');
$setting = new admin_setting_heading($name, $heading,
    format_text(get_string('hsidebarcolors_desc', 'theme_atacado'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_atacado/colordrawerbg';
$title = get_string('colordrawerbg', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colordrawertext';
$title = get_string('colordrawertext', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colordrawernavcontainer';
$title = get_string('colordrawernavcontainer', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colordrawernavbtnicon';
$title = get_string('colordrawernavbtnicon', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colordrawernavbtniconh';
$title = get_string('colordrawernavbtniconh', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colordrawernavbtntext';
$title = get_string('colordrawernavbtntext', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colordrawernavbtntexth';
$title = get_string('colordrawernavbtntexth', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colordrawernavbtnbgh';
$title = get_string('colordrawernavbtnbgh', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colordrawernavbtntextlight';
$title = get_string('colordrawernavbtntextlight', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colordrawerscrollbar';
$title = get_string('colordrawerscrollbar', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colordrawerlink';
$title = get_string('colordrawerlink', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colordrawerlinkh';
$title = get_string('colordrawerlinkh', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Must add the page after definiting all the settings!
$settings->add($page);
