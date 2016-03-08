@extends('layout.newmaster')
	
	@section('navBar')
		
		@include('partials.navBar')

	@endsection

	@section('eventSlider')
		
		@include('events.eventSlider')

	@endsection

	@section('content')

		@include('music.featured')
		@include('social.news')
	
	@endsection

	


