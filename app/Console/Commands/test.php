<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Parameter;




class test extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'parameter:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Assign value to parameters';

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
        $times = 20;

        for ($i=1; $i <= $times ; $i++) { 
       
        $n= new Parameter;
        $n->value = rand(1,100);
        $n->description = "Parametr".$i;
        $n->save();
    }

    }
}
