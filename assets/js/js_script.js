
// sticky navbar javascript code below here
window.addEventListener('scroll',function(){
    const navbarSticky=document.querySelector('.header');
    navbarSticky.classList.toggle("sticky",window.scrollY>75);

});


const navbarMenu = document.getElementById('navbar');
const burgerMenu = document.getElementById('burger');
const overlayMenu = document.getElementById('overlay');
const closedMenu = document.querySelector("#closed-menu");
// Toggle Menu Function
burgerMenu.addEventListener('click', toggleMenu);
overlayMenu.addEventListener('click', toggleMenu);
closedMenu.addEventListener("click", toggleMenu);


function toggleMenu() {
	navbarMenu.classList.toggle('active');
	overlayMenu.classList.toggle('active');
	closedMenu.classList.toggle('active');

}

// Collapse SubMenu Function
navbarMenu.addEventListener('click', (e) => {
	if (e.target.hasAttribute('data-toggle') && window.innerWidth <= 991) {
		e.preventDefault();
		const menuItemHasChildren = e.target.parentElement;

		// If menu-item-child is Expanded, then Collapse It
		if (menuItemHasChildren.classList.contains('active')) {
			collapseSubMenu();
		} else {
			// Collapse the Existing Expanded menu-item-child
			if (navbarMenu.querySelector('.menu-item-child.active')) {
				collapseSubMenu();
			}
			// Expanded the New menu-item-child
			menuItemHasChildren.classList.add('active');
			const subMenu = menuItemHasChildren.querySelector('.sub-menu');
			subMenu.style.maxHeight = subMenu.scrollHeight + 'px';
		}
	}
});

function collapseSubMenu() {
	navbarMenu.querySelector('.menu-item-child.active .sub-menu').removeAttribute('style');
	navbarMenu.querySelector('.menu-item-child.active').classList.remove('active');
}

// Fixed Resize Screen Function
window.addEventListener('resize', () => {
	if (this.innerWidth > 991) {
		// If navbarMenu is Open, then Close It
		if (navbarMenu.classList.contains('active')) {
			toggleMenu();
		}

		// If menu-item-child is Expanded, then Collapse It
		if (navbarMenu.querySelector('.menu-item-child.active')) {
			collapseSubMenu();
		}
	}
});

//top button section js code

const scrollTopBtn=document.getElementById('scrollTopBtn');
window.onscroll=function(){

    if(document.documentElement.scrollTop>70){
        scrollTopBtn.style.display="block";
       
    }else{
        scrollTopBtn.style.display="none";
    }
   
}
scrollTopBtn.addEventListener('click',()=>{
    window.scrollTo(0,0);//one way
    document.documentElement.scrollTop=0; //two way
});



