<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>e-Munakahat</title>

    <link rel="icon" href="{{ env('APP_URL') . '/img/logo.png' }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ env('APP_URL') . '/img/logo.png' }}" type="image/x-icon">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <link href="{{ env('APP_URL') . '/css/staff-sidebar.css' }}" rel="stylesheet" />
    <link href="{{ env('APP_URL') . '/css/staff-profileList.css' }}" rel="stylesheet" />

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
    <style>
        * {
            font-family: 'Times New Roman', Times, serif
        }
    </style>
</head>

<body>
    <!-- Sidebar  -->
    <div class="container">
        <header class="row justify-content-center">
            <img src="{{ env('APP_URL') . '/img/Header.png' }}" width="100%" style="align-content: center;"
                alt="Header EMS">
        </header>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3 mt-3">
                <div class="row">
                    <label class="col-md-3" for="ID">ID</label>
                    <p class="col-md-8">: {{ Auth::guard('staff')->user()->ic }}</p>
                </div>
                <div class="row">
                    <label class="col-md-3" for="Name">Name</label>
                    <p class="col-md-8">: {{ strtoupper(Auth::guard('staff')->user()->name) }}</p>
                </div>
                <div class="row">
                    <label class="col-md-3" for="Name">Jawatan</label>
                    <p class="col-md-7">: {{ strtoupper(Auth::guard('staff')->user()->position) }}</p>
                </div>
                <nav id="sidebar">

                    <ul class="list-unstyled">
                        <li>
                            <a href="#profile" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle">Profile</a>
                            <ul class="collapse list-unstyled" id="profile">
                                <li>
                                    <a href="{{ route('staff.profile') }}">Profile</a>
                                </li>
                                <li>
                                    <a href="{{ route('staff.staffProfileList') }}">Staff Profile</a>
                                </li>
                                <li>
                                    <a href="{{ route('staff.userProfileList') }}">User Profile</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle">Kebenaran Berkahwin</a>
                            <ul class="collapse list-unstyled" id="homeSubmenu">
                                <li>
                                    <a href="#">Kursus Kahwin</a>
                                </li>
                                <li>
                                    <a href="#">Senarai Pemohon</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle">Pendaftaran Nikah</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                                <li>

                                    <a href="{{ route('staff.manageMarriage') }}">Mohon Pengesahan Nikah</a>
                                    <a href="{{ route('staff.manageValidationMarriage') }}">Senarai Pengesahan
                                        Nikah</a>
                                </li>
                                <li>
                                    <a href="#">Mohon Daftar Nikah</a>
                                </li>
                                <li>
                                    <a href="#">Sijil Dan Kad Nikah</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Semakan Ruju'</a>
                        </li>

                        <li>
                            <a href="#">Aduan/Khidmat Nasihat</a>
                        </li>
                        <li>
                            <a href="#">Insentif</a>
                        </li>


                        <li>
                            <form role="form" method="post" action="{{ route('logout') }}" id="logout-form">
                                @csrf
                                <a id="logoutBtn" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
            <main class="col-md-9">
                @yield('content')
            </main>
        </div>
    </div>


    <!-- jQuery CDN - DataTables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>


    <script>
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#list').DataTable();
        });
    </script>
</body>

</html>
