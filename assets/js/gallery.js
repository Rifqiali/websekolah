window.addEventListener('load', function() {
    const grid = document.getElementById('gallery-container');
    const gridItems = document.querySelectorAll('.gallery-item');
  
    function resizeGridItem(item) {
      const rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
      const rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap'));
      const rowSpan = Math.ceil((item.offsetHeight + rowGap) / (rowHeight + rowGap));
      item.style.gridRowEnd = `span ${rowSpan}`;
    }
  
    function resizeAllGridItems() {
      gridItems.forEach(resizeGridItem);
    }
  
    // Resize grid items on initial page load
    resizeAllGridItems();
  
    // Resize grid items when the images finish loading
    window.addEventListener('resize', resizeAllGridItems);
  });

  //loading 

  