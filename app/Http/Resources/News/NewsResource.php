<?php

namespace App\Http\Resources\News;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

/**
 * @OA\Schema(
 *     title="NewsResource",
 *     @OA\Property(property="id", type="integer", example="12"),
 *     @OA\Property(property="title", type="string"),
 *     @OA\Property(property="shortDescription", type="string"),
 *     @OA\Property(property="createdAt", type="string", example="2023-11-08 16:16:56"),
 *     @OA\Property(property="status", type="string", enum={"active","hidden"})
 * )
 */
class NewsResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'shortDescription' => $this->short_description,
            'createdAt' => $this->created_at,
            'status' => $this->status,
        ];
    }
}
