var ocrModal = null;

$(document).ready(function(){
	ocrModal = $('#myModal');

	$('.showModal').on('click', function(){
		var modalStatus = $(ocrModal.find('#modal-status')[0]);
		var currentStatus = $($(this).find('.label')[0]).clone();
		var modalImg = $(ocrModal.find('#modal-img')[0]);
		var currentImg = $($(this).find('.img-ocorrencia')[0]).clone();

		modalStatus.html(currentStatus);
		modalImg.attr('src', $(currentImg).css('background-image')
			.replace('url(','').replace(')','').replace(/\"/gi, ""));

		ocrModal.show();
	});
	
});