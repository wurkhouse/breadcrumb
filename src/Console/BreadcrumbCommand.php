<?php

namespace Wurkhouse\BreadcrumbPackage\Console;

use Roots\Acorn\Console\Commands\Command;
use Wurkhouse\BreadcrumbPackage\Facades\Breadcrumb;

class BreadcrumbCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'breadcrumb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'My custom Acorn breadcrumb.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->info(
            Breadcrumb::getQuote()
        );
    }
}
