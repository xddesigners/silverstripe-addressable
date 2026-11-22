<?php

namespace Symbiote\Addressable\Tests;

use Symbiote\Addressable\Addressable;
use SilverStripe\Dev\TestOnly;
use SilverStripe\ORM\DataObject;

class AddressableTestObject extends DataObject implements TestOnly
{
    private static $table_name = 'AddressableTestObject';

    private static $extensions = [Addressable::class];
}
