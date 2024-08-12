@extends('layouts.layout')

@section('content')
<div class="flex h-screen overflow-hidden">
    <!-- Sidebar -->
    @include('layouts.partials.sidebar')

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <!-- Header -->
        @include('layouts.partials.header')

        <!-- Dashboard Content -->
        <main class="flex-1 p-10 text-gray-900">
            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Example Card 1: Room Application Status -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-4">Room Application Status</h3>
                   
                    @if ($booking->status == 'pending')
                    <p>Your application is currently being processed.</p>
                    @else
                    <p class="text-green-600"> Your application has been approved</p>
                    <p>You have been assigned to: <b class="font-bold">Charlet 0@=$booking->charlet->number@//</b></p>
                   
                    @endif
                    
                    <button onclick="window.print()" class="mt-4 bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600">
                        Print
                    </button>
                </div>
                <!-- Example Card 2: Profile Information -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-4">Profile Information</h3>
                    <p>Name: {{__($user->fullname)}}</p>
                    <p>Email: {{__($user->email)}}</p>
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


@endsection

@section('scripts')

<script>
    const sidebar = document.getElementById('sidebar');
    const menuBtn = document.getElementById('menu-btn');

    menuBtn.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
    });
</script>
@endsection