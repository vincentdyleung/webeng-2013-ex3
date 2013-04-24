function autoSlideShow(){
	nextImage($("#img-list li.active"));
}

function nextImage(currentImg) {
	var nextImg = (currentImg.next().length > 0) ? currentImg.next() : $('#img-list li:first');
	currentImg.removeClass("active");
	setCenterImg(nextImg);
}

function prevImage(currentImg) {
	var prevImg = (currentImg.prev().length > 0) ? currentImg.prev() : $('#img-list li:last');
	currentImg.removeClass("active");
	setCenterImg(prevImg);
}

function setCenterImg(thumbnail) {
	thumbnail.toggleClass("active", true);
	var largeImgSrc = thumbnail.children("img").attr("src");
	$("#center-img").attr("src", largeImgSrc);
}

$(document).ready(function() {
	var slideShowInterval = 2000;
	$("#forward-button").click(function() {
		var currImg = $(".selected-img");
		$(".selected-img").parent().next().find("img").addClass("selected-img");
		currImg.removeClass("selected-img");
	});
	
	//1.automatic slideshow
	var intervalID;
	var autoPlay = true;
		
	$("#play-pause-button").click(function() {
		if ($(this).hasClass("ui-icon-play")) {
			intervalID = setInterval("autoSlideShow()", slideShowInterval);
			$(this).removeClass("ui-icon-play");
			$(this).addClass("ui-icon-pause");
			autoPlay = true;
		} else if ($(this).hasClass("ui-icon-pause")) {
			clearInterval(intervalID);
			$(this).addClass("ui-icon-play");
			$(this).removeClass("ui-icon-pause");
			autoPlay = false;
		}
	});
	
	//2.thumbmail
	$("#img-list li").click(function(){
		clearInterval(intervalID);
		$("#img-list li.active").removeClass("active");
		setCenterImg($(this));
		if (autoPlay){
			intervalID = setInterval("autoSlideShow()", slideShowInterval);
		}
	});
	
	//back and forward
	$("#back-button").click(function() {
		clearInterval(intervalID);
		prevImage($("#img-list li.active"));
		if (autoPlay){
			intervalID = setInterval("autoSlideShow()", slideShowInterval);
		}
	});
	$("#forward-button").click(function() {
		clearInterval(intervalID);
		nextImage($("#img-list li.active"));
		if (autoPlay){
			intervalID = setInterval("autoSlideShow()", slideShowInterval);
		}
	});
	
	intervalID = setInterval('autoSlideShow()', slideShowInterval);
        
        //multitouch
	// $.touch.triggerMouseEvents = true;			

	// $(imgArea).touchable({
	// 	touchDown: function(e, touchHistory) {
	// 	},
	// 	touchMove: function(e, touchHistory) {
	// 	},
	// 	touchUp: function(e, touchHistory) {
	// 		var th = touchHistory.stop({
	// 			type : 'touchDown'
	// 		});
	// 		console.log(th.size());
	// 		th = th.filter({
	// 			type: 'touchmove'
	// 		});
	// 		console.log(th.size());
	// 		if (th.match({ deltaX: '<-50' })) {
	// 			clearInterval(intervalID);
	// 			prevImage($("#img-list li.active"));
	// 			if (autoPlay){
	// 				intervalID = setInterval("autoSlideShow()", slideShowInterval);
	// 			}    
	// 		} else if (th.match({ deltaX: '>50' })) {				
	// 			clearInterval(intervalID);
	// 			nextImage($("#img-list li.active"));
	// 			if (autoPlay){
	// 				intervalID = setInterval("autoSlideShow()", slideShowInterval);
	// 			}
	// 		}
	// 			$.touch.history.empty(); // clear touch history
	// 	}
	// });


});
