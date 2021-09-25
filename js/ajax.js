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

$(document).ready(function(){
    // Search AJAX
    $('#search').on("keyup", function(){
        var input = $(this).val();
        var action = 'search_members';

        $.ajax({
            url: '/mrbig/includes/functions/all-members.inc.php',
            method: "GET",
            data: {
                action,
                input
            },
            success: data => {
                $('#members').html(data)
            }, 
            error: (xhr, status, error) => {
                console.log(error)
            }
        })
    });

    // Pagination AJAX
    $('#search').on("keyup", function(){
        var input = $(this).val();
        var action = 'search_members';

        $.ajax({
            url: '/mrbig/includes/functions/all-members.inc.php',
            method: "GET",
            data: {
                action,
                input
            },
            success: data => {
                $('#members').html(data)
            }, 
            error: (xhr, status, error) => {
                console.log(error)
            }
        })
    });
});