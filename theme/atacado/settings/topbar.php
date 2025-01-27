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

$page = new admin_settingpage('theme_atacado_settingstopbar', get_string('settingstopbar', 'theme_atacado'));

$name = 'theme_atacado/turnoffdashboardlink';
$title = get_string('turnoffdashboardlink', 'theme_atacado');
$description = get_string('turnoffdashboardlink_desc', 'theme_atacado', $a);
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/topbaradminbtnon';
$title = get_string('topbaradminbtnon', 'theme_atacado');
$description = get_string('topbaradminbtnon_desc', 'theme_atacado', $a);
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/topbareditmode';
$title = get_string('topbareditmode', 'theme_atacado');
$description = get_string('topbareditmode_desc', 'theme_atacado', $a);
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/topbarlogoareaon';
$title = get_string('topbarlogoareaon', 'theme_atacado');
$description = get_string('topbarlogoareaon_desc', 'theme_atacado');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/customlogo';
$title = get_string('customlogo', 'theme_atacado');
$description = get_string('customlogo_desc', 'theme_atacado');
$opts = array('accepted_types' => array('.png', '.jpg', '.svg', 'gif'));
$setting = new admin_setting_configstoredfile($name, $title, $description, 'customlogo', 0, $opts);
$page->add($setting);

$name = 'theme_atacado/customdmlogo';
$title = get_string('customdmlogo', 'theme_atacado');
$description = get_string('customdmlogo_desc', 'theme_atacado');
$opts = array('accepted_types' => array('.png', '.jpg', '.svg', 'gif'));
$setting = new admin_setting_configstoredfile($name, $title, $description, 'customdmlogo', 0, $opts);
$page->add($setting);

$name = 'theme_atacado/logoandname';
$title = get_string('logoandname', 'theme_atacado');
$description = get_string('logoandname_desc', 'theme_atacado', $a);
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/customlogotxt';
$title = get_string('customlogotxt', 'theme_atacado');
$description = get_string('customlogotxt_desc', 'theme_atacado');
$default = 'alpha';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/topbarcustomhtml';
$title = get_string('topbarcustomhtml', 'theme_atacado');
$description = get_string('topbarcustomhtml_desc', 'theme_atacado', $a);
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$page->add($setting);

// Colors.
$name = 'theme_atacado/htopbarcolors';
$heading = get_string('htopbarcolors', 'theme_atacado');
$setting = new admin_setting_heading($name, $heading,
    format_text(get_string('htopbarcolors_desc', 'theme_atacado'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_atacado/colortopbarbg';
$title = get_string('colortopbarbg', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colortopbartext';
$title = get_string('colortopbartext', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colortopbarbtn';
$title = get_string('colortopbarbtn', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colortopbarbtntext';
$title = get_string('colortopbarbtntext', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colortopbarbtnhover';
$title = get_string('colortopbarbtnhover', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colortopbarbtnhovertext';
$title = get_string('colortopbarbtnhovertext', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Must add the page after definiting all the settings!
$settings->add($page);
