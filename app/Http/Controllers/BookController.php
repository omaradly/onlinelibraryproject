<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BookController extends Controller
{
    //
    public function showallproduct(){
        $result=Book::paginate(9);
        return view('books.showallbooks',compact('result'));
    }
    public function showoneproduct($id){
        $result=Book::findorfail($id);
        return view('books.showonebook',compact('result'));
    }
    public function createproduct()
    {
        $categories = Category::get();
        return view('books.addnewbook',compact('categories'));
    }
     public function storeproduct(Request $request)
     {
      
        $request->validate([
            'title'=>'required',
            'description'=>'required|max:255',
            'price'=>'required',
            'image' => 'image|required',
            'category_ids' =>'required',
            'Sale' =>'required',
            'newprice' =>Rule::requiredIf($request->Sale == "yes"),
        ]);
        $book_name = $request->title;
        $book_des=$request->description;
        $book_price=$request->price;
        if ($request->Sale == 'yes') {
            $newprice = $request->newprice;
            $keysale = 'true';
        }else{
            $newprice = '';
            $keysale = 'false';
        }
        $book_image= $request->file('image');
        //get photoextenstion
        $exn=$book_image->getClientOriginalExtension();
        // gave photo uniqid
        $image_name=uniqid().".".$exn;
        // move photo
        $book_image->move(public_path('images/bookimages'),$image_name);
        $book = Book::create([
            'bookname'=>$book_name,
            'bookdescription'=>$book_des,
            'bookprice'=>$book_price,
            'bookimage'=>$image_name,
            'keysale'=>$keysale,
            'newprice'=>$newprice
        ]);
        $book->categories()->sync($request->category_ids);
        return redirect(route('books.showall'));
     }
     public function updateproduct($id)
     {
        $book= Book::findorfail($id);
        return view('books.ubdatebook',compact('book'));
     }
     public function updatedbproduct(Request $request,$id)
     {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
            'image'=>'image',
            'Sale' =>'required',
            'newprice' =>Rule::requiredIf($request->Sale == "yes"),
        ]);
        if ($request->Sale == 'yes') {
            $newprice = $request->newprice;
            $keysale = 'true';
        }else{
            $newprice = '';
            $keysale = 'false';
        }
        if ($request->hasFile('image')) {
            
            $book_image= $request->file('image');
            //get photoextenstion
            $exn=$book_image->getClientOriginalExtension();
            // gave photo uniqid
            $image_name=uniqid().".".$exn;
            // move photo
            $book_image->move(public_path('images/bookimages'),$image_name);
            //delet old image
            unlink(public_path("images/bookimages/").$request->defaultimg);
            
        }else{
            $image_name = $request->defaultimg;
        }
        
        Book::findorfail($id)->update([
            'bookname'=>$request->title,
            'bookdescription'=>$request->description,
            'bookprice'=>$request->price,
            'bookimage'=>$image_name,
            'keysale'=>$keysale,
            'newprice'=>$newprice
        ]);
        return(redirect(route('books.showonebook',$id)));
     }

     public function deleteproduct($id){
        $delteproducts= Book::findorfail($id);
        unlink(public_path("images/bookimages/").$delteproducts->bookimage);
        $delteproducts->categories()->detach();
        $delteproducts->delete();
        return(redirect(route('books.showall')));
     }
}
