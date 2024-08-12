<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLASU || Portal</title>
    <link rel="shortcut icon" href="public/images/plasu.jpg" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <script type="module" defer src="http://localhost:5173/views/js/main.js"></script>
    <link rel="stylesheet" href="public/css/index.css">
    @yield('styles')
</head>

    

<body>

    @yield('content')
</body>
{{-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> --}}
@yield('scripts')

    <script type="text/javascript">
    const sidebar = document.getElementById('sidebar');
    const menuBtn = document.getElementById('menu-btn');

    menuBtn.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
    });
</script>
</html>