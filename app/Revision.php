<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Revision extends Model
{
  public function revision()
  {
      $revisions = DB::table($this->table)->get();
      
      return $revisions;
  }
}
