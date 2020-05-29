<?php

namespace App\Http\Controllers;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Http\Request;

class ScryptController extends Controller
{
    public function forward ()
    {
        echo 'forward ';
        //$command = escapeshellcmd('python my_scrypt.py forward');
        //$output = shell_exec($command);
        $output = 'Hello world';
        return response($output, 200);
    }

    public function backward ()
    {
        echo 'backward ';
        //$command = escapeshellcmd('python my_scrypt.py backward');
        //$output = shell_exec($command);
        $output = 'Hello world';
        return response($output, Response::HTTP_OK);
    }

    public function leftward ()
    {
        echo 'leftward ';
        //$command = escapeshellcmd('python my_scrypt.py leftward');
        //$output = shell_exec($command);
        $output = 'Hello world';
        return response($output, Response::HTTP_OK);
    }

    public function rightward ()
    {
        echo 'rightward ';
        //$command = escapeshellcmd('python my_scrypt.py rightward');
        //$output = shell_exec($command);
        $output = 'Hello world';
        return response($output, 200);
    }
}
