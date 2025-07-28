@extends('layout')

@section('content')
<h1 class="text-2xl font-bold mb-4">Post a New Job</h1>

<form method="POST" action="{{ route('jobs.store') }}" class="space-y-4">
    @csrf
    <input name="title" placeholder="Job Title" class="w-full p-2 border rounded" required>
    <textarea name="description" placeholder="Description" class="w-full p-2 border rounded" required></textarea>
    <input name="location" placeholder="Location" class="w-full p-2 border rounded" required>
    <input name="salary_range" placeholder="Salary Range" class="w-full p-2 border rounded" required>

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Post Job</button>
</form>

<a href="{{ route('jobs.index') }}" 
   class="inline-block mt-4 text-blue-600 hover:underline">&larr; Back to Jobs</a>
@endsection
