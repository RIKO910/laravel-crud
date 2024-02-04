@extends('Component.Master')

@section('admin_content')

<div>
    <form class="col-8 m-auto" action="{{ route('category.store') }}" method="POST">
        @csrf
        <div class="form-group mt-4">
          <label for="category-name" class="mb-2 ">Category Name</label>
          <input name="category_name" type="text" class="form-control mr-10" id="category-name" placeholder="Please provide Category name">
        </div>
        <div class="form-group mt-2">
            <label for="category-slug" class="mb-2">Category Slug</label>
            <input name="category_slug" type="text" class="form-control mr-10" id="category-slug" placeholder="Please provide Category slug">
          </div>
          <div class="form-check mb-3">
            <input name="is_active" type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Active/Inactive</label>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>


@endsection

<h2>Hi</h2>
