(() => {
    const currentPath = window.location.pathname;
    const menuItems = document.querySelectorAll('[data-type="menu"]');

    Array.from(menuItems).forEach(element => {
        if(element.dataset.ref === currentPath) {
            element.classList.add('active');
        }
    })
})()
