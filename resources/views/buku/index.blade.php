@extends('app')

@section('title')
    Siswa | Index
@endsection

@section('content')
<div class="panel panel-default">
    <div class="panel-body">
        <h4><i class="fa fa-book"></i> DAFTAR SISWA</h4><hr>

        <div class=row>
            <div class="col-md-6">
                <a href="/buku/create" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah</a>
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-4">
            </div>
        </div><br>

        <!-- Flash Message -->
        @if(Session::has('msg'))
            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="fa fa-info-circle"></i> {{ Session::get('msg') }}
            </div>
        @endif

        @if($bukus->count())
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover table-condensed tfix">
                <thead align="center">
                       <tr>
                           <td><b>ID</b></td>
                           <td><b>Nama Siswa</b></td>
                           <td><b>Nomor HP</b></td>
                           <td><b>Email</b></td>
                           <td colspan="3"><b>MENU</b></td>
                       </tr>
                   </thead>
                   @foreach($bukus as $buku)
                       <tr>
                           <td align="center"> {{ $buku->id }} </td>
                           <td> {{ $buku->nama}} </td>
                           <td> {{ $buku->hp}} </td>
                           <td> {{ $buku->email}} </td>
                           <td align="center" width="30px">
                               <a href="/buku/{{$buku->id}}" class="btn btn-info btn-sm" role="button"><i class="fa fa-info-circle"></i> Detail</a>
                           </td>
                           <td align="center" width="30px">
                               <a href="/buku/{{$buku->id}}/edit" class="btn btn-warning btn-sm" role="button"><i class="fa fa-pencil-square"></i> Edit</a>
                           </td>
                           <td align="center" width="30px">
                               {!! Form::open(array(
                                    'route' => array('buku.destroy', $buku->id),
                                    'method' => 'delete',
                                    'id' => $buku->id,
                                    'style' => 'display:inline')) !!}
                                    <button class='btn btn-sm btn-danger delete-btn'
                                            type='button'
                                            data-judulbuku='{{ $buku->nama}}'
                                            data-formid='{{ $buku->id}}'>
                                        <i class='fa fa-times-circle'></i> Hapus
                                    </button>
                                {!! Form::close() !!}

                           </td>
                       </tr>
                   @endforeach
                   @include('includes.confirm')
                </table>
            </div>
            <!-- PAGINATION -->
            {!! $bukus->links() !!}
        @else
            <div class="alert alert-warning">
                <i class="fa fa-exclamation-triangle"></i> Data Siswa tidak tersedia
            </div>
        @endif

    </div>
</div>



@endsection
