<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About Us",
        "name"  => "Andhika Satriawan",
        "email" => "andhika.satriawan1988@gmail.com",
        "image" => "andhika.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title"     => "Judul Post Pertama",
            "slug"      => "judul-post-pertama",
            "author"    => "Andhika Satriawan",
            "body"      => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lacinia est lorem, in hendrerit ex placerat eget. Suspendisse id nisl rutrum, mattis est at, commodo ex. Aenean vel arcu in enim commodo ultricies. In sed dolor vel odio pharetra gravida. Mauris dictum felis vitae augue gravida vestibulum. Proin a ipsum et nisi malesuada dignissim eget a leo. Proin interdum eros a diam rhoncus lobortis. Cras consequat vehicula turpis, non semper tortor auctor vel. In neque sem, congue eget ullamcorper at, tempus pretium sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus dolor sapien, varius id molestie ut."
        ],
        [
            "title"     => "Judul Post Kedua",
            "slug"      => "judul-post-kedua",
            "author"    => "Suliawati",
            "body"      => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus commodo sapien id dui rutrum convallis eget a ligula. Fusce id odio hendrerit, porttitor ipsum vitae, vestibulum nunc. Donec blandit velit magna, sed pharetra diam vulputate et. Maecenas vulputate tincidunt magna, quis commodo libero varius ac. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer sed aliquet lacus. Maecenas sed enim id eros tempor tristique. Phasellus tincidunt ex sit amet erat hendrerit laoreet non eu ligula. Ut at metus ut justo ultricies luctus sit amet eget eros. In hac habitasse platea dictumst. Aenean mi nulla, cursus sed diam in, dignissim interdum massa. Nullam vel nulla ut leo lobortis consectetur consectetur nec est. Ut eleifend pulvinar condimentum. Nullam tempus sit amet libero condimentum lobortis. Proin id tellus a ante pretium lacinia. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.Fusce ac justo a mauris laoreet lobortis. Aenean congue consequat risus, in malesuada tellus tempor consectetur. Sed porta lobortis lobortis. Etiam fringilla justo vitae odio cursus eleifend. Vestibulum lacinia sapien efficitur odio accumsan egestas. Donec vulputate lacus ante. Curabitur laoreet, massa eget condimentum vulputate, ex leo tempus ipsum, in laoreet nisi diam a diam."
        ]
    ];

    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});

Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title"     => "Judul Post Pertama",
            "slug"      => "judul-post-pertama",
            "author"    => "Andhika Satriawan",
            "body"      => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lacinia est lorem, in hendrerit ex placerat eget. Suspendisse id nisl rutrum, mattis est at, commodo ex. Aenean vel arcu in enim commodo ultricies. In sed dolor vel odio pharetra gravida. Mauris dictum felis vitae augue gravida vestibulum. Proin a ipsum et nisi malesuada dignissim eget a leo. Proin interdum eros a diam rhoncus lobortis. Cras consequat vehicula turpis, non semper tortor auctor vel. In neque sem, congue eget ullamcorper at, tempus pretium sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus dolor sapien, varius id molestie ut."
        ],
        [
            "title"     => "Judul Post Kedua",
            "slug"      => "judul-post-kedua",
            "author"    => "Suliawati",
            "body"      => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus commodo sapien id dui rutrum convallis eget a ligula. Fusce id odio hendrerit, porttitor ipsum vitae, vestibulum nunc. Donec blandit velit magna, sed pharetra diam vulputate et. Maecenas vulputate tincidunt magna, quis commodo libero varius ac. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer sed aliquet lacus. Maecenas sed enim id eros tempor tristique. Phasellus tincidunt ex sit amet erat hendrerit laoreet non eu ligula. Ut at metus ut justo ultricies luctus sit amet eget eros. In hac habitasse platea dictumst. Aenean mi nulla, cursus sed diam in, dignissim interdum massa. Nullam vel nulla ut leo lobortis consectetur consectetur nec est. Ut eleifend pulvinar condimentum. Nullam tempus sit amet libero condimentum lobortis. Proin id tellus a ante pretium lacinia. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.Fusce ac justo a mauris laoreet lobortis. Aenean congue consequat risus, in malesuada tellus tempor consectetur. Sed porta lobortis lobortis. Etiam fringilla justo vitae odio cursus eleifend. Vestibulum lacinia sapien efficitur odio accumsan egestas. Donec vulputate lacus ante. Curabitur laoreet, massa eget condimentum vulputate, ex leo tempus ipsum, in laoreet nisi diam a diam."
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('single-post', [
        "title" => "Single Post",
        "post"  => $new_post
    ]);
});
