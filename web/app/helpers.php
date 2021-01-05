<?php

if(!function_exists('fetchCategoryTagName')) {
    function fetchCategoryTagName($categoryId) : string {
        switch ($categoryId) {
            case 1:
                return 'Sản phẩm vay tiền nhanh';
            case 2:
                return 'Ngân hàng nổi bật';
            default:
                return '';
        }
    }
}

if (!function_exists('getPathFromUrl')) {
    function getPathFromUrl(string $url = '') : string
    {
        $parseUrl = parse_url($url);

        return $parseUrl['path'];
    }
}

if(!function_exists('menu')) {
    function menu($path) : string {
        return 'data-type=menu data-ref=' . $path;
    }
}
