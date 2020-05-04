<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;

use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Illuminate\Support\Facades\Log;


class PortfolioImage extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\PortfolioImage';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'alt';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'alt'
    ];

    /**
     * Indicates if the resource should be displayed in the sidebar.
     *
     * @var bool
     */
    // public static $displayInNavigation = false;

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            Image::make('Image', 'path')
                ->disk('public')
                ->path('images')
                ->storeAs(function (Request $request) {
                    return $request->path->getClientOriginalName();
                }),

                // ->store(function (Request $request, $model) {

                //     // Create a UUID filename
                //     $fileSmall = $this->uuid() . '.jpg';
                //     $fileLarge = $this->uuid() . '.jpg';

                //     // Crop with Image Intervention
                //     $imageSmall = Cropper::make($request->image)->fit(200, 100, function ($c) {
                //         $c->upsize();
                //     })->encode('jpg', 90);
                //     $imageLarge = Cropper::make($request->image)->fit(500, 300, function ($c) {
                //         $c->upsize();
                //     })->encode('jpg', 90);

                //     // Store on S3
                //     Storage::disk('s3_image')->put($fileSmall, (string) $imageSmall);
                //     Storage::disk('s3_image')->put($fileLarge, (string) $imageLarge);

                //     return [
                //         'image_small' => $fileSmall,
                //         'image_large' => $fileLarge,
                //     ];
                // })

            Text::make('Alternative Text', 'alt')
                ->hideFromIndex()
                ->required(true),

            BelongsTo::make('Portfolio')
                ->searchable()
                ->required(true),    
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
