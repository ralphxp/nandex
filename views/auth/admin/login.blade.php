@extends('layouts.layout')


@section('content')
    <div class="bg-gray-100 flex items-center justify-center h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
            <div class="flex justify-center items-center">
                <div class="h-28 w-28 bg-gray-300 rounded-full border">
                    <img src="/public/images/plasu.jpg" alt="plasu logo" class="h-full w-full rounded-full">
                </div>
            </div>
            
            <h2 class="text-2xl font-bold mb-6 text-center text-green-900">Login</h2>
            <form action="" method="post">
                
                <div class="mb-6">
                    <label for="password" class="block text-green-900">Hardware Access Token</label>
                    <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring-2 focus:ring-green-400">
                </div>
                <div class="flex items-center justify-between mb-4">
                    <label class="flex items-center">
                        <input type="checkbox" class="form-checkbox text-green-500">
                        <span class="ml-2 text-green-900">Remember me</span>
                    </label>
                    <a href="#" class="text-green-500 hover:underline">Forgot Password?</a>
                </div>
                <button type="submit" class="w-full bg-green-500 text-white p-2 rounded-md hover:bg-green-600">Login</button>
            </form>
            {{-- <p class="text-center text-green-900 mt-6">Don't have an account? <a href="/register" class="text-green-500 hover:underline">Sign up</a></p> --}}
        </div>
    </div>
@endsection