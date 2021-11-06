@extends('layouts.app')
@section('content')
<div class="workSpace">
  <div class="title1">
    <h3>Technical Working Group / Create New</h3>
  </div>

  <div class="content1">

    <div class="centerBox">

      <form method="post" action="{{ route('twg.store') }}">
        @csrf
        <fieldset id="addAdvisor">
          <legend>
            <h2>Profile Information</h2>
          </legend>
          <!-- /resources/views/post/create.blade.php -->
          <!-- Create Post Form -->
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif

          @if(session()->has('message'))
          <div class="alert alert-success">
            <i class="fas fa-check-circle mr-2"></i>
            {{ session()->get('message') }}
            <a class="float-right" href="/technical-working-group">Back to Technical Working Group List</a>
          </div>
          @endif


          <h2>Stakeholder Information</h2>
          <hr />
          Add Category<span class="required">*</span><br />
          <div class="addCate">
            <div class="acPos">
              <span class="Name">TWG Position</span><span class="required">*</span><br>
              <select class="@error('position') is-invalid @enderror" name="position" value="{{ old('position') }}">
                <option disabled selected>Select your position :</option>
                <option value="Chief">Chief</option>
                <option value="Deputy Chief">Deputy Chief</option>
                <option value="Member">Member</option>
              </select>
            </div>


            <div class="oTitle">
              <span class="Name">Other Title</span><br>
              <input type="text" placeholder="other title" name="other_title" required value="{{ old('other_title') }}">
            </div>
          </div>
          <br />

          <h2>Create Account</h2>
          <div class="row">
            <div class="col-md-3"><input class="@error('email') is-invalid @enderror" type="text" placeholder="Email" name="email" required value="{{ old('email') }}">
            </div>
            <div class="col-md-3">
              <select class="@error('role') is-invalid @enderror" name="role" value="{{ old('role') }}">
                <option disabled selected>Select role:</option>
                <option value="stakeholder">stakeholder</option>
                <option value="admin">admin</option>
              </select>
            </div>
            <div class="col-md-3"><input class="@error('password') is-invalid @enderror" type="password" placeholder="password" name="password" required value="{{ old('password') }}"></div>
            <div class="col-md-3"><input type="password" placeholder="retype password" name="password_confirmation" required value="{{ old('password_confirmation') }}"></div>
          </div>
          <h2>Basic Information</h2>
          <hr />

          <div class="basicInformation">
            <div class="name">
              <span class="Name">Name</span><span class="required">*</span><br>
              <input class="@error('lname') is-invalid @enderror" type="text" placeholder="Last Name" name="lname" required value="{{ old('lname') }}">
              <input class="@error('fname') is-invalid @enderror" type="text" placeholder="First Name" name="fname" required value="{{ old('fname') }}">
              <input type="text" placeholder="Middle Name" name="mname" required value="{{ old('mname') }}">
            </div>
            <div class="bday-sex">
              <div class="bday">
                <span class="Name">Birthday:</span> <br />
                <input class="@error('bday') is-invalid @enderror" type="date" name="bday" value="{{ old('bday') }}">
              </div>
              <div class="sex">
                <span class="Name">Sex:</span> <br />
                <select class="@error('sex') is-invalid @enderror" name="sex" value="{{ old('sex') }}">
                  <option selected disabled>Select sex</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
              <div class="bsempty">

              </div>
              <div class="bsempty">

              </div>
              <div class="bsempty">

              </div>

            </div>
            <div class="haddress">
              <div class="hnumber">
                <span class="Name">Home Address/Office Address</span><br>
                <input class="@error('street') is-invalid @enderror" type="text" placeholder="Number / Street / Subdivision" name="street" required value="{{ old('street') }}">
              </div>
              <div class="brngy">
                <span class="Name"> </span><br>
                <input class="@error('brgy') is-invalid @enderror" type="text" placeholder="Barangay" name="brgy" required value="{{ old('brgy') }}">
              </div>
              <div class="city">
                <span class="Name"> </span><br>
                <input class="@error('city') is-invalid @enderror" type="text" placeholder="City" name="city" required value="{{ old('city') }}">
              </div>
              <div class="province">
                <span class="Name"> </span><br>
                <input class="@error('province') is-invalid @enderror" type="text" placeholder="Province" name="province" required value="{{ old('province') }}">
              </div>
            </div>
          </div>
        </fieldset>
        <div class="col-md-12">
          <input type="submit" class="float-right mt-2 px-4" value="SAVE">
        </div>
      </form>
    </div>

  </div>

</div>

</div>

<div class="three col">
  <div class="loader" id="loader-1"></div>
</div>

<script src="../js/loading.js "></script>
@endsection