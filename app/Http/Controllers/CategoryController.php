<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cates = Category::orderBy('id','DESC')->get();
        return view('category')->with(compact('cates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request ->validate([
            'theloaitruyen' =>'required|unique:team|max:255',
        ],
        [
            'theloaitruyen.required' => 'Nhập tiêu đề',
            'theloaitruyen.unique' => 'Tiêu đề này đã tồn tại,nhập tiêu đề khác!'
        ]
        );
        $cate = new Category;
        $cate->name = $data['theloaitruyen'];
        $cate->save();

        return redirect()->route('category')->with('status','Thêm Truyện thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cate = Category::find($id);
        return view('posts.show',['Category' => $cate,'Category'=>$cate->cate]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cate = Category::find($id);
        $cate = Category::all(); // Assuming you have a Team model
        return view('teams.edit',compact('cate','teams'));
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
        $data = $request->validate(
            [
                'theloaitruyen' =>'required:team|max:255',
            ],
            [
                'theloaitruyen.required'=> 'Nhập tiêu đề',
            ]
            );
            $cate = Category::find($id);
            $cate->theloaitruyen = $data['theloaitruyen'];
            $cate->save();

            return redirect()->route('category')->with('status','Cập nhập Truyện thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->route('category')->with('status','Xoá thành công Truyện');
    }
}
