function openUpdateModal(e) {
    var memberId = e.lastElementChild.value;
    var body = document.body,
        html = document.documentElement;

    var height = Math.max(body.scrollHeight, body.offsetHeight, 
                          html.clientHeight, html.scrollHeight, html.offsetHeight);

    // Open modal AJAX
    $.ajax({
        url: '/includes/modal.php',
        method: "GET",
        data: {
            memberId
        },
        success: data => {
            $('body').append(data)
            $(".open").toggle();
            $('.overlay').css('height', height);
            $('html, body').css('overflow', 'hidden');
        }, 
        error: (xhr, status, error) => {
            console.log(error)
        }
    })
}

// Close when cliking outside of modal
$(document).click(function(e) {
    if ($(e.target)[0].tagName === 'SECTION') {
        closeModal();
    }
})

// close modal by clicking x
function closeModal() {
    $(".open").remove();
    $('html, body').css('overflow', 'auto');
}

// Pagination and Search AJAX
function displayResults(pageNum) {
    var input = $('#search').val();

    $.ajax({
        url: '/includes/functions/members.inc.php',
        method: "GET",
        data: {
            pageNum,
            input
        },
        success: data => {
            $('#members').html(data);
        }, 
        error: (xhr, status, error) => {
            console.log(error)
        }
    })
}

// Delete memeber AJAX
function deleteMember(id) {
    var input = $('#search').val();
    var pageNum = $('.current').text();

    $.ajax({
        url: '/includes/functions/members.inc.php',
        method: "GET",
        data: {
            delete: id,
            input,
            pageNum
        },
        success: data => {
            $('#members').html(data);
        }, 
        error: (xhr, status, error) => {
            console.log(error)
        }
    })
}

// Extend memebership AJAX
function extendMembership(id) {
    var input = $('#search').val();
    var pageNum = $('.current').text();

    $.ajax({
        url: '/includes/functions/members.inc.php',
        method: "GET",
        data: {
            extend: id,
            input,
            pageNum
        },
        success: data => {
            $('#members').html(data);
        }, 
        error: (xhr, status, error) => {
            console.log(error)
        }
    })
}

function updateMember() {
    var name = $('#name').val();
    var surname = $('#surname').val();
    var from = $('#from').val();
    date = new Date(from);
    var fromFormat = date.toUTCString();
    var to = $('#to').val();
    var id = $('#update').val();
    var input = $('#search').val();
    var pageNum = $('.current').text();

    var date = new Date();
    var today = date.toISOString();

    if(name.length == 0 || surname.length == 0 || from.length == 0 || to.length == 0) {
        $('.center').html('<p class="error">Popunite polja.</p>')
    } else if(today < from){
        $('.center').html('<p class="error">Izaberite datum pre <b>'+fromFormat.substring(4, 16)+'</b>.</p>')
    } else {
        $.ajax({
            url: '/includes/functions/members.inc.php',
            method: "GET",
            data: {
                update: id,
                name,
                surname,
                from,
                to,
                input,
                pageNum
            },
            success: data => {
                closeModal()
                $('#members').html(data);
            }, 
            error: (xhr, status, error) => {
                console.log(error)
            }
        })
    }
    
}

function sendContact() {
    var email = $('#email').val();
    var subject = $('#subject').val();
    var message = $('#message').val();
    var send = 'send';

    $('#send').disabled = false;

    $.ajax({
        url: '/mrbig/includes/contact-form.php',
        method: "GET",
        data: {
            email,
            subject,
            message,
            send
        },
        success: data => {
            $('#send').disabled = true;
            $('#contact').html(data);
        }, 
        error: (xhr, status, error) => {
            console.log(error)
        }
    })
}

function addMember() {
    var name = $('#name').val();
    var surname = $('#surname').val();
    var from = $('#from').val();
    var to = $('#to').val();
    var create = 'create';

    $.ajax({
        url: '/includes/functions/add-member.inc.php',
        method: "GET",
        data: {
            name,
            surname,
            from,
            to,
            create
        },
        success: data => {
            $('.center').html(data);
        }, 
        error: (xhr, status, error) => {
            console.log(error)
        }
    })
}

function logIn(){
    var email = $('#email').val();
    var password = $('#password').val();
    var login = 'login';

    $.ajax({
        url: '/includes/functions/login.inc.php',
        method: "GET",
        data: {
            email,
            password,
            login
        },
        success: (data, status, xhr) => {
            if(data.length != 0){
                $('.center').html(data)
            } else {
                window.location.replace('/admin/clanovi')
            }
        }, 
        error: (xhr, status, error) => {
            console.log(error)
        }
    })
}