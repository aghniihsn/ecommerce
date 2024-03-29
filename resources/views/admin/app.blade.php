<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/img/r2.png" type="image">
    @yield('meta')

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <!-- <link href="/sbadmin2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->

    <!-- Custom styles for this template-->
    <!-- <link href="/sbadmin2/css/sb-admin-2.min.css" rel="stylesheet"> -->
    <!-- <link href="/css/app.css" rel="stylesheet"> -->
    <link rel="preload" href="/css/app.css" as="style" onload="this.rel='stylesheet'">
</head>


<body id="page-top" class="bg-gray-50 dark:bg-gray-800 scrollbar scrollbar-w-3 scrollbar-thumb-rounded-[0.25rem] scrollbar-track-slate-200 scrollbar-thumb-gray-400 dark:scrollbar-track-gray-900 dark:scrollbar-thumb-gray-700">
    <!-- Navbar -->
    @yield('navbar')
    <!-- End Navbar -->

    <!-- Sidebar -->
    @yield('sidebar')

    <!-- Page Wrapper -->
    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
        <div id="main-content" class="p-6 relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900 min-h-screen">
            <div class="rounded-md bg-gradient-to-r from-slate-100 to-slate-200 dark:from-slate-900 dark:to-slate-800 text-slate-800 dark:text-slate-100 mb-20 p-6 shadow-xl shadow-slate-200 dark:shadow-slate-900 astro-FBYZQWZ3">
                @yield('content')
            </div>

        </div>
    </div>

    @yield('footer')
    </di>


    <!-- Vendor -->
    <script src="/js/vendor/jquery/jquery.min.js"></script>
    <script src="/js/vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="/js/app.js"></script>

    <script>
        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = documnet.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == '') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }
    </script>

    @stack('js')

</body>

</html>
