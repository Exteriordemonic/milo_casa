import { storiesOf } from '@storybook/html';

import '../../resources/assets/styles/main.scss';

storiesOf('Texts', module)
  .add('Title', () => `
  <h2 class="title bold">
    Title - Light
  </h2>
  <hr />
  <p class="title light">Lorem ipsum</p>
  <xmp> 
    <p class="title light">
      Lorem ipsum
    </p> 
  </xmp>
  <br><br>
  <h2 class="title bold">
    Title - Regular
  </h2>
  <hr />
  <p class="title">Lorem ipsum</p>
  <xmp> 
    <p class="title">
      Lorem ipsum
    </p> 
  </xmp>
  <br><br>
  <h2 class="title bold">
    Title - Bold
  </h2>
  <hr />
  <p class="title bold">Lorem ipsum</p>
  <xmp> 
    <p class="title bold">
      Lorem ipsum
    </p> 
  </xmp>
  <br><br>
  <h2 class="title bold">
    Text example
  </h2>
  <hr />
  <p class="title" style="width: 600px;">Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada feugiat.</p>
  <xmp> 
    <p class="title">
      ...
    </p> 
  </xmp>
  <br><br>
  `);
