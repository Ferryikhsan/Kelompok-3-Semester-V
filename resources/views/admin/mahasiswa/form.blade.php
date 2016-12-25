<div class="form-group {{ $errors->has('nim') ? 'has-error' : ''}}">
    {!! Form::label('nim', 'Nim', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nim', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nim', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    {!! Form::label('nama', 'Nama', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nama', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
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