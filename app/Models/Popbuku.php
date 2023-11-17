<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Popbuku extends Model
{
    use HasFactory;

    protected $visible=['buku_id'];

    protected $fillable=['buku_id'];

    public $timestamps = true;

    public function Buku()
    {
        return $this->belongsTo('App\Models\Buku', 'buku_id');
    }
}
