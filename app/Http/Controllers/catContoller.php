<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class catContoller extends Controller
{
    //
    function getAll(){
       return Category::all();
         
    }
    //
    function creat(Request $request){
        $category =  new Category;
        $category->name = $request->input('name');
        $category->save();

        return response()->json($category);
    }
    //
    function update(Request $request , $id){

        $category =  Category::find($id);
        
        $category->name = $request->input('name');

        $result=$category->save();
        // if($result == 1){
        //     return "Updated Successfuly";
        // }else{
        //     return "Updated Failed";
        // }
    }
    function getCatTodos($id){
        return Category::find($id)->todos;
    }
    function getCatById($id){
      return  $category =  Category::find($id);
    }
    //

    function delete($id){
       
        $result = Category::where('id',$id)->delete();
        // if($result == 1){
        //     return "Deleted Successfuly  ";
        //   //  return ` Cat $id has been deleted `;
        // }else {
        //     return "Delete Error";
        // }
        
    }
    
}
