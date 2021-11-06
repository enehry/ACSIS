@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-md-12">
    @if(session()->has('success'))
    <div class="alert alert-success">
      <i class="fas fa-check-circle mr-2"></i>
      {{ session()->get('success') }}
    </div>
    @endif
    @if(session()->has('error'))
    <div class="alert alert-success">
      <i class="fas fa-trash mr-2"></i>
      {{ session()->get('error') }}
    </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
  </div>
</div>
<form action="{{ route('user.profile.save') }}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="container rounded bg-white mb-5">
    <div class="row">
      <div class="col-md-3 border-right">
        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
          @if($user->avatar)
          <img class="rounded-circle border border-dark" height="150px" width="150px" id="imageResult" src="{{ $user->avatar }}" alt="">
          @else
          <img class="rounded-circle border border-dark" height="150px" width="150px" id="imageResult" src="https://avatars.dicebear.com/api/initials/{{$user->fname}}.svg?background=%23211838" alt="">
          @endif
          <span>
            <div class="mb-4">
              <input id="upload" name="avatar" type="file" onchange="readURL(this);" class="form-control border-0">
              <div class="">
                <label for="upload" class="btn btn-light m-0 px-4"><i class="fas fa-cloud-upload-alt text-muted mr-2"></i><small class="text-uppercase font-weight-bold text-muted">Choose Avatar</small>
                </label>
              </div>
            </div>
          </span>
          <span class="font-weight-bold">{{ $user->fname." ".$user->lname }}</span>
          <span class="text-black-50">{{ $user->email }}</span><span> </span>
        </div>
      </div>
      <div class="col-md-5 border-right">
        <div class="p-3 py-5">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-right">Profile Settings</h4>
          </div>
          <div class="row mt-3">
            <div class="col-md-12"><label class="labels">Last Name</label><input class="@error('lname') is-invalid @enderror form-control" type="text" placeholder="Last Name" name="lname" required value="{{ $user->lname }}"></div>
            <div class="col-md-12"><label class="labels">First Name</label><input class="@error('fname') is-invalid @enderror form-control" type="text" placeholder="First Name" name="fname" required value="{{ $user->fname }}"></div>
            <div class="col-md-12"><label class="labels">Middle Name</label><input type="text" class="form-control" placeholder="Middle Name" name="mname" value="{{ $user->mname }}"></div>
            <div class="col-md-12"><label class="labels">Street</label><input type="text" class="@error('street') is-invalid @enderror  form-control" placeholder="Street" name="street" value="{{ $user->street }}"></div>
            <div class="col-md-12"><label class="labels">Bgry</label><input type="text" class="@error('brgy') is-invalid @enderror  form-control" placeholder="Brgy" name="brgy" value="{{ $user->brgy }}"></div>
            <div class="col-md-12"><label class="labels">City</label><input type="text" class="@error('city') is-invalid @enderror  form-control" placeholder="City" name="city" value="{{ $user->city }}"></div>
            <div class="col-md-12"><label class="labels">Province</label><input type="text" class="@error('province') is-invalid @enderror  form-control" placeholder="Province" name="province" value="{{ $user->province }}"></div>
            <div class="col-md-12">
              <span class="Name">Birthday:</span> <br />
              <input class="@error('bday') is-invalid @enderror" type="date" name="bday" value="{{ $user->bday }}">
            </div>
            <div class="col-md-12">
              <span class="Name">Sex:</span> <br />
              <select class="@error('sex') is-invalid @enderror" name="sex">
                <option selected value="{{ $user->sex }}">{{ $user->sex }}</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>
          <div class="mt-5 text-center"><input class="btn btn-dark" value="Save Profile" type="submit" /></div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-3 py-5">
          <div class="d-flex justify-content-between align-items-center experience">
            <h4 class="font-bold">Change Password</h4>
          </div><br>
          <div class="col-md-12"><label class="labels">Old Password</label><input name="old_password" type="password" class="form-control" placeholder="old password" value=""></div> <br>
          <div class="col-md-12"><label class="labels">New Password</label><input class="@error('password') is-invalid @enderror form-control" name="password" type="password" placeholder="new password" value=""></div>
          <div class="col-md-12"><label class="labels">Confirm Password</label><input class="@error('password_confirmation') is-invalid @enderror form-control" name="password_confirmation" type="password" placeholder="confirm password" value=""></div>
        </div>
      </div>
    </div>
  </div>
</form>
<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#imageResult')
          .attr('src', e.target.result);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }

  $(function() {
    $('#upload').on('change', function() {
      readURL(input);
    });
  });
</script>
@endsection