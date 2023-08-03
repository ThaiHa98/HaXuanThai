<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use parallel\Events\Input;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = \DB::table('categories')->get();

    return view('Categories.index', [
        'categories' =>$categories,
    ]);
    }
    public  function create(){
        return view('Categories.create');
    }
    public function store(Request $request){
        $categories = new Categories();
        $categories -> name = $request->input('name');
        $categories -> description = $request ->input('description');
        $categories->save();
        return redirect('/categories');
    }
    public function edit($id){
        $categories = categories::Find($id);
        return view('Categories.edit' ,[
            'categories' =>$categories,
        ]);
    }
    public function update(Request $request, $id){
        $categories = Categories::where('id',$id)
            ->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
    ]);
        return redirect('/categories');
    }
    public function destroy($id)
    {
        $categories = categories::Find($id);
        $categories -> delete();
        return redirect('/categories');
    }

}

