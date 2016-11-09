<?php

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'cnpj' => '17064280000102',
            'razao_social' => 'A PANTERA CONSTRUCAO E ACABAMENTO LTDA',
            'telefone' => '96502478',
            'endereco' => 'Rua Wilberto, 211'
        ]);

        Company::create([
            'cnpj' => '2824088000353',
            'razao_social' => 'A. T. FRANCIOSI & CIA LTDA',
            'telefone' => '85444551',
            'endereco' => 'Rua Toledo, 21'
        ]);

        Company::create([
            'cnpj' => '5952088000165',
            'razao_social' => 'ADL COM IMP, EXP E AGROPECUARIA LTDA',
            'telefone' => '65326598',
            'endereco' => 'Rua Epitacio, 211'
        ]);

        Company::create([
            'cnpj' => '3989217001640',
            'razao_social' => 'ACOFER INDUSTRIA E COMERCIO LTDA',
            'telefone' => '875432536',
            'endereco' => 'Rua Graciliano, 222'
        ]);

        Company::create([
            'cnpj' => '2003402002038',
            'razao_social' => 'ADM DO BRASIL LTDA',
            'telefone' => '56326598',
            'endereco' => 'Rua Luiz Junqueira, 23'
        ]);
    }
}
