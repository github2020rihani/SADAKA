$(document).ready(function () {

    $('.critere').blur(function () {
        var key = $(this).val()

        $.ajax({
            url: 'http://localhost:8000/volontaire/service/search',
            data: {key: key},

            success: function (data) {
                if (data.status){
                    $('.listService').empty();
                    $('.listService').html(data.twig);
                }else{

                }



            },
            error: function () {
                alert('something wrong')
            }
        })

    })
})