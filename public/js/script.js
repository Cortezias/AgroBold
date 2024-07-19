$(document).ready(function() {
    // AJAX requests for CRUD operations
    $('.btn-danger').on('click', function(e) {
        e.preventDefault();
        const url = $(this).attr('href');
        if (confirm('Você realmente deseja excluir este cliente?')) {
            $.ajax({
                url: url,
                method: 'GET',
                success: function(response) {
                    location.reload();
                }
            });
        }
    });

    // AJAX request for search by state
    $('form[action="index.php"]').on('submit', function(e) {
        e.preventDefault();
        const estado = $('#estado').val();
        $.ajax({
            url: 'index.php?action=search',
            method: 'GET',
            data: { estado: estado },
            success: function(response) {
                $('tbody').html(response);
            }
        });
    });
});
