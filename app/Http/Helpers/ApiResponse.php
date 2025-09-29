<?php

namespace App\Http\Helpers;

trait ApiResponse {
    protected function successResponse($message="successful",$data=null,$status=200) {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $data,
            'status'  => $status
        ],$status);
    }

    protected function errorResponse($message="bad Request!",$status=400) {
        return response()->json([
            'success' => false,
            'message' => $message,
            'status'  => $status
        ],$status);
    }
}
