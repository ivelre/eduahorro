/*
 * N-System Slideshow
 * @author Norman "Spawnie" Malessa
 * @license GPLv3 http://www.gnu.org/licenses/gpl.html
 * @email info@n-system.de
 * @url http://www.n-system.de/
 */


function doSlideshow(slideWidth, slideHeight, slideTime) {
	slideCurrent++;
	//alert(slideCurrent);
	if (slideCurrent == slideNum) {
		slideCurrent = 0;
	}
	$nj("#nsys_slideshow_img2").empty();
	$nj("#nsys_slideshow_img2").append('<img alt="slideshow" src="' + slideImages[slideCurrent] + '" style="width:' + slideImagesWidth[slideCurrent] + 'px;height:' + slideImagesHeight[slideCurrent] + 'px;" />');
	$nj(window).ready(function () {
		$nj("#nsys_slideshow_img2").fadeIn( slideTime, function () {
			$nj("#nsys_slideshow_img1").html('<img alt="slideshow" src="' + slideImages[slideCurrent] + '" style="width:' + slideImagesWidth[slideCurrent] + 'px;height:' + slideImagesHeight[slideCurrent] + 'px;" />');
			$nj("#nsys_slideshow_img2").css({'display':'none'});
		});
	});
	return true;
}
	


function startSlideshow(slideDuration, slideWidth, slideHeight, slideTime) {
	window.setInterval("doSlideshow("+slideWidth+", "+slideHeight+", "+slideTime+")", slideDuration);
}