<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $table = 'agenda';

    protected $fillable = [
        'date',
        'nama_kegiatan',
        'lokasi',
    ];
}
