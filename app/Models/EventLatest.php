<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventLatest extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'event_latests';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $guarded = [];
}
