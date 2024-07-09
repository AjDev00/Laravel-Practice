<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CreateView extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this -> argument('name');
        $viewPath = resource_path('views/' . $name . '.blade.php');

        if(File::exists($viewPath)){
            $this -> error("View already Exists!");
        } else{
            File::put($viewPath, '');
            $this -> info('View created successfully.');
        }
    }
}
