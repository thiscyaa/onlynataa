<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DATA GURU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <section class="container">
      <H2 class="text-center">DATA GURU</H2>
     <a href="/tambahguru" type="button" class="btn btn-primary text-Light">+ Tambah Guru</a><br><br>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">no</th>
          <th scope="col">Kode Guru</th>
          <th scope="col">Nama Guru</th>
          <th scope="col">Mapel</th>
        </tr>
      </thead>
      <tbody>
        @php
          $no =1;
        @endphp
         @foreach ( $data as $row)
        <tr>
          <td>{{ $no }}</td>
          <td>{{ $row->kode_guru }}</td>
          <td>{{ $row->nama_guru }}</td>
          <td>{{ $row->mapel }}</td>
          <td>
        <a href="/tampilguru/{{ $row->id }}" type="button" class="btn btn-warning">Ubah</a>
        <a href="/hapusguru/{{ $row->id }}" type="button" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
        @php
          $no ++;
        @endphp
         @endforeach
      </tbody>
    </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </section>
  </body>
</html>