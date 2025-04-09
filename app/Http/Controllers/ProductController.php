<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index()
    {
        // Fetch all products
        $products = Product::all();

        // Return the view with the products
        return view('products.index', compact('products'));
    }

    public function show(string $id): View
    {
        // Fetch the product by ID
        $product = Product::findOrFail($id);

        // Return the view with the product
        return view('products.show', compact('product'));
    }

    public function create()
    {
        // Return the view to create a new product
        $viewData = [];
        $viewData['categories'] = Category::all();

        return view('products.create')->with('viewData', $viewData);
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Create a new product
        Product::create($request->all());

        // Redirect to the products index with a success message
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function edit(string $id): View
    {
        $viewData = [];
        $viewData['product'] = Product::findOrFail($id);
        $viewData['categories'] = Category::all();

        return view('products.edit')->with('viewData', $viewData);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = Product::findOrFail($id);

        $filledFields = $request->only(array_keys($request->all()));
        $product->fill($filledFields);

        $product->save();

        return redirect()->route('products.index', ['msg' => 'edit_success']);
    }

    public function delete(string $id): RedirectResponse
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('products.index', ['msg' => 'delete_success']);
    }
}
