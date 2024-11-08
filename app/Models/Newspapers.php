<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newspapers extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    public $timestamps = false; // Menonaktifkan timestamps

    protected $fillable = [
        'Judul Buku',
        'Author',
        'Tahun Terbit',

    ];
}
