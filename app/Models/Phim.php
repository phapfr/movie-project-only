<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phim extends Model
{
    use HasFactory;

    protected $table = "phims";

    protected $fillable = [
        'ten_phim',
        'slug_ten_phim',
        'dao_dien',
        'dien_vien',
        'the_loai',
        'quoc_gia',
        'trailer',
        'hinh_anh',
        'mo_ta',
        'thoi_luong',
        'trang_thai',
        'link_phim'
    ];
}
