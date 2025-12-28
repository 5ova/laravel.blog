<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/admin.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


    <script type="text/javascript"
        src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=Q34VwqdG5iBxSRtpGteBwun_Y9COgE6q3vdGK73CNP1dNUDSYl2Ga5ljj3y2vtL3Ky4Ski2m-xCzoLsY69oKAD-wEnYBeX2nmly98F_iNts"
        charset="UTF-8"></script>
    <link rel="stylesheet" crossorigin="anonymous"
        href="https://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9hZG1pbmx0ZS5pby90aGVtZXMvdjMvcGFnZXMvZXhhbXBsZXMvcmVnaXN0ZXIuaHRtbA" />
    <script data-cfasync="false"
        nonce="31773d8e-5df3-472d-bdf7-5b1d20b2e808">try { (function (w, d) { !function (j, k, l, m) { if (j.zaraz) console.error("zaraz is loaded twice"); else { j[l] = j[l] || {}; j[l].executed = []; j.zaraz = { deferred: [], listeners: [] }; j.zaraz._v = "5874"; j.zaraz._n = "31773d8e-5df3-472d-bdf7-5b1d20b2e808"; j.zaraz.q = []; j.zaraz._f = function (n) { return async function () { var o = Array.prototype.slice.call(arguments); j.zaraz.q.push({ m: n, a: o }) } }; for (const p of ["track", "set", "debug"]) j.zaraz[p] = j.zaraz._f(p); j.zaraz.init = () => { var q = k.getElementsByTagName(m)[0], r = k.createElement(m), s = k.getElementsByTagName("title")[0]; s && (j[l].t = k.getElementsByTagName("title")[0].text); j[l].x = Math.random(); j[l].w = j.screen.width; j[l].h = j.screen.height; j[l].j = j.innerHeight; j[l].e = j.innerWidth; j[l].l = j.location.href; j[l].r = k.referrer; j[l].k = j.screen.colorDepth; j[l].n = k.characterSet; j[l].o = (new Date).getTimezoneOffset(); if (j.dataLayer) for (const t of Object.entries(Object.entries(dataLayer).reduce((u, v) => ({ ...u[1], ...v[1] }), {}))) zaraz.set(t[0], t[1], { scope: "page" }); j[l].q = []; for (; j.zaraz.q.length;) { const w = j.zaraz.q.shift(); j[l].q.push(w) } r.defer = !0; for (const x of [localStorage, sessionStorage]) Object.keys(x || {}).filter(z => z.startsWith("_zaraz_")).forEach(y => { try { j[l]["z_" + y.slice(7)] = JSON.parse(x.getItem(y)) } catch { j[l]["z_" + y.slice(7)] = x.getItem(y) } }); r.referrerPolicy = "origin"; r.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(j[l]))); q.parentNode.insertBefore(r, q) };["complete", "interactive"].includes(k.readyState) ? zaraz.init() : j.addEventListener("DOMContentLoaded", zaraz.init) } }(w, d, "zarazData", "script"); window.zaraz._p = async d$ => new Promise(ea => { if (d$) { d$.e && d$.e.forEach(eb => { try { const ec = d.querySelector("script[nonce]"), ed = ec?.nonce || ec?.getAttribute("nonce"), ee = d.createElement("script"); ed && (ee.nonce = ed); ee.innerHTML = eb; ee.onload = () => { d.head.removeChild(ee) }; d.head.appendChild(ee) } catch (ef) { console.error(`Error executing script: ${eb}\n`, ef) } }); Promise.allSettled((d$.f || []).map(eg => fetch(eg[0], eg[1]))) } ea() }); zaraz._p({ "e": ["(function(w,d){})(window,document)"] }); })(window, document) } catch (e) { throw fetch("/cdn-cgi/zaraz/t"), e; };</script>
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <b>Login</b>
        </div>

        

        <div class="card">
            <div class="card-body register-card-body">


                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{session('error')}}
                    </div>
                @endif

                <p class="login-box-msg">Register a new membership</p>

                <form action="{{route('login')}}" method="post">
                    @csrf

                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Пароль">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-4 offset-8"></div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <script src="{{ asset('assets/admin/js/admin.js') }}"></script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"version":"2024.11.0","token":"2437d112162f4ec4b63c3ca0eb38fb20","server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
        crossorigin="anonymous"></script>
</body>

</html>
