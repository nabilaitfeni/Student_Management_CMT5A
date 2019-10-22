    @extends('master')
    @section('content')
      <h3 class="text-center">Update Student data</h3>
      <form action="{{route('update',$students->id)}}" method="post">
        {{csrf_field()}}
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" value="{{$students->name}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="registration_id">registration id</label>
      <input type="number" name="registration_id" value="{{$students->registration_id}}" class="form-control">
    </div>
    <div class="form-group">
      <label for="department_name">Department name</label>
      <input type="text" class="form-control" value="{{$students->department_name}}"name="department_name">
    </div>
    <div class="form-group">
      <label for="info">Info</label>
      <textarea name="Info" class="form-control" rows="6">{{$students->info}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update Student</button>
  </form>

  @endsection
