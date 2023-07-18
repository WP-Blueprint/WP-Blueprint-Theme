<?php

namespace WPBlueprint\Theme\Classic\Extensions;

use Walker_Page;

class ToggleWalker extends Walker_Page {
    public function start_el(&$output, $page, $depth = 0, $args = array(), $current_page = 0) {
        extract($args, EXTR_SKIP);
        if ($depth) {
            $indent = str_repeat("\t", $depth);
        } else {
            $indent = '';
        }

        $output .= $indent . '<li class="page_item page-item-' . $page->ID;
        if (!empty($current_page)) {
            $_current_page = get_post($current_page);
            if ($_current_page && in_array($page->ID, $_current_page->ancestors)) {
                $output .= ' current_page_ancestor';
            }
            if ($page->ID == $current_page) {
                $output .= ' current_page_item';
            } elseif ($_current_page && $page->ID == $_current_page->post_parent) {
                $output .= ' current_page_parent';
            }
        } elseif ($page->ID == get_option('page_for_posts')) {
            $output .= ' current_page_parent';
        }

        $output .= '"><a href="' . get_permalink($page->ID) . '">' . apply_filters('the_title', $page->post_title, $page->ID) . '</a>';

        if ($args['has_children']) {
            $output .= '<button class="toggle-children"></button>';
        }
    }
}
