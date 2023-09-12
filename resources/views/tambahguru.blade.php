<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORM TAMBAH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <section class="container">
      <h1 class="text-center">INPUT DATA GURU</h1><br><br>
      <form action="/inputguru" method="POST">
        @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Kode Guru</label>
        <input type="text" autocomplete="off" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kode_guru">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nama Guru</label>
        <input type="text" autocomplete="off" class="form-control" id="exampleInputPassword1" name="nama_guru">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mapel</label>
        <input type="text" autocomplete="off" class="form-control" id="exampleInputPassword1" name="mapel">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>