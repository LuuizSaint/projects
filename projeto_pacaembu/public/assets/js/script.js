let menuBtn = document.querySelector(".ls-menuIcon");
let menuIcon = document.querySelector(".ls-menuIcon i");
let menuLinks = document.querySelector(".ls-menuLinks");
let clockContainer = document.querySelector("#ls-clockContainer");

menuBtn.addEventListener("click", () => {
  let hasClass = menuIcon.classList.contains("fi-sr-menu-burger");
  ("fi-sr-menu-burger");
  if (hasClass) {
    menuIcon.classList.remove("fi-sr-menu-burger");
    menuIcon.classList.add("fi-sr-cross");
    menuLinks.classList.add("active");
    clockContainer.style.display = "none";
  } else {
    menuIcon.classList.remove("fi-sr-cross");
    menuIcon.classList.add("fi-sr-menu-burger");
    menuLinks.classList.remove("active");
    clockContainer.style.display = "flex";
  }
});

let clockDays = document.querySelector(".ls-clockDays");
let clockHours = document.querySelector(".ls-clockHours");
let clockMins = document.querySelector(".ls-clockMins");
let clockSecs = document.querySelector(".ls-clockSecs");

const nextYear = "1 jan 2026";

function countDown() {
  const nextYearDate = new Date(nextYear);
  const currentDate = new Date();
  const totalSeconds = (nextYearDate - currentDate) / 1000;

  let days = Math.floor(totalSeconds / 3600 / 24);
  let hours = Math.floor(totalSeconds / 3600) % 24;
  let minutes = Math.floor(totalSeconds / 60) % 60;
  let seconds = Math.floor(totalSeconds) % 60;

  clockDays.innerHTML = formatDate(days);
  clockHours.innerHTML = formatDate(hours);
  clockMins.innerHTML = formatDate(minutes);
  clockSecs.innerHTML = formatDate(seconds);
}
function formatDate(time) {
  return time < 10 ? `0${time}` : time;
}
countDown();
setInterval(countDown, 1000);
