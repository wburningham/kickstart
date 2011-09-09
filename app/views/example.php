<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>kickstart</title>
    <meta name="description" content="">
    <meta name="author" content="Jarrett Burningham">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
<link rel="stylesheet/less" href="../../assets/less/bootstrap.less">
<script src="../../assets/js/less-1.1.3.min.js"></script>
    <link href="../../assets/css/docs.css" rel="stylesheet">
    <link href="../../assets/css/prettify.css" rel="stylesheet">

    <!-- Le javascript -->
    <script src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
    <script src="http://autobahn.tablesorter.com/jquery.tablesorter.min.js"></script>
    <script src="../../assets/js/prettify.js"></script>
    <script src="../../assets/js/application.js"></script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../../assets/img/favicon.ico">
    <link rel="apple-touch-icon" href="../../assets/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../../assets/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../../assets/img/apple-touch-icon-114x114.png">
  </head>

  <body>

    <!-- Topbar
    ================================================== -->
    <div class="topbar">
      <div class="topbar-inner">
        <div class="container">
          <h3><a href="#">kickstart</a></h3>
          <ul class="nav">
            <li class="active"><a href="#masthead">Overview</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#grid-system">Grid</a></li>
            <li><a href="#layouts">Layouts</a></li>
            <li><a href="#typography">Typography</a></li>
            <li><a href="#tables">Tables</a></li>
            <li><a href="#forms">Forms</a></li>
            <li><a href="#navigation">Navigation</a></li>
            <li><a href="#alerts">Alerts</a></li>
            <li><a href="#popovers">Popovers</a></li>
            <li><a href="#less">Less</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Masthead (blueprinty thing)
    ================================================== -->
    <div id="masthead">
      <div class="inner">
        <div class="container">
          <h1>kickstart Framework</h1>
          <p class="lead">
            Kickstart is an adaptation of CodeIgniter with Bootstrap CSS<br />
            In addition to extended CI core functionality, it includes base CSS and HTML for typography, forms, buttons, tables, grids, navigation, and more.<br />
          </p>
          <p><strong>Nerd alert:</strong> Bootstrap is <a href="#less" title="Read about using Bootstrap with Less">built with Less</a> and was designed to work out of the gate with modern browsers in mind.</p>
        </div><!-- /container -->
      </div>
    </div>

    <!-- Quickstart options
    ================================================== -->
    <div class="quickstart">
      <div class="container">
        <div class="row">
          <div class="span5 columns">
            <h6>Hotlink the CSS</h6>
            <p>For the quickest and easiest start, just copy this snippet into your webpage.</p>
            <form>
              <textarea class="copy-code" rows="1">&lt;link rel="stylesheet" href="http://twitter.github.com/bootstrap/assets/css/bootstrap-1.2.0.min.css"></textarea>
            </form>
          </div>
          <div class="span5 columns">
            <h6>Use it with Less</h6>
            <p>A fan of using Less? No problem, just clone the repo and add these lines:</p>
            <form>
              <textarea class="copy-code" rows="2">&lt;link rel="stylesheet/less" href="/path/to/bootstrap.less"&gt;
&lt;script src="/path/to/less.js"&gt;&lt;/script&gt;</textarea>
            </form>
          </div>
          <div class="span5 columns">
            <h6>Fork on GitHub</h6>
            <p>Download, fork, pull, file issues, and more with my kickstart repo on Github.</p>
            <p><a target="_blank" href="https://github.com/wburningham/kickstart" class="btn primary">kickstart on GitHub &raquo;</a></p>
          </div>
        </div><!-- /row -->
      </div>
    </div>

    <div class="container">



<!-- About Bootstrap
================================================== -->
<section id="about">
  <div class="page-header">
    <h1>About kickstart <small>Background, browser support, and more</small></h1>
  </div>
  <div class="row">
    <div class="span6 columns">
      <h3>Background</h3>
      <p>After working sereral years as a web developer, I wanted a simple, yet robust framework to kickstart my prototyping.</p>
    </div>
    <div class="span5 columns">
      <h3>Browser support</h3>
      <p>Bootstrap is tested and supported in major modern browsers like Chrome, Safari, Internet Explorer, and Firefox.</p>
      <ul>
        <li>Latest Safari</li>
        <li>Latest Google Chrome</li>
        <li>Firefox 4+</li>
        <li>Internet Explorer 7+</li>
        <li>Opera 11</li>
      </ul>
    </div>
    <div class="span5 columns">
      <h3>What's included</h3>
      <p>Kickstart is made up of the following:</p>
      <ul>
        <li>CodeIgniter 2.0.3 Core</li>
        <li>Bootstrap CSS</li>
        <li>Normalize.css</li>
        <li>LESS.js</li>
        <li>jQuery</li>
      </ul>
    </div>
  </div><!-- /row -->
</section>



<!-- Grid system
================================================== -->
<section id="grid-system">
  <div class="page-header">
    <h1>Grid system <small>Rock the standard 940px or roll your own</small></h1>
  </div>
  <div class="row">
    <div class="span4 columns">
      <h2>Default grid</h2>
      <p>The default grid system provided as part of Bootstrap is a 940px wide 16-column grid. It’s a flavor of the popular 960 grid system, but without the additional margin/padding on the left and right sides.</p>
    </div>
    <div class="span12 columns">
      <h3>Example grid markup</h3>
      <p>As shown here, a basic layout can be created with two "columns," each spanning a number of the 16 foundational columns we defined as part of our grid system. See the examples below for more variations.</p>
<pre class="prettyprint linenums">
&lt;div class="row"&gt;
  &lt;div class="span6 columns"&gt;
    ...
  &lt;/div&gt;
  &lt;div class="span10 columns"&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;
</pre>
    </div>
  </div><!-- /row -->
  <div class="row show-grid" title="16 column layout">
    <div class="span1 column">1</div>
    <div class="span1 column">1</div>
    <div class="span1 column">1</div>
    <div class="span1 column">1</div>
    <div class="span1 column">1</div>
    <div class="span1 column">1</div>
    <div class="span1 column">1</div>
    <div class="span1 column">1</div>
    <div class="span1 column">1</div>
    <div class="span1 column">1</div>
    <div class="span1 column">1</div>
    <div class="span1 column">1</div>
    <div class="span1 column">1</div>
    <div class="span1 column">1</div>
    <div class="span1 column">1</div>
    <div class="span1 column">1</div>
  </div><!-- /row -->
  <div class="row show-grid" title="8 column layout">
    <div class="span2 columns">2</div>
    <div class="span2 columns">2</div>
    <div class="span2 columns">2</div>
    <div class="span2 columns">2</div>
    <div class="span2 columns">2</div>
    <div class="span2 columns">2</div>
    <div class="span2 columns">2</div>
    <div class="span2 columns">2</div>
  </div><!-- /row -->
  <div class="row show-grid" title="Example uncommon layout">
    <div class="span3 columns">3</div>
    <div class="span3 columns">3</div>
    <div class="span3 columns">3</div>
    <div class="span3 columns">3</div>
    <div class="span3 columns">3</div>
    <div class="span1 column">1</div>
  </div><!-- /row -->
  <div class="row show-grid" title="Four column layout">
    <div class="span4 columns">4</div>
    <div class="span4 columns">4</div>
    <div class="span4 columns">4</div>
    <div class="span4 columns">4</div>
  </div><!-- /row -->
  <div class="row show-grid" title="Default three column layout">
    <div class="span-one-third column">1/3</div>
    <div class="span-one-third column">1/3</div>
    <div class="span-one-third column">1/3</div>
  </div><!-- /row -->
  <div class="row show-grid" title="One-third and two-thirds layout">
    <div class="span-one-third column">1/3</div>
    <div class="span-two-thirds column">2/3</div>
  </div><!-- /row -->
  <div class="row show-grid" title="Irregular three column layout">
    <div class="span4 columns">4</div>
    <div class="span6 columns">6</div>
    <div class="span6 columns">6</div>
  </div><!-- /row -->
  <div class="row show-grid" title="Half and half">
    <div class="span8 columns">8</div>
    <div class="span8 columns">8</div>
  </div><!-- /row -->
  <div class="row show-grid" title="Example uncommon two-column layout">
    <div class="span5 columns">5</div>
    <div class="span11 columns">11</div>
  </div><!-- /row -->
  <div class="row show-grid" title="Unnecessary single column layout">
    <div class="span16 columns">16</div>
  </div><!-- /row -->
  <h4>Offsetting columns</h4>
  <div class="row show-grid">
    <div class="span4 columns">4</div>
    <div class="span8 columns offset4">8 offset 4</div>
  </div><!-- /row -->
  <div class="row show-grid">
    <div class="span-one-third columns offset-two-thirds">1/3 offset 2/3s</div>
  </div><!-- /row -->
  <div class="row show-grid">
    <div class="span4 columns offset4">4 offset 4</div>
    <div class="span4 columns offset4">4 offset 4</div>
  </div><!-- /row -->
  <div class="row show-grid">
    <div class="span5 columns offset3">5 offset 3</div>
    <div class="span5 columns offset3">5 offset 3</div>
  </div><!-- /row -->
  <div class="row show-grid">
    <div class="span10 columns offset6">10 offset 6</div>
  </div><!-- /row -->
</section>



<!-- Layouts (Default and fluid)
================================================== -->
<section id="layouts">
  <div class="page-header">
    <h1>Layouts <small>Basic templates to create webpages</small></h1>
  </div>

  <div class="row">
    <div class="span8 columns">
      <h2>Fixed layout</h2>
      <p>The default and simple 940px-wide, centered layout for just about any website or page provided by a single <code>&lt;div.container&gt;</code>.</p>
      <div class="mini-layout">
        <div class="mini-layout-body"></div>
      </div>
<pre class="prettyprint linenums">
&lt;body&gt;
  &lt;div class="container"&gt;
    ...
  &lt;/div&gt;
&lt;/body&gt;
</pre>
    </div><!-- /col -->
    <div class="span8 columns">
      <h2>Fluid layout</h2>
      <p>An alternative, flexible fluid page structure with min- and max-widths and a left-hand sidebar. Great for apps and docs.</p>
      <div class="mini-layout fluid">
        <div class="mini-layout-sidebar"></div>
        <div class="mini-layout-body"></div>
      </div>
<pre class="prettyprint linenums">
&lt;body&gt;
  &lt;div class="container-fluid"&gt;
    &lt;div class="sidebar"&gt;
      ...
    &lt;/div&gt;
    &lt;div class="content"&gt;
      ...
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/body&gt;
</pre>
    </div><!-- /col -->
  </div><!-- /row -->
</section>



<!-- Typography
================================================== -->
<section id="typography">
  <div class="page-header">
    <h1>Typography <small>Headings, paragraphs, lists, and other inline type elements</small></h1>
  </div>

  <!-- Headings & Paragraph Copy -->
  <div class="row">
    <div class="span4 columns">
      <h2>Headings &amp; copy</h2>
      <p>A standard typographic hierarchy for structuring your webpages.</p>
      <p>The entire typographic grid is based on two Less variables in our preboot.less file: <code>@basefont</code> and <code>@baseline</code>. The first is the base font-size used throughout and the second is the base line-height.</p>
      <p>We use those variables, and some math, to create the margins, paddings, and line-heights of all our type and more.</p>
    </div>
    <div class="span4 columns">
      <h1>h1. Heading 1</h1>
      <h2>h2. Heading 2</h2>
      <h3>h3. Heading 3</h3>
      <h4>h4. Heading 4</h4>
      <h5>h5. Heading 5</h5>
      <h6>h6. Heading 6</h6>
    </div>
    <div class="span8 columns">
      <h3>Example paragraph</h3>
      <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      <h1>Example heading <small>Has sub-heading&hellip;</small></h1>
    </div>
  </div>

  <!-- Misc Elements -->
  <div class="row">
    <div class="span4 columns">
      <h2>Misc. elements</h2>
      <p>Using emphasis, addresses, &amp; abbreviations</p>
      <p>
        <code>&lt;strong&gt;</code>
        <code>&lt;em&gt;</code>
        <code>&lt;address&gt;</code>
        <code>&lt;abbr&gt;</code>
      </p>
    </div>
    <div class="span12 columns">
      <h4>When to use</h4>
      <p>Emphasis tags (<code>&lt;strong&gt;</code> and <code>&lt;em&gt;</code>) should be used to indicate additional importance or emphasis of a word or phrase relative to its surrounding copy. Use <code>&lt;strong&gt;</code> for importance and <code>&lt;em&gt;</code> for <em>stress</em> emphasis.</p>
      <h3>Emphasis in a paragraph</h3>
      <p><a href="#">Fusce dapibus</a>, <strong>tellus ac cursus commodo</strong>, <em>tortor mauris condimentum nibh</em>, ut fermentum massa justo sit amet risus. Maecenas faucibus mollis interdum. Nulla vitae elit libero, a pharetra augue.</p>
      <p><strong>Note:</strong> It's still okay to use <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code> tags in HTML5 and they don't have to be styled bold and italic, respectively (although if there is a more semantic element, use it). <code>&lt;b&gt;</code> is meant to highlight words or phrases without conveying additional importance, while <code>&lt;i&gt;</code> is mostly for voice, technical terms, etc.</p>
      <h3>Addresses</h3>
      <p>The <code>&lt;address&gt;</code> element is used for contact information for its nearest ancestor, or the entire body of work. Here’s how it looks:</p>
      <address>
        <strong>Twitter, Inc.</strong><br />
        795 Folsom Ave, Suite 600<br />
        San Francisco, CA 94107<br />
        <abbr title="Phone">P:</abbr> (123) 456-7890
      </address>
      <p><strong>Note:</strong> Each line in an <code>&lt;address&gt;</code> must end with a line-break (<code>&lt;br /&gt;</code>) or be wrapped in a block-level tag (e.g., <code>&lt;p&gt;</code>) to properly structure the content.</p>
      <h3>Abbreviations</h3>
      <p>For abbreviations and acronyms, use the <code>&lt;abbr&gt;</code> tag (<code>&lt;acronym&gt;</code> is deprecated in <abbr title="HyperText Markup Langugage 5">HTML5</abbr>). Put the shorthand form within the tag and set a title for the complete name.</p>
    </div>
  </div><!-- /row -->

  <!-- Blockquotes -->
  <div class="row">
    <div class="span4 columns">
      <h2>Blockquotes</h2>
      <p>
        <code>&lt;blockquote&gt;</code>
        <code>&lt;p&gt;</code>
        <code>&lt;small&gt;</code>
      </p>
    </div>
    <div class="span12 columns">
      <h4>How to quote</h4>
      <p>To include a blockquote, wrap <code>&lt;blockquote&gt;</code> around <code>&lt;p&gt;</code> and <code>&lt;small&gt;</code> tags. Use the <code>&lt;small&gt;</code> element to cite your source and you'll get an em dash <code>&amp;mdash;</code> before it.</p>
      <blockquote>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
        <small>Dr. Julius Hibbert</small>
      </blockquote>
    </div>
  </div><!-- /row -->

  <h2>Lists</h2>
  <div class="row">
    <div class="span4 columns">
      <h4>Unordered <code>&lt;ul&gt;</code></h4>
      <ul>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Consectetur adipiscing elit</li>
        <li>Integer molestie lorem at massa</li>
        <li>Facilisis in pretium nisl aliquet</li>
        <li>Nulla volutpat aliquam velit
          <ul>
            <li>Phasellus iaculis neque</li>
            <li>Purus sodales ultricies</li>
            <li>Vestibulum laoreet porttitor sem</li>
            <li>Ac tristique libero volutpat at</li>
          </ul>
        </li>
        <li>Faucibus porta lacus fringilla vel</li>
        <li>Aenean sit amet erat nunc</li>
        <li>Eget porttitor lorem</li>
      </ul>
    </div>
    <div class="span4 columns">
      <h4>Unstyled <code>&lt;ul.unstyled&gt;</code></h4>
      <ul class="unstyled">
        <li>Lorem ipsum dolor sit amet</li>
        <li>Consectetur adipiscing elit</li>
        <li>Integer molestie lorem at massa</li>
        <li>Facilisis in pretium nisl aliquet</li>
        <li>Nulla volutpat aliquam velit
          <ul>
            <li>Phasellus iaculis neque</li>
            <li>Purus sodales ultricies</li>
            <li>Vestibulum laoreet porttitor sem</li>
            <li>Ac tristique libero volutpat at</li>
          </ul>
        </li>
        <li>Faucibus porta lacus fringilla vel</li>
        <li>Aenean sit amet erat nunc</li>
        <li>Eget porttitor lorem</li>
      </ul>
    </div>
    <div class="span4 columns">
      <h4>Ordered <code>&lt;ol&gt;</code></h4>
      <ol>
        <li>Lorem ipsum dolor sit amet</li>
        <li>Consectetur adipiscing elit</li>
        <li>Integer molestie lorem at massa</li>
        <li>Facilisis in pretium nisl aliquet</li>
        <li>Nulla volutpat aliquam velit</li>
        <li>Faucibus porta lacus fringilla vel</li>
        <li>Aenean sit amet erat nunc</li>
        <li>Eget porttitor lorem</li>
      </ol>
    </div>
    <div class="span4 columns">
      <h4>Description <code>dl</code></h4>
      <dl>
        <dt>Description lists</dt>
        <dd>A description list is perfect for defining terms.</dd>
        <dt>Euismod</dt>
        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
        <dt>Malesuada porta</dt>
        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
      </dl>
    </div>
  </div><!-- /row -->
</section>



<!-- Tables
================================================== -->
<section id="tables">
  <div class="page-header">
    <h1>Tables <small>For, you guessed it, tabular data</small></h1>
  </div>
  <!-- Table structure -->
  <div class="row">
    <div class="span4 columns">
      <h2>Building tables</h2>
      <p>
        <code>&lt;table&gt;</code>
        <code>&lt;thead&gt;</code>
        <code>&lt;tbody&gt;</code>
        <code>&lt;tr&gt;</code>
        <code>&lt;th&gt;</code>
        <code>&lt;td&gt;</code>
        <code>&lt;colspan&gt;</code>
        <code>&lt;caption&gt;</code>
      </p>
      <p>Tables are great&mdash;for a lot of things. Great tables, however, need a bit of markup love to be useful, scalable, and readable (at the code level). Here are a few tips to help.</p>
      <p>Always wrap your column headers in a <code>&lt;thead&gt;</code> such that hierarchy is <code>&lt;thead&gt;</code> > <code>&lt;tr&gt;</code> > <code>&lt;th&gt;</code>.</p>
      <p>Similar to the column headers, all your table’s body content should be wrapped in a <code>&lt;tbody&gt;</code> so your hierarchy is <code>&lt;tbody&gt;</code> > <code>&lt;tr&gt;</code> > <code>&lt;td&gt;</code>.</p>
    </div>
    <div class="span12 columns">
      <h3>Example: Default table styles</h3>
      <p>All tables will be automatically styled with only the essential borders to ensure readability and maintain structure. No need to add extra classes or attributes.</p>
      <table>
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Language</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Some</td>
            <td>One</td>
            <td>English</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Joe</td>
            <td>Sixpack</td>
            <td>English</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Stu</td>
            <td>Dent</td>
            <td>Code</td>
          </tr>
        </tbody>
      </table>
<pre class="prettyprint linenums">
&lt;table&gt;
  ...
&lt;/table&gt;</pre>
      <h3>Example: Zebra-striped</h3>
      <p>Get a little fancy with your tables by adding zebra-striping&mdash;just add the <code>.zebra-striped</code> class.</p>
      <table class="zebra-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Language</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Some</td>
            <td>One</td>
            <td>English</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Joe</td>
            <td>Sixpack</td>
            <td>English</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Stu</td>
            <td>Dent</td>
            <td>Code</td>
          </tr>
        </tbody>
      </table>
      <p><strong>Note:</strong> Zebra-striping is a progressive enhancement not available for older browsers like IE8 and below.</p>
<pre class="prettyprint linenums">
&lt;table class="zebra-striped"&gt;
...
&lt;/table&gt;</pre>
      <h3>Example: Zebra-striped w/ TableSorter.js</h3>
      <p>Taking the previous example, we improve the usefulness of our tables by providing sorting functionality via <a href="http://jquery.com">jQuery</a> and the <a href="http://tablesorter.com/docs/">Tablesorter</a> plugin. <strong>Click any column’s header to change the sort.</strong></p>
      <table class="zebra-striped" id="sortTableExample">
        <thead>
          <tr>
            <th>#</th>
            <th class="yellow">First Name</th>
            <th class="blue">Last Name</th>
            <th class="green">Language</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Your</td>
            <td>One</td>
            <td>English</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Joe</td>
            <td>Sixpack</td>
            <td>English</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Stu</td>
            <td>Dent</td>
            <td>Code</td>
          </tr>
        </tbody>
      </table>
<pre class="prettyprint linenums">
&lt;script src="js/jquery/jquery.tablesorter.min.js"&gt;&lt;/script&gt;
&lt;script &gt;
  $(function() {
    $("table#sortTableExample").tablesorter({ sortList: [[1,0]] });
  });
&lt;/script&gt;
&lt;table class="zebra-striped"&gt;
  ...
&lt;/table&gt;</pre>
    </div>
  </div><!-- /row -->
</section>



<!-- Forms
================================================== -->
<section id="forms">
  <div class="page-header">
    <h1>Forms</h1>
  </div>
  <div class="row">
    <div class="span4 columns">
      <h2>Default styles</h2>
      <p>All forms are given default styles to present them in a readable and scalable way. Styles are provided for text inputs, select lists, textareas, radio buttons and checkboxes, and buttons.</p>
    </div>
    <div class="span12 columns">
      <form>
        <fieldset>
          <legend>Example form legend</legend>
          <div class="clearfix">
            <label for="xlInput">X-Large Input</label>
            <div class="input">
              <input class="xlarge" id="xlInput" name="xlInput" size="30" type="text" />
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label for="normalSelect">Select</label>
            <div class="input">
              <select name="normalSelect" id="normalSelect">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label for="mediumSelect">Select</label>
            <div class="input">
              <select class="medium" name="mediumSelect" id="mediumSelect">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label>Uneditable Input</label>
            <div class="input">
              <span class="uneditable-input">Some Value Here</span>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label for="disabledInput">Disabled Input</label>
            <div class="input">
              <input class="xlarge disabled" id="disabledInput" name="disabledInput" size="30" type="text" placeholder="Disabled input here… carry on." disabled />
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix error">
            <label for="xlInput2">X-Large Input</label>
            <div class="input">
              <input class="xlarge error" id="xlInput2" name="xlInput2" size="30" type="text" />
              <span class="help-inline">Small snippet of help text</span>
            </div>
          </div><!-- /clearfix -->
        </fieldset>
        <fieldset>
          <legend>Example form legend</legend>
          <div class="clearfix">
            <label for="prependedInput">Prepended Text</label>
            <div class="input">
              <div class="input-prepend">
                <span class="add-on">@</span>
                <input class="medium" id="prependedInput" name="prependedInput" size="16" type="text" />
              </div>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label for="prependedInput2">Prepended Checkbox</label>
            <div class="input">
              <div class="input-prepend">
                <label class="add-on"><input type="checkbox" name="" id="" value="" /></label>
                <input class="mini" id="prependedInput2" name="prependedInput2" size="16" type="text" />
              </div>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label for="appendedInput">Appended Checkbox</label>
            <div class="input">
              <div class="input-append">
                <input class="mini" id="appendedInput" name="appendedInput" size="16" type="text" />
                <label class="add-on active"><input type="checkbox" name="" id="" value="" checked="checked" /></label>
              </div>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label for="fileInput">File Input</label>
            <div class="input">
              <input class="input-file" id="fileInput" name="fileInput" type="file" />
            </div>
          </div><!-- /clearfix -->
        </fieldset>
        <fieldset>
          <legend>Example form legend</legend>
          <div class="clearfix">
            <label id="optionsCheckboxes">List of Options</label>
            <div class="input">
              <ul class="inputs-list">
                <li>
                  <label>
                    <input type="checkbox" name="optionsCheckboxes" value="option1" />
                    <span>Option one is this and that&mdash;be sure to include why it’s great</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="checkbox" name="optionsCheckboxes" value="option2" />
                    <span>Option two can also be checked and included in form results</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="checkbox" name="optionsCheckboxes" value="option2" />
                    <span>Option three can&mdash;yes, you guessed it&mdash;also be checked and included in form results</span>
                  </label>
                </li>
                <li>
                  <label class="disabled">
                    <input type="checkbox" name="optionsCheckboxes" value="option2" disabled />
                    <span>Option four cannot be checked as it is disabled.</span>
                  </label>
                </li>
              </ul>
              <span class="help-block">
                <strong>Note:</strong> Labels surround all the options for much larger click areas and a more usable form.
              </span>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label>Date Range</label>
            <div class="input">
              <div class="inline-inputs">
                <input class="small" type="text" value="May 1, 2011" />
                <input class="mini" type="text" value="12:00am" />
                to
                <input class="small" type="text" value="May 8, 2011" />
                <input class="mini" type="text" value="11:59pm" />
                <span class="help-inline">All times are shown as Pacific Standard Time (GMT -08:00).</span>
              </div>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label for="textarea">Textarea</label>
            <div class="input">
              <textarea class="xxlarge" id="textarea" name="textarea"></textarea>
              <span class="help-block">
                Block of help text to describe the field above if need be.
              </span>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label id="optionsRadio">List of Options</label>
            <div class="input">
              <ul class="inputs-list">
                <li>
                  <label>
                    <input type="radio" checked name="optionsRadios" value="option1" />
                    <span>Option one is this and that&mdash;be sure to include why it’s great</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="radio" name="optionsRadios" value="option2" />
                    <span>Option two can is something else and selecting it will deselect options 1</span>
                  </label>
                </li>
              </ul>
            </div>
          </div><!-- /clearfix -->
          <div class="actions">
            <input type="submit" class="btn primary" value="Save Changes">&nbsp;<button type="reset" class="btn">Cancel</button>
          </div>
        </fieldset>
      </form>
    </div>
  </div><!-- /row -->

  <br />

  <div class="row">
    <div class="span4 columns">
      <h2>Stacked forms</h2>
      <p>Add <code>.form-stacked</code> to your form’s HTML and you’ll have labels on top of their fields instead of to their left. This works great if your forms are short or you have two columns of inputs for heavier forms.</p>
    </div>
    <div class="span12 columns">
      <form action="" class="form-stacked">
        <fieldset>
          <legend>Example form legend</legend>
          <div class="clearfix">
            <label for="xlInput3">X-Large Input</label>
            <div class="input">
              <input class="xlarge" id="xlInput3" name="xlInput3" size="30" type="text" />
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label for="stackedSelect">Select</label>
            <div class="input">
              <select name="stackedSelect" id="stackedSelect">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div><!-- /clearfix -->
        </fieldset>
        <fieldset>
          <legend>Example form legend</legend>
          <div class="clearfix error">
            <label for="xlInput4">X-Large Input</label>
            <div class="input">
              <input class="xlarge error" id="xlInput4" name="xlInput4" size="30" type="text" />
              <span class="help-inline">Small snippet of help text</span>
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label id="optionsCheckboxes">List of Options</label>
            <div class="input">
              <ul class="inputs-list">
                <li>
                  <label>
                    <input type="checkbox" name="optionsCheckboxes" value="option1" />
                    <span>Option one is this and that&mdash;be sure to include why it’s great</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="checkbox" name="optionsCheckboxes" value="option2" />
                    <span>Option two can also be checked and included in form results</span>
                  </label>
                </li>
              </ul>
              <span class="help-block">
                <strong>Note:</strong> Labels surround all the options for much larger click areas and a more usable form.
              </span>
            </div>
          </div><!-- /clearfix -->
        </fieldset>
        <div class="actions">
          <button type="submit" class="btn primary">Save Changes</button>&nbsp;<button type="reset" class="btn">Cancel</button>
        </div>
      </form>
    </div>
  </div><!-- /row -->

  <div class="row">
    <div class="span4 columns">
      <h2>Buttons</h2>
      <p>As a convention, buttons are used for actions while links are used for objects. For instance, "Download" could be a button and "recent activity" could be a link.</p>
      <p>All buttons default to a light gray style, but a number of functional classes can be applied for different color styles. These classes include a blue <code>.primary</code> class, a light-blue <code>.info</code> class, a green <code>.success</code> class, and a red <code>.danger</code> class. Plus, rolling your own styles is easy peasy.</p>
    </div>
    <div class="span12 columns">
      <h3>Example buttons</h3>
      <p>Button styles can be applied to anything with the <code>.btn</code> applied. Typically you’ll want to apply these to only <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, and select <code>&lt;input&gt;</code> elements. Here’s how it looks:</p>
      <div class="well" style="padding: 14px 19px;">
        <button class="btn primary">Primary</button>&nbsp;<button class="btn">Default</button>&nbsp;<button class="btn info">Info</button>&nbsp;<button class="btn success">Success</button>&nbsp;<button class="btn danger">Danger</button>
      </div>
      <h3>Alternate sizes</h3>
      <p>Fancy larger or smaller buttons? Have at it!</p>
      <div class="well">
        <a href="#" class="btn large primary">Primary action</a>
        <a href="#" class="btn large">Action</a>
      </div>
      <div class="well" style="padding: 16px 19px;">
        <a href="#" class="btn small primary">Primary action</a>
        <a href="#" class="btn small">Action</a>
      </div>
      <h3>Disabled state</h3>
      <p>For buttons that are not active or are disabled by the app for one reason or another, use the disabled state. That’s <code>.disabled</code> for links and <code>:disabled</code> for <code>&lt;button&gt;</code> elements.</p>
      <h4>Links</h4>
      <div class="well">
        <a href="#" class="btn large primary disabled">Primary action</a>
        <a href="#" class="btn large disabled">Action</a>
      </div>
      <h4>Buttons</h4>
      <div class="well">
        <button class="btn large primary disabled" disabled="disabled">Primary action</button>&nbsp;<button class="btn large" disabled>Action</button>
      </div>
    </div>
  </div><!-- /row -->
</section>



<!-- Navigation
================================================== -->
<section id="navigation">
  <div class="page-header">
    <h1>Navigation</h1>
  </div>
  <h2>Fixed topbar</h2>
  <div class="topbar-wrapper" style="z-index: 5;">
    <div class="topbar">
      <div class="topbar-inner">
        <div class="container">
          <h3><a href="#">Project Name</a></h3>
          <ul class="nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle">Dropdown</a>
              <ul class="dropdown-menu">
                <li><a href="#">Secondary link</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Another link</a></li>
              </ul>
            </li>
          </ul>
          <form action="">
            <input type="text" placeholder="Search" />
          </form>
          <ul class="nav secondary-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle">Dropdown</a>
              <ul class="dropdown-menu">
                <li><a href="#">Secondary link</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Another link</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div><!-- /topbar-inner -->
    </div><!-- /topbar -->
  </div><!-- /topbar-wrapper -->

  <div class="row">
    <div class="span5 columns">
      <h4>What is it</h4>
      <p>Our topbar is a fixed bar that houses a website’s logo or name, primary navigation, and search form.</p>
    </div>
    <div class="span5 columns">
      <h4>Customizable</h4>
      <p>All elements within, and the entire topbar as well, are optional. You can choose to include a logo/name, nav, search, and a secondary nav&mdash;or any combination of that.</p>
    </div>
    <div class="span6 columns">
      <h4>Dropdowns included</h4>
      <p>As part of the main navigation, we’ve included the ability for you to add dropdowns to your nav. Check out the secondary nav above (right aligned) to see how it’s done.</p>
    </div>
  </div>
  <p><strong>Note:</strong> When using the topbar on any page, be sure to account for the overlap it causes by adding <code>padding-top: 40px;</code> to your <code>body</code>.</p>

  <br />

  <div class="row">
    <div class="span4 columns">
      <h2>Tabs and pills</h2>
      <p>Create simple secondary navigation with a <code>&lt;ul&gt;</code>. Swap between tabs or pills by adding the appropriate class.</p>
      <p>Great for sub-sections of content like our account settings pages and user timelines for toggling between pages of like content. Available in tabbed or pill styles.</p>
    </div>
    <div class="span12 columns">
      <ul class="tabs">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Messages</a></li>
        <li><a href="#">Settings</a></li>
        <li><a href="#">Contact</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle">Dropdown</a>
          <ul class="dropdown-menu">
            <li><a href="#">Secondary link</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Another link</a></li>
          </ul>
        </li>
      </ul>
<pre class="prettyprint linenums">
&lt;ul class="tabs"&gt;
  &lt;li class="active"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Profile&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Messages&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Settings&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Contact&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>
      <ul class="pills">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Messages</a></li>
        <li><a href="#">Settings</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
<pre class="prettyprint linenums">
&lt;ul class="pills"&gt;
  &lt;li class="active"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Profile&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Messages&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Settings&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Contact&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>
    </div>
  </div><!-- /row -->

  <!-- Pagination -->
  <div class="row">
    <div class="span4 columns">
      <h2>Pagination</h2>
      <p>Ultra simplistic and minimally styled pagination inspired by Rdio. The large block is hard to miss, easily scalable, and provides large click areas.</p>
    </div>
    <div class="span12 columns">
      <div class="pagination">
        <ul>
          <li class="prev disabled"><a href="#">&larr; Previous</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li class="next"><a href="#">Next &rarr;</a></li>
        </ul>
      </div>
      <div class="pagination">
        <ul>
          <li class="prev"><a href="#">&larr; Previous</a></li>
          <li class="active"><a href="#">10</a></li>
          <li><a href="#">11</a></li>
          <li><a href="#">12</a></li>
          <li class="disabled"><a href="#">…</a></li>
          <li><a href="#">19</a></li>
          <li><a href="#">20</a></li>
          <li><a href="#">21</a></li>
          <li class="next"><a href="#">Next &rarr;</a></li>
        </ul>
      </div>
      <div class="pagination">
        <ul>
          <li class="prev"><a href="#">&larr; Previous</a></li>
          <li><a href="#">10</a></li>
          <li><a href="#">11</a></li>
          <li><a href="#">12</a></li>
          <li><a href="#">13</a></li>
          <li><a href="#">14</a></li>
          <li class="active"><a href="#">15</a></li>
          <li><a href="#">16</a></li>
          <li><a href="#">17</a></li>
          <li><a href="#">18</a></li>
          <li><a href="#">19</a></li>
          <li><a href="#">20</a></li>
          <li class="next"><a href="#">Next &rarr;</a></li>
        </ul>
      </div>
<pre class="prettyprint linenums">
&lt;div class="pagination"&gt;
  &lt;ul&gt;
    &lt;li class="prev disabled"&gt;&lt;a href="#"&gt;&amp;larr; Previous&lt;/a&gt;&lt;/li>
    &lt;li class="active"&gt;&lt;a href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;4&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;5&lt;/a&gt;&lt;/li&gt;
    &lt;li class="next"&gt;&lt;a href="#"&gt;Next &amp;rarr;&lt;/a&gt;&lt;/li>
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
    </div>
  </div><!-- /row -->

</section>



<!-- Alerts & Messages
================================================== -->
<section id="alerts">
  <div class="page-header">
    <h1>Alerts &amp; Errors <small>Styles for success, warning, and error messages or alerts</small></h1>
  </div>
  <!-- Basic alert messages -->
  <div class="row">
    <div class="span4 columns">
      <h2>Basic alerts</h2>
      <p><code>div.alert-message</code></p>
      <p>One-line messages for highlighting the failure, possible failure, or success of an action. Particularly useful for forms.</p>
    </div>
    <div class="span12 columns">
      <div class="alert-message warning">
        <a class="close" href="#">&times;</a>
        <p><strong>Holy guacamole!</strong> Best check yo self, you’re not looking too good.</p>
      </div>
      <div class="alert-message error">
        <a class="close" href="#">&times;</a>
        <p><strong>Oh snap!</strong> Change this and that and try again.</p>
      </div>
      <div class="alert-message success">
        <a class="close" href="#">&times;</a>
        <p><strong>Well done!</strong> You successfully read this alert message.</p>
      </div>
      <div class="alert-message info">
        <a class="close" href="#">&times;</a>
        <p><strong>Heads up!</strong> This is an alert that needs your attention, but it’s not a huge priority just yet.</p>
      </div>
    </div>
  </div><!-- /row -->
  <!-- Block messages -->
  <div class="row">
    <div class="span4 columns">
      <h2>Block messages</h2>
      <p><code>div.alert-message.block-message</code></p>
      <p>For messages that require a bit of explanation, we have paragraph style alerts. These are perfect for bubbling up longer error messages, warning a user of a pending action, or just presenting information for more emphasis on the page.</p>
    </div>
    <div class="span12 columns">
      <div class="alert-message block-message warning">
        <a class="close" href="#">&times;</a>
        <p><strong>Holy guacamole! This is a warning!</strong> Best check yo self, you’re not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
        <div class="alert-actions">
          <a class="btn small" href="#">Take this action</a> <a class="btn small" href="#">Or do this</a>
        </div>
      </div>
      <div class="alert-message block-message error">
        <a class="close" href="#">&times;</a>
        <p><strong>Oh snap! You got an error!</strong> Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
        <div class="alert-actions">
          <a class="btn small" href="#">Take this action</a> <a class="btn small" href="#">Or do this</a>
        </div>
      </div>
      <div class="alert-message block-message success">
        <a class="close" href="#">&times;</a>
        <p><strong>Well done!</strong> You successfully read this alert message. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum.</p>
        <div class="alert-actions">
          <a class="btn small" href="#">Take this action</a> <a class="btn small" href="#">Or do this</a>
        </div>
      </div>
      <div class="alert-message block-message info">
        <a class="close" href="#">&times;</a>
        <p><strong>Heads up!</strong> This is an alert that needs your attention, but it’s not a huge priority just yet.</p>
        <div class="alert-actions">
          <a class="btn small" href="#">Take this action</a> <a class="btn small" href="#">Or do this</a>
        </div>
      </div>
    </div>
  </div><!-- /row -->
</section>


<!-- Popovers
================================================== -->
<section id="popovers">
  <div class="page-header">
    <h1>Popovers <small>Components for displaying content in modals, tooltips, and popovers</small></h1>
  </div>
  <div class="row">
    <div class="span4 columns">
      <h2>Modals</h2>
      <p>Modals&mdash;dialogs or lightboxes&mdash;are great for contextual actions in situations where it’s important that the background context be maintained.</p>
    </div>
    <div class="span12 columns">
      <div class="well" style="background-color: #888; border: none; padding: 40px;">
        <!-- Modal -->
        <div class="modal" style="position: relative; top: auto; left: auto; margin: 0 auto; z-index: 1">
          <div class="modal-header">
            <h3>Modal Heading</h3>
            <a href="#" class="close">&times;</a>
          </div>
          <div class="modal-body">
            <p>One fine body…</p>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn primary">Primary</a>
            <a href="#" class="btn secondary">Secondary</a>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /row -->

  <!-- Tooltips -->
  <div class="row">
    <div class="span4 columns">
      <h2>Tool Tips</h2>
      <p>Twipsies are super useful for aiding a confused user and pointing them in the right direction.</p>
    </div>
    <div class="span12 columns">
      <div class="twipsies well">
        <div style="position: relative">
          <p class="muted" style="margin-bottom: 0">
Lorem ipsum dolar sit amet illo error <a href="#" title="below">ipsum</a> veritatis aut iste perspiciatis iste voluptas natus illo quasi odit aut natus consequuntur consequuntur, aut natus illo voluptatem odit perspiciatis laudantium rem doloremque totam voluptas. <a href="#" title="right">Voluptasdicta</a> eaque beatae aperiam ut enim voluptatem explicabo explicabo, voluptas quia odit fugit accusantium totam totam architecto explicabo sit quasi fugit fugit, totam doloremque unde sunt <a href="#" title="left">sed</a> dicta quae accusantium fugit voluptas nemo voluptas voluptatem <a href="#" title="above">rem</a> quae aut veritatis quasi quae.
          </p>
          <div class="twipsy below">
            <div class="twipsy-arrow"></div>
            <div class="twipsy-inner">below!</div>
          </div>
          <div class="twipsy right">
            <div class="twipsy-arrow"></div>
            <div class="twipsy-inner">right!</div>
          </div>
          <div class="twipsy left">
            <div class="twipsy-arrow"></div>
            <div class="twipsy-inner">left!</div>
          </div>
          <div class="twipsy above">
            <div class="twipsy-arrow"></div>
            <div class="twipsy-inner">above!</div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /row -->

  <!-- Popovers -->
  <div class="row">
    <div class="span4 columns">
      <h2>Popovers</h2>
      <p>Use popovers to provide subtextual information to a page without affecting layout.</p>
    </div>
    <div class="span12 columns">
      <div class="well popover-well">
         <div class="popover-wrapper">
          <div class="popover left">
            <div class="arrow"></div>
            <div class="inner">
              <h3 class="title">Popover Title</h3>
              <div class="content">
                <p>Etiam porta sem malesuada magna mollis euismod. Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /row -->
</section>



<!-- Using Bootstrap w/ Less
================================================== -->
<section id="less">
<div class="page-header">
  <h1>Using Bootstrap with Less <small>Supercharge your CSS with variables, mixins, and functions</small></h1>
</div>
<div class="row">
  <div class="span4 columns">
    <p>Bootstrap was built with <a href="http://markdotto.com/bootstrap/">Preboot</a>, an open-source pack of mixins and variables to be used in conjunction with <a href="http://lesscss.org" target="_blank">Less</a>, a CSS preprocessor for faster and easier web development.</p>
    <p>Check out how we used Preboot in Bootstrap and how you can make use of it should you choose to run Less on your next project.</p>
  </div>
  <div class="span12 columns">
    <h2>How to use it</h2>
    <p>Use this option to make full use of Bootstrap’s Less variables, mixins, and nesting in CSS via javascript in your browser.</p>
<pre class="prettyprint linenums">
&lt;link rel="stylesheet/less" href="less/bootstrap.less" media="all" /&gt;
&lt;script src="js/less-1.1.3.min.js"&gt;&lt;/script&gt;</pre>
<p>Not feeling the .js solution? <a href="http://incident57.com/less" target="_blank">Try the Less Mac app</a> or <a href="http://lesscss.org/#-client-side-usage" target="_blank">use Node.js</a> to compile when you deploy your code.</p>

    <h2>What’s included</h2>
    <p>Here are some of the highlights of what’s included in Twitter Bootstrap as part of Bootstrap. Head over to the Bootstrap website or Github project page to download and learn more.</p>
    <h3>Variables</h3>
    <p>Variables in Less are perfect for maintaining and updating your CSS headache free. When you want to change a color value or a frequently used value, update it in one spot and you’re set.</p>
<pre class="prettyprint linenums">
// Links
@linkColor:         #8b59c2;
@linkColorHover:    darken(@linkColor, 10);

// Grays
@black:             #000;
@grayDark:          lighten(@black, 25%);
@gray:              lighten(@black, 50%);
@grayLight:         lighten(@black, 70%);
@grayLighter:       lighten(@black, 90%);
@white:             #fff;

// Accent Colors
@blue:              #08b5fb;
@green:             #46a546;
@red:               #9d261d;
@yellow:            #ffc40d;
@orange:            #f89406;
@pink:              #c3325f;
@purple:            #7a43b6;

// Baseline grid
@basefont:          13px;
@baseline:          18px;
</pre>

<h3>Commenting</h3>
<p>Less also provides another style of commenting in addition to CSS’s normal <code>/* ... */</code> syntax.</p>
<pre class="prettyprint linenums">
// This is a comment
/* This is also a comment */
</pre>

<h3>Mixins up the wazoo</h3>
<p>Mixins are basically includes or partials for CSS, allowing you to combine a block of code into one. They’re great for vendor prefixed properties like <code>box-shadow</code>, cross-browser gradients, font stacks, and more. Below is a sample of the mixins that are included with Bootstrap.</p>
<h4>Font stacks</h4>
<pre class="prettyprint linenums">
#font {
  .shorthand(@weight: normal, @size: 14px, @lineHeight: 20px) {
    font-size: @size;
    font-weight: @weight;
    line-height: @lineHeight;
  }
  .sans-serif(@weight: normal, @size: 14px, @lineHeight: 20px) {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: @size;
    font-weight: @weight;
    line-height: @lineHeight;
  }
  .serif(@weight: normal, @size: 14px, @lineHeight: 20px) {
    font-family: "Georgia", Times New Roman, Times, sans-serif;
    font-size: @size;
    font-weight: @weight;
    line-height: @lineHeight;
  }
  .monospace(@weight: normal, @size: 12px, @lineHeight: 20px) {
    font-family: "Monaco", Courier New, monospace;
    font-size: @size;
    font-weight: @weight;
    line-height: @lineHeight;
  }
}
</pre>
<h4>Gradients</h4>
<pre class="prettyprint linenums">
#gradient {
  .horizontal (@startColor: #555, @endColor: #333) {
    background-color: @endColor;
    background-repeat: repeat-x;
    background-image: -khtml-gradient(linear, left top, right top, from(@startColor), to(@endColor)); // Konqueror
    background-image: -moz-linear-gradient(left, @startColor, @endColor); // FF 3.6+
    background-image: -ms-linear-gradient(left, @startColor, @endColor); // IE10
    background-image: -webkit-gradient(linear, left top, right top, color-stop(0%, @startColor), color-stop(100%, @endColor)); // Safari 4+, Chrome 2+
    background-image: -webkit-linear-gradient(left, @startColor, @endColor); // Safari 5.1+, Chrome 10+
    background-image: -o-linear-gradient(left, @startColor, @endColor); // Opera 11.10
    background-image: linear-gradient(left, @startColor, @endColor); // Le standard
  }
  .vertical (@startColor: #555, @endColor: #333) {
    background-color: @endColor;
    background-repeat: repeat-x;
    background-image: -khtml-gradient(linear, left top, left bottom, from(@startColor), to(@endColor)); // Konqueror
    background-image: -moz-linear-gradient(@startColor, @endColor); // FF 3.6+
    background-image: -ms-linear-gradient(@startColor, @endColor); // IE10
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, @startColor), color-stop(100%, @endColor)); // Safari 4+, Chrome 2+
    background-image: -webkit-linear-gradient(@startColor, @endColor); // Safari 5.1+, Chrome 10+
    background-image: -o-linear-gradient(@startColor, @endColor); // Opera 11.10
    background-image: linear-gradient(@startColor, @endColor); // The standard
  }
  .directional (@startColor: #555, @endColor: #333, @deg: 45deg) {
    ...
  }
  .vertical-three-colors(@startColor: #00b3ee, @midColor: #7a43b6, @colorStop: 50%, @endColor: #c3325f) {
    ...
  }
}
</pre>

<h3>Operations and grid system</h3>
<p>Get fancy and perform some math to generate flexible and powerful mixins like the one below.</p>
<pre class="prettyprint linenums">
// Griditude
@gridColumns:       16;
@gridColumnWidth:   40px;
@gridGutterWidth:   20px;
@siteWidth:         (@gridColumns * @gridColumnWidth) + (@gridGutterWidth * (@gridColumns - 1));

// Grid System
.container {
  width: @siteWidth;
  margin: 0 auto;
  .clearfix();
}
.columns(@columnSpan: 1) {
  width: (@gridColumnWidth * @columnSpan) + (@gridGutterWidth * (@columnSpan - 1));
}
.offset(@columnOffset: 1) {
  margin-left: (@gridColumnWidth * @columnOffset) + (@gridGutterWidth * (@columnOffset - 1)) + @extraSpace;
}
</pre>
  </div>
</div>

</section>

    </div><!-- /container -->

    <div id="footer">
      <div class="inner">
        <div class="container">
          <p class="right"><a href="#">Back to top</a></p>
          <p>
            Compiled and modified by <a href="http://twitter.com/twitter" target="_blank">wburningham</a> from <a href="http:/codeigniter.com" target="_blank">CodeIgniter</a>, <a href="http://twitter.github.com/bootstrap/" target="_blank">Bootstrap</a>, <a href="http://lesscss.org/" target="_blank">LESS.js</a>.<br />
            Licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>.
          </p>
        </div>
      </div>
    </div>

  </body>
</html>

