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
    $.ajax({
        url: '/mrbig/includes/functions/members.inc.php',
        method: "GET",
        data: {
            delete: id
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
    $.ajax({
        url: '/mrbig/includes/functions/members.inc.php',
        method: "GET",
        data: {
            extend: id
        },
        success: data => {
            $('#members').html(data);
        }, 
        error: (xhr, status, error) => {
            console.log(error)
        }
    })
}