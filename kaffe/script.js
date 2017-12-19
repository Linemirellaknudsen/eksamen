function initMap() {
	var kalleskaffe = {lat:55.65876611, lng:12.63101578};
			
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 14,
			center: kalleskaffe,
			mapTypeId: 'terrain'
		});

		var marker = new google.maps.Marker({
			position: kalleskaffe,
			map: map
		});
}







/* GALLARY */
function openModal() {
  document.getElementById('galleri-modal').style.display = "block";
}

function closeModal() {
  document.getElementById('galleri-modal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}