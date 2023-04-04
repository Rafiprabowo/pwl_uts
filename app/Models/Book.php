<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Book extends Model
{
    use HasFactory;

    protected $table = 'buku';
    public $timestamps = false;
    protected $primarykey = 'id';

    protected $fillable = [
        'kode_buku',
        'judul',
        'pengarang',
        'jenis_buku',
        'harga',
        'qty'
    ];
}
