    @extends('master')
    @section('content')
        <h3 class="text-center"> Create Student data</h3>
      <form action="{{route('store')}}" method="post" data-parsley-validate>

            @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <p>{{ $error }}</p>
                      @endforeach
                  </ul>
              </div>
            @endif

        {{csrf_field()}}
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" class="form-control" placeholder="Enter name" required>
    </div>
    <div class="form-group">
      <label for="registration_id">registration id</label>
      <input type="number" name="registration_id" class="form-control"  placeholder="Enter registration_id" required>
    </div>
    <div class="form-group">
      <label for="department_name">Department name</label>
      <input type="text" class="form-control"name="department_name"  placeholder="Enter department_name" required>
    </div>
    <div class="form-group">
      <label for="info">Info</label>
      <textarea name="Info" class="form-control" rows="6" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @endsection
