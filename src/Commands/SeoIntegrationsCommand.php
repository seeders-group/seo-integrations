<?php

namespace Seeders\SeoIntegrations\Commands;

use Illuminate\Console\Command;

class SeoIntegrationsCommand extends Command
{
    public $signature = 'seo-integrations';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
