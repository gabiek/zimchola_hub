


$("textarea").click(function(){
	$("textarea").text("");
});

$('#timepicker').timepicki(); 


$("#datepicker").datepicker({
	inline: true
});


$("#tooltip").tooltip();

$("#tabs").tabs();

//Modal window

var modal = document.getElementById('myModal');

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}