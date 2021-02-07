$(document).ready(function(){
    $('#logout').on('click', function(e){
        e.preventDefault();
        $(this).parents('form').submit();
    });
});
