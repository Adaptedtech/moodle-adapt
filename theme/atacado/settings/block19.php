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

$page = new admin_settingpage('theme_atacado_block19', get_string('settingsblock19', 'theme_atacado'));

$name = 'theme_atacado/displayblock19';
$title = get_string('turnon', 'theme_atacado');
$description = get_string('displayblock19_desc', 'theme_atacado');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title .
    '<span class="badge badge-sq badge-dark ml-2">Block #19</span>', $description, $default);
$page->add($setting);

$name = 'theme_atacado/block19class';
$title = get_string('additionalclass', 'theme_atacado');
$description = get_string('additionalclass_desc', 'theme_atacado');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/block19textalign';
$title = get_string('block19textalign', 'theme_atacado');
$description = get_string('block19textalign_desc', 'theme_atacado');
$options = [];
$options['left'] = get_string('left', 'theme_atacado');
$options['center'] = get_string('center', 'theme_atacado');
$options['right'] = get_string('right', 'theme_atacado');
$setting = new admin_setting_configselect($name, $title, $description, 'center', $options);
$page->add($setting);

$name = 'theme_atacado/block19titlesize';
$title = get_string('blocktitlesize', 'theme_atacado');
$description = get_string('blocktitlesize_desc', 'theme_atacado');
$default = 1;
$choices = array(0 => 'Normal', 1 => 'Large', 2 => 'Extra Large');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);

$name = 'theme_atacado/block19titlecolor';
$title = get_string('blocktitlecolor', 'theme_atacado');
$description = get_string('blocktitlecolor_desc', 'theme_atacado');
$default = 1;
$choices = array(0 => 'White', 1 => 'Black', 2 => 'Gradient');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);

$name = 'theme_atacado/block19titleweight';
$title = get_string('blocktitleweight', 'theme_atacado');
$description = get_string('blocktitleweight_desc', 'theme_atacado');
$default = 1;
$choices = array(0 => 'Normal', 1 => 'Medium', 2 => 'Bold');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);

$name = 'theme_atacado/displayhrblock19';
$title = get_string('displayblockhr', 'theme_atacado');
$description = get_string('displayblockhr_desc', 'theme_atacado');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/block19introtitle';
$title = get_string('blockintrotitle', 'theme_atacado');
$description = get_string('blockintrotitle_desc', 'theme_atacado');
$default = 'One-time charge<br />Get this theme today!';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/block19introcontent';
$title = get_string('blockintrocontent', 'theme_atacado');
$description = get_string('blockintrocontent_desc', 'theme_atacado');
$default = 'Our exclusive lifetime update theme & user-centered design
<br />will keep your moodle site running strong for many years to come!';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);


$name = 'theme_atacado/block19htmlcontent';
$title = get_string('blockhtmlcontent', 'theme_atacado');
$description = get_string('blockhtmlcontent_desc', 'theme_atacado');
$default = '<div class="mt-4">
<a href="https://rosea.io/space" class="btn btn-lg btn-dark">Get this theme for $99*</a>
</div>
<div class="mt-2">
<a href="https://space.rosea.io/doc" class="btn btn-sm btn-secondary">Documentation</a>
</div>';
$setting = new alpha_setting_confightmleditor($name, $title, $description, $default);
$page->add($setting);


$name = 'theme_atacado/block19footercontent';
$title = get_string('blockfootercontent', 'theme_atacado');
$description = get_string('blockfootercontent_desc', 'theme_atacado');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$fileid = 'block19bg';
$name = 'theme_atacado/block19bg';
$title = get_string('block19bg', 'theme_atacado');
$description = get_string('block19bg_desc', 'theme_atacado');
$opts = array('accepted_types' => array('.png', '.jpg', '.gif', '.webp', '.tiff', '.svg'), 'maxfiles' => 1);
$setting = new admin_setting_configstoredfile($name, $title, $description, $fileid, 0, $opts);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/block19customcss';
$title = get_string('block19customcss', 'theme_atacado');
$description = get_string('block19customcss_desc', 'theme_atacado');
$default = 'background-position: top; background-size: cover;';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$settings->add($page);
