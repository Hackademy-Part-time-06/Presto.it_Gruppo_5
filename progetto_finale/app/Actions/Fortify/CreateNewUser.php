<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'number' => [
                'string',
                'min:8',
                'max:11'
            ],
            'city' => 'string',
            'description' => 'string'
        ])->validate();

        if(request()->hasFile('avatar') && request()->file('avatar')->isValid()){
            $path_name = request()->file('avatar')->getClientOriginalName();
            $path_extension = request()->file('avatar')->getClientOriginalExtension();
        }
        
        $path_avatar = request()->file('avatar')->storeAs('public/avatar',$path_name);
        return User::create([
            'name' => $input['name'],
            'surname' => $input['surname'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'description' => $input['description'],
            'number' => $input['number'],
            'city' => $input['city'],
            'avatar' => $path_avatar,
        ]);
    }
}
