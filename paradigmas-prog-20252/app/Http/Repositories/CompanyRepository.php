<?php

namespace App\Http\Repositories;

use App\Models\Company;

class CompanyRepository {
    public function __construct(private Company $model) {
                
    }

    public function index(array $data){
 
        return $this->model->where(function ($query) use($data){
            if (isset ($data['name'])) {
                $query->where('name','like', '%'.$data['name'].'%');
            }
    
            if (isset ($data['responsible_id'])) {
                $query->where('responsible_id', $data['responsible_id']);
            }
        })->get();
    }

    public function store(array $data) {
          return $this->model->create([
            'name' => $data['name'],
            'responsible_id' => $data['responsible_id'],
            'licensed' => $data['licensed']
        ]);
    }

    public function show (string $id){
        return $this->model->findOrFail($id);
    }
    
    public function update(array $data, string $id){
        $user = $this->show($id);
        $user->update($data);
        return $user->fresh();
    }

    public function destroy (string $id){
        $this->show($id)->delete();
    }
}