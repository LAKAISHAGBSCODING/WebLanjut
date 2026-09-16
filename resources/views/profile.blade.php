<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white">

    <div class="max-w-sm mx-auto mt-16 px-6">

        {{-- Foto profil placeholder --}}
        <div class="flex justify-center mb-10">
            <svg class="w-40 h-40 text-gray-300 border border-gray-400 rounded-full bg-white"
                 fill="currentColor" viewBox="0 0 24 24">
                <circle cx="12" cy="8" r="4"/>
                <path d="M4 20c0-4 4-6 8-6s8 2 8 6" />
            </svg>
        </div>

        {{-- Info --}}
        <div class="space-y-4">
            <div class="bg-gray-200 rounded-md px-5 py-4 text-center font-medium text-gray-800">
                {{ $nama }}
            </div>
            <div class="bg-gray-200 rounded-md px-5 py-4 text-center font-medium text-gray-800">
                {{ $kelas }}
            </div>
            <div class="bg-gray-200 rounded-md px-5 py-4 text-center font-medium text-gray-800">
                {{ $npm }}
            </div>
        </div>

    </div>

</body>
</html>