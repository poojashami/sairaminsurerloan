@extends('layouts.admin')

@section('title', 'Contact Reports')

@section('content')
<div class="card p-4">
    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Status</th>
                    <th>Tracked By</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td class="text-muted" style="font-size: 14px;">{{ $contact->created_at->format('M d, Y H:i') }}</td>
                    <td class="fw-bold">{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td><span class="text-truncate d-inline-block" style="max-width: 200px;">{{ $contact->subject }}</span></td>
                    <td>
                        <span class="badge rounded-pill badge-{{ $contact->status }}">
                            {{ ucfirst($contact->status) }}
                        </span>
                    </td>
                    <td>
                        <small class="text-muted">
                            {{ $contact->creator->name ?? 'None' }}
                        </small>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="mt-4">
        {{ $contacts->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
