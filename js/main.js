var	pres1,
	pres2,
	pres3,
	pres4,
	pres5,
	pres6,
	pres7,
	pres8,
	pres9;

jsonData();

function jsonData() {
	$.getJSON( "./data/votes.json" ).done( function(votes) {
		pres1 = votes.p1.votes;
		pres2 = votes.p2.votes;
		pres3 = votes.p3.votes;
		pres4 = votes.p4.votes;
		pres5 = votes.p5.votes;
		pres6 = votes.p6.votes;
		pres7 = votes.p7.votes;
		pres8 = votes.p8.votes;
		pres9 = votes.p9.votes;

		console.log(pres1);
		console.log(pres2);
		console.log(pres3);
		console.log(pres4);
		console.log(pres5);
		console.log(pres6);
		console.log(pres7);
		console.log(pres8);
		console.log(pres9);
	 });
}
