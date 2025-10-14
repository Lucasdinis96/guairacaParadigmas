<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Services\CompanyService;
use App\Http\Requests\CreateCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Http\Resources\CompanyResource;
use Illuminate\Http\Request;

class CompanyController extends Controller {

    private CompanyService $companyService;

    public function __construct(CompanyService $companyService){
        $this->companyService = $companyService;
    }
 
    public function index(Request $request) {
        return CompanyResource::collection($this->companyService->index($request->all()));
    }

    public function store(CreateCompanyRequest $request) {
        return new CompanyResource($this->companyService->store($request->validated()));
    }

    public function show(string $id) {
        return new CompanyResource($this->companyService->show($id));
    }

    public function update(UpdateCompanyRequest $request, string $id) {
        return new CompanyResource($this->companyService->update($request->validated(),$id));
    }

    public function destroy(string $id) {
        return response()->noContent();
    }
}
