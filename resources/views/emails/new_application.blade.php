<h2>New Job Application Received</h2>
<p><strong>Name:</strong> {{ $application->name }}</p>
<p><strong>Email:</strong> {{ $application->email }}</p>
<p><strong>Phone:</strong> {{ $application->phone }}</p>
<p><strong>Applied Job:</strong> {{ $application->job->title }}</p>

@if ($application->resume)
    <p><strong>Resume:</strong> <a href="{{ asset('storage/' . $application->resume) }}" target="_blank">Download Resume</a></p>
@else
    <p><strong>Resume:</strong> Not provided</p>
@endif
