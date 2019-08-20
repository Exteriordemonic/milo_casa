import { storiesOf } from '@storybook/html';

import '../../resources/assets/styles/main.scss';

storiesOf('Texts', module)
  .add('Headline', () => `
  <h2 class="subtitle bold">
    Headline - Light
  </h2>
  <hr />
  <p class="headline light">Lorem ipsum</p>
  <xmp> 
    <p class="headline light">
      Lorem ipsum
    </p> 
  </xmp>
  <br><br>
  <h2 class="subtitle bold">
    Headline - Regular
  </h2>
  <hr />
  <p class="headline">Lorem ipsum</p>
  <xmp> 
    <p class="headline">
      Lorem ipsum
    </p> 
  </xmp>
  <br><br>
  <h2 class="subtitle bold">
    Headline - Bold
  </h2>
  <hr />
  <p class="headline bold">Lorem ipsum</p>
  <xmp> 
    <p class="headline bold">
      Lorem ipsum
    </p> 
  </xmp>
  <br><br>
  `);
