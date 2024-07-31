<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="theme-color" content="#000000" />

    <title>@yield('title') | {{ Utility::getsettings('apps_name') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/front_assets/assets/css/global.css') }}?v=<?= time() ?>" />
    <link rel="stylesheet" href="{{ asset('assets/front_assets/assets/css/global-1.css') }}?v=<?= time() ?>" />
    <link rel="stylesheet" href="{{ asset('assets/front_assets/assets/css/plugins.css') }}?v=<?= time() ?>" />
    <link rel="stylesheet" href="{{ asset('assets/front_assets/assets/css/plugins-1.css') }}?v=<?= time() ?>" />
    <link rel="stylesheet" href="{{ asset('assets/front_assets/assets/css/style-1.css') }}?v=<?= time() ?>" />
    <link rel="stylesheet" href="{{ asset('assets/front_assets/assets/css/style.css') }}?v=<?= time() ?>" />
    @yield('style')
</head>

<body>
