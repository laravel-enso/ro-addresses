<!--h-->
# Romanian Addresses
[![StyleCI](https://styleci.io/repos/114126709/shield?branch=master)](https://styleci.io/repos/114126709)
[![License](https://poser.pugx.org/laravel-enso/permissionmanager/license)](https://https://packagist.org/packages/laravel-enso/roaddresses)
[![Total Downloads](https://poser.pugx.org/laravel-enso/roaddresses/downloads)](https://packagist.org/packages/laravel-enso/roaddresses)
[![Latest Stable Version](https://poser.pugx.org/laravel-enso/roaddresses/version)](https://packagist.org/packages/laravel-enso/roaddresses)
<!--/h-->

Romanian Addresses extension for [Addresses Manager](https://github.com/laravel-enso/AddressesManager), the [Laravel Enso](https://github.com/laravel-enso/Enso) package.

[![Screenshot](https://laravel-enso.github.io/roaddresses/screenshots/bulma_040_thumb.png)](https://laravel-enso.github.io/roaddresses/screenshots/bulma_040.png)

### Features

- makes changes to the addresses columns to better fit the Romanian locale
- comes with two additional tables for Counties and Localities
- comes with its own customized form for the edit and creation of addresses
- comes with a personalized configuration
- comes with its own VueJS components `ro-addresses` in order to customize the form 
and the template for the address cards
- comes with its own trait

### Usage
- run the migrations, as they change the addresses table, add two other tables, and insert all the localities
- the configuration should be published, and inside you need to define the addresable types
- for the models you want to make addressable, you should use **this** package's `Addresable` trait. 
Take note that both [Addresses Manager](https://github.com/laravel-enso/AddressesManager) and this package come with a 
trait with the same name, so make sure to import the correct one. 
- insert the `RoAddreses` vue component where required. It takes the same parameters as `Addresses` - `id` and `type` 
being the essential ones.

```
<ro-addresses :id="modelId" type="model_alias">
</ro-addresses>
```

where
* `modelId` is the addressable model id
* `model_alias` is the alias given in the `config/enso/addresses.php` configuration, in the addresables section

### Publishes
- `php artisan vendor:publish --tag=ro-addresses-config` - configuration file
- `php artisan vendor:publish --tag=ro-addresses-form` - form used for creating/editing addresses
- `php artisan vendor:publish --tag=enso-config` - a common alias for when wanting to update the config,
once a newer version is released

 
### Notes

The [Laravel Enso Core](https://github.com/laravel-enso/Core) package does NOT come with this package included, 
only with the generic [Addresses Manager](https://github.com/laravel-enso/AddressesManager).

This package depends on the [Addresses Manager](https://github.com/laravel-enso/AddressesManager) and 
it does not work standalone.

<!--h-->
### Contributions

are welcome. Pull requests are great, but issues are good too.

### License

This package is released under the MIT license.
<!--/h--> 