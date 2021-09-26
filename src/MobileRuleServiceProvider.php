<?php

namespace Vurpa\MobileRule;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Vurpa\MobileRule\Commands\MobileRuleCommand;

class MobileRuleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-mobile-rule')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-mobile-rule_table')
            ->hasCommand(MobileRuleCommand::class);
    }
}
