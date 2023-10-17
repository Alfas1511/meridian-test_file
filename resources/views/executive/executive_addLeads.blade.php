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
                    <h2 class="bg-dark p-2 text-light text-center">Add Lead</h2>
                </div>
                <div class="px-6 pb-6 mb-6 text-gray-900">
                   <form action="{{ route('executive.storelead') }}" method="post" class="border p-3">
                    @csrf
                    <div class="form-group ">
                        <label for="lname">Enter lead name: </label>
                        <input type="text" name="lname" id="lname" placeholder="Enter name here.." value="" class="form-control">
                    </div>

                    <div class="form-group mt-4">
                        <label for="option">Select Email or Number: </label>
                        <select name="option" class="col-2 border rounded" id="option" value="">
                            <option value="">Select Option</option>
                            <option value="email">Email</option>
                            <option value="number">Number</option>
                        </select>
                    </div>

                    <div class="form-group mt-4 email">
                        <label for="email">Enter email: </label>
                        <input type="email" name="email" id="email" placeholder="Enter email here.." value="" class="form-control">
                    </div>

                    <div class="form-group mt-4 number">
                        <label for="number" class="col-12">Enter number: </label>
                        <input type="text" name="std" id="std" value="" placeholder="std code" class="border rounded col-1">
                        <input type="text" name="number" id="number" value="" class="border rounded col-10" placeholder="Enter number here..">
                    </div>

                    <div class="form-group mt-4">
                        <label for="category">Enter category: </label>
                        <select class="col-3 border rounded" name="category_name">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                            <option value="{{ $category -> category_name }}">{{ $category -> category_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mt-2">
                        <label for="remark">Enter remarks: </label>
                        <input type="text" name="remark" id="remark" placeholder="Enter remarks here.." value="" class="form-control">
                    </div>

                    <div class="form-group mt-2">
                        <input type="submit" class="btn btn-success" value="ADD">
                    </div>

                   </form>
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
    



    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        jQuery(document).ready(function() {
            jQuery('#option').change(function() {
                let option = jQuery(this).val();

                if (option == 'email') {
                    $('.number').hide();
                    $('.email').show();
                } 
                else if (option == 'number'){
                    $('.number').show();
                    $('.email').hide();
                }
                else{
                    $('.number').hide();
                    $('.email').hide();
                }
            });
        });
    </script>
</body>
</html>