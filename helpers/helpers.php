<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('get_basic_meta_info')) {

    /**
     * @return string[]
     */
    function get_basic_meta_info()
    {
        return site_basic_meta_info();
    }

}

//if (!function_exists('get_welcome_meta_info')) {
//
//    /**
//     * @return string[]|null
//     */
//    function get_welcome_meta_info()
//    {
//        $current_uri = Route::getFacadeRoot()->current()->uri();
//        if ($current_uri === '/') {
//            return site_basic_meta_info();
//        }
//        return null;
//    }
//
//}

if (!function_exists('site_meta_info')) {

    /**
     * @return string[]
     */
    function site_basic_meta_info(): array
    {
        $title = config()->has('laravel-metatag.title') ? '<title>' . config('laravel-metatag.title') . '</title>' : '';

        $robots = config()->has('laravel-metatag.robots') ? '<meta name="robots" content="' . config('laravel-metatag.robots') . '">' : '';

        $description = config()->has('laravel-metatag.description') ? '<meta name="description" content="' . config('laravel-metatag.description') . '">' : '';

        $keywords = config()->has('laravel-metatag.keywords') ? '<meta name="keywords" content="' . config('laravel-metatag.keywords') . '">' : '';

        return [
            'title' => $title,
            'robots' => $robots,
            'description' => $description,
            'keywords' => $keywords
        ];
    }

}

