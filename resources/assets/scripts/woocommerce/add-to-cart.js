import miniCart from './mini-card';
import 'jquery';


const CONFIG = {
    ELEM: '[data-add-to-basket]',
    QAN: '[data-basket-count]',
};
  
const addToCart = {
    init() {
        const { ELEM, QAN } = CONFIG;
        
        this.$elem = document.querySelectorAll(ELEM);
        this.$qan = document.querySelector(QAN);
        console.log(this.$elem);
        this.addEvent();
        this.$allow = true;
    },

    addEvent() {
        this.$elem.forEach((element) => {
            element.addEventListener('click', (event) => {
                event.preventDefault();

                if(this.$allow) {
                    this.$allow = false;
                    const link = element.getAttribute('href');
                    
                    this.loadBasket(element, link);
                }
            });
        });
    },

    loadBasket(link) {
        const $this = this;
        $('#mini-card').load(`${link} #mini-card > *`, function() {
            miniCart.init();
            miniCart.show();

            $this.$allow = true;

            $('#basket-count').load(`${window.location.href} #basket-count > *`);
        });
    },
};

export default addToCart;
