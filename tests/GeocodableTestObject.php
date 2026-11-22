<?php

namespace Symbiote\Addressable\Tests;

use Symbiote\Addressable\Addressable;
use Symbiote\Addressable\Geocodable;
use SilverStripe\Dev\TestOnly;
use SilverStripe\ORM\DataObject;

class GeocodableTestObject extends DataObject implements TestOnly
{
    private static $table_name = 'GeocodableTestObject';

    private static $extensions = [
        Addressable::class,
        // Geocodable depends on `isAddressChanged` function from this extension
        Geocodable::class,
    ];
}
