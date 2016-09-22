<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class getidController extends Controller
{
    public function getId(){
        $id = DB::table('users')->value('id');
        $a =['a','b','a','d','r','t'];
        echo json_encode($id);
    }
}
