jsonData();

console.log(pres1);
console.log(pres2);
console.log(pres3);

function jsonData() {
	$.getJSON( "./data/votes.json" ).done( function(votes) {
		var pres1 = votes.presone.votes;
		var pres2 = votes.prestwo.votes;
		var pres3 = votes.presthree.votes;
		var pres4 = votes.presfour.votes;
		var pres5 = votes.presfive.votes;
		var pres6 = votes.pressix.votes;
		var pres7 = votes.presseven.votes;
		var pres8 = votes.preseight.votes;
		var pres9 = votes.presnine.votes;
	 });
}