<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Storage;

class reFreshCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'refresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refresh Laravel App';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //$this->call('queue:flush');
        $this->call('route:clear');
        $this->call('storage:link');
        $this->call('view:clear');
        //$this->call('optimize:clear');
        //$this->call('event:clear');
        $this->call('config:clear');
        //$this->call('auth:clear-resets');
        $this->call('clear-compiled');
        $this->call('db:wipe');
        //$this->call('optimize');
        $this->call('key:generate');
        $this->call('migrate:fresh');
        $this->call('db:seed');
        
        //clean up images uploaded
        $files = Storage::files('images');
        Storage::delete($files);
    }
}
