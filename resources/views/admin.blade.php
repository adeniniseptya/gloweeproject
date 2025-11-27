@extends('layouts.app')

@section('content')
<section class="admin-header">
  <h1>Admin Dashboard</h1>
  <p>Manage website statistics, insights, and user assessments</p>
</section>

<div class="dashboard-container">
  @include('partials.sidebar') {{-- sidebar partial or inline --}}
  <main class="content">
     <div class="hero-card">
         <h2>Hello, Admin 👋</h2>
         <p>Here’s the latest performance and user activity from your platform.</p>
     </div>
     <div class="stats-grid">
         <div class="stat-card large">
             <h3>Total Website Views</h3>
             <p class="number">{{ number_format($views) }}</p>
         </div>
         <div class="stat-card small">
             <h3>Total Assessments Taken</h3>
             <p class="number">{{ $totalAssessments }}</p>
         </div>
         <div class="stat-card small">
             <h3>Active Users</h3>
             <p class="number">{{ $activeUsers }}</p>
         </div>
     </div>
     <div class="table-card">
        <h3>User Assessment Results</h3>
        <table>
          <thead> ... </thead>
          <tbody>
            @foreach($recentAssessments as $a)
              <tr>
                 <td>{{ $a->user_name }}</td>
                 <td>{{ $a->email }}</td>
                 <td>{{ $a->taken_at?->format('Y-m-d') }}</td>
                 <td>{{ $a->result }}</td>
                 <td><a href="{{ route('admin.assessments.show', $a->id) }}" class="view-btn">View</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
     </div>
  </main>
</div>
@endsection
