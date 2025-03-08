<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class FormContact extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable =  ['first_name', 'last_name', 'email', 'message'];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom(fn($model) => $model->first_name . ' ' . $model->last_name)
            ->saveSlugsTo('slug');
    }
}
