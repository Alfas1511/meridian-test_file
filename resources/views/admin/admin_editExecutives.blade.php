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
                    <h2 class="p-2 bg-dark text-light">Edit Executives</h2>
                    <div>
                        <form action="{{ route('admin.updateExecutives', $users->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="id" id="name" value="{$users -> id}" class="form-control">
                            </div>

                            <div class="form-group mt-2">
                                <label for="name">Edit name:</label>
                                <input type="text" name="name" id="name" value="{{ $users -> name }}" class="form-control">
                            </div>

                            <div class="form-group mt-2">
                                <label for="email">Edit Email</label>
                                <input type="text" name="email" id="email" value="{{ $users -> email }}" class="form-control">
                            </div>

                            <div class="form-group mt-2">
                                <label for="usertype">Edit Usertype</label>
                                <input type="text" name="usertype" id="usertype" value="{{ $users -> usertype }}" class="form-control" disabled>
                            </div>

                            <div class="form-group mt-2">
                                <label for="status">Status</label>
                                <input type="text" name="status" id="status" value="{{ $users -> status }}" class="form-control" disabled>
                            </div>

                            <div class="form-group mt-2">
                                <input type="submit" value="Update" class="btn btn-success">
                            </div>
                        </form>
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