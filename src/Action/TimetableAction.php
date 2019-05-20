<?php

namespace NtSchool\Action;

use Psr\Http\Message\ServerRequestInterface;

final class TimetableAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;

    public function __construct($view)
    {
        $this->renderer = $view;
    }

    public function __invoke(ServerRequestInterface $request)
    {

        return $this->renderer->make('pages.timetable', ['title' => 'Timetable']);
    }
}
