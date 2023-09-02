<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class XemPhim extends Model
{
    use HasFactory;

    protected $table = "xem_phims";

    protected $fillable = [
        'id_phim',
        'link_phim',
    ];
}
