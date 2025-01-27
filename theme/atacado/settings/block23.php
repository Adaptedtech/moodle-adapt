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

$page = new admin_settingpage('theme_atacado_block23', get_string('settingsblock23', 'theme_atacado'));

$name = 'theme_atacado/displayblock23';
$title = get_string('turnon', 'theme_atacado');
$description = get_string('displayblock23_desc', 'theme_atacado');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title .
    '<span class="badge badge-sq badge-dark ml-2">Block #23 from Alpha 1.5</span>', $description, $default);
$page->add($setting);

$name = 'theme_atacado/displayhrblock23';
$title = get_string('displayblockhr', 'theme_atacado');
$description = get_string('displayblockhr_desc', 'theme_atacado');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/block23class';
$title = get_string('additionalclass', 'theme_atacado');
$description = get_string('additionalclass_desc', 'theme_atacado');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/block23introtitle';
$title = get_string('blockintrotitle', 'theme_atacado');
$description = get_string('blockintrotitle_desc', 'theme_atacado');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/block23introcontent';
$title = get_string('blockintrocontent', 'theme_atacado');
$description = get_string('blockintrocontent_desc', 'theme_atacado');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/fpcustomcategoryblockhtml1';
$title = get_string('fpcustomcategoryblockhtml1', 'theme_atacado');
$description = get_string('fpcustomcategoryblockhtml1_desc', 'theme_atacado', $a);
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/fpcustomcategoryblockhtml2';
$title = get_string('fpcustomcategoryblockhtml2', 'theme_atacado');
$description = get_string('fpcustomcategoryblockhtml2_desc', 'theme_atacado', $a);
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/fpcustomcategoryblockhtml3';
$title = get_string('fpcustomcategoryblockhtml3', 'theme_atacado');
$description = get_string('fpcustomcategoryblockhtml3_desc', 'theme_atacado', $a);
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/block23footercontent';
$title = get_string('blockfootercontent', 'theme_atacado');
$description = get_string('blockfootercontent_desc', 'theme_atacado');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$settings->add($page);
