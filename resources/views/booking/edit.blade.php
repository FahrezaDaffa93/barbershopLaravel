<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Pemesanan</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    @php
    $id = request()->route('id'); // Mengambil nilai 'id' dari route
    $kasirs = \App\Models\Kasir::all();
    $dataBookings = \App\Models\DataBooking::all(); // Mengganti nama variabel menjadi $dataBookings
    $booking = \App\Models\Booking::find($id);
    @endphp

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg" style="margin-top: 107px;">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">EDIT BOOKING</h1>
                            </div>
                            <form method="POST" action="{{ route('booking.update', ['id' => $booking->id_booking]) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <input type="hidden" class="form-control form-control-user" id="exampleInputUsername"
            placeholder="nama" name="id" value="{{ $booking->id_booking }}">
    </div>
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="exampleInputUsername"
            placeholder="Nama" name="nama" value="{{ $booking->nama }}">
    </div>
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="exampleInputUsername"
            placeholder="no_telpon" name="no_telpon" value="{{ $booking->no_telpon }}">
    </div>
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="exampleInputUsername"
            placeholder="Jenis Pelayanan" name="jenis_pelayanan" value="{{ $booking->jenis_pelayanan }}">
    </div>
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="exampleInputEmail"
            placeholder="Tanggal Booking" name="tanggal_booking" value="{{ $booking->tanggal_booking }}">
    </div>

    <div class="form-group">
        <input type="number" class="form-control form-control-user" id="exampleInputPassword"
            placeholder="No Antrian" name="jam_booking" value="{{ $booking->jam_booking }}">
    </div>
    <div class="form-group">
        <select class="form-control form-select" name="id_kasir">
            <option value="">Status</option>
            @foreach($dataBookings as $dataBooking)
                <option value="{{ $dataBooking->stats }}" @if($booking->stats == $dataBooking->stats) selected @endif>
                    {{ $dataBooking->stats }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <select class="form-control form-select" name="id_kasir">
            <option value="">Pilih Kasir</option>
            @foreach($kasirs as $kasir)
                <option value="{{ $kasir->id_kasir }}" @if($kasir->id_kasir == $booking->id_kasir) selected @endif>
                    {{ $kasir->username }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit" name="update" class="btn btn-primary btn-user btn-block">TAMBAHKAN</button>
</form>

                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{ url('/login') }}"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

   <!-- Bootstrap core JavaScript -->
   <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript -->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages -->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>

</html>
