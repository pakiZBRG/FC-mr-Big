$('document').ready(function() {
    var menu = $('#mobileNav');
    var content = $('#mobileContent');
    var close = $('#mobileClose');

    menu.click(function() {
        menu.addClass('hide');
        content.addClass('reveal');
    })

    close.click(function() {
        menu.removeClass('hide');
        content.removeClass('reveal');
    })
});

function openMemberInfo(el) {
    var card = $(`.${el}`);

    card.toggleClass('view')
}