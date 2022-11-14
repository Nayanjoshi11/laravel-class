<?php

namespace App\Http\Controllers;
use App\Models\Todolist;
use Illuminate\Http\Request;


class TodoListController extends Controller
{
    //
    public function saveTodo(Request $req)
    {
        $todoObj = new Todolist();
        $todoObj->title="test";

        $todoObj->save();
        return view('welcome');
    }
}
