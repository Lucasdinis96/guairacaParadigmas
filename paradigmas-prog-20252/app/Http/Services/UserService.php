<?php
// Responsavel pela lógica do app
namespace App\Http\Services;

use App\Http\Repositories\UserRepository;
use App\Models\User;
use PhpParser\Node\Expr\FuncCall;

class UserService {

    public function __construct(private UserRepository $userRepository) {}

    public function index(array $data) {
        //return User::all();
        return $this->userRepository->index($data);
    }

    public function store(array $data) {
        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => bcrypt($data['password']) 
        // ]);

        return $this->userRepository->store($data);
    }

    public function show (string $id){
        return $this->userRepository->show($id);
    }

    public function update (array $data, string $id){
        return $this->userRepository->update($data, $id);
    }

    public function destroy (string $id){
        $this->userRepository->destroy($id);
    }
}