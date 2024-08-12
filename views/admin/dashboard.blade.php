@extends('layouts.layout')


@section('content')
    <div class="flex h-screen">
        <!-- Sidebar -->
        @include('layouts.partials.adminSidebar')

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            @include('layouts.partials.header')

            <!-- Dashboard Content -->
            <main class="flex-1 p-10 text-gray-900">
                <!-- Dashboard Stats -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold">Total Students</h3>
                        <p class="mt-4 text-3xl font-semibold">@=$students@//</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold">Rooms Available</h3>
                        <p class="mt-4 text-3xl font-semibold">@=$rooms@//</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold">Pending Applications</h3>
                        <p class="mt-4 text-3xl font-semibold">@=$pending@//</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold">Allocated Rooms</h3>
                        <p class="mt-4 text-3xl font-semibold">@=$allocated@//</p>
                    </div>
                </div>

                <!-- Recent Room Applications -->
                <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
                    <h3 class="text-xl font-bold mb-4">Recent Applications</h3>
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="py-2 text-left">Student Name</th>
                                <th class="py-2 text-left">Matric / Jamb No.</th>
                                <th class="py-2 text-left">Charlet</th>
                                <th class="py-2 text-left">Status</th>
                                <th class="py-2 text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $booking)
                                @if ($booking->status == 'pending')
                                    <tr class="bg-orange-50">
                                        <td class="py-2">@=$booking->student->fullname@//</td>
                                        <td class="py-2">@=$booking->student->matric@//</td>
                                        <td class="py-2">@='Charlet 0'.$booking->charlet->number@//</td>
                                        <td class="py-2 text-yellow-600">@=$booking->status@//</td>
                                        <td class="py-2 flex">
                                            <form action="/approve" method="post">
                                                <input type="hidden" name="status" value="approved">
                                                <input type="hidden" name="id" value="@=$booking->id@//">
                                                <button class="bg-green-600 text-white mx-2 px-4 py-1 rounded-md hover:bg-green-700">
                                                    Approve</button>
                                            </form>
                                            
                                            <form action="/approve" method="post">
                                                <input type="hidden" name="status" value="declined">
                                                <input type="hidden" name="id" value="@=$booking->id@//">
                                                
                                                <button
                                                class="bg-red-600 text-white px-4 py-1 rounded-md hover:bg-red-700">
                                                Reject</button>
                                            </form>
                                            
                                        </td>
                                    </tr>
                                
                                @endif

                                @if($booking->status == 'approved')
                                    <tr class="bg-green-50">
                                        <td class="py-2">@=$booking->student->fullname@//</td>
                                        <td class="py-2">@=$booking->student->matric@//</td>
                                        <td class="py-2">@='Charlet'.$booking->charlet->number@//</td>
                                        <td class="py-2 text-green-600">@=$booking->status@//</td>
                                        <td class="py-2">
                                            <a
                                              href="/applications/@=$booking->id@//"   class="bg-gray-600 text-white py-2 px-4 py-1 rounded-md hover:bg-gray-700">View</a>
                                        </td>
                                    </tr>
                                @endif
                                @if($booking->status == 'declined')
                                    <tr class="bg-red-50">
                                        <td class="py-2">@=$booking->student->fullname@//</td>
                                        <td class="py-2">@=$booking->student->matric@//</td>
                                        <td class="py-2">@='Charlet'.$booking->charlet->number@//</td>
                                        <td class="py-2 text-red-600">@=$booking->status@//</td>
                                        <td class="py-2">
                                            <a
                                              href="/applications/@=$booking->id@//"   class="bg-gray-400 text-white py-2 px-4 py-1 rounded-md hover:bg-gray-700">View</a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>

                <!-- Reports Section -->
                {{-- <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold mb-4">Reports</h3>
                <p class="mb-4">Generate and view reports on student room allocations, application statuses, and more.</p>
                <button class="bg-green-600 text-white px-6 py-2 rounded-md hover:bg-green-700">Generate Report</button>
            </div> --}}
            </main>
        </div>
    </div>
@endsection
