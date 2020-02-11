<?php

use Illuminate\Database\Seeder;
use App\Dosen;
use App\Hobi;
use App\Mahasiswa;
use App\Wali;
class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('dosens')->delete();
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();


        // membuat data dosen
        $dosen = Dosen::create(array(
        'nipd'=>'331234432',
        'nama'=>'Mick Jager'));

        $this->command->info('Data Dosen Telah Di Isi');

        // membuat data mahasiswa
        $fauzan = Mahasiswa::create(
            array(
                'nama'=>'Ojan',
                'nim'=>'020202',
                'id_dosen'=> $dosen->id
            ));
        $Naul = Mahasiswa::create(
            array(
                'nama'=>'Bang Nau',
                'nim'=>'030303',
                'id_dosen'=> $dosen->id
            ));
        $Ikoy = Mahasiswa::create(
            array(
                'nama'=>'Ikoy Herdiansyah',
                'nim'=>'040404',
                'id_dosen'=> $dosen->id
            ));
            $this->command->info('Data Mahasiswa Berhasil Di Isi');

        // Membuat Data Wali
        $dadang = Wali::create(array(
            'nama' => 'Dadang Pelo',
            'id_mahasiswa' => $fauzan->id
        ));
        $sugandi = Wali::create(array(
            'nama' => 'Sugandi Sroto',
            'id_mahasiswa' => $Naul->id
        ));
        $sutarya = Wali::create(array(
            'nama' => 'Sutarya Sanusi',
            'id_mahasiswa' => $Ikoy->id
        ));
        $this->command->info('Data Wali Berhasil Di Isi');

        // Membuat Data Hobi

        $melukis_langit = Hobi::create(array( 'hobi' => 'Melukis Langit'));
        $mandi_sore = Hobi::create(array( 'hobi' => 'Mandi Sore'));
        $memandi_hujan = Hobi::create(array( 'hobi' => 'Memandi Hujan'));

        $fauzan->hobi()->attach($melukis_langit->id);
        $fauzan->hobi()->attach($mandi_sore->id);
        $Naul->hobi()->attach($mandi_sore->id);
        $Ikoy->hobi()->attach($memandi_hujan->id);

        $this->command->info('Mahasiswa Beserta Hobi Telah Diisi');
    }
}
