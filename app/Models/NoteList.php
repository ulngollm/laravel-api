<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoteList extends Model
{
    use HasFactory;
    protected $table = 'lists';

    // https://docs.rularavel.com/docs/8.x/eloquent#timestamps
    public $timestamps = false;
}
