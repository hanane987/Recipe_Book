<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import "bourbon";

        * {
            @include box-sizing(border-box);
        }

        html {
            height: 100%;
        }

        body {
            @include linear-gradient(-45deg, #19d3d1 5%, #57abf2, $fallback: #57abf2);
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
            @include border-top-radius(5px);
            @include border-bottom-radius(5px);
        }

        .recipe-card aside {
            position: relative;
        }

        .recipe-card aside img {
            @include border-top-radius(5px);
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
        <input type="text" class="search-input" placeholder="Search recipes...">
        <button class="search-button">Search</button>
    </div>


<div class="recipe-card">
    <aside>
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/203277/oatmeal.jpg" alt="Chai Oatmeal" />
        <a href="#" class="button"><span class="icon icon-play"></span></a>
    </aside>
    <article>
       

        <ul>
            <li><span class="icon icon-users"></span><span>1</span></li>
            <li><span class="icon icon-clock"></span><span>15 min</span></li>
            <li><span class="icon icon-level"></span><span>Beginner level</span></li>
            <li><span class="icon icon-calories"></span><span>248</span></li>
        </ul>

        <p>For an extra thick and creamy bowl, add oat bran. It'll make for a hearty helping and also add more fiber to your meal. If you love the taste of chai, you'll enjoy this spiced version with coriander, cinnamon, and turmeric.</p>
        <p class="ingredients"><span>Ingredients:&nbsp;</span>Milk, salt, coriander, cardamom, cinnamon, turmeric, honey, vanilla extract, regular oats, oat bran.</p>
    </article>

</div>

</body>
</html>
