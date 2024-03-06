<!DOCTYPE html>
<html lang="en">

<head>
    <title>Student </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    body {
        background-image: url("https://images.unsplash.com/photo-1533628635777-112b2239b1c7?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");
    }

    .sidebar {
        height: 100%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }

    .sidebar a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 20px;
        color: #333;
        display: block;
        transition: 0.3s;
    }

    .sidebar a:hover {
        color: gold;
        background-color: #f1f1f1;
    }

    .sidebar {
        padding: 0;
        top: 50px;
    }

    .container1 {
        margin-top: 10px;
        margin-left: 500px;
    }

    .container {

        background-color: #f8f9fa;
        top: 20px;
    }

    .container {
        top: 10px;
        padding: 20px;
        margin-left: 15%;
        transition: margin-left .5s;
        max-width: 800px;
        background-color: #008080;
        color: white;
    }


    .alert {
        margin-top: 20px;
    }
    </style>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h3 class="w3-bar-item">Menu</h3>
        <a href="{{ url('/homes') }}">Home</a>
        <a href="{{ url('/students') }}">Student</a>
        <a href="{{ url('/teachers') }}">Teacher</a>
        <a href="{{ url('/courses') }}">Course</a>
        <a href="{{ url('/batches') }}">Batch</a>
        <a href="{{ url('/enrollments') }}">Enrollment</a>
        <a href="{{ url('/payments') }}">Payment</a>


    </div>

    <!-- Page Content -->
    <div>

        <div class="container1">
            <h1>Student Management</h1>
        </div>


        <div class="container">
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success')}}
            </div>
            @endif

            @yield('content')


        </div>




    </div>


</body>

</html>