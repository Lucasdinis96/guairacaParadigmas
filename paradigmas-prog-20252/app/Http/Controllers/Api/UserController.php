<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Services\UserService;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Services\BaseService;
use App\Models\User;

use Illuminate\Http\Request;


class UserController extends Controller
{
    private UserService $userService;

    public function __construct(UserService $userService){
        $this->userService = $userService;
    }
 
    public function index(Request $request) {
        return response()->json(['data' => $this->userService->index($request->all())]);
    }

    public function store(CreateUserRequest $request) {

        $data = $request->validated();

        return response()->json(['data'=>$this->userService->store([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']) 
        ])]);
    }

    public function show(string $id) {
        return response() -> json(['data' => $this->userService->show($id)]);
    }

    public function update(UpdateUserRequest $request, string $id) {
        return response()->json(['data' => $this->userService->update($request->validated(),$id)]);
    }

    public function destroy(string $id) {
        $this->userService->destroy($id);
    }
}
