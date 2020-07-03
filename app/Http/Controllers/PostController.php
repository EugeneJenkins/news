<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('author');
    }

    public function postAdd(Request $request){
        $post= $request->input('post');
        $id_user=Auth::user()->id;

        $id=DB::table('authors')->where([
            'id_users'=>$id_user
        ])->get('id_authors');
        $id=$id[0]->id_authors;

      if ($request->input('title')!==null
          & $request->input('category')!==null
          &$request->input('text')!==null
          &$request->input('preview')!==null)
      {
          $title=$request->input('title');
          $category=$request->input('category');
          $text=$request->input('text');
          $preview=$request->input('preview');

          DB::table($post)->insert([
              'id_categories'=>1,
              'id_authors'=>$id,
              'title'=>$title,
              'category'=>$category,
              'text'=>$text,
              'preview'=>$preview,
              'date'=>date('Y-m-d H:i:s')
          ]);
      }


      return view('sandbox');
  }



}
