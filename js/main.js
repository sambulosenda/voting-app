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
		pres1 = votes.presone.votes;
		pres2 = votes.prestwo.votes;
		pres3 = votes.presthree.votes;
		pres4 = votes.presfour.votes;
		pres5 = votes.presfive.votes;
		pres6 = votes.pressix.votes;
		pres7 = votes.presseven.votes;
		pres8 = votes.preseight.votes;
		pres9 = votes.presnine.votes;

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
