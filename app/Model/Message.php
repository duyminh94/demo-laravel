<?php

namespace App\Model;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messagers';

    protected $fillable = [
        'name',
        'description',
        'content',
        'user_id'
    ];
    public $timestamps = false;

    /* CRUD  */

    public function user() {
        return $this-> belongsTo(User::class, 'user_id', 'id');
    }
    
}
