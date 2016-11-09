<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\Company;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::with('company')->get();

        return view('partners.index', compact('partners'));
    }

    public function new()
    {
        $companies = $this->comboCompanies();
        $action = route('partners.create');

        return view('partners.new', compact('action', 'companies'));
    }

    public function edit(Partner $partner)
    {
        $companies = $this->comboCompanies();
        $action = route('partners.update', $partner->id);

        return view('partners.new', compact('action', 'partner', 'companies'));
    }
    
    public function create(Request $request)
    {
        $newPartner = new Partner($this->getParams($request));

        $companyId = $request->input('company');
        $company = Company::find($companyId);
        if(!$company) {
            return redirect()->back()->with([
                'flash-message'=> 'error',
                'message' => 'Empresa Inválida!'
            ]);
        }

        if($company->partners()->save($newPartner)){
            return redirect()->route('partners.index')->with([
                'flash-message'=> 'success',
                'message' => 'Sócio cadastrada com sucesso!'
            ]);
        }
    }

    public function update(Request $request, Partner $partner)
    {
        $partner->fill($this->getParams($request));

        $companyId = $request->input('company');
        $company = Company::find($companyId);
        if(!$company) {
            return redirect()->back()->with([
                'flash-message'=> 'error',
                'message' => 'Empresa Inválida!'
            ]);
        }

        $partner->company()->associate($company);
        if($partner->save()){
            return redirect()->back()->with([
                'flash-message'=> 'success',
                'message' => 'Sócio atualizada com sucesso!'
            ]);
        }
    }

    public function delete(Partner $partner)
    {
        if($partner->delete()) {
            return redirect()->back()->with([
                'flash-message'=> 'success',
                'message' => 'Sócio deletada com sucesso!'
            ]);
        }
    }

    private function getParams(Request $request)
    {
        $onlyParams = [
            'cpf', 'nome', 'email'
        ];
        $params = $request->only($onlyParams);

        return array_filter($params);
    }

    private function comboCompanies()
    {
        return Company::pluck('razao_social', 'id')->all();
    }
}
