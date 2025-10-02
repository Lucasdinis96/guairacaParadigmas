<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Services\CompanyService;
use App\Http\Requests\CreateCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Http\Services\BaseService;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller {

    private BaseService $service;

    public function __construct(BaseService $service){
        $this->service = New BaseService(new Company);
    }
 
    // public function index(Request $request) {
    //     return response()->json(['data' => $this->companyService->index($request->all())]);
    // }

    public function store(CreateCompanyRequest $request) {
        return response()->json(['data'=>$this->service->store($request->validate())]);
    }

    public function show(string $id) {
        return response() -> json(['data' => $this->service->show($id)]);
    }

    public function update(UpdateCompanyRequest $request, string $id) {
        return response()->json(['data' => $this->service->update($request->validate(),$id)]);
    }

    public function destroy(string $id) {
        return response()->noContent();
        //$this->companyService->destroy($id);
    }
}
