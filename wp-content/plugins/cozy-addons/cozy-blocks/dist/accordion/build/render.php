<?php
$client_id      = ! empty( $attributes['blockClientId'] ) ? $attributes['blockClientId'] : '';
$cozy_block_var = 'cozyAccordion_' . str_replace( '-', '_', $client_id );
wp_localize_script( 'cozy-block-scripts', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockAccordionInit( "' . $client_id . '" ) }) ' );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$item_bg_color = isset($attributes['accordionStyles']['bgColor']) ? $attributes['accordionStyles']['bgColor'] : '';

$block_styles = <<<BLOCK_STYLES
#$block_id {
    padding: {$attributes['containerStyles']['padding']['top']}px {$attributes['containerStyles']['padding']['right']}px {$attributes['containerStyles']['padding']['bottom']}px {$attributes['containerStyles']['padding']['left']}px;
    border-style: {$attributes['containerStyles']['border']['type']};
    border-width: {$attributes['containerStyles']['border']['width']['top']}px {$attributes['containerStyles']['border']['width']['right']}px {$attributes['containerStyles']['border']['width']['bottom']}px {$attributes['containerStyles']['border']['width']['left']}px;
    border-color: {$attributes['containerStyles']['border']['color']};
    border-radius: {$attributes['containerStyles']['borderRadius']['top']}px {$attributes['containerStyles']['borderRadius']['right']}px {$attributes['containerStyles']['borderRadius']['bottom']}px {$attributes['containerStyles']['borderRadius']['left']}px;
    background-color: {$attributes['containerStyles']['bgColor']};
}

#$block_id .cozy-accordion-wrapper {
    row-gap: {$attributes['rowGap']}px;
}

#$block_id .cozy-block-accordion-item {
    padding: {$attributes['accordionStyles']['padding']['top']}px {$attributes['accordionStyles']['padding']['right']}px {$attributes['accordionStyles']['padding']['bottom']}px {$attributes['accordionStyles']['padding']['left']}px;
    border-style: {$attributes['accordionStyles']['border']['type']};
    border-width: {$attributes['accordionStyles']['border']['width']['top']}px {$attributes['accordionStyles']['border']['width']['right']}px {$attributes['accordionStyles']['border']['width']['bottom']}px {$attributes['accordionStyles']['border']['width']['left']}px;
    border-color: {$attributes['accordionStyles']['border']['color']};
    border-radius: {$attributes['accordionStyles']['borderRadius']['top']}px {$attributes['accordionStyles']['borderRadius']['right']}px {$attributes['accordionStyles']['borderRadius']['bottom']}px {$attributes['accordionStyles']['borderRadius']['left']}px;
    background-color: {$item_bg_color};
}

#$block_id .cozy-block-accordion-item .cozy-accordion-title * {
    font-weight: {$attributes['titleTypography']['fontWeight']};
    font-size: {$attributes['titleTypography']['fontSize']}px;
    font-family: {$attributes['titleTypography']['fontFamily']};
    color: {$attributes['titleTypography']['color']};
}

#$block_id .cozy-block-accordion-item .cozy-accordion-content {
    font-weight: {$attributes['typography']['fontWeight']};
    font-size: {$attributes['typography']['fontSize']}px;
    font-family: {$attributes['typography']['fontFamily']};
    color: {$attributes['typography']['color']};
}

#$block_id .cozy-accordion-title .accordion-icon-wrapper svg {
    width: {$attributes['icon']['size']}px;
    height: {$attributes['icon']['size']}px;
    opacity: {$attributes['icon']['opacity']};
    rotate: {$attributes['icon']['rotate']}deg;
}

#$block_id.icon-view-stacked .cozy-accordion-title .accordion-icon-wrapper {
    padding: {$attributes['iconBoxStyles']['padding']['top']}px {$attributes['iconBoxStyles']['padding']['right']}px {$attributes['iconBoxStyles']['padding']['bottom']}px {$attributes['iconBoxStyles']['padding']['left']}px;
    border: {$attributes['iconBoxStyles']['borderWidth']}px {$attributes['iconBoxStyles']['borderType']} {$attributes['iconBoxStyles']['borderColor']};
    border-radius: {$attributes['iconBoxStyles']['borderRadius']}px;
    background-color: {$attributes['iconBoxStyles']['bgColor']};
}

#$block_id.icon-view-stacked .cozy-accordion-title.active .accordion-icon-wrapper {
    background-color: {$attributes['iconBoxStyles']['bgColorHover']};
    border-color: {$attributes['iconBoxStyles']['borderColorHover']};
}

#$block_id.icon-layout-fill .cozy-accordion-title .accordion-icon-wrapper svg {
    fill: {$attributes['icon']['color']};
}

#$block_id.icon-layout-outline .cozy-accordion-title .accordion-icon-wrapper svg {
    stroke: {$attributes['icon']['color']};
    fill: none;
}

#$block_id.icon-layout-fill .cozy-accordion-title.active .accordion-icon-wrapper svg {
    fill: {$attributes['icon']['colorHover']};
    rotate: {$attributes['icon']['rotateActive']}deg;
}

#$block_id.icon-layout-outline .cozy-accordion-title.active .accordion-icon-wrapper svg {
    stroke: {$attributes['icon']['colorHover']};
    fill: none;
    transform: rotate({$attributes['icon']['rotateActive']}deg);
}
BLOCK_STYLES;

$output  = '<div class="cozy-block-wrapper">';
$output .= '<style>' . $block_styles . '</style>';
$output .= $content;
$output .= '</div>';

echo $output;
