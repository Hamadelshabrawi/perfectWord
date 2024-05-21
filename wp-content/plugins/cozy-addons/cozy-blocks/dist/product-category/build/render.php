<?php
$client_id      = ! empty( $attributes['blockClientId'] ) ? $attributes['blockClientId'] : '';
$cozy_block_var = 'cozyProductCategory_' . str_replace( '-', '_', $client_id );

wp_localize_script( 'cozy-block-scripts', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockProductCategoryInit( "' . $client_id . '" ) }) ' );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$width1 = $attributes['gridOptions']['displayColumn'] <= 3 ? $attributes['gridOptions']['displayColumn'] : 3;
$width2 = $attributes['gridOptions']['displayColumn'] <= 2 ? $attributes['gridOptions']['displayColumn'] : 2;

$layout_list_flex_display = $attributes['listOptions']['flexDirection'] === 'column' ? 'block' : '';

$block_styles = <<<BLOCK_STYLES
#$block_id.woo-product-category {
    padding: {$attributes['containerStyles']['padding']['top']}px {$attributes['containerStyles']['padding']['right']}px {$attributes['containerStyles']['padding']['bottom']}px {$attributes['containerStyles']['padding']['left']}px;
    border-style: {$attributes['containerStyles']['border']['type']};
    border-width: {$attributes['containerStyles']['border']['width']['top']}px {$attributes['containerStyles']['border']['width']['right']}px {$attributes['containerStyles']['border']['width']['bottom']}px {$attributes['containerStyles']['border']['width']['left']}px;
    border-color: {$attributes['containerStyles']['border']['color']};
    background-color: {$attributes['containerStyles']['bgColor']};
    border-radius: {$attributes['containerStyles']['borderRadius']['top']}px {$attributes['containerStyles']['borderRadius']['right']}px {$attributes['containerStyles']['borderRadius']['bottom']}px {$attributes['containerStyles']['borderRadius']['left']}px;
    font-size: {$attributes['typography']['fontSize']}px;
    font-weight: {$attributes['typography']['fontWeight']};
    font-family: {$attributes['typography']['fontFamily']};
    color: {$attributes['typography']['color']};
}
#$block_id.has-box-shadow .woo-product-category {
    box-shadow: {$attributes['containerStyles']['boxShadow']['horizontal']}px {$attributes['containerStyles']['boxShadow']['vertical']}px {$attributes['containerStyles']['boxShadow']['blur']}px {$attributes['containerStyles']['boxShadow']['spread']}px {$attributes['containerStyles']['boxShadow']['color']} {$attributes['containerStyles']['boxShadow']['position']};
}
#$block_id.woo-product-category:hover {
    border-color: {$attributes['containerStyles']['border']['colorHover']};
    background-color: {$attributes['containerStyles']['bgColorHover']};
    color: {$attributes['typography']['colorHover']};
}
#$block_id.has-box-shadow .woo-product-category:hover {
    box-shadow: {$attributes['containerStyles']['boxShadow']['horizontal']}px {$attributes['containerStyles']['boxShadow']['vertical']}px {$attributes['containerStyles']['boxShadow']['blurHover']}px {$attributes['containerStyles']['boxShadow']['spreadHover']}px {$attributes['containerStyles']['boxShadow']['colorHover']} {$attributes['containerStyles']['boxShadow']['position']};
}

#$block_id.woo-product-category figure {
    margin-bottom: {$attributes['featuredImage']['marginBottom']}px;
}
#$block_id.woo-product-category figure img {
    width: {$attributes['featuredImage']['width']}px;
    height: {$attributes['featuredImage']['height']}px;
    border-radius: {$attributes['featuredImage']['borderRadius']}px;
}

#$block_id.woo-product-category .product-count-wrapper {
    margin-top: {$attributes['productCount']['marginTop']}px;
}
#$block_id.woo-product-category .product-count {
    padding: {$attributes['productCount']['padding']['top']}px {$attributes['productCount']['padding']['right']}px {$attributes['productCount']['padding']['bottom']}px {$attributes['productCount']['padding']['left']}px;
    border-radius: {$attributes['productCount']['borderRadius']}px;
    background-color: {$attributes['productCount']['bgColor']};
    font-size: {$attributes['productCount']['typography']['fontSize']}px;
    font-weight: {$attributes['productCount']['typography']['fontWeight']};
    font-family: {$attributes['productCount']['typography']['fontFamily']};
    color: {$attributes['productCount']['typography']['color']};
}
#$block_id.woo-product-category figure .product-count {
    top: {$attributes['productCount']['top']}px;
}
#$block_id.product-count-position-left .woo-product-category figure .product-count {
    left: {$attributes['productCount']['left']}px;
    right: auto;
}
#$block_id.product-count-position-right .woo-product-category figure .product-count {
    right: {$attributes['productCount']['right']}px;
    left: auto;
}
#$block_id.woo-product-category:hover .product-count {
    color: {$attributes['productCount']['typography']['color']};
}

#$block_id.layout-grid .woo-product-category-wrapper {
    grid-template-columns: repeat({$attributes['gridOptions']['displayColumn']}, 1fr);
    row-gap: {$attributes['gridOptions']['columnGap']}px;
    column-gap: {$attributes['gridOptions']['columnGap']}px;
    text-align: {$attributes['gridOptions']['blockAlign']};
}
@media screen and (max-width: 1024px) {
    .cozy-block-product-category.layout-grid .woo-product-category-wrapper {
        grid-template-columns: repeat({$width1}, 1fr) !important;
    }
}
@media screen and (max-width: 767px) {
    .cozy-block-product-category.layout-grid .woo-product-category-wrapper {
        grid-template-columns: repeat({$width2}, 1fr) !important;
    }
}
@media screen and (max-width: 400px) {
    .cozy-block-product-category.layout-grid .woo-product-category-wrapper {
        grid-template-columns: repeat(1, 1fr) !important;
    }
}

#$block_id.layout-list .woo-product-category-wrapper .woo-product-category {
    margin: 0 {$attributes['listOptions']['columnGap']}px {$attributes['listOptions']['rowGap']}px 0;
    text-align: {$attributes['listOptions']['textAlign']};
}
#$block_id.layout-list .woo-product-category .layout-list-flex {
    display: {$layout_list_flex_display};
    flex-direction: {$attributes['listOptions']['flexDirection']};
    gap: {$attributes['listOptions']['gap']}px;
    justify-content: {$attributes['listOptions']['textAlign']};
}

#$block_id.layout-carousel .woo-product-category .layout-list-flex {
    flex-direction: {$attributes['carouselOptions']['flexDirection']};
    gap: {$attributes['carouselOptions']['gap']}px;
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
