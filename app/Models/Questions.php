<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;
    protected $fillable = ['uuid','question','ans_1','ans_2','ans_3','ans_4','correct_answer','slug'];
}
