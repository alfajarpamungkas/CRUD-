@extends('layouts.app')

@section('title', 'Category')

@section('content')
    <section class="py-5">
        <a href="{{ route('category.index') }}" class="btn btn-warning mb-2">Kembali</a>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Category</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('category.update', $data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Enter Category Title" value="{{ $data->title }}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="slug">Slug</label>
                        <input type="text" name="slug" id="slug" class="form-control" placeholder="Enter Category Slug" value="{{ $data->slug }}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="">Pilih Status</option>
                            <option value="Publish" {{ $data->status == 'publish' ? 'selected' : '' }}>Publish</option>
                            <option value="Pending" {{ $data->status == 'pending' ? 'selected' : '' }}>Pending</option>
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
