<?php

namespace App\Http\Controllers;
use App\Models\Todolist;
use Illuminate\Http\Request;


class TodoListController extends Controller
{
    public function index()
    {
        return view('welcome',['items'=>Todolist::all()]);
    }
    //
    public function saveTodo(Request $req)
    {
        $todoObj = new Todolist();
        $todoObj->title=$req->todo;

        $todoObj->save();
        return redirect("/");
    }
    public function updateTodo(Request $req,$id)
    {
        $updatedItem= TodoList::find($id);
        $updatedItem->title = $req->todo;
        $updatedItem->save();
        return redirect("/");
    }

    public function edit($id){
        $todo=todolist::find($id);
        return view('edit',['data'=>$todo]);
    
    }

    public function delitem($id){
        $todo=todolist::find($id);
        $todo->delete();
        return redirect("/");
    }
}
