@extends('layouts.inicio')

@section('contenido')
<div class="container">
	<div class="col-md-10 col-md-offset-1">
		<h1>Ultimas Noticias</h1>
		@foreach($posts as $post)
		<div class="panel panel-default">
			<div class="panel-heading" style="color: #fff">
				<a href="{{ route('post', $post->slug)}}" style="color: #fff;text-decoration: none">
				<h4>{{$post->name}}</h4>
			</a>
			</div>
				<div class="panel-body">
					@if($post->file)
				<a href="{{ route('post', $post->slug)}}" style="color: #fff;text-decoration: none">	
					{!! Html::image( $post->file , null, array('class'=>'img-responsive animated-post'))!!}
					<!--<img src="{{ $post->file }}" class="img-responsive">-->
				</a>
					@endif
					<div class="post-extract">
					{{ $post->Previa }}
					</div>
				</div>
				<div class="panel-footer" style="text-align: right;">
				<button class="btn btn-primary"><a href="{{ route('post', $post->slug)}}" style="color: #fff;text-decoration: none">Leer mas</a></button>
				</div>
		</div>
		@endforeach
				{{ $posts->render() }}
	</div>

</div>

@include('layouts.footer')
@endsection

