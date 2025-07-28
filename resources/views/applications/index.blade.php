@extends('layout')

@section('content')
<h1 class="text-2xl font-bold mb-4">Applications Received</h1>

@foreach($applications as $app)
    <div class="bg-white p-4 mb-4 rounded shadow">
        <h2 class="text-xl">{{ $app->name }}</h2>
        <p>Email: {{ $app->email }}</p>
        <p>Phone: {{ $app->phone }}</p>
        <p>Job: {{ $app->job->title }}</p>
        @if($app->resume)
            <a href="{{ asset('storage/'.$app->resume) }}" target="_blank" class="text-blue-500 underline">View Resume</a>
        @endif
    </div>
@endforeach

<a href="{{ route('jobs.index') }}" 
   class="inline-block mt-4 text-blue-600 hover:underline">&larr; Back to Jobs</a>
@endsection
