
@extends('master')

@section('content')

		<div class="img-holder"  style="background-image:url('images/news.png');" >
		<table>
			  <tr>
			     <td>
					<h2>Weekly News</h2>
			     </td>
			  </tr>
			</table>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-push-2 col-xs-12">
					<div class="weekly-news">
						<h3>Weekly News</h3>
						<h2>Girls Coding Kosova weekly news for you just to stay updated and learn the latest technologies.</h2>
					</div>
				</div>

				@foreach (array_chunk($news->toArray(),2) as $new2)
				<div class="w-news">
					@foreach($new2 as $new)
					<div class="col-md-6 col-sm-6 col-xs-12">
						<h2>{{$new['title']}}</h2>
						<p>{{$new['description']}}</p>
						<a href="#"><i class="fa fa-facebook-official"></i></a>
						<a href="#"><i class="fa fa-twitter-square"></i></a>
						<h3 class="text-right">{{$new['posted_at']}}</h3>
					</div>
					@endforeach
				</div>
				@endforeach
				<div class="load w-news">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<h2>We Love Paris</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur adipiscing elit.</p>
						<a href="#"><i class="fa fa-facebook-official"></i></a>
						<a href="#"><i class="fa fa-twitter-square"></i></a>
						<h3 class="text-right">5 November</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="more col-md-12 col-xs-12">
					<div class="forma">
						<form>
							<input class="searchi" type="search" name="search" placeholder="Upcoming Events">
							<button class="subi" type="submit" name="submit" ><i class="fa fa-search"></i></button>
						</form>
						<p>02 upcoming events</p>
					</div>
					<a  id="load-more">Load More</a>
				</div>
			</div>
			<div class="row">
				<div class="s-media br col-md-3 col-sm-3 col-xs-6">
					<a href="#"><i class="fa fa-twitter"></i></a>
				</div>
				<div class="s-media col-md-3 col-sm-3 col-xs-6">
					<a href="#"><i class="fa fa-facebook-square"></i></a>
				</div>
				<div class="s-media br col-md-3 col-sm-3 col-xs-6">
					<a href="#"><i class="fa fa-google-plus"></i></a>
				</div>
				<div class="s-media col-md-3 col-sm-3 col-xs-6">
					<a href="#"><i class="fa fa-tumblr"></i></a>
				</div>
			</div>
		</div>

@endsection

@section('scripts')
		<script> 
			$(document).ready(function(){
			    $("#load-more").click(function(){
			        $(".load").slideToggle("slow");
			    });
			});
		</script>
		<!-- Bootstrap Scripts -->
		<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
@endsection