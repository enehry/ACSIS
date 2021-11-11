@extends('layouts.app')
@section('content')
<h3>Advisory Council</h3>
<div class="row">
  <div class="col-md-6">
    @if (session()->has('success'))
    <div class="alert alert-success">
      <i class="fas fa-trash mr-2"></i>
      {{ session()->get('success') }}
    </div>
    @endif
    @if (session()->has('error'))
    <div class="alert alert-success">
      <i class="fas fa-trash mr-2"></i>
      {{ session()->get('error') }}
    </div>
    @endif
  </div>
  <div class="col-md-6 mb-2">
    @if(Auth::user()->role == 'super admin')
    <a href="/advisory-council/create">
      <button class="btn btn-primary float-right">Create New</button>
    </a>
    @endif
  </div>
</div>
<table class="table table-striped table-bordered dt-responsive" style="width:100%" id="advCouncilStakeholder">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Avatar</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">bday</th>
      <th scope="col">position</th>
      <th scope="col">role</th>
      @if(Auth::user()->role == 'super admin')
      <th scope="col">Actions</th>
      @endif
    </tr>
  </thead>
  <tbody>
    @foreach ($stakeholders as $stakeholder)
    <tr>
      <th scope="row"> {{ $stakeholder->id }}</th>
      <td class="text-center">
        @if($stakeholder->avatar)
        <img style="height: 50px;" class="rounded-circle border" src="{{ $stakeholder->avatar }}">
        @else
        <img style="height: 50px;" class="rounded-circle border" src="https://avatars.dicebear.com/api/initials/{{$stakeholder->fname}}.svg?background=%23211838">
        @endif
      </td>
      <td>{{ $stakeholder->fname . ' ' . $stakeholder->lname }}</td>
      <td>{{ $stakeholder->email }}</td>
      <td>{{ $stakeholder->street . ' ' . $stakeholder->brgy . ' ' . $stakeholder->city . ' ' . $stakeholder->province }}
      </td>
      <td>{{ $stakeholder->bday }}</td>
      <td>{{ $stakeholder->position }}</td>
      <td>{{ $stakeholder->role }}</td>
      @if(Auth::user()->role == 'super admin')
      <td>
        <a href="/advisory-council/{{ $stakeholder->id }}/edit" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
        <form method="POST" action="/advisory-council/{{ $stakeholder->id }}">
          @csrf
          {{ method_field('DELETE') }}
          <div class="form-group">
            <button type="submit" class="btn btn-danger delete-user">
              <i class="fas fa-trash"></i>
            </button>
          </div>
        </form>
      </td>
      @endif
    </tr>
    @endforeach
  </tbody>
</table>
<script>
  $(document).ready(function() {
    $('#advCouncilStakeholder').DataTable({
      lengthMenu: [
        [10, 25, 50, -1],
        ['10', '25', '50', 'All']
      ],
      dom: "<'row'<'col-md-6'B><'col-md-6'f>>" +
        "<'row'<'col-sm-12'tr>>" +
        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
      buttons: [{
          extend: 'print',
          text: '<i class="fas fa-print fa-1x"></i> Print',
        },
        {
          extend: 'pdf',
          text: '<i class="fas fa-file-pdf fa-1x" aria-hidden="true"></i> PDF',
        },
        {
          extend: 'excel',
          text: '<i class="fas fa-file-excel" aria-hidden="true"></i> Excel',
        },
        'pageLength'
      ],
      responsive: true,
    });
  });
</script>
@endsection