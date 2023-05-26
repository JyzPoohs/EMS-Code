<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>e-Munakahat</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{ env('APP_URL') . '/css/sidebar.css' }}" rel="stylesheet" />

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
            <div class="col-md-4 mt-3">
                <div class="row">
                    <label class="col-md-2" for="ID">ID</label>
                    <p class="col-md-4">: {{ auth()->user()->ic }}</p>
                </div>
                <div class="row">
                    <label class="col-md-2" for="Name">Name</label>
                    <p class="col-md-4">: {{ strtoupper(auth()->user()->name) }}</p>
                </div>
                <nav id="sidebar">
                    {{-- <div class="sidebar-header">
                        <h5>e-Munakahat</h5>
                    </div> --}}

                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('user.profile') }}">User Profile</a>
                        </li>
                        <li class="active">
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
                        <li><a href="">Pendaftaran Nikah</a></li>
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
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle">Pages</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                                <li>
                                    <a href="#">Page 1</a>
                                </li>
                                <li>
                                    <a href="#">Page 2</a>
                                </li>
                                <li>
                                    <a href="#">Page 3</a>
                                </li>
                            </ul>
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
            <main class="col-md-8">
                @yield('content')
            </main>
        </div>
    </div>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
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
</body>

</html>
