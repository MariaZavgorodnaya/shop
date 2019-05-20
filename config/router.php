<?php
$routerContainer = new \Aura\Router\RouterContainer();
$router = $routerContainer->getMap();

$router->get('home', '/', \NtSchool\Action\HomeAction::class);
$router->get('products', '/products', \NtSchool\Action\ProductsAction::class);
$router->get('single-product', '/single-product', \NtSchool\Action\ProductAction::class);
$router->get('cart', '/shop-cart', \NtSchool\Action\CartAction::class);
$router->get('checkout', '/shop-checkout', \NtSchool\Action\CheckoutAction::class);
$router->get('register', '/shop-register', \NtSchool\Action\RegisterAction::class);
$router->get('timetable', '/timetable', \NtSchool\Action\TimetableAction::class);
$router->get('team', '/team', \NtSchool\Action\TeamAction::class);
$router->get('member', '/member', \NtSchool\Action\MemberAction::class);
$router->get('services', '/services', \NtSchool\Action\ServicesAction::class);
$router->get('single-service', '/single-service', \NtSchool\Action\SingleServiceAction::class);
$router->get('faq', '/faq', \NtSchool\Action\FaqAction::class);
$router->get('404', '/404', \NtSchool\Action\FaqAction::class);
$router->get('blog-sidebar', '/blog', \NtSchool\Action\BlogSidebarAction::class);
$router->get('post-blog', '/blog-post', \NtSchool\Action\BlogPostAction::class);
$router->get('blog-video', '/blog-video', \NtSchool\Action\BlogVideoAction::class);
$router ->get('blog-category', '/blog/{category}', \NtSchool\Action\BlogByCategoryAction::class);
$router->get('contact', '/contacts', \NtSchool\Action\ContactAction::class);

$router->get('admin', '/admin', \NtSchool\Action\AdminIndexAction::class);
$router->get('admin-profile', '/admin-profile', \NtSchool\Action\AdminProfileAction::class);
$router->get('admin-get-edit', '/admin-profile-edit/{id}', \NtSchool\Action\AdminEditAction::class);
$router->post('admin-edit', '/admin-profile-edit/{id}', \NtSchool\Action\AdminEditAction::class);


$router->get('admin-inbox', '/admin-inbox', \NtSchool\Action\AdminInboxAction::class);

$router->get('admin-get-signUp', '/admin-signup', \NtSchool\Action\AdminSignUpAction::class);
$router->post('admin-signUp', '/admin-signup', \NtSchool\Action\AdminSignUpAction::class);

$router->get('admin-get-signIn', '/admin-signin', \NtSchool\Action\AdminSignInAction::class);
$router->post('admin-signIn', '/admin-signin', \NtSchool\Action\AdminSignInAction::class);

$router->get('admin-posts', '/admin-posts', \NtSchool\Action\AdminPostsAction::class);

$router->get('admin-post', '/admin-post/{id}', \NtSchool\Action\AdminPostAction::class);

$router->get('admin-post-create-get-form', '/admin-post-create', \NtSchool\Action\AdminPostCreateAction::class);
$router->post('admin-post-create', '/admin-post-create', \NtSchool\Action\AdminPostCreateAction::class);

$router->get('admin-products', '/admin-products', \NtSchool\Action\AdminProductsAction::class);
$router->get('admin-product', '/admin-product', \NtSchool\Action\AdminProductAction::class);
$router->get('admin-orders', '/admin-orders', \NtSchool\Action\AdminOrdersAction::class);
$router->get('admin-order', '/admin-order', \NtSchool\Action\AdminOrderAction::class);
$router->get('admin-comments', '/admin-comments', \NtSchool\Action\AdminCommentsAction::class);
$router->get('admin-comment', '/admin-comment', \NtSchool\Action\AdminCommentAction::class);
$router->get('admin-faq', '/admin-faq', \NtSchool\Action\AdminFaqAction::class);
$router->get('admin-table', '/admin-table', \NtSchool\Action\AdminTableAction::class);
$router->get('admin-forms', '/admin-forms', \NtSchool\Action\AdminFormsAction::class);
$router->get('admin-bootstrap', '/admin-bootstrap', \NtSchool\Action\AdminBootstrapAction::class);

