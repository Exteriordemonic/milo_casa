import { storiesOf } from '@storybook/html';

import '../../resources/assets/styles/main.scss';

import sofaBG from '../../resources/assets/images/sofa-bg.jpg';
import sofa from '../../resources/assets/images/sofa.jpg';

const cats = [
    'SOFY',
    'FOTELE ',
    'INSPIRACJE',
    'NAROŻNIKI',
    'PUFY',
    'AKCESORIA',
    'STOŁY',
    'KRZESŁA',
    'ŁÓŻKA',
    'MATERACE',
]

storiesOf('Layouts', module)
  .add('Sidebar', () => `
    <h2 class="subtitle bold">Sidebar</h2>
    <hr>
    <br>
    <br>
    <nav class="navigation" style="backgrond: black;background: black;padding: 20px;">
        <ul class="list">
            <li class="list__elem -is-active">
                <a class="link subtitle" href="#">
                    SOFY
                </a>
            </li>
            <li class="list__elem">
                <a class="link subtitle" href="#">
                    FOTELE
                </a>
            </li>
            <li class="list__elem">
                <a class="link subtitle" href="#">
                    INSPIRACJE
                </a>
            </li>
            <li class="list__elem">
                <a class="link subtitle" href="#">
                    NAROŻNIKI
                </a>
            </li>
            <li class="list__elem">
                <a class="link subtitle" href="#">
                    PUFY
                </a>
            </li>
            <li class="list__elem">
                <a class="link subtitle" href="#">
                    AKCESORIA
                </a>
            </li>
            <li class="list__elem">
                <a class="link subtitle" href="#">
                    STOŁY
                </a>
            </li>
            <li class="list__elem">
                <a class="link subtitle" href="#">
                    KRZESŁA
                </a>
            </li>
            <li class="list__elem">
                <a class="link subtitle" href="#">
                    ŁÓŻKA
                </a>
            </li>
            <li class="list__elem">
                <a class="link subtitle" href="#">
                    MATERACE
                </a>
            </li>
            <li class="list__elem list__elem--special">
                <a class="link subtitle" href="#">
                    PROJEKTANCI
                </a>
            </li>
        </ul>
    </nav>
    <br>
    <br>
    <xmp>
        <nav class="navigation">
            <ul class="list">
                <li class="list__elem -is-active">
                    <a class="link subtitle" href="#">
                        SOFY
                    </a>
                </li>

                <li class="list__elem">
                    <a class="link subtitle" href="#">
                        SOFY
                    </a>
                </li>
                ...
                <li class="list__elem list__elem--special">
                    <a class="link subtitle" href="#">
                        PROJEKTANCI
                    </a>
                </li>
            </ul>
        </nav>
    </xmp>
    <br>
    <br>
    <br>
    <br>
    <h2 class="subtitle bold">Sidebar Reverse</h2>
    <hr>
    <br>
    <br>
    <nav class="navigation navigation--reverse">
        <ul class="list">
            <li class="list__elem -is-active">
                <a class="link subtitle" href="#">
                    SOFY
                </a>
            </li>
            <li class="list__elem">
                <a class="link subtitle" href="#">
                    FOTELE
                </a>
            </li>
            <li class="list__elem">
                <a class="link subtitle" href="#">
                    INSPIRACJE
                </a>
            </li>
            <li class="list__elem">
                <a class="link subtitle" href="#">
                    NAROŻNIKI
                </a>
            </li>
            <li class="list__elem">
                <a class="link subtitle" href="#">
                    PUFY
                </a>
            </li>
            <li class="list__elem">
                <a class="link subtitle" href="#">
                    AKCESORIA
                </a>
            </li>
            <li class="list__elem">
                <a class="link subtitle" href="#">
                    STOŁY
                </a>
            </li>
            <li class="list__elem">
                <a class="link subtitle" href="#">
                    KRZESŁA
                </a>
            </li>
            <li class="list__elem">
                <a class="link subtitle" href="#">
                    ŁÓŻKA
                </a>
            </li>
            <li class="list__elem">
                <a class="link subtitle" href="#">
                    MATERACE
                </a>
            </li>
            <li class="list__elem list__elem--special">
                <a class="link subtitle" href="#">
                    PROJEKTANCI
                </a>
            </li>
        </ul>
    </nav>
    <br>
    <br>
    <xmp>
        <nav class="navigation navigation--reverse">
            <ul class="list">
                <li class="list__elem -is-active">
                    <a class="link subtitle" href="#">
                        SOFY
                    </a>
                </li>

                <li class="list__elem">
                    <a class="link subtitle" href="#">
                        SOFY
                    </a>
                </li>
                ...
                <li class="list__elem list__elem--special">
                    <a class="link subtitle" href="#">
                        PROJEKTANCI
                    </a>
                </li>
            </ul>
        </nav>
    </xmp>
    <br>
    <br>
    <br>
    <br>
    <h2 class="subtitle bold">TODO:</h2>
    <hr>
    <ul>
        <li>
            [ _ ] Create subnavigation
        </li>
    </ul>
  `);

    