
    //shadow move on img
    let slikajk = document.querySelector("#picturejk");

    document.addEventListener("scroll", function (e) {
        let offset = window.pageYOffset;
        slikajk.style.boxShadow = `${15+offset/50}px ${15-offset/10}px 5px 0px rgba(0, 0, 0, 0.75)`;
    });

