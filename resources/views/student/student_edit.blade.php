@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Student') }}</div>

                <div class="card-body">
                <div class="container">
    <h2 class="mt-5 mb-4">Update</h2>
    <form action="{{route('student.update', $student->id)}}" method="POST">
        @csrf
        @method('PUT')
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name"value="{{$student->name}}" required>
      </div>
      <div class="form-group">
        <label for="roll">Roll:</label>
        <input type="text" class="form-control" name="roll" value="{{$student->roll}}" required>
      </div>
      <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" class="form-control" name="age" value="{{$student->age}}" required>
      </div>
      <div class="form-group">
        <label for="gender">Gender:</label>
        <select class="form-control" value="{{$student->gender}}" name="gender" required>
          <!-- <option value=""></option> -->
          <option value="male">male</option>
          <option value="female">female</option>
          <option value="others">others</option>
        </select>
      </div>
      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="tel" class="form-control" name="phone" value="{{$student->phone}}" required>
      </div>
      <div class="form-group">
        <label for="district">District:</label>
        <input type="text" class="form-control" name="district" value="{{$student->district}}" required>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
