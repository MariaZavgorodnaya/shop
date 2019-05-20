<?php

namespace NtSchool\Action;

use Illuminate\Database\Capsule\Manager;
use Illuminate\Pagination\Paginator;
use NtSchool\Model\Post;
use Psr\Http\Message\ServerRequestInterface;

final class AdminPostsAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {


        $posts = Manager::table('posts')
            ->join('users', 'posts.author', '=', 'users.id' )
            ->select('posts.*', 'users.name');

        $page = $request->getQueryParams()['page'] ?? 1;
        $postPerPage = 10;
        $offset = $page === 1 ? 0 : ($page-1) * $postPerPage;
        $results = $posts->count();
        $pages = round($results/$postPerPage);

        $users = new Paginator($posts->skip($offset)->take($postPerPage)->orderBy('id', 'DESC')->get(),
            $postPerPage,
            $page);

        return $this->renderer->make('admin.admin-posts', ['title' => 'Posts', 'users'=>$users, 'pages' => $pages]);
    }
}
