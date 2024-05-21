<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div class="mx-96 mt-20">
        <a href="#" class="py-1.5 px-3 bg-white text-black rounded flex gap-2 justify-center items-center w-1/4 font-inter font-bold">
            <img src="/svg/github.svg" alt="github"> Open In Github
        </a>
        <h1 class="text-2xl mb-10 mt-3">Crud Simple by <span><a href="https://laravel.com">Laravel 11</a></span></h1>
        <div class="w-full flex justify-end mb-5">
            <a href="add" class="btn btn-primary">Add +</a>
        </div>
        <div class="flex w-full overflow-x-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th class="w-1/5">Id</th>
                        <th  class="w-1/5">Name</th>
                        <th  class="w-1/5">Team</th>
                        <th  class="w-1/5">Position</th>
                        <th  class="w-1/5">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $idHome = 1;
                    @endphp
                    @foreach ($data as $item)
                        <tr>
                            <td  class="w-1/5">{{ $idHome++ }}</td>
                            <td  class="w-1/5">{{ $item->name }}</td>
                            <td  class="w-1/5">{{ $item->team }}</td>
                            <td  class="w-1/5">{{ $item->position }}</td>
                            <td  class="w-1/5">
                                <a href="/edit/{{ $item->id }}" class="btn btn-primary"><img src="/svg/pencil.svg" alt="pencil"></a>
                                <a href="/delete/{{ $item->id }}" class="btn btn-error"><img src="/svg/trash-xmark.svg"
                                        alt="pencil"></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
