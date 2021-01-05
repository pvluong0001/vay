<?php

if(!function_exists('fetchCategoryTagName')) {
    function fetchCategoryTagName($categoryId) {
        switch ($categoryId) {
            case 1:
                return 'Sản phẩm vay tiền nhanh';
            case 2:
                return 'Ngân hàng nổi bật';
        }
    }
}
