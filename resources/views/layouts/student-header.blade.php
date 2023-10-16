<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>School</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ url('/') }}/public/student/vendors/feather/feather.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/student/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/student/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet"
        href="{{ url('/') }}/public/student/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/student/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/public/student/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ url('/') }}/public/student/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon"
        href="{{ url('/') }}/public/student/{{ url('/') }}/public/student/images/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
    <link rel="stylesheet" href="{{ url('/') }}/public/student/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/student/dist/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/student/dist/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/student/dist/css/buttons.bootstrap4.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>




    <style>
    
        @media (max-width: 991px) {


          .navbar .navbar-brand-wrapper .brand-logo-mini img {
            width: 120px;
            max-width: 100%;
            margin: auto;
        }

            .navbar .navbar-menu-wrapper {
                width: 100px !important;
                padding-left: 15px;
                padding-right: 11px;
            }

            .navbar .navbar-brand-wrapper .brand-logo-mini {
                padding-left: 80px;
                text-align: center;
            }

            .navbar .navbar-brand-wrapper .navbar-brand img {
                max-width: 120px !important;
                height: 34px;
                margin: auto;
                vertical-align: middle;
            }

        }
    </style>




    <style>
        .img-responsive,
        .thumbnail a>img,
        .thumbnail>img {
            display: block;
            max-width: 100%;
            height: auto;
        }

        .profile-user-img {
            margin: 15px auto;
            width: 100px;
            padding: 3px;
            border: 3px solid #d2d6de;
        }

        .img-circle {
            border-radius: 50%;
        }

        .profile-username {
            font-size: 21px;
            margin-top: 5px;
        }

        .list-group-unbordered>.list-group-item {
            border-left: 0;
            border-radius: 0;
            border-right: 0;
            padding-left: 0;
            padding-right: 0;
        }

        .dashboard .activity {
            font-size: 14px;
        }

        .content-wrapper {
            padding: 1.375rem 1.375rem !important;
            background: #F5F7FF;
        }

        .tab-content {
            border: 0;
            border-top: 0;
        }

        .table td {
            border-top: 0;
        }

        .table {
            margin-bottom: 0;
        }

        .card {
            box-shadow: none;
        }

        .sidebar .nav .nav-item .nav-link i.menu-icon {
            font-size: 1rem;
            line-height: 1;
            margin-right: 1rem;
            /* color: #6C7383; */
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="{{ route('Student.Home') }}"><img
                        src="{{ url('public/logobt.png') }}" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="{{ route('Student.Home') }}"><img
                        src="{{ url('public/logobt.png') }}" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                <span class="input-group-text" id="search">
                                    <i class="icon-search"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now"
                                aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-toggle="dropdown">
                            <i class="icon-bell mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="ti-info-alt mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Just now
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="ti-settings mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Private message
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="ti-user mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        2 days ago
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li> --}}
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="{{ url('/') }}/public/student/male.jpg" alt="profile"
                                style="border: 2px solid #31fc85" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i>
                                Settings
                            </a>
                            <a class="dropdown-item signout-confirm" href="{{ route('Student.SignOut.Data') }}">
                                <i class="ti-power-off text-primary"></i>
                                Sign Out
                            </a>
                        </div>
                    </li>
                    {{-- <li class="nav-item nav-settings d-none d-lg-flex">
                        <a class="nav-link" href="#">
                            <i class="icon-ellipsis"></i>
                        </a>
                    </li> --}}
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>
            <div id="right-sidebar" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section"
                            role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab"
                            aria-controls="chats-section">CHATS</a>
                    </li>
                </ul>
                <div class="tab-content" id="setting-content">
                    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
                        aria-labelledby="todo-section">
                        <div class="add-items d-flex px-3 mb-0">
                            <form class="form w-100">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control todo-list-input"
                                        placeholder="Add To-do">
                                    <button type="submit" class="add btn btn-primary todo-list-add-btn"
                                        id="add-task">Add</button>
                                </div>
                            </form>
                        </div>
                        <div class="list-wrapper px-3">
                            <ul class="d-flex flex-column-reverse todo-list">
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Team review meeting at 3.00 PM
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Prepare for presentation
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Resolve all the low priority tickets due today
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Schedule meeting for next week
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Project review
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                            </ul>
                        </div>
                        <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary mr-2"></i>
                                <span>Feb 11 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                            <p class="text-gray mb-0">The total number of sessions</p>
                        </div>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary mr-2"></i>
                                <span>Feb 7 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                            <p class="text-gray mb-0 ">Call Sarah Graves</p>
                        </div>
                    </div>
                    <!-- To do section tab ends -->
                    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                            <small
                                class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See
                                All</small>
                        </div>
                        <ul class="chat-list">
                            <li class="list active">
                                <div class="profile"><img
                                        src="{{ url('/') }}/public/student/images/faces/face1.jpg"
                                        alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Thomas Douglas</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">19 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img
                                        src="{{ url('/') }}/public/student/images/faces/face2.jpg"
                                        alt="image"><span class="offline"></span></div>
                                <div class="info">
                                    <div class="wrapper d-flex">
                                        <p>Catherine</p>
                                    </div>
                                    <p>Away</p>
                                </div>
                                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                                <small class="text-muted my-auto">23 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img
                                        src="{{ url('/') }}/public/student/images/faces/face3.jpg"
                                        alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Daniel Russell</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">14 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img
                                        src="{{ url('/') }}/public/student/images/faces/face4.jpg"
                                        alt="image"><span class="offline"></span></div>
                                <div class="info">
                                    <p>James Richardson</p>
                                    <p>Away</p>
                                </div>
                                <small class="text-muted my-auto">2 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img
                                        src="{{ url('/') }}/public/student/images/faces/face5.jpg"
                                        alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Madeline Kennedy</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">5 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img
                                        src="{{ url('/') }}/public/student/images/faces/face6.jpg"
                                        alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Sarah Graves</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">47 min</small>
                            </li>
                        </ul>
                    </div>
                    <!-- chat tab ends -->
                </div>
            </div>
            <!-- partial -->





            <style>
                .pace {
                    -webkit-pointer-events: none;
                    pointer-events: none;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    user-select: none;
                }

                .pace-inactive {
                    display: none;
                }

                .pace .pace-progress {
                    background: rgb(112, 255, 124);
                    position: fixed;
                    z-index: 2000;
                    top: 0;
                    left: 0;
                    height: 2px;

                    -webkit-transition: width 1s;
                    -moz-transition: width 1s;
                    -o-transition: width 1s;
                    transition: width 1s;
                }

                .pace .pace-progress-inner {
                    display: block;
                    position: absolute;
                    right: 0px;
                    width: 100px;
                    height: 100%;
                    box-shadow: 0 0 10px rgb(112, 255, 124), 0 0 5px rgb(112, 255, 124);
                    opacity: 1.0;
                    -webkit-transform: rotate(3deg) translate(0px, -4px);
                    -moz-transform: rotate(3deg) translate(0px, -4px);
                    -ms-transform: rotate(3deg) translate(0px, -4px);
                    -o-transform: rotate(3deg) translate(0px, -4px);
                    transform: rotate(3deg) translate(0px, -4px);
                }

                .pace .pace-activity {
                    display: block;
                    position: fixed;
                    z-index: 2000;
                    top: 17px;
                    right: 20px;
                    width: 30px;
                    height: 30px;
                    border: solid 2px transparent;
                    border-top-color: rgb(112, 255, 124);
                    border-left-color: rgb(112, 255, 124);
                    border-radius: 100%;
                    -webkit-animation: pace-spinner 400ms linear infinite;
                    -moz-animation: pace-spinner 400ms linear infinite;
                    -ms-animation: pace-spinner 400ms linear infinite;
                    -o-animation: pace-spinner 400ms linear infinite;
                    animation: pace-spinner 400ms linear infinite;
                }

                @-webkit-keyframes pace-spinner {
                    0% {
                        -webkit-transform: rotate(0deg);
                        transform: rotate(0deg);
                    }

                    100% {
                        -webkit-transform: rotate(360deg);
                        transform: rotate(360deg);
                    }
                }

                @-moz-keyframes pace-spinner {
                    0% {
                        -moz-transform: rotate(0deg);
                        transform: rotate(0deg);
                    }

                    100% {
                        -moz-transform: rotate(360deg);
                        transform: rotate(360deg);
                    }
                }

                @-o-keyframes pace-spinner {
                    0% {
                        -o-transform: rotate(0deg);
                        transform: rotate(0deg);
                    }

                    100% {
                        -o-transform: rotate(360deg);
                        transform: rotate(360deg);
                    }
                }

                @-ms-keyframes pace-spinner {
                    0% {
                        -ms-transform: rotate(0deg);
                        transform: rotate(0deg);
                    }

                    100% {
                        -ms-transform: rotate(360deg);
                        transform: rotate(360deg);
                    }
                }

                @keyframes pace-spinner {
                    0% {
                        transform: rotate(0deg);
                        transform: rotate(0deg);
                    }

                    100% {
                        transform: rotate(360deg);
                        transform: rotate(360deg);
                    }
                }
            </style>


            <script>
                /*! pace 0.5.6 */
                (function() {
                    var a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w, x, y, z, A, B, C, D, E, F, G, H, I,
                        J, K, L, M, N, O, P, Q, R, S, T, U, V, W = [].slice,
                        X = {}.hasOwnProperty,
                        Y = function(a, b) {
                            function c() {
                                this.constructor = a
                            }
                            for (var d in b) X.call(b, d) && (a[d] = b[d]);
                            return c.prototype = b.prototype, a.prototype = new c, a.__super__ = b.prototype, a
                        },
                        Z = [].indexOf || function(a) {
                            for (var b = 0, c = this.length; c > b; b++)
                                if (b in this && this[b] === a) return b;
                            return -1
                        };
                    for (t = {
                            catchupTime: 500,
                            initialRate: .03,
                            minTime: 500,
                            ghostTime: 500,
                            maxProgressPerFrame: 10,
                            easeFactor: 1.25,
                            startOnPageLoad: !0,
                            restartOnPushState: !0,
                            restartOnRequestAfter: 500,
                            target: "body",
                            elements: {
                                checkInterval: 100,
                                selectors: ["body"]
                            },
                            eventLag: {
                                minSamples: 10,
                                sampleCount: 3,
                                lagThreshold: 3
                            },
                            ajax: {
                                trackMethods: ["GET"],
                                trackWebSockets: !0,
                                ignoreURLs: []
                            }
                        }, B = function() {
                            var a;
                            return null != (a = "undefined" != typeof performance && null !== performance && "function" ==
                                typeof performance.now ? performance.now() : void 0) ? a : +new Date
                        }, D = window.requestAnimationFrame || window.mozRequestAnimationFrame || window
                        .webkitRequestAnimationFrame || window.msRequestAnimationFrame, s = window.cancelAnimationFrame ||
                        window.mozCancelAnimationFrame, null == D && (D = function(a) {
                            return setTimeout(a, 50)
                        }, s = function(a) {
                            return clearTimeout(a)
                        }), F = function(a) {
                            var b, c;
                            return b = B(), (c = function() {
                                var d;
                                return d = B() - b, d >= 33 ? (b = B(), a(d, function() {
                                    return D(c)
                                })) : setTimeout(c, 33 - d)
                            })()
                        }, E = function() {
                            var a, b, c;
                            return c = arguments[0], b = arguments[1], a = 3 <= arguments.length ? W.call(arguments, 2) : [],
                                "function" == typeof c[b] ? c[b].apply(c, a) : c[b]
                        }, u = function() {
                            var a, b, c, d, e, f, g;
                            for (b = arguments[0], d = 2 <= arguments.length ? W.call(arguments, 1) : [], f = 0, g = d
                                .length; g > f; f++)
                                if (c = d[f])
                                    for (a in c) X.call(c, a) && (e = c[a], null != b[a] && "object" == typeof b[a] && null !=
                                        e && "object" == typeof e ? u(b[a], e) : b[a] = e);
                            return b
                        }, p = function(a) {
                            var b, c, d, e, f;
                            for (c = b = 0, e = 0, f = a.length; f > e; e++) d = a[e], c += Math.abs(d), b++;
                            return c / b
                        }, w = function(a, b) {
                            var c, d, e;
                            if (null == a && (a = "options"), null == b && (b = !0), e = document.querySelector("[data-pace-" +
                                    a + "]")) {
                                if (c = e.getAttribute("data-pace-" + a), !b) return c;
                                try {
                                    return JSON.parse(c)
                                } catch (f) {
                                    return d = f, "undefined" != typeof console && null !== console ? console.error(
                                        "Error parsing inline pace options", d) : void 0
                                }
                            }
                        }, g = function() {
                            function a() {}
                            return a.prototype.on = function(a, b, c, d) {
                                var e;
                                return null == d && (d = !1), null == this.bindings && (this.bindings = {}), null == (e =
                                    this.bindings)[a] && (e[a] = []), this.bindings[a].push({
                                    handler: b,
                                    ctx: c,
                                    once: d
                                })
                            }, a.prototype.once = function(a, b, c) {
                                return this.on(a, b, c, !0)
                            }, a.prototype.off = function(a, b) {
                                var c, d, e;
                                if (null != (null != (d = this.bindings) ? d[a] : void 0)) {
                                    if (null == b) return delete this.bindings[a];
                                    for (c = 0, e = []; c < this.bindings[a].length;) e.push(this.bindings[a][c].handler ===
                                        b ? this.bindings[a].splice(c, 1) : c++);
                                    return e
                                }
                            }, a.prototype.trigger = function() {
                                var a, b, c, d, e, f, g, h, i;
                                if (c = arguments[0], a = 2 <= arguments.length ? W.call(arguments, 1) : [], null != (g =
                                        this.bindings) ? g[c] : void 0) {
                                    for (e = 0, i = []; e < this.bindings[c].length;) h = this.bindings[c][e], d = h
                                        .handler, b = h.ctx, f = h.once, d.apply(null != b ? b : this, a), i.push(f ? this
                                            .bindings[c].splice(e, 1) : e++);
                                    return i
                                }
                            }, a
                        }(), null == window.Pace && (window.Pace = {}), u(Pace, g.prototype), C = Pace.options = u({}, t, window
                            .paceOptions, w()), T = ["ajax", "document", "eventLag", "elements"], P = 0, R = T.length; R >
                        P; P++) J = T[P], C[J] === !0 && (C[J] = t[J]);
                    i = function(a) {
                        function b() {
                            return U = b.__super__.constructor.apply(this, arguments)
                        }
                        return Y(b, a), b
                    }(Error), b = function() {
                        function a() {
                            this.progress = 0
                        }
                        return a.prototype.getElement = function() {
                            var a;
                            if (null == this.el) {
                                if (a = document.querySelector(C.target), !a) throw new i;
                                this.el = document.createElement("div"), this.el.className = "pace pace-active",
                                    document.body.className = document.body.className.replace(/pace-done/g, ""),
                                    document.body.className += " pace-running", this.el.innerHTML =
                                    '<div class="pace-progress">\n  <div class="pace-progress-inner"></div>\n</div>\n<div class="pace-activity"></div>',
                                    null != a.firstChild ? a.insertBefore(this.el, a.firstChild) : a.appendChild(this
                                        .el)
                            }
                            return this.el
                        }, a.prototype.finish = function() {
                            var a;
                            return a = this.getElement(), a.className = a.className.replace("pace-active", ""), a
                                .className += " pace-inactive", document.body.className = document.body.className
                                .replace("pace-running", ""), document.body.className += " pace-done"
                        }, a.prototype.update = function(a) {
                            return this.progress = a, this.render()
                        }, a.prototype.destroy = function() {
                            try {
                                this.getElement().parentNode.removeChild(this.getElement())
                            } catch (a) {
                                i = a
                            }
                            return this.el = void 0
                        }, a.prototype.render = function() {
                            var a, b;
                            return null == document.querySelector(C.target) ? !1 : (a = this.getElement(), a.children[0]
                                .style.width = "" + this.progress + "%", (!this.lastRenderedProgress || this
                                    .lastRenderedProgress | 0 !== this.progress | 0) && (a.children[0].setAttribute(
                                        "data-progress-text", "" + (0 | this.progress) + "%"), this.progress >=
                                    100 ? b = "99" : (b = this.progress < 10 ? "0" : "", b += 0 | this.progress), a
                                    .children[0].setAttribute("data-progress", "" + b)), this.lastRenderedProgress =
                                this.progress)
                        }, a.prototype.done = function() {
                            return this.progress >= 100
                        }, a
                    }(), h = function() {
                        function a() {
                            this.bindings = {}
                        }
                        return a.prototype.trigger = function(a, b) {
                            var c, d, e, f, g;
                            if (null != this.bindings[a]) {
                                for (f = this.bindings[a], g = [], d = 0, e = f.length; e > d; d++) c = f[d], g.push(c
                                    .call(this, b));
                                return g
                            }
                        }, a.prototype.on = function(a, b) {
                            var c;
                            return null == (c = this.bindings)[a] && (c[a] = []), this.bindings[a].push(b)
                        }, a
                    }(), O = window.XMLHttpRequest, N = window.XDomainRequest, M = window.WebSocket, v = function(a, b) {
                        var c, d, e, f;
                        f = [];
                        for (d in b.prototype) try {
                            e = b.prototype[d], f.push(null == a[d] && "function" != typeof e ? a[d] = e : void 0)
                        } catch (g) {
                            c = g
                        }
                        return f
                    }, z = [], Pace.ignore = function() {
                        var a, b, c;
                        return b = arguments[0], a = 2 <= arguments.length ? W.call(arguments, 1) : [], z.unshift("ignore"),
                            c = b.apply(null, a), z.shift(), c
                    }, Pace.track = function() {
                        var a, b, c;
                        return b = arguments[0], a = 2 <= arguments.length ? W.call(arguments, 1) : [], z.unshift("track"),
                            c = b.apply(null, a), z.shift(), c
                    }, I = function(a) {
                        var b;
                        if (null == a && (a = "GET"), "track" === z[0]) return "force";
                        if (!z.length && C.ajax) {
                            if ("socket" === a && C.ajax.trackWebSockets) return !0;
                            if (b = a.toUpperCase(), Z.call(C.ajax.trackMethods, b) >= 0) return !0
                        }
                        return !1
                    }, j = function(a) {
                        function b() {
                            var a, c = this;
                            b.__super__.constructor.apply(this, arguments), a = function(a) {
                                var b;
                                return b = a.open, a.open = function(d, e) {
                                    return I(d) && c.trigger("request", {
                                        type: d,
                                        url: e,
                                        request: a
                                    }), b.apply(a, arguments)
                                }
                            }, window.XMLHttpRequest = function(b) {
                                var c;
                                return c = new O(b), a(c), c
                            };
                            try {
                                v(window.XMLHttpRequest, O)
                            } catch (d) {}
                            if (null != N) {
                                window.XDomainRequest = function() {
                                    var b;
                                    return b = new N, a(b), b
                                };
                                try {
                                    v(window.XDomainRequest, N)
                                } catch (d) {}
                            }
                            if (null != M && C.ajax.trackWebSockets) {
                                window.WebSocket = function(a, b) {
                                    var d;
                                    return d = null != b ? new M(a, b) : new M(a), I("socket") && c.trigger("request", {
                                        type: "socket",
                                        url: a,
                                        protocols: b,
                                        request: d
                                    }), d
                                };
                                try {
                                    v(window.WebSocket, M)
                                } catch (d) {}
                            }
                        }
                        return Y(b, a), b
                    }(h), Q = null, x = function() {
                        return null == Q && (Q = new j), Q
                    }, H = function(a) {
                        var b, c, d, e;
                        for (e = C.ajax.ignoreURLs, c = 0, d = e.length; d > c; c++)
                            if (b = e[c], "string" == typeof b) {
                                if (-1 !== a.indexOf(b)) return !0
                            } else if (b.test(a)) return !0;
                        return !1
                    }, x().on("request", function(b) {
                        var c, d, e, f, g;
                        return f = b.type, e = b.request, g = b.url, H(g) ? void 0 : Pace.running || C
                            .restartOnRequestAfter === !1 && "force" !== I(f) ? void 0 : (d = arguments, c = C
                                .restartOnRequestAfter || 0, "boolean" == typeof c && (c = 0), setTimeout(function() {
                                    var b, c, g, h, i, j;
                                    if (b = "socket" === f ? e.readyState < 2 : 0 < (h = e.readyState) && 4 > h) {
                                        for (Pace.restart(), i = Pace.sources, j = [], c = 0, g = i.length; g >
                                            c; c++) {
                                            if (J = i[c], J instanceof a) {
                                                J.watch.apply(J, d);
                                                break
                                            }
                                            j.push(void 0)
                                        }
                                        return j
                                    }
                                }, c))
                    }), a = function() {
                        function a() {
                            var a = this;
                            this.elements = [], x().on("request", function() {
                                return a.watch.apply(a, arguments)
                            })
                        }
                        return a.prototype.watch = function(a) {
                            var b, c, d, e;
                            return d = a.type, b = a.request, e = a.url, H(e) ? void 0 : (c = "socket" === d ? new m(
                                b) : new n(b), this.elements.push(c))
                        }, a
                    }(), n = function() {
                        function a(a) {
                            var b, c, d, e, f, g, h = this;
                            if (this.progress = 0, null != window.ProgressEvent)
                                for (c = null, a.addEventListener("progress", function(a) {
                                        return h.progress = a.lengthComputable ? 100 * a.loaded / a.total : h.progress +
                                            (100 - h.progress) / 2
                                    }), g = ["load", "abort", "timeout", "error"], d = 0, e = g.length; e > d; d++) b = g[
                                    d], a.addEventListener(b, function() {
                                    return h.progress = 100
                                });
                            else f = a.onreadystatechange, a.onreadystatechange = function() {
                                var b;
                                return 0 === (b = a.readyState) || 4 === b ? h.progress = 100 : 3 === a.readyState && (h
                                    .progress = 50), "function" == typeof f ? f.apply(null, arguments) : void 0
                            }
                        }
                        return a
                    }(), m = function() {
                        function a(a) {
                            var b, c, d, e, f = this;
                            for (this.progress = 0, e = ["error", "open"], c = 0, d = e.length; d > c; c++) b = e[c], a
                                .addEventListener(b, function() {
                                    return f.progress = 100
                                })
                        }
                        return a
                    }(), d = function() {
                        function a(a) {
                            var b, c, d, f;
                            for (null == a && (a = {}), this.elements = [], null == a.selectors && (a.selectors = []), f = a
                                .selectors, c = 0, d = f.length; d > c; c++) b = f[c], this.elements.push(new e(b))
                        }
                        return a
                    }(), e = function() {
                        function a(a) {
                            this.selector = a, this.progress = 0, this.check()
                        }
                        return a.prototype.check = function() {
                            var a = this;
                            return document.querySelector(this.selector) ? this.done() : setTimeout(function() {
                                return a.check()
                            }, C.elements.checkInterval)
                        }, a.prototype.done = function() {
                            return this.progress = 100
                        }, a
                    }(), c = function() {
                        function a() {
                            var a, b, c = this;
                            this.progress = null != (b = this.states[document.readyState]) ? b : 100, a = document
                                .onreadystatechange, document.onreadystatechange = function() {
                                    return null != c.states[document.readyState] && (c.progress = c.states[document
                                        .readyState]), "function" == typeof a ? a.apply(null, arguments) : void 0
                                }
                        }
                        return a.prototype.states = {
                            loading: 0,
                            interactive: 50,
                            complete: 100
                        }, a
                    }(), f = function() {
                        function a() {
                            var a, b, c, d, e, f = this;
                            this.progress = 0, a = 0, e = [], d = 0, c = B(), b = setInterval(function() {
                                var g;
                                return g = B() - c - 50, c = B(), e.push(g), e.length > C.eventLag.sampleCount && e
                                    .shift(), a = p(e), ++d >= C.eventLag.minSamples && a < C.eventLag
                                    .lagThreshold ? (f.progress = 100, clearInterval(b)) : f.progress = 100 * (3 / (
                                        a + 3))
                            }, 50)
                        }
                        return a
                    }(), l = function() {
                        function a(a) {
                            this.source = a, this.last = this.sinceLastUpdate = 0, this.rate = C.initialRate, this.catchup =
                                0, this.progress = this.lastProgress = 0, null != this.source && (this.progress = E(this
                                    .source, "progress"))
                        }
                        return a.prototype.tick = function(a, b) {
                            var c;
                            return null == b && (b = E(this.source, "progress")), b >= 100 && (this.done = !0), b ===
                                this.last ? this.sinceLastUpdate += a : (this.sinceLastUpdate && (this.rate = (b - this
                                        .last) / this.sinceLastUpdate), this.catchup = (b - this.progress) / C
                                    .catchupTime, this.sinceLastUpdate = 0, this.last = b), b > this.progress && (this
                                    .progress += this.catchup * a), c = 1 - Math.pow(this.progress / 100, C.easeFactor),
                                this.progress += c * this.rate * a, this.progress = Math.min(this.lastProgress + C
                                    .maxProgressPerFrame, this.progress), this.progress = Math.max(0, this.progress),
                                this.progress = Math.min(100, this.progress), this.lastProgress = this.progress, this
                                .progress
                        }, a
                    }(), K = null, G = null, q = null, L = null, o = null, r = null, Pace.running = !1, y = function() {
                        return C.restartOnPushState ? Pace.restart() : void 0
                    }, null != window.history.pushState && (S = window.history.pushState, window.history.pushState =
                        function() {
                            return y(), S.apply(window.history, arguments)
                        }), null != window.history.replaceState && (V = window.history.replaceState, window.history
                        .replaceState = function() {
                            return y(), V.apply(window.history, arguments)
                        }), k = {
                        ajax: a,
                        elements: d,
                        document: c,
                        eventLag: f
                    }, (A = function() {
                        var a, c, d, e, f, g, h, i;
                        for (Pace.sources = K = [], g = ["ajax", "elements", "document", "eventLag"], c = 0, e = g
                            .length; e > c; c++) a = g[c], C[a] !== !1 && K.push(new k[a](C[a]));
                        for (i = null != (h = C.extraSources) ? h : [], d = 0, f = i.length; f > d; d++) J = i[d], K
                            .push(new J(C));
                        return Pace.bar = q = new b, G = [], L = new l
                    })(), Pace.stop = function() {
                        return Pace.trigger("stop"), Pace.running = !1, q.destroy(), r = !0, null != o && ("function" ==
                            typeof s && s(o), o = null), A()
                    }, Pace.restart = function() {
                        return Pace.trigger("restart"), Pace.stop(), Pace.start()
                    }, Pace.go = function() {
                        var a;
                        return Pace.running = !0, q.render(), a = B(), r = !1, o = F(function(b, c) {
                            var d, e, f, g, h, i, j, k, m, n, o, p, s, t, u, v;
                            for (k = 100 - q.progress, e = o = 0, f = !0, i = p = 0, t = K.length; t > p; i = ++p)
                                for (J = K[i], n = null != G[i] ? G[i] : G[i] = [], h = null != (v = J.elements) ?
                                    v : [J], j = s = 0, u = h.length; u > s; j = ++s) g = h[j], m = null != n[j] ?
                                    n[j] : n[j] = new l(g), f &= m.done, m.done || (e++, o += m.tick(b));
                            return d = o / e, q.update(L.tick(b, d)), q.done() || f || r ? (q.update(100), Pace
                                .trigger("done"), setTimeout(function() {
                                    return q.finish(), Pace.running = !1, Pace.trigger("hide")
                                }, Math.max(C.ghostTime, Math.max(C.minTime - (B() - a), 0)))) : c()
                        })
                    }, Pace.start = function(a) {
                        u(C, a), Pace.running = !0;
                        try {
                            q.render()
                        } catch (b) {
                            i = b
                        }
                        return document.querySelector(".pace") ? (Pace.trigger("start"), Pace.go()) : setTimeout(Pace.start,
                            50)
                    }, "function" == typeof define && define.amd ? define(function() {
                        return Pace
                    }) : "object" == typeof exports ? module.exports = Pace : C.startOnPageLoad && Pace.start()
                }).call(this);
            </script>
