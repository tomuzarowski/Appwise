const desktopTabs = document.querySelector(".WhatWeDo__desktop-tabs");
const mobileTabs = document.querySelector(".WhatWeDo__mobile-tabs");

if (desktopTabs || mobileTabs) {

    let mql = window.matchMedia("(min-width: 1280px)");

    function handleTabs(container) {
        const tabs = container.querySelectorAll(".WhatWeDo__tab");
        const contents = container.querySelectorAll(".WhatWeDo__content");

        tabs.forEach((tab, index) => {
            tab.addEventListener("click", () => {
                tabs.forEach(tab => tab.classList.remove("WhatWeDo__tab--active"));
                contents.forEach(content => content.classList.remove("WhatWeDo__content--active"));
                tab.classList.add("WhatWeDo__tab--active");
                contents[index].classList.add("WhatWeDo__content--active");
            }
            );
        });
    }

    function checkWindowSize() {
        const container = mql.matches ? desktopTabs : mobileTabs; 
        handleTabs(container);
    }

    mql.addEventListener("change", checkWindowSize);

    checkWindowSize();

}