@extends('app')

@section('title')
    Siswa | Edit
@endsection

@section('content')


<div class="panel panel-default">
    <div class="panel-body">
	    <h4><i class="fa fa-check-square"></i> EDIT SISWA : {{ $buku->nama }}</h4>
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

						{!! Form::model($buku,['method'=>'PATCH','action'=>['BukuController@update',$buku->id]]) !!}
						<div class="form-group">
							{!! Form::label('id', 'ID Siswa') !!}
							{!! Form::text('id',null, array('class' => 'form-control','placeholder'=>'ID Siswa','readonly')) !!}
						</div>
                        <div class="form-group">
							{!! Form::label('nama', 'Nama Siswa') !!}
							{!! Form::text('nama', null, array('class' => 'form-control','placeholder'=>'Nama Siswa')) !!}
						</div>
                        <div class="form-group">
							{!! Form::label('hp', 'Nomor HP') !!}
							{!! Form::text('hp', null, array('class' => 'form-control','placeholder'=>'Nomor HP')) !!}
						</div>
                        <div class="form-group">
							{!! Form::label('email', 'Email') !!}
							{!! Form::text('email', null, array('class' => 'form-control','placeholder'=>'Email')) !!}
						</div>
						{!! Form::button('<i class="fa fa-check-square"></i>'. ' Update', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}

						{!! Form::close()!!}
					</div>
				</div>
			</div>
        </div>
    </div>
</div>
@endsection
