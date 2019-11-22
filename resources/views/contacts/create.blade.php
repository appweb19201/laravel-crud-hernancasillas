@extends('layouts.base')
@section('main')
    <h1>Add new contact</h1>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <form action="/contacts" method="POST">
        @csrf
        <div class="form-group">
          <label for="first_name">First Name</label>
          <input type="text"
            class="form-control" name="first_name" id="first_name" placeholder="First Name">
        </div>
        <div class="form-group">
          <label for="last_name">Last Name</label>
          <input type="text"
            class="form-control" name="last_name" id="last_name" placeholder="Last Name">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email"
            class="form-control" name="email" id="email" placeholder="Email">
        </div>
        <button type="submit" class="btn btn-success">Add contact</button>
        <a href="/contacts" class="btn btn-danger">Cancel</a>
    </form>
@endsection