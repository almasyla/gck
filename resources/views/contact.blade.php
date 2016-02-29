@extends('master')
@section('content')
<div class="img-holder img-pos" style=" background-image:url('images/contact.png'); ">
<table>
	  <tr>
	     <td>
			<h2>Contact Us</h2>
	     </td>
	  </tr>
	</table>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-push-2 col-xs-12">
			<div class="weekly-news">
				<h3>Contact Us</h3>
				<h2>You can call us on <span>+377 44 231 212</span> or find us at <span>Street Muharrem Fejza, Prishtine</span>.</h2>
				<h2>For more contact us with the form below.</h2>
			</div>
		</div>
		<form action="contact" method="post">
			<div class="contact-form col-md-12 col-xs-12">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<h3>Your Name</h3>
					<input type="text" name="name"/>
					<h3>Your E-mail</h3>
					<input type="email" name="email"/>
					<h3>Reason for contact</h3>
					<input type="text" name="reason" placeholder="Donating"/>
				</div>
				<div class="col-md-8 col-sm-8 col-xs-12">
					<h3>Your Message</h3>
					<textarea name="description" rows="10" placeholder="Can I come and visit your place first, I'm planning to donate!"></textarea>
				</div>
				<div class="col-md-12 col-xs-12">
					<button type="submit">Send Email</button>
				</div>
			</div>
		</form>
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
<!-- Bootstrap Scripts -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- BxSlider Scripts -->
<script src="plugins/bxslider/jquery.bxslider.js"></script>
<!-- Scripts -->
<script src="js/scripts.js"></script>	
@endsection