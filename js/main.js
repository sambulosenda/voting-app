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

var winner;	

var pick = $( "#votedfor" ).text();

// var ashervotes = $( "#bav" ).text();
// var tbv
// var asv
// var pcv
// var twv
// var jbv
// var jdv
// var plv
// var jmv

console.log(pick);

jsonData();

function sortNumber(a,b) {
    return b - a;
}

function indexOfMax(arr) {
    if (arr.length === 0) {
        return -1;
    }

    var max = arr[0];
    var maxIndex = 0;

    for (var i = 1; i < arr.length; i++) {
        if (arr[i] > max) {
            maxIndex = i;
            max = arr[i];
        }
    }

    return maxIndex;
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

		// console.log(p1);
		// console.log(p2);
		// console.log(p3);
		// console.log(p4);
		// console.log(p5);
		// console.log(p6);
		// console.log(p7);
		// console.log(p8);
		// console.log(p9);

		tarray = [p1, p2, p3, p4, p6, p6, p7, p8, p9];
		winner = indexOfMax(tarray);
		console.log(winner);
	
		// tarray.sort(sortNumber);
		// console.log(tarray[0]);
		// console.log(tarray.join(","));

		// switch (winner) {
		//     case 0:
		//         $( "#asher" ).show();
		//         break;
		//     case 1:
		//         $( "#beck" ).show();
		//         break;
		//     case 2:
		//         $( "#shepherd" ).show();
		//         break;
		//     case 3:
		//         $( "#camacho" ).show();
		//         break;
		//     case 4:
		//         $( "#whitmore" ).show();
		//         break;
		//     case 5:
		//         $( "#bullworth" ).show();
		//         break;
		//     case 6:
		//         $( "#dale" ).show();
		//     case 7:
		//         $( "#lanford" ).show();
		//         break;
		//     case 8:
		//         $( "#marshall" ).show();
		//         break;
  //   		default:
  //     			text = "";
		// }

		switch (pick) {
		    case "Benjamin Asher":
		        $( "#asher" ).show();
		        break;
		    case "Tom Beck":
		        $( "#beck" ).show();
		        break;
		    case "Andrew Shepherd":
		        $( "#shepherd" ).show();
		        break;
		    case "President Camacho":
		        $( "#camacho" ).show();
		        break;
		    case "Thomas Whitmore":
		        $( "#whitmore" ).show();
		        break;
		    case "Jay Bullworth":
		        $( "#bullworth" ).show();
		        break;
		    case "James Dale":
		        $( "#dale" ).show();
		    case "President Lanford":
		        $( "#lanford" ).show();
		        break;
		    case "James Marshall":
		        $( "#marshall" ).show();
		        break;
    		default:
      			text = "";
		}
	 });
}
