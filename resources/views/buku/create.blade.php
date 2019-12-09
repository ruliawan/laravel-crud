@extends('app')

@section('title')
    Siswa | Create
@endsection

@section('content')


<div class="panel panel-default">
    <div class="panel-body">
	    <h4><i class="fa fa-plus-square"></i> TAMBAH SISWA</h4>
	    <hr>
        <div class="row">
	    	<div class="col-md-3">
				<div class="list-group">
				  <a href="#" class="list-group-item active">
				    <i class="fa fa-cogs"></i> MENU SISWA
				  </a>
				  <a href="/buku" class="list-group-item"><i class="fa fa-refresh"></i> Tampilkan Semua</a>
				  <a href="/" class="list-group-item"><i class="fa fa-home"></i> Home</a>
				</div>
	        </div>

            <div class="col-md-6">
		    	<div class="panel panel-default">
	  				<div class="panel-body">

                        @include('errors.listerr')

						{!! Form::open(array('url' => '/buku')) !!}
						<div class="form-group">
							{!! Form::label('id', 'ID Siswa') !!}
							{!! Form::text('id',null, array('class' => 'form-control','placeholder'=>'ID Siswa')) !!}
						</div>
                        <div class="form-group">
							{!! Form::label('nama', 'Nama Siswa') !!}
							{!! Form::text('nama', null, array('class' => 'form-control','placeholder'=>'Nama Siswa')) !!}
						</div>
                        <div class="form-group">
							{!! Form::label('hp', 'Nomor Hp') !!}
							{!! Form::text('hp', null, array('class' => 'form-control','placeholder'=>'Nomor HP')) !!}
						</div>
                        <div class="form-group">
							{!! Form::label('email', 'Email') !!}
							{!! Form::text('email', null, array('class' => 'form-control','placeholder'=>'Email')) !!}
						</div>

						{!! Form::button('<i class="fa fa-plus-square"></i>'. ' Simpan', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}
                        {!! Form::button('<i class="fa fa-times"></i>'. ' Reset', array('type' => 'reset', 'class' => 'btn btn-danger'))!!}

						{!! Form::close()!!}
					</div>
				</div>
			</div>
        </div>
    </div>
</div>
@endsection
