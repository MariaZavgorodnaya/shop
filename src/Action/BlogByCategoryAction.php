<?php

namespace NtSchool\Action;

use Illuminate\Database\Capsule\Manager;
use Illuminate\Pagination\Paginator;
use NtSchool\Model\Category;
use NtSchool\Model\Post;
use Psr\Http\Message\ServerRequestInterface;

final class BlogByCategoryAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {

        $categories = Category::all();//вывести все катеогрии для сайдбара

        $postByCategory = $request->getAttribute('category') ?? '';//из http запроса беру $categories->key
        $postsAll = Manager::table('posts')
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->join('categories', 'category_post.category_id', '=', 'categories.id')
            ->where('categories.key', '=', $postByCategory)
            ->select('categories.key', 'posts.title', 'posts.content', 'posts.description', 'posts.created_at');

        $page = $request->getQueryParams()['page'] ?? 1;
        $postPerPage = 3;
        $offset = $page == 1 ? 0 : ($page-1) * $postPerPage;

        $results = $postsAll->count();

        $pages = round($results/$postPerPage);

        $posts = new Paginator($postsAll->skip($offset)->take($postPerPage)->get(),
            $postPerPage,
            $page);


        $sidebar_posts = Post::take(3)->orderBy('id', 'DESC')->get();




        return $this->renderer->make('blog.blog-post-by-category',
            ['title' => 'Blog',
                'posts' => $posts,
                'sidebar_posts' => $sidebar_posts,
                'pages' => $pages,
                'categories' => $categories
                ]);
    }
}
