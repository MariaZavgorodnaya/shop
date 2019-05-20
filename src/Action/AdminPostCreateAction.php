<?php

namespace NtSchool\Action;

use Illuminate\Database\Capsule\Manager;
use NtSchool\Model\Category;
use NtSchool\Model\Category_post;
use NtSchool\Model\Post;
use NtSchool\Model\User;
use Psr\Http\Message\ServerRequestInterface;

final class AdminPostCreateAction
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
        $data = $request->getParsedBody();

        if ($method === 'POST') {

try {

     $this->validator->validate($data, [
        'title' => ['required'],
        'desc' => ['required'],
         'author' =>['required'],
         'category' => ['required'],
         'category-key' => ['required'],
         'content' => ['required']
     ]);

     $author = Manager::table('users')->where('name', $data['author'])->value('id');

    $posts = new Post();
    $posts->title = $data['title'];
    $posts->content = $data['content'];
    $posts->description = $data['desc'];
    $posts->publish_create = $data['pub_date'];
    $posts->publish_time = $data['pub_time'];
    $posts->author = $author;
$posts->picture= $data['pic'];
$posts->video = $data['video'];
    $posts->save();

    $categories = new Category();
    $categories->title = $data['category'];
    $categories->key = $data['category-key'];
    $categories->save();




}catch(\Illuminate\Validation\ValidationException $e){
    $errors = $e->validator->errors();
}


        }

        return $this->renderer->make('admin.admin-post-create',
            ['data' => $data, 'posts' => $posts, 'errors' => $errors]);
    }

}