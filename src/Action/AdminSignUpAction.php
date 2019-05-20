<?php

namespace NtSchool\Action;

use Dotenv\Exception\ValidationException;
use NtSchool\Model\Profile;
use NtSchool\Model\User;
use Psr\Http\Message\ServerRequestInterface;

final class AdminSignUpAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;
    protected $validator;


    public function __construct($view, $validator)
    {
        $this->renderer = $view;
        $this->validator = $validator;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        $errors = null;
        $method = $request->getMethod();

        if ($method === 'POST') {
            $params = $request->getParsedBody();
try{
            $this->validator->validate($params, ['email' => ['required', 'email', 'unique:users,name'],
                'password' => ['required', 'min:8', 'confirmed'],
                'password_confirmation' => ['required', 'min:8']]);
    $user = new User();
    $user->name = $params['email'];
    $user->password = password_hash($params['password'], PASSWORD_ARGON2I);
    $user->save();
    $profile = new Profile();
    $profile->email = $params['email'];
    $profile->password = password_hash($params['password'], PASSWORD_ARGON2I);
    $profile->save();


        } catch(\Illuminate\Validation\ValidationException $e) {
    $errors = $e->validator->errors();
}






        }


        return $this->renderer->make('admin.admin-signUp', ['title' => 'Sign up', 'errors'=> $errors,
            'params' => $params]);
    }
}
