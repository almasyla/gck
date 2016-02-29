@extends('master')

@section('content')

		<div class="img-holder"  style="background-image:url('images/events.png');" >
		<table>
			  <tr>
			     <td>
					<h2>Upcoming Events</h2>
			     </td>
			  </tr>
			</table>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-push-2 col-xs-12">
					<div class="weekly-news">
						<h3>Events</h3>
						<h2>Girls Coding Kosova weekly news for you just to stay updated and learn the latest technologies.</h2>
					</div>
				</div>
				<div class="col-md-12 col-xs-12">
					<div class="form-events">
						<form>
						   <div class="dropdown">
						    <button class="btn dropi dropdown-toggle" type="button" data-toggle="dropdown">Upcoming Events
						    <span class="caret"></span></button>
						    <ul class="dropdown-menu">
						      <li><a href="#">Event1</a></li>
						      <li><a href="#">Event2</a></li>
						      <li><a href="#">Event3</a></li>
						    </ul>
						  </div>
						</form>
						<p>02 upcoming events</p>
					</div>
				</div>
				@foreach($events as $event)
				<div class="w-news">
					<div class="br1 col-md-8 col-sm-6 col-xs-12">
						<h2>{{$event->title}}</h2>
						<p>{{$event->description}}</p>
						<a href="#"><i class="fa fa-facebook-official"></i></a>
						<a href="#"><i class="fa fa-twitter-square"></i></a>
						<h3 class="text-right">Read More</h3>
					</div>
					<div class=" col-md-4 col-sm-6 col-xs-12">
						<h2>{{$event->start_end_date}}</h2>
						<div class="ev">
							<h3>{{$event->start_time}}-{{$event->end_time}}</h3>
							<h3>{{$event->location}}</h3>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
@endsection

@section('scripts')
		<!-- Bootstrap Scripts -->
		<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
		<!-- BxSlider Scripts -->
		<script src="plugins/bxslider/jquery.bxslider.js"></script>
		<!-- Scripts -->
@endsection