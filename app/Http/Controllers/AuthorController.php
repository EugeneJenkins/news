<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class AuthorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function form(Request $request){

        if ($request->has('text')) {
            return view('author',[
                'text'=>$request->input('text')
            ]);
        }

       return view('author');
    }

    #Добавление пользователя в базу данных как автор
    public function addAuthor(Request $request){
        $id = Auth::user()->id; #Получение id Пользователя
        $users=DB::table('authors')->get();

        $user = DB::table('authors')->where('id_users', $id)->first();

//        если такого пользователя нет, добавляем
        if ($user==null){
            DB::table('authors')->insert(
            ['id_users'=>$id]);
            redirect('/post/add');
        }
//      если есть - ошибка
        else echo 'Вы уже как автор';

    }
}
