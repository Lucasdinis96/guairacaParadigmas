<?php

namespace App\Http\Repositories;

use App\Models\User;
use Illuminate\Support\Arr;

class UserRepository {
    public function __construct(private User $model) {
                
    }

    public function index(array $data){
        //dd($data);        //1ª forma - chamada pela model direto
        //return User::all();
        //2ª forma - chamada pela variavel do construtor
        /*return $this->model
        ->where('name', $data['name'])
        ->where('email', $data['email'])
        ->get();*/

        return $this->model->where(function ($query) use($data){
            if (isset ($data['id'])) {
                $query->where('id', $data['id']);
            }
    
            if (isset ($data['name'])) {
                $query->where('name', 'like', $data['name'].'%');
            }

            if (isset ($data['email'])) {
                $query->where('email', $data['email']);
            }

        })->get();
    }

    public function store(array $data) {
          return $this->model->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']) 
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
        // $user = $this->show($id);
        // $user->delete();

        $this->show($id)->delete();
    }
}