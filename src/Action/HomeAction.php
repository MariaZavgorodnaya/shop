<?php

namespace NtSchool\Action;

use loggers\AdapterInterface;
use loggers\NotifierObserver;
use Monolog\Logger;
use NtSchool\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Wa72\SimpleLogger\FileLogger;

final class HomeAction
{
    /** @var \Illuminate\View\Factory */
    protected $renderer;
    protected $logger;

    public function __construct($view, NotifierObserver $logger)
    {
        $this->renderer = $view;
        $this->logger = $logger;


    }

    public function __invoke(ServerRequestInterface $request)
    {
        //$this->logger->error('Ошибка');
        $message = "Информация";
        $this->logger->info($message);

        return $this->renderer->make('pages.index', ['title' => 'Главная страница']);
    }
}
