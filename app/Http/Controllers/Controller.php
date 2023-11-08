<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="TheWhyKingz OpenApi Documentation",
 *      description="TheWhyKingz RESTful API"
 * )
 * @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST,
 *      description="TheWhyKingz API Server",
 *      @OA\ServerVariable(
 *         serverVariable="schema",
 *         enum={"https", "http"},
 *         default="https"
 *      )
 * )
 * @OA\Tag(
 *     name="News",
 *     description="API Endpoints of News"
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
