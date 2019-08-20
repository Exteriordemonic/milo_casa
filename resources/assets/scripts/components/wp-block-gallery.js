const CONFIG = {
    ELEM: '.wp-block-gallery',
    ITEMS: 'a',
    ATTR: 'data-fancybox',
}

const WP_BLOCK_GALLERY = {
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
                item.setAttribute(this.attr,i);
            });
        });
    },
}

export default WP_BLOCK_GALLERY;