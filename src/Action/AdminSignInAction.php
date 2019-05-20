<?php

namespace NtSchool\Action;

use Illuminate\Database\Capsule\Manager;
use Illuminate\Support\Facades\DB;
use NtSchool\Model\User;
use Psr\Http\Message\ServerRequestInterface;

final class AdminSignInAction
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
        $method = $request->getMethod();
   $messages = null;
        $errors = null;

        if ($method === 'POST') {
            $params = $request->getParsedBody();
            $email = $params['email'];
            $user = Manager::table('users')->where('name', $email)->first();


            try {
                $this->validator->validate($params, ['email' => ['required', 'email',
                'exists:users,name'],
                    'password' => ['required', 'min:8']]);
            }catch(\Illuminate\Validation\ValidationException $e){
                $errors = $e->validator->errors();
            }

           if(password_verify($params['password'], $user->password)){
                header('Location:/admin');
            }else{
                $messages['password'] = ['Вы ввели неверный пароль'];
            }

        }
        return $this->renderer->make('admin.admin-signIn', ['title' => 'Sign in',
            'errors' => $errors, 'messages' => $messages, 'params' => $params]);
    }
}
