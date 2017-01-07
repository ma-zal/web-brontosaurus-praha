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


function brdoFormValidation() {
	var errors = [];
	if (!document.getElementById('dite-jmeno').value) {
		errors.push("Musíte vyplnit jméno dítěte.");
	}
	if (!document.getElementById('dite-narozeni').value) {
		errors.push("Musíte vyplnit datum narození dítěte.");
	}
	if (!document.getElementById('dite-zdravotni-stav').value) {
		errors.push("Musíte vyplnit zdravotní stav dítěte.");
	}
	if (!document.getElementById('zastupce-jmeno').value) {
		errors.push("Musíte vyplnit jméno zákonného zástupce.");
	}
	if (!document.getElementById('zastupce-email').value) {
		errors.push("Musíte vyplnit kontaktní email.");
	}
	if (!document.getElementById('zastupce-telefon').value) {
		errors.push("Musíte vyplnit kontaktní telefon.");
	}

	if (errors.length > 0) {
		alert(errors.join("\n"));
	}
	return (errors.length === 0);
}
