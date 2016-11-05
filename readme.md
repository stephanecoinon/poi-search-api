# POI Search API

Playing around with [Lumen](https://lumen.laravel.com) and
[MongoDB](https://www.mongodb.com) to build an API to search for POIs (Points Of
Interest) nearest to a given UK postcode.

We'll use the [Open Charge Map](http://openchargemap.io/site) as the map data and
MongoDB built-in geo-location search to find the nearest points to a given UK
postcode. And we'll leverage [Postcodes.io](http://postcodes.io) to geo-locate
the searched postcodes.

We'll explain how to set it all up on [DigitalOcean](https://www.digitalocean.com)
so you can reuse this project to build an API with your own data source.

## How does the API work?


## Test on local development

We'll assume you already have PHP and composer installed.
After cloning this repo, and before running `composer install`, you'll need to
install the MongoDB extension for PHP which can be done like so on MacOS
(for PHP 7.0):
```
    brew install php70-mongodb
```


## Set up this API on DigitalOcean
