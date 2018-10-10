<?php
include "header.php";
?>
<main class="wrapper">
  <section>
    <h1>HTML & CSS Tutorials</h1>
    <article>
      <h2>How to build a simple CSS Grid layout</h2>
      <p><b>Want to build a responsive grid with as little code as possible?</b> Well duh, of course. Check out the example in the pen below to see how:</p>
      <p data-height="500" data-theme-id="0" data-slug-hash="paqQyo" data-default-tab="result" data-user="rolandjohansson" data-pen-title="CSS grid layout: Images with caption" class="codepen">See the Pen <a href="https://codepen.io/rolandjohansson/pen/paqQyo/">CSS grid layout: Images with caption</a> by Roland Johansson (<a href="https://codepen.io/rolandjohansson">@rolandjohansson</a>) on <a href="https://codepen.io">CodePen</a>.</p>
      <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
      <p>First of all, let’s just take a moment and appreciate just how easy it is to make a fully responsive grid layout these days with the fairly new CSS Grid! This used to take quite a few more lines of code to achieve just a year ago, which is
        why any old web developer gets excited over this addition to CSS.</p>
      <h3>Understanding the code</h3>
      <p>In this particular example with images and captions I made two media query breakpoints resulting in three different column layouts – one, two and three columns depending on viewport width.</p>
      <p><b>The secret sauce of CSS Grid</b> is this bit of code, which automagically turns all immediate child elements of the container into grid items:</p>

      <code>

<pre>.grid-container {
  display: grid;
}</pre>
      </code>

      <p>The CSS code is written with a mobile first approach; Within this grid container class we could have immediately also declared how many columns we want. But we’re saving that for the media queries at the bottom of the CSS code. At this
        point when we haven’t declared how many grid columns we want we get just one column by default – which is exactly what we want on the smallest viewports. We define that we want more columns on wider screens in the media-queries instead.
        A.k.a. mobile first approach.</p>
      <p>CSS Grid has a lot more awesomeness to offer, so for more on this why not have a look at <a href="https://www.w3schools.com/css/css_grid.asp" target="_blank" rel="noopener noreferrer">what W3C has to say over at w3schools.com?</a></p>
      <p>Enjoy! I hope this little tutorial was helpful. 🙂 Questions? Ideas for improvements? Or just plain liked this? Feel free to leave a comment!</p>
    </article>
  </section>
</main>
<?php
include "footer.php";
?>
