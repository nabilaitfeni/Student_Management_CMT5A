
  @extends('master')
@section('content')
  <h3 class="text-center">Students data</h3>
  <table class="table table-reponsive table-hover">
    <tr>
      <td>Si</td>
      <td>Name</td>
      <td>Registration id</td>
      <td>Department name</td>
      <td>Info</td>
      <td>Action</td>
    </tr>
    <tr>
      @php $i=0; @endphp
      @foreach ($student as $students)
        @php $i++  @endphp
        <td>{{$i}}</td>
        <td>{{$students->name}}</td>
        <td>{{$students->registration_id}}</td>
        <td>{{$students->department_name}}</td>
        <td>{{$students->info}}</td>
        <td>
          <a href="{{route('edit',$students->id)}}" class="btn btn-success float-left">Edit</a>

          <form class="" action="{{route('delete',$students->id)}}" method="post">
            {{csrf_field()}}
            <input type="submit" class="btn btn-danger float-right"value="Delete">
          </form>
        </td>
      </tr>
      @endforeach

  </table>
@endsection
