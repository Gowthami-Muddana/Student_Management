<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Student Management System</title>

    <style>
        /* General Styles */
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

/* Navigation Bar */
.navbar {
    background-color: #f8f9fa;
    border-bottom: 1px solid #e7e7e7;
}

.navbar-brand h2 {
    margin-bottom: 0;
    color: #333;
}

/* Sidebar */
.sidebar {
    padding: 20px;
    border-right: 1px solid #e7e7e7;
}

.sidebar a {
    display: block;
    margin-bottom: 15px;
    text-decoration: none;
    color: #333;
}

.sidebar a:hover {
    color: #666;
}

/* Main Content Area */
.col-md-9 {
    padding: 20px;
}

/* Alert Message */
.alert-success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
    padding: 10px 20px;
    margin-bottom: 20px;
}

/* Additional Responsive Adjustments */
@media (max-width: 768px) {
    .col-md-3 {
        width: 100%;
        float: none;
    }

    .col-md-9 {
        margin-top: 20px;
    }
}
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    
                    
                                 <h2>Student Management</h2> 
                    
                    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button> -->
                </nav>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">

            <div class="sidebar">
                <a href="{{ url('/homes') }}">Home</a>
                <a href="{{ url('/students') }}">Student</a>
                <a href="{{ url('/teachers') }}">Teacher</a>
                <a href="{{ url('/courses') }}">Courses</a>
                <a href="{{ url('/batches') }}">Batches</a>
                <a href="{{ url('/enrollments') }}">Enrollment</a>
                <a href="{{ url('/payments') }}">Payment</a>
            </div>
        </div>
        <div class="cl-md-9">


            @if(Session :: has('success'))
            <div class="alert alert-success">
                {{ Session::get('success')}}
            </div>
            @endif

            @yield('content')


        </div>

    </div>
</body>

</html>