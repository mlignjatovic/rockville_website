<section class="contact">
	<h1>Contact Rockville Remodeling</h1>
	<article class="contact-data row">
		<div class="data-info small-12 medium-6 columns">
			<p>Please describe the nature of your project or leave us your feedback. We will attempt to answer your request immediately. Otherwise, please leave a voicemail and we'll contact you the next business day. Whether you have a simple question or a complex job, Rockville Remodeling, Inc. is ready to assist you.</p>
			<address>Rockville, Maryland 20850 United States</address>
			<a href="mailto:help@rockvilleremodeling.com">help@rockvilleremodeling.com</a>
			<p>Phone: (240) 731-8811</p>
			<p><strong><em>We are available from 8:am to 6:00pm Monday through Friday.</em></strong></p>
		</div>
		<div class="small-12 medium-6 columns">
			<div id="map"></div>
		</div>
	</article>
	<article class="contact-form">
		<h2>Get in touch with us</h2>
		<p><?php echo $SESSION['errors']; ?></p>
		<form class="row" action="/sendemail" method="post">
			<fieldset  class="small-12 medium-6 medium-offset-3 columns">
				<label>
					  Name
					  <input type="text" name="name" placeholder="Enter full name">
				</label>
				<label>
					  Address
					  <input type="text" name="address" placeholder="Enter your adress">
				</label>
				<label>
					  Email
					  <input type="email" name="email" placeholder="Enter your email">
				</label>
				<label>
					  Describe your project
					  <textarea name="message" placeholder="Describe your project or just leave a feedback"></textarea>
				</label>
			</fieldset>
			<div class="small-12  medium-9 medium-offset-3 columns">
				<input class="button" type="submit" name="submit-contact" value="Send">
			</div>
		</form>
	</article>
</section>
<script>
      function initMap() {
        var uluru = {lat: 39.0938952, lng: -77.223252};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWYPAJcEXItYcNCTgP1PVVaxNEjQQ0oxM&callback=initMap">
</script>