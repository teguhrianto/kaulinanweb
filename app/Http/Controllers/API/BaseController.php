<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function handleResponse($result, $message)
    {
        $res = [
            'success' => true,
            'data' => $result,
            'message' => $message,
        ];

        return response()->json($res, 200);
    }

    public function handleError($error, $errorMessages = [], $code = 404){
        $res = [
            'success' => false,
            'message' => $error,
        ];

        if(!empty($errorMessages)){
            $res['errors'] = $errorMessages;
        }

        return response()->json($res, $code);
    }
}
