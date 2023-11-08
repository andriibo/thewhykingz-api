<?php

namespace App\Http\Controllers\Api\News;

use App\Enums\News\StatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\News\ChangeStatusRequest;
use App\Repositories\NewsRepository;
use App\Services\News\ChangeStatusNewsService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

/**
 * @OA\Patch(
 *     path="/news/{id}/change-status",
 *     summary="Change News Status",
 *     tags={"News"},
 *     @OA\Parameter(ref="#/components/parameters/Accept"),
 *     @OA\Parameter(ref="#/components/parameters/Content-Type"),
 *     @OA\Parameter(ref="#/components/parameters/id"),
 *     @OA\RequestBody(ref="#/components/requestBodies/ChangeStatusRequest"),
 *     @OA\Response(response=204, description="No Content"),
 *     @OA\Response(response=404, ref="#/components/responses/404"),
 *     @OA\Response(response=405, ref="#/components/responses/405"),
 *     @OA\Response(response=422, ref="#/components/responses/422"),
 *     @OA\Response(response=500, ref="#/components/responses/500")
 * )
 */
class ChangeStatus extends Controller
{
    public function __invoke(
        int $newsId,
        ChangeStatusRequest $changeStatusRequest,
        NewsRepository $newsRepository,
        ChangeStatusNewsService $changeStatusNewsService,
    ): JsonResponse {
        $news = $newsRepository->getById($newsId);
        $changeStatusNewsService->handle($news, StatusEnum::from($changeStatusRequest->input('status')));

        return new JsonResponse(null, Response::HTTP_NO_CONTENT);
    }
}
