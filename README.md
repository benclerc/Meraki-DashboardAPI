# SwaggerClient-php
The Cisco Meraki Dashboard API is a modern REST API based on the OpenAPI specification.  > Date: 27 April, 2021 > > [What's New](https://meraki.io/whats-new/)  ---  [API Documentation](https://meraki.io/api)  [Community Support](https://meraki.io/community)  [Meraki Homepage](https://www.meraki.com)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.11.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

This specification file was used for the generation : [https://raw.githubusercontent.com/meraki/openapi/master/openapi/spec2.json](https://raw.githubusercontent.com/meraki/openapi/master/openapi/spec2.json)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/benclerc/Meraki-DashboardAPI.git"
    }
  ],
  "require": {
    "benclerc/Meraki-DashboardAPI": "*@dev"
  }
}
```

Then run `composer install` or run directly `composer require benclerc/meraki-dashboardapi`.

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: meraki_api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Cisco-Meraki-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Cisco-Meraki-API-Key', 'Bearer');

$apiInstance = new Swagger\Client\Api\AccessControlListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_id = "network_id_example"; // string | 

try {
    $result = $apiInstance->getNetworkSwitchAccessControlLists($network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlListsApi->getNetworkSwitchAccessControlLists: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints and Authorization

The full documentation can be found [here](https://benclerc.github.io/Meraki-DashboardAPI/).


## Documentation For Authorization


## meraki_api_key

- **Type**: API key
- **API key parameter name**: X-Cisco-Meraki-API-Key
- **Location**: HTTP header


## Author

Library generated using Swagger 2.
