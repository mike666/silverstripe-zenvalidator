<?php

use SilverStripe\Control\Director;

class ZenValidatorHelper {

    public static function prependBasePath(string $path): string {
        $basePath = Director::absoluteBaseURL();

        return sprintf("%s/app/src/vendor/silverstripe-zendvalidator/%s", $basePath, $path);
    }
}
