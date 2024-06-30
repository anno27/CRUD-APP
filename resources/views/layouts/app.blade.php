<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even) {
          background-color: #dddddd;
        }
        </style>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
 @yield('content')
</body>
</html>
