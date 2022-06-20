<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
   use HasFactory;

   protected $table = 'projects';
   public $timestamps = false;


   public function user()
   {
      return $this->belongsTo('App\Models\User');
   }

   public function getData()
   {
      return 'Number: ' . $this->id . '\nTitle: ' . $this->project_title;
   }

   // protected static function boot()
   //  {
   //      parent::boot();

   //      // 保存時user_idをログインユーザーに設定
   //      self::saving(function($stock) {
   //          $stock->user_id = \Auth::id();
   //      });
   //  }
}
