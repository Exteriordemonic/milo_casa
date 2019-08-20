const CONFIG = {
    ELEM: '.raports',
    ITEMS: 'a',
    ATTR: 'data-fancybox',
}

const WP_BLOCK_FILES = {
    init() {
        const {ELEM, ITEMS, ATTR} = CONFIG;

        this.elem = document.querySelectorAll(ELEM);
        this.items = ITEMS;
        this.attr = ATTR;

        this.eachElem();
    },

    eachElem() {
        Array.from(this.elem).forEach((element, index )=> {
            const items = element.querySelectorAll(this.items);
            const i = index; 

            console.log(i);

            Array.from(items).forEach(item => {
                item.setAttribute(this.attr,`files${i}`);
            });
        });
    },
}

export default WP_BLOCK_FILES;