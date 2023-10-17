<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Executive Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 text-gray-900">
                    <h4 class="bg-dark p-2 text-light text-center">Executive operations</h4>
                    <a href="{{ route('executive.addlead') }}"><button class="btn btn-primary">Add Leads</button></a>
                    <a href=""><button class="btn btn-primary">Duplicated Leads</button></a>
                </div>

                <div class="p-6 text-gray-900">
                    <h4 class="bg-dark p-2 text-light text-center">Leads View</h4>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Lead Name</th>
                                <th>Email</th>
                                <th>Std code</th>
                                <th>Number</th>
                                <th>Category Name</th>
                                <th>Remarks</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($leads as $lead)
                            <tr>
                                <th>{{ $loop -> iteration }}</th>
                                <td>{{ $lead -> name }}</td>
                                <td>{{ $lead -> email }}</td>
                                <td>{{ $lead -> std }}</td>
                                <td>{{ $lead -> number }}</td>
                                <td>{{ $lead -> category_name }}</td>
                                <td>{{ $lead -> remark }}</td>
                                <td>
                                    <a href="{{ route('executive.editpage', $lead -> id) }}">
                                        <button class="btn btn-info btn-sm">Edit Lead</button>
                                    </a>
                                    <a href="{{ route('executive.deletelead', $lead -> id) }}">
                                        <button class="btn btn-sm btn-danger">Delete Lead</button>
                                    </a>
                                </td>
                            </tr>    
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