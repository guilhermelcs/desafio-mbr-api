<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BrindeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brindes')->insert([
            "email" => "guilherme.evandf@gmail.com",
            "telefone" => "(61)99962-2175",
            "cep" => "71908-540",
            "destinatario" => "Guilherme Lucas II",
            "estado" => "Brasília",
            "bairro" => "Norte (Águas Claras)",
            "logradouro" => "Rua 9",
            "complemento" => "Tooooomaaaaaaa",
            "uf" => "DF"
        ]);
        
        DB::table('brindes')->insert([
            "email" => "douglao@gmail.com",
            "telefone" => "(61)70708-0404",
            "cep" => "71908-540",
            "destinatario" => "Douglao",
            "estado" => "Brasília",
            "bairro" => "Norte (Águas Claras)",
            "logradouro" => "Rua 9",
            "complemento" => "Tame papai",
            "uf" => "DF"
        ]);
        
        DB::table('brindes')->insert([
            "email" => "gleirisdelas@gmail.com",
            "telefone" => "(61)80840-4808",
            "cep" => "71908-540",
            "destinatario" => "Gleidsão",
            "estado" => "Brasília",
            "bairro" => "Norte (Águas Claras)",
            "logradouro" => "Rua 9",
            "complemento" => "Taaaaaaaaaaame papai",
            "uf" => "DF"
        ]);
        
        DB::table('brindes')->insert([
            "email" => "herlinho@gmail.com",
            "telefone" => "(61)87845-4044",
            "cep" => "71908-540",
            "destinatario" => "Herleyson",
            "estado" => "Brasília",
            "bairro" => "Norte (Águas Claras)",
            "logradouro" => "taaaaa",
            "complemento" => "Oook",
            "uf" => "DF"
        ]);
        
        DB::table('brindes')->insert([
            "email" => "melevaprocinema@gmail.com",
            "telefone" => "(88)74075-4787",
            "cep" => "71908-540",
            "destinatario" => "Ramiresão",
            "estado" => "Brasília",
            "bairro" => "Norte (Águas Claras)",
            "logradouro" => "Rua 9",
            "complemento" => "E o cineminha?",
            "uf" => "DF"
        ]);
        
        DB::table('brindes')->insert([
            "email" => "luketão@gmail.com",
            "telefone" => "(61)90840-5040",
            "cep" => "50487-878",
            "destinatario" => "Lukas",
            "estado" => "Brasília",
            "bairro" => "Bairro",
            "logradouro" => "Rua",
            "complemento" => "Toca demais",
            "uf" => "AL"
        ]);
    }
}
