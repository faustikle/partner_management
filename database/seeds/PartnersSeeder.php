<?php

use Illuminate\Database\Seeder;
use App\Models\Partner;
use App\Models\Company;

class PartnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $partner1 = new Partner([
            'cpf' => mt_rand(11111111111,99999999999),
            'nome' => 'Kleber Faustino',
            'email' => 'faustikle@gmail.com'
        ]);
        $partner1->company()->associate(Company::all()->random());

        $partner2 = new Partner([
            'cpf' => mt_rand(11111111111,99999999999),
            'nome' => 'João Paulo',
            'email' => 'joao@gmail.com'
        ]);
        $partner2->company()->associate(Company::all()->random());

        $partner3 = new Partner([
            'cpf' => mt_rand(11111111111,99999999999),
            'nome' => 'Gustavo Lima',
            'email' => 'gustavo@gmail.com'
        ]);
        $partner3->company()->associate(Company::all()->random());

        $partner4 = new Partner([
            'cpf' => mt_rand(11111111111,99999999999),
            'nome' => 'Patricia de Sá',
            'email' => 'patricia@gmail.com'
        ]);
        $partner4->company()->associate(Company::all()->random());

        $partner5 = new Partner([
            'cpf' => mt_rand(11111111111,99999999999),
            'nome' => 'Lucas Ferreira',
            'email' => 'lucas@gmail.com'
        ]);
        $partner5->company()->associate(Company::all()->random());

        $partner1->save();
        $partner2->save();
        $partner3->save();
        $partner4->save();
        $partner5->save();
    }
}
