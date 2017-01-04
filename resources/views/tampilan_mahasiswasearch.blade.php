@extends('layouts.app-home')

@section('content')
<div id="content" class="container">
<div class="row margin-top-30">
				<div class="col-md-12 text-center">
					<h2 class"text-center">Perpustakaan Politeknik Pertanian Negeri Samarinda</h2>
					<p class"text-center">Referensi Karya Ilmiah Politeknik Pertanian Negeri Samarinda</p>
				</div>
			</div>        
				<div class="row margin-top-30">
				<div class="col-md-13 text-center">

					
					
						
						

						
						<div class="row col-md-9">
						</div>


							
					<div class="row col-md-8">
					</div>

						
						{!! Form::open(['method'=>'GET', 'url'=>'carimhs', 'role'=>'search'])!!}
						<div class="input-group custom-search-form" >
							<input type="text" class="form-control" name="search" placeholder="Search...">
							<span class="input-group-btn">
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="fa fa-search"></i>Search</button>
								</span>
								
							</span>
						</div>
						{!!Form::close()!!}
					</div>
					
					

<table class="table table-bordered">
	<tr>
		</tr>
    <tr>
        <td align="center" class="ta">NIM</th>
        <td align="center" class="ta">Nama Mahasiswa</th>
        <td align="center" class="ta">Judul Laporan</th>
        <td align="center" class="ta">Judul Karya Ilmiah</th>
        <td align="center" class="ta">Tahun</th>

        
    </tr>
    @foreach($mahas as $item)    
    <tr>
        <td align="center" class="ta">{{$item->nim}}</td>
        <td align="center" class="ta">{{$item->nama}}</td>
        <td align="center" class="ta">{{$item->judul_laporan}}</td>
        <td align="center" class="ta">{{$item->judul_ki}}</td>
        <td align="center" class="ta">{{$item->tahun}}</td>
        
    </tr>
    @endforeach

    
</table>

				</div>
			</div>
			
			<div class="row">
				<!-- Portfolio -->
				<!-- Portfolio Item -->
				
				
			</div>
			<div class="row">
				
			</div>
		</div>
	</div>
	<!-- === END CONTENT === -->
	@endsection