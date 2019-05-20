<?php

namespace NtSchool\Action;

use NtSchool\Model\Profile;
use Psr\Http\Message\ServerRequestInterface;

final class AdminEditAction
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
        $errors = null;
        $message = null;
        $profile = Profile::find($request->getAttribute('id'));
        if ($method === 'POST') {
            $data = $request->getParsedBody();
            try {
                $this->validator->validate($data, ['pic' => ['image'],
                    'country' => ['min:3'],
                    'company' => [],
                    'position' => ['min:3'],
                    'number' => ['min:11'],
                    'email' => ['required', 'email', 'unique:profiles,email,' . $profile->id],
                    'adress' => [],
                    'password_old' => ['required','min:8'],
                    'password' => ['confirmed', 'min:8'],
                    'password_confirmation' => ['min:8'],
                ]);
                if(!password_verify($data['password_old'], $profile->password)){
                    $message['password'] = 'Вы ввели неверный пароль';
                }
                $profile->picture = $data['pic'];
                $profile->country = $data['country'];
                $profile->company = $data['company'];
                $profile->position = $data['position'];
                $profile->number = $data['number'];
                $profile->mobile = $data['mobile'];
                if(!empty($data['email'])){
                    $profile->email = $data['email'];
                }
                $profile->address = $data['adress'];
                if(!empty($data['password'])){
                    $profile->password =  password_hash($data['password'], PASSWORD_ARGON2I);
                }
                $profile->facebook = $data['facebook'];
                $profile->twitter = $data['twitter'];
                $profile->linkedln = $data['linkedln'];
                $profile->instagram = $data['instagram'];
                $profile->save();
                $message['info'] = "Изменения сохранены";
            }catch(\Illuminate\Validation\ValidationException $e){
                $errors = $e->validator->errors();
            }



        }

        return $this->renderer->make('admin.admin-edit', ['title' => 'Edit Profile',
            'errors' => $errors, 'data'=>$data, 'profile' => $profile, 'message' => $message]);
    }
}
