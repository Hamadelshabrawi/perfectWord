<?php
$client_id      = ! empty( $attributes['blockClientId'] ) ? $attributes['blockClientId'] : '';
$cozy_block_var = 'cozyProductCarousel_' . str_replace( '-', '_', $client_id );

$currency_symbol = get_woocommerce_currency_symbol();
// Get the currency position (left, right, left_space, right_space)
$currency_position              = get_option( 'woocommerce_currency_pos' );
$attributes['currencySymbol']   = $currency_symbol;
$attributes['currencyPosition'] = $currency_position;

wp_localize_script( 'cozy-block-scripts', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockProductCarouselInit( "' . $client_id . '" ) }) ' );

$width1 = $attributes['gridOptions']['displayColumn'] <= 3 ? $attributes['gridOptions']['displayColumn'] : 3;
$width2 = $attributes['gridOptions']['displayColumn'] <= 2 ? $attributes['gridOptions']['displayColumn'] : 2;

$block_id     = 'cozyBlock_' . str_replace( '-', '_', $client_id );
$block_styles = <<<BLOCK_STYLES
#$block_id.layout-grid .cozy-layout-grid {
    row-gap: {$attributes['gridOptions']['columnGap']}px;
    column-gap: {$attributes['gridOptions']['columnGap']}px;
    grid-template-columns: repeat({$attributes['gridOptions']['displayColumn']}, 1fr);
}
@media screen and (max-width: 1024px) {
    #$block_id.layout-grid .cozy-layout-grid {
        grid-template-columns: repeat({$width1}, 1fr) !important;
    }
}
@media screen and (max-width: 767px) {
    #$block_id.layout-grid .cozy-layout-grid {
        grid-template-columns: repeat({$width2}, 1fr) !important;
    }
}
@media screen and (max-width: 400px) {
    #$block_id.layout-grid .cozy-layout-grid {
        grid-template-columns: repeat(1, 1fr) !important;
    }
}

#$block_id.on-sale .cozy-sale-badge {
    padding: {$attributes['saleBadge']['padding']['top']}px {$attributes['saleBadge']['padding']['right']}px {$attributes['saleBadge']['padding']['bottom']}px {$attributes['saleBadge']['padding']['left']}px;
    border: {$attributes['saleBadge']['borderWidth']}px {$attributes['saleBadge']['borderType']} {$attributes['saleBadge']['borderColor']};
    border-radius: {$attributes['saleBadge']['borderRadius']}px;
    background-color: {$attributes['saleBadge']['bgColor']};
    rotate: {$attributes['saleBadge']['rotate']}deg;
    top: {$attributes['saleBadge']['top']}px;
    font-size: {$attributes['saleBadge']['typography']['fontSize']}px;
    font-weight: {$attributes['saleBadge']['typography']['fontWeight']};
    font-family: {$attributes['saleBadge']['typography']['fontFamily']};
    color: {$attributes['saleBadge']['typography']['color']};
}
#$block_id.on-sale.sale-badge-display-block .cozy-sale-badge * {
    margin-bottom: {$attributes['saleBadge']['marginBottom']}px;
}
#$block_id.on-sale.sale-badge-display-flex .cozy-sale-badge {
    gap: {$attributes['saleBadge']['gap']}px;
}
#$block_id.on-sale.sale-badge-position-left .cozy-sale-badge{
    left: {$attributes['saleBadge']['left']}px;
}
#$block_id.on-sale.sale-badge-position-right .cozy-sale-badge{
    right: {$attributes['saleBadge']['right']}px;
}
#$block_id.on-sale .cozy-sale-badge .label-before,
#$block_id.on-sale .cozy-sale-badge .label-after {
    font-size: {$attributes['saleBadge']['labelTypography']['fontSize']}px;
    font-weight: {$attributes['saleBadge']['labelTypography']['fontWeight']};
    font-family: {$attributes['saleBadge']['labelTypography']['fontFamily']};
    color: {$attributes['saleBadge']['labelTypography']['color']};
}

#$block_id .cozy-template-two .wp-block-read-more:hover,
#$block_id .cozy-template-two .wp-block-button.wc-block-components-product-button:hover button,
#$block_id .cozy-template-two .wp-block-button.wc-block-components-product-button:hover a {
    background-color: {$attributes['buttonHoverColor']['background']} !important;
    color: {$attributes['buttonHoverColor']['text']} !important;
    opacity: 1 !important;
}

#$block_id .wc-block-components-product-rating__stars {
    font-size: {$attributes['reviewStyles']['fontSize']}px;
    color: {$attributes['reviewStyles']['color']};
}

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
