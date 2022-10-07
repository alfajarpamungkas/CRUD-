@extends('layouts.app')

@section('title', 'Tambah Article')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-4">
                        <div class="card-header">
                            <h4>Tambah Article</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-2">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Title" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="slug">Slug</label>
                                    <input type="text" name="slug" class="form-control" placeholder="Slug" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="form-control" placeholder="image" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="category_id">Category</label>
                                    <select name="category_id" class="form-control" required>
                                        <option value="">Pilih Category</option>
                                        @foreach ($category as $category)
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control" required>
                                        <option value="">Pilih Status</option>
                                        <option value="Publish">Publish</option>
                                        <option value="Draft">Draft</option>
                                    </select>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="content">Content</label>
                                    <textarea name="content" class="form-control" placeholder="Content" required></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="{{ route('article.index') }}" class="btn btn-danger">Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
