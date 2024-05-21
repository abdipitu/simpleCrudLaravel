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
        <h1 class="text-2xl mb-10 text-center">Edit Page</h1>
        <form action="/update/{{ $data->id }}" method="post" class="mx-40 flex flex-col">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="name">Nama</label>
                <input class="border rounded w-full py-2 px-3 text-black dark:text-white leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500" id="name" type="text" placeholder="Nama" name="name" value="{{ $data->name }}" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="team">Team</label>
                <input class="border rounded w-full py-2 px-3 text-black dark:text-white leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500" id="team" type="text" placeholder="Team" name="team" value="{{ $data->team }}" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="position">Position</label>
                <input class="border rounded w-full py-2 px-3 text-black dark:text-white leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500" id="position" type="text" placeholder="Position" name="position" value="{{ $data->position }}" required>
            </div>
            <button class="btn btn-primary mt-5 px-3">Submit</button>
        </form>
    </div>
</body>
</html>