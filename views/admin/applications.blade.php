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
                    <h2 class="text-2xl font-bold mb-6 text-gray-800">View Application</h2>

                    <!-- Application Details -->
                    <div class="bg-white shadow-md rounded-lg mb-6 p-6">
                        <h3 class="text-xl font-bold mb-4">Application Details</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <p class="text-gray-700 capitalize"><strong>Student Name:</strong>
                                    @=$booking->student->fullname@//</p>
                            </div>
                            <div>
                                <p class="text-gray-700"><strong>Matric No.:</strong> @=$booking->student->fullname@//</p>
                            </div>
                            <div>
                                <p class="text-gray-700"><strong>Charlet: </strong>Charlet @=$booking->charlet->number@//
                                </p>
                            </div>
                            <div>
                                <p class="text-gray-700"><strong>Application Status:</strong> @=$booking->status@//</p>
                            </div>
                        </div>
                    </div>

                    <!-- Approval/Rejection Actions -->
                    <div class="bg-white shadow-md rounded-lg p-6">
                        <h3 class="text-xl font-bold mb-4">Actions</h3>
                        <div class="flex space-x-4">

                            <form action="/approve" method="post">
                                <input type="hidden" name="status" value="approved">
                                <input type="hidden" name="id" value="@=$booking->id@//">
                                <button class="bg-green-600 text-white mx-2 px-4 py-2 rounded-md hover:bg-green-700">
                                    Approve</button>
                            </form>

                            <form action="/approve" method="post">
                                <input type="hidden" name="status" value="declined">
                                <input type="hidden" name="id" value="@=$booking->id@//">

                                <button class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">
                                    Reject</button>
                            </form>


                            <a href="/dashboard" class="bg-gray-600 text-white px-4 py-2 rounded-md hover:bg-gray-700">Back
                                to Dashboard</a>
                        </div>
                    </div>

                    <!-- Application History (Optional) -->
                    <div class="bg-white shadow-md rounded-lg mt-6 p-6">
                        <h3 class="text-xl font-bold mb-4">Application History</h3>
                        <table class="min-w-full bg-white">
                            <thead class="bg-green-600 text-white">
                                <tr>
                                    <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm text-left">Date</th>
                                    <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm text-left">Action</th>
                                    <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm text-left">Remarks</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <tr>
                                    <td class="py-3 px-4 border-b">@=$booking->created_at@//</td>
                                    <td class="py-3 px-4 border-b">Application Submitted</td>
                                    <td class="py-3 px-4 border-b">N/A</td>
                                </tr>
                                <!-- Add more rows for application history -->
                            </tbody>
                        </table>
                    </div>
                </div>

            </main>
        </div>
    </div>
@endsection
