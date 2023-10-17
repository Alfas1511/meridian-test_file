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
                    <h4 class="bg-dark p-2 text-light text-center">Assign lead to another executive</h4>
                    <div>
                        <form action="">
                        @csrf
                        <div>
                            <label for="ename">Current Executive:</label>
                            <input type="text" disabled name="ename" id="ename" value="">
                        </div>

                        <div>
                            <label for="cexe">Change Executive:</label>
                            <select name="cexe" id="cexe">
                                
                                
                            </select>

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
    <title>Executive Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>