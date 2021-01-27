<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class todoController extends Controller
{
    function getAll(){
        return Todo::all();
          
     }
    //
    function creat(Request $request){
        $todo =  new Todo;
        $todo->title = $request->input('title');
        $todo->description = $request->input('description');
        $todo->date = $request->input('date');
        $todo->tags = $request->input('tags');
        $todo->category()->associate($request->input('category_id'));
        $todo->save();

        return response()->json($todo);
    }
    function update(Request $request){

        $todo =  Todo::find($request->id);
        
        $todo->title = $request->input('title');
        $todo->description = $request->input('description');
        $todo->date = $request->input('date');
        $todo->tags = $request->input('tags');
        $todo->category_id = $request->input('category_id');
        
        

        $result=$todo->save();
        // if($result == 1){
        //     return "Updated Successfuly";
        // }else{
        //     return "Updated Failed";
        // }
    }
    function getTodoById($id){
        return  $todo =  Todo::find($id);
      }
    function delete($id){
       
        $result = Todo::where('id',$id)->delete();
        // if($result == 1){
        //     return "Deleted Successfuly  ";
        //   //  return ` Cat $id has been deleted `;
        // }else {
        //     return "Delete Error";
        // }
        
    }
}
