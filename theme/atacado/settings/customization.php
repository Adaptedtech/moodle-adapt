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

$page = new admin_settingpage('theme_atacado_customization', get_string('settingscustomization', 'theme_atacado'));
$name = 'theme_atacado/hgooglefont';
$heading = get_string('hgooglefont', 'theme_atacado');
$setting = new admin_setting_heading($name, $heading, format_text(get_string('hgooglefont_desc', 'theme_atacado'), FORMAT_MARKDOWN));
$page->add($setting);

// Google Font.
$name = 'theme_atacado/googlefonturl';
$title = get_string('googlefonturl', 'theme_atacado');
$description = get_string('googlefonturl_desc', 'theme_atacado');
$default = 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$page->add($setting);

$name = 'theme_atacado/fontheadings';
$title = get_string('fontheadings', 'theme_atacado');
$description = get_string('fontheadings_desc', 'theme_atacado');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/fontweightheadings';
$title = get_string('fontweightheadings', 'theme_atacado');
$description = get_string('fontweightheadings_desc', 'theme_atacado');
$default = '700';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/fontbody';
$title = get_string('fontbody', 'theme_atacado');
$description = get_string('fontbody_desc', 'theme_atacado');
$default = "'Inter', sans-serif";
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/fontweightregular';
$title = get_string('fontweightregular', 'theme_atacado');
$description = get_string('fontweightregular_desc', 'theme_atacado');
$default = '400';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/fontweightmedium';
$title = get_string('fontweightmedium', 'theme_atacado');
$description = get_string('fontweightmedium_desc', 'theme_atacado');
$default = '500';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/fontweightbold';
$title = get_string('fontweightbold', 'theme_atacado');
$description = get_string('fontweightbold_desc', 'theme_atacado');
$default = '700';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/hgeneral';
$heading = get_string('hgeneral', 'theme_atacado');
$setting = new admin_setting_heading($name, $heading, format_text(get_string('hgeneral_desc', 'theme_atacado'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_atacado/colorbodybg';
$title = get_string('colorbodybg', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colorborder';
$title = get_string('colorborder', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/btnborderradius';
$title = get_string('btnborderradius', 'theme_atacado');
$description = get_string('btnborderradius_desc', 'theme_atacado');
$setting = new admin_setting_configtext($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/hcolorstxt';
$heading = get_string('hcolorstxt', 'theme_atacado');
$setting = new admin_setting_heading($name, $heading, format_text(get_string('hcolorstxt_desc', 'theme_atacado'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_atacado/colorbody';
$title = get_string('colorbody', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colorbodysecondary';
$title = get_string('colorbodysecondary', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colorbodylight';
$title = get_string('colorbodylight', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colorheadings';
$title = get_string('colorheadings', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colorlink';
$title = get_string('colorlink', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colorlinkhover';
$title = get_string('colorlinkhover', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/hcolorsprimary';
$heading = get_string('hcolorsprimary', 'theme_atacado');
$setting = new admin_setting_heading($name, $heading,
    format_text(get_string('hcolorsprimary_desc', 'theme_atacado'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_atacado/colorprimary600';
$title = get_string('colorprimary600', 'theme_atacado');
$description = get_string('colorprimary_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colorprimary100';
$title = get_string('colorprimary100', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colorprimary200';
$title = get_string('colorprimary200', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colorprimary300';
$title = get_string('colorprimary300', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colorprimary400';
$title = get_string('colorprimary400', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colorprimary500';
$title = get_string('colorprimary500', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colorprimary700';
$title = get_string('colorprimary700', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colorprimary800';
$title = get_string('colorprimary800', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colorprimary900';
$title = get_string('colorprimary900', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/hcolorsgrays';
$heading = get_string('hcolorsgrays', 'theme_atacado');
$setting = new admin_setting_heading($name, $heading, format_text(get_string('hcolorsgrays_desc', 'theme_atacado'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_atacado/colorgray100';
$title = get_string('colorgray100', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colorgray200';
$title = get_string('colorgray200', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colorgray300';
$title = get_string('colorgray300', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colorgray400';
$title = get_string('colorgray400', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colorgray500';
$title = get_string('colorgray500', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colorgray600';
$title = get_string('colorgray600', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colorgray700';
$title = get_string('colorgray700', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colorgray800';
$title = get_string('colorgray800', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/colorgray900';
$title = get_string('colorgray900', 'theme_atacado');
$description = get_string('color_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/hdmgeneral';
$heading = get_string('hdmgeneral', 'theme_atacado');
$setting = new admin_setting_heading($name, $heading, format_text(get_string('hgeneral_desc', 'theme_atacado'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_atacado/dmcolorbodybg';
$title = get_string('dmcolorbodybg', 'theme_atacado');
$description = get_string('dmcolor_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/dmcolorborder';
$title = get_string('dmcolorborder', 'theme_atacado');
$description = get_string('dmcolor_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/hdmcolorstxt';
$heading = get_string('hdmcolorstxt', 'theme_atacado');
$setting = new admin_setting_heading($name, $heading, format_text(get_string('hdmcolorstxt_desc', 'theme_atacado'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_atacado/dmcolorbody';
$title = get_string('dmcolorbody', 'theme_atacado');
$description = get_string('dmcolor_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/dmcolorbodysecondary';
$title = get_string('dmcolorbodysecondary', 'theme_atacado');
$description = get_string('dmcolor_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/dmcolorbodylight';
$title = get_string('dmcolorbodylight', 'theme_atacado');
$description = get_string('dmcolor_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/dmcolorheadings';
$title = get_string('dmcolorheadings', 'theme_atacado');
$description = get_string('dmcolor_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/dmcolorlink';
$title = get_string('dmcolorlink', 'theme_atacado');
$description = get_string('dmcolor_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/dmcolorlinkhover';
$title = get_string('dmcolorlinkhover', 'theme_atacado');
$description = get_string('dmcolor_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/hdmcolorsgrays';
$heading = get_string('hdmcolorsgrays', 'theme_atacado');
$setting = new admin_setting_heading($name, $heading, format_text(get_string('hdmcolorsgrays_desc', 'theme_atacado'), FORMAT_MARKDOWN));
$page->add($setting);

$name = 'theme_atacado/dmcolorgray100';
$title = get_string('dmcolorgray100', 'theme_atacado');
$description = get_string('dmcolor_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/dmcolorgray200';
$title = get_string('dmcolorgray200', 'theme_atacado');
$description = get_string('dmcolor_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/dmcolorgray300';
$title = get_string('dmcolorgray300', 'theme_atacado');
$description = get_string('dmcolor_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/dmcolorgray400';
$title = get_string('dmcolorgray400', 'theme_atacado');
$description = get_string('dmcolor_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/dmcolorgray500';
$title = get_string('dmcolorgray500', 'theme_atacado');
$description = get_string('dmcolor_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/dmcolorgray600';
$title = get_string('dmcolorgray600', 'theme_atacado');
$description = get_string('dmcolor_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/dmcolorgray700';
$title = get_string('dmcolorgray700', 'theme_atacado');
$description = get_string('dmcolor_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/dmcolorgray800';
$title = get_string('dmcolorgray800', 'theme_atacado');
$description = get_string('dmcolor_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$name = 'theme_atacado/dmcolorgray900';
$title = get_string('dmcolorgray900', 'theme_atacado');
$description = get_string('dmcolor_desc', 'theme_atacado');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$settings->add($page);
