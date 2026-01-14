// document.addEventListener("DOMContentLoaded", function () {
//   const scroller = document.querySelector(".scroller");
//   const track = scroller.querySelector(".scroller__track");
//   const totalWidth = track.scrollWidth;

//   const speed = 130; // px per second
//   const duration = totalWidth / speed;

//   track.style.animationDuration = `${duration}s`;
// });


document.addEventListener("DOMContentLoaded", function() {
  const scroller = document.querySelector(".scroller");
  const track = scroller.querySelector(".scroller__track");

  // Clone enough cards to fill at least double width
  const cards = Array.from(track.children);
  cards.forEach(card => {
    const clone = card.cloneNode(true);
    clone.setAttribute("aria-hidden", "true");
    track.appendChild(clone);
  });

  let x = 0; // current translateX
  const speed = 1; // pixels per frame

  function animate() {
    x -= speed;

    // When the first card fully scrolls out, move it to the end
    const firstCard = track.firstElementChild;
    const firstCardWidth = firstCard.offsetWidth + parseInt(getComputedStyle(firstCard).marginRight || 0);

    if (-x >= firstCardWidth) {
      x += firstCardWidth;
      track.appendChild(firstCard);
    }

    track.style.transform = `translateX(${x}px)`;
    requestAnimationFrame(animate);
  }

  animate();
});
