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

$page = new admin_settingpage('theme_cooperkap_customization', get_string('settingscustomization', 'theme_cooperkap'));
$name = 'theme_cooperkap/hgooglefont';
$heading = get_string('hgooglefont', 'theme_cooperkap');
$setting = new admin_setting_heading($name, $heading, format_text(get_string('hgooglefont_desc', 'theme_cooperkap'), FORMAT_MARKDOWN));
$page->add($setting);

// Google Font.
$name = 'theme_cooperkap/googlefonturl';
$title = get_string('googlefonturl', 'theme_cooperkap');
$description = get_string('googlefonturl_desc', 'theme_cooperkap');
$default = 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_cooperkap/fontheadings';
$title = get_string('fontheadings', 'theme_cooperkap');
$description = get_string('fontheadings_desc', 'theme_cooperkap');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/fontweightheadings';
$title = get_string('fontweightheadings', 'theme_cooperkap');
$description = get_string('fontweightheadings_desc', 'theme_cooperkap');
$default = '700';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/fontbody';
$title = get_string('fontbody', 'theme_cooperkap');
$description = get_string('fontbody_desc', 'theme_cooperkap');
$default = "'Inter', sans-serif";
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/fontweightregular';
$title = get_string('fontweightregular', 'theme_cooperkap');
$description = get_string('fontweightregular_desc', 'theme_cooperkap');
$default = '400';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/fontweightmedium';
$title = get_string('fontweightmedium', 'theme_cooperkap');
$description = get_string('fontweightmedium_desc', 'theme_cooperkap');
$default = '500';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/fontweightbold';
$title = get_string('fontweightbold', 'theme_cooperkap');
$description = get_string('fontweightbold_desc', 'theme_cooperkap');
$default = '700';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/hgeneral';
$heading = get_string('hgeneral', 'theme_cooperkap');
$setting = new admin_setting_heading($name, $heading, format_text(get_string('hgeneral_desc', 'theme_cooperkap'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_cooperkap/colorbodybg';
$title = get_string('colorbodybg', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colorborder';
$title = get_string('colorborder', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/btnborderradius';
$title = get_string('btnborderradius', 'theme_cooperkap');
$description = get_string('btnborderradius_desc', 'theme_cooperkap');
$setting = new admin_setting_configtext($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/hcolorstxt';
$heading = get_string('hcolorstxt', 'theme_cooperkap');
$setting = new admin_setting_heading($name, $heading, format_text(get_string('hcolorstxt_desc', 'theme_cooperkap'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_cooperkap/colorbody';
$title = get_string('colorbody', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colorbodysecondary';
$title = get_string('colorbodysecondary', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colorbodylight';
$title = get_string('colorbodylight', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colorheadings';
$title = get_string('colorheadings', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colorlink';
$title = get_string('colorlink', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colorlinkhover';
$title = get_string('colorlinkhover', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/hcolorsprimary';
$heading = get_string('hcolorsprimary', 'theme_cooperkap');
$setting = new admin_setting_heading($name, $heading,
    format_text(get_string('hcolorsprimary_desc', 'theme_cooperkap'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_cooperkap/colorprimary600';
$title = get_string('colorprimary600', 'theme_cooperkap');
$description = get_string('colorprimary_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colorprimary100';
$title = get_string('colorprimary100', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colorprimary200';
$title = get_string('colorprimary200', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colorprimary300';
$title = get_string('colorprimary300', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colorprimary400';
$title = get_string('colorprimary400', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colorprimary500';
$title = get_string('colorprimary500', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colorprimary700';
$title = get_string('colorprimary700', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colorprimary800';
$title = get_string('colorprimary800', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colorprimary900';
$title = get_string('colorprimary900', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/hcolorsgrays';
$heading = get_string('hcolorsgrays', 'theme_cooperkap');
$setting = new admin_setting_heading($name, $heading, format_text(get_string('hcolorsgrays_desc', 'theme_cooperkap'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_cooperkap/colorgray100';
$title = get_string('colorgray100', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colorgray200';
$title = get_string('colorgray200', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colorgray300';
$title = get_string('colorgray300', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colorgray400';
$title = get_string('colorgray400', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colorgray500';
$title = get_string('colorgray500', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colorgray600';
$title = get_string('colorgray600', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colorgray700';
$title = get_string('colorgray700', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colorgray800';
$title = get_string('colorgray800', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/colorgray900';
$title = get_string('colorgray900', 'theme_cooperkap');
$description = get_string('color_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/hdmgeneral';
$heading = get_string('hdmgeneral', 'theme_cooperkap');
$setting = new admin_setting_heading($name, $heading, format_text(get_string('hgeneral_desc', 'theme_cooperkap'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_cooperkap/dmcolorbodybg';
$title = get_string('dmcolorbodybg', 'theme_cooperkap');
$description = get_string('dmcolor_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/dmcolorborder';
$title = get_string('dmcolorborder', 'theme_cooperkap');
$description = get_string('dmcolor_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/hdmcolorstxt';
$heading = get_string('hdmcolorstxt', 'theme_cooperkap');
$setting = new admin_setting_heading($name, $heading, format_text(get_string('hdmcolorstxt_desc', 'theme_cooperkap'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_cooperkap/dmcolorbody';
$title = get_string('dmcolorbody', 'theme_cooperkap');
$description = get_string('dmcolor_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/dmcolorbodysecondary';
$title = get_string('dmcolorbodysecondary', 'theme_cooperkap');
$description = get_string('dmcolor_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/dmcolorbodylight';
$title = get_string('dmcolorbodylight', 'theme_cooperkap');
$description = get_string('dmcolor_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/dmcolorheadings';
$title = get_string('dmcolorheadings', 'theme_cooperkap');
$description = get_string('dmcolor_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/dmcolorlink';
$title = get_string('dmcolorlink', 'theme_cooperkap');
$description = get_string('dmcolor_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/dmcolorlinkhover';
$title = get_string('dmcolorlinkhover', 'theme_cooperkap');
$description = get_string('dmcolor_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/hdmcolorsgrays';
$heading = get_string('hdmcolorsgrays', 'theme_cooperkap');
$setting = new admin_setting_heading($name, $heading, format_text(get_string('hdmcolorsgrays_desc', 'theme_cooperkap'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_cooperkap/dmcolorgray100';
$title = get_string('dmcolorgray100', 'theme_cooperkap');
$description = get_string('dmcolor_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/dmcolorgray200';
$title = get_string('dmcolorgray200', 'theme_cooperkap');
$description = get_string('dmcolor_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/dmcolorgray300';
$title = get_string('dmcolorgray300', 'theme_cooperkap');
$description = get_string('dmcolor_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/dmcolorgray400';
$title = get_string('dmcolorgray400', 'theme_cooperkap');
$description = get_string('dmcolor_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/dmcolorgray500';
$title = get_string('dmcolorgray500', 'theme_cooperkap');
$description = get_string('dmcolor_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/dmcolorgray600';
$title = get_string('dmcolorgray600', 'theme_cooperkap');
$description = get_string('dmcolor_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/dmcolorgray700';
$title = get_string('dmcolorgray700', 'theme_cooperkap');
$description = get_string('dmcolor_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/dmcolorgray800';
$title = get_string('dmcolorgray800', 'theme_cooperkap');
$description = get_string('dmcolor_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_cooperkap/dmcolorgray900';
$title = get_string('dmcolorgray900', 'theme_cooperkap');
$description = get_string('dmcolor_desc', 'theme_cooperkap');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$settings->add($page);
