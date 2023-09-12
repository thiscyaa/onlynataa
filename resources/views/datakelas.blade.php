<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <section class="container">
    <h1 class="text-center">Data Kelas</h1><br>
    <a href='/tambahkelas' type="button" class="btn btn-primary text-Light">+ Tambah Kelas</a><br><br>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama Kelas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      @php
          $no=1;
      @endphp

    @foreach ( $data as $row )
    <tr>
      <th scope="row">{{$no++}}</th>
      <td>{{ $row->namakelas}}</td>
      <td>
        <a href="/kelas" type="button" class="btn btn-warning">Edit</a>
        <a href="/kelas" type="button" class="btn btn-danger">Hapus</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
  </section>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>