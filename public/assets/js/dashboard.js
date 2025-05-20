const sidebar = document.getElementById("sidebar");
const toggleBtn = document.getElementById("toggleSidebar");
const toggleBtn2 = document.getElementById("toggleSidebar2");
const toggleIcon = document.getElementById("toggleIcon");

// SVG Icons as strings
const collapseIcon = `
    <svg class="w-3 h-3 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13"/>
    </svg>`;

const expandIcon = `
    <svg class="w-3 h-3 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1"/>
    </svg>`;

let isOpen = true;

toggleBtn.addEventListener("click", () => {
    isOpen = !isOpen;
    sidebar.style.transform = isOpen ? "translateX(0)" : "translateX(-100%)";
    toggleIcon.innerHTML = isOpen ? collapseIcon : expandIcon;
});

toggleBtn2.addEventListener("click", () => {
    isOpen = !isOpen;
    sidebar.style.transform = isOpen ? "translateX(0)" : "translateX(-100%)";
    toggleIcon.innerHTML = isOpen ? collapseIcon : expandIcon;
});
