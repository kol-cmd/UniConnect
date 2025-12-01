
// function toggleDropdown() {
//     var dropdown = document.getElementById("dropdown");
//     dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
// }

// Optional: close dropdown if clicked outside
window.onclick = function(event) {
    if (!event.target.matches('.user-btn, .user-img, .user-placeholder')) {
        var dropdown = document.getElementById("dropdown");
        if (dropdown) dropdown.style.display = "none";
    }
}
       

        // Only Mobile Menu logic needed now (Dropdown is gone)
        const menuBtn = document.getElementById('mobile-menu-btn');
        const closeBtn = document.getElementById('close-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        if(menuBtn && mobileMenu) {
            menuBtn.addEventListener('click', () => {
                mobileMenu.classList.remove('hidden');
            });
        }

        if(closeBtn && mobileMenu) {
            closeBtn.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        }
    
    