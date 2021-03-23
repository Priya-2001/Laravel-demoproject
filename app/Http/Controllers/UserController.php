<?php

namespace App\Http\Controllers;
use App\Userdatainsert;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function index($id)
    {
        $users = Userdatainsert::find($id);
        $fp = fopen('userdetails.json', 'w');
        fwrite($fp, json_encode($users));
        fclose($fp);
        $string = file_get_contents("userdetails.json");
        $json_a = json_decode($string, true);
        echo "Login successful!";
        echo "<b>ID: </b>";
        echo $json_a['id'];
        echo '<br>';
        echo "<b>Name: </b>";
        echo $json_a['name'];
        echo '<br>';
        echo "<b>Mobile number: </b>";
        echo $json_a['phone_number'];
    }
}
