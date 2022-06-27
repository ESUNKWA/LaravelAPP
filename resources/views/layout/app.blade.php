<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($title)? $title : config('app.name') }}</title>

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    {{-- Menu --}}
    @include('layout.partials.menu')
    @include('layout.partials.breadcrumb',
                                        [
                                            'page' =>$title,
                                            'action' =>$action,
                                        ])

    {{-- <x-breadcrumbComponent></x-breadcrumbComponent> --}}

    {{-- Contenu des pages --}}
    <div class="container mt-3">
        @yield('contenu')
    </div>

    {{-- Pied de page --}}
    @include('layout.partials.footer')

</body>
</html>
