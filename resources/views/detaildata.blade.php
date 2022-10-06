<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Company Profile</title>
  </head>
  <body>
    <h1 class="text-center mt-5 mb-5">Articles</h1>


    <div class="container">
        <a href="/category" type="button" class="btn btn-warning">Kembali</a>
        <a href="/tambaharticle/{{$articel->id}}" type="button" class="btn btn-warning">Tambahkan isi Artikel</a>
        <div class="row">

            <h3 class="mb-1">{{ $articel->title }} </h3>
            <h4>{{ $articel->slug }} </h4>
            <h5>{{ $articel->status }} </h5>
                <div class="card mt-4">
                    <table class="table mt-4">
                        <thead class="table-warning">
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Title</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Status</th>
                            <th scope="col">Content</th>
                            <th scope="col">Id</th>
                            <th scope="col">Image</th>
                            <th style="width: 14%" scope="col">Opsi</th>
                          </tr>
                        <tbody>
                            @foreach ( $article as $key=> $raw )
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$raw->title}}</td>
                            <td>{{$raw->slug}}</td>
                            <td>{{$raw->status}}</td>
                            <td>{{$raw->content}}</td>
                            <td>{{$raw->category_id}}</td>
                            <td>
                                <img src="{{ asset('fotoarticle/'.$raw->image) }}" alt="" style="width: 80px;">
                            </td>
                            <td>
                                <a href="/tambahkanarticle/{{ $raw->id }}" class="btn btn-warning">Edit</a>
                                <a href="/deletearticle/{{ $raw->id }}" class="btn btn-warning">Delete</a>
                            </td>
                        @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
