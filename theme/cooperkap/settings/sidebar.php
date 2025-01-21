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

$page = new admin_settingpage('theme_cooperkap_settingssidebar', get_string('settingssidebar', 'theme_cooperkap'));

$name = 'theme_cooperkap/mycoursesontop';
$title = get_string('mycoursesontop', 'theme_cooperkap');
$description = get_string('mycoursesontop_desc', 'theme_cooperkap');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/hcustomsidebarlogo';
$heading = get_string('hcustomsidebarlogo', 'theme_cooperkap');
$setting = new admin_setting_heading($name, $heading,
    format_text(get_string('hcustomsidebarlogo_desc', 'theme_cooperkap'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_cooperkap/customsidebarlogo';
$title = get_string('customsidebarlogo', 'theme_cooperkap');
$description = get_string('customsidebarlogo_desc', 'theme_cooperkap');
$opts = array('accepted_types' => array('.png', '.jpg', '.svg', 'gif'));
$setting = new admin_setting_configstoredfile($name, $title, $description, 'customsidebarlogo', 0, $opts);
$page->add($setting);

$name = 'theme_cooperkap/customsidebardmlogo';
$title = get_string('customsidebardmlogo', 'theme_cooperkap');
$description = get_string('customsidebardmlogo_desc', 'theme_cooperkap');
$opts = array('accepted_types' => array('.png', '.jpg', '.svg', 'gif'));
$setting = new admin_setting_configstoredfile($name, $title, $description, 'customsidebardmlogo', 0, $opts);
$page->add($setting);

$name = 'theme_cooperkap/hcustomcontent';
$heading = get_string('hcustomcontent', 'theme_cooperkap');
$setting = new admin_setting_heading($name, $heading,
    format_text(get_string('hcustomcontent_desc', 'theme_cooperkap'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_cooperkap/customstcontent';
$title = get_string('customstcontent', 'theme_cooperkap');
$description = get_string('customstcontent_desc', 'theme_cooperkap');
$default = '';
$setting = new cooperkap_setting_confightmleditor($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/customsmcontent';
$title = get_string('customsmcontent', 'theme_cooperkap');
$description = get_string('customsmcontent_desc', 'theme_cooperkap');
$default = '';
$setting = new cooperkap_setting_confightmleditor($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/customsfcontent';
$title = get_string('customsfcontent', 'theme_cooperkap');
$description = get_string('customsfcontent_desc', 'theme_cooperkap');
$default = '';
$setting = new cooperkap_setting_confightmleditor($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/hcourseindexdrawer';
$heading = get_string('hcourseindexdrawer', 'theme_cooperkap');
$setting = new admin_setting_heading($name, $heading,
    format_text(get_string('hcourseindexdrawer_desc', 'theme_cooperkap'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_cooperkap/customcitcontent';
$title = get_string('customcitcontent', 'theme_cooperkap');
$description = get_string('customcitcontent_desc', 'theme_cooperkap', $a);
$default = '';
$setting = new cooperkap_setting_confightmleditor($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/customcibcontent';
$title = get_string('customcibcontent', 'theme_cooperkap');
$description = get_string('customcibcontent_desc', 'theme_cooperkap');
$default = '';
$setting = new cooperkap_setting_confightmleditor($name, $title, $description, $default);
$page->add($setting);

// Label.
$name = 'theme_cooperkap/hturnoffsidebar';
$heading = get_string('hturnoffsidebar', 'theme_cooperkap');
$setting = new admin_setting_heading($name, $heading,
    format_text(get_string('hturnoffsidebar_desc', 'theme_cooperkap'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_cooperkap/labelsidebaropened';
$title = get_string('labelsidebaropened', 'theme_cooperkap');
$description = get_string('labelsidebaropened_desc', 'theme_cooperkap', $a);
$default = 'Open the sidebar';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/labelsidebarclosed';
$title = get_string('labelsidebarclosed', 'theme_cooperkap');
$description = get_string('labelsidebarclosed_desc', 'theme_cooperkap', $a);
$default = 'Close the sidebar';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/hturnoffsidebar';
$heading = get_string('hturnoffsidebar', 'theme_cooperkap');
$setting = new admin_setting_heading($name, $heading,
    format_text(get_string('hturnoffsidebar_desc', 'theme_cooperkap'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_cooperkap/turnoffsidebarfp';
$title = get_string('turnoffsidebarfp', 'theme_cooperkap');
$description = get_string('turnoffsidebarfp_desc', 'theme_cooperkap');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/turnoffsidebardashboard';
$title = get_string('turnoffsidebardashboard', 'theme_cooperkap');
$description = get_string('turnoffsidebardashboard_desc', 'theme_cooperkap');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/turnoffsidebarcourse';
$title = get_string('turnoffsidebarcourse', 'theme_cooperkap');
$description = get_string('turnoffsidebarcourse_desc', 'theme_cooperkap');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/turnoffsidebarincourse';
$title = get_string('turnoffsidebarincourse', 'theme_cooperkap');
$description = get_string('turnoffsidebarincourse_desc', 'theme_cooperkap');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/turnoffsidebarreport';
$title = get_string('turnoffsidebarreport', 'theme_cooperkap');
$description = get_string('turnoffsidebarreport_desc', 'theme_cooperkap');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/turnoffsidebarstandard';
$title = get_string('turnoffsidebarstandard', 'theme_cooperkap');
$description = get_string('turnoffsidebarstandard_desc', 'theme_cooperkap');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/turnoffsidebaradmin';
$title = get_string('turnoffsidebaradmin', 'theme_cooperkap');
$description = get_string('turnoffsidebaradmin_desc', 'theme_cooperkap');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/hmycoursesbtn';
$heading = get_string('hmycoursesbtn', 'theme_cooperkap');
$setting = new admin_setting_heading($name, $heading,
    format_text(get_string('hmycoursesbtn_desc', 'theme_cooperkap'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_cooperkap/showmycoursesbox';
$title = get_string('showmycoursesbox', 'theme_cooperkap');
$description = get_string('showmycoursesbox_desc', 'theme_cooperkap');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/hidedetails';
$title = get_string('hidedetails', 'theme_cooperkap');
$description = get_string('hidedetails_desc', 'theme_cooperkap');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/stringmycourses';
$title = get_string('stringmycourses', 'theme_cooperkap');
$description = get_string('stringmycourses_desc', 'theme_cooperkap');
$default = 'My Courses';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/stringnocourses';
$title = get_string('stringnocourses', 'theme_cooperkap');
$description = get_string('stringnocourses_desc', 'theme_cooperkap');
$default = 'You are not enrolled in any courses.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/stringshowhidden';
$title = get_string('stringshowhidden', 'theme_cooperkap');
$description = get_string('stringshowhidden_desc', 'theme_cooperkap');
$default = 'Show hidden courses';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/stringshowonlyinprogress';
$title = get_string('stringshowonlyinprogress', 'theme_cooperkap');
$description = get_string('stringshowonlyinprogress_desc', 'theme_cooperkap');
$default = 'Only courses in progress';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/stringdetails';
$title = get_string('stringdetails', 'theme_cooperkap');
$description = get_string('stringdetails_desc', 'theme_cooperkap');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/stringallcourses';
$title = get_string('stringallcourses', 'theme_cooperkap');
$description = get_string('stringallcourses_desc', 'theme_cooperkap');
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

$name = 'theme_cooperkap/stringnocourses';
$title = get_string('stringnocourses', 'theme_cooperkap');
$description = get_string('stringnocourses_desc', 'theme_cooperkap');
$default = 'You are not enrolled in any courses.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/mycourseswrapperheight';
$title = get_string('mycourseswrapperheight', 'theme_cooperkap');
$description = get_string('mycourseswrapperheight_desc', 'theme_cooperkap');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/hsidebarcolors';
$heading = get_string('hsidebarcolors', 'theme_cooperkap');
$setting = new admin_setting_heading($name, $heading,
    format_text(get_string('hsidebarcolors_desc', 'theme_cooperkap'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_cooperkap/colordrawerbg';
$title = get_string('colordrawerbg', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colordrawertext';
$title = get_string('colordrawertext', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colordrawernavcontainer';
$title = get_string('colordrawernavcontainer', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colordrawernavbtnicon';
$title = get_string('colordrawernavbtnicon', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colordrawernavbtniconh';
$title = get_string('colordrawernavbtniconh', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colordrawernavbtntext';
$title = get_string('colordrawernavbtntext', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colordrawernavbtntexth';
$title = get_string('colordrawernavbtntexth', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colordrawernavbtnbgh';
$title = get_string('colordrawernavbtnbgh', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colordrawernavbtntextlight';
$title = get_string('colordrawernavbtntextlight', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colordrawerscrollbar';
$title = get_string('colordrawerscrollbar', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colordrawerlink';
$title = get_string('colordrawerlink', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colordrawerlinkh';
$title = get_string('colordrawerlinkh', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Must add the page after definiting all the settings!
$settings->add($page);
