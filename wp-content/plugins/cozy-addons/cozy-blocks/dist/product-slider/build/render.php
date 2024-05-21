<?php
$client_id      = ! empty( $attributes['blockClientId'] ) ? $attributes['blockClientId'] : '';
$cozy_block_var = 'cozyProductSlider_' . str_replace( '-', '_', $client_id );
wp_localize_script( 'cozy-block-scripts', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockProductSliderInit( "' . $client_id . '" ) }) ' );

$block_id     = 'cozyBlock_' . str_replace( '-', '_', $client_id );
$block_styles = <<<BLOCK_STYLES
#$block_id .swiper-button-prev::after,
#$block_id .swiper-button-next::after {
    font-size: {$attributes['navigation']['iconSize']}px;
}
#$block_id .swiper-button-prev,
#$block_id .swiper-button-next {
    width: {$attributes['navigation']['iconBoxWidth']}px;
    height: {$attributes['navigation']['iconBoxHeight']}px;
    border-radius: {$attributes['navigation']['borderRadius']}px;
    color: {$attributes['navigation']['color']};
    background-color: {$attributes['navigation']['backgroundColor']};
}
#$block_id .swiper-button-prev:hover,
#$block_id .swiper-button-next:hover {
    color: {$attributes['navigation']['colorHover']};
    background-color: {$attributes['navigation']['backgroundColorHover']};
}

#$block_id .swiper-pagination {
    bottom: {$attributes['pagination']['verticalPosition']}px;
}
#$block_id .swiper-pagination .swiper-pagination-bullet {
    width: {$attributes['pagination']['width']}px;
    height: {$attributes['pagination']['height']}px;
    border-radius: {$attributes['pagination']['borderRadius']}px;
    background-color: {$attributes['pagination']['color']};
}
#$block_id .swiper-pagination .swiper-pagination-bullet-active {
    width: {$attributes['pagination']['activeWidth']}px;
    border-radius: {$attributes['pagination']['activeBorderRadius']}px;
    background-color: {$attributes['pagination']['activeColor']};
}
#$block_id .swiper-pagination .swiper-pagination-bullet:hover {
    background-color: {$attributes['pagination']['colorHover']};
}
#$block_id .swiper-pagination .swiper-pagination-bullet-active:hover {
    background-color: {$attributes['pagination']['activeColorHover']};
}
BLOCK_STYLES;

$output  = '<div class="cozy-block-wrapper">';
$output .= '<style>' . $block_styles . '</style>';
$output .= $content;
$output .= '</div>';

echo $output;
