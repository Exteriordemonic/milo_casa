import { storiesOf } from '@storybook/html';

import '../../resources/assets/styles/main.scss';

import sofaBG from '../../resources/assets/images/sofa-bg.jpg';
import productBlock from '../blocks/product-block.stories';

storiesOf('Layouts', module)
  .add('Hero', () => `
    <h2 class="subtitle bold">Hero</h2>
    <hr>
    <br>
    <br>
    <section class="hero">
        <div class="container">
            <header class="hero__header">
                <h2 class="headline bold">
                    <a class="link" href="/sofa">Sofa</a>
                    Place 
                    <br>
                    in your home
                </h2>
            </header>
            <ul class="hero__products">
                <li>
                    ${productBlock}
                </li>
                <li>
                    ${productBlock}
                </li>
                <li>
                    ${productBlock}
                </li>
            </ul>
        </div>
        <img class="hero__image" src="${sofaBG}"> 
    </section>
    <br>
    <br>
    <xmp>
    <section class="hero">
        <div class="container">
            <header class="hero__header">
                <h2 class="headline bold">
                    <a class="link" href="/sofa">Sofa</a>
                    Place 
                    <br>
                    in your home
                </h2>
            </header>
            <ul class="hero__products">
                <li>
                    ...productBlock
                </li>
            </ul>
        </div>
        <img class="hero__image" src="${sofaBG}"> 
    </section>
    </xmp>

  `);
