<?php

namespace App\Models;

use App\MessageStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'name',
        'email',
        'messages',
    ];

    protected function casts()
    {
        return [
            'status'   => MessageStatus::class,
        ];
    }
    public function setNameAttribute($value){
        return $this->attributes['name'] = ucwords($value);
    }
}
