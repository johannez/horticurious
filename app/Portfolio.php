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
            ->width(320)
            ->height(220);

        $this->addMediaConversion('portfolio-index-lg')
            ->width(640)
            ->height(440); 

        $this->addMediaConversion('portfolio-detail-sm')
            ->width(400);

        $this->addMediaConversion('portfolio-detail-md')
            ->width(800);

        $this->addMediaConversion('portfolio-detail')
            ->width(1400);

        $this->addMediaConversion('portfolio-detail-lg')
            ->width(2800);          
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('portfolios');
    }
}
