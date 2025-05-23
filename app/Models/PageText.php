<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PageText extends Model
{
    use HasFactory;

    protected $guarded = false;
    public function page(): BelongsTo
    {
        return $this->belongsTo(Page::class);
    }
}
