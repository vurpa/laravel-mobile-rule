<?php

namespace Vurpa\MobileRule\Commands;

use Illuminate\Console\Command;

class MobileRuleCommand extends Command
{
    public $signature = 'laravel-mobile-rule';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
