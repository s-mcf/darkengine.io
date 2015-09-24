var images,
    xhr;

function rotate_init(){
	xhr = new XMLHttpRequest();
	xhr.onreadystatechange = rotate_begin;
	xhr.open("GET", "/all_images.php", true);
	xhr.send();
}

function rotate_begin(){
	if(xhr.readyState == 4){
		images = JSON.parse(xhr.responseText);
		images = shuffle(images);
		$("body").bgswitcher({
			images: images,
			interval: 10000,
			duration: 2000,
		});
		$("#h").fadeOut(4000);
	}
}

// Knuth shuffle
function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex ;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {

    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
}
