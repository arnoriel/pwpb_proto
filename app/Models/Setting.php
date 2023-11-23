<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $visible=['aplikasi', 'gambar', 'info', 'bio'];

    protected $fillable=['aplikasi', 'gambar', 'info', 'bio'];

    public $timestamps = true;

    public function gambar()
    {
        if ($this->gambar && file_exists(public_path('images/aset/' . $this->gambar))) {
            return asset('images/aset/' . $this->gambar);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteGambar()
    {
        if ($this->gambar && file_exists(public_path('images/aset/' . $this->gambar))) {
            return unlink(public_path('images/aset/' . $this->gambar));
        }

    }
}
