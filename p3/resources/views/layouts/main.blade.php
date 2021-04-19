<!doctype html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta charset='UTF-8' />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="/css/dashboard.css" rel="stylesheet" />

    @yield('head')
</head>

<body>
    <div class="grid-container">

        <header>
            <h2>Welcome to your Sales Dashboard</h2>

            <div class="search-container">
                <form method="GET" action="/search.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"> </i></button>
                </form>
            </div>


        </header>

        <nav class="position-fixed">
            <div>Logo</div>
            <div class="nav-links" id="main-links">
                <ul>
                    <li><a href="#">Customers</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                    <li><a href="#">Link 4</a></li>
                </ul>
            </div>

            <div class="nav-links" id="admin-links">
                <ul>
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                    <li><a href="#">Link 4</a></li>
                </ul>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

        <footer class="position-sticky">&#169; Sam Janvey 2021</footer>
    </div>
</body>


</html>
