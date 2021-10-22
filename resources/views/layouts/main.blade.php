<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | MyCatShop</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="shortcut icon" href="css/">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css">
    <link rel="stylesheet" href="css/search-icon.css">
    <link rel="stylesheet" href="css/cart-icon.css">
    <link rel="stylesheet" href="css/navbar.css">

    <style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    .col {
        color: black;
    }

    .col:hover {
        color: inherit;
    }

    h2 {
        font-weight: bold;
        color: #C8A2C8;
    }

    a:hover {
        color: inherit;
    }
    </style>

    <!-- Start of Async Drift Code -->
    <script>
    "use strict";

    ! function() {
        var t = window.driftt = window.drift = window.driftt || [];
        if (!t.init) {
            if (t.invoked) return void(window.console && console.error && console.error(
                "Drift snippet included twice."));
            t.invoked = !0, t.methods = ["identify", "config", "track", "reset", "debug", "show", "ping", "page",
                    "hide", "off", "on"
                ],
                t.factory = function(e) {
                    return function() {
                        var n = Array.prototype.slice.call(arguments);
                        return n.unshift(e), t.push(n), t;
                    };
                }, t.methods.forEach(function(e) {
                    t[e] = t.factory(e);
                }), t.load = function(t) {
                    var e = 3e5,
                        n = Math.ceil(new Date() / e) * e,
                        o = document.createElement("script");
                    o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src =
                        "https://js.driftt.com/include/" + n + "/" + t + ".js";
                    var i = document.getElementsByTagName("script")[0];
                    i.parentNode.insertBefore(o, i);
                };
        }
    }();
    drift.SNIPPET_VERSION = '0.3.1';
    drift.load('kmeys6u4ivwt');
    </script>
    <!-- End of Async Drift Code -->

</head>

<body>
    {{-- navbar --}}
    @include('partial/navbar')

    {{-- konten --}}
    <div class="container" style="margin-top: 30px;">
           @yield('container-isi')
    </div>

    {{-- footer --}}
    @include('partial/footer')
</body>

</html>