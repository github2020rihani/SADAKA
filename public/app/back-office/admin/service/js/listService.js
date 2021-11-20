$(document).ready(function () {

    $('.critere').blur(function () {
        var key = $(this).val()

        $.ajax({
            url: 'http://localhost:8000/admin/service/search',
            data: {key: key},

            success: function (data) {
                if (data.status){
                    $('.listeService').empty();
                    $('.listeService').html(data.twig);
                }else{

                }



            },
            error: function () {
                alert('something wrong')
            }
        })

    })
})