<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', env('APP_NAME'))</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    @yield('inline-styles')
    <style>
        /* Dropdown Button */
        .dropbtn {
        border: none;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
        position: relative;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content, .dropdown-submenu {
        display: none;
        position: absolute;
        background-color: #ffffff;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content div {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content div:hover, .submenu-option:hover {background-color: #ddd;}

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {display: block;}

        .dropdown-submenu {
        display: none;
        position: absolute;
        left: 100%;
        top: -7px;
        }
        .submenu-container:hover .dropdown-submenu {
        display: block;
        }
    </style>
</head>
<body class="bg-white text-black">
<div id="app">
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
