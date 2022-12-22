<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'meta_title', 'meta_description', 'tags', 'image', 'file', 'description', 'features', 'type', 'category_id', 'version', 'size', 'apk_url', 'paly_store_url', 'status', 'updated_on', 'uploaded_by', 'requires_android'
    ];
}
