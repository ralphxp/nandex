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
                <div class="container mx-auto mt-2">
                    <h2 class="text-2xl font-bold mb-6 text-gray-800">View Student</h2>

                    <!-- Student Details -->
                    <div class="bg-white shadow-md rounded-lg mb-6 p-6">
                        <h3 class="text-xl font-bold mb-4">Student Details</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <p class="text-gray-700"><strong>Full Name:</strong> @=($student->fullname)@//</p>
                            </div>

                            <div>
                                <p class="text-gray-700"><strong>Matric No.:</strong> @=($student->matric)@//</p>
                            </div>
                            <div>
                                <p class="text-gray-700"><strong>Email:</strong> @=($student->email)@//</p>
                            </div>
                            <div>
                                <p class="text-gray-700"><strong>Phone Number:</strong> @=($student->phone)@//</p>
                            </div>
                            <div>
                                <p class="text-gray-700"><strong>Faculty:</strong> @=($student->faculty)@//</p>
                            </div>
                            <div>
                                <p class="text-gray-700"><strong>Department:</strong> @=($student->department)@//</p>
                            </div>
                            <div>
                                <p class="text-gray-700"><strong>Course of Study:</strong> @=($student->course)@//</p>
                            </div>
                            <div>
                                <p class="text-gray-700"><strong>Room Allocation Status:</strong> Pending</p>
                            </div>
                        </div>
                    </div>

            

                    <!-- Room Allocation History (Optional) -->
                    <div class="bg-white shadow-md rounded-lg mt-6 p-6">
                        <h3 class="text-xl font-bold mb-4">Room Allocation History</h3>
                        <table class="min-w-full bg-white">
                            <thead class="bg-green-600 text-white">
                                <tr>
                                    <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm text-left">Date</th>
                                    <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm text-left">Room Type</th>
                                    <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm text-left">Status</th>
                                    <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm text-left">Remarks</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <tr>
                                    <td class="py-3 px-4 border-b">@=($student->booking->created_at)@//</td>
                                    <td class="py-3 px-4 border-b">-</td>
                                    <td class="py-3 px-4 border-b text-yellow-600">@=($student->booking->status)@//</td>
                                    <td class="py-3 px-4 border-b">N/A</td>
                                </tr>
                                <!-- Add more rows for room allocation history -->
                            </tbody>
                        </table>
                    </div>
                </div>

            </main>
        </div>
    </div>
@endsection
