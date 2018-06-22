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