@extends('layouts.app')

@section('content')	

	<div class="spacer"></div>

	<div class="container">
		<div class="row">
			@isset($products)
				@foreach($products as $product)
					<div class="col-md-3">
						<div class="card">
							<img class="card-img-top" src="{{ asset('images/product.svg') }}" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">{{ $product->description }}</h5>
								<p class="card-text">{{ $product->provider }}</p>
								<a href="#" class="btn btn-primary">{{ $product->price }}</a>
							</div>
						</div>					
					</div>	
				@endforeach			    
			@endisset

			@empty($products)
				<div class="col-md-12">
					<p>
						Nenhum registro encontrado para a sua busca. <a href="{{ route('initial') }}">Clique aqui</a> para buscar novamente.
					</p>
				</div>			    
			@endempty			
		</div>
	</div>
@stop