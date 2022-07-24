const toggleBtn = document.getElementById('toggle');
const mainNav = document.querySelector(".MainNav");

toggleBtn?.addEventListener('click', () => {
	toggleBtn.classList.toggle("Hamburger--open");
	mainNav?.classList.toggle("MainNav--active");

	toggleBtn.classList.contains("Hamburger--open") ? document.documentElement.style.overflowY = "hidden" : document.documentElement.style.overflowY = "auto";
});