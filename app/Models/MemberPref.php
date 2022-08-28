<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberPref extends Model
{
    use HasFactory;

    protected $fillable = [
        'member_id',
        'pref_id',
        'count',
    ];

}
