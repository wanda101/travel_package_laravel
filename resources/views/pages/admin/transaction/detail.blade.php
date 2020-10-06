@extends('layouts.admin')
@section('content')
            <!-- Begin Page Content -->
<div class="container-fluid">

                <!-- Page Heading -->
                {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <h1 class="h6 mb-0 text-gray-800">Detail Transaction {{ $item->user->name }} </h1> --}}
                  {{-- {{ $item->title }} --}}
                {{-- </div> --}}

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
        <div class="card shadow mb-12">
            <div class="card-header py-12">
              <h6 class="m-0 font-weight-bold text-primary">Detail Transaction</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="invoice-title">
                            <h2>Invoice</h2><h3 class="pull-right">Order # {{ $item->id }}</h3>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <address>
                                <strong>Billed To:</strong><br>
                                Name : {{ $item->user->name }}<br>
                                Paket : {{ $item->travel_package->title }}<br>
                                Visa : {{ $item->additional_visa }}<br>
                                Total Transaksi : {{ $item->transaction_total }}<br>
                                
                                </address>
                            </div>
                            <div class="col-lg-6 col-sm-6 text-right">
                                
                                <strong>Status: <span class="btn btn-warning" >{{ $item->transaction_status }}</span></strong><br>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Order summary</strong></h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <td><strong>#</strong></td>
                                                <td class="text-center"><strong>Username</strong></td>
                                                <td class="text-center"><strong>Nationality</strong></td>
                                                <td class="text-center"><strong>Visa</strong></td>
                                                <td class="text-center"><strong>Doe Passport</strong></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                            <?php $no=1; ?>
                                            @foreach ($item->details as $detail)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td class="text-center" >{{ $detail->username }}</td>
                                                <td class="text-center">{{ $detail->nationality }}</td>
                                                <td class="text-center">{{ $detail->is_visa ? '30 Days' : 'N/A'  }}</td>
                                                <td class="text-center">{{ $detail->doe_passport }}</td>
                                            </tr>
                                            @endforeach
                                            {{-- <tr>
                                                <td class="thick-line"></td>
                                                <td class="thick-line"></td>
                                                <td class="thick-line text-center"><strong>Subtotal</strong></td>
                                                <td class="thick-line text-right">$670.99</td>
                                            </tr>
                                            <tr>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line text-center"><strong>Shipping</strong></td>
                                                <td class="no-line text-right">$15</td>
                                            </tr> --}}
                                            {{-- <tr>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line text-center"><strong>Total</strong></td>
                                                <td class="no-line text-right">$685.99</td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <td>{{ $item->id }}</td>
                        </tr>
                        <tr>
                            <th>Paket Travel</th>
                            <td>{{ $item->travel_package->title }}</td>
                        </tr>
                        <tr>
                            <th>Pembeli</th>
                            <td>{{ $item->user->name }}</td>
                        </tr>
                        <tr>
                            <th>Additional Visa</th>
                            <td>{{ $item->additional_visa }}</td>
                        </tr>
                        <tr>
                            <th>Total Transaksi</th>
                            <td>{{ $item->transaction_total }}</td>
                        </tr>
                        <tr>
                            <th>Status Transaksi</th>
                            <td>{{ $item->transaction_status }}</td>
                        </tr>
                        <tr>
                            <th>Pembelian</th>
                            <td>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Nationality</th>
                                        <th>Visa</th>
                                        <th>Doe Passport</th>
                                    </tr>
                                    @foreach ($item->details as $detail)
                                    <tr>
                                        <td>{{ $detail->id }}</td>
                                        <td>{{ $detail->username }}</td>
                                        <td>{{ $detail->nationality }}</td>
                                        <td>{{ $detail->is_visa ? '30 Days' : 'N/A'  }}</td>
                                        <td>{{ $detail->doe_passport }}</td>
                                    </tr>
                                    @endforeach
                                </table>
                            </td>
                        </tr>

                </table> --}}
            </div>
        </div>
      
</div>
              <!-- /.container-fluid -->
@endsection