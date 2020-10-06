@extends('layouts.admin')
@section('content')
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <h1 class="h6 mb-0 text-gray-800">Paket Travel {{ $item->title }} </h1>
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
              <h6 class="m-0 font-weight-bold text-primary">Form Paket Travel</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('transaction.update',$item->id) }}" method="post" >
                    @method('PUT')
                    @csrf
                    <div class="form-group" >
                        <label for="transaction_status">Ubah Status Transaksi</label>
                        <select name="transaction_status" class="form-control">
                            <option value="{{ $item->transaction_status }}">Jangan diubah ({{ $item->transaction_status }})</option>
                            <option value="IN_CART">In Cart</option>
                            <option value="PENDDING">Pending</option>
                            <option value="SUCCESS">Success</option>
                            <option value="CANCEL">Cancel</option>
                            <option value="FAILED">Failed</option>
                        </select>
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