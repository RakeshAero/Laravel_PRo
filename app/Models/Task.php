<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    protected $fillable = ['user_id','name'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
