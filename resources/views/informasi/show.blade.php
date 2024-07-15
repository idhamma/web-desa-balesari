<!-- resources/views/informasi/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $informasi->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold">{{ $informasi->title }}</h1>
        <p class="mt-4 text-gray-600">{{ $informasi->created_at->format('d M Y') }}</p>
        <div class="mt-6">
            <img src="{{ asset('storage/uploads/images/' . $informasi->image) }}" alt="{{ $informasi->title }}" class="w-full h-auto">
        </div>
        <div class="mt-6 text-lg leading-7 text-gray-800">
            {!! nl2br(e($informasi->content)) !!}
        </div>
    </div>
</body>
</html>
