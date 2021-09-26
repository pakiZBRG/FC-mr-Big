function openUpdateModal(e) {
    var memberId = e.lastElementChild.value;

    // Modal AJAX
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

function searchFilter(page_num) {
    page_num = page_num ? page_num : 0;
    var keywords = $('#keywords').val();
    var sortBy = $('#sortBy').val();

    $.ajax({
        type: 'POST',
        url: './includes/functions/filterData.php',
        data: 'page='+page_num+'&keywords='+keywords+'&sortBy='+sortBy,
        // beforeSend: function () {
        //     $('.loading-overlay').show();
        // },
        success: function (html) {
            $('#members').html(html);
            // $('.loading-overlay').fadeOut("slow");
        }
    });
}