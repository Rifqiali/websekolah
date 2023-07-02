window.addEventListener('DOMContentLoaded', function () {
    const galleryContainer = document.getElementById('gallery-container');
    const galleryItems = Array.from(galleryContainer.getElementsByClassName('gallery-item'));
    const paginationContainer = document.getElementById('pagination-container');
  
    const itemsPerPage = 9; // Jumlah item yang ditampilkan per halaman
    let currentPage = 1; // Halaman saat ini
  
    function showItems(startIndex, endIndex) {
      galleryItems.forEach((item, index) => {
        if (index >= startIndex && index < endIndex) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    }
  
    function setActivePage() {
      const pageLinks = Array.from(paginationContainer.getElementsByClassName('page-link'));
      pageLinks.forEach((link) => {
        if (parseInt(link.getAttribute('data-page')) === currentPage) {
          link.classList.add('active');
        } else {
          link.classList.remove('active');
        }
      });
    }
  
    function handlePaginationClick(event) {
      currentPage = parseInt(event.target.getAttribute('data-page'));
      const startIndex = (currentPage - 1) * itemsPerPage;
      const endIndex = startIndex + itemsPerPage;
      showItems(startIndex, endIndex);
      setActivePage();
    }
  
    function initializePagination() {
      const numPages = Math.ceil(galleryItems.length / itemsPerPage);
      paginationContainer.innerHTML = '';
  
      for (let i = 1; i <= numPages; i++) {
        const button = document.createElement('button');
        button.setAttribute('class', 'page-link');
        button.setAttribute('data-page', i);
        button.innerText = i;
        button.addEventListener('click', handlePaginationClick);
        paginationContainer.appendChild(button);
      }
  
      setActivePage();
    }
  
    // Tampilkan halaman awal saat halaman dimuat
    const startIndex = (currentPage - 1) * itemsPerPage;
    const endIndex = startIndex + itemsPerPage;
    showItems(startIndex, endIndex);
  
    // Inisialisasi pagination saat halaman dimuat
    initializePagination();
  });
  