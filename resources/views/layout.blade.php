<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Job Application Portal</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans">
    <nav class="bg-white shadow p-4 mb-6">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-xl font-bold text-blue-600">Job Portal</a>

            <div class="space-x-4">
                <a href="{{ route('jobs.index') }}" class="text-gray-700 hover:text-blue-600">Jobs</a>
                <a href="{{ route('jobs.create') }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition">Post Job</a>
                <a href="{{ url('/admin/applications') }}" class="text-gray-700 hover:text-blue-600">Applications</a>
            </div>
        </div>
    </nav>

    <div class="max-w-4xl mx-auto px-4">
        @yield('content')
    </div>
</body>
</html>
