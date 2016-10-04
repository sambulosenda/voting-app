var	p1,
	p2,
	p3,
	p4,
	p5,
	p6,
	p7,
	p8,
	p9,
	tarray;

var pick = $( "#votedfor" ).text();

console.log(pick);

jsonData();

function sortNumber(a,b) {
    return a - b;
}

function jsonData() {
	$.getJSON( "./data/votes.json" ).done( function(votes) {
		p1 = votes.p1.votes;
		p2 = votes.p2.votes;
		p3 = votes.p3.votes;
		p4 = votes.p4.votes;
		p5 = votes.p5.votes;
		p6 = votes.p6.votes;
		p7 = votes.p7.votes;
		p8 = votes.p8.votes;
		p9 = votes.p9.votes;

		console.log(p1);
		console.log(p2);
		console.log(p3);
		console.log(p4);
		console.log(p5);
		console.log(p6);
		console.log(p7);
		console.log(p8);
		console.log(p9);

		tarray = [p1, p2, p3, p4, p6, p6, p7, p8, p9];
		numArray.sort(sortNumber);
		alert(numArray.join(","));
	 });
}
