@extends('layouts.app')

@section('title', 'Article')

@section('content')
    <section class="py-5">
        <h2 class="text-center"> Semua Article</h2>
        <a href="{{ route('article.create') }}" type="button" class="btn btn-warning">Tambah Article</a>
        <div class="row">
            <div class="card mt-4">
                <table class="table mt-4">
                    <thead class="table-warning">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Title</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Status</th>
                            <th scope="col">Category</th>
                            <th scope="col">Content</th>
                            <th scope="col">Image</th>

                            <th style="width: 20%" scope="col">Opsi</th>
                        </tr>
                    <tbody>
                        @foreach ($data as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->title }}</td>
                                <td>{{ $data->slug }}</td>
                                <td>{{ $data->status }}</td>
                                <td>{{ $data->category->title }}</td>
                                <td>{{ $data->content }}</td>
                                <td>
                                    <img src="{{ asset('image/'.$data->image) }}" alt="" style="width: 80px;">
                                </td>

                                <td>
                                    <a href="{{ route('article.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('article.destroy', $data->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
