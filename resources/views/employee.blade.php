<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container mt-4">
        <h1 style="margin-top: 2%; margin-bottom:2%; margin-left:5% ">New Employee Registration</h1>
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
        <div class="card">
            <div class="card-body">
                <form name="form" id="form" method="POST" action="{{url('employee')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-4">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputName3" placeholder="Name" name="name">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputNRP3" class="col-sm-2 col-form-label">NRP</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputNRP3" placeholder="NRP" name="NRP">
                      </div>
                    </div>


                    <fieldset class="form-group">
                      <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                        <div class="col-sm-4">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="genderRadios" id="gridRadios1" value="Laki-laki" checked>
                            <label class="form-check-label" for="gridRadios1">
                              Laki-Laki
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="genderRadios" id="gridRadios2" value="Perempuan">
                            <label class="form-check-label" for="gridRadios2">
                              Perempuan
                            </label>
                          </div>
                        </div>
                      </div>
                    </fieldset>

                    <div class="form-group row">
                        <label for="inputWeight3" class="col-sm-2 col-form-label">Weight</label>
                        <div class="col-sm-4">
                          <input type="number" class="form-control" id="inputWeight3" placeholder="Weight" min="2.5" max="99.99" step="0.01" name="weight">
                        </div>
                      </div>

                    <div class="form-group row">
                        <label for="inputPhoto3" class="col-sm-2 col-form-label">Personal Photo</label>
                        <div class="col-sm-4">
                          <input type="file" class="form-control" id="inputPhoto3" name="personal_photo">
                        </div>
                        @error('personal_photo')
                            <div class="col-sm-4 text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group row">
                      <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary" style="margin-top: 20px" name="submit_button" value="clicked">Submit</button>
                      </div>
                    </div>
                  </form>
            </div>
        </div>
    </div>

</body>
</html>


