<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bukutamu extends Model
{
    protected $table = "bukutamu";
    protected $primarykey = "id";
    protected $fillable = [
        'id', 'nama', 'email', 'tanggal', 'komentar'];
}
