<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;
use App\Models\foods;

class FoodsController extends Controller
{
    public function index()
    {
        $foods = DB::table("foods")->get();
        return view('foods.index', [
            'foods' => $foods,
        ]);
    }

    public function create()
    {
      return view('foods.create');
    }


    public function store(Request $request)
    {

        $food = new foods();
            $food ->name = $request->input('name');
            $food ->description = $request->input('description');
            $food ->status = $request->input('status');
            $food ->price = $request->input('price');
            $food ->category_id = $request->input('category_id');
        $food->save();
        return redirect('/foods');
    }

    public function show($id)
    {
        // Hiển thị thông tin chi tiết một món ăn
    }

    public function edit($id)
    {
        $food = foods::Find($id);

        return view('foods.edit')->with('foods', $food );
    }

    public function update(Request $request, $id)
    {
        $food = foods::where('id',$id)
                ->update([
                    'name' =>$request->input('name'),
                    'price'=>$request->input('price'),
                    'description' => $request->input('description'),
                    'status' => $request->input('status'),
                ]);
        return redirect('/foods');
    }

    public function destroy($id)
    {
        $food = foods::Find($id);
        $food -> delete();
        return redirect('/foods');
    }
}
