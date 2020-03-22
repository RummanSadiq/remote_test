<?php

namespace App\Http\Controllers;

use App\CategoriesModel;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        // not_permissions_redirect(have_premission(21));
        $categories = CategoriesModel::all();
        echo $categories;
        return view('categories.index', [
            'categories' => $categories
        ]);
    }

    public function create()
    {
        $categories = CategoriesModel::all();
        return view('categories.create', [
            'categories' => $categories
        ]);
    }

    public function edit($id)
    {
        $category = CategoriesModel::find($id);
        return view('categories.edit')->with('category', $category);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $category = new CategoriesModel;
        $category->fill($input);
        $category->save();

        return redirect('categories');
    }

    public function destroy($id)
    {
        $category = CategoriesModel::find($id);
        $category->delete();
        //return redirect ('admin/categories');

    }

    public function update($id, Request $request)
    {
        $category = CategoriesModel::find($id);
        $input = $request->all();
        $category->fill($input);
        $category->save();
        return redirect('categories');
    }

    public function delete(Request $id)
    {
        // $category = categories::find(Hashids::decode($id)[0]);
        $category = CategoriesModel::find($id);
        dd($category);
    }
}
