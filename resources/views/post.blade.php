@extends('layouts.inicio')

@section('contenido')

<div class="container">
	<div class="col-md-10 col-md-offset-1">

		

		<div class="panel panel-default">
			<div class="panel-heading">
				<h2 id="post-new-tittle">{{$post->name}}</h2>
				<p id="category">Categoria:
				
				<span id="post-category">{{ $post->category->name }}</span ></p> 
			</div>
				<div class="panel-body">
					@if($post->file)

					{!! Html::image( $post->file , null, array('class'=>'img-responsive'))!!}
					<!--<img src="{{ $post->file }}" class="img-responsive">-->
					@endif

					<hr>
					<div id="post-body">
					{{ $post->body }}
					</div>
					<hr>

					Tags:

					@foreach($post->tags as $tag)

					<a href="#">
						{{ $tag->name }}

					</a>

					@endforeach
					
				</div>
		</div>
		
	</div>

</div>

@include('layouts.footer')
@endsection

