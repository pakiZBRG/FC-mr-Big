function openUpdateModal(e) {
    var memberId = e.lastElementChild.value;
    var action = 'fetch_memberId';

    // Modal AJAX
    $.ajax({
        url: '/mrbig/includes/modal.php',
        method: "GET",
        data: {
            action,
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