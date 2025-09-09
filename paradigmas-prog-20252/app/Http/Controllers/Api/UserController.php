<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Services\UserService;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;

use App\Models\User;

use Illuminate\Http\Request;


class UserController extends Controller
{

    public function __construct(private UserService $userService){}
 
    public function index(Request $request) {
        //dd($request->all());
        //$users = $this->userService->index();
        //return response()->json(['data' => $users]);
        return response()->json(['data' => $this->userService->index($request->all())]);
    }

    public function store(CreateUserRequest $request) {
        //$user=$this->userService->store($request->validate()); // retorna somente os dados validados
        //dd($user);
        //return response()->json(['data'=>$user]);
        return response()->json(['data'=>$this->userService->store($request->validated())]);
    }

    public function show(string $id) {
        return response() -> json(['data' => $this->userService->show($id)]);
    }

    public function update(UpdateUserRequest $request, string $id) {
        // $user = $this->userService->update($request->validate(),$id);
        // return response()->json(['data' => $user]);
        return response()->json(['data' => $this->userService->update($request->validated(),$id)]);
    }

    public function destroy(string $id) {
        $this->userService->destroy($id);
    }
}
