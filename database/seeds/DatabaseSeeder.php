<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Portfolio::class, 4)->create()->each(function ($portfolio) {
            // $portfolio->images()->save(factory(App\PortfolioImage::class)->make());
            // $portfolio->images()->save(factory(App\PortfolioImage::class)->make());
            // $portfolio->images()->save(factory(App\PortfolioImage::class)->make());
            // $portfolio->images()->save(factory(App\PortfolioImage::class)->make());
        });
    }
}
