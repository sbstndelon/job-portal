@extends('layout')

@section('content')
<h1 class="text-2xl font-bold mb-4">Available Jobs</h1>

@foreach($jobs as $job)
    <div class="bg-white p-4 mb-4 rounded shadow">
        <h2 class="text-xl font-semibold">{{ $job->title }}</h2>
        <p>{{ $job->description }}</p>
        <p><strong>Location:</strong> {{ $job->location }}</p>
        <p><strong>Salary:</strong> {{ $job->salary_range }}</p>
        <a href="{{ url('jobs/'.$job->id.'/apply') }}" 
           class="inline-block mt-3 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition">Apply</a>
    </div>
@endforeach
@endsection
