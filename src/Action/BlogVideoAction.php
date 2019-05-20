<?php

namespace NtSchool\Action;

use Illuminate\Database\Capsule\Manager;
use Illuminate\Pagination\Paginator;
use Psr\Http\Message\ServerRequestInterface;
use NtSchool\Model\Post;

final class BlogVideoAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {

        $sidebar_posts = Post::take(3)->orderBy('id','DESC')->get();
        return $this->renderer->make('blog.blog-video', ['title' => 'Video Post',
            'sidebar_posts' => $sidebar_posts]);
    }
}
