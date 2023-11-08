<?php

namespace App\Repositories;

use App\Enums\News\StatusEnum;
use App\Models\News;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class NewsRepository
{
    public function getActive(): Collection
    {
        return News::query()
            ->where('status', StatusEnum::active)
            ->get()
            ;
    }

    /**
     * @throws ModelNotFoundException
     */
    public function getById(int $newsId): News
    {
        return News::findOrFail($newsId);
    }
}
