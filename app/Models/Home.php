<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Home
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'nama' => 'ILHAM DWI ARIFIN',
                'nim' => '2310651102',
                'alamat' => 'Planet Bondowoso'
            ],
        ];
    }

    public static function find($id)
    {
        $home = Arr::first(static::all(), fn($home) => $home['id'] == $id);

        if (!$home) {
            abort(404);
        }

        return $home;
    }
}