<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- {{ __("You're logged in!") }} --}}
                    <h2 class="p-2 bg-dark text-light">Manage Executives</h2>
                    <div>
                        <table class="table table-striped table-bordered">
                            <thead style="border-bottom: 3px solid green">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $loop -> iteration }}</td>
                                    <td>{{ $user -> name }}</td>
                                    <td>{{ $user -> email }}</td>
                                    <td>{{ $user -> status }}</td>
                                    @if($user->usertype == 'admin')
                                    <td>
                                        <a href=""><button class="btn btn-outline-danger btn-sm" hidden>Change Status</button></a>
                                        <a href=""><button class="btn btn-outline-dark btn-sm" hidden>Edit Details</button></a>
                                    </td>
                                    @else
                                    <td>
                                        <a href="{{ route('admin.changestatus', $user->id) }}"><button class="btn btn-outline-danger btn-sm">Change Status</button></a>
                                        <a href="{{ route('admin.editexecutives', $user->id) }}"><button class="btn btn-outline-dark btn-sm">Edit Details</button></a>
                                    </td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>