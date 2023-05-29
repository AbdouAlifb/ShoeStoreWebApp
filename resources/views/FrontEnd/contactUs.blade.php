@extends('FrontEnd.headerFouter')

@section('content')





		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h3>Contact Information</h3>
						<div class="row contact-info-wrap">
							<div class="col-md-3">
								<p><span><i class="icon-location"></i></span> 198 West 21th Street, <br> Suite 721 New York NY 10016</p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-globe"></i></span> <a href="#">yoursite.com</a></p>
							</div>
						</div>
					</div>
				</div>
				@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

				<div class="row">
					<div class="col-md-6">
						<div class="contact-wrap">
							<h3>Get In Touch</h3>
							<<form action="{{ route('contact.store') }}" method="POST" class="contact-form">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="first_name" class="form-control" placeholder="Your firstname">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="last_name" class="form-control" placeholder="Your lastname">
            </div>
        </div>
        <div class="w-100"></div>
        <div class="col-sm-12">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control" placeholder="Your email address">
            </div>
        </div>
        <div class="w-100"></div>
        <div class="col-sm-12">
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" class="form-control" placeholder="Your subject of this message">
            </div>
        </div>
        <div class="w-100"></div>
        <div class="col-sm-12">
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
            </div>
        </div>
        <div class="w-100"></div>
        <div class="col-sm-12">
            <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary">
            </div>
        </div>
    </div>
</form>

						</div>
					</div>
					<div class="col-md-6">
						<div id="map" class="colorlib-map"></div>		
					</div>
				</div>
			</div>
		</div>

@endsection