<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class satuan extends Model
{
    public function addData($data)
    {
        DB::table('satuans')->insert($data);
    }
    use HasFactory;
}
