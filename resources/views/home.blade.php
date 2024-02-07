<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD Query Builder</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body >
      <div class="container">

          <div class="row">
              <div class="col-sm-6">
                  <form action="" method="POST" class="form-group">
                        @csrf
                        <div class="mb-3">
                          <label for="name" class="form-label">
                              Name
                          </label>
                          <input type="text" class="form-control" id="name" name="name"></input>
                        </div>
                        <div class="mb-3">
                          <label for="city" class="form-label">
                              City
                          </label>
                          <input type="text" class="form-control" id="city" name="city"></input>
                        </div>
                        <div class="mb-3">
                          <label for="city" class="form-label">
                              Marks
                          </label>
                          <input type="text" class="form-control" id="marks" name="marks"></input>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                  @if(session()->has('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                  @endif
              </div>
              <div class="col-sm-6">
                  <table class="table">
                      <thead>
                          <th>Id</th>
                          <th>Name</th>
                          <th>City</th>
                          <th>Marks</th>
                          <th>Actions</th>
                      </thead>
                      <tbody>
                        @foreach($students as $std)
                          <tr>
                              <td>{{$std->id}}</td>
                              <td>{{$std->name}}</td>
                              <td>{{$std->city}}</td>
                              <td>{{$std->marks}}</td>
                              <td>
                                  <a href="{{ url('/edit', $std->id) }}" class="btn btn-primary" >Edit</a>
                                  <a href="{{ url('/delete', $std->id) }}" class="btn btn-danger" >Delete</a>
                              </td>
                          </tr>
                        @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>
