<?php

namespace App\Services\News;

use App\Enums\News\StatusEnum;
use App\Models\News;

class ChangeStatusNewsService
{
    public function handle(News $news, StatusEnum $statusEnum): void
    {
        $news->status = $statusEnum->value;
        $news->save();
    }
}
