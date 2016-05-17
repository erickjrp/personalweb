@extends('layouts.proba.public')

@section('content')

<div class="fondo_gris">

	<div class="container">

		@include('public.proba.index_components.galeria_md_lg')

		@include('public.proba.index_components.galeria_xs_sm')

	</div>

</div>

@endsection