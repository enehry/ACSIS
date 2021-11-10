@section('content')
<h3>Technical Working Group</h3>
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
    <a href="/technical-working-group/create">
      <button class="btn btn-primary float-right">Create New</button>
    </a>
  </div>
</div>
<table class="table table-striped table-bordered dt-responsive" style="width:100%" id="tchWrkGrpStakeHolder">
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
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($stakeholders as $stk)
    <tr>
      <th scope="row"> {{ $stk->id }}</th>
      <td class="text-center">
        @if($stk->avatar)
        <img style="height: 50px;" class="rounded-circle border" src="{{ $stk->avatar }}">
        @else
        <img style="height: 50px;" class="rounded-circle border" src="https://avatars.dicebear.com/api/initials/{{$stk->fname}}.svg?background=%23211838">
        @endif
      </td>
      <td>{{ $stk->fname . ' ' . $stk->lname }}</td>
      <td>{{ $stk->email }}</td>
      <td>{{ $stk->street . ' ' . $stk->brgy . ' ' . $stk->city . ' ' . $stk->province }}</td>
      <td>{{ $stk->bday }}</td>
      <td>{{ $stk->position }}</td>
      <td>{{ $stk->role }}</td>
      <td>
        <a href="/technical-working-group/edit/{{ $stk->id }}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
        <form method="POST" action="/technical-working-group/delete/{{ $stk->id }}">
          @csrf
          {{ method_field('DELETE') }}
          <div class="form-group">
            <button type="submit" class="btn btn-danger delete-user">
              <i class="fas fa-trash"></i>
            </button>
          </div>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<script>
  $(document).ready(function() {
    $('#tchWrkGrpStakeHolder').DataTable({
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




<!-- @extends('layouts.app')

@section('content')
                                                        <div class="container">
                                                            <div class="row justify-content-center">
                                                                <div class="col-md-8">
                                                                    <div class="card">
                                                                        <div class="card-header">{{ __('Dashboard') }}</div>

                                                                        <div class="card-body">
                                                                            @if (session('status'))
                                                                            <div class="alert alert-success" role="alert">
                                                                                {{ session('status') }}
                                                                            </div>
                                                                            @endif

                                                                            {{ __('You are logged in!') }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
@endsection -->