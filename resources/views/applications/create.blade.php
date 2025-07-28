@extends('layout')

@section('content')
<h1 class="text-2xl font-bold mb-4">Apply for {{ $job->title }}</h1>

<form method="POST" action="{{ url('jobs/'.$job->id.'/apply') }}" enctype="multipart/form-data" class="space-y-4">
    @csrf
    <input name="name" placeholder="Your Name" class="w-full p-2 border rounded" required>
    <input type="email" name="email" placeholder="Email" class="w-full p-2 border rounded" required>
    <input name="phone" placeholder="Phone Number" class="w-full p-2 border rounded" required>
    <input type="file" name="resume" class="w-full p-2 border rounded">

    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">Submit Application</button>
</form>

<a href="{{ route('jobs.index') }}" 
   class="inline-block mt-4 text-blue-600 hover:underline">&larr; Back to Jobs</a>
@endsection
