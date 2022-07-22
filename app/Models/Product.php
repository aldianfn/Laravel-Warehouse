<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'code',
    //     'name',
    //     'stock',
    //     'price'
    // ];

    protected $guarded = [
        'id'
    ];

    // public function pagination()
    // {
    //     return DB::table('product')->paginate(2);
    // }
}
