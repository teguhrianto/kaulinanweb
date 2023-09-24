<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ProductResource;

use App\Models\Product;

class ProductController extends BaseController
{
    // Retrieve all products
    public function index()
    {
        $products = ProductResource::collection(Product::with('category')->get());
        return $this->handleResponse($products, 'Fetched Successfully.');
    }

    // Create a new product post
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required|string',
            'slug' => 'required|unique:products',
            'description' => 'required|string',
            'original_price' => 'required|numeric',
            'discounted_price' => 'numeric|nullable',
            'image_url' => 'required|string',
            'badge' => 'nullable|in:Hot,New,Sold Out,Sale',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($validator->fails()) {
            return $this->handleError('Bad Request', $validator->errors(), 400);
        }

        $product = Product::create($input);

        // Use the ProductResource to format the response for the newly created product
        $formattedProduct = new ProductResource($product);

        return $this->handleResponse($formattedProduct, 'Product created successfully.');
    }

    // Retrieve a single product by ID
    public function show($id)
    {
        $product = Product::with('category')->find($id);

        if (!$product) {
            return $this->handleError('Product not found', null, 404);
        }

        // Use the ProductResource to format the response for a single product
        $formattedProduct = new ProductResource($product);

        return $this->handleResponse($formattedProduct, 'Product fetched successfully.');
    }

    // Update a product by ID
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return $this->handleError('Product not found', null, 404);
        }

        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'string',
            'slug' => 'unique:products,slug,' . $id,
            'description' => 'string',
            'original_price' => 'numeric',
            'discounted_price' => 'numeric|nullable',
            'image_url' => 'string',
            'badge' => 'in:Hot,New,Sold Out,Sale|nullable',
            'category_id' => 'exists:categories,id',
        ]);

        if ($validator->fails()) {
            return $this->handleError('Bad Request', $validator->errors(), 400);
        }

        $product->update($input);

        // Use the ProductResource to format the response for the updated product
        $formattedProduct = new ProductResource($product);

        return $this->handleResponse($formattedProduct, 'Product updated successfully.');
    }

    // Delete a product by ID
    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return $this->handleError('Product not found', null, 404);
        }

        $product->delete();

        return $this->handleResponse(null, 'Product deleted successfully.');
    }
}
