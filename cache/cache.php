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
    
</head>

    

<body>

    
<div class="flex h-screen overflow-hidden">
    <!-- Sidebar -->
    <div id="sidebar" class="bg-green-800 w-64 text-white flex flex-col fixed inset-y-0 z-50 transform -translate-x-full transition-transform duration-200 ease-in-out md:relative md:translate-x-0 md:flex md:w-64">
    <div class="p-6 text-center">
        <h1 class="text-3xl text-white font-bold">Dashboard</h1>
        <p class="mt-2 text-gray-200">Welcome, <?php  echo $user->fullname;  ?></p>
    </div>
    <nav class="mt-10 flex-col">
        <a href=/#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-green-700">
            <i class="fas fa-home"></i> Dashboard
        </a>
        <a href="/apply" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-green-700">
            <i class="fas fa-bed"></i> My Room Application
        </a>
        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-green-700">
            <i class="fas fa-user"></i> Profile
        </a>
        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-green-700">
            <i class="fas fa-cog"></i> Settings
        </a>
        <form action="/logout" method="post">
            <button type="submit" class="block w-full text-left py-2.5 px-4 rounded transition duration-200 hover:bg-green-700">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </form>
        
    </nav>
</div>
<!-- <script>
    const sidebar = document.getElementById('sidebar');
    const menuBtn = document.getElementById('menu-btn');

    menuBtn.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
    });
</script>  -->

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow-md p-4 flex justify-between items-center">
    <div>
        <button id="menu-btn" class="text-green-500 md:hidden focus:outline-none">
            <i class="fas fa-bars fa-2x"></i>
        </button>
        <h2 class="text-2xl font-semibold inline-block ml-4">Dashboard</h2>
    </div>
    <div class="text-gray-600">
        <?=date('Y-m-d')?>   
        
    </div>
</header>

        <!-- Dashboard Content -->
        <main class="flex-1 p-10 text-gray-900">
            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Example Card 1: Room Application Status -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-4">Room Application Status</h3>
                   
                    <?php if($booking->status == 'pending'): ?> 
                    <p>Your application is currently being processed.</p>
                    <?php else: ?>
                    <p class="text-green-600"> Your application has been approved</p>
                    <p>You have been assigned to: <b class="font-bold">Charlet 0<?=$booking->charlet->number?></b></p>
                   
                    <?php endif; ?>
                    
                    <button onclick="window.print()" class="mt-4 bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600">
                        Print
                    </button>
                </div>
                <!-- Example Card 2: Profile Information -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-4">Profile Information</h3>
                    <p>Name: <?php  echo $user->fullname;  ?></p>
                    <p>Email: <?php  echo $user->email;  ?></p>
                    <button class="mt-4 bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600">
                        Edit Profile
                    </button>
                </div>
                <!-- Example Card 3: Recent Notifications -->
                <div class="bg-white p-6 rounded-lg shadow-lg print:hidden">
                    <h3 class="text-xl font-bold mb-4">Recent Notifications</h3>
                    <ul class="list-disc pl-4">
                        <li>Application deadline approaching.</li>
                        <li>New message from Admin.</li>
                    </ul>
                    <button class="mt-4 bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600">
                        View All
                    </button>
                </div>
            </div>
        </main>
    </div>
</div>



</body>
<!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>  -->


<script>
    const sidebar = document.getElementById('sidebar');
    const menuBtn = document.getElementById('menu-btn');

    menuBtn.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
    });
</script>


    <script type="text/javascript">
    const sidebar = document.getElementById('sidebar');
    const menuBtn = document.getElementById('menu-btn');

    menuBtn.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
    });
</script>
</html>