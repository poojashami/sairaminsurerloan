@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card p-4 mb-4">
            <div class="d-flex align-items-center">
                <div class="stats-icon bg-primary-light me-3">
                    <i class="fas fa-users text-primary"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-1">Total Contacts</h6>
                    <h2 class="fw-bold mb-0 text-primary">{{ $stats['total_contacts'] }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card p-4 mb-4">
            <div class="d-flex align-items-center">
                <div class="stats-icon bg-danger-light me-3">
                    <i class="fas fa-clock text-danger"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-1">New Enquiries</h6>
                    <h2 class="fw-bold mb-0 text-danger">{{ $stats['new_contacts'] }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card p-4 mb-4">
            <div class="d-flex align-items-center">
                <div class="stats-icon bg-info-light me-3">
                    <i class="fas fa-user-shield text-info"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-1">Registered Admins</h6>
                    <h2 class="fw-bold mb-0">{{ $stats['total_users'] }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card p-4 mt-2">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h5 class="fw-bold mb-0">Recent Contact Enquiries</h5>
        <a href="{{ route('admin.contacts.index') }}" class="btn btn-sm btn-outline-primary rounded-pill px-3">View All</a>
    </div>
    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Status</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($recent_contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>
                        <span class="badge rounded-pill badge-{{ $contact->status }}">
                            {{ ucfirst($contact->status) }}
                        </span>
                    </td>
                    <td class="text-muted small">{{ $contact->created_at->diffForHumans() }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
