<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Visclub Moed & Volharding Herenthout</title>
    <meta name="description" content="Website Moed & Volharding, Pauwelstraat 21B, 2270 Herenthout" />
    <meta name="keywords" content="visclub,mvh,Moed,Volharding,pauwelstraat,herenthout">
    <meta name="author" content="Guido Van Hoof">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}" type="text/css" />
</head>
<body>
    <div class="wrapper">
        <div class="top">
            <div class="header">
                <!-- TITLE -->
                <h1><a href="#">Visclub Moed & Volharding</a></h1>
                <h2>Pauwelstraat 21B, Herenthout</h2>
                <div class="clear"></div>
                <!-- END TITLE -->
            </div>
        </div>
        <div class="content">
            <div class="page-content">
                <!-- CONTENT -->
                @yield('content')
                <!-- END CONTENT -->
            </div>
        </div>
        <div class="sidebar">

            <!-- SIDEBAR -->
            <ul>
                <li>
                    <h4>Navigatie</h4>
                    <ul>
                        <li><a href="{{ URL::to('home') }}" title="Home">Home</a></li>
                        <li><a href="{{ URL::to('kalender') }}" title="Kalender">Kalender</a></li>
                        <li><a href="{{ URL::to('uitslagen') }}" title="Uitslagen">Uitslagen</a></li>
                        <li><a href="{{ URL::to('archief') }}" title="Archief">Archief</a></li>
                        <li><a href="{{ URL::to('contact') }}" title="Contact">Contact</a></li>
                    </ul>
                </li>
            </ul>
            <!-- SIDEBAR -->

        </div>

        <div class="clear"></div>

        <p class="footer">
            &nbsp;&nbsp; &copy; Guido Van Hoof. Design: <a href="http://www.spyka.net">Free CSS Templates</a> | <a href="http://www.justfreetemplates.com">Free Web Templates</a>
        </p>
    </div>
</body>
</html>
