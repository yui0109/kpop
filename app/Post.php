<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    public function getByLimit(int $limit_count = 10) //データ取得件数制限
{
    return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
}

    public function getPaginateByLimit(int $limit_count = 10) //ページネーション
{
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
protected $fillable = [
    'title',
    'body',
    'idol_id',
    ];
    
    
public function idol()
{
    return $this->belongsTo('App\Idol');
}
public function users()
{
    return $this->belongsToMany('App\User');
}

public function revisions(){
    return $this->belongsTo('App\Revision');
}
}
