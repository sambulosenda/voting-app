console.log("hello world");

var pres1;
var pres2;
var pres3;

$.getJSON( "data/votes.json" ).done( function(votes) {
	pres1 = votes.presidentone.votes;
	pres2 = votes.presidenttwo.votes;
	pres3 = votes.presidentthree.votes;
	console.log(pres1);
 });


function explode(){
	console.log(pres1);
	console.log(pres2);
	console.log(pres3);
}
setTimeout(explode, 2000);


// var obj = {
//     name: 'Dhayalan',
//     score: 100
// };

// localStorage.setItem('gameStorage', JSON.stringify(obj));

// var objj = JSON.parse(localStorage.getItem('gameStorage'));

// console.log(objj);

