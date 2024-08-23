@extends('layouts.admin')
@section('content')
    <!-- Success Notification -->
    @if(session('success'))
        <div class="bg-green-500 text-white p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="px-10 text-gray-900">
        <h1 class="text-2xl font-bold text-white">Manage Spaces</h1>
        <div class="relative overflow-x-auto py-5">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="text-center">
                        <th scope="col" class="px-6 py-3">ID</th>
                        <th scope="col" class="px-6 py-3">User Name</th>
                        <th scope="col" class="px-6 py-3">Title</th>
                        <th scope="col" class="px-6 py-3">Image URL</th>
                        <th scope="col" class="px-6 py-3">Genre</th>
                        <th scope="col" class="px-6 py-3">Created At</th>
                        <th scope="col" class="px-6 py-3">Updated At</th>
                        <th scope="col" class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($spaces as $space)
                        <tr class="bg-white text-center border-b dark:bg-gray-800 dark:border-gray-700">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $space->id }}
                            </td>
                            <td class="px-6 py-4">{{ $space->user->name }}</td>
                            <td class="px-6 py-4">{{ $space->title }}</td>
                            <td class="px-6 py-4">{{ $space->image_url }}</td>
                            <td class="px-6 py-4">{{ $space->genre }}</td>
                            <td class="px-6 py-4">{{ $space->created_at }}</td>
                            <td class="px-6 py-4">{{ $space->updated_at }}</td>
                            <td class="px-6 py-4 flex justify-center">
                                <form action="{{ route('admin.spaces_destroy', $space->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this space?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 px-2 py-1 rounded-md text-white">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
