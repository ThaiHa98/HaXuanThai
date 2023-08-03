<!DOCTYPE html>
<html>
<head>
    <title>Your Website</title>
    <!-- Bổ sung các tệp CSS và JavaScript -->
    <!-- Ví dụ: Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
@include('layouts.header')

<div class="container">
    @yield('content')
</div>

@include('layouts.footer')

<!-- Bổ sung các tệp JavaScript -->
<!-- Ví dụ: Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
