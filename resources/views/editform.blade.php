<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>edit CRUD Query Builder</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body >
      <div class="container">

          <div class="row">
              <div class="col-sm-6">
                  <form action="" method="POST" class="form-group">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                          <label for="name" class="form-label">
                              Name
                          </label>
                          <input type="text" class="form-control" id="name" name="name" value="{{$student->name}}"></input>
                        </div>
                        <div class="mb-3">
                          <label for="city" class="form-label">
                              City
                          </label>
                          <input type="text" class="form-control" id="city" name="city" value="{{$student->city}}"></input>
                        </div>
                        <div class="mb-3">
                          <label for="city" class="form-label">
                              Marks
                          </label>
                          <input type="text" class="form-control" id="marks" name="marks" value="{{$student->marks}}"></input>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                  @if(session()->has('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                  @endif
              </div>
              
          </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>
