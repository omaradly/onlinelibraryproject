<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function showallproduct(){
        $result=category::paginate(9);
        return view('cateogry.showallcateogries',compact('result'));
    }
    public function showoneproduct($id){
        $result=category::findorfail($id);
        return view('cateogry.showonecateogry',compact('result'));
    }
    public function createproduct()
    {
        return view('cateogry.addnewcateogry');
    }
     public function storeproduct(Request $request)
     {
      
        $request->validate([
            'title'=>'required |unique:categories,categoryname',
        ]);
        $category_name = $request->title;
        category::create([
            'categoryname'=>$category_name
        ]);
        return redirect(route('Category.showallCateogries'));
     }
     public function updateproduct($id)
     {
        $category= Category::findorfail($id);
        return view('cateogry.updatecateogry',compact('category'));
     }
     public function updatedbproduct(Request $request,$id)
     {
        $request->validate([
            'title'=>'required |unique:categories,categoryname',
        ]);

        category::findorfail($id)->update([
            'categoryname'=>$request->title,
        ]);
        return(redirect(route('Category.showallCateogries')));
     }

     public function deleteproduct($id){
        $delteproducts= category::findorfail($id);
        $delteproducts->Books()->detach();
        $delteproducts->delete();
        return(redirect(route('Category.showallCateogries')));
     }
}
