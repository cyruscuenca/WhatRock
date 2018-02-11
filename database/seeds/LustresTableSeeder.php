<?php

use Illuminate\Database\Seeder;

use App\Lustre;

class LustresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lustre_dull = new Lustre();
        $lustre_dull->slug = 'dull';
        $lustre_dull->name = 'Dull';
        $lustre_dull->save();

        $lustre_greasy = new Lustre();
        $lustre_greasy->slug = 'greasy';
        $lustre_greasy->name = 'Greasy';
        $lustre_greasy->save();

        $lustre_metallic  = new Lustre();
        $lustre_metallic->slug = 'metallic ';
        $lustre_metallic->name = 'Metallic ';
        $lustre_metallic->save();

        $lustre_pearly  = new Lustre();
        $lustre_pearly->slug = 'pearly';
        $lustre_pearly->name = 'Pearly ';
        $lustre_pearly->save();

        $lustre_vitreous = new Lustre();
        $lustre_vitreous->slug = 'vitreous';
        $lustre_vitreous->name = 'Vitreous ';
        $lustre_vitreous->save();

        $lustre_waxy = new Lustre();
        $lustre_waxy->slug = 'waxy';
        $lustre_waxy->name = 'Waxy ';
        $lustre_waxy->save();

        $lustre_adamantine  = new Lustre();
        $lustre_adamantine->slug = 'adamantine';
        $lustre_adamantine->name = 'Adamantine ';
        $lustre_adamantine->save();
    }
}
