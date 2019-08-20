const CONFIG = {
    TRIGGER : 'opinion-button',
    ELEM : 'opinion',
    CLASS : {
        ADD: '-is-active',
        HOLD: '-on-hold',
    },
};

const rotator = {
    init() {
        const { TRIGGER, ELEM, CLASS } = CONFIG;
        this.trigger = document.querySelectorAll(`[${TRIGGER}]`);
        this.opinion = document.querySelectorAll(`[${ELEM}]`);
        this.activ = 0;
        this.addClass = CLASS.ADD;
        this.holdClass = CLASS.HOLD;
        this.max = this.opinion.length - 1;
        this.addEvents();
    },

    addEvents() {
        Array.from(this.trigger).forEach(element => {

            element.disabled = false;

            element.addEventListener('click', (event) => {
                const $this = event.currentTarget;
                const direction = $this.getAttribute('data-direction');
                
                this.holdController(this.activ);

                if(direction == 'next') this.increment();                   
                else this.decrement();

                this.setCurrent(this.activ);
                $this.disabled = true;

                setTimeout(()=> {
                    $this.disabled = false;
                }, 1200)
            })
        });
    },

    increment() {
        this.activ++;

        if(this.activ > this.max) {
            this.activ = 0;
        }
    },

    decrement() {
        this.activ--;

        if(this.activ < 0) {
            this.activ = this.max;
        }
    },

    setCurrent($i) {
        Array.from(this.opinion).forEach((element, index) => {
            setTimeout(()=>{
                if(index == $i) element.classList.add(this.addClass);
                else element.classList.remove(this.addClass);
            }, 700);

            
            setTimeout(()=>{
                element.classList.remove(this.holdClass);
            }, 800);
        });  
    },

    holdController($i) {
         this.opinion[$i].classList.add(this.holdClass);
    },
};

export default rotator;