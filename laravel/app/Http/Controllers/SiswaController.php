<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        //mengambil yang nilai 'jk' == 'L'
        $siswa_laki = Siswa::where('jk', 'L')
            ->orderBy('nama')
            ->get();


        // mengambil model degan nilai primary key
        $siswa = Siswa::find('2021010001');

        // Ambil model pertama yang cocok denagn batasan query
        $siswa = Siswa::where('nis', '2021010001')->first();

        // mengambil model degan nilai primary key
        $siswa = Siswa::firstWhere('nis', '2021010001');

        foreach (Siswa::all() as $siswa) {
            echo $siswa->nama . "<br>";
        }

        // mengambil semua siswa dengan query builder
        $siswa_all = DB::table('siswa')->get();

        foreach ($siswa_all as $siswa) {
            echo $siswa->nis . " - " . $siswa->nama . "<br>";
        }

        // Mengambil 1 row data yang memiliki nama 'Sugeng'
        $siswa_single = DB::table('siswa')
            ->where('nama', 'Sugeng')
            ->first();

        // Mengambil nilai dari kolom nis yang memiliki nama 'sugeng'
        $siswa_nis = DB::table('siswa')
            ->where('nama', 'Sugeng')
            ->value('nis');
    }

    //model insert

    public function store(Request $request)
    {
        $siswa = new Siswa;

        $siswa->nama = $request->nama;
        $siswa->save();
    }

    //model update

    public function update(Request $request, $id)
    {
        $siswa = Siswa::find($id);

        $siswa->nama = 'Jong Koding Berubah';

        $siswa->save();

        // mengubah data siswa menggunakan method update
        $siswa = Siswa::where('nis', $id)
            ->update([
                'nama' => 'Jong Koding Berubah',
                'jk' => 'L',
            ]);

        //mengubah data dengan method update or create
        $siswa = Siswa::updateOrCreate(
            ['nis' => $id, 'nama' => 'Jong Koding Berubah'],
            [
                'jk' => 'L',
                'tmp_lahir' => 'Jakarta'

            ]
        );
    }

    // Model Delete
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
    }
}
