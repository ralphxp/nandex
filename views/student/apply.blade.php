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
            <main class="flex-1 overflow-auto p-10 text-gray-900">
                <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
                    <h2 class="text-2xl font-bold text-center text-green-700 mb-6">Charlet Application Form</h2>
                    
                    <form name="room" method="POST">
                        <div class="flex justify-evenly w-full flex-wrap md:flex-nowrap">
                            {{ $n = count($charlets) }}
                            @if ($success)
                                <div class="p-5">
                                    <h1 class="p-5"> Application has been submitted successfully</h1>
                                    <a href="/" class="bg-green-600 hover:bg-green-300 ml-5 text-white py-2 h-max mt-5 px-6">OK</a>
                                </div>
                            @else
                                @if ($n > 0)
                                    <div class="mb-4 mr-0 md:mr-5">
                                        <input type="hidden" name="studentId" value="@=$user->id@//">
                                        <label for="charlet" class="block text-gray-700"></label>
                                        <select id="charletId" name="charlet"
                                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500"
                                            required>
                                            <option value="">SELECT CHARLET</option>
                                            @foreach ($charlets as $charlet)
                                                <option value="@= $charlet->id @/=">Charlet @= $charlet->number @/=
                                                </option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        {{-- <label for="email" class="block text-gray-700">Space</label>
                                    <select id="charlet" name="space" disabled
                                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500"
                                        required>
                                        <option value="">SPACE</option>
                                        @for ($i = 1; $i < 7; $i++)
                                            <option value="@=$i@/=">@=$i@/=</option>
                                        @endfor

                                    </select> --}}
                                    </div>

                                </div>



                                <!-- Additional Comments -->
                                <div class="mb-4">
                                    <label for="comments" class="block text-gray-700">Additional Comments (Optional)</label>
                                    <textarea id="comments" name="comments" rows="4"
                                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500"></textarea>
                                </div>

                                <!-- Submit Button -->
                                <div class="text-center">
                                    <button type="submit"
                                        class="bg-green-600 text-white py-2 px-6 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">Submit
                                        Application <i class="fas fa-user"></i></button>
                                </div>
                            @else
                                <div>
                                    <h1>No Charlet Available</h1>

                                    <a href="/"
                                        class="bg-green-600 hover:bg-green-300 text-white w-max py-2 px-4 h-max m-3 rounded">Go
                                        Back</a>
                                </div>
                            @endif
                        @endif
                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        function setSpace(i) {
            alert(i)
        }
    </script>
@endsection
