var brdoSekce;
var brdoMenu;

$('document').ready(function() {
	brdoMenu = $('#brdo-menu li');
	brdoSekce = $('.brdo-sekce');
	brdoSekce.hide();

	brdoMenu.children().click(function(event) {
		var id =  $(event.target).attr('href').substr(1);
		showSekce(id);
		event.preventDefault();
	});

	showSekce('brdo-uvod');

});

var showSekce = function(id) {
	brdoSekce.each(function(i,sekce) {
		if (sekce.id === id) {
			$(sekce).delay(250).fadeIn(250);
		} else {
			$(sekce).fadeOut(250);
		}
	});

	brdoMenu.each(function(i, li) {
		var sectionHrefId = $(li).children().attr('href').substr(1);
		if (sectionHrefId === id) {
			$(li).addClass('aktivni');
		} else {
			$(li).removeClass('aktivni');
		}
	});
};