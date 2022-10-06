<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>Tambah Articles</title>

<div class="container">
</head>
<body>
  <h5 class="mt-4">Form Tambah Articles</h5>
    <form action="/insertarticle/{{$id}}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="row">
              <div class="col-md-4">
                  <label>Title</label>
                  <input type="text" name="title" class="form-control" placeholder="Title Article" >
              </div>
          </div>
          <div class="col-md-4 mt-3">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" placeholder="Masukkan Slug Article" >
        </div>
        <div class="col-md-3 mb-3">
            <label for="exampleInputPassword1" class="form-label">Status</label>
            <select class="form-select" name="status" aria-label="Default select example">
                <option value="1">Publish</option>
                <option value="2">Pending</option>
            </select>
        </div>
          <div class="col-md-5 mt-3">
            <label>Content</label>
            <input type="text" name="content" class="form-control" placeholder="Masukkan Content" >
        </div>

          <div class="col-md-3 mt-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control" placeholder="Masukkan Image" onchange="previewFile(this)"/>
        </div>
        <button type="submit" class="btn btn-dark mt-4">Submit</button>
    </form>

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
