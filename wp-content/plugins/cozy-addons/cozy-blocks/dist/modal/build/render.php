<?php
$client_id      = ! empty( $attributes['blockClientId'] ) ? $attributes['blockClientId'] : '';
$cozy_block_var = 'cozyModal_' . str_replace( '-', '_', $client_id );
wp_localize_script( 'cozy-block-scripts', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockModalInit( "' . $client_id . '" ) }) ' );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$block_styles = <<<BLOCK_STYLES
.cozy-modal-open[data-type="{$client_id}"] {
    padding: {$attributes['clickButtonStyles']['padding']['top']}px {$attributes['clickButtonStyles']['padding']['right']}px {$attributes['clickButtonStyles']['padding']['bottom']}px {$attributes['clickButtonStyles']['padding']['left']}px;
    border-style: {$attributes['clickButtonStyles']['borderType']};
    border-width: {$attributes['clickButtonStyles']['borderWidth']['top']}px {$attributes['clickButtonStyles']['borderWidth']['right']}px {$attributes['clickButtonStyles']['borderWidth']['bottom']}px {$attributes['clickButtonStyles']['borderWidth']['left']}px;
    border-color: {$attributes['clickButtonStyles']['borderColor']};
    border-radius: {$attributes['clickButtonStyles']['borderRadius']}px;
    font-size: {$attributes['clickButtonStyles']['fontSize']}px;
    color: {$attributes['clickButtonStyles']['color']};
    background-color: {$attributes['clickButtonStyles']['bgColor']};
}
.cozy-modal-open[data-type="{$client_id}"]:hover {
    color: {$attributes['clickButtonStyles']['colorHover']};
    background-color: {$attributes['clickButtonStyles']['bgColorHover']};
}
#$block_id {
    padding: {$attributes['padding']['top']}px {$attributes['padding']['right']}px {$attributes['padding']['bottom']}px {$attributes['padding']['left']}px;
    background-color: {$attributes['backgroundColor']};
}
#$block_id.type-default {
    width: {$attributes['boxWidth']}px;
}
#$block_id .close-icon-wrapper svg {
    margin: {$attributes['iconStyles']['verticalSpacing']}px {$attributes['iconStyles']['horizontalSpacing']}px;
    width: {$attributes['iconStyles']['iconSize']}px;
    height: {$attributes['iconStyles']['iconSize']}px;
    fill: {$attributes['iconStyles']['iconColor']};
}
#$block_id .close-icon-wrapper:hover svg {
    fill: {$attributes['iconStyles']['iconColorHover']};
}
BLOCK_STYLES;

$output  = '<div class="cozy-block-wrapper" data-block="' . $client_id . '">';
$output .= '<style>' . $block_styles . '</style>';
$output .= $content;
$output .= '</div>';

echo $output;
