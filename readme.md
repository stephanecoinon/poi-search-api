# POI Search API

Playing around with [Lumen 5.3](https://lumen.laravel.com) and
[MongoDB](https://www.mongodb.com) to build an API to search for POIs (Points Of
Interest) nearest to a given UK postcode.

We'll use the [Open Charge Map](http://openchargemap.io/site) as the map data and
MongoDB built-in geo-location search to find the nearest points to a given UK
postcode. And we'll leverage [Postcodes.io](http://postcodes.io) to geo-locate
the searched postcodes.

We'll explain how to set it all up on [DigitalOcean](https://www.digitalocean.com)
so you can reuse this project to build an API with your own data source.

## How does the API work?


## Setup the demo data

Providing you have MongoDB installed and running, in your `.env` file, set the
server details and credentials:
```
    DB_CONNECTION=mongodb
    DB_HOST=localhost
    DB_PORT=27017
    DB_DATABASE=pois
    DB_USERNAME=
    DB_PASSWORD=
```

Then just run:
```
    php artisan migrate --seed
```

This command will run a migration that creates the demo collection and sets
the index required for the geo-location search while the dataseeder will load
the demo data in the collection.

## Test on local development

We'll assume you already have PHP and composer installed.
After cloning this repo, and before running `composer install`, you'll need to
install the MongoDB extension for PHP which can be done like so on MacOS
(for PHP 7.0):
```
    brew install php70-mongodb
```


## Set up this API on DigitalOcean
