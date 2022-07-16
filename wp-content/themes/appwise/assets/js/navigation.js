const toggleBtn = document.getElementById('toggle');
const mainNav = document.querySelector(".MainNav");

toggleBtn?.addEventListener('click', e => {
	toggleBtn.classList.toggle("Hamburger--open");
	mainNav?.classList.toggle("MainNav--active");
});