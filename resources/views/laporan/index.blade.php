@extends('layout.template')
@section('judul','Laporan')

{{-- isi --}}
{{-- list agent --}}
@section('data')

{{-- tombol tambah data --}}

{{-- <button type="button" class="ml-5 btn btn-primary">Tambah data Guru</button> --}}

{{-- kita membuat sebuah tabel --}}
{{-- nomor e --}}


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
{{-- nomor f --}}
<button type="button" class="btn btn-outline-primary">f. Category Produk beserta qty dan total harga</button>
<table class="table table-striped">
    <thead>
      <tr>
          {{-- tabel product --}}
        <th scope="col">Nomor</th>
        <th scope="col">id</th>
        <th scope="col">category</th>
        <th scope="col">qty</th>
        <th scope="col">total price</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($dataf as $item)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $item-> id }}</td>
        <td>{{ $item-> category }}</td>
        <td>{{ $item-> qty }}</td>
        <td>{{ $item-> total_price }}</td>




      </tr>
      @endforeach
    </tbody>
  </table>
  {{-- batas tabel --}}
  {{-- buat pagr number --}}
  <nav aria-label="...">
    <ul class="pagination">
      <li class="page-item ">
         {{$dataf->links()}}
      </li>
    </ul>
  </nav>


{{-- nomor g --}}
<button type="button" class="btn btn-outline-primary">g. TOP Produk</button>
<table class="table table-striped">
    <thead>
      <tr>
          {{-- tabel product --}}
        <th scope="col">Nomor</th>
        <th scope="col">Top produk (id)</th>

      </tr>
    </thead>
    <tbody>

      <tr>
        <th scope="row">1</th>
        <td>47</td>
      </tr>

      <tr>
        <th scope="row">2</th>
        <td>47</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>47</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>47</td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>40</td>
      </tr>
      <tr>
        <th scope="row">6</th>
        <td>47</td>
      </tr>
      <tr>
        <th scope="row">7</th>
        <td>47</td>
      </tr>
      <tr>
        <th scope="row">8</th>
        <td>47</td>
      </tr>
      <tr>
        <th scope="row">9</th>
        <td>47</td>
      </tr>
      <tr>
        <th scope="row">10</th>
        <td>47</td>
      </tr>

    </tbody>
  </table>


{{-- nomor h --}}

<button type="button" class="btn btn-outline-primary">h. TOP Customer</button>
<table class="table table-striped">
    <thead>
      <tr>
          {{-- tabel product --}}
        <th scope="col">Nomor</th>
        <th scope="col">Top Customer (id)</th>

      </tr>
    </thead>
    <tbody>

      <tr>
        <th scope="row">1</th>
        <td>15219</td>
      </tr>

      <tr>
        <th scope="row">2</th>
        <td>15290</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>15106</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>15039</td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>15276</td>
      </tr>
      <tr>
        <th scope="row">6</th>
        <td>15121</td>
      </tr>
      <tr>
        <th scope="row">7</th>
        <td>15125</td>
      </tr>
      <tr>
        <th scope="row">8</th>
        <td>15289</td>
      </tr>
      <tr>
        <th scope="row">9</th>
        <td>15175</td>
      </tr>
      <tr>
        <th scope="row">10</th>
        <td>15136</td>
      </tr>

    </tbody>
  </table>













{{-- nomor i --}}
<button type="button" class="btn btn-outline-primary">i. TOP Agent</button>
<table class="table table-striped">
    <thead>
      <tr>
          {{-- tabel product --}}
        <th scope="col">Nomor</th>
        <th scope="col">Top Agent</th>

      </tr>
    </thead>
    <tbody>

      <tr>
        <th scope="row">1</th>
        <td>Kantin Bakso Citra</td>
      </tr>

      <tr>
        <th scope="row">2</th>
        <td>Kumala Sari</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Meyer Pusat</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Febri Meyer</td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>Meyer Jogja</td>
      </tr>
      <tr>
        <th scope="row">6</th>
        <td>Heri Store</td>
      </tr>

    </tbody>
  </table>
  {{-- batas tabel --}}
  {{-- buat pagr number --}}







</main>
@endsection

