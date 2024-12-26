<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Writeup extends Model
{
    protected $table = 'writeups';

    protected $fillable = ['user_id','title','posts','category'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
