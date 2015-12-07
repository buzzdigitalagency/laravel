@extends ('../layout.skeleton')

@section ('head')
@stop

@section ('title')
  <title></title>
@stop

@section ('body-id')
  id="docs"
@stop

@section ('content')
  <div class="block-inverse">
    <div class="jumbotron">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1>Buzz Docs</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div id="intro" class="row">
      <div class="col-xs-12">
        <h2 class="wet-asphalt-text">Intro</h2>
        <p class="wet-asphalt-text">This is meant to be a guideline for our team, as well as anyone else who would like to use it.</p>
        <p class="wet-asphalt-text">It is meant to also be a place to go when in need of additional information on what our front end scaffold has to offer.</p>
        <p class="wet-asphalt-text">Our front end scaffold includes many different tools as well as a few additions done by <a title="Buzz Digital Agency" class="docs-link" href="http://buzzdigitalagency.com/">our team</a>.</p>
        <p class="wet-asphalt-text">First and foremost, we build our entire styles with <a title="Syntactically Awesome Style Sheets" href="http://sass-lang.com/">SASS</a>, this allows us to do truly amazing work, but more importantly it allows us to do more efficient work. <a title="Syntactically Awesome Style Sheets" href="http://sass-lang.com/">SASS</a> also allows us to use variables for things like colors, paddings, magins, as well as many others. By doing this we can change a couple of assingned variables and change the whole application.</p>
        <p class="wet-asphalt-text">To scaffold all the dependencies of our project we use a tool called <a title="Bower: A package manager for the web" href="http://bower.io/">Bower</a> created by developers at <a title="Twitter is your window to the world." href="https://twitter.com/">Twitter</a>. With bower we can download all the necessary packages by simply typing one command.</p>
        <p class="wet-asphalt-text">One of the most important tools we use is <a  title="Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile first projects on the web." href="http://getbootstrap.com/">Bootstrap</a> because it provides a variety of components, as well as mixins which allow us to create variations of these components.</p>
        <p class="wet-asphalt-text">Another tool we use is <a title="Bourbon: A simple and lightweight mixin library for Sass" href="http://bourbon.io/">Bourbon</a> as it provides helpfull mixins for <a title="Bourbon Animation Mixins" class="docs-link" href="http://bourbon.io/docs/#animation">animations</a>, <a title="Bourbon Linear Gradient Mixin" href="http://bourbon.io/docs/#linear-gradient" class="docs-link">gradients</a>, <a title="Bourbon Tint & Shade Gradient Mixins" class="docs-link" href="http://bourbon.io/docs/#tint-shade">tints & shade</a>, as well as many others.</p>
        <p class="wet-asphalt-text">Although <a title="Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile first projects on the web." href="http://getbootstrap.com/">Bootstrap</a> also provides a flexible grid usefull for most circumstances, we have opted to using <a title="Lost Grid is a powerful grid system built in PostCSS that works with any preprocessor and even vanilla CSS." href="http://corysimmons.github.io/lost/">Lost Grid</a> for more creative layouts, as it provides many more options.</p>
        <p class="wet-asphalt-text"><a title="Lost Grid is a powerful grid system built in PostCSS that works with any preprocessor and even vanilla CSS." href="http://corysimmons.github.io/lost/">Lost Grid</a> is actually part of a new technology called <a title="PostCSS is a tool for transforming styles with JS plugins. These plugins can lint your CSS, support variables and mixins, transpile future CSS syntax, inline images, and more." href="https://github.com/postcss/postcss">Post-CSS</a> as opposed to pre-processors like <a title="Syntactically Awesome Style Sheets" href="http://sass-lang.com/">SASS</a>.</p>
        <p class="wet-asphalt-text">Finally to bring it all together we use <a title="Automate and enhance your workflow" href="http://gulpjs.com/">Gulp</a> which runs several tedious time consuming tasks in a matter of seconds. And as if <a title="Automate and enhance your workflow" href="http://gulpjs.com/">Gulp</a> isn't already good enough, we actually use a wrapper around it <a title="Laravel Elixir provides a clean, fluent API for defining basic Gulp tasks for your Laravel application. Elixir supports several common CSS and JavaScript pre-processors, and even testing tools. Using method chaining, Elixir allows you to fluently define your asset pipeline." href="https://github.com/laravel/elixir">Elixir</a> which allows us to write these task in a simpler and more efficient manner.</p>
        <p class="wet-asphalt-text"><a title="Laravel Elixir provides a clean, fluent API for defining basic Gulp tasks for your Laravel application. Elixir supports several common CSS and JavaScript pre-processors, and even testing tools. Using method chaining, Elixir allows you to fluently define your asset pipeline." href="https://github.com/laravel/elixir">Elixir</a> is developed by <a title="Creator of Laravel" href="https://twitter.com/taylorotwell">Taylor Otwell</a> and his team at <a title="The PHP Framework For Web Artisans" href="http://laravel.com/">Laravel</a> and they have put a lot of work in making it as clean and readable as it could possibly be.</p>
        <p class="wet-asphalt-text">Well enough with all this technical jargon, lets get down to business.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <h2 class="wet-asphalt-text">Color</h2>
      </div>
    </div>
    <div class="row flat-ui-colors">
      <div class="col-xs-12">
        <h3 class="wet-asphalt-text">
          <a class="docs-link" href="http://flatuicolors.com/">
          Flat UI Colors
          </a>
        </h3>
      </div>
      <div class="col-xs-12">
        <div class="color-box white-text turquoise-bg">
          <span class="text-center">Turquoise<br>#1abc9c</span>
        </div>
        <div class="color-box white-text green-sea-bg">
          <span class="text-center">Green Sea<br>#16a085</span>
        </div>
        <div class="color-box white-text emerald-bg">
          <span class="text-center">Emerald<br>#2ecc71</span>
        </div>
        <div class="color-box white-text nephritis-bg">
          <span class="text-center">Nephritis<br>#27ae60</span>
        </div>
        <div class="color-box white-text peter-river-bg">
          <span class="text-center">Peter River<br>#3498db</span>
        </div>
        <div class="color-box white-text belize-hole-bg">
          <span class="text-center">Belize Hole<br>#2980b9</span>
        </div>
        <div class="color-box white-text amethyst-bg">
          <span class="text-center">Amethyst<br>#9b59b6</span>
        </div>
        <div class="color-box white-text wisteria-bg">
          <span class="text-center">Wisteria<br>#8e44ad</span>
        </div>
        <div class="color-box white-text wet-asphalt-bg">
          <span class="text-center">Wet Asphalt<br>#34495e</span>
        </div>
        <div class="color-box white-text midnight-blue-bg">
          <span class="text-center">Midnight Blue<br>#2c3e50</span>
        </div>
        <div class="color-box white-text sun-flower-bg">
          <span class="text-center">Sun Flower<br>#f1c40f</span>
        </div>
        <div class="color-box white-text orange-bg">
          <span class="text-center">Orange<br>#f39c12</span>
        </div>
        <div class="color-box white-text carrot-bg">
          <span class="text-center">Carrot<br>#e67e22</span>
        </div>
        <div class="color-box white-text pumpkin-bg">
          <span class="text-center">Pumpkin<br>#d35400</span>
        </div>
        <div class="color-box white-text alizarin-bg">
          <span class="text-center">Alizarin<br>#e74c3c</span>
        </div>
        <div class="color-box white-text pomegranate-bg">
          <span class="text-center">Pomegranate<br>#c0392b</span>
        </div>
        <div class="color-box wet-asphalt-text clouds-bg">
          <span class="text-center">Clouds<br>#ecf0f1</span>
        </div>
        <div class="color-box white-text silver-bg">
          <span class="text-center">Silver<br>#bdc3c7</span>
        </div>
        <div class="color-box white-text concrete-bg">
          <span class="text-center">Concrete<br>#95a5a6</span>
        </div>
        <div class="color-box white-text asbestos-bg">
          <span class="text-center">Asbestos<br>#7f8c8d</span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <h2>Buttons</h2>
      </div>
    </div>
    <div class="row buttons">
      <div class="col-xs-12">
        <h3>Flat Bootstrap Buttons</h3>
        <a href="#" class="btn btn-turquoise">.btn-turquoise</a>
        <a href="#" class="btn btn-green-sea">.btn-green-sea</a>
        <br>
        <a href="#" class="btn btn-emerald">.btn-emerald</a>
        <a href="#" class="btn btn-nephritis">.btn-nephritis</a>
        <br>
        <a href="#" class="btn btn-peter-river">.btn-peter-river</a>
        <a href="#" class="btn btn-belize-hole">.btn-belize-hole</a>
        <br>
        <a href="#" class="btn btn-amethyst">.btn-amethyst</a>
        <a href="#" class="btn btn-wisteria">.btn-wisteria</a>
        <br>
        <a href="#" class="btn btn-wet-asphalt">.btn-wet-asphalt</a>
        <a href="#" class="btn btn-midnight-blue">.btn-midnight-blue</a>
        <br>
        <a href="#" class="btn btn-sun-flower">.btn-sun-flower</a>
        <a href="#" class="btn btn-orange">.btn-orange</a>
        <br>
        <a href="#" class="btn btn-carrot">.btn-carrot</a>
        <a href="#" class="btn btn-pumpkin">.btn-pumpkin</a>
        <br>
        <a href="#" class="btn btn-alizarin">.btn-alizarin</a>
        <a href="#" class="btn btn-pomegranate">.btn-pomegranate</a>
        <br>
        <a href="#" class="btn btn-clouds">.btn-clouds</a>
        <a href="#" class="btn btn-silver">.btn-silver</a>
        <br>
        <a href="#" class="btn btn-concrete">.btn-concrete</a>
        <a href="#" class="btn btn-asbestos">.btn-asbestos</a>
      </div>
    </div>
  </div>
@stop

@section ('footer-scripts')
@stop