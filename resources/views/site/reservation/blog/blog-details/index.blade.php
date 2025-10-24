@extends('site.reservation.layouts.main')
@section('title', $offer->title)
@section('content')

<div class="container mt-5 mb-5">
	<div class="row justify-content-center">
		<div class="col-lg-8">
			<div class="card">
				<img class="card-img-top" src="{{ asset('uploads/offers/' . $offer->image) }}" alt="{{ $offer->title }}">
				<div class="card-body">
					<h3>{{ $offer->title }}</h3>
					<p class="text-muted">{{ \Carbon\Carbon::parse($offer->offer_date)->format('d M, Y') }}</p>
					<p>{{ $offer->description }}</p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
