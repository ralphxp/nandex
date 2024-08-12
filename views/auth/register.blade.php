@extends('layouts.layout')


@section('styles')
    <style>
        .hidden {
            display: none;
        }

        .previous {
            background-color: rgba(134, 239, 172, 1) !important;
        }

        .active {
            background-color: rgb(51, 131, 81) !important;
        }
    </style>
@endsection

@section('content')
    <div class="bg-gray-100 flex items-center justify-center h-screen">

        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
            <div class="w-full h-2 rounded mb-2 flex justify-center items-center">
                <div class="h-full w-full step-1 mr-1 active  rounded-l"></div>
                <div class="h-full w-full step-2 bg-green-100 "></div>
                <div class="h-full w-full step-3 ml-1 bg-green-100 rounded-r"></div>
            </div>
            <div class="flex justify-center items-center">
                <div class="h-28 w-28 bg-gray-300 rounded-full border">
                    <img src="/public/images/plasu.jpg" alt="plasu logo" class="h-full w-full rounded-full">
                </div>
            </div>

            <h2 class="text-2xl font-bold mb-6 text-center text-green-900">Register now</h2>
            <form id="registrationForm" method="POST" action="">
                <!-- Step 1 -->
                <div id="step1" class="step">
                    <div class="mb-4">
                        <label for="fullname" class="block text-green-900">Full Name</label>
                        <input type="text" id="fullname" required name="fullname"
                            class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring-2 focus:ring-green-400">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-green-900">Email</label>
                        <input type="email" id="email" required name="email"
                            class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring-2 focus:ring-green-400">
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="block text-green-900">Phone Number</label>
                        <input type="text" id="phone" required name="phone"
                            class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring-2 focus:ring-green-400">
                    </div>
                    <button type="button" onclick="nextStep()"
                        class="w-full bg-green-500 text-white p-2 rounded-md hover:bg-green-600">Next</button>
                </div>
                <!-- Step 2 -->
                <div id="step2" class="step hidden">
                    <div class="mb-4">
                        <label for="matric_jamb" class="block text-green-900">Matric/JAMB No.</label>
                        <input type="text" id="matric" required name="matric"
                            class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring-2 focus:ring-green-400">
                    </div>
                    <div class="mb-4">
                        <label for="faculty" class="block text-green-900">Faculty</label>
                        <input type="text" id="faculty" required name="faculty"
                            class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring-2 focus:ring-green-400">
                    </div>
                    <div class="mb-4">
                        <label for="department" class="block text-green-900">Department</label>
                        <input type="text" id="department" required name="department"
                            class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring-2 focus:ring-green-400">
                    </div>
                    <div class="flex justify-between items-center h-max w-full">
                        <button type="button" onclick="prevStep()"
                            class="w-max bg-gray-500 text-white p-2 rounded-md hover:bg-gray-600 mb-2">Previous</button>
                        <button type="button" onclick="nextStep()"
                            class="w-max bg-green-500 text-white p-2 rounded-md hover:bg-green-600">Next</button>
                    </div>
                </div>
                <!-- Step 3 -->
                <div id="step3" class="step hidden">
                    <div class="mb-4">
                        <label for="course" class="block text-green-900">Course of Study</label>
                        <input type="text" id="course" required name="course"
                            class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring-2 focus:ring-green-400">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-green-900">Password</label>
                        <input type="password" id="password" required name="password"
                            class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring-2 focus:ring-green-400">
                    </div>
                    <div class="mb-6">
                        <label for="confirm_password" class="block text-green-900">Confirm Password</label>
                        <input type="password" id="confirm_password" required name="confirm_password"
                            class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring-2 focus:ring-green-400">
                    </div>
                    <div class="flex justify-between items-center w-full">
                        <button type="button" onclick="prevStep()"
                            class="w-max bg-gray-500 text-white p-2 rounded-md hover:bg-gray-600 mb-2">Previous</button>
                        <button type="submit"
                            class="w-max bg-green-500 text-white p-2 rounded-md hover:bg-green-600">Register</button>
                    </div>

                </div>
            </form>
            <p class="text-center text-green-900 mt-6">Already have an account? <a href="/login"
                    class="text-green-500 hover:underline">Login</a></p>
        </div>
    </div>
@endsection


@section('scripts')
    <script>
        let currentStep = 1;

        function showStep(step) {
            document.querySelectorAll('.step').forEach((el) => el.classList.add('hidden'));
            document.getElementById(`step${step}`).classList.remove('hidden');
            if (step == 1) {
                
                document.querySelectorAll('.previous').forEach((e)=>e.classList.remove('active'))
                document.querySelectorAll('.previous').forEach((e)=>e.classList.remove('previous'))
                document.querySelector('step-1').classList.add('active')
                document.querySelector('step-2').classList.add('previous')
            }
            if (step == 2) {
                document.querySelectorAll('.active').forEach((e)=>e.classList.remove('active'))
                document.querySelectorAll('.previous').forEach((e)=>e.classList.remove('previous'))
                document.querySelector('step-1').classList.add('previous')
                document.querySelector('step-2').classList.add('active')
            }
            if (step == 3) {
                document.querySelectorAll('.active').forEach((e)=>e.classList.remove('active'))
                document.querySelectorAll('.previous').forEach((e)=>e.classList.remove('previous'))
                document.querySelector('step-2').classList.add('previous')
                document.querySelector('step-3').classList.add('active')
            }
            
        }

        function nextStep() {
            
            currentStep++;
            showStep(currentStep);
        }

        function prevStep() {
            currentStep--;
            showStep(currentStep);
        }

        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            event.preventDefault();
            event.target.reportValidity();
            event.target.submit();
        });

        // Initialize the form with the first step visible
        showStep(currentStep);
    </script>
@endsection
