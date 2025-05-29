<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books'; // Указываем правильное имя таблицы
    protected $fillable = ['title','author', 'description', 'price', 'image','user_id']; 
}
