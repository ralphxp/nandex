<div id="sidebar" class="bg-green-800 w-64 text-white flex flex-col fixed inset-y-0 z-50 transform -translate-x-full transition-transform duration-200 ease-in-out md:relative md:translate-x-0 md:flex md:w-64">
    <div class="p-6 text-center">
        <h1 class="text-3xl font-bold text-white">Admin</h1>
    </div>
    <nav class="mt-10 flex-col">
        <a href="/dashboard" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-green-700">
            <i class="fas fa-home"></i> Dashboard
        </a>
        <a href="/students" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-green-700">
            <i class="fas fa-user"></i> Manage Students
        </a>
        <a href="/allocations" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-green-700">
            <i class="fas fa-bed"></i> Room Allocations
        </a>
        {{-- <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-green-700">
            <i class="fas fa-file-alt"></i> Reports
        </a>
        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-green-700">
            <i class="fas fa-cog"></i> Settings
        </a> --}}
        <form action="/logout" method="post">
            <button type="submit" class="block w-full text-left py-2.5 px-4 rounded transition duration-200 hover:bg-green-700">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </form>
    </nav>
</div>
