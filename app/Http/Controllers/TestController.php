<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{

    public function index(){
        dd('test');

        // Eloquent(エロくアント)
        $values = Test::all();

        $count =Test::count();

        $find = Test::findOrFail(1);

        $where = Test::where('text' , '=', 'aaa')->get();

        dd('test');


        // クエリビルダ
        $queryBuilder = DB::table('tests')->where('text', '=' , 'aaa')->select('id', 'created_at')->get();

        dd($values,$count, $find, $where,$queryBuilder);

        return view('tests.test', compact('values'));
    }
}
