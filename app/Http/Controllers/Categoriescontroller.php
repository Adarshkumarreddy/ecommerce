<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categorie;

class Categoriescontroller extends Controller
{
    public function index()
    {
        $categories=categorie::get();
        $data['categories']=$categories;
        return view('categories',$data);
    }
   public function create()
   {
    return view('addcategories');
   } 
   public function store(Request $request)
   {
      $categories = new categorie();
      $categories->id=$request->id; //$Category->id=$request->id;
      $categories->name=$request->name;
      $categories->slug=$request->slug;
      $categories->status=$request->status;
      $categories->save();
      return redirect()->route('categories');
   }
   public function edit(Request $request, $id)
   {
      $categories = categorie::where('id',"=",$id)->first();
      $data['categories']=$categories;
      return view('edit',$data);
   }
   public function update(Request $request,$id)
   {
     $categories = categorie::where('id',"=",$id)->first();
     $categories->id=$request->id;
     $categories->name=$request->name;
     $categories->slug=$request->slug;
     $categories->status=$request->status;
     $categories->save();
     return redirect()->route('categories');
   } 
   public function delete(Request $request, $id)
   {
      $categories = categorie::where('id',"=",$id)->first();
      $categories->delete();
      return back();
   }
}
