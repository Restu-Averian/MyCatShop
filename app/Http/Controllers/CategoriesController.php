<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function create() //Show form create 
    {

        return view("categories/create", [

            "title" => "Tambah Kategori"
        ]);
    }
    public function store() //Process create
    {

        $this->validate(request(), [
            'kategori' => 'required|unique:categories', //categories is tablename             
            'image' => 'required'
        ]);

        $categories = new Categories();

        $categories->kategori = request('kategori');
        $categories->image = request()->file('image')->store('post-images');
        $categories->save();
        return back()->with('success', 'Data berhasil ditambahkan!');
    }
    public function formedit($id) //Utk nampilin form update saja
    {
        $categories = Categories::findorFail($id);
        return view('categories/edit', [
            'title' => 'Edit Kategori',
            'categories' => $categories
        ], compact('categories'));
    }


    public function processedit(Request $request, $id) //Proses update
    {
        $request->validate([
            'kategori' => 'required',
            'image' => 'image|file|max:2024'
        ]);
        $update = ['kategori' => $request->kategori];

        if ($files = $request->file('image')) {
            $destinationPath = 'storage/post-images'; //Lokasi kalau gambar sudh terupload
            $profileImage = 'post-images/' . date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);

            $update['image'] = "$profileImage";
        };

        $update['kategori'] = $request->get('kategori');
        Categories::where('id', $id)->update($update);
        //Categories::find($id)->update($request->all());
        return back()->with('success', 'Data telah diperbaharui!');
        return redirect('/data-kategori');
    }
}