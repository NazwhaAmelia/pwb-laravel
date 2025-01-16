<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class percobaan extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'email', 'pesan'];

    
}