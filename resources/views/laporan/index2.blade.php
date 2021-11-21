@extends('layout.template')
@section('judul','Laporan')
{{-- isi --}}
@section('data')




  @section('data')
  <main role="main" class="container ">
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
            Pilihan
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="/laporan2">Laporan Bagian E</a>
            <a class="dropdown-item" href="/laporan">Laporan Bagian F</a>
          </div>
    <main role="main" class="container ">

  {{-- tombol tambah data --}}

{{-- <button type="button" class="ml-5 btn btn-primary">Tambah data Guru</button> --}}

{{-- kita membuat sebuah tabel --}}

<button type="button" class="btn btn-outline-primary">E. Item Produk beserta qty dan total harga</button>
<table class="table table-striped">
    <thead>
      <tr>
          {{-- tabel product --}}
        <th scope="col">Nomor</th>
        <th scope="col">Item</th>
        <th scope="col">qty</th>
        <th scope="col">total price</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($datae as $item)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $item-> product_name }}</td>
        <td>{{ $item-> qty }}</td>
        <td>{{ $item-> total_price }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{-- buat pagr number --}}
  <nav aria-label="...">
    <ul class="pagination">
      <li class="page-item ">
         {{$datae->links()}}
      </li>
    </ul>
  </nav>



  </main>
  @endsection



