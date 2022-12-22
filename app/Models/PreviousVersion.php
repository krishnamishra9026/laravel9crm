<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreviousVersion extends Model
{
    use HasFactory;

    protected $fillable = [
        'version', 'image', 'file', 'product_id', 'size', 'apk_url', 'play_store_url', 'added_on'
    ];
}
