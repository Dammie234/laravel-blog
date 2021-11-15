<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use Image;
use Str;
use App\Post;
use App\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the posts
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('posts')
                    ->leftJoin('categories', 'categories.id', '=', 'posts.category_id')
                    ->leftJoin('users', 'users.id', '=', 'posts.user_id')
                    ->select('posts.*', 'categories.name', 'users.name as user_name')
                    ->get();
        return view('pages.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new post
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('pages.post.create', compact('categories'));
    }

    /**
     * Store a newly created post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate form data
        $this->validate($request, [
            'title' => 'required|string|unique:posts',
            'category' => 'required',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category_id' => $request->category,
            'user_id' => Auth::user()->id,
            'description' => $request->description
        ];
        // add image
        if ($files = $request->file('image')) {
            $destinationPath = 'images/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }
        
        Post::create($data);
        // update the category
        $category = Category::where('id', $request->category)->first();
        Category::where('id', $request->category)->update([
            'count' => $category->count + 1
        ]);
        return redirect()->route('post.index')->with('success', 'Post successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $categories = Category::get();
        return view('pages.post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'category' => 'required',
            'description' => 'required|string'
        ]);
        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category_id' => $request->category,
            'description' => $request->description
        ];
        // add image
        if ($files = $request->file('image')) {
            $destinationPath = 'images/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
            $post = Post::where('id', $id)->first();
            $old_image = 'images/' . $post->image;
            if(isset($post->image)){
                unlink($old_image);
            }
        }
        
        Post::where('id', $id)->update($data);
        
        return redirect()->route('post.index')->with('success', 'Post successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::where('id', $id)->first();
        $category = Category::where('id', $post->category_id)->first();
        Category::where('id', $post->category_id)->update([
            'count' => $category->count - 1
        ]);
        if(isset($post->image)){
            $old_image = 'images/' . $post->image;
            unlink($old_image);
        }
        Post::where('id', $id)->delete();
        return redirect()->route('post.index')->with('success', 'Post successfully deleted');
    }
    public function indexPage()
    {
        $posts = DB::table('posts')
                    ->leftJoin('categories', 'categories.id', '=', 'posts.category_id')
                    ->select('posts.*', 'categories.name', 'categories.slug as cat_slug')
                    ->paginate(12);
        return view('pages.welcome', compact('posts'));
    }
    public function post($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $other_posts = DB::table('posts')
                        ->leftJoin('categories', 'categories.id', '=', 'posts.category_id')
                        ->where('posts.slug', '!=', $slug)
                        ->select('posts.*', 'categories.name', 'categories.slug as cat_slug')
                        ->get();
        return view('pages.post', compact('post', 'other_posts'));
    }
    public function categoryPosts($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $posts = DB::table('posts')
                    ->leftJoin('categories', 'categories.id', '=', 'posts.category_id')
                    ->where('posts.category_id', $category->id)
                    ->select('posts.*', 'categories.name')
                    ->paginate(12);
        return view('pages.categories', compact('category', 'posts'));
    }
    public function postSearch(Request $request)
    {
        $search = $request->search;
        
        $posts = DB::table('posts')
                    ->leftJoin('categories', 'categories.id', '=', 'posts.category_id')
                    ->where('posts.title', 'like', '%'.$search.'%')
                    ->select('posts.*', 'categories.name', 'categories.slug as cat_slug')
                    ->paginate(12);
        return view('pages.search', compact('posts'));
    }
}
