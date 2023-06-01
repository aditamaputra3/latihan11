@extends('Layout.layout')

@section('content')
    <div class="container mt-5">
        <h3>Register</h3>
        <form action="post-register" method="POST">
            {{ csrf_field() }}
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }} <br>
                    @endforeach
                </div>
            @endif
            <div>
                <label for="username">Nama</label>
                <input type="name" name="name" id="name" class="form-control" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div>
                <label for="password">Password Confirmation</label>
                <input type="password" name="password_confirmation" id="password-confirm" class="form-control" required>
            </div>
            <div>
                <label for="level">Role</label>
                <select name="level" class="form-control" required>
                    <option nama="" value="user">User</option>
                    <option nama="" value="admin">Admin</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>
