<?php
namespace App\Helpers;


function setActiveCategory($category, $output = 'active')
{
    return request()->category == $category ? $output : '';
}