<?php
/**
 *  辅助函数库
 */

use Illuminate\Support\Facades\Route;

/**
 * 将请求的路由名称转换为css类名称
 * @return mixed
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
function make_excerpt($value, $length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
    return str_limit($excerpt, $length);
}