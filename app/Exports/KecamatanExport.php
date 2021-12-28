<?php

namespace App\Exports;

use App\Models\Kecamatan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KecamatanExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $collection = Kecamatan::select("nama_kecamatan", "nama_camat", "lat", "longi", "luas_wilayah", "jumlah_penduduk")->get();
        return $collection;
    }

    public function headings(): array
    {
        return ["Nama Kecamatan", "Nama Camat", "Latitude", "Longitude", "Luas Wilayah", "Jumlah Penduduk"];
    }
}
