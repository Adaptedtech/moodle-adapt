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

$page = new admin_settingpage('theme_cooperkap_block5', get_string('settingsblock5', 'theme_cooperkap'));

$name = 'theme_cooperkap/displayblock5';
$title = get_string('turnon', 'theme_cooperkap');
$description = get_string('displayblock5_desc', 'theme_cooperkap');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title .
    '<span class="badge badge-sq badge-dark ml-2">Block #5</span>', $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/displayhrblock5';
$title = get_string('displayblockhr', 'theme_cooperkap');
$description = get_string('displayblockhr_desc', 'theme_cooperkap');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/block5class';
$title = get_string('additionalclass', 'theme_cooperkap');
$description = get_string('additionalclass_desc', 'theme_cooperkap');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/block5introtitle';
$title = get_string('blockintrotitle', 'theme_cooperkap');
$description = get_string('blockintrotitle_desc', 'theme_cooperkap');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/block5introcontent';
$title = get_string('blockintrocontent', 'theme_cooperkap');
$description = get_string('blockintrocontent_desc', 'theme_cooperkap');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/block5htmlcontent';
$title = get_string('blockhtmlcontent', 'theme_cooperkap');
$description = get_string('blockhtmlcontent_desc', 'theme_cooperkap');
$default = '<div class="wrapper-fw rui-block-desc rui-block-desc--lg">
Custom block no.5 allows you to display multiple logotypes.</div>';
$setting = new cooperkap_setting_confightmleditor($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/block5footercontent';
$title = get_string('blockfootercontent', 'theme_cooperkap');
$description = get_string('blockfootercontent_desc', 'theme_cooperkap');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/block5slidesperrow';
$title = get_string('block5slidesperrow', 'theme_cooperkap');
$description = get_string('block5slidesperrow_desc', 'theme_cooperkap');
$default = '5';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/block5count';
$title = get_string('block5count', 'theme_cooperkap');
$description = get_string('block5count_desc', 'theme_cooperkap');
$default = 5;
$options = array();
for ($i = 1; $i <= 30; $i++) {
    $options[$i] = $i;
}
$setting = new admin_setting_configselect($name, $title, $description, $default, $options);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// If we don't have an slide yet, default to the preset.
$slidercount = get_config('theme_cooperkap', 'block5count');

if (!$slidercount) {
    $slidercount = 1;
}

for ($sliderindex = 1; $sliderindex <= $slidercount; $sliderindex++) {
    $name = 'theme_cooperkap/hblock5item' . $sliderindex;
    $heading = get_string('hblock5item', 'theme_cooperkap');
    $setting = new admin_setting_heading($name, '<span class="rui-admin-no">' .
        $sliderindex . '</span>' .
        $heading, format_text(get_string('hblock5item_desc', 'theme_cooperkap'), FORMAT_MARKDOWN));
    $page->add($setting);

    $fileid = 'block5itemimg' . $sliderindex;
    $name = 'theme_cooperkap/block5itemimg' . $sliderindex;
    $title = get_string('block5itemimg', 'theme_cooperkap');
    $description = get_string('block5itemimg_desc', 'theme_cooperkap');
    $opts = array('accepted_types' => array('.png', '.jpg', '.gif', '.webp', '.tiff', '.svg'), 'maxfiles' => 1);
    $setting = new admin_setting_configstoredfile($name, '<span class="rui-admin-no">' .
        $sliderindex . '</span>' . $title, $description, $fileid, 0, $opts);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $name = 'theme_cooperkap/block5itemtitle' . $sliderindex;
    $title = get_string('block5itemtitle', 'theme_cooperkap');
    $description = get_string('block5itemtitle_desc', 'theme_cooperkap');
    $setting = new admin_setting_configtext($name, '<span class="rui-admin-no">' .
        $sliderindex . '</span>' . $title, $description, '', PARAM_TEXT);
    $page->add($setting);

    $name = 'theme_cooperkap/block5itemurl' . $sliderindex;
    $title = get_string('block5itemurl', 'theme_cooperkap');
    $description = get_string('block5itemurl_desc', 'theme_cooperkap');
    $default = '';
    $setting = new admin_setting_configtext($name, '<span class="rui-admin-no">' .
        $sliderindex . '</span>' . $title, $description, $default);
    $page->add($setting);
}

$settings->add($page);
