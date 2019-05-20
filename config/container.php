<?php

/** @var $renderer \Illuminate\View\Factory */

use Aura\Di\ContainerBuilder;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use loggers\MonologAdapter;


$builder = new ContainerBuilder();
$container = $builder->newInstance();

$container->set('validator', function () use ($capsule) {
    //путь до языковых файлов
    $filesystem = new Illuminate\Filesystem\Filesystem();
    $loader = new Illuminate\Translation\FileLoader($filesystem, dirname(dirname(__FILE__)) . '/resources/lang');
    $loader->addNamespace('lang', dirname(dirname(__FILE__)) . '/resources/lang');
    $loader->load($lang = 'ru', $group = 'validation', $namespace = 'lang');
//иниц. переводчик
    $factory = new Illuminate\Translation\Translator($loader, 'ru');
    $validator = new Illuminate\Validation\Factory($factory);
//подключение к базе данных для валидатора и иниц. валидатор
    $databasePresenceVerifier = new \Illuminate\Validation\DatabasePresenceVerifier($capsule->getDatabaseManager());
    $validator->setPresenceVerifier($databasePresenceVerifier);

    return $validator;
});


$container->set('monolog-logger', function () {
    $log = new Logger('name');
    $log->pushHandler(new StreamHandler(__DIR__ . '/../resources/logs/logs.log'));
    $notifier = new MonologAdapter($log);
    return $notifier;
});
$container->set('telegram-logger', function () {

    $notifier = new \loggers\TelegramAdapter(351787232, '852833193:AAEPCTmREUAffAdm-0_ePJ_bLgHSHcuBwA4');
    return $notifier;
});
$container->set('notifier', function () use($container) {
    $logger = new \loggers\NotifierObserver();
    $logger->add($container->get('monolog-logger'));
    $logger->add($container->get('telegram-logger'));
    return $logger;
});

/*$container->set('logger', function(){
    $log = new \Wa72\SimpleLogger\FileLogger(__DIR__.'/../resources/logs/logs2.log');
    $logger = new \NtSchool\SimpleLogger($log);
    return $logger;
});*/
$container->set(\NtSchool\Action\BlogByCategoryAction::class, function () use ($renderer) {
    return new \NtSchool\Action\BlogByCategoryAction($renderer);
});

$container->set(\NtSchool\Action\HomeAction::class, function () use ($renderer, $container) {
    return new \NtSchool\Action\HomeAction($renderer, $container->get('notifier'));
});

$container->set(\NtSchool\Action\ProductsAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ProductsAction($renderer);
});
$container->set(\NtSchool\Action\ProductAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ProductAction($renderer);
});
$container->set(\NtSchool\Action\CartAction::class, function () use ($renderer) {
    return new \NtSchool\Action\CartAction($renderer);
});
$container->set(\NtSchool\Action\CheckoutAction::class, function () use ($renderer) {
    return new \NtSchool\Action\CheckoutAction($renderer);
});
$container->set(\NtSchool\Action\RegisterAction::class, function () use ($renderer) {
    return new \NtSchool\Action\RegisterAction($renderer);
});
$container->set(\NtSchool\Action\TimetableAction::class, function () use ($renderer) {
    return new \NtSchool\Action\TimetableAction($renderer);
});
$container->set(\NtSchool\Action\TeamAction::class, function () use ($renderer) {
    return new \NtSchool\Action\TeamAction($renderer);
});
$container->set(\NtSchool\Action\MemberAction::class, function () use ($renderer) {
    return new \NtSchool\Action\MemberAction($renderer);
});
$container->set(\NtSchool\Action\ServicesAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ServicesAction($renderer);
});
$container->set(\NtSchool\Action\SingleServiceAction::class, function () use ($renderer) {
    return new \NtSchool\Action\SingleServiceAction($renderer);
});
$container->set(\NtSchool\Action\SingleServiceAction::class, function () use ($renderer) {
    return new \NtSchool\Action\SingleServiceAction($renderer);
});
$container->set(\NtSchool\Action\FaqAction::class, function () use ($renderer) {
    return new \NtSchool\Action\FaqAction($renderer);
});
$container->set(\NtSchool\Action\NotFoundAction::class, function () use ($renderer) {
    return new \NtSchool\Action\NotFoundAction($renderer);
});
$container->set(\NtSchool\Action\BlogSidebarAction::class, function () use ($renderer) {
    return new \NtSchool\Action\BlogSidebarAction($renderer);
});
$container->set(\NtSchool\Action\BlogPostAction::class, function () use ($renderer) {
    return new \NtSchool\Action\BlogPostAction($renderer);
});
$container->set(\NtSchool\Action\BlogVideoAction::class, function () use ($renderer) {
    return new \NtSchool\Action\BlogVideoAction($renderer);
});
$container->set(\NtSchool\Action\ContactAction::class, function () use ($renderer) {
    return new \NtSchool\Action\ContactAction($renderer);
});
$container->set(\NtSchool\Action\AdminIndexAction::class, function () use ($renderer) {
    return new \NtSchool\Action\AdminIndexAction($renderer);
});
$container->set(\NtSchool\Action\AdminProfileAction::class, function () use ($renderer) {
    return new \NtSchool\Action\AdminProfileAction($renderer);
});
$container->set(\NtSchool\Action\AdminEditAction::class, function () use ($renderer, $container) {
    return new \NtSchool\Action\AdminEditAction($renderer, $container->get('validator'));
});
$container->set(\NtSchool\Action\AdminInboxAction::class, function () use ($renderer) {
    return new \NtSchool\Action\AdminInboxAction($renderer);
});
$container->set(\NtSchool\Action\AdminSignUpAction::class, function () use ($renderer, $container) {
    return new \NtSchool\Action\AdminSignUpAction($renderer, $container->get('validator'));
});
$container->set(\NtSchool\Action\AdminSignInAction::class, function () use ($renderer, $container) {
    return new \NtSchool\Action\AdminSignInAction($renderer, $container->get('validator'));
});
$container->set(\NtSchool\Action\AdminPostsAction::class, function () use ($renderer) {
    return new \NtSchool\Action\AdminPostsAction($renderer);
});
$container->set(\NtSchool\Action\AdminPostAction::class, function () use ($renderer, $container) {
    return new \NtSchool\Action\AdminPostAction($renderer, $container->get('validator'));
});
$container->set(\NtSchool\Action\AdminPostCreateAction::class, function () use ($renderer, $container) {
    return new \NtSchool\Action\AdminPostCreateAction($renderer, $container->get('validator'));
});
$container->set(\NtSchool\Action\AdminProductsAction::class, function () use ($renderer) {
    return new \NtSchool\Action\AdminProductsAction($renderer);
});
$container->set(\NtSchool\Action\AdminProductAction::class, function () use ($renderer) {
    return new \NtSchool\Action\AdminProductAction($renderer);
});
$container->set(\NtSchool\Action\AdminOrdersAction::class, function () use ($renderer) {
    return new \NtSchool\Action\AdminOrdersAction($renderer);
});
$container->set(\NtSchool\Action\AdminOrderAction::class, function () use ($renderer) {
    return new \NtSchool\Action\AdminOrderAction($renderer);
});
$container->set(\NtSchool\Action\AdminCommentsAction::class, function () use ($renderer) {
    return new \NtSchool\Action\AdminCommentsAction($renderer);
});
$container->set(\NtSchool\Action\AdminCommentAction::class, function () use ($renderer) {
    return new \NtSchool\Action\AdminCommentAction($renderer);
});
$container->set(\NtSchool\Action\AdminFaqAction::class, function () use ($renderer) {
    return new \NtSchool\Action\AdminFaqAction($renderer);
});
$container->set(\NtSchool\Action\AdminTableAction::class, function () use ($renderer) {
    return new \NtSchool\Action\AdminTableAction($renderer);
});
$container->set(\NtSchool\Action\AdminFormsAction::class, function () use ($renderer) {
    return new \NtSchool\Action\AdminFormsAction($renderer);
});
$container->set(\NtSchool\Action\AdminBootstrapAction::class, function () use ($renderer) {
    return new \NtSchool\Action\AdminBootstrapAction($renderer);
});
