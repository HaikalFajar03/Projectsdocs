@extends('layouts.admin')

@section('content')
    <!-- Tambahkan Pemberitahuan Sukses -->
    @if (session('success'))
        <div class="bg-green-500 text-white p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="px-10 text-white">
        <h1 class="text-2xl font-bold">All User</h1>

        <!-- Tambahkan Tombol Create User -->
        <div class="py-5">
            <a href="{{ route('admin.create-user') }}" class="bg-blue-500 px-4 py-2 rounded-md text-white">Create User</a>
        </div>
        
        <div class="relative overflow-x-auto py-5">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="text-center">
                        <th scope="col" class="px-6 py-3">No.</th>
                        <th scope="col" class="px-6 py-3">Name</th>
                        <th scope="col" class="px-6 py-3">Email</th>
                        <th scope="col" class="px-6 py-3">Role</th>
                        <th scope="col" class="px-6 py-3">Created At</th>
                        <th scope="col" class="px-6 py-3">Updated At</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr class="bg-white text-center border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }}
                        </th>
                        <td class="px-6 py-4">{{ $user->name }}</td>
                        <td class="px-6 py-4">{{ $user->email }}</td>
                        <td class="px-6 py-4">{{ $user->role }}</td>
                        <td class="px-6 py-4">{{ $user->created_at }}</td>
                        <td class="px-6 py-4">{{ $user->updated_at }}</td>
                        <td class="px-6 py-4">
                            <a href="{{ route('admin.edit-user', ['user' => $user->id]) }}" class="bg-yellow-500 px-2 py-1 rounded-md text-white">Edit</a>

                            <form action="{{ route('user.destroy', ['id' => $user->id]) }}" method="post" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this user?');">
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
