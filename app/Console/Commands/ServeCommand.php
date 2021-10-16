<?php

/**
 *
 * PHP version >= 7.0
 *
 * @category Console_Command
 * @package  App\Console\Commands
 */

namespace App\Console\Commands;


use Exception;
use Illuminate\Console\Command;



/**
 * Class serveCommand
 *
 * @category Console_Command
 * @package  App\Console\Commands
 */
class ServeCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = "serve";

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "run server localhost:8080";


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        try {
            $cmd = "php -S localhost:8000 -t public";
            shell_exec($cmd);
            $this->info("success");
        } catch (Exception $e) {
            $this->error("An error occurred");
        }
    }
}
