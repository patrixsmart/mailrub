<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Patrixsmart\Mailfast\Models\Mailfast;

class mailfastPrune extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mailfast:prune';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This delete all records in mailfast_mails table';

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
     * @return mixed
     */
    public function handle()
    {
        Mailfast::where('created_at', '<', today())->delete();

        $this->info('We are done with it');
    }
}
