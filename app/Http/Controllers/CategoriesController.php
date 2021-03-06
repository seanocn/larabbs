<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Topic;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function show(Category $category)
    {
        //读取分类ID关联的话题，并按每20条分页
        $topics = Topic::with('user','category')->where('category_id',$category->id)->paginate(20);
        //传参变量话题和分类到模版中
        return view('topics.index',compact('topics','category'));
    }
}
