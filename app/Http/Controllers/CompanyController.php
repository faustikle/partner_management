<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{

    public function index()
    {
        $companies = Company::with('partners')->get();

        return view('companies.index', compact('companies'));
    }

    public function new()
    {
        $action = route('companies.create');

        return view('companies.new', compact('action'));
    }

    public function edit(Company $company)
    {
        $action = route('companies.update', $company->id);

        return view('companies.new', compact('action','company'));
    }
    
    public function create(Request $request)
    {
        $newCompany = new Company($this->getParams($request));

        if($newCompany->save()){
            return redirect()->route('companies.index')->with([
                'flash-message'=> 'success',
                'message' => 'Empresa cadastrada com sucesso!'
            ]);
        }
    }

    public function update(Request $request, Company $company)
    {
        $company->fill($this->getParams($request));

        if($company->save()){
            return redirect()->back()->with([
                'flash-message'=> 'success',
                'message' => 'Empresa atualizada com sucesso!'
            ]);
        }
    }

    public function delete(Company $company)
    {
        if($company->delete()) {
            return redirect()->back()->with([
                'flash-message'=> 'success',
                'message' => 'Empresa deletada com sucesso!'
            ]);
        }
    }

    private function getParams(Request $request)
    {
        $onlyParams = [
            'cnpj', 'razao_social', 'telefone', 'endereco'
        ];
        $params = $request->only($onlyParams);

        return array_filter($params);
    }
}
