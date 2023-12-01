$(document).ready(function() {
    $('select[name="sort"]').on('change', function() {
        let orderBy = $(this).val();
        let url =$(this).data("url");

        $.ajax({
            url: url,
            type: "GET",
            data: {
                orderBy: orderBy,
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (data) => {
                $('.product-sort').html(data)
            },

        });
    });

    $('select[name="paginate"]').on('change', function() {
        let paginate= $(this).val();
        let url =$(this).data("url");
        console.log(paginate)
        $.ajax({
            url: url,
            type: "GET",
            data: {
                paginate: paginate,
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (data) => {
                $('.product-sort').html(data)
            },

        });
    });
});
