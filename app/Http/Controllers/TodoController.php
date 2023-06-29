<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{

    public function create()
    {

        $todo = new Todo();

        $todo->content = "This is my second todo!";
        $todo->status = "pending";

        $todo->save();


    }

}