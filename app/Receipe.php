<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Receipe extends Model
{
   protected $table = 'receipes';
    //  protected $fillable = [
    //     'name', 'ingredients', 'category'
    // ];

   protected $guarded = [];

   public function categories()
    {
    	return $this->belongsto(Category::class,'category');
    }


}
