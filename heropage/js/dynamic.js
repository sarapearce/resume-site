$(document).ready(function () {
    addEvents();
});


//moves the green arrow to be aligned underneath the text
function getArrow(el) {
    var arrow = $('#green_arrow');
    arrow.removeClass('hidden');

    var id = el.id;
    var container = $('#' + id + '_arrow_container');
    arrow.appendTo(container);
}

//todo: redo this to be a designed overlay
function contactMe() {
    var contact = prompt('Are you sure you want to contact the Batman?', 'yes');
    if (contact) {
	window.open('http://batman-news.com/contact/', '_blank');
    }
}

function addEvents() {
    var self = this;
    var nav_links = $('.link');
    nav_links.each(function (index, link) {
	//need to figure out why jquery .on() and .mouseover() aren't working here
    $(link).on('mouseover', function () {
	    self.getArrow(link);
	});
    });

    var contact = $("#contact_batman");
    contact.on('click', function () {
	self.contactMe();
    });
}

