<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Services\CompanyService;
use App\Http\Requests\CreateCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function __construct(private CompanyService $companyService){}
 
    public function index(Request $request) {
        return response()->json(['data' => $this->companyService->index($request->all())]);
    }

    public function store(CreateCompanyRequest $request) {
        return response()->json(['data'=>$this->companyService->store($request->validate())]);
    }

    public function show(string $id) {
        return response() -> json(['data' => $this->companyService->show($id)]);
    }

    public function update(UpdateCompanyRequest $request, string $id) {
        return response()->json(['data' => $this->companyService->update($request->validate(),$id)]);
    }

    public function destroy(string $id) {
        $this->companyService->destroy($id);
    }
}
