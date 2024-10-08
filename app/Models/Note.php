<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model {
    use HasFactory;

    protected $fillable = ['title', 'description'];

    protected $table = "Note";

    const created_at = 'created_at'; 
    const updated_at = 'updated_at';
}