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
                    <h4 class="bg-dark p-2 text-light text-center">Leads View</h4>
                    <select name="category" id="category" class="col-3 border rounded mb-2">
                        <option value="">Select Category Name</option>
                        @foreach($categories as $category)
                        <option value="{{ $category -> category_name }}">{{ $category -> category_name }}</option>
                        @endforeach
                    </select>

                    <select name="category" id="category" class="col-3 border rounded mb-2">
                        <option value="">Select Executive Name</option>
                        @foreach($users as $user)
                        <option value="{{ $user -> name }}">{{ $user -> name }}</option>
                        @endforeach
                    </select>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Lead Name</th>
                                <th>Email</th>
                                <th>Number</th>
                                <th>Category Name</th>
                                <th>Executive Name</th>
                                <th>Remarks</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($leads as $lead)
                            @foreach ($users as $user)
                            @if ($lead-> user_id == $user -> id )
                            <tr>
                                <th>#</th>
                                <td>{{ $lead -> name }}</td>
                                <td>{{ $lead -> email }}</td>
                                <td>{{ $lead -> number }}</td>
                                <td>{{ $lead -> category_name }}</td>
                                <td>{{ $user -> name }}</td>
                                <td>{{ $lead -> remark }}</td>
                                <td>
                                    <a href="{{ route('admin.changeExecutive', $lead -> user_id) }}">
                                        <button class="btn btn-info btn-sm">Change Executive</button>
                                    </a>
                            </tr>
                            @endif
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
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
    <title>Executive Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

</body>
</html>
