<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <?php if(Route::has('login')): ?>
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/dashboard')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
        <style>
            @import "bourbon";

            * {
              box-sizing(border-box);
            }

            html {
                height: 100%;
            }

            body {
                 linear-gradient(-45deg, #19d3d1 5%, #57abf2, $fallback: #57abf2);
                font-family: 'Open Sans', sans-serif;
                font-size: 1rem;
            }

            img {
                max-width: 100%;
                height: auto;
                vertical-align: bottom;
            }

            .recipe-card {
                background: #fff;
                margin: 4em auto;
                width: 90%;
                max-width: 496px;
                border-top-radius(5px);
                border-bottom-radius(5px);
            }

            .recipe-card aside {
                position: relative;
            }

            .recipe-card aside img {
                border-top-radius(5px)
            }

            .recipe-card aside .button {
                background: #57abf2;
                display: inline-block;
                position: absolute;
                top: 80%;
                right: 3%;
                width: em(65);
                height: em(65);
                border-radius: em(65);
                line-height: em(65);
                text-align: center;
            }

            .recipe-card aside .button .icon {
                vertical-align: middle;
            }

            .recipe-card article {
                padding: 1.25em 1.5em;
            }

            .recipe-card article ul {
                list-style: none;
                margin: 0.5em 0 0;
                padding: 0;
            }

            .recipe-card article ul li {
                display: inline-block;
                margin-left: 1em;
                line-height: 1em;
            }

            .recipe-card article ul li:first-child {
                margin-left: 0;
            }

            .recipe-card article ul li .icon {
                vertical-align: bottom;
            }

            .recipe-card article ul li span:nth-of-type(2) {
                margin-left: 0.5em;
                font-size: 0.8em;
                font-weight: 300;
                vertical-align: middle;
                color: #838689;
            }

            .recipe-card article h2, .recipe-card article h3 {
                margin: 0;
                font-weight: 300;
            }

            .recipe-card article h2 {
                font-size: em(28);
                color: #222222;
            }

            .recipe-card article h3 {
                font-size: em(15);
                color: #838689;
            }

            .recipe-card article p {
                margin: 1.25em 0;
                font-size: em(13);
                font-weight: 400;
                color: #222222;
            }

            .recipe-card article p span {
                font-weight: 700;
                color: #000000;
            }

            .recipe-card article .ingredients {
                margin: 2em 0 0.5em;
            }

            .recipe-card .icon {
                display: inline;
                display: inline-block;
                background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/203277/recipe-card-icons.svg);
                background-repeat: no-repeat;
            }

            .recipe-card .icon-calories, .recipe-card .icon-calories\:regular {
                background-position: 0 0;
                width: 16px;
                height: 19px;
            }

            .recipe-card .icon-clock, .recipe-card .icon-clock\:regular {
                background-position: 0 -19px;
                width: 20px;
                height: 20px;
            }

            .recipe-card .icon-level, .recipe-card .icon-level\:regular {
                background-position: 0 -39px;
                width: 16px;
                height: 19px;
            }

            .recipe-card .icon-play, .recipe-card .icon-play\:regular {
                background-position: 0 -58px;
                width: 21px;
                height: 26px;
            }

            .recipe-card .icon-users, .recipe-card .icon-users\:regular {
                background-position: 0 -84px;
                width: 18px;
                height: 18px;
            }
        </style>
        <title>Recipe Cards</title>
    </head>
    <body>
        <div class="search-bar">
            <form action="<?php echo e(route('recipe.search')); ?>" method="GET">
                
                <?php echo method_field('GET'); ?>
            <input type="text" name="keyword" class="search-input" placeholder="Search recipes...">
            <button class="search-button">Search</button>
        </form>
        </div>
        <?php $__currentLoopData = $reciprs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div class="recipe-card">
        <h2><?php echo e($recipe->title); ?></h2>
        <aside>
            <?php if($recipe->image_path): ?>
            <img src="<?php echo e(asset('images/recipes/' . $recipe->image_path)); ?>" alt="Recipe Image" style="max-width: 100px; max-height: 100px;">
            <div>            <p class="ingredients"><span><?php echo e($recipe->description); ?></span></p>
            </div>
        <?php else: ?>
            No Image
            <?php endif; ?>

        </aside>


    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </body>
</html>
<?php /**PATH C:\Users\youcod\Desktop\LARAVEL2\Recipe_book\resources\views/welcome.blade.php ENDPATH**/ ?>