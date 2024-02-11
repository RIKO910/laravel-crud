@extends('Component.Master')

@section('admin_content')
    <div class="row">
        <div class="col-8 d-flex justiy-content-end my-4">
            <a href="{{ route('category.index') }}" class="btn btn-success mt-10">Category</a>
        </div>
        <div class="col-8 m-auto">
            @if (session('status'))
            <div class="bg-danger text-white">
                {{ session('status') }}
            </div>
            @endif
            <form  action="{{ route('category.update', ['category'=>$category->id])}}" method="POST">
                @method("PUT")
                @csrf
                <div class="form-group mt-4">
                    <label for="category-name" class="mb-2 ">Category Name</label>
                    <input name="category_name" value="{{ $category->name }}" type="text"
                        class="form-control
              @error('category_name')
                  is-invalid
              @enderror"
                        id="category-name" placeholder="Please provide Category name">

                    @error('category_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                {{-- <div class="form-group mt-2">
                    <label for="category-slug" class="mb-2">Category Slug</label>
                    <input name="category_slug" type="text"
                        class="form-control
                        @error('category_slug')
                    is-invalid
                @enderror"
                        id="category-slug" placeholder="Please provide Category slug">
                    @error('category_slug')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div> --}}
                <div class="form-check mb-3">
                    <input name="is_active" @if ($category->is_active)
                    checked
                    @endif type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Active/Inactive</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection

<h2>Hi</h2>
