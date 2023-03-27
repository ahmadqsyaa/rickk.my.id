
        const text = document.querySelector(".sec-text");


        const textLoad = () => {
            setTimeout(() => {
                text.textContent = "tentang website";
            }, 0);
            setTimeout(() => {
                text.textContent = "about website ";
            }, 4000);
            setTimeout(() => {
                text.textContent = "buat website";
            }, 8000); //1s = 1000 milliseconds
        }

        textLoad();
        setInterval(textLoad, 12000);