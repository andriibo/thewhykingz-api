<?php

namespace App\Http\OA;

/**
 * @OA\Parameter(
 *    name="Accept",
 *    in="header",
 *    description="Accept header",
 *    @OA\Schema(type="string", example="application/vnd.api+json")
 * )
 * @OA\Parameter(
 *    name="Content-Type",
 *    in="header",
 *    description="Content-Type header",
 *    @OA\Schema(type="string", example="application/vnd.api+json")
 * )
 * @OA\Parameter(
 *    name="id",
 *    required=true,
 *    in="path",
 *    @OA\Schema(type="integer", example="11")
 * )
 */
class ParametersOA
{
}
