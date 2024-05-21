<?php
$client_id = ! empty( $attributes['blockClientId'] ) ? $attributes['blockClientId'] : '';

$block_id     = 'cozyBlock_' . str_replace( '-', '_', $client_id );
$block_styles = <<<BLOCK_STYLES
#$block_id .product-tab-title {
    font-weight: {$attributes['typography']['fontWeight']};
    font-size: {$attributes['typography']['fontSize']}px;
    font-family: {$attributes['typography']['fontFamily']};
    color: {$attributes['typography']['color']};
}
BLOCK_STYLES;

$output  = '<div class="cozy-block-wrapper">';
$output .= '<style>' . $block_styles . '</style>';
$output .= $content;
$output .= '</div>';

echo $output;
