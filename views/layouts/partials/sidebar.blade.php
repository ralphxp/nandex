<div id="sidebar" class="bg-green-800 w-64 text-white flex flex-col fixed inset-y-0 z-50 transform -translate-x-full transition-transform duration-200 ease-in-out md:relative md:translate-x-0 md:flex md:w-64">
    <div class="p-6 text-center">
        <h1 class="text-3xl text-white font-bold">Dashboard</h1>
        <p class="mt-2 text-gray-200">Welcome, {{__($user->fullname)}}</p>
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
{{-- <script>
    const sidebar = document.getElementById('sidebar');
    const menuBtn = document.getElementById('menu-btn');

    menuBtn.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
    });
</script> --}}