<?php
namespace App\Http\Services;

use App\Http\Repositories\CompanyRepository;

class CompanyService {

    public function __construct(private CompanyRepository $companyRepository) {}

    public function index(array $data) {
        return $this->companyRepository->index($data);
    }

    public function store(array $data) {
        return $this->companyRepository->store($data);
    }

    public function show (string $id){
        return $this->companyRepository->show($id);
    }

    public function update (array $data, string $id){
        return $this->companyRepository->update($data, $id);
    }

    public function destroy (string $id){
        $this->companyRepository->destroy($id);
    }
}