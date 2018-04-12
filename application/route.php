<?php

use think\Route;

// 首页Banner
Route::get('api/:version/banner/:id', 'api/:version.Banner/getBanner');
// 首页精选专题
Route::get('api/:version/theme', 'api/:version.Theme/getSimpleList');
// Theme下的商品
Route::get('api/:version/theme/:id', 'api/:version.Theme/getComplexOne');

Route::group('api/:version/product', function () {
    // 分类下的所有商品
    Route::get('/by_category', 'api/:version.Product/getAllInCategory');
    // 商品详情
    Route::get('/:id', 'api/:version.Product/getOne', [], ['id' => '\d+']);
    // 最近新品
    Route::get('/recent', 'api/:version.Product/getRecent');
});

// 获取所有分类
Route::get('api/:version/category/all', 'api/:version.category/getAllCategories');
// 获取token
Route::post('api/:version/token/user', 'api/:version.Token/getToken');

// 创建和更新地址
Route::post('api/:version/address', 'api/:version.Address/createOrUpdateAddress');