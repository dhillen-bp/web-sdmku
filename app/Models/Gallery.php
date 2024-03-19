<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'gallery';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $guarded = [];
}
