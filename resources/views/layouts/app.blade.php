<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1"
  >
  <meta
    name="csrf-token"
    content="{{ csrf_token() }}"
  >

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link
    rel="preconnect"
    href="https://fonts.bunny.net"
  >
  <link
    href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
    rel="stylesheet"
  />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="{ page: 'sidebar', 'sidebarToggle': false, 'scrollTop': false, panel: false, menu: true }">
  <!-- ===== Page Wrapper Start ===== -->
  <div class="mx-auto flex max-w-screen-xl overflow-hidden">
    @include('layouts.sidebar')

    <!-- ===== Header Start ===== -->
    <main class="z-999 drop-shadow-1 dark:bg-boxdark sticky top-0 flex w-full bg-white dark:drop-shadow-none">
      <div class="shadow-2 flex-grow items-center justify-between px-4 md:px-6 2xl:px-11">
        @include('layouts.header')

        {{ $slot }}

      </div>
    </main>
    <!-- ===== Main Content End ===== -->
  </div>
</body>

</html>
