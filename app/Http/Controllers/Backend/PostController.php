<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use DataTables;
use Validator;
use DB;

class PostController extends Controller
{
    public function datatablePosts()
    {
        $fetch = Post::all();
        if(!$fetch){
            return [];
        }else{
            $fetchArray = $fetch->toArray();
            $i = 0;
            $reform = array_map(function($new) use (&$i) { 
                $i++;
                return [
                    'no' => $i.'.',
                    'id' => $new['id'],
                    'title' => $new['title'],
                    'content' => $new['content'],
                    'thumbnail' => $new['thumbnail'],
                    'status' => $new['status'],
                ]; 
            }, $fetchArray);
            
            return DataTables::of($reform)->make(true);
        }
    }
    public function listPosts()
    {
        try{
            $menu_active = 1;
            return view('backend.posts.index', compact(
                'menu_active'
            ));

        }catch(\Exception $e){

        }
    }

    public function createPost()
    {
        return view('backend.posts.create_post');
    }

    public function listCategoryPosts()
    {
        return view('backend.posts.list_categories');

    }

    public function datatablePostCategories()
    {
        $fetch = PostCategory::all();
        if(!$fetch){
            return [];
        }else{
            $fetchArray = $fetch->toArray();
            $i = 0;
            $reform = array_map(function($new) use (&$i) { 
                $i++;
                return [
                    'no' => $i.'.',
                    'id' => $new['id'],
                    'name' => $new['name'],
                    'slug' => $new['slug'],
                    'description' => $new['description'],
                    'total' => 0,
                ]; 
            }, $fetchArray);
            
            return DataTables::of($reform)->make(true);
        }
    }

    public function storeCategoryPost(Request $request)
    {
        DB::beginTransaction();
        try{

            $validate = Validator::make($request->all(), [
                'name' => 'required|unique:post_categories',
                'slug' => 'required',
                'description' => 'required',
            ]);

            if ($validate->fails()) {
                return back()->withErrors($validate->errors())->withInput();
            }

            $category = new PostCategory();
            $category->name = $request->name;
            $category->slug = $request->slug;
            $category->description = $request->description;
            $category->save();

            DB::commit();
            return redirect()->route('list-category-posts');

        }catch(\Exception $e){
            DB::rollback();
        }
    }
}
