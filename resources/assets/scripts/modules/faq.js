const faq = document.querySelectorAll('.faq-container .faq-container__items .item');

if (faq) {
    faq.forEach((el) => {
        el.addEventListener('click', (e) => {
            e.preventDefault();
            let answer = el.querySelector('.item__answer');
            if (answer) {
                answer.classList.toggle('item__answer--open');
            }
            let icon = el.querySelector('.item__icon');

            if (icon) {
                let icon1 = icon.querySelector('.icon-1');
                let icon2 = icon.querySelector('.icon-2');

                if (icon1.classList.contains('icon--hidden')) {
                    icon1.classList.remove('icon--hidden');
                } else {
                    icon1.classList.add('icon--hidden');
                }

                if (icon2.classList.contains('icon--hidden')) {
                    icon2.classList.remove('icon--hidden');
                } else {
                    icon2.classList.add('icon--hidden');
                }
            }

        });
    })
}