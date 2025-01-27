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

// Login settings.
$page = new admin_settingpage('theme_cooperkap_settingslogin', get_string('settingslogin', 'theme_cooperkap'));

$name = 'theme_cooperkap/hlogin';
$heading = get_string('hlogin', 'theme_cooperkap');
$setting = new admin_setting_heading($name, $heading, format_text(get_string('hlogin_desc', 'theme_cooperkap'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_cooperkap/setloginlayout';
$title = get_string('setloginlayout', 'theme_cooperkap');
$description = get_string('setloginlayout_desc', 'theme_cooperkap');
$options = [];
$options[1] = get_string('loginlayout1', 'theme_cooperkap');
$options[2] = get_string('loginlayout2', 'theme_cooperkap');
$options[3] = get_string('loginlayout3', 'theme_cooperkap');
$options[4] = get_string('loginlayout4', 'theme_cooperkap');
$options[5] = get_string('loginlayout5', 'theme_cooperkap');
$setting = new admin_setting_configselect($name, $title, $description, 1, $options);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/loginidprovtop';
$title = get_string('loginidprovtop', 'theme_cooperkap');
$description = get_string('loginidprovtop_desc', 'theme_cooperkap');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/customloginlogo';
$title = get_string('customloginlogo', 'theme_cooperkap');
$description = get_string('customloginlogo_desc', 'theme_cooperkap');
$opts = array('accepted_types' => array('.png', '.jpg', '.gif', '.svg'));
$setting = new admin_setting_configstoredfile($name, $title, $description, 'customloginlogo', 0, $opts);
$page->add($setting);

$name = 'theme_cooperkap/customlogindmlogo';
$title = get_string('customlogindmlogo', 'theme_cooperkap');
$description = get_string('customlogindmlogo_desc', 'theme_cooperkap');
$opts = array('accepted_types' => array('.png', '.jpg', '.gif', '.svg'));
$setting = new admin_setting_configstoredfile($name, $title, $description, 'customlogindmlogo', 0, $opts);
$page->add($setting);

$name = 'theme_cooperkap/loginlogooutside';
$title = get_string('loginlogooutside', 'theme_cooperkap');
$description = get_string('loginlogooutside_desc', 'theme_cooperkap');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/customsignupoutside';
$title = get_string('customsignupoutside', 'theme_cooperkap');
$description = get_string('customsignupoutside_desc', 'theme_cooperkap');
$default = 1;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/loginbg';
$title = get_string('loginbg', 'theme_cooperkap');
$description = get_string('loginbg_desc', 'theme_cooperkap');
$opts = array('accepted_types' => array('.png', '.jpg', '.gif', '.webp', '.tiff', '.svg'));
$setting = new admin_setting_configstoredfile($name, $title, $description, 'loginbg', 0, $opts);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/loginbgcolor';
$title = get_string('loginbgcolor', 'theme_cooperkap');
$description = get_string('loginbgcolor_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/hideforgotpassword';
$title = get_string('hideforgotpassword', 'theme_cooperkap');
$description = get_string('hideforgotpassword_desc', 'theme_cooperkap');
$default = 0;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/logininfobox';
$title = get_string('logininfobox', 'theme_cooperkap');
$description = get_string('logininfobox_desc', 'theme_cooperkap');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/loginintrotext';
$title = get_string('loginintrotext', 'theme_cooperkap');
$description = get_string('loginintrotext_desc', 'theme_cooperkap');
$default = '';
$setting = new alpha_setting_confightmleditor($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/loginhtmlcontent1';
$title = get_string('loginhtmlcontent1', 'theme_cooperkap');
$description = get_string('loginhtmlcontent1_desc', 'theme_cooperkap');
$default = '';
$setting = new alpha_setting_confightmleditor($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/loginhtmlcontent2';
$title = get_string('loginhtmlcontent2', 'theme_cooperkap');
$description = get_string('loginhtmlcontent2_desc', 'theme_cooperkap');
$default = '';
$setting = new alpha_setting_confightmleditor($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/loginhtmlblockbottom';
$title = get_string('loginhtmlblockbottom', 'theme_cooperkap');
$description = get_string('loginhtmlblockbottom_desc', 'theme_cooperkap');
$default = '';
$setting = new alpha_setting_confightmleditor($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/loginhtmlcontent3';
$title = get_string('loginhtmlcontent3', 'theme_cooperkap');
$description = get_string('loginhtmlcontent3_desc', 'theme_cooperkap');
$default = '';
$setting = new alpha_setting_confightmleditor($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/loginfootercontent';
$title = get_string('loginfootercontent', 'theme_cooperkap');
$description = get_string('loginfootercontent_desc', 'theme_cooperkap');
$default = '';
$setting = new alpha_setting_confightmleditor($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/logincustomfooterhtml';
$title = get_string('logincustomfooterhtml', 'theme_cooperkap');
$description = get_string('logincustomfooterhtml_desc', 'theme_cooperkap');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/stringca';
$title = get_string('stringca', 'theme_cooperkap');
$description = get_string('stringca_desc', 'theme_cooperkap');
$default = 'Don\'t have an account?';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/stringbacktologin';
$title = get_string('stringbacktologin', 'theme_cooperkap');
$description = get_string('stringbacktologin_desc', 'theme_cooperkap');
$default = 'Already have an account?';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/hsignup';
$heading = get_string('hsignup', 'theme_cooperkap');
$setting = new admin_setting_heading($name, $heading, format_text(get_string('hsignup_desc', 'theme_cooperkap'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_cooperkap/signupintrotext';
$title = get_string('signupintrotext', 'theme_cooperkap');
$description = get_string('signupintrotext_desc', 'theme_cooperkap');
$default = '';
$setting = new alpha_setting_confightmleditor($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/signuptext';
$title = get_string('signuptext', 'theme_cooperkap');
$description = get_string('signuptext_desc', 'theme_cooperkap');
$default = '';
$setting = new alpha_setting_confightmleditor($name, $title, $description, $default);
$page->add($setting);

$settings->add($page);
