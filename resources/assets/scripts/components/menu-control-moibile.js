const CONFIG = {
    ELEM: '.menu-item-has-children',
    SUBELEM: '.sub-menu',
    CHILD: 'a',
}

const MenuControllMobile = {
    init() {
        const { ELEM, SUBELEM, CHILD} = CONFIG;
        this.elem = document.querySelectorAll(ELEM);
        this.subElem = SUBELEM;
        this.child = CHILD;

        if(window.innerWidth < 992) {
            this.addEvents();
        }
    },

    addEvents() {
        Array.from(this.elem).forEach((element)=> {
            console.log(element.querySelector(this.child));
            const parentLink = element.querySelector(this.child);

            const link = parentLink.getAttribute('href');
            const name = parentLink.innerText;

            console.log(name, link);

            this.createElem(element.querySelector(this.subElem), link, name);

            element.querySelector(this.child).addEventListener('click', e => {
                e.preventDefault();

                
            });
        });
    },

    createElem(elem, link, name) {
        const li = document.createElement('li');
        const a = document.createElement('a');

        li.classList.add('menu-item', 'menu-item-type-post_type', 'menu-item-object-page');
        a.setAttribute('href', link);
        a.innerText = name;
        li.appendChild(a);

        elem.appendChild(li);
    },
}

export default MenuControllMobile;