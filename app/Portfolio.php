<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Portfolio extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'description'
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('portfolio-index')
            ->width(400)
            ->height(260);

        $this->addMediaConversion('portfolio-index-lg')
            ->width(800)
            ->height(520); 

        $this->addMediaConversion('portfolio-detail-sm')
            ->width(400);

        $this->addMediaConversion('portfolio-detail-md')
            ->width(800);

        $this->addMediaConversion('portfolio-detail')
            ->width(1400);

        $this->addMediaConversion('portfolio-detail-lg')
            ->width(2800);          
    }

    // public function registerMediaCollections(): void
    // {
    //     $this->addMediaCollection('images');
    // }
}
