<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Employee Management System')
    </title>
</head>

<body>

    <nav>
        <a href="{{ route('dashboard') }}">
            Dashboard
        </a>

        <a href="#">
            Departments
        </a>

        <a href="#">
            Employees
        </a>

        <a href="#">
            Attendance
        </a>

        <a href="#">
            Leave Requests
        </a>
    </nav>

    <hr>

    <main>
        @yield('content')
    </main>

</body>

</html>