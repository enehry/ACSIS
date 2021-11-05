<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/default.css">
  <link rel="stylesheet" href="../css/admin.css">
  <link rel="stylesheet" href="../css/loading.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
</head>

<body>
  @section('content')
  <div class="workSpace">
    <div class="title1">
      <h3>Admin</h3>
    </div>
    <div class="content1">
      <div class="box1 contentBox">
        <div class="contentBoxTitle">
          <h3>Add Admin</h3>
        </div>
        <div class="contentBoxBottom">
          <div class="box3 contentBox">
            <div class="contentBoxTitle">
              <div class="titles">
                Full Name<span class="required">*</span>
              </div>
              <div class="titles">
                Username<span class="required">*</span>
              </div>
              <div class="titles">
                Password<span class="required">*</span>
              </div>
              <div class="titles">
              </div>

              <div class="title">
                Type<span class="required">*</span>
              </div>

            </div>
            <div class="contentBoxBottom">
              <form>

                <div class="titles">
                  <input type="text" id="fullName" name="fullName" placeholder="e.g Shiela Mae F. Eugenio" required>
                </div>
                <div class="titles">
                  <input type="text" id="username" name="username" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}" placeholder="e.g bluishlemon (6-20 characters)" required>
                </div>
                <div class="titles">
                  <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}" placeholder="e.g bluishlemon (6-20 characters)" required>
                </div>
                <div class="titles">
                  <input type="password" id="password2" name="password2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}" placeholder="Retype Password (Required)" required>
                </div>

                <div class="titles">
                  <div class="onetwo">
                    <input type="radio" name="type" value="superadmin" required>Superadmin
                  </div>
                  <div class="onetwo">
                    <input type="radio" name="type" value="admin" required>Admin
                  </div>
                </div>

                <div class="titles buttoncenter">

                  <div class="onetwo">
                    <input type="submit" value="Save">
                  </div>
                  <div class="onetwo">
                    <input type="reset" value="Reset">
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="box2 contentBox">
        <div class="contentBoxTitle">
          <h3>Edit Account</h3>
        </div>
        <div class="contentBoxBottom">
          <table id="table_id" class="display">
            <thead>
              <tr>
                <th>Full Name</th>
                <th>Username</th>
                <th>Type</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr class="fullName">
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
              </tr>
              <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
              </tr>
              <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
              </tr>
              <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
              </tr>
              <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
              </tr>
              <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
              </tr>
              <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
              </tr>
              <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
              </tr>
              <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
              </tr>
              <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
              </tr>
              <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
              </tr>
              <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
              </tr>
              <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
              </tr>
              <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
              </tr>
              <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
              </tr>
              <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
              </tr>
              <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
              </tr>
              <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
              </tr>
              <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
              </tr>
              <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
              </tr>
              <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
              </tr>
              <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
              </tr>
              <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
              </tr>
              <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
              </tr>
              <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
              </tr>
              <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
              </tr>
            </tbody>
          </table>
          <script>
            $(document).ready(function() {
              $('#table_id').DataTable();
            });
          </script>
        </div>
      </div>



    </div>
  </div>

  <div class="three col">
    <div class="loader" id="loader-1"></div>
  </div>

  <script src="../js/loading.js "></script>
  @endsection

</body>

</html>



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