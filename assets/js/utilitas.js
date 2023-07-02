
function searchArticles() {
  var searchInput = document.getElementById("searchInput").value;

  $.ajax({
    url: '../search.php',
    data: {
      searchInput: searchInput
    },
    dataType: 'json',
    success: function (data) {
      var searchResults = document.getElementById("searchResults");
      searchResults.innerHTML = "";

      if (data.length > 0) {
        data.forEach(function (article) {
          var result = document.createElement("div");
          result.innerHTML = "<h3>" + article.judul_artikel + "</h3><p>" + article.content + "</p>";
          searchResults.appendChild(result);
        });
      } else {
        searchResults.innerHTML = "Tidak ada hasil ditemukan.";
      }
    }
  });
}