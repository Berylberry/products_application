

## About Project

Please have Docker desktop installed on machine

```
cd ProjectDirectory
./vendor/bin/sail up
```

## API Endpoint
```
GET: /api/products
//query parameters - both required if used
category
priceLessThan
```

## To Run tests

```
./vendor/bin/sail artisan test
```

## PHP version
PHP version should be higher than 7.4. Having docker installed handles this for you automatically.

## If docker is not installed
```
update PHP version to >7.4 or 8
cd ProjectDirectory
```
to run application...
```
php artisan serve
```

to run tests

````
php artisan test
````


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
