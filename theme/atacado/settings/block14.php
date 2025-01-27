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

$page = new admin_settingpage('theme_atacado_block14', get_string('settingsblock14', 'theme_atacado'));

$name = 'theme_atacado/displayblock14';
$title = get_string('turnon', 'theme_atacado');
$description = get_string('displayblock14_desc', 'theme_atacado');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title .
    '<span class="badge badge-sq badge-dark ml-2">Block #14</span>', $description, $default);
$page->add($setting);

$name = 'theme_atacado/block14class';
$title = get_string('additionalclass', 'theme_atacado');
$description = get_string('additionalclass_desc', 'theme_atacado');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/block14textalign';
$title = get_string('block14textalign', 'theme_atacado');
$description = get_string('block14textalign_desc', 'theme_atacado');
$options = [];
$options['left'] = get_string('left', 'theme_atacado');
$options['center'] = get_string('center', 'theme_atacado');
$options['right'] = get_string('right', 'theme_atacado');
$setting = new admin_setting_configselect($name, $title, $description, 'center', $options);
$page->add($setting);

$name = 'theme_atacado/block14titlesize';
$title = get_string('blocktitlesize', 'theme_atacado');
$description = get_string('blocktitlesize_desc', 'theme_atacado');
$default = 1;
$choices = array(0 => 'Normal', 1 => 'Large', 2 => 'Extra Large');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);

$name = 'theme_atacado/block14titlecolor';
$title = get_string('blocktitlecolor', 'theme_atacado');
$description = get_string('blocktitlecolor_desc', 'theme_atacado');
$default = 1;
$choices = array(0 => 'White', 1 => 'Black', 2 => 'Gradient');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);

$name = 'theme_atacado/block14titleweight';
$title = get_string('blocktitleweight', 'theme_atacado');
$description = get_string('blocktitleweight_desc', 'theme_atacado');
$default = 1;
$choices = array(0 => 'Normal', 1 => 'Medium', 2 => 'Bold');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);

$name = 'theme_atacado/displayhrblock14';
$title = get_string('displayblockhr', 'theme_atacado');
$description = get_string('displayblockhr_desc', 'theme_atacado');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/block14introtitle';
$title = get_string('blockintrotitle', 'theme_atacado');
$description = get_string('blockintrotitle_desc', 'theme_atacado');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/block14introcontent';
$title = get_string('blockintrocontent', 'theme_atacado');
$description = get_string('blockintrocontent_desc', 'theme_atacado');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);


$name = 'theme_atacado/block14htmlcontent';
$title = get_string('blockhtmlcontent', 'theme_atacado');
$description = get_string('blockhtmlcontent_desc', 'theme_atacado');
$default = '';
$setting = new alpha_setting_confightmleditor($name, $title, $description, $default);
$page->add($setting);

$fileid = 'block14bg';
$name = 'theme_atacado/block14bg';
$title = get_string('block14bg', 'theme_atacado');
$description = get_string('block14bg_desc', 'theme_atacado');
$opts = array('accepted_types' => array('.png', '.jpg', '.gif', '.webp', '.tiff', '.svg'), 'maxfiles' => 1);
$setting = new admin_setting_configstoredfile($name, $title, $description, $fileid, 0, $opts);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/block14customcss';
$title = get_string('block14customcss', 'theme_atacado');
$description = get_string('block14customcss_desc', 'theme_atacado');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$settings->add($page);
