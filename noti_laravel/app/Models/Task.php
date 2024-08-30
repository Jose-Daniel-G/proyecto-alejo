<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['title','description'];
    protected $guarded = ['id','created_at','updated_at'];
        // Relación con el modelo Message
        // public function message()
        // {
        //     return $this->hasOne(Message::class, 'task_id', 'id');
        // }
}
