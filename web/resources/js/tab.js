window.initTab = function () {
    const tabs = document.getElementsByClassName('tabs');
    const tabsObj = {};

    for (let i = 0; i < tabs.length; i++) {
        const element = tabs[i];
        tabsObj[i] = {
            panel: null,
            content: null
        }

        // find panel
        const tabPanels = element.querySelectorAll('.tab');
        if (tabPanels) {
            tabsObj[i].panel = tabPanels[0];
            tabsObj[i].panel.classList.add('active');
            const firstTabContent = document.querySelector(`[data-tab="${tabsObj[i].panel.dataset.href}"]`);
            if(firstTabContent) {
                tabsObj[i].content = firstTabContent;
                tabsObj[i].content.classList.toggle('active');
            }

            // add listener
            Array.from(tabPanels).forEach(element => element.addEventListener('click', () => {
                // remove old active
                tabsObj[i].panel.classList.remove('active');
                tabsObj[i].content.classList.toggle('active');

                // add new active
                const href = element.dataset.href;
                tabsObj[i].panel = element;
                element.classList.add('active');
                const content = document.querySelector(`[data-tab="${href}"]`);
                if(content) {
                    tabsObj[i].content = content;
                    tabsObj[i].content.classList.toggle('active');
                }
            }))
        }
    }
}
