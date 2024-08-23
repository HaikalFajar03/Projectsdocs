@extends('layouts.admin')

@section('content')
<div class="px-10 text-white">
    <h1 class="text-2xl font-bold">Edit User</h1>

    <!-- Form untuk mengedit user -->
    <form method="POST" action="{{ route('admin.update-user', ['user' => $user->id]) }}" class="py-5">
        @csrf
        @method('PUT')

        <!-- Name -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-white">Name</label>
            <input id="name" class="block mt-1 w-full bg-blue-500 text-white border border-gray-600 rounded-md focus:border-blue-700 focus:ring focus:ring-blue-200 focus:ring-opacity-50" type="text" name="name" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" />
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Email Address -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-white">Email</label>
            <input id="email" class="block mt-1 w-full bg-blue-500 text-white border border-gray-600 rounded-md focus:border-blue-700 focus:ring focus:ring-blue-200 focus:ring-opacity-50" type="email" name="email" value="{{ old('email', $user->email) }}" required autocomplete="username" />
            @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-white">Password</label>
            <input id="password" class="block mt-1 w-full bg-blue-500 text-white border border-gray-600 rounded-md focus:border-blue-700 focus:ring focus:ring-blue-200 focus:ring-opacity-50" type="password" name="password" autocomplete="new-password" />
            @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
            <small class="text-gray-400">Leave blank if you don't want to change the password</small>
        </div>

        <!-- Confirm Password -->
        <div class="mb-4">
            <label for="password_confirmation" class="block text-sm font-medium text-white">Confirm Password</label>
            <input id="password_confirmation" class="block mt-1 w-full bg-blue-500 text-white border border-gray-600 rounded-md focus:border-blue-700 focus:ring focus:ring-blue-200 focus:ring-opacity-50" type="password" name="password_confirmation" autocomplete="new-password" />
            @error('password_confirmation')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <button type="submit" class="bg-red-500 px-4 py-2 rounded-md text-white">Update User</button>
        </div>
    </form>
</div>
@endsection
