const search = () => {
  const searchBox = document.getElementById("search-item").value.toUpperCase();
  const storeItems = document.getElementById("artikel-content-container")
  const artikel = document.querySelectorAll(".artikel-content")
  const aname = document.getElementsByTagName("h5")


  for (var i = 0; i < aname.length; i++) {
    let match = artikel[i].getElementsByTagName('h5')[0];

    if (match) {
      let textValue = match.textContent || match.innerHTML

      if (textValue.toUpperCase().indexOf(searchBox) > -1) {
        artikel[i].style.display = "";
      } else {
        artikel[i].style.display = "none";
      }
    }
  }
}

