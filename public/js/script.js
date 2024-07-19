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

    // AJAX request for search by state and city
    $('form[action="index.php"]').on('submit', function(e) {
        e.preventDefault();
        const estado = $('#estado').val();
        const cidade = $('#cidade').val();
        $.ajax({
            url: 'index.php?action=search',
            method: 'GET',
            data: { estado: estado, cidade: cidade },
            success: function(response) {
                $('tbody').html(response);
            }
        });
    });
});
