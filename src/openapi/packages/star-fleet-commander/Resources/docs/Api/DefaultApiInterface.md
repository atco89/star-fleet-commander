# OpenAPI\Server\Api\DefaultApiInterface

All URIs are relative to *https://localhost/application/public*

Method | HTTP request | Description
------------- | ------------- | -------------
[**buildFleet**](DefaultApiInterface.md#buildFleet) | **POST** /fleet/{formation}/formation | Order fleet.


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.default:
        class: Acme\MyBundle\Api\DefaultApi
        tags:
            - { name: "open_api_server.api", api: "default" }
    # ...
```

## **buildFleet**
> OpenAPI\Server\Model\SpaceshipResponse buildFleet($formation, $spaceshipRequest)

Order fleet.

You can order a fleet to take formations - attack, escort.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/DefaultApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\DefaultApiInterface;

class DefaultApi implements DefaultApiInterface
{

    // ...

    /**
     * Implementation of DefaultApiInterface#buildFleet
     */
    public function buildFleet($formation, array $spaceshipRequest = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formation** | **string**| Fleet formation. |
 **spaceshipRequest** | [**OpenAPI\Server\Model\SpaceshipRequest**](../Model/SpaceshipRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\SpaceshipResponse**](../Model/SpaceshipResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

