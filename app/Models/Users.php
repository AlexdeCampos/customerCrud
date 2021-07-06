<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'birth',
        'gender',
        'postcode',
        'address',
        'address_number',
        'complement',
        'district',
        'state',
        'city',
        'created_at'
    ];
}
