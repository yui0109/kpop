<?php

namespace App\Http\Controllers;

use App\Idol;
use App\Http\Requests\IdolRequest;
use Illuminate\Http\Request;


class IdolController extends Controller
{
    
    public function search(IdolRequest $request) {
      $keyword = $request->keyword;
     
      if(!empty($keyword)){
        $query = Idol::query();
        $idols = $query->where('name','like','%'.$keyword.'%')->get();
        $message = "「".$keyword."」を含む名前の検索が完了しました。";
        return view('idols/index')->with([
          'idols' => $idols,
          'message' => $message,
          ]);
      }
      else{
        $message = "検索結果はありません。";
        return view('idols/index')->with('message',$message);
      }
      }
      
    public function test(){
        return view('idols/test');
    }
    public function result(Request $request)
    {
        $idols = Idol::where('group_type',$request->group_type)
               ->orWhere('music_type',$request->music_type)
               ->get();
        return view('idols/result')->with([
          'idols' => $idols,
          ]);
    }  
}

