@extends('layouts.layout')


@section('content')
    <div class="flex h-screen">
        <!-- Sidebar -->
        @include('layouts.partials.adminSidebar')

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            @include('layouts.partials.header')

            <!-- Dashboard Content -->
            <main class="flex-1 p-10 text-gray-900">
                <div class="container mx-auto mt-8">
                    <h2 class="text-2xl font-bold mb-6 text-gray-800">Manage Students</h2>
            
                    <!-- Search Bar -->
                    <div class="mb-6 flex justify-end">
                        <input type="text" id="search" placeholder="Search by Name or Matric No." class="p-2 border rounded-lg shadow-sm">
                    </div>
            
                    <!-- Students Table -->
                    <div class="bg-white shadow-md rounded-lg">
                        <table class="min-w-full bg-white">
                            <thead class="bg-green-600 text-white">
                                <tr>
                                    <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm text-left">Full Name</th>
                                    <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm text-left">Email</th>
                                    <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm text-left">Phone Number</th>
                                    <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm text-left">Matric No.</th>
                                    <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm text-left">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                @foreach ($students as $student)
                                <tr>
                                    <td class="py-3 px-4 border-b">@=($student->fullname)@//</td>
                                    <td class="py-3 px-4 border-b">@=($student->email)@//</td>
                                    <td class="py-3 px-4 border-b">@=($student->phone)@//</td>
                                    <td class="py-3 px-4 border-b">@=($student->matric)@//</td>
                                    <td class="py-3 px-4 border-b">
                                        <a href="/student/@=($student->id)@//" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">View</a>
                                        {{-- <button class="bg-red-600 text-white px-4 py-1 rounded-md hover:bg-red-700">Delete</button> --}}
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            
                <script>
                    // Example JavaScript for search functionality
                    document.getElementById('search').addEventListener('input', function(event) {
                        const searchTerm = event.target.value.toLowerCase();
                        const rows = document.querySelectorAll('tbody tr');
            
                        rows.forEach(row => {
                            const name = row.children[0].textContent.toLowerCase();
                            const matricNo = row.children[3].textContent.toLowerCase();
            
                            if (name.includes(searchTerm) || matricNo.includes(searchTerm)) {
                                row.style.display = '';
                            } else {
                                row.style.display = 'none';
                            }
                        });
                    });
                </script>
            </main>
        </div>
    </div>
@endsection
