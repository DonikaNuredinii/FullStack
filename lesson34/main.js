//js 
// document.getElementById("myElement").style.display="none";

//jquery
$('myElement').hide()

//manipulate with html
// $('#myElement').text("New Text")

$('.btn').click(function(){
    console.log($('#myElement').text());

    $('#myElement').text('Testing text');
    $('#myElement').append('<br> Extra text');
});