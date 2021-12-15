<?php

/**
 * Sendy API
 *
 * SerMadre AMP Template Handler
 *
 * @version 0.1
 */

class SERMA_AMP_TEMPLATE
{

    public static function load_template($template_name, $serma_amp_vars = [])
    {
        ob_start();
        extract($serma_amp_vars);
        include self::locate_template($template_name, $serma_amp_vars);
        return apply_filters("serma_amp_{$template_name}", ob_get_clean(), $serma_amp_vars);
    }

    public static function show_template($template_name, $serma_amp_vars = [])
    {
        echo self::load_template($template_name, $serma_amp_vars);
    }

    public static function locate_template($template_name, $serma_amp_vars = [])
    {
        $template_name = '/Views/' . $template_name . '.php';
        $template_name = apply_filters('serma_amp__template_name', $template_name, $serma_amp_vars);
        $template = apply_filters('serma_amp__template_file', SERMA_AMP_THEME, $template_name) . $template_name;

        return (locate_template($template_name)) ? locate_template($template_name) : $template;

    }

    public static function render_view($styles = [], $scripts = [], $template = '', $vars = [])
    {
        foreach ($styles as $style) {
            serma_amp_register_style($style);
        }
        foreach ($scripts as $script) {
            serma_amp_register_script($script);
        }
        return self::show_template($template, $vars);
    }

}
