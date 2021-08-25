<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/lib/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">
    <script src="/js/iconify.min.js"></script>
    <script src="/js/swiper-bundle.min.js"></script>
    <title>
        {{ $title }}
    </title>
</head>

<body>
