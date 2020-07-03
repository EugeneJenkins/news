<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function show(){
        return view('index');
    }

    public function news(){
        $news=DB::table('news')
            ->join('authors','news.id_authors','=','authors.id_authors')
            ->join('users','authors.id_users','=','users.id')
            ->get();


        return view('posts.news',[
            'news'=>$news
        ]);
    }

    public function article(){
        $article=DB::table('article')
            ->join('authors','article.id_authors','=','authors.id_authors')
            ->join('users','authors.id_users','=','users.id')
            ->get();


        return view('posts.articles',[
            'article'=>$article
        ]);
    }

    public function mainPost($table,$id){

        if($table=="news"){
            $info=DB::table('news')
                ->join('authors','news.id_authors','=','authors.id_authors')
                ->join('users','authors.id_users','=','users.id')
                ->where([
                    'id_news'=>$id
                ])
                ->get();
        }
        else if ($table=="article"){
            $info=DB::table('article')
                ->join('authors','article.id_authors','=','authors.id_authors')
                ->join('users','authors.id_users','=','users.id')
                ->where([
                    'id_article'=>$id
                ])
                ->get();
        }


        $title=$info[0]->title;
        return view('posts.mainpost',[
            'info'=>$info,
            'title'=>$title
        ]);
    }
}
