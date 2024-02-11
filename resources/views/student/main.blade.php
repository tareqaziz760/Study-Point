@extends('layouts.app')


<div class=" container">
<!-- @yield('main-section')     -->
<section class="hero py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
        <h2 class="mt-5 mb-4">Registration Form</h2>
        <form action="{{route('store.student')}}" method="post">
        @csrf
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
      </div>
      <div class="form-group">
        <label for="roll">Roll:</label>
        <input type="text" class="form-control" name="roll" placeholder="Enter your roll number" required>
      </div>
      <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" class="form-control" name="age" placeholder="Enter your age" required>
      </div>
      <div class="form-group">
        <label for="gender">Gender:</label>
        <select class="form-control" name="gender" required>
          <option value="">Select</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </div>
      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="tel" class="form-control" name="phone" placeholder="Enter your phone number" required>
      </div>
      <div class="form-group">
        <label for="district">District:</label>
        <input type="text" class="form-control" name="district" placeholder="Enter your district" required>
      </div>
      
      <button type="submit" class="btn btn-primary text-center mt-3" name="submit">Registration</button>
      <a href="" rule="button" class="btn btn-outline-primary mt-3">Cancel</a>
    </form>
        </div>


        <div class="col-md-9">
          

        
        <h2 class="mt-5 mb-4">List of Student</h2>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Roll</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Phone</th>
                                    <th>District</th>
                                    <th>Created By</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody >
                                @foreach($students as $student)
                                <tr>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->roll}}</td>
                                    <td>{{$student->age}}</td>
                                    <td>{{$student->gender}}</td>
                                    <td>{{$student->phone}}</td>
                                    <td>{{$student->district}}</td>
                                    <td>{{$student->user->name}}</td>
                                    <td>
                                        <a href="{{route('student.edit', $student->id)}}" class="btn btn-success"><i class="fa-solid fa-pencil"></i></a>
                                    </td>

                                    <td>
                                        <form action="{{ route('student.delete', $student->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger text-align "><i class="fa-solid fa-trash-arrow-up"></i></button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section> 

</div>