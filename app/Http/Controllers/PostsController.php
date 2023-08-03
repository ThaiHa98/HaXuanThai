<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostsController extends Controller
{
    public function index(){
    //    $posts = DB::select("select * from posts");
       $posts = db::table("posts")
//                        -> where('id',1)
                        ->delete(1);
//                        -> update([
//                            'name'=>'thaitu1',
////
//                        ]);
//                        -> insert([
//                            'name'=>'thaitu',
//                            'phone'=>'012345',
//                            'price'=>'400',
//                            'timeline'=>'2023-07-16 22:22:59'
//                        ]);
//                        ->whereNotNull("name")
//           ->oldest()
//           ->first();
//                    -> where("created_at",">",now()-> subDay() )
//                    ->get();
                    // ->select('name');
       dd($posts);


    }
}
