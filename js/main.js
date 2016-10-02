$.getJSON( "./data/votes.json" ).done( function(votes) {
	pres1 = votes.presone.votes;
	pres2 = votes.prestwo.votes;
	pres3 = votes.presthree.votes;
 });

console.log(pres1);
console.log(pres2);
console.log(pres3);
