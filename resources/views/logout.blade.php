<html>

<head>
    <title>Log Out</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Logout Button -->
    <a href="{{ route('logout')}}" class="btn btn-outline-danger" role="button">Keluar Akun</a>
    <p>
        <a href="{{ url('forgot-password')}}">Lupa Password</a>
    </p>
</body>

</html>
