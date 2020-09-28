<?php

namespace App;

use App\Category;
use App\Mail\ReceipeStored;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Receipe extends Model
{
   protected $table = 'receipes';
    //  protected $fillable = [
    //     'name', 'ingredients', 'category'
    // ];

   protected static function boot()
   {
   		parent::boot();

   		static::created(function($receipe){

   		Mail::to('nweni5240@gmail.com')->send(new ReceipeStored($receipe));

        session()->flash("message", 'Receipe has created successfully');
   		
   		});

   }

   protected $guarded = [];

   public function categories()
    {
    	return $this->belongsto(Category::class,'category');
    }


}
