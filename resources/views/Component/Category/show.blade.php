@extends('Component.Master')

@section('admin_content')

<div class="row">
    <div class="col-8 m-auto">
        <h1>{{ $category->name }}</h1>
        <h2>{{ $category->slug }}</h2>
        <p>{{ $category->updated_at->format('d-m-Y D H:i A') }}</p>
    </div>

</div>

@endsection

<h2>hi</h2>
