<?php

$client_id      = ! empty( $attributes['blockClientId'] ) ? $attributes['blockClientId'] : '';
$cozy_block_var = 'cozyFeaturedContentBox_' . str_replace( '-', '_', $client_id );

wp_localize_script( 'cozy-block-scripts', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockFeaturedContentBoxInit( "' . $client_id . '" ) }) ' );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$width1 = $attributes['gridOptions']['columnCount'] <= 3 ? $attributes['gridOptions']['columnCount'] : 3;
$width2 = $attributes['gridOptions']['columnCount'] <= 2 ? $attributes['gridOptions']['columnCount'] : 2;

$block_styles = <<<BLOCK_STYLES
#$block_id {
    margin: {$attributes['margin']['top']}px {$attributes['margin']['right']}px {$attributes['margin']['bottom']}px {$attributes['margin']['left']}px;
}

#$block_id.display-grid .cozy-grid-wrapper {
    row-gap: {$attributes['gridOptions']['gap']}px;
    column-gap: {$attributes['gridOptions']['gap']}px;
}
#$block_id.display-grid:not(.has-masonry) .cozy-grid-wrapper {
    grid-template-columns: repeat({$attributes['gridOptions']['columnCount']}, 1fr);
}
#$block_id.display-grid.has-masonry .cozy-grid-wrapper {
    column-count: {$attributes['gridOptions']['columnCount']};
}
#$block_id.display-grid.has-masonry .cozy-grid-wrapper .cozy-block-grid:not(:first-child) {
    margin-top: {$attributes['gridOptions']['gap']}px;
}
@media screen and (max-width: 1024px) {
    #$block_id.display-grid:not(.has-masonry) .cozy-grid-wrapper {
        grid-template-columns: repeat(
            $width1,
            1fr
        ) !important;
    }

    #$block_id.display-grid.has-masonry .cozy-grid-wrapper {
        column-count: $width1 !important;
    }
}

@media screen and (max-width: 767px) {
    #$block_id.display-grid:not(.has-masonry) .cozy-grid-wrapper {
        grid-template-columns: repeat(
            $width2,
            1fr
        ) !important;
    }

    #$block_id.display-grid.has-masonry .cozy-grid-wrapper {
        column-count: $width2 !important;
    }
}

@media screen and (max-width: 400px) {
    #$block_id.display-grid:not(.has-masonry) .cozy-grid-wrapper {
        grid-template-columns: repeat(
            1,
            1fr
        ) !important;
    }

    #$block_id.display-grid.has-masonry .cozy-grid-wrapper {
        column-count: 1 !important;
    }
}

#$block_id.layout-stacked .cozy-stacked-image {
    bottom: {$attributes['stackedImage']['verticalPosition']}px;
}

#$block_id.layout-gallery .cozy-featured-content-box__layout-gallery-wrapper:hover .wp-block-cover__background {
    background-color: {$attributes['galleryOptions']['overlayColorHover']} !important;
    opacity: {$attributes['galleryOptions']['overlayOpacity']} !important;
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
