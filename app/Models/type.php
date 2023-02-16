<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    use HasFactory;
    public $table="types";
    protected $fillable=[
        "name",
        "id"
    ];
    protected $hidden=[
        "created_at",
        "updated_at"
    ];

}