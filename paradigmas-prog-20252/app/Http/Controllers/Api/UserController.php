<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Services\UserService;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;


class UserController extends Controller
{
    private UserService $userService;

    public function __construct(UserService $userService){
        $this->userService = $userService;
    }
 
    public function index(Request $request) {
        return UserResource::collection($this->userService->index($request->all()));
    }

    public function store(CreateUserRequest $request) {

        $data = $request->validated();

        return new UserResource($this->userService->store([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']) 
        ]));
    }

    public function show(string $id) {
        return new UserResource($this->userService->show($id));
    }

    public function update(UpdateUserRequest $request, string $id) {
        return new UserResource($this->userService->update($request->validated(),$id));
    }

    public function destroy(string $id) {
        $this->userService->destroy($id);

        return response()->noContent();
    }
}
