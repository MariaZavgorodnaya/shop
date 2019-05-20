<?php
/**
 * Created by PhpStorm.
 * User: MashaZ
 * Date: 31.03.2019
 * Time: 14:27
 */

namespace NtSchool\Model;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
public function categories(){//тут же формируется поле с именем категориес мы создает связь м-м
    return $this->belongsToMany(Category::class);
}
}