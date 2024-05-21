<?php
$client_id      = ! empty( $attributes['blockClientId'] ) ? $attributes['blockClientId'] : '';
$cozy_block_var = 'cozySidebarPanel_' . str_replace( '-', '_', $client_id );
wp_localize_script( 'cozy-block-scripts', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockSidebarPanelInit( "' . $client_id . '" ) }) ' );

$block_id     = 'cozyBlock_' . str_replace( '-', '_', $client_id );
$block_styles = <<<BLOCK_STYLES
#$block_id .cozy-sidebar-panel-wrapper{
    padding: {$attributes['sidebarPadding']['top']}px {$attributes['sidebarPadding']['right']}px {$attributes['sidebarPadding']['bottom']}px {$attributes['sidebarPadding']['left']}px;
    background-color: {$attributes['bgColor']};
    z-index: {$attributes['zIndex']};
}
#$block_id.layout-custom .cozy-sidebar-panel-wrapper {
    width: {$attributes['width']}px;
}
#$block_id .sidebar-icon-wrapper svg {
    width: {$attributes['iconSize']}px;
    height: {$attributes['iconSize']}px;
    rotate: {$attributes['iconRotate']}deg;
    opacity: {$attributes['iconOpacity']};
}
#$block_id.icon-layout-fill .sidebar-icon-wrapper svg {
    fill: {$attributes['iconColor']};
}
#$block_id.icon-layout-outline .sidebar-icon-wrapper svg {
    stroke: {$attributes['iconColor']};
    fill: none;
}
#$block_id.icon-layout-fill .sidebar-icon-wrapper:hover svg, #$block_id.icon-layout-fill .open-icon-wrapper:hover .sidebar-icon-wrapper svg {
    fill: {$attributes['iconColorHover']};
}
#$block_id.icon-layout-outline .sidebar-icon-wrapper:hover svg, #$block_id.icon-layout-outline .open-icon-wrapper:hover .sidebar-icon-wrapper svg {
    stroke: {$attributes['iconColorHover']};
    fill: none;
}
#$block_id.icon-view-stacked .sidebar-icon-wrapper {
    padding: {$attributes['iconBoxStyles']['padding']['top']}px {$attributes['iconBoxStyles']['padding']['right']}px {$attributes['iconBoxStyles']['padding']['bottom']}px {$attributes['iconBoxStyles']['padding']['left']}px;
    border: {$attributes['iconBoxStyles']['borderWidth']}px {$attributes['iconBoxStyles']['borderType']} {$attributes['iconBoxStyles']['borderColor']};
    border-radius: {$attributes['iconBoxStyles']['borderRadius']}px;
    background-color: {$attributes['iconBoxStyles']['bgColor']};
}
#$block_id.icon-view-stacked .sidebar-icon-wrapper:hover, #$block_id.icon-view-stacked .open-icon-wrapper:hover .sidebar-icon-wrapper {
    background-color: {$attributes['iconBoxStyles']['bgColorHover']};
    border-color: {$attributes['iconBoxStyles']['borderColorHover']};
}
#$block_id .relative {
    padding: {$attributes['closeIcon']['verticalSpacing']}px 0;
    margin: 0 {$attributes['closeIcon']['horizontalSpacing']}px;
}
#$block_id .open-icon-wrapper {
    gap: {$attributes['openIcon']['gap']}px;
    font: {$attributes['typography']['fontWeight']} {$attributes['typography']['fontSize']}px {$attributes['typography']['fontFamily']};
    color: {$attributes['typography']['color']};
}
#$block_id .open-icon-wrapper:hover {
    color: {$attributes['typography']['colorHover']};
}
BLOCK_STYLES;

$output  = '<div class="cozy-block-wrapper">';
$output .= '<style>' . $block_styles . '</style>';
$output .= $content;
$output .= '</div>';

echo $output;
