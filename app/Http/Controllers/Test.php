<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Test extends Controller
{
    
    //
    public function index(){
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        $out->writeln("Hello from Terminal");
        $out->writeln("Hello from Terminal e");
        // return view('welcome');
        // $this->handle();
    }
    public function handle(): void
{
    // ...
 
    $this->info('The command was successful!');
}
}
