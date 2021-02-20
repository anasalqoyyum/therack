@extends('layouts.app')

@section ('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2 mt-3">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center">Cara Pemesanan</h2>
                    <br>
                    <h3 class="card-text">Pesanan Online:</h3>
                    <ul class="card-body">
                        <li><span>Daftarkan diri Anda dengan memasukkan email,
                                nomor telefon dan alamat Anda. <a style="font-weight:bold;"
                                    href="{{route('register')}}">Daftar disini</a>.</span></li>
                        <li><span>Setelah Anda berhasil mendaftar, silahkan Login
                                ke akun Anda. <a style="font-weight:bold;" href="{{route('login')}}">Login
                                    disini</a></span></li>
                        <li><span>Pilih produk yang akan Anda pesan.</span></li>
                        <li><span>Masukkan data pesanan Anda dengan
                                lengkap.</span></li>
                        <li><span>Setelah yakin dengan jenis dan data pesanan yang
                                Anda masukkan maka silahkan mengirim pesanan online Anda.</span></li>
                        <li><span>Untuk meyakinkan kepada kami bahwa pesanan Anda
                                telah benar dan konfirmasi pembayaran pesanan Anda, silahkan konfirmasi kepada kami
                                melalui layanan pesan Whatsapp di nomor : 089681197987.</span></li>
                        <li><span>Setelah konfrimasi pesanan &amp; pembayaran Anda
                                akan kami proses langsung pesanan Anda.</span></li>
                        <li><span>Pengiriman barang sesuai dengan alamat
                                tujuan.</span></li>
                    </ul>
                    <br>
                    <h3 class="card-text">Pesanan Melalui WhatsApp:</h3>
                    <ul class="card-body">
                        <li><span>Pilih jenis produk yang ingin Anda pesan.</span></li>
                        <li><span>Hubungi kami melalui pesan Whatsapp (untuk kontak Whasapp ada di kontak kami).
                            </span></li>
                        <li><span>Kirim gambar yang telah Anda pilih.
                            </span></li>
                        <li><span>Kami proses pemesanan Anda & konfrimasi pembayaran Anda.
                            </span></li>
                        <li><span>Pengiriman barang sesuai dengan alamat tujuan.
                            </span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection