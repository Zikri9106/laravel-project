<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['kelas'];

    public function kelas()
    {
        return $this-> belongsTo(Kelas::class);
    }
}
