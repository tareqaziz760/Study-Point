<!-- @extends('layouts.app') -->


<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Create Student') }}</div>

                <div class="card-body">
                <div class="container">
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
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
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
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
                </div>
            </div>
        </div>
    </div>
</div>
