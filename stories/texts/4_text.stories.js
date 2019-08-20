
  import { storiesOf } from '@storybook/html';

import '../../resources/assets/styles/main.scss';

storiesOf('Texts', module)
  .add('Text', () => `
  <h2 class="text bold">
    Text - Light
  </h2>
  <hr />
  <p class="text light" style="max-width: 600px; margin: 20px 0;">
    Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat. Vivamus suscipit tortor eget felis porttitor volutpat.Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Donec sollicitudin molestie malesuada.
  </p>
  <xmp> 
    <p class="text light">
      ...
    </p> 
  </xmp>
  <br><br>

  <h2 class="text bold">
    Text - Regular
  </h2>
  <hr />
  <p class="text" style="max-width: 600px; margin: 20px 0;">
    Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat. Vivamus suscipit tortor eget felis porttitor volutpat.Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Donec sollicitudin molestie malesuada.
  </p>
  <xmp> 
    <p class="text">
      ...
    </p> 
  </xmp>
  <br><br>

  <h2 class="text bold">
    Text - Bold
  </h2>
  <hr />
  <p class="text bold" style="max-width: 600px; margin: 20px 0;">
    Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat. Vivamus suscipit tortor eget felis porttitor volutpat.Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Donec sollicitudin molestie malesuada.
  </p>
  <xmp> 
    <p class="text bold">
      ...
    </p> 
  </xmp>
  <br><br>
  `);
