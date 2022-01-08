<?php

namespace App\Http\Controllers;

use App\Idol;
use Illuminate\Http\Request;

class IdolController extends Controller
{
   
    public function search(Request $request) {
      $keyword_name = $request->name;
      dd($keyword_name);
      
      if(!empty($keyword_name)){
        $query = Idol::query();
        $idols = $query->where('name','like','%'.$keyword_name.'%')->get();
        $message = "「".$keyword_name."」を含む名前の検索が完了しました。";
        return view('idols/index')->with([
          'idols' => $idols,
          'massages' => $message,
          ]);
      }
      else{
        $message = "検索結果はありません。";
        return view('idols/index')->with('message',$message);
      }
      }
    
}

