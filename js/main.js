console.log("hello world");

var pres1;
var pres2;
var pres3;

$.getJSON( "./data/votes.json" ).done( function(votes) {
	pres1 = votes.presidentone.votes;
	pres2 = votes.presidenttwo.votes;
	pres3 = votes.presidentthree.votes;
	console.log(pres1);
 });

// $('.button').click(function(){
//     var clickBtnValue = $(this).val();
//     var ajaxurl = '../php/echo.php',
//     data =  {'action': clickBtnValue};
//     $.post(ajaxurl, data, function (response) {
//         // Response div goes here.
//         // alert("action performed successfully");
//     });
// });


// function explode(){
// 	console.log(pres1);
// 	console.log(pres2);
// 	console.log(pres3);
// }
// setTimeout(explode, 2000);
