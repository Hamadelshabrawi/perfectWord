<?php
$client_id = ! empty( $attributes['blockClientId'] ) ? $attributes['blockClientId'] : '';
$block_id  = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$block_styles = <<<BLOCK_STYLES
#$block_id .cozy-block-list-item {
    width: {$attributes['containerStyles']['width']}px;
    height: {$attributes['containerStyles']['height']}px;
    border-radius: {$attributes['containerStyles']['borderRadius']['top']}px {$attributes['containerStyles']['borderRadius']['right']}px {$attributes['containerStyles']['borderRadius']['bottom']}px {$attributes['containerStyles']['borderRadius']['left']}px;
    background-color: {$attributes['containerStyles']['bgColor']};
    font: {$attributes['typography']['fontWeight']} {$attributes['typography']['fontSize']}px {$attributes['typography']['fontFamily']};
    color: {$attributes['typography']['color']};
}

#$block_id .cozy-block-list-item:hover {
    background-color: {$attributes['containerStyles']['bgColorHover']};
    color: {$attributes['typography']['colorHover']};
}

#$block_id.vertical .list-inline-block {
    margin-bottom: {$attributes['containerStyles']['gap']}px;
}

#$block_id.horizontal .list-inline-block {
    margin-right: {$attributes['containerStyles']['gap']}px;
}

#$block_id .list-icon-wrapper {
    margin-right: {$attributes['iconGap']}px;
}

#$block_id svg {
    width: {$attributes['iconSize']}px;
    height: {$attributes['iconSize']}px;
    rotate: {$attributes['iconRotate']}deg;
    opacity: {$attributes['iconOpacity']};
}

#$block_id.fill svg {
    fill: {$attributes['iconColor']};
}

#$block_id.outline svg {
    stroke: {$attributes['iconColor']};
    fill: none;
}

#$block_id.fill .cozy-block-list-item:hover svg {
    fill: {$attributes['iconColorHover']};
}

#$block_id.outline .cozy-block-list-item:hover svg {
    stroke: {$attributes['iconColorHover']};
    fill: none;
}

#$block_id.stacked .list-icon-wrapper {
    padding: {$attributes['iconBoxStyles']['padding']['top']}px {$attributes['iconBoxStyles']['padding']['right']}px {$attributes['iconBoxStyles']['padding']['bottom']}px {$attributes['iconBoxStyles']['padding']['left']}px;
    border: {$attributes['iconBoxStyles']['borderWidth']}px {$attributes['iconBoxStyles']['borderType']} {$attributes['iconBoxStyles']['borderColor']};
    border-radius: {$attributes['iconBoxStyles']['borderRadius']}px;
    background-color: {$attributes['iconBoxStyles']['bgColor']};
}

#$block_id.stacked .cozy-block-list-item:hover .list-icon-wrapper {
    background-color: {$attributes['iconBoxStyles']['bgColorHover']};
    border-color: {$attributes['iconBoxStyles']['borderColorHover']};
}
BLOCK_STYLES;

$output  = '<div class="cozy-block-wrapper">';
$output .= '<style>' . $block_styles . '</style>';
$output .= $content;
$output .= '</div>';

echo $output;
