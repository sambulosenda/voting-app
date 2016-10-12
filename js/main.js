var	p1,
	p2,
	p3,
	p4,
	p5,
	p6,
	p7,
	p8,
	p9,
	tarray,
	winner;	

var pick = $( "#votedfor" ).text();

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
	$.getJSON( "./data/votes.json" ).done( function(data) {
		p1 = data.presidents[0].votes;
		p2 = data.presidents[1].votes;
		p3 = data.presidents[2].votes;
		p4 = data.presidents[3].votes;
		p5 = data.presidents[4].votes;
		p6 = data.presidents[5].votes;
		p7 = data.presidents[6].votes;
		p8 = data.presidents[7].votes;
		p9 = data.presidents[8].votes;

		tarray = [p1, p2, p3, p4, p5, p6, p7, p8, p9];
		winner = indexOfMax(tarray);

		switch (pick) {
		    case "Benjamin Asher":
		        $( "#asher-c" ).show();
		        $( "#ashersm-c" ).show();
		        break;
		    case "Tom Beck":
		        $( "#beck-c" ).show();
		        $( "#becksm-c" ).show();
		        break;
		    case "Andrew Shepherd":
		        $( "#shepherd-c" ).show();
		        $( "#shepherdsm-c" ).show();
		        break;
		    case "President Camacho":
		        $( "#camacho-c" ).show();
		        $( "#camachosm-c" ).show();
		        break;
		    case "Thomas Whitmore":
		        $( "#whitmore-c" ).show();
		        $( "#whitmoresm-c" ).show();
		        break;
		    case "Jay Bulworth":
		        $( "#bullworth-c" ).show();
		        $( "#bullworthsm-c" ).show();
		        break;
		    case "James Dale":
		        $( "#dale-c" ).show();
		        $( "#dalesm-c" ).show();
		        break;
		    case "President Lanford":
		        $( "#lanford-c" ).show();
		        $( "#lanfordsm-c" ).show();
		        break;
		    case "James Marshall":
		        $( "#marshall-c" ).show();
		        $( "#marshallsm-c" ).show();
		        break;
    		default:
      			text = "";
		}
	 });
}
