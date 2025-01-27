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

$page = new admin_settingpage('theme_atacado_block9', get_string('settingsblock9', 'theme_atacado'));

$name = 'theme_atacado/displayblock9';
$title = get_string('turnon', 'theme_atacado');
$description = get_string('displayblock9_desc', 'theme_atacado');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title .
    '<span class="badge badge-sq badge-dark ml-2">Block #9</span>', $description, $default);
$page->add($setting);

$name = 'theme_atacado/displayhrblock9';
$title = get_string('displayblockhr', 'theme_atacado');
$description = get_string('displayblockhr_desc', 'theme_atacado');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/block9class';
$title = get_string('additionalclass', 'theme_atacado');
$description = get_string('additionalclass_desc', 'theme_atacado');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/block9introtitle';
$title = get_string('blockintrotitle', 'theme_atacado');
$description = get_string('blockintrotitle_desc', 'theme_atacado');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/block9introcontent';
$title = get_string('blockintrocontent', 'theme_atacado');
$description = get_string('blockintrocontent_desc', 'theme_atacado');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/block9htmlcontent';
$title = get_string('blockhtmlcontent', 'theme_atacado');
$description = get_string('blockhtmlcontent_desc', 'theme_atacado');
$default = '';
$setting = new alpha_setting_confightmleditor($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/block9footercontent';
$title = get_string('blockfootercontent', 'theme_atacado');
$description = get_string('blockfootercontent_desc', 'theme_atacado');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$settings->add($page);
