<button
  class="hamburger @if($type) hamburger--{{ $type }} @endif"
  @if($type) data-{{ $type }} @else data-toggle-menu @endif
>
  <div class="hamburger__line"></div>
  <div class="hamburger__line"></div>
  <div class="hamburger__line"></div>
</button>
