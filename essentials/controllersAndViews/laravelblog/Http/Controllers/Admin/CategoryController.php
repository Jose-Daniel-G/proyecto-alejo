<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.categories.index')->only('index');
        $this->middleware('can:admin.categories.create')->only('create', 'store');
        $this->middleware('can:admin.categories.edit')->only('edit', 'update');
        $this->middleware('can:admin.categories.destroy')->only('destroy');
    }
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
        // return view('admin.categories.index');
    }
    public function create()
    {
        return view('admin.categories.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'slug'=>'required|unique:categories'
        ]);
        // dd($category);
        $category=Category::create($request->all());
        // return redirect()->route('admin.categories.index');
        return redirect()->route('admin.categories.edit', $category)->with('success','Categoria creada correctamente');

    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view('admin.categories.edit', compact('category'));
    }
    public function update(Request $request,Category $category)
    {
        $request->validate([
            'name'=>'required',
            'slug'=>"required|unique:categories,slug, $category->id"
        ]);
        // $category = Category::find($id);
        $category->update($request->all());
        return redirect()->route('admin.categories.edit', $category)->with('success','Actualizado correctamente');
    }
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('admin.categories.index')->with('success','La categoria ha sido eliminada exitosamente');
    }
}
