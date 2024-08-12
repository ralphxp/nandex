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
                <h2 class="text-2xl font-bold mb-6 text-gray-800">Room Allocation</h2>

                <!-- Room Allocation Form -->
                <div class="bg-white shadow-md rounded-lg mb-6 p-6">
                    <h3 class="text-xl font-bold mb-4">Assign Room to Student</h3>
                    <form action="" method="POST">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="student" class="block text-sm font-medium text-gray-700">Select Student</label>
                                <select id="student" name="studentId"
                                    class="mt-1 block w-full p-2 border rounded-md shadow-sm">
                                    @foreach ($students as $student)
                                        <option value="@=($student->id)@//">@=($student->fullname)@// (@=($student->matric)@//)</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <input type="hidden" name="space" value="1">
                                <label for="room" class="block text-sm font-medium text-gray-700">Select Room</label>
                                <select id="room" name="charletId"
                                    class="mt-1 block w-full p-2 border rounded-md shadow-sm">
                                    @foreach ($charlets as $charlet)
                                        <option value="@=($charlet->id)@//"> Charlet 0@=($charlet->number)@//</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mt-6">
                            <button type="submit"
                                class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">Assign Room</button>
                        </div>
                    </form>
                </div>

                <!-- Current Allocations Table -->
                <div class="bg-white shadow-md rounded-lg">
                    <h3 class="text-xl font-bold mb-4 p-6">Current Room Allocations</h3>
                    <table class="min-w-full bg-white">
                        <thead class="bg-green-600 text-white">
                            <tr>
                                <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm text-left">Student Name</th>
                                <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm text-left">Matric No.</th>
                                <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm text-left">Charlet</th>
                                {{-- <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm text-left">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            
                            @foreach ($bookings as $book)
                            <tr>
                                <td class="py-3 px-4 border-b">@=($book->student->fullname)@//</td>
                                <td class="py-3 px-4 border-b">@=($book->student->matric)@//</td>
                                <td class="py-3 px-4 border-b">Charlet 0@=($book->charlet->number)@//</td>
                                
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
@endsection
