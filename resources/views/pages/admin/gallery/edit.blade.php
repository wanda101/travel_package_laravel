@extends('layouts.admin')
@section('content')
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <h1 class="h6 mb-0 text-gray-800">Gallery </h1>
                  {{-- {{ $item->title }} --}}
                </div>

        @if ($errors->any())
        <div class="alert alert-danger" >
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
      
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Form Gallery</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('gallery.update',$item->id) }}" method="post" enctype="multipart/form-data" >
                    @method('PUT')
                @csrf
                <div class="form-group" >
                    <label for="travel_packages_id">Paket Travel</label>
                    <select name="travel_packages_id" class="form-control" id="" >
                        <option value="{{ $item->travel_packages_id }}">Jangan Diubah</option>
                        @foreach ($travel_packages as $travel_package)
                            <option value="{{ $travel_package->id }}">{{ $travel_package->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group" >
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control" placeholder="image" >
                </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        Update
                    </button>

                </form>
            </div>
        </div>
      
              </div>
              <!-- /.container-fluid -->
@endsection