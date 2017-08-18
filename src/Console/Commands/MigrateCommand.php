<?php

declare(strict_types=1);

namespace Rinvex\Contacts\Console\Commands;

use Illuminate\Console\Command;

class MigrateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rinvex:migrate:contacts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate Rinvex Contacts Tables.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->warn('Migrate rinvex/contacts:');
        $this->call('migrate', ['--step' => true, '--path' => 'vendor/rinvex/contacts/database/migrations']);
    }
}