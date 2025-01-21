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

$page = new admin_settingpage('theme_cooperkap_block13', get_string('settingsblock13', 'theme_cooperkap'));

$name = 'theme_cooperkap/displayblock13';
$title = get_string('turnon', 'theme_cooperkap');
$description = get_string('displayblock13_desc', 'theme_cooperkap');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title .
    '<span class="badge badge-sq badge-dark ml-2">Block #13</span>', $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/displayhrblock13';
$title = get_string('displayblockhr', 'theme_cooperkap');
$description = get_string('displayblockhr_desc', 'theme_cooperkap');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/block13class';
$title = get_string('additionalclass', 'theme_cooperkap');
$description = get_string('additionalclass_desc', 'theme_cooperkap');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/block13textalign';
$title = get_string('block13textalign', 'theme_cooperkap');
$description = get_string('block13textalign_desc', 'theme_cooperkap');
$options = [];
$options['left'] = get_string('left', 'theme_cooperkap');
$options['center'] = get_string('center', 'theme_cooperkap');
$options['right'] = get_string('right', 'theme_cooperkap');
$setting = new admin_setting_configselect($name, $title, $description, 'center', $options);
$page->add($setting);

$name = 'theme_cooperkap/block13titlesize';
$title = get_string('blocktitlesize', 'theme_cooperkap');
$description = get_string('blocktitlesize_desc', 'theme_cooperkap');
$default = 1;
$choices = array(0 => 'Normal', 1 => 'Large', 2 => 'Extra Large');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);

$name = 'theme_cooperkap/block13titlecolor';
$title = get_string('blocktitlecolor', 'theme_cooperkap');
$description = get_string('blocktitlecolor_desc', 'theme_cooperkap');
$default = 1;
$choices = array(0 => 'White', 1 => 'Black', 2 => 'Gradient');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);

$name = 'theme_cooperkap/block13titleweight';
$title = get_string('blocktitleweight', 'theme_cooperkap');
$description = get_string('blocktitleweight_desc', 'theme_cooperkap');
$default = 1;
$choices = array(0 => 'Normal', 1 => 'Medium', 2 => 'Bold');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);

$name = 'theme_cooperkap/block13introtitle';
$title = get_string('blockintrotitle', 'theme_cooperkap');
$description = get_string('blockintrotitle_desc', 'theme_cooperkap');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/block13introcontent';
$title = get_string('blockintrocontent', 'theme_cooperkap');
$description = get_string('blockintrocontent_desc', 'theme_cooperkap');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/block13htmlcontent';
$title = get_string('blockhtmlcontent', 'theme_cooperkap');
$description = get_string('blockhtmlcontent_desc', 'theme_cooperkap');
$default = '';
$setting = new cooperkap_setting_confightmleditor($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/block13footercontent';
$title = get_string('blockfootercontent', 'theme_cooperkap');
$description = get_string('blockfootercontent_desc', 'theme_cooperkap');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$fileid = 'block13bg';
$name = 'theme_cooperkap/block13bg';
$title = get_string('block13bg', 'theme_cooperkap');
$description = get_string('block13bg_desc', 'theme_cooperkap');
$opts = array('accepted_types' => array('.png', '.jpg', '.gif', '.webp', '.tiff', '.svg'), 'maxfiles' => 1);
$setting = new admin_setting_configstoredfile($name, $title, $description, $fileid, 0, $opts);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/block13customcss';
$title = get_string('block13customcss', 'theme_cooperkap');
$description = get_string('block13customcss_desc', 'theme_cooperkap');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$settings->add($page);
