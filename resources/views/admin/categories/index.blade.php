@extends('layouts.admin')

@section('title', 'All Category')

@section('content')

    <h2>All Category</h2>
    <hr>
    <div class="row">
        <div class="col-md-6 col-sm-12">
            @include('messages.status')
            <form action="{{ route('admin.categories.store') }}" method="post">
                @csrf
                <fieldset>
                    <div class="form-group">
                        <label for="name">Category</label>
                        <input type="text" name="name" class="form-control" id="name" autocomplete="off"
                               placeholder="Enter Category">
                    </div>
                    <button type="submit" class="btn btn-primary">Add New</button>
                </fieldset>
            </form>
        </div>

        <div class="col-md-6 col-sm-12">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Created</th>
                    <th scope="col">Updated</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr class="table">
                        <th scope="row">{{ $category->id }}</th>
                        <td>
                            <a href="{{ route('admin.categories.edit', $category->id) }}">{{ $category->name
                            }}</a>
                        </td>
                        <td>{{ $category->created_at }}</td>
                        <td>{{ $category->updated_at }}</td>
                        <td>
                            <form action="{{ route('admin.categories.destroy', $category->id) }}"
                                  method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop