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
        'category_id' => 'required',
    ]);

    // Tạo mới bài viết
    $post = new Post();
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
        $post = Post::find($id);
        $categories = Category::all(); // Đây là ví dụ, bạn cần truyền dữ liệu danh mục nếu cần
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

        $data = $request->validate([
            'tentruyen' => 'required|max:255',
            'anhgioithieu' => 'required',
            'thongtingioithieu' => 'required|max:255', // Sửa lại thành 'thongtingioithieu'
            'theloai' => 'required|max:255',
            'gia' => 'required|max:255',
            'tacgia' => 'required|max:255',
            'nxb' => 'required|max:255',
            'category_id' => 'required|exists:categories,id', // Fixed team table name
        ]);
        $post = Post::findOrFail($id);
        $post->tentruyen = $request->input('tentruyen');
        $post->anhgioithieu = $request->input('anhgioithieu');
        $posts->thongtingioithieu = $data['thongtingioithieu'];
        $posts->theloai = $data['theloai'];
        $posts->gia = $data['gia'];
        $posts->tacgia = $data['tacgia'];
        $posts->nxb = $data['nxb'];
        // $posts->anhgioithieu = $data['anhgioithieu'];
        $posts->category_id = $data['category_id'];
        $posts->save();

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
