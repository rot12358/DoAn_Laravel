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
        return view('categories.index')->with(compact('cates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'theloaitruyen' => 'required|string|max:255',
            'is_active' => 'required|boolean',
        ]);

        Category::create($validatedData);

        return redirect()->route('categories.index')->with('status', 'Danh mục đã được thêm thành công!');
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
        return view('categories.show',['Category' => $cate,'Category'=>$cate->cate]);
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
        return view('categories.edit')->with(compact('cate'));
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
        $validatedData = $request->validate([
            'theloaitruyen' => 'required|string|max:255',
            'is_active' => 'required|boolean',
        ]);

        $category = Category::findOrFail($id);
        $category->theloaitruyen = $validatedData['theloaitruyen'];
        $category->is_active = $validatedData['is_active'];
        $category->update($validatedData);
        $category->save();

        return redirect()->route('categories.index')->with('status', 'Cập nhật danh mục thành công!');
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
        return redirect()->route('categories.index')->with('status','Xoá thành công Truyện');
    }
}
