<?php
$client_id    = ! empty( $attributes['blockClientId'] ) ? $attributes['blockClientId'] : '';
$block_id     = 'cozyBlock_' . str_replace( '-', '_', $client_id );
$box_bg_color = isset( $attributes['boxStyles']['bgColor'] ) ? $attributes['boxStyles']['bgColor'] : '';
$block_styles = <<<BLOCK_STYLES
#$block_id.stacked {
    padding: {$attributes['boxStyles']['padding']['top']}px {$attributes['boxStyles']['padding']['right']}px {$attributes['boxStyles']['padding']['bottom']}px {$attributes['boxStyles']['padding']['left']}px;
    border: {$attributes['boxStyles']['borderWidth']}px {$attributes['boxStyles']['borderType']} {$attributes['boxStyles']['borderColor']};
    border-radius: {$attributes['boxStyles']['borderRadius']}px;
    background-color: {$box_bg_color};
    width: {$attributes['iconSize']}px;
    height: {$attributes['iconSize']}px;
}

#$block_id svg {
    rotate: {$attributes['iconRotate']}deg;
}

#$block_id.stacked:hover {
    background-color: {$attributes['boxStyles']['bgColorHover']};
    border-color: {$attributes['boxStyles']['borderColorHover']};
}

#$block_id:hover svg {
    fill: {$attributes['iconColorHover']};
    stroke: {$attributes['iconColorHover']};
}
BLOCK_STYLES;

$output  = '<div class="cozy-block-wrapper">';
$output .= '<style>' . $block_styles . '</style>';
$output .= $content;
$output .= '</div>';

echo $output;
