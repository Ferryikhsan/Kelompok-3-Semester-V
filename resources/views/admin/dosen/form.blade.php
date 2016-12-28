<div class="form-group {{ $errors->has('nip') ? 'has-error' : ''}}">
    {!! Form::label('nip', 'Nip', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nip', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nip', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nama_dosen') ? 'has-error' : ''}}">
    {!! Form::label('nama_dosen', 'Nama Dosen', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nama_dosen', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama_dosen', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('judul_laporan') ? 'has-error' : ''}}">
    {!! Form::label('judul_laporan', 'Judul Laporan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('judul_laporan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('judul_laporan', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('judul_ki') ? 'has-error' : ''}}">
    {!! Form::label('judul_ki', 'Judul Ki', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('judul_ki', null, ['class' => 'form-control']) !!}
        {!! $errors->first('judul_ki', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tahun') ? 'has-error' : ''}}">
    {!! Form::label('tahun', 'Tahun', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tahun', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tahun', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>