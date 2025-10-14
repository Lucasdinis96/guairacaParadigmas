<?php

namespace App\Http\Repositories;

use App\Models\User;

class UserRepository extends BaseRepository{
    public function __construct(User $model) {
        parent::__construct($model);
    }

    public function index(array $data){
        $users = $this->model->where(function ($query){
    
            if (isset ($data['name'])) {
                $query->where('name', 'like', $data['name'].'%');
            }

            if (isset ($data['email'])) {
                $query->where('email', $data['email']);
            }

        });
        return isset($data['per_page']) ? $users->paginate($data['per_page']) : $users->get();
    }

    // public function store(array $data) {
    //       return $this->model->create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => bcrypt($data['password']) 
    //     ]);
    // }

    // public function show (string $id){
    //     return $this->model->findOrFail($id);
    // }
    
    // public function update(array $data, string $id){
    //     $user = $this->show($id);
    //     $user->update($data);
    //     return $user->fresh();
    // }

    // public function destroy (string $id){
    //     // $user = $this->show($id);
    //     // $user->delete();

    //     $this->show($id)->delete();
    // }
}