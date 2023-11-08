<?php

namespace App\Http\Requests\News;

use App\Http\Requests\AbstractFormRequest;

/**
 * @OA\RequestBody(
 *    request="ChangeStatusRequest",
 *    required=true,
 *    @OA\JsonContent(required={"status"},
 *       @OA\Property(property="status", type="string", enum={"active","hidden"})
 *    )
 * )
 */
class ChangeStatusRequest extends AbstractFormRequest
{
    public function rules(): array
    {
        return [
            'status' => 'required|in:active,hidden',
        ];
    }
}
