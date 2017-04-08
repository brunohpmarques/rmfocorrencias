var ocrModal = null;
var respModal = null;
var novModal = null;
var avaModal = null;
var ratingModal = null;
var rating = null;

$(document).ready(function(){
	ocrModal = $('#ocrModal');
	respModal = $('#respModal');
	novModal = $('#novModal');
	avaModal = $('#avaModal');
	ratingModal = $('#ratingModal');
	rating = $('.rating');

	$().showUp('.navbar', {
		upClass: 'navbar-show',
		downClass: 'navbar-hide'
	});

	/* MODALS */
	$('.showOcr').on('click', function(){
		var modalStatus = $(ocrModal.find('#modal-status')[0]);
		var currentStatus = $($(this).find('.label')[0]).clone();
		var modalImg = $(ocrModal.find('#modal-img')[0]);
		var currentImg = $($(this).find('.img-ocorrencia')[0]).clone();

		modalStatus.html(currentStatus);
		modalImg.attr('src', $(currentImg).css('background-image')
			.replace('url(','').replace(')','').replace(/\"/gi, ""));

		ocrModal.show();
	});

	$('.showResp').on('click', function(){
		$(this).data("uri");
		$(this).data("type");
	});

	$('.showAva').on('click', function(){
		$(this).data("uri");
	});
	/* END MODALS */

	/* RATING */
	rating.rating({
		start: 0,
  		stop: 5,
  		filled: 'glyphicon glyphicon-star',
  		empty: 'glyphicon glyphicon-star-empty',
  		extendSymbol: function (rate) {
		    $(this).tooltip({
		      container: 'body',
		      placement: 'top',
		      title: 'Nota: ' + rate
		    });
		}
	});
	ratingModal.rating({
		start: 0,
  		stop: 5,
  		filled: 'glyphicon glyphicon-star',
  		empty: 'glyphicon glyphicon-star-empty',
  		extendSymbol: function (rate) {
		    $(this).tooltip({
		      container: 'body',
		      placement: 'top',
		      title: 'Nota: ' + rate
		    });
		}
	});
	ratingModal.on('change', function () {
		
	});
	/* END RATING */
});