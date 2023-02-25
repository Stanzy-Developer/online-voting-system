const scrollTop = document.querySelector("#scroll");

document.addEventListener("scroll", () => {
  if (document.documentElement.scrollTop < 50) {
    scrollTop.style.display = "none";
  } else {
    scrollTop.style.display = "block";
  }
});

scrollTop.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    left: 0,
    behavior: "smooth",
  });
});
