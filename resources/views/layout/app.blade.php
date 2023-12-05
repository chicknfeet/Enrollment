<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<style>
    body{
        margin: 0;
        padding: 0;
    }

    nav{
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #fff;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .nav{
        display: flex;
        justify-content: right;
        padding-right: 50px;
    }

    .nav li{
        list-style: none;
        position: relative;
        display: inline-block;
    }

    .nav li a{
        color: #000000;
        text-decoration: none;
        padding: 10px 15px;
        display: block;
    }

    .nav li a:hover{
        color: #1877F2;
    }

    .nav li::after{
        content: '';
        height: 3px;
        width: 0;
        background-color: #1877F2;
        position: absolute;
        bottom: 0;
        left: 15%;
        transition: 0.5s;
    }

    .nav li:hover::after{
        width: 70%;
    }

    .logo{
        padding-left: 3rem;
        color: #F86F03;
    }
    
</style>

<body>
    <header>
        <nav>
            <div class="logo">ENROLLMENT</div>
            <div class="nav">
                <ul>
                    <li><a href="{{ route('enrollment') }}">Enrollment</a></li>
                </ul>
            </div>
        </nav>
    </header>

    @yield('content')
</body>
</html>