<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    @include('meta::manager', [
        'title' => 'Amazon Publishing Center',
        'description' =>
            'amazon, amazon publishing center, book writing, book publishing, book marketing, APub, Bestselling books, paperback, ebooks, audiobooks, amazon books, amazon.com, books, book, writing services, book writing services, services, Amazon, Amazon.com, Books, Online Shopping, Book Store, Magazine, Subscription, Music, CDs, DVDs, Videos, Electronics, Video Games, Computers, Cell Phones, Toys, Games, Apparel, Accessories, Shoes, Jewelry, Watches, Office Products, Sports & Outdoors, Sporting Goods, Baby Products, Health, Personal Care, Beauty, Home, Garden, Bed & Bath, Furniture, Tools, Hardware, Vacuums, Outdoor Living, Automotive Parts, Pet Supplies, Broadband, DSL',
        'keywords' =>
            'amazon, amazon publishing center, book writing, book publishing, book marketing, APub, Bestselling books, paperback, ebooks, audiobooks, amazon books, amazon.com, books, book, writing services, book writing services, services, Amazon, Amazon.com, Books, Online Shopping, Book Store, Magazine, Subscription, Music, CDs, DVDs, Videos, Electronics, Video Games, Computers, Cell Phones, Toys, Games, Apparel, Accessories, Shoes, Jewelry, Watches, Office Products, Sports & Outdoors, Sporting Goods, Baby Products, Health, Personal Care, Beauty, Home, Garden, Bed & Bath, Furniture, Tools, Hardware, Vacuums, Outdoor Living, Automotive Parts, Pet Supplies, Broadband, DSL',
    ])

    <!-- Title  -->
    <title>{{ config('app.name') }} - Ghostwriting Services by The Professionals</title>

    <!-- Favicon -->
    <link rel="favicon icon" href="{{ asset('assets/frontend/images/newlogo.png') }}" title="Favicon" sizes="16x16" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/lib/bootstrap.min.css') }} ">


    <link rel="stylesheet" href="{{ asset('assets/frontend/css/lib/swiper.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/lib/jquery.fancybox.css') }}" />

    @if ($agent->isMobile())
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/style2.css') }}" />
    @else
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/style1.css') }}" />
    @endif

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bgswiper-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/lib/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/lib/owl.carousel.min.css') }}">
</head>
