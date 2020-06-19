$(document).ready(function(){
    $('.answer').addClass('notshow');
    $('.question').click(function(){
        $(this).next('.answer').slideToggle();
    })
});
