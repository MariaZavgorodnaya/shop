<?php
/**
 * Created by PhpStorm.
 * User: MashaZ
 * Date: 09.04.2019
 * Time: 14:24
 */

namespace NtSchool\Model;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  public function posts(){
      return $this->belongsToMany(Post::class);
  }
}