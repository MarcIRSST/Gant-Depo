document.addEventListener("DOMContentLoaded", () => {


    const mobileMenu = () => {

        const menuBurger = document.getElementById("mobile-menu");

        const menuItems = document.querySelector(".menu-items");

        const itemParent = document.querySelectorAll(".has-child-link");

        menuBurger.addEventListener("click", () => {
            menuBurger.classList.toggle("close");
            menuItems.classList.toggle("open")
        });

        itemParent.forEach((item) => {
            const parentHeight = item.parentNode.offsetHeight;
            const itemHeight = item.offsetHeight;
            const parent = item.parentNode;

                item.addEventListener("click", () => {
                    const child = parent.querySelector(".child-menu");
                    
                    parent.classList.toggle("showChildMenu");
                    parent.style.height = parent.classList.contains("showChildMenu") ? itemHeight + child.offsetHeight + "px" : parentHeight + "px";
                })
            }
        );
    }

    const onResize = () => {
        if (window.innerWidth <= 992) {
          mobileMenu();
        }
    };

    window.addEventListener("resize", onResize);

    window.dispatchEvent(new Event("resize"));
});