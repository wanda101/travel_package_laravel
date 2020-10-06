@extends('layouts.checkout')

@section('title')
    Checkout
@endsection

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
      <div class="container">
        <div class="row">
          <div class="col p-0">
            <nav>
              <ul class="breadcrumb">
                <li class="breadcrumb-item">Paket Travel</li>
                <li class="breadcrumb-item">Details</li>
                <li class="breadcrumb-item active">Checkout</li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              @if ($errors->any())
              <div class="alert alert-danger" >
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
              @endif
              <h1>Who is Going</h1>
              <p>
                Trip to {{ $item->travel_package->title }}, {{ $item->travel_package->location }}
              </p>
              <div class="attendee">
                <table class="table table-responsive-sm text-center">
                  <thead>
                    <tr>
                      <td>Picture</td>
                      <td>Name</td>
                      <td>Nasionaliti</td>
                      <td>Visa</td>
                      <td>Passport</td>
                      <td>Action</td>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($item->details as $detail)
                    <tr>
                      <td>
                        <img src="https:ui-avatars.com/api/?name={{ $detail->username }}" height="60" class="rounded-circle">
                      </td>
                      <td class="align-middle">{{ $detail->username }}</td>
                      <td class="align-middle">{{ $detail->nationality }}</td>
                      <td class="align-middle">{{ $detail->is_visa ? '30 Days' : 'N/A' }}</td>
                      <td class="align-middle">{{ \Carbon\Carbon::createFromDate($detail->doe_passport) > \Carbon\Carbon::now() ? 'Active' : 'Inactive' }}</td>
                      <td class="align-middle">
                        <a href="{{ route('checkout-remove', $detail->id) }}">
                          <img src="{{ url('/frondend/images/ic_remove.png') }}" alt="">
                        </a>
                      </td>
                    </tr>
                    @empty
                        <tr>
                          <td colspan="6" class="text-center" > No Visitor </td>
                        </tr>
                    @endforelse
                   
                  </tbody>
                </table>
              </div>
              <div class="member mt-3">
                <h2>Add Members</h2>
                <form action="{{ route('checkout-create',$item->id) }}" method="POST" class="form-inline">
                  @csrf
                  <label for="username" class="sr-only">Username</label>
                  <Input type="text" name="username" class="form-control mb-2 mr-sm-2" for="username" placeholder="Username" />

                  <label for="nationality" class="sr-only">Nationality</label>
                  <Input type="text" name="nationality" style="width: 50px" class="form-control mb-2 mr-sm-2" for="nationality" placeholder="Nationality" />

                  <label for="is_visa" class="sr-only">visa</label>
                  <select name="is_visa" id="is_visa" class="form-control mb-2 mr-sm-2">
                    <option value="" selected>Visa</option>
                    <option value="1">30 Day</option>
                    <option value="0">N/A</option>
                  </select>

                  <label for="doe_passport" class="sr-only">DOE Passport</label>
                  <div class="input-group mb-2 mr-sm-2">
                    <input type="text" style="width: 150px" name="doe_passport" class="form-control datepicker" id="doe_passport" placeholder="DOE Passport">
                  </div>

                  <button type="submit" class="btn btn-add-now mb-2 px-3">
                    Add Now
                  </button>
                </form>

                <h3 class="mt-2 mb-0">Note</h3>
                <p class="disclaimer mb-0">
                  You are only able to invite member that has registered in travel dewa.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-details card-right">

              <h2>Checkout Informasion</h2>
              <table class="trip-informations">
                <tr>
                  <th width="50%">Members</th>
                  <td width="50%" class="text-right">
                    {{ $item->details->count() }} Person
                  </td>
                </tr>
                <tr>
                  <th width="50%">Additional Visa</th>
                  <td width="50%" class="text-right">
                    RP. {{ $item->aditional_visa }},00
                  </td>
                </tr>
                <tr>
                  <th width="50%">Trip Price</th>
                  <td width="50%" class="text-right">
                    RP. {{ $item->travel_package->price }},00 / person
                  </td>
                </tr>
                <tr>
                  <th width="50%">Total</th>
                  <td width="50%" class="text-right">
                    RP. {{ $item->transaction_total }},00
                  </td>
                </tr>
                <tr>
                  <th width="50%">Total (+Unique Code)</th>
                  <td width="50%" class="text-right">
                    <span class="text-blue">RP. {{ $item->transaction_total }},</span>
                    <span class="text-orange">{{ mt_rand(0,99) }}</span>
                  </td>
                </tr>
              </table>
              <hr>
              <h2>Payment Intructions</h2>
              <p class="payment-intructions">
                Plase complete your payment before to continue the wonderfull trip
              </p>
              <div class="bank">
                <div class="bank-item pb-3">
                  <img src="{{ url('/frondend/images/ic_bank.png') }}" class="bank-image" alt="">
                  <div class="descripsion">
                    <h3>PT Travel Dewa</h3>
                    <p>
                      6842 4286 6733
                      <br>
                      Bank Central Asia
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="bank-item pb-3">
                  <img src="{{ url('/frondend/images/ic_bank.png') }}" class="bank-image" alt="">
                  <div class="descripsion">
                    <h3>PT Travel Dewa</h3>
                    <p>
                      6842 4286 6733
                      <br>
                      Bank Central Asia
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>

            </div>
            <div class="join-container">
              <a href="{{ route('checkout-success', $item->id) }}" class="btn btn-block btn-join-now mt-3 py-2">
                I Have Made Payment
              </a>
            </div>
            <div class="text-center mt-3">
              <a href="{{ route('detail', $item->travel_package->slug) }}" class="text-muted">
                Cencel Boking
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frondend/libraries/gijgo-master/dist/combined/css/gijgo.min.css') }}" />
@endpush

@push('addon-script')
<script src="{{ url('frondend/libraries/gijgo-master/dist/combined/js/gijgo.min.js') }}"></script>
  <script>
    $(document).ready(function () {
      $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        uilibrary: 'bootstrap4',
        icons: {
          rightIcon: '<img src="{{ url('frondend/images/ic_doe.png') }}" />'
        }
      });
    });
  </script>
@endpush