<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SettingsController extends Controller
{
    private $month=["Январь","Февраль","Март","Апрель","Май","Июнь",
        "Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"];


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function account(){
        return view('settings.account');
    }


    public function profile(Request $request){
        date_default_timezone_set('Europe/Moscow');

        $id = Auth::user()->id; #Получение id Пользователя
        $time=date('Y-m-d H:i:s');
        echo $time;


        if ($request->input('name')!==null){

            $name= $request->input('name');
//            echo $id;
//            var_dump($name);
            DB::table('users')->where('id',$id)->update([
                'name'=>$name,
                'updated_at'=>$time
                ]);
        }
        if ($request->input('day')!="None"){
            $day= $request->input('day');
            DB::table('users')->where('id',$id)->update([
                'day'=>$day,
                'updated_at'=>$time
            ]);
        }
        if ($request->input('month')!="None"){
            $month= $request->input('month');
            DB::table('users')->where('id',$id)->update([
                'month'=>$month,
                'updated_at'=>$time
            ]);
        }
        if ($request->input('year')!="None"){
            $year= $request->input('year');
            DB::table('users')->where('id',$id)->update([
                'year'=>$year,
                'updated_at'=>$time
            ]);
        }
        if ($request->input('gender')!="None"){
            $gender= $request->input('gender');
            DB::table('users')->where('id',$id)->update([
                'gender'=>$gender,
                'updated_at'=>$time
            ]);
        }

        return view('settings.profile',[
            'month'=>$this->month
        ]);
    }
}
