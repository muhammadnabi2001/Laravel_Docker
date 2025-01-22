<?php

namespace App\Http\Controllers;

use App\Models\Catory;
use Illuminate\Http\Request;

class CatoryController extends Controller
{
    public function index()
    {
        $categories=Catory::orderby('id','desc')->paginate(10);
        return view('Category.category',['categories'=>$categories]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
    
        $category = new Catory();
        $category->name = $request->name; 
        $category->save(); 
    
        return redirect()->back()->with('success', 'Category added successfully!');
    }
    public function update(Request $request,Catory $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
    
        $category->name = $request->name;
        $category->save();
    
        return redirect()->back()->with('success', 'Category updated successfully!');
    }
    public function delete(Catory $category)
    {
        // dd(123);
        $category->delete();
        return redirect()->back()->with('success','Category deleted successfully');
    }
}
