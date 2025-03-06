<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Studio extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = ['name_labs', 'description', 'image'];


    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name_labs')
            ->saveSlugsTo('slug');
    }
}
