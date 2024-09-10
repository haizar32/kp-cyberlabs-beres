<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'booking';

    /**
     * fillable
     *
     * @var array
     */


    protected $fillable = [
        'nama',
        'no_wa',
        'check_in',
        'check_out',
        'kamar_id',
        'user_id',
        'is_finished',

    ];

    



}
