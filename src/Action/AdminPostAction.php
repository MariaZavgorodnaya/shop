<?php

namespace NtSchool\Action;

use NtSchool\Model\Category;
use NtSchool\Model\Category_post;
use NtSchool\Model\Post;
use NtSchool\Model\PostUser;
use Psr\Http\Message\ServerRequestInterface;

final class AdminPostAction
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
$id = $request->getAttribute('id');
$post = Post::find($id);
$title = $post->title;

        return $this->renderer->make('admin.admin-post', ['title' => $title, 'post'=>$post]);

    }
}