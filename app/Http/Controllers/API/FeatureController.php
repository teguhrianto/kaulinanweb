<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Feature;

class FeatureController extends BaseController
{
    // Get all features
    public function index()
    {
        $features = Feature::all();

        return $this->handleResponse($features, 'Fetched Successfully.');
    }
    
    // Create a new feature
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'title' => 'required|string',
            'description' => 'required|string',
            'image_url' => 'required|string',
        ]);

        if ($validator->fails()) {
            return $this->handleError('Bad Request', $validator->errors(), 400);
        }

        $feature = Feature::create($input);

        return $this->handleResponse($feature, 'Feature created successfully.');
    }

    // Get a single feature by ID
    public function show($id)
    {
        $feature = Feature::find($id);

        if (!$feature) {
            return $this->handleError('Feature not found', null, 404);
        }
        return $this->handleResponse($feature, 'Feature fetched successfully.');
    }

    // Update a feature by ID
    public function update(Request $request, $id)
    {
        $feature = Feature::find($id);

        if (!$feature) {
            return $this->handleError('Feature not found', null, 404);
        }

        $input = $request->all();
        $validator = Validator::make($input, [
            'title' => 'required|string',
            'description' => 'required|string',
            'image_url' => 'required|string',
        ]);

        if ($validator->fails()) {
            return $this->handleError('Bad Request', $validator->errors(), 400);
        }

        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image_url' => 'required|string',
        ]);

        $feature->update($input);

        return $this->handleResponse($feature, 'Feature updated successfully.');
    }

    // Delete a feature by ID
    public function destroy($id)
    {
        $feature = Feature::find($id);

        if (!$feature) {
            return $this->handleError('Feature not found', null, 404);
        }

        $feature->delete();

        return $this->handleResponse(null, 'Feature deleted successfully.');
    }
}
