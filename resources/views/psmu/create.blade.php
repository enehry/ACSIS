@extends('layouts.app')
@section('content')
<div class="workSpace">
  <div class="title1">
    <h3>Police Strategy Management Unit / Create New</h3>
  </div>

  <div class="content1">
    <div class="centerBox">

      <form method="post" action="{{ route('psmu.store') }}">
        @csrf
        <fieldset id="addAdvisor">
          <legend>
            <h2>Profile Information</h2>
          </legend>
          <input type="text" hidden name="role" value="stakeholder">
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
            <a class="float-right" href="/psmu">Back to PSMU List</a>
          </div>
          @endif


          <h2>Stakeholder Information</h2>
          <hr />
          Add Category<span class="required">*</span><br />
          <div class="addCate">
            <div class="acPos">
              <span class="Name">PSMU Position</span><span class="required">*</span><br>
              <select class="@error('position') is-invalid @enderror" name="position" value="{{ old('position') }}">
                <option disabled selected>Select your office:</option>
                <option value="Secondary Directorial Staff">Secondary Directorial Staff</option>
                <option value="National Administrative Support Unit">National Administrative Support Unit</option>
                <option value="National Operations Support Unit">National Operations Support Unit</option>
                <option value="Police Regional Office">Police Regional Office</option>
              </select>
            </div>

            <div class="acSec">
              <span class="Name">PSMU Sector</span><span class="required">*</span><br>
              <select class="@error('sector') is-invalid @enderror" name="sector" value="{{ old('sector') }}">
                <option disabled selected>Select your office:</option>
                <option value="Secondary Directorial Staff">Secondary Directorial Staff</option>
                <option value="National Administrative Support Unit">National Administrative Support Unit</option>
                <option value="National Operations Support Unit">National Operations Support Unit</option>
                <option value="Police Regional Office">Police Regional Office</option>
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
            <div class="col-md-4"><input class="@error('email') is-invalid @enderror" type="text" placeholder="Email" name="email" required value="{{ old('email') }}">
            </div>
            <div class="col-md-4"><input class="@error('password') is-invalid @enderror" type="password" placeholder="password" name="password" required value="{{ old('password') }}"></div>
            <div class="col-md-4"><input type="password" placeholder="retype password" name="password_confirmation" required value="{{ old('password_confirmation') }}"></div>
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