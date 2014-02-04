$(function(){
	var photos = [
		'assets/img/mission1.jpg',
		'assets/img/mission2.jpg',
		'assets/img/mission3.jpg',
		'assets/img/mission4.jpg'
	];
	var slideshow = $('#slideShow').bubbleSlideshow(photos);

	$(window).load(function(){
		slideshow.autoAdvance(5000);
	});
	
	// Other valid method calls:
	
	// slideshow.showNext();
	// slideshow.showPrev();
	// slideshow.stopAutoAdvance();
});