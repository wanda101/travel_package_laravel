@extends('layouts.admin')
@section('content')
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <h1 class="h6 mb-0 text-gray-800">Dashboard  /  Paket Travel</h1>
                  {{-- <a href="{{ route('travel-package.create') }}" class="btn btn-sm btn-primary shadow-sm">
                    <i class="fa fa-plus fa-sm text-white-50"></i> Tambah Paket
                  </a> --}}
                </div>
      
        <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              {{-- <h6 class="m-0 font-weight-bold text-primary">Paket Travel</h6> --}}
              <div class="row">
                <div class="col-6"> 
                  <h6 class="m-0 font-weight-bold text-primary">Data Paket Travel</h6>
                </div>
                <div class="col-6 text-right"> 
                  <a href="{{ route('travel-package.create') }}" class="btn btn-sm btn-primary shadow-sm">
                    <i class="fa fa-plus fa-sm text-white-50"></i> Tambah Paket
                  </a>
                </div>
              </div>    
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="text-center table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead class="text-bold" >
                    <tr>
                      <th>No</th>
                      <th>Title</th>
                      <th>Location</th>
                      <th>Type</th>
                      <th>Departure Date</th>
                      <th>Foods</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="text-dark" >
                    <?php $no=1; ?>
                    @forelse ($items as $item)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->location }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->departure_date }}</td>
                        <td>{{ $item->foods }}</td>
                        <td>
                          <a href="{{ route('travel-package.edit',$item->id) }}" class="btn btn-info" >
                            <i class="fa fa-pencil-alt" ></i>
                          </a>
                          <form action="{{ route('travel-package.destroy',$item->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" >
                              <i class="fa fa-trash" ></i>
                            </button>
                          </form>
                        </td>
                      </tr>
                    @empty
                        <tr>
                          <td colspan="7" class="text-center" >
                            Data Kosong
                          </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
          </div>
        </div>
      </div>
      
              </div>
              <!-- /.container-fluid -->
@endsection