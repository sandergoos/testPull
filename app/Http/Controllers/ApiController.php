<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Symfony\Component\Process\Process;

class ApiController extends Controller
{
    public function basicAuthTest()
    {
        return User::all();
    }

    public function updateApplication()
    {
        $process = new Process('cd ..; pwd'); 
        $process->run();

        echo "Output: " . $process->getOutput();
    }
}
