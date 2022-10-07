@extends('layouts.app')

@section('title', 'Category')

@section('content')
    <section class="py-5">
        <a href="{{ route('category.create') }}" type="button" class="btn btn-warning">Tambah Category</a>
        <div class="row">
            <div class="card mt-4">
                <table class="table mt-4">
                    <thead class="table-warning">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Title</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Status</th>
                            <th style="width: 20%" scope="col">Opsi</th>
                        </tr>
                    <tbody>
                        @foreach ($data as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->title }}</td>
                                <td>{{ $data->slug }}</td>
                                <td>{{ $data->status }}</td>
                                <td>
                                    <a href="{{ route('category.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('category.destroy', $data->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    <form action="{{ route('article.show', $data->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('GET')
                                        <button type="submit" class="btn btn-success">Show</button>
                                    </form>
                                </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
