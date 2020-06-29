@extends('layouts.setmain')
@section('main')
        <div class="info__profile">
                <form method="post" action="{{ route('profile') }}">
                    @csrf
                <input type="text" name="name" placeholder="">
                <select name="gender" id="">
                    <option value="None">Другой</option>
                    <option value="man">Мужчина</option>
                    <option value="woman">Женщина</option>
                </select>
                <select name="day">
                    <option value="None">None</option>
                    @for($i=1;$i<=31;$i++)
                    <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
                <select name="month">
                    <option value="None">None</option>
                    @foreach($month as $month)
                    <option value="{{$month}}">{{$month}}</option>
                    @endforeach
                </select>
                <select name="year">
                    <option value="None">None</option>
                    @for($i=date('Y');$i>=1950;$i--)
                    <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
                <button type="submit" >Submit</button>
            </form>
        </div>
    </div>
@endsection
