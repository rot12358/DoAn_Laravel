<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $posts = Post::orderBy('id', 'DESC')->get();
        return view('posts.index')->with(compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Post::all();
        $categories = Category::all();
        
        return view('posts.create', compact('posts','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // Validate dữ liệu được gửi từ biểu mẫu
    $validatedData = $request->validate([
        'tentruyen' => 'required',
        'anhgioithieu' => 'required',
        'theloai' => 'required',
        'thongtingioithieu' => 'required',
        'gia' => 'required',
        'tacgia' => 'required',
        'nxb' => 'required',
        'category_id' => 'required|exists:categories,id',
    ]);

    // Tạo mới bài viết
    $post = new Post;
    $post->tentruyen = $validatedData['tentruyen'];
    $post->anhgioithieu = $validatedData['anhgioithieu'];
    $post->theloai = $validatedData['theloai'];
    $post->thongtingioithieu = $validatedData['thongtingioithieu'];
    $post->gia = $validatedData['gia'];
    $post->tacgia = $validatedData['tacgia'];
    $post->nxb = $validatedData['nxb'];
    $post->category_id = $validatedData['category_id'];
    $post->save();

    // Redirect về trang hiển thị danh sách bài viết hoặc thêm thông báo thành công
    return redirect()->route('posts.index')->with('status', 'Bài viết đã được thêm thành công!');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);
        return view('show.show',['post' => $posts,'anhgioithieu'=>$posts->anhgioithieu]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $post = Post::find($id); // Lấy dữ liệu bài viết từ cơ sở dữ liệu bằng ID

    if (!$post) {
        return redirect()->route('posts.index')->with('error', 'Post not found');
    }

    $categories = Category::all(); // Lấy tất cả danh mục

    return view('posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    // Validate the incoming request data
    $validatedData = $request->validate([
        'tentruyen' => 'required',
        'anhgioithieu' => 'required',
        'theloai' => 'required',
        'thongtingioithieu' => 'required',
        'gia' => 'required',
        'tacgia' => 'required',
        'nxb' => 'required',
        'category_id' => 'required|exists:categories,id',
    ]);

    $post = Post::findOrFail($id);
    $post->tentruyen = $validatedData['tentruyen'];
    $post->anhgioithieu = $validatedData['anhgioithieu'];
    $post->theloai = $validatedData['theloai'];
    $post->thongtingioithieu = $validatedData['thongtingioithieu'];
    $post->gia = $validatedData['gia'];
    $post->tacgia = $validatedData['tacgia'];
    $post->nxb = $validatedData['nxb'];
    $post->category_id = $validatedData['category_id'];
    $post->update($validatedData);
    $post->save();
   

    return redirect()->route('posts.index')->with('status', 'Cập nhật truyện thành công!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect() -> route('posts.index')->with('status','Xoá danh mục thành công!');
    }
}
