<?php

namespace NtSchool\Action;

use Psr\Http\Message\ServerRequestInterface;

final class AdminOrderAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        //$slug = $request->getAttribute('slug');

        return $this->renderer->make('admin.admin-order', ['title' => 'Order']);
    }
}
