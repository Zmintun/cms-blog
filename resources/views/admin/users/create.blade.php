@extends('layouts.admin')

@section('title', 'Create User')

@section('content')
    <h2>All Category</h2>
    <hr>
    <div class="row">
        <div class="col-md-8 mx-auto">
            @include('messages.status')
            <form action="{{ route('admin.users.store') }}" method="post">
                @csrf
                <fieldset>
                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" name="name" class="form-control" id="name" autocomplete="off"
                               placeholder="Enter Username" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email" autocomplete="off"
                               placeholder="Enter Email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="role_id">Role</label>
                        <select name="role_id" id="role_id" class="form-control">
                            <option value="">--Select Role--</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}">{{ ucwords($role->name) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="is_active">Status</label>
                        <select name="is_active" id="is_active" class="form-control">
                            <option value="0">Not Active</option>
                            <option value="1">Active</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="password">Category</label>
                        <input type="password" name="password" class="form-control" id="password" autocomplete="off"
                               placeholder="Enter password">
                    </div>
                    <button type="submit" class="btn btn-primary">Create User</button>
                </fieldset>
            </form>
        </div>
    </div>
@stop