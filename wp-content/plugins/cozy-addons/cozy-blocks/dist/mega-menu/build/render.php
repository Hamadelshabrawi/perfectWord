<?php

use CozyBlock\Helpers\CozyHelpers;

$client_id      = ! empty( $attributes['blockClientId'] ) ? $attributes['blockClientId'] : '';
$cozy_block_var = 'cozyMegaMenu_' . str_replace( '-', '_', $client_id );

$attributes['megaMenuTemplates'] = CozyHelpers::get_cozy_mega_menu_templates();

wp_localize_script( 'cozy-block-scripts', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockMegaMenuInit( "' . $client_id . '" ) }) ' );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$content_gap_top = $attributes['contentGap'] + 40;

$block_styles = <<<BLOCK_STYLES
#$block_id.display-horizontal .cozy-menu-wrapper {
    gap: {$attributes['menuGap']}px;
}

#$block_id .cozy-menu-wrapper {
    padding: {$attributes['menuStyles']['padding']['top']}px {$attributes['menuStyles']['padding']['right']}px {$attributes['menuStyles']['padding']['bottom']}px {$attributes['menuStyles']['padding']['left']}px;
    border-width: {$attributes['menuStyles']['borderWidth']}px;
    border-style: {$attributes['menuStyles']['borderType']};
    border-color: {$attributes['menuStyles']['borderColor']};
    border-radius: {$attributes['menuStyles']['borderRadius']}px;
    background-color: {$attributes['menuStyles']['bgColor']};
}

#$block_id .cozy-menu-wrapper > .wp-block-navigation-item {
    padding: {$attributes['menuStyles']['itemPadding']['top']}px {$attributes['menuStyles']['itemPadding']['right']}px {$attributes['menuStyles']['itemPadding']['bottom']}px {$attributes['menuStyles']['itemPadding']['left']}px;
}
#$block_id .cozy-menu-wrapper > .wp-block-navigation-item:hover {
    border-radius: {$attributes['menuStyles']['itemBorderRadius']}px;
    background-color: {$attributes['menuStyles']['itemHoverColor']};
}
#$block_id .cozy-menu-wrapper > .wp-block-navigation-item:hover .wp-block-navigation-item__content {
    color: {$attributes['menuStyles']['textHoverColor']};
}
#$block_id .wp-block-navigation-item li.wp-block-navigation-item:not(:last-child) {
    margin-bottom: {$attributes['submenuStyles']['itemSpacing']}px;
}
#$block_id .cozy-block-navigation-menu.full-screen li.wp-block-navigation-item:not(:last-child) {
    margin-bottom: {$attributes['responsive']['gap']}px;
}
#$block_id.display-vertical .cozy-block-navigation-menu:not(.full-screen) .cozy-menu-wrapper > .wp-block-navigation-item {
    width: {$attributes['menuWidth']}px;
}
#$block_id.display-vertical .cozy-block-navigation-menu:not(.full-screen) .cozy-mega-menu__item .cozy-block-mega-menu__dropdown {
    left: {$attributes['menuWidth']}px;
    width: {$attributes['dropdownWidth']}px;
}
#$block_id .wp-block-navigation__submenu-container {
    min-width: {$attributes['submenuStyles']['minWidth']}px;
    border-width: {$attributes['submenuStyles']['borderWidth']}px;
    border-style: {$attributes['submenuStyles']['borderType']};
    border-color: {$attributes['submenuStyles']['borderColor']};
    border-radius: {$attributes['submenuStyles']['borderRadius']}px;
    background-color: {$attributes['submenuStyles']['bgColor']};
}
#$block_id .wp-block-navigation__submenu-container .wp-block-navigation-item {
    padding: {$attributes['submenuStyles']['padding']['top']}px {$attributes['submenuStyles']['padding']['right']}px {$attributes['submenuStyles']['padding']['bottom']}px {$attributes['submenuStyles']['padding']['left']}px;
}
#$block_id.submenu-has-box-shadow .wp-block-navigation__submenu-container {
    box-shadow: {$attributes['submenuStyles']['boxShadow']['horizontal']}px {$attributes['submenuStyles']['boxShadow']['vertical']}px {$attributes['submenuStyles']['boxShadow']['blur']}px {$attributes['submenuStyles']['boxShadow']['spread']}px {$attributes['submenuStyles']['boxShadow']['color']} {$attributes['submenuStyles']['boxShadow']['position']};
}
#$block_id .wp-block-navigation__submenu-container .wp-block-navigation-item:hover {
    background-color: {$attributes['submenuStyles']['itemHoverColor']};
}
#$block_id .wp-block-navigation__submenu-container .wp-block-navigation-item:hover .wp-block-navigation-item__content {
    color: {$attributes['submenuStyles']['textHoverColor']};
}
#$block_id.display-vertical .cozy-menu-wrapper > .wp-block-navigation-item.has-child > .wp-block-navigation__submenu-container {
    left: {$attributes['menuWidth']}px;
}
#$block_id.display-horizontal .cozy-mega-menu__item .cozy-block-mega-menu__dropdown, #$block_id.display-horizontal .cozy-menu-wrapper .wp-block-navigation__submenu-container {
    top: {$content_gap_top}px;
}
#$block_id.display-horizontal.event-hover .cozy-mega-menu__item:hover .cozy-block-mega-menu__dropdown, #$block_id.display-horizontal .cozy-mega-menu__item .cozy-block-mega-menu__dropdown.show-cozy-dropdown-content {
    top: {$attributes['contentGap']}px;
}
#$block_id.display-horizontal.event-hover .wp-block-navigation-item.has-child:hover .wp-block-navigation__submenu-container, #$block_id.display-horizontal .cozy-block-navigation-menu:not(.full-screen) .cozy-menu-wrapper > .wp-block-navigation-item.has-child > .wp-block-navigation__submenu-container.show-cozy-dropdown-content {
    top: {$attributes['contentGap']}px;
}
#$block_id .cozy-menu-wrapper > .wp-block-navigation-item.has-child > .cozy-dropdown-icon-wrapper,
#$block_id .cozy-menu-wrapper > .cozy-mega-menu__item > .cozy-dropdown-icon-wrapper {
    margin-left: {$attributes['icon']['gap']}px;
}
#$block_id.icon-view-stacked .cozy-dropdown-icon-wrapper {
    padding: {$attributes['iconBoxStyles']['padding']['top']}px {$attributes['iconBoxStyles']['padding']['right']}px {$attributes['iconBoxStyles']['padding']['bottom']}px {$attributes['iconBoxStyles']['padding']['left']}px;
    border: {$attributes['iconBoxStyles']['borderWidth']}px {$attributes['iconBoxStyles']['borderType']} {$attributes['iconBoxStyles']['borderColor']};
    border-radius: {$attributes['iconBoxStyles']['borderRadius']}px;
    background-color: {$attributes['iconBoxStyles']['bgColor']};
}
#$block_id .cozy-dropdown-icon {
    width: {$attributes['icon']['size']}px;
    height: {$attributes['icon']['size']}px;
    opacity: {$attributes['icon']['opacity']};
    rotate: {$attributes['icon']['rotate']}deg;
}
#$block_id.event-hover .wp-block-navigation__submenu-container .wp-block-navigation-item.has-child:hover .cozy-dropdown-icon, #$block_id.event-hover .wp-block-navigation__submenu-container .wp-block-navigation__submenu-container .wp-block-navigation-item.has-child:hover .cozy-dropdown-icon {
    rotate: {$attributes['icon']['rotateActive']}deg;
}
#$block_id.event-hover .wp-block-navigation-item:hover .wp-block-navigation__submenu-container .cozy-dropdown-icon, #$block_id.event-hover .wp-block-navigation__submenu-container .wp-block-navigation-item:hover .wp-block-navigation__submenu-container .cozy-dropdown-icon {
    rotate: {$attributes['icon']['rotate']}deg;
}
#$block_id .cozy-block-navigation-menu.full-screen {
    padding: {$attributes['responsive']['padding']['top']}px {$attributes['responsive']['padding']['right']}px {$attributes['responsive']['padding']['bottom']}px {$attributes['responsive']['padding']['left']}px;
    background-color: {$attributes['responsive']['bgColor']};
}
#$block_id .cozy-block-navigation-menu.full-screen .cozy-responsive-icon__close {
    top: {$attributes['responsive']['iconTop']}px;
}
#$block_id .cozy-block-navigation-menu.full-screen.responsive-icon-position-left .cozy-responsive-icon__close {
    left: 0;
    right: auto;
}
#$block_id .cozy-block-navigation-menu.full-screen.responsive-icon-position-right .cozy-responsive-icon__close {
    right: 0;
    left: auto;
}
#$block_id .wp-block-navigation-item__content {
    font-weight: {$attributes['typography']['fontWeight']};
    font-size: {$attributes['typography']['fontSize']}px;
    font-family: {$attributes['typography']['fontFamily']};
    color: {$attributes['typography']['color']};
}
#$block_id .wp-block-navigation-item:active .wp-block-navigation-item__content {
    color: {$attributes['typography']['colorActive']};
}
#$block_id .cozy-block-navigation-menu:not(.full-screen) .wp-block-navigation-item:active {
    background-color: {$attributes['typography']['bgColorActive']};
}
BLOCK_STYLES;

$output  = '<div class="cozy-block-wrapper">';
$output .= '<style>' . $block_styles . '</style>';
$output .= $content;
$output .= '</div>';

echo $output;
