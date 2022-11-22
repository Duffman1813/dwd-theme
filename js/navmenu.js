// ==============================
// Nav
// ========================================

nav = {
    config: {
        body: 'body',
        navContainer: '.nav-container',
        burger: '.burger',
    },
    qs: function (elem) {
        return document.querySelector(elem);
    },
    handleMenu: function () {
        const self = this;
        const body = self.qs(self.config.body);
        const burger = self.qs(self.config.burger);

        burger.addEventListener("click", function () {
            body.classList.toggle("is--active");
        });
    },
    init: function () {
        const self = this;

        self.handleMenu();
    }
};

// run
nav.init();