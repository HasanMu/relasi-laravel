<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Admin - @yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="assets/modules/izitoast/css/iziToast.min.css">
    <link rel="stylesheet" href="{{ asset('assets/modules/jqvmap/dist/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/modules/weather-icon/css/weather-icons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/modules/weather-icon/css/weather-icons-wind.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-social/bootstrap-social.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/modules/prism/prism.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/modules/chocolat/dist/css/chocolat.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/modules/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/modules/jquery-selectric/selectric.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/modules/ionicons/css/ionicons.min.css')}}">
    @toastr_css

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css')}}">
    <!-- Start GA -->
    <script async src="'https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA --></head>
<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            {{-- Search Pages --}}
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>
                    <div class="search-element">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                    <div class="search-backdrop"></div>
                    <div class="search-result">
                        <div class="search-header">
                        Histories
                        </div>
                        <div class="search-item">
                        <a href="#">How to hack NASA using CSS</a>
                        <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                        </div>
                        <div class="search-item">
                        <a href="#">Kodinger.com</a>
                        <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                        </div>
                        <div class="search-item">
                        <a href="#">#Stisla</a>
                        <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                        </div>
                        <div class="search-header">
                        Result
                        </div>
                        <div class="search-item">
                        <a href="#">
                            <img class="mr-3 rounded" width="30" src="assets/img/products/product-3-50.png" alt="product">
                            oPhone S9 Limited Edition
                        </a>
                        </div>
                        <div class="search-item">
                        <a href="#">
                            <img class="mr-3 rounded" width="30" src="assets/img/products/product-2-50.png" alt="product">
                            Drone X2 New Gen-7
                        </a>
                        </div>
                        <div class="search-item">
                        <a href="#">
                            <img class="mr-3 rounded" width="30" src="assets/img/products/product-1-50.png" alt="product">
                            Headphone Blitz
                        </a>
                        </div>
                        <div class="search-header">
                        Projects
                        </div>
                        <div class="search-item">
                        <a href="#">
                            <div class="search-icon bg-danger text-white mr-3">
                            <i class="fas fa-code"></i>
                            </div>
                            Stisla Admin Template
                        </a>
                        </div>
                        <div class="search-item">
                        <a href="#">
                            <div class="search-icon bg-primary text-white mr-3">
                            <i class="fas fa-laptop"></i>
                            </div>
                            Create a new Homepage Design
                        </a>
                        </div>
                    </div>
                    </div>
                </form>
                    <ul class="navbar-nav navbar-right">
                        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Messages
                            <div class="float-right">
                                <a href="#">Mark All As Read</a>
                            </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-message">
                            <a href="#" class="dropdown-item dropdown-item-unread">
                                <div class="dropdown-item-avatar">
                                <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle">
                                <div class="is-online"></div>
                                </div>
                                <div class="dropdown-item-desc">
                                <b>Kusnaedi</b>
                                <p>Hello, Bro!</p>
                                <div class="time">10 Hours Ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item dropdown-item-unread">
                                <div class="dropdown-item-avatar">
                                <img alt="image" src="assets/img/avatar/avatar-2.png" class="rounded-circle">
                                </div>
                                <div class="dropdown-item-desc">
                                <b>Dedik Sugiharto</b>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                <div class="time">12 Hours Ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item dropdown-item-unread">
                                <div class="dropdown-item-avatar">
                                <img alt="image" src="assets/img/avatar/avatar-3.png" class="rounded-circle">
                                <div class="is-online"></div>
                                </div>
                                <div class="dropdown-item-desc">
                                <b>Agung Ardiansyah</b>
                                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <div class="time">12 Hours Ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="dropdown-item-avatar">
                                <img alt="image" src="assets/img/avatar/avatar-4.png" class="rounded-circle">
                                </div>
                                <div class="dropdown-item-desc">
                                <b>Ardian Rahardiansyah</b>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                                <div class="time">16 Hours Ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="dropdown-item-avatar">
                                <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle">
                                </div>
                                <div class="dropdown-item-desc">
                                <b>Alfa Zulkarnain</b>
                                <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                <div class="time">Yesterday</div>
                                </div>
                            </a>
                            </div>
                            <div class="dropdown-footer text-center">
                            <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                        </li>
                        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Notifications
                            <div class="float-right">
                                <a href="#">Mark All As Read</a>
                            </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-icons">
                            <a href="#" class="dropdown-item dropdown-item-unread">
                                <div class="dropdown-item-icon bg-primary text-white">
                                <i class="fas fa-code"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                Template update is available now!
                                <div class="time text-primary">2 Min Ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white">
                                <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                                <div class="time">10 Hours Ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="dropdown-item-icon bg-success text-white">
                                <i class="fas fa-check"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                                <div class="time">12 Hours Ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="dropdown-item-icon bg-danger text-white">
                                <i class="fas fa-exclamation-triangle"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                Low disk space. Lets clean it!
                                <div class="time">17 Hours Ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white">
                                <i class="fas fa-bell"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                Welcome to Stisla template!
                                <div class="time">Yesterday</div>
                                </div>
                            </a>
                            </div>
                            <div class="dropdown-footer text-center">
                            <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                        </li>
                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" src="{{ asset('admin/profile/'.Auth::user()->avatar )}}" class="rounded-circle mr-1">
                        <div class="d-sm-none d-lg-inline-block">{{ Auth::user()->name }}</div></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Logged in 5 min ago</div>
                            <a href="{{ route('admin.profile', Auth::user()->id) }}" class="dropdown-item has-icon">
                            <i class="far fa-user"></i> Profile
                            </a>
                            {{--  <a href="features-activities.html" class="dropdown-item has-icon">
                            <i class="fas fa-bolt"></i> Activities
                            </a>  --}}
                            <a href="{{ route('admin.profile', Auth::user()->id) }}" class="dropdown-item has-icon">
                            <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('admin.logout') }}" class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                        </li>
                    </ul>
            </nav>

            {{-- Sidebar --}}
            @include('layouts.admin.sidebar')

            {{-- Main Content --}}
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                    <h1>@yield('header')</h1>
                    <div class="section-header-breadcrumb">

                    </div>
                    </div>
                    @yield('content')
                </section>
            </div>

            {{-- Modal genre --}}
            @include('admin.genre.create')
            @include('admin.genre.edit')
            @include('admin.genre.delete')

            {{-- Modal genre --}}
            @include('admin.category.create')
            @include('admin.category.edit')
            @include('admin.category.delete')

            {{-- Modal days --}}
            @include('admin.day.create')
            @include('admin.day.edit')
            @include('admin.day.delete')

            {{-- Modal Delete Users --}}
            @include('admin.users.delete');

            {{-- Modal Delete Episodes --}}
            @include('admin.episode.delete');

            {{-- Modal Delete Comics --}}
            @include('admin.comics.delete');

            {{-- Footer --}}
            <footer class="main-footer">
                <div class="footer-left">
                Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>

        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/modules/popper.js') }}"></script>
    <script src="{{ asset('assets/modules/tooltip.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/modules/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>


    <!-- JS Libraies -->
    <script src="{{ asset('assets/modules/simple-weather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('assets/modules/chart.min.js') }}"></script>
    <script src="{{ asset('assets/modules/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/modules/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('assets/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
    <script src="{{ asset('assets/modules/izitoast/js/iziToast.min.js')}}"></script>
    <script src="{{ asset('assets/modules/prism/prism.js')}}"></script>
    <script src="{{ asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{ asset('assets/modules/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{ asset('assets/modules/jquery-selectric/jquery.selectric.min.js')}}"></script>
    <script src="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{ asset('assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{ asset('assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{ asset('assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js')}}"></script>
    <script src="{{ asset('assets/modules/upload-preview/assets/js/jquery.uploadPreview.js')}}"></script>
    <script src="{{ asset('assets/modules/sweetalert/sweetalert.min.js')}}"></script>


    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/index-0.js') }}"></script>
    <script src="{{ asset('assets/js/page/modules-toastr.js') }}"></script>
    <script src="{{ asset('assets/js/page/bootstrap-modal.js') }}"></script>
    <script src="{{ asset('assets/js/page/forms-advanced-forms.js')}}"></script>
    <script src="{{ asset('assets/js/page/modules-sweetalert.js')}}"></script>
    <script src="{{ asset('assets/modules/jquery-ui/jquery-ui.min.js')}}"></script>



    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    {{-- JS Modal Genre --}}
    <script>
        $('#edit-genre').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var name = button.data('name')
            var id = button.data('id')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)

            modal.find('#name').val(name)
            modal.find('#id').val(id)
          })
    </script>

    <script>
        $('#delete-genre').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var name = button.data('name')
            var id = button.data('id')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)

            modal.find('#name').val(name)
            modal.find('#id').val(id)
          })
    </script>

    {{-- JS Modal Category --}}
    <script>
        $('#edit-category').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var name = button.data('name')
            var id = button.data('id')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)

            modal.find('#name').val(name)
            modal.find('#id').val(id)
            })
    </script>

    <script>
        $('#delete-category').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var name = button.data('name')
            var id = button.data('id')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)

            modal.find('#name').val(name)
            modal.find('#id').val(id)
            })
    </script>

    {{-- JS Modal Day --}}
    <script>
        $('#edit-day').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var name = button.data('name')
            var id = button.data('id')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)

            modal.find('#name').val(name)
            modal.find('#id').val(id)
          })
    </script>

    <script>
        $('#delete-day').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var name = button.data('name')
            var id = button.data('id')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)

            modal.find('#name').val(name)
            modal.find('#id').val(id)
          })
    </script>

    {{--  Modal Delete Episodes   --}}
    <script>
        $('#delete-episode').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var name = button.data('name')
            var id = button.data('id')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)

            modal.find('#name').val(name)
            modal.find('#id').val(id)
          })
    </script>

    <script>
        $('#delete-user').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var name = button.data('name')
            var id = button.data('id')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)

            modal.find('#name').val(name)
            modal.find('#id').val(id)
          })
    </script>

    <script>
        $('#delete-comic').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var name = button.data('name')
            var id = button.data('id')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)

            modal.find('#name').val(name)
            modal.find('#id').val(id)
          })
    </script>

    <script>
            inputBox = document.getElementById("cover"); // Mengambil elemen tempat Input gambar

            inputBox.addEventListener('change',function(input){ // Jika tempat Input Gambar berubah

             var box = document.getElementById("cover_preview"); // mengambil elemen cover_preview
             var img = input.target.files; // mengambil gambar

             var reader = new FileReader(); // memanggil pembaca file/gambar
             reader.onload = function(e){ // ketika sudah ada
              box.setAttribute('src',e.target.result); // membuat alamat gambar
             }
             reader.readAsDataURL(img[0]); // menampilkan gambar
            }
           );
    </script>

    <script>
            inputBox = document.getElementById("thumbnail"); // Mengambil elemen tempat Input gambar

            inputBox.addEventListener('change',function(input){ // Jika tempat Input Gambar berubah

             var box = document.getElementById("thumbnail_preview"); // mengambil elemen cover_preview
             var img = input.target.files; // mengambil gambar

             var reader = new FileReader(); // memanggil pembaca file/gambar
             reader.onload = function(e){ // ketika sudah ada
              box.setAttribute('src',e.target.result); // membuat alamat gambar
             }
             reader.readAsDataURL(img[0]); // menampilkan gambar
            }
           );
    </script>

    <script>
            inputBox = document.getElementById("avatar"); // Mengambil elemen tempat Input gambar

            inputBox.addEventListener('change',function(input){ // Jika tempat Input Gambar berubah

             var box = document.getElementById("avatar_preview"); // mengambil elemen cover_preview
             var img = input.target.files; // mengambil gambar

             var reader = new FileReader(); // memanggil pembaca file/gambar
             reader.onload = function(e){ // ketika sudah ada
              box.setAttribute('src',e.target.result); // membuat alamat gambar
             }
             reader.readAsDataURL(img[0]); // menampilkan gambar
            }
           );
    </script>
</body>
@toastr_js
@toastr_render
</html>
