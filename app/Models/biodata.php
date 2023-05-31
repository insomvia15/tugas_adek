<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class biodata extends Model
{
    private static $biodata = [
        'name' => 'Atta Gantari',
        'nim' => '21103041043',
        'address' => "JL.Abimanyu Kalisegoro Gunungpati",
        'hobby' => [
            [
                'name' => 'Travelling',
                'url' => 'https://assets.ayobandung.com/crop/0x0:0x0/750x500/webp/photo/2022/11/23/3024561916.jpeg'
            ],
            [
                'name' => 'Menonton Film',
                'url' =>  'https://imgx.sonora.id/crop/0x0:0x0/360x240/photo/2020/03/17/2482430006.jpg'
            ],
            [
                'name' => 'Olahraga',
                'url' => 'https://s1.bukalapak.com/bukalapak-kontenz-production/content_attachments/28121/original/olahraga_pagi_main_foto.jpg'
            ]
        ]
    ];

    public static function getBiodata()
    {
        return self::$biodata;
    }
}
