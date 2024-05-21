<?php

$client_id      = ! empty( $attributes['blockClientId'] ) ? $attributes['blockClientId'] : '';
$cozy_block_var = 'cozyScrollTop_' . str_replace( '-', '_', $client_id );
wp_localize_script( 'cozy-block-scripts', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockScrollTopInit( "' . $client_id . '" ) }) ' );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$block_styles = <<<BLOCK_STYLES
#$block_id {
    width: {$attributes['styles']['boxWidth']}px;
    height: {$attributes['styles']['boxHeight']}px;
    border-radius: {$attributes['styles']['borderRadius']}px;
    background-color: {$attributes['styles']['bgColor']};
    right: {$attributes['position']['right']}px;
    bottom: {$attributes['position']['bottom']}px;
}

#$block_id:hover {
    background-color: {$attributes['styles']['bgColorHover']};
}

#$block_id svg {
    width: {$attributes['styles']['iconSize']}px;
    height: {$attributes['styles']['iconSize']}px;
    fill: {$attributes['styles']['iconColor']};
}

#$block_id:hover svg {
    fill: {$attributes['styles']['iconColorHover']};
}
BLOCK_STYLES;

$output  = '<div class="cozy-block-wrapper position-fixed">';
$output .= '<style>' . $block_styles . '</style>';
$output .= $content;
$output .= '</div>';

echo $output;
