(function (namespace) {
    'use strict'
    var API_URL = "http://netflixroulette.net/api/api.php?";
    namespace.createRequest = function (requestData) {
        var queryString = "type=json";
        if(!requestData.hasOwnProperty("title")) {
            $.get(webroot + 'Netflixroulettes/get_name_title', function(resp) {
                requestData.title = resp.replace(/"/g, '');
                $.each(requestData, function(index, val) {
                    queryString += "&"+index+"="+val;
                });
                exec(queryString);
            });
        }
        function exec(queryString) {
         $('.image').attr('src', 'no_image.png');
         ajaxLoader('show');
         $('.retorno').hide();
         console.log(API_URL + queryString.replace(/\s/ig, "%20"));
         $.ajax({
            url: API_URL + queryString.replace(/\s/ig, "%20"),
            type: 'GET',
            dataType: 'json',
        })
         .done(function(response) {
            $('.title').html('<strong>Título: </strong>'+ response.show_title + '(' + response.release_year+ ')');
            $('.score').html('<strong>Avaliação: </strong>'+ response.rating);
            $('.sipnose').html('<strong>Sipnose: </strong>'+ response.summary);
            $('.director').html('<strong>Diretor: </strong>'+ response.director);
            $('.cast').html('<strong>Elenco: </strong>'+ response.show_cast);
            $('.image').attr('src', response.poster);
            $('.link-netflix').attr('href', 'http://www.netflix.com/WiPlayer?movieid='+response.show_id);
            $('.retorno').fadeIn();
            ajaxLoader('hide');
        })
         .fail(function() {
            $('.retorno').hide();
            ajaxLoader('hide');
            $('#myModal').modal('show');
        })
         .always(function() {
             ajaxLoader('hide');
         });
     }
 };

})(window.netflixroulette || (window.netflixroulette = {}));
function ajaxLoader(method) {
    if($('#ajaxLoader').length == 0) {
        $('body').append($('<div>', {id: 'ajaxLoader'}));
    }
    if(method == 'show') {
        $('#ajaxLoader').show();
    } else {
        $('#ajaxLoader').hide();
    }
}