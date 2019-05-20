<?php

namespace NtSchool\Action;

use Illuminate\Database\Capsule\Manager;
use Illuminate\Pagination\Paginator;
use NtSchool\Model\Category;
use NtSchool\Model\Post;
use Psr\Http\Message\ServerRequestInterface;

final class BlogSidebarAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        $page = $request->getQueryParams()['page'] ?? 1;
        $postPerPage = 3;
        $offset = $page == 1 ? 0 : ($page-1) * $postPerPage;

        $results = Manager::select('select COUNT(*) as counter from posts');
        $pages = round($results[0]->counter/$postPerPage);

        $posts = new Paginator(Post::skip($offset)->take($postPerPage)->orderBy('id','DESC')->get(),
            $postPerPage,
            $page);

        $sidebar_posts = Post::take($postPerPage)->orderBy('id','DESC')->get();

        $categories = Category::all();


        return $this->renderer->make('blog.blog-sidebar',
            ['title' => 'Blog',
                'posts' => $posts,
                'sidebar_posts' => $sidebar_posts,
                'categories' => $categories,
                'pages' => $pages]);
    }
}
