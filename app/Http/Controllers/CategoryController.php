<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(Request $request): View
    {
        $viewData = [];
        // $viewData['title'] = __('admin/category.title_index');
        $viewData['categories'] = Category::all();
        // $viewData['msg'] = '';

        return view('category.index')->with('viewData', $viewData);
    }

    public function show(string $id): View
    {
        $category = Category::find($id);
        $associatedProducts = $category->getProducts();

        $viewData = [];
        $viewData['category'] = $category;
        $viewData['associatedProducts'] = $associatedProducts;

        return view('category.show')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = [];

        return view('category.create')->with('viewData', $viewData);
    }

    public function save(Request $request): RedirectResponse
    {

        Category::create($request->all());

        return redirect()->route('category.index', ['msg' => 'create_success']);
    }

    public function edit(string $id): View
    {
        $viewData = [];
        $viewData['category'] = Category::findOrFail($id);

        return view('category.edit')->with('viewData', $viewData);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        // Category::validate($request);

        $category = Category::findOrFail($id);
        $category->update($request->all());

        return redirect()->route('category.index', ['msg' => 'edit_success']);
    }

    public function delete(string $id): RedirectResponse
    {
        Category::destroy($id);

        return redirect()->route('category.index', ['msg' => 'delete_success']);
    }
}
