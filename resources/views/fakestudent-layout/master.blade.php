<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<title>@yeild('title')</title>
<!-- định nghĩa phần thay doi de dua style vào -->
@yield('style')
</head>

<body>
<header>
<!-- header se dung chung voi ben list  -->
    <h1 class="header">@yield('header')</h1>
</header>

<main>

@section('sidebar')
    day la phan sidebar cua
@show
</main>
<div class="container">
            @yield('content')
        </div>


<footer>
@yield('footer')
    </footer>
    <!-- định nghĩa phần thay đổi để đưa script vào -->
    @yield('script')
</body>
</html>