@extends('app')

@section('title')
    Siswa | Show
@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <h4><i class="fa fa-book"></i> {{ strtoupper($buku->nama) }}</h4><hr>
            <div class="row">

                <div class="col-md-3">
                    <div class="list-group">
                        <a href="#" class="list-group-item active"><i class="fa fa-cogs"></i> MENU SISWA</a>
				        <a href="/buku" class="list-group-item"><i class="fa fa-refresh"></i> Tampilkan Semua</a>
				        <a href="/" class="list-group-item"><i class="fa fa-home"></i> Home</a>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-condensed">
                            <thead align="center">
                                <tr>
				 			        <td colspan="2"><strong>DETAIL INFORMASI</strong></td>
				 		        </tr>
					        </thead>
                            <tbody>
                                <tr>
                                    <td><b>ID Siswa</b></td>
                                    <td>{{ $buku->id }}</td>
                                </tr>
                                <tr>
                                    <td><b>Nama Siswa</b></td>
                                    <td>{{ $buku->nama }}</td>
                                </tr>
                                <tr>
                                    <td><b>Nomor HP</b></td>
                                    <td>{{ $buku->hp }}</td>
                                </tr>
                                <tr>
                                    <td><b>Email</b></td>
                                    <td>{{ $buku->email }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
