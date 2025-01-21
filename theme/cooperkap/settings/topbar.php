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

$page = new admin_settingpage('theme_cooperkap_settingstopbar', get_string('settingstopbar', 'theme_cooperkap'));

$name = 'theme_cooperkap/turnoffdashboardlink';
$title = get_string('turnoffdashboardlink', 'theme_cooperkap');
$description = get_string('turnoffdashboardlink_desc', 'theme_cooperkap', $a);
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/topbaradminbtnon';
$title = get_string('topbaradminbtnon', 'theme_cooperkap');
$description = get_string('topbaradminbtnon_desc', 'theme_cooperkap', $a);
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/topbareditmode';
$title = get_string('topbareditmode', 'theme_cooperkap');
$description = get_string('topbareditmode_desc', 'theme_cooperkap', $a);
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/topbarlogoareaon';
$title = get_string('topbarlogoareaon', 'theme_cooperkap');
$description = get_string('topbarlogoareaon_desc', 'theme_cooperkap');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/customlogo';
$title = get_string('customlogo', 'theme_cooperkap');
$description = get_string('customlogo_desc', 'theme_cooperkap');
$opts = array('accepted_types' => array('.png', '.jpg', '.svg', 'gif'));
$setting = new admin_setting_configstoredfile($name, $title, $description, 'customlogo', 0, $opts);
$page->add($setting);

$name = 'theme_cooperkap/customdmlogo';
$title = get_string('customdmlogo', 'theme_cooperkap');
$description = get_string('customdmlogo_desc', 'theme_cooperkap');
$opts = array('accepted_types' => array('.png', '.jpg', '.svg', 'gif'));
$setting = new admin_setting_configstoredfile($name, $title, $description, 'customdmlogo', 0, $opts);
$page->add($setting);

$name = 'theme_cooperkap/logoandname';
$title = get_string('logoandname', 'theme_cooperkap');
$description = get_string('logoandname_desc', 'theme_cooperkap', $a);
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/customlogotxt';
$title = get_string('customlogotxt', 'theme_cooperkap');
$description = get_string('customlogotxt_desc', 'theme_cooperkap');
$default = 'cooperkap';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/topbarcustomhtml';
$title = get_string('topbarcustomhtml', 'theme_cooperkap');
$description = get_string('topbarcustomhtml_desc', 'theme_cooperkap', $a);
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$page->add($setting);

// Colors.
$name = 'theme_cooperkap/htopbarcolors';
$heading = get_string('htopbarcolors', 'theme_cooperkap');
$setting = new admin_setting_heading($name, $heading,
    format_text(get_string('htopbarcolors_desc', 'theme_cooperkap'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_cooperkap/colortopbarbg';
$title = get_string('colortopbarbg', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colortopbartext';
$title = get_string('colortopbartext', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colortopbarbtn';
$title = get_string('colortopbarbtn', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colortopbarbtntext';
$title = get_string('colortopbarbtntext', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colortopbarbtnhover';
$title = get_string('colortopbarbtnhover', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colortopbarbtnhovertext';
$title = get_string('colortopbarbtnhovertext', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Must add the page after definiting all the settings!
$settings->add($page);
