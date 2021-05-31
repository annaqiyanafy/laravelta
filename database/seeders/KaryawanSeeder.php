<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //data faker 
        $faker=Faker::create('id_ID');

        //membuat data dummy sebanyak 10 record
        for($x=1;$x<=10;$x++)
        {
            //insert data dummy dengan faker
            \DB::table('karyawan')->insert([
                'nama'=>$faker->name,
                'tempatlahir'=>$faker->state,
                'tanggallahir'=>$faker->date,
                'jeniskelamin'=>$faker->randomElement($array = array ('P', 'L')) ,
                'alamat'=>$faker->address,
                'nomorhp'=>$faker->randomdigit,
                'agama'=>$faker->randomElement(['Islam', 'Kristen', 'Hindu', 'Buddha']),
                'statusperkawinan'=>$faker->randomElement(['Lajang', 'Kawin', 'Janda', 'Duda']),
            ]);
        }
    }
}
