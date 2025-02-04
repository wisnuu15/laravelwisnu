@extends('template.master')

@section('judul', 'tambah cast')

@section('conten')

<!-- left column -->
 <div class="col-md-12">
    <!-- general from elements -->
     <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Menambah cast</h3>
        </div>
        <!-- from start -->
         <from action="{{ route('cast.submit') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="from-group">
                    <label for="nama">Nama</label>
                    <input type="text"name="nama" class="from-control" required placeholder="Masukan Nama">
                </div>
                <div class="from-group">
                    <label for="umur">umur</label>
                    <input type="number" name="umur" required onkeypress=return even.charCode >= 48 && event.charCode <=charCode <=57" class="from-control" placeholder="Masukan umur">
                </div>
                <div class="from-group">
                <label for="bio">bio</label><br>
                    <textarea name="bio" rows="5" cols="50" placeholder="Masukan biorafi" required></textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
    </div>
</div>
<!-- /.card -->