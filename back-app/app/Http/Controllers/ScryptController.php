<?php

namespace App\Http\Controllers;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class ScryptController extends Controller
{
    public function forward ()
    {
        $scryptFolder='$HOME/pi/Scrypts ';
        $command = escapeshellcmd(this.$scryptFolder+'python move_scrypt.py forward');
        $output = shell_exec($command);
        return response($output, 200);
    }

    public function backward ()
    {
        $scryptFolder='$HOME/pi/Scrypts ';
        $command = escapeshellcmd(this.$scryptFolder+'python move_scrypt.py backward');
        $output = shell_exec($command);
        return response($output, 200);

    }

    public function leftward ()
    {
        $scryptFolder='$HOME/pi/Scrypts ';
        $command = escapeshellcmd(this.$scryptFolder+'python move_scrypt.py leftward');
        $output = shell_exec($command);
        return response($output, 200);
    }

    public function rightward ()
    {
        $scryptFolder='$HOME/pi/Scrypts ';
        $command = escapeshellcmd(this.$scryptFolder+'python move_scrypt.py  rightward');
        $output = shell_exec($command);
        return response($output, 200);
    }
}
