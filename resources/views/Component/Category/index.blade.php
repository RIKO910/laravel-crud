@extends('Component.Master')

@section('admin_content')

<div class="row mt-10">
    <div class="col-8 d-flex justiy-content-end my-4">
        <a href="{{ route('category.create') }}" class="btn btn-success mt-10">Create Category</a>
    </div>
    <div class="col-8 m-auto">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Date and Time</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->created_at->diffForHumans() }}</td>
                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>

</div>

@endsection

<h2>.</h2>

