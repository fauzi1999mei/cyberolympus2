@extends('layout.template')
@section('judul','Produk')

@if (session('sukses'))
{{-- part alert di bootstrap --}}
 <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{-- <strong>Holy guacamole!</strong> You should check in on some of those fields below. --}}
    {{ session('sukses') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif


{{-- isi --}}
@section('data')


{{-- <div class="dropdown">
<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
    Pilihan
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="">Agent</a>
    <a class="dropdown-item" href="">Customer</a>
  </div> --}}

  @section('data')
  <main role="main" class="container ">
  {{-- tombol tambah data --}}
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Tambah Data Product
  </button>
  {{-- <button type="button" class="ml-5 btn btn-primary">Tambah data Guru</button> --}}

  {{-- kita membuat sebuah tabel --}}

  <table class="table table-striped">
      <thead>
        <tr>
            {{-- tabel product --}}
          <th scope="col">Nomor</th>
          <th scope="col">product name</th>
          <th scope="col">category</th>
          <th scope="col">type</th>
          <th scope="col">item</th>
          <th scope="col">weight</th>
          <th scope="col">sku</th>
          <th scope="col">price sell</th>
          <th scope="col">price promo</th>
          <th scope="col">price agent</th>
          <th scope="col">photo</th>
          {{-- <th scope="col">point</th> --}}
          <th scope="col">recomendation</th>
          <th scope="col">description</th>
          <th scope="col">status</th>
          <th scope="col">ordering</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($dataProduct as $item)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $item-> product_name }}</td>
          <td>{{ $item-> category }}</td>
          <td>{{ $item-> type }}</td>
          <td>{{ $item-> item }}</td>
          <td>{{ $item-> weight }}</td>
          <td>{{ $item-> sku }}</td>
          <td>{{ $item-> price_sell }}</td>
          <td>{{ $item-> price_promo }}</td>
          <td>{{ $item-> price_agent }}</td>
          <td>{{ $item-> photo }}</td>
          <td>{{ $item-> recommendation }}</td>
          <td>{{ $item-> description }}</td>
          <td>{{ $item-> status }}</td>
          <td>{{ $item-> ordering }}</td>

          <td>
              <a href="/product/{{ $item->id }}">
                  <button class="btn-primary">EDIT</button>
              </a>
              <a href="/product/{{ $item->id }}/delete"
                  onclick = "return confirm('apakah anda yakin want to delete this data ???')">
                  <button class="btn-danger">DELETE</button>
              </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{-- batas tabel --}}
    {{-- buat pagr number --}}
    <nav aria-label="...">
      <ul class="pagination">
        <li class="page-item ">
           {{$dataProduct->links()}}
        </li>
      </ul>
    </nav>






  </main>
  @endsection




