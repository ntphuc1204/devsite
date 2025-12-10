<?php
if (!defined('ABSPATH')) exit;

/**
 * Load page-specific CSS
 *
 * @param array $files Danh sách file trong /css/page/
 */
function devsite_enqueue_page_css($files = []) {
    if (!is_array($files)) return;

    foreach ($files as $css) {
        wp_enqueue_style(
            'devsite-' . sanitize_title($css),
            get_template_directory_uri() . '/css/pages/' . $css,
            [],
            filemtime(get_template_directory() . '/css/pages/' . $css)
        );
    }
}

/**
 * Load page-specific JS (nếu cần)
 */
function devsite_enqueue_page_js($files = []) {
    if (!is_array($files)) return;

    foreach ($files as $js) {
        wp_enqueue_script(
            'devsite-' . sanitize_title($js),
            get_template_directory_uri() . '/js/pages/' . $js,
            [],
            null,
            true
        );
    }
}
