<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $fillable = ['voter_id', 'installment', 'address', 'user_image'];
    use HasFactory;
}
