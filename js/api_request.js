let submit = document.getElementById("getInputValue");
let searchResults = document.getElementById("searchResults");

function getPosterPath(element, index) {
  console.log(element.poster_path);
}

submit.addEventListener("submit", function (evt) {
  evt.preventDefault();
  var searchMovieValue = document.getElementById("searchMovie").value;
  var response = fetch(
    `https://api.themoviedb.org/3/search/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&query=${searchMovieValue}&page=1&include_adult=false`
  )
    .then((response) => response.json())
    .then((data) => {
      let img = "";
      for (let i = 0; i < data["results"].length; i++) {
        if (data["results"][i]["poster_path"]) {
          img +=
            '<a href="#"><img src="' +
            "https://image.tmdb.org/t/p/w500" +
            data["results"][i]["poster_path"] +
            '" alt="' +
            data["results"][i]["title"] +
            '"></img></a>';
        }
      }
      searchResults.innerHTML = img;
    });
});
