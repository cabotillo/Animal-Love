<?php

use Illuminate\Database\Seeder;

class datos_provincias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //datos provincia

        DB::table('provincias')->insert([

            ['idProvincia'=> 'ES-C', 'Provincia'=> 'A Coruña'],           
            ['idProvincia'=> 'ES-VI', 'Provincia'=> 'Álava'],
            ['idProvincia'=> 'ES-AB', 'Provincia'=> 'Albacete'],
            ['idProvincia'=> 'ES-A', 'Provincia'=> 'Alicante'],
            ['idProvincia'=> 'ES-AL', 'Provincia'=> 'Almería'],
            ['idProvincia'=> 'ES-O', 'Provincia'=> 'Asturias'],
            ['idProvincia'=> 'ES-AV', 'Provincia'=> 'Ávila'],
            ['idProvincia'=> 'ES-BA', 'Provincia'=> 'Badajoz'],
            ['idProvincia'=> 'ES-PM', 'Provincia'=> 'Islas Baleares'],
            ['idProvincia'=> 'ES-B', 'Provincia'=> 'Barcelona'],
            ['idProvincia'=> 'ES-BI', 'Provincia'=> 'País Vasco'],
            ['idProvincia'=> 'ES-BU', 'Provincia'=> 'Burgos'],
            ['idProvincia'=> 'ES-CC', 'Provincia'=> 'Cáceres'],
            ['idProvincia'=> 'ES-CA', 'Provincia'=> 'Cádiz'],
            ['idProvincia'=> 'ES-S', 'Provincia'=> 'Cantabria'],
            ['idProvincia'=> 'ES-CS', 'Provincia'=> 'Castelló'],
            ['idProvincia'=> 'ES-CR', 'Provincia'=> 'Ciudad Real'],
            ['idProvincia'=> 'ES-CO', 'Provincia'=> 'Córdoba'],
            ['idProvincia'=> 'ES-CU', 'Provincia'=> 'Cuenca'],
            ['idProvincia'=> 'ES-SS', 'Provincia'=> 'Gipuzkoa'],
            ['idProvincia'=> 'ES-GI', 'Provincia'=> 'Gerona'],
            ['idProvincia'=> 'ES-GR', 'Provincia'=> 'Granada'],
            ['idProvincia'=> 'ES-GU', 'Provincia'=> 'Guadalajara'],
            ['idProvincia'=> 'ES-H', 'Provincia'=> 'Huelva'],
            ['idProvincia'=> 'ES-HU', 'Provincia'=> 'Huesca'],
            ['idProvincia'=> 'ES-J', 'Provincia'=> 'Jaén'],
            ['idProvincia'=> 'ES-LO', 'Provincia'=> 'La Rioja'],
            ['idProvincia'=> 'ES-GC', 'Provincia'=> 'Las Palmas'],
            ['idProvincia'=> 'ES-LE', 'Provincia'=> 'León'],
            ['idProvincia'=> 'ES-L', 'Provincia'=> 'Lérida'],
            ['idProvincia'=> 'ES-LU', 'Provincia'=> 'Lugo'],
            ['idProvincia'=> 'ES-M', 'Provincia'=> 'Madrid'],
            ['idProvincia'=> 'ES-MA', 'Provincia'=> 'Málaga'],
            ['idProvincia'=> 'ES-MU', 'Provincia'=> 'Murcia'],
            ['idProvincia'=> 'ES-NA', 'Provincia'=> 'Navarra'],
            ['idProvincia'=> 'ES-OR', 'Provincia'=> 'Ourense'],
            ['idProvincia'=> 'ES-P', 'Provincia'=> 'Palencia'],
            ['idProvincia'=> 'ES-PO', 'Provincia'=> 'Ponatevedra'],
            ['idProvincia'=> 'ES-SA', 'Provincia'=> 'Salamanca'],
            ['idProvincia'=> 'ES-TF', 'Provincia'=> 'Santa Cruz de Tenerife'],
            ['idProvincia'=> 'ES-SG', 'Provincia'=> 'Segovia'],
            ['idProvincia'=> 'ES-SE', 'Provincia'=> 'Sevilla'],
            ['idProvincia'=> 'ES-SO', 'Provincia'=> 'Soria'],
            ['idProvincia'=> 'ES-T', 'Provincia'=> 'Tarragona'],
            ['idProvincia'=> 'ES-TE', 'Provincia'=> 'Teruel'],
            ['idProvincia'=> 'ES-TO', 'Provincia'=> 'Toledo'],
            ['idProvincia'=> 'ES-V', 'Provincia'=> 'Valencia'],
            ['idProvincia'=> 'ES-VA', 'Provincia'=> 'Valladolid'],
            ['idProvincia'=> 'ES-ZA', 'Provincia'=> 'Zamora'],
            ['idProvincia'=> 'ES-Z', 'Provincia'=> 'Zaragoza'],
            ['idProvincia'=> 'ES-CE', 'Provincia'=> 'Ceuta'],
            ['idProvincia'=> 'ES-ML', 'Provincia'=> 'Melilla']

            ]);
    }
}
