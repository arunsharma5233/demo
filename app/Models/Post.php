<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Label;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];
  //  protected $fillable= ['tittle','excerpt','body','slug','category_id'];


    //public function getRouteKeyName(){
   //  return 'slug';
   //p }


public function category(){
return $this->belongsTo(Category::class);
}

}

