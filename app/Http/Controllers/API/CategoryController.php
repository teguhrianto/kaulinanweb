<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Category;

class CategoryController extends BaseController
{
    public function index()
    {
        $categories = Category::all();
        return $this->handleResponse($categories, 'Fetched Successfully.');
    }

    public function store(Request $request)
    {

        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required|string',
            'slug' => 'required|string|unique:categories',
            'image_url' => 'nullable|string',
            'type' => 'required|in:age,general',
        ]);

        if ($validator->fails()) {
            return $this->handleError('Bad Request', $validator->errors(), 400);
        }

        $category = Category::create($input);

        return $this->handleResponse($category, 'Category created successfully.');
    }

    public function show($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return $this->handleError('Category not found', null, 404);
        }

        return $this->handleResponse($category, 'Category fetched successfully.');
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required|string',
            'slug' => 'required|string|unique:categories,slug,' . $id,
            'image_url' => 'nullable|string',
            'type' => 'required|in:age,general',
        ]);

        if ($validator->fails()) {
            return $this->handleError('Bad Request', $validator->errors(), 400);
        }

        $category->update($input);

        return $this->handleResponse($category, 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return $this->handleError('Category not found', null, 404);
        }

        $category->delete();

        return $this->handleResponse(null, 'Category deleted successfully.');
    }
}
