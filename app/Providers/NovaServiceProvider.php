<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

use Illuminate\Support\Facades\Log;

use OptimistDigital\NovaSettings\NovaSettings;
use Laravel\Nova\Fields\Text;
use Waynestate\Nova\CKEditor;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Panel;
use Laravel\Nova\Fields\Image;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Illuminate\Http\Request;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        NovaSettings::addSettingsFields([
            
            new Panel('Services', function() {
                return [
                    Textarea::make('Introduction', 'services_intro'),
                    Text::make('Service 1 Title', 'service1_title'),
                    Textarea::make('Service 1 Description', 'service1_description'),
                    Text::make('Service 2 Title', 'service2_title'),
                    Textarea::make('Service 2 Description', 'service2_description'),
                    Text::make('Service 3 Title', 'service3_title'),
                    Textarea::make('Service 3 Description', 'service3_description'),
                ];
            }),

            new Panel('About', function() {
                return [
                    Image::make('Photo', 'about_photo')
                        ->path('images')
                        ->storeAs(function (Request $request) {
                            return $request->about_photo->getClientOriginalName();
                        }),
                    Text::make('Professional Title(s)', 'about_title'),
                    CKEditor::make('Details', 'about_details')
                ];
            }),
        ]);

    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                'mail@johannesschmidt.ca',
                'trisha@horticurious.ca'
            ]);
        });
    }

    /**
     * Get the cards that should be displayed on the default Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            new Help,
        ];
    }

    /**
     * Get the extra dashboards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            new NovaSettings
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
