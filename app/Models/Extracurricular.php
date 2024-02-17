<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extracurricular
{
    private static $extracurricular = [
        [
            'id' => 1,
            'nama' => 'Fardan Athilla Haidar',
            'pembina' => 'Bu Rieke',
            'deskripsi' => 'Study Club Bahasa Jepang',
        ],
        [
            'id' => 2,
            'nama' => 'Roja Ridho Robbihi',
            'pembina' => 'Bu Thania',
            'deskripsi' => 'Study Club Bahasa Inggris',
        ],
        [
            'id' => 3,
            'nama' => 'Yakaria Yahya',
            'pembina' => 'Pak Imam',
            'deskripsi' => 'Olahraga Badminton',
        ],
        [
            'id' => 4,
            'nama' => 'Aaron Ikhwan Saputra',
            'pembina' => 'Pak Farid',
            'deskripsi' => 'Kelas Seni',
        ],
        [
            'id' => 5,
            'nama' => 'Eureka Ahadyan Ilhamy',
            'pembina' => 'Pak Aji',
            'deskripsi' => 'Seminar Android Development',
        ],
    ];

    public static function all()
    {
        return self::$extracurricular;
    }
}
