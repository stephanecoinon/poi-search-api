<?php

use App\Poi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // openchargemap.json file was generated from
        // http://api.openchargemap.io/v2/poi/?output=json&countrycode=GB&maxresults=1000
        $pois = collect(json_decode(file_get_contents(database_path('seeds/openchargemap.json'))));

        $pois
            // Add a location document on each POI address that we'll use to
            // search nearest POIs by longitude/latitude
            ->map(function ($poi) {
                $poi->AddressInfo->location = [
                    $poi->AddressInfo->Longitude,
                    $poi->AddressInfo->Latitude
                ];
                return $poi;
            })
            // Add all POIs to database collection
            ->each(function ($poi) {
                Poi::create((array)$poi);
            });
    }
}
