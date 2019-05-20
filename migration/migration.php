<?php
require_once '../vendor/autoload.php';
require_once '../config/dotenv.php';
require_once '../config/database.php';


/*Illuminate\Database\Capsule\Manager::schema()->create('posts', function ($table) {
    $table->increments('id');
    $table->string('title');
    $table->text('content');

    $table->string('description');
    $table->string('cover');
    $table->timestamps();
});
Illuminate\Database\Capsule\Manager::schema()->create('categories', function ($table) {
    $table->increments('id');
    $table->string('title');
    $table->string('key');
    $table->timestamps();
});
Illuminate\Database\Capsule\Manager::schema()->create('category_post', function ($table) {

    $table->integer('post_id');
    $table->integer('category_id');
    $table->timestamps();
    $table->primary(['post_id', 'category_id']);
});
Illuminate\Database\Capsule\Manager::schema()->create('users', function ($table) {
    $table->increments('id');
    $table->string('name');
    $table->string('password');
    $table->timestamps();

});
Illuminate\Database\Capsule\Manager::schema()->create('profiles', function ($table) {
    $table->increments('id');
    $table->binary('picture');
    $table->string('country');
    $table->string('company');
    $table->string('position');
    $table->string('number');
    $table->string('mobile');
    $table->string('email');
    $table->string('address');
    $table->string('password');
    $table->string('facebook');
    $table->string('twitter');
    $table->string('linkedln');
    $table->string('instagram');
    $table->primary('id');
    $table->unique('email');
    $table->timestamps();
});*/
