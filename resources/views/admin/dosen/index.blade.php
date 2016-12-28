@extends('layouts.app-frontend')

@section('content')
    
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dosen</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/dosen/create') }}" class="btn btn-primary btn-xs" title="Add New dosen"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Nip </th><th> Nama Dosen </th><th> Judul Laporan </th><th> Judul KI </th><th> Tahun </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($dosen as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nip }}</td><td>{{ $item->nama_dosen }}</td><td>{{ $item->judul_laporan }}</td><td>{{ $item->judul_ki }}</td><td>{{ $item->tahun }}</td>
                                        <td>
                                            <a href="{{ url('/admin/dosen/' . $item->id) }}" class="btn btn-success btn-xs" title="View dosen"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/dosen/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit dosen"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/dosen', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete dosen" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete dosen',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $dosen->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection