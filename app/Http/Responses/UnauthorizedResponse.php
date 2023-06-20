<?php

namespace App\Http\Responses;

use Illuminate\Http\JsonResponse;

class UnauthorizedResponse
{
    public function getResponse(): JsonResponse{
        return response()->json([
            'error' => 'Não autorizado'
        ], 401);
    }
}

?>
