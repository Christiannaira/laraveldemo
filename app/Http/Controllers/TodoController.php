<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{

    public function create(Request $request)
    {

        $todo = new Todo();

        $todo->content = $request->content;
        $todo->status = "pending";

        $todo->save();


    }

}