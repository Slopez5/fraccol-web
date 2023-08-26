<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css?v=3.2.0')}}">
    <script defer="" referrerpolicy="origin"
        src="/cdn-cgi/zaraz/s.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyQWRtaW5MVEUlMjAzJTIwJTdDJTIwTG9nJTIwaW4lMjIlMkMlMjJ4JTIyJTNBMC41NTYxODAzNTMxOTA5NzAxJTJDJTIydyUyMiUzQTE1MTIlMkMlMjJoJTIyJTNBOTgyJTJDJTIyaiUyMiUzQTc0OCUyQyUyMmUlMjIlM0ExMjM5JTJDJTIybCUyMiUzQSUyMmh0dHBzJTNBJTJGJTJGYWRtaW5sdGUuaW8lMkZ0aGVtZXMlMkZ2MyUyRnBhZ2VzJTJGZXhhbXBsZXMlMkZsb2dpbi5odG1sJTIyJTJDJTIyciUyMiUzQSUyMiUyMiUyQyUyMmslMjIlM0EzMCUyQyUyMm4lMjIlM0ElMjJVVEYtOCUyMiUyQyUyMm8lMjIlM0EzNjAlMkMlMjJxJTIyJTNBJTVCJTVEJTdE">
    </script>
    <script nonce="ab67c3da-bb64-45c8-bd51-5d161b6d35c3">
        (function(w, d) {
            ! function(U, V, W, X) {
                U[W] = U[W] || {};
                U[W].executed = [];
                U.zaraz = {
                    deferred: [],
                    listeners: []
                };
                U.zaraz.q = [];
                U.zaraz._f = function(Y) {
                    return async function() {
                        var Z = Array.prototype.slice.call(arguments);
                        U.zaraz.q.push({
                            m: Y,
                            a: Z
                        })
                    }
                };
                for (const $ of ["track", "set", "debug"]) U.zaraz[$] = U.zaraz._f($);
                U.zaraz.init = () => {
                    var ba = V.getElementsByTagName(X)[0],
                        bb = V.createElement(X),
                        bc = V.getElementsByTagName("title")[0];
                    bc && (U[W].t = V.getElementsByTagName("title")[0].text);
                    U[W].x = Math.random();
                    U[W].w = U.screen.width;
                    U[W].h = U.screen.height;
                    U[W].j = U.innerHeight;
                    U[W].e = U.innerWidth;
                    U[W].l = U.location.href;
                    U[W].r = V.referrer;
                    U[W].k = U.screen.colorDepth;
                    U[W].n = V.characterSet;
                    U[W].o = (new Date).getTimezoneOffset();
                    if (U.dataLayer)
                        for (const bg of Object.entries(Object.entries(dataLayer).reduce(((bh, bi) => ({
                                ...bh[1],
                                ...bi[1]
                            })), {}))) zaraz.set(bg[0], bg[1], {
                            scope: "page"
                        });
                    U[W].q = [];
                    for (; U.zaraz.q.length;) {
                        const bj = U.zaraz.q.shift();
                        U[W].q.push(bj)
                    }
                    bb.defer = !0;
                    for (const bk of [localStorage, sessionStorage]) Object.keys(bk || {}).filter((bm => bm
                        .startsWith("_zaraz_"))).forEach((bl => {
                        try {
                            U[W]["z_" + bl.slice(7)] = JSON.parse(bk.getItem(bl))
                        } catch {
                            U[W]["z_" + bl.slice(7)] = bk.getItem(bl)
                        }
                    }));
                    bb.referrerPolicy = "origin";
                    bb.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(U[W])));
                    ba.parentNode.insertBefore(bb, ba)
                };
                ["complete", "interactive"].includes(V.readyState) ? zaraz.init() : U.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>

<body class="login-page" style="min-height: 496.797px;">
    <div class="login-box">
        <div class="login-logo">
            <a href="#">Inmobiliarias</a>
        </div>

        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Iniciar sesión</p>
                <form action="{{ route('admin.store.login') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Correo">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="contraseña">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
                        </div>
                    </div>
                </form>
                <div class="social-auth-links text-center mb-3">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div>

                <p class="mb-1">
                    <a href="#">Olvide mi contraseña</a>
                </p>
                <p class="mb-0">
                    <a href="#" class="text-center">Registrarme</a>
                </p>
            </div>

        </div>
    </div>


    <script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('adminlte/dist/js/adminlte.min.js?v=3.2.0')}}"></script>


</body>

</html>
