
try {
    var swiperHero = new Swiper(".swiperhero", {
        spaceBetween: 40,
        lazy: false,
        freeMode: true,
        loop: true,
        speed: 100000,

        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
        slidesPerView: "auto",
        breakpoints: {
            640: {
                speed: 100000,
            },
            768: {
                speed: 100000,
            },
            1024: {
                speed: 100000,
            },
        },
    });
} catch (error) { }

try {
    var swiper = new Swiper(".mySwiper-shop", {
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
} catch (error) { }


try {
    const createCookie = (name, value, days) => {
        try {
            let expires = "";
            if (days) {
                const date = new Date();
                date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
                expires = "; expires=" + date.toGMTString();
            }
            document.cookie = name + "=" + value + expires + "; path=/";
        } catch (error) {
            console.error("Error in createCookie: ", error);
        }
    };

    const getCookie = (c_name) => {
        try {
            let c_start, c_end;
            if (document.cookie.length > 0) {
                c_start = document.cookie.indexOf(c_name + "=");
                if (c_start != -1) {
                    c_start = c_start + c_name.length + 1;
                    c_end = document.cookie.indexOf(";", c_start);
                    c_end = c_end == -1 ? document.cookie.length : c_end;
                    return decodeURIComponent(document.cookie.substring(c_start, c_end));
                }
            }
            return "";
        } catch (error) {
            console.error("Error in getCookie: ", error);
            return "";
        }
    };

    const addFavoriteButton = document.querySelectorAll(".add-favorite");
    if (!addFavoriteButton) {
        throw new Error("Favorite buttons not found");
    }

    addFavoriteButton.forEach((item) => {
        try {
            const json_str = getCookie("favoriteProducts");
            let arrBasic = json_str ? JSON.parse(json_str) : [];
            const getAttribute = item.getAttribute("id-data");

            if (!getAttribute) {
                throw new Error("Attribute 'id-data' not found on item");
            }

            if (arrBasic.includes(getAttribute)) {
                item.classList.add("active");
            }

            item.addEventListener("click", () => {
                try {
                    const json_strClickEvent = getCookie("favoriteProducts");
                    let arr = json_strClickEvent ? JSON.parse(json_strClickEvent) : [];

                    if (arr.includes(getAttribute)) {
                        arr = arr.filter((item) => item !== getAttribute);
                        item.classList.remove("active");

                        if (item.classList.contains("close-button-favorite")) {
                            createCookie("favoriteProducts", JSON.stringify(arr), 20);
                            window.location.reload();
                        }
                    } else {
                        arr.push(getAttribute);
                        item.classList.add("active");
                    }

                    createCookie("favoriteProducts", JSON.stringify(arr), 20);
                } catch (error) {
                    console.error("Error in click event handler: ", error);
                }
            });
        } catch (error) {
            console.error("Error in forEach loop: ", error);
        }
    });
} catch (error) {
    console.error("Error in main try-catch block: ", error);
}





try {
    const overlayShopCart = document.querySelector(".sidecart-overlay");
    const sidecart = document.querySelector("#sidecart-menu");
    const sidecartClose = document.querySelector("#sidecart-close");
    const sidecartButton = document.querySelectorAll(".sidecar");
    // const closeHandler = document.querySelector("#hamburger-menu");

    for (let i = 0; i < sidecartButton.length; i++) {
        sidecartButton[i].addEventListener("click", () => {
            // closeHandler.classList.add("hidden");
            overlayShopCart.classList.toggle("sidecart-overlay-active");
            sidecart.classList.toggle("sidecart-hidden");
        });
    }

    overlayShopCart.addEventListener("click", () => {
        overlayShopCart.classList.toggle("sidecart-overlay-active");
        sidecart.classList.toggle("sidecart-hidden");
    });

    sidecartClose.addEventListener("click", () => {
        overlayShopCart.classList.toggle("sidecart-overlay-active");
        sidecart.classList.toggle("sidecart-hidden");
    });
} catch (error) {
    console.error(error);
}

try {
    document.addEventListener('DOMContentLoaded', function () {
        // Selecteer de button met id 'searchlink'
        var searchLink = document.getElementById('searchlink');

        // Voeg een click event listener toe aan de button
        searchLink.addEventListener('click', function () {
            document.body.classList.toggle('search-nonactive');
            document.body.classList.toggle('search-active');
        });

        // Selecteer alle elementen met de class 'close-search'
        var closeSearchElements = document.querySelectorAll('.close-search');

        // Voeg een click event listener toe aan elk van deze elementen
        closeSearchElements.forEach(function (element) {
            element.addEventListener('click', function () {
                document.body.classList.toggle('search-nonactive');
                document.body.classList.toggle('search-active');
            });
        });
    });
} catch (error) {
    console.error(error);
}


try {
    // JavaScript-code om class te togglen
    document.getElementById('menu').addEventListener('click', function () {
        // Verkrijg het body-element
        var bodyElement = document.body;

        // Toggle class 'active' en 'non-active' op het body-element
        bodyElement.classList.toggle('menu-active');
        bodyElement.classList.toggle('menu-non-active');
    });
} catch (error) { }