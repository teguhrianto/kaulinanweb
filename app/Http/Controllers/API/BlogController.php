<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\BlogResource;

use App\Models\Blog;

class BlogController extends BaseController
{
    // Retrieve all blog posts
    public function index()
    {
        $blogs = BlogResource::collection(Blog::with('author')->get());
        return $this->handleResponse($blogs, 'Fetched Successfully.');
    }

    // Create a new blog post
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'title' => 'required|string',
            'slug' => 'required|unique:blogs,slug',
            'image_url' => 'required|string',
            'content' => 'required|string',
            'author_id' => 'required|exists:users,id',
            'is_featured' => 'boolean',
        ]);

        if ($validator->fails()) {
            return $this->handleError('Bad Request', $validator->errors(), 400);
        }

        $blog = Blog::create($input);

        // Use the BlogResource to format the response for the newly created blog post
        $formattedBlog = new BlogResource($blog);

        return $this->handleResponse($formattedBlog, 'Blog created successfully.');
    }

    // Retrieve a single blog post by ID
    public function show($id)
    {
        $blog = Blog::with('author')->find($id);

        if (!$blog) {
            return $this->handleError('Blog not found', null, 404);
        }

        // Use the BlogResource to format the response for a single blog post
        $formattedBlog = new BlogResource($blog);

        return $this->handleResponse($formattedBlog, 'Blog fetched successfully.');
    }

    // Update a blog post by ID
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            return $this->handleError('Blog not found', null, 404);
        }

        $input = $request->all();
        $validator = Validator::make($input, [
            'title' => 'required|string',
            'slug' => 'required|unique:blogs,slug,' . $id,
            'image_url' => 'required|string',
            'content' => 'required|string',
            'author_id' => 'required|exists:users,id',
            'is_featured' => 'boolean',
        ]);

        if ($validator->fails()) {
            return $this->handleError('Bad Request', $validator->errors(), 400);
        }

        $blog->update($input);

        // Use the BlogResource to format the response for the updated blog post
        $formattedBlog = new BlogResource($blog);

        return $this->handleResponse($formattedBlog, 'Blog updated successfully.');
    }

    // Delete a blog post by ID
    public function destroy($id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            return $this->handleError('Blog not found', null, 404);
        }

        $blog->delete();

        return $this->handleResponse(null, 'Blog deleted successfully.');
    }
}
