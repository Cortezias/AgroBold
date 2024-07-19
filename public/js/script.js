$(document).ready(function() {
    // AJAX requests for CRUD operations can be handled here.
    // Example for delete operation:
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
});
