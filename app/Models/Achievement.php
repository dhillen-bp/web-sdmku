<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Achievement extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'achievements';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $guarded = [];

    /**
     * Get the category that owns the Achievement
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(AchievementCategories::class, 'category_id', 'id');
    }
}
