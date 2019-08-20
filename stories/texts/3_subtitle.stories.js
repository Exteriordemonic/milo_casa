import { storiesOf } from '@storybook/html';

import '../../resources/assets/styles/main.scss';

storiesOf('Texts', module)
  .add('Subtitle', () => `
  <h2 class="subtitle bold">
    Subtitle - Light
  </h2>
  <hr />
  <p class="subtitle light">Lorem ipsum</p>
  <xmp> 
    <p class="subtitle light">
      Lorem ipsum
    </p> 
  </xmp>
  <br><br>
  <h2 class="subtitle bold">
    Subtitle - Regular
  </h2>
  <hr />
  <p class="subtitle">Lorem ipsum</p>
  <xmp> 
    <p class="subtitle">
      Lorem ipsum
    </p> 
  </xmp>
  <br><br>
  <h2 class="subtitle bold">
    Subtitle - Bold
  </h2>
  <hr />
  <p class="subtitle bold">Lorem ipsum</p>
  <xmp> 
    <p class="subtitle bold">
      Lorem ipsum
    </p> 
  </xmp>
  <br><br>
  <h2 class="subtitle bold">
    Text example
  </h2>
  <hr />
  <p class="subtitle" style="width: 600px;">Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada feugiat.</p>
  <xmp> 
    <p class="subtitle">
      ...
    </p> 
  </xmp>
  <br><br>
  `);

