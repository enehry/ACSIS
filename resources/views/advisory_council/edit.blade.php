@extends('layouts.app')
@section('content')
    <div class="workSpace">
        <div class="title1">
            <h3>Advisory Council / EDIT</h3>
        </div>

        <div class="content1">

            <div class="centerBox">

                <form method="post" action="{{ route('advisory-council.update', $stk->id) }}">
                    @csrf
                    {{ method_field('PUT') }}
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

                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                <i class="fas fa-check-circle mr-2"></i>
                                {{ session()->get('success') }}
                                <a class="float-right" href="/advisory-council">Back to Advisory Council
                                    List</a>
                            </div>
                        @endif


                        <h2>Stakeholder Information</h2>
                        <hr />
                        Add Category<span class="required">*</span><br />
                        <div class="addCate">
                            <div class="acPos">
                                <span class="Name">AC Position</span><span class="required">*</span><br>
                                <select class="@error('position') is-invalid @enderror" name="position">
                                    <option value="{{ $adv->position }}" selected>{{ $adv->position }}</option>
                                    <option value="Chief">Chief</option>
                                    <option value="Deputy Chief">Deputy Chief</option>
                                    <option value="Member">Member</option>
                                </select>
                            </div>


                            <div class="oTitle">
                                <span class="Name">Other Title</span><br>
                                <input type="text" placeholder="other title" name="other_title" required
                                    value="{{ $adv->other_title }}">
                            </div>
                        </div>
                        <br />

                        <h2>Create Account</h2>
                        <div class="row">
                            <div class="col-md-3"><input class="@error('email') is-invalid @enderror" type="text"
                                    placeholder="Email" name="email" disabled required value="{{ $stk->email }}">
                            </div>
                            <div class="col-md-3">
                                <select class="@error('role') is-invalid @enderror" name="role">
                                    <option selected value="{{ $stk->role }}">{{ $stk->role }}</option>
                                    <option value="stakeholder">stakeholder</option>
                                    <option value="admin">admin</option>
                                </select>
                            </div>
                            <div class="col-md-3"><input class="@error('password') is-invalid @enderror"
                                    type="password" placeholder="password" name="password"></div>
                            <div class="col-md-3"><input type="password" placeholder="retype password"
                                    name="password_confirmation"></div>
                        </div>
                        <h2>Basic Information</h2>
                        <hr />

                        <div class="basicInformation">
                            <div class="name">
                                <span class="Name">Name</span><span class="required">*</span><br>
                                <input class="@error('lname') is-invalid @enderror" type="text" placeholder="Last Name"
                                    name="lname" required value="{{ $stk->lname }}">
                                <input class="@error('fname') is-invalid @enderror" type="text" placeholder="First Name"
                                    name="fname" required value="{{ $stk->fname }}">
                                <input type="text" placeholder="Middle Name" name="mname" required
                                    value="{{ $stk->mname }}">
                            </div>
                            <div class="bday-sex">
                                <div class="bday">
                                    <span class="Name">Birthday:</span> <br />
                                    <input class="@error('bday') is-invalid @enderror" type="date" name="bday"
                                        value="{{ $stk->bday }}">
                                </div>
                                <div class="sex">
                                    <span class="Name">Sex:</span> <br />
                                    <select class="@error('sex') is-invalid @enderror" name="sex">
                                        <option selected value="{{ $stk->sex }}">{{ $stk->sex }}</option>
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
                                    <input class="@error('street') is-invalid @enderror" type="text"
                                        placeholder="Number / Street / Subdivision" name="street" required
                                        value="{{ $stk->street }}">
                                </div>
                                <div class="brngy">
                                    <span class="Name"> </span><br>
                                    <input class="@error('brgy') is-invalid @enderror" type="text" placeholder="Barangay"
                                        name="brgy" required value="{{ $stk->brgy }}">
                                </div>
                                <div class="city">
                                    <span class="Name"> </span><br>
                                    <input class="@error('city') is-invalid @enderror" type="text" placeholder="City"
                                        name="city" required value="{{ $stk->city }}">
                                </div>
                                <div class="province">
                                    <span class="Name"> </span><br>
                                    <input class="@error('province') is-invalid @enderror" type="text"
                                        placeholder="Province" name="province" required value="{{ $stk->province }}">
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

    <script src="/js/loading.js "></script>
@endsection
