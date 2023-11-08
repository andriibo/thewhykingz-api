<?php

namespace App\Http\Controllers\Api\News;

use App\Http\Controllers\Controller;
use App\Http\Resources\News\NewsResource;
use App\Repositories\NewsRepository;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

/**
 * @OA\Get(
 *     path="/news",
 *     summary="Get News",
 *     tags={"News"},
 *     @OA\Parameter(ref="#/components/parameters/Accept"),
 *     @OA\Parameter(ref="#/components/parameters/Content-Type"),
 *     @OA\Response(response=200, description="Ok",
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="array", @OA\Items(ref="#/components/schemas/NewsResource"))
 *         )
 *     ),
 *     @OA\Response(response=405, ref="#/components/responses/405"),
 *     @OA\Response(response=500, ref="#/components/responses/500")
 * )
 */
class News extends Controller
{
    public function __invoke(NewsRepository $newsRepository): AnonymousResourceCollection {
        $news = $newsRepository->getActive();

        return NewsResource::collection($news);
    }
}
