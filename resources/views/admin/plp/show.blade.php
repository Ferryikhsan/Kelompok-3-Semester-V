@extends('layouts.app-frontend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">plp {{ $plp->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('admin/plp/' . $plp->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit plp"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/plp', $plp->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete plp',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $plp->id }}</td>
                                    </tr>
                                    <tr><th> Nip </th><td> {{ $plp->nip }} </td></tr><tr><th> Nama Plp </th><td> {{ $plp->nama_plp }} </td></tr><tr><th> Judul Laporan </th><td> {{ $plp->judul_laporan }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection