<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $visible=['gambar', 'judul', 'creator', 'genre', 'penerbit', 'ttb', 'tbl_buku', 'harga', 'no_edisi', 'sinopsis'];

    protected $fillable=['gambar', 'judul', 'creator', 'genre', 'penerbit', 'ttb', 'tbl_buku', 'harga', 'no_edisi', 'sinopsis'];

    public $timestamps = true;

    public function gambar()
    {
        if ($this->gambar && file_exists(public_path('images/buku/' . $this->gambar))) {
            return asset('images/buku/' . $this->gambar);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteGambar()
    {
        if ($this->gambar && file_exists(public_path('images/buku/' . $this->gambar))) {
            return unlink(public_path('images/buku/' . $this->gambar));
        }

    }
}
