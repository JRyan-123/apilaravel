<?php

namespace App\Traits;

trait ApiResponseTrait
{
    public function success($data, $message = null, $status = 200)
    {
        return response()->json([
            'message'   => $message,
            'data'      => $data,
        ], $status);
    }

    public function error($data, $message = null, $status = 400)
    {
        return response()->json([
            'message'   => $message,
            'data'      => $data,
        ], $status);
    }
}
