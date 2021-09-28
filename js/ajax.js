function openUpdateModal(e) {
    var memberId = e.lastElementChild.value;

    // Open modal AJAX
    $.ajax({
        url: '/mrbig/includes/modal.php',
        method: "GET",
        data: {
            memberId
        },
        success: data => {
            $('.admin-section').append(data)
            $(".open").toggle();
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
}

// Pagination and Search AJAX
function displayResults(pageNum) {
    var input = $('#search').val();

    $.ajax({
        url: '/mrbig/includes/functions/members.inc.php',
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
        url: '/mrbig/includes/functions/members.inc.php',
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
        url: '/mrbig/includes/functions/members.inc.php',
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
    var to = $('#to').val();
    var id = $('#update').val();
    var input = $('#search').val();
    var pageNum = $('.current').text();
    
    $.ajax({
        url: '/mrbig/includes/functions/members.inc.php',
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

function sendContact() {
    var email = $('#email').val();
    var subject = $('#subject').val();
    var message = $('#message').val();
    var send = 'send';

    $('#send').disabled = false;

    $.ajax({
        url: '/mrbig/includes/functions/contact-form.inc.php',
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