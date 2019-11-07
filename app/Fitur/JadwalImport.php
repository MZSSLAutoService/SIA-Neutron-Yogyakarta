<?php

namespace App\Fitur;

use App\Fitur\jadwal;
use Maatwebsite\Excel\Concerns\ToModel;

class JadwalImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new jadwal([
            'id_cbg' => $row[1],
            'kelas' => $row[2],
            'mapel' => $row[3],
            'from' => $row[4],
            'to' => $row[5],
            'ruang' => $row[6],
        ]);
    }
}
