document.addEventListener( 'DOMContentLoaded', function () {
	new Splide( '#image-slider', {
        'type': 'loop',
        'autoplay': true,
		'cover'      : true,
		'heightRatio': 0.5,

	} ).mount();
} );