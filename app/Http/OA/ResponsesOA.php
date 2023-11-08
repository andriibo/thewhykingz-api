<?php

namespace App\Http\OA;

/**
 * @OA\Response(response=400, description="Bad Request",
 *    @OA\JsonContent(
 *       @OA\Property(property="error", type="string", example="Bad request.")
 *    )
 * )
 * @OA\Response(response=404, description="Not Found",
 *    @OA\JsonContent(
 *        @OA\Property(property="error", type="string", example="Resource not found.")
 *    )
 * )
 * @OA\Response(response=405, description="Method Not Allowed",
 *    @OA\JsonContent(
 *        @OA\Property(property="message", type="string", example="The current method is not supported for this route.")
 *    )
 *)
 * @OA\Response(response=422, description="Unprocessable entity",
 *    @OA\JsonContent(
 *        @OA\Property(property="errors", type="array", @OA\Items(
 *             @OA\Property(property="field", type="string", example="email"),
 *             @OA\Property(property="messages", type="array", @OA\Items(type="string"), example={"Email is not valid"}),
 *        ))
 *    )
 * )
 * @OA\Response(response=500, description="Internal Server Error",
 *    @OA\JsonContent(
 *        @OA\Property(property="message", type="string", example="Server Error")
 *    )
 * )
 */
class ResponsesOA
{
}
