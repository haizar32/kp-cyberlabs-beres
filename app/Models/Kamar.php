<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;
    protected $table = 'kamar';

    /**
     * fillable
     *
     * @var array
     */


    protected $fillable = [
        'nama_ruangan',
        'status_ketersediaan',
        'kategori'

    ];
}
