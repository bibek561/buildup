<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Service extends Model
{
    use  HasFactory;
    protected $table = 'services';
    protected $fillable = ['order', 'title',  'description', 'image', 'status', 'name', 'slug', 'seo_title', 'seo_description', 'seo_keywords', 'seo_schema', 'banner_image'];
}
