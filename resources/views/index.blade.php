<!DOCTYPE html>
<html>
<head>
    <title>The volunteers</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('assets/assets/index-b183f78d.css ') }}" rel = "stylesheet">
</head>
<body>
    <div class="container mx-auto py-4">
        <div class="py-4 mb-4">
            <h1 class="text-3xl font-bold text-white text-center bg-purple-800 bebas-neue">Volunteers</h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4chchd gap-4">
            @foreach ($Volunteers as $index => $volunteer)
                <div class="{{ $index % 2 == 0 ? 'light-gray-bg' : 'bg-white' }} shadow-sm p-4 cursor-pointer volunteer">
                    <h5 class="text-lg roboto-medium">{{ $volunteer->first_name }} {{ $volunteer->last_name }}</h5>
                </div>
            @endforeach
        </div>
    </div>

    <script src = "{{ asset('assets/assets/index-5cd66cbd.js') }}"></script>
</body>
</html>
