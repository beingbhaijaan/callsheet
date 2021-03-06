<?php
// Check if user is logged in or has session.

include('controllers/server.php');

?>

<?php
// Generate header.

$PageTitle="New Page Title";

function customPageHeader(){?>
  <!--Arbitrary HTML Tags-->
<?php }

include_once('header.php');
?>

<!-- Display messages -->



    <section class="hero is-medium is-primary has-bg-img">
      <div class="hero-body">
        <div class="container">
          <div class="columns">
            <div class="column is-8-desktop is-offset-1-desktop">
              <h1 class="title is-2 is-spaced">
                Din genvej til castings.
              </h1>
              <h2 class="subtitle is-4">
                  Callsheet hjælper med at synliggøre dig for filmproducenter.
                  <br>
                 Vores mål er at gøre castingprocessen gennemsigtig.
              </h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="columns">
          <div class="column is-8-desktop is-offset-2-desktop">
            <div class="content">
              <h3>What's included</h3>
              <p>
                The <code>npm</code> dependencies included in <code>package.json</code> are:
              </p>
              <ul>
                <li>
                  <code><a href="https://github.com/jgthms/bulma">bulma</a></code>
                </li>
                <li>
                  <code><a href="https://github.com/sass/node-sass">node-sass</a></code> to compile your own Sass file
                </li>
                <li>
                  <code><a href="https://github.com/postcss/postcss-cli">postcss-cli</a></code> and <code><a href="https://github.com/postcss/autoprefixer">autoprefixer</a></code> to add support for older browsers
                </li>
                <li>
                  <code><a href="https://babeljs.io/docs/usage/cli/">babel-cli</a></code>,
                  <code><a href="https://github.com/babel/babel-preset-env">babel-preset-env</a></code>
                  and
                  <code><a href="https://github.com/jmcriffey/babel-preset-es2015-ie">babel-preset-es2015-ie</a></code>
                  for compiling ES6 JavaScript files
                </li>
              </ul>
              <p>
                Apart from <code>package.json</code>, the following files are included:
              </p>
              <ul>
                <li>
                  <code>.babelrc</code> configuration file for <a href="https://babeljs.io/">Babel</a>
                </li>
                <li>
                  <code>.gitignore</code> common <a href="https://git-scm.com/">Git</a> ignored files
                </li>
                <li>
                  <code>index.html</code> this HTML5 file
                </li>
                <li>
                  <code>_sass/main.scss</code> a basic SCSS file that <strong>imports Bulma</strong> and explains how to <strong>customize</strong> your styles, and compiles to <code>css/main.css</code>
                </li>
                <li>
                  <code>_javascript/main.js</code> an ES6 JavaScript that compiles to <code>lib/main.js</code>
                </li>
              </ul>
              <h3>Try it out!</h3>
              <p>
                To see if your setup works, follow these steps:
              </p>
              <ol>
                <li>
                  <p>
                    <strong>Move</strong> to this directory:
                    <br>
                    <pre><code>cd bulma-start</code></pre>
                  </p>
                </li>
                <li>
                  <p>
                    <strong>Install</strong> all dependencies:
                    <br>
                    <pre><code>npm install</code></pre>
                  </p>
                </li>
                <li>
                  <p>
                    <strong>Start</strong> the CSS and JS watchers:
                    <br>
                    <pre><code>npm start</code></pre>
                  </p>
                </li>
                <li>
                  <p>
                    <strong>Edit</strong> <code>_sass/main.scss</code> by adding the following rule at the <strong>end</strong> of the file:
                    <br>
                    <pre><span style="color: #22863a;">html</span> {
  <span style="color: #005cc5;"><span style="color: #005cc5;">background-color</span></span>: <span style="color: #24292e">$green</span>;
}</pre>
                  </p>
                </li>
              </ol>
              <p>
                The page background should turn <strong class="has-text-success">green</strong>!
              </p>
              <h3>Get started</h3>
              <p>
                You're <strong>ready</strong> to create your own designs with Bulma. Just edit or duplicate this page, or simply create a new one!
                <br>
                For example, this page is <strong>only</strong> built with the following <strong>Bulma elements</strong>:
              </p>
            </div>
            <table class="table is-bordered is-fullwidth">
              <thead>
                <tr>
                  <th>Type</th>
                  <th>CSS class</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>Columns</th>
                  <td>
                    <code><a href="http://bulma.io/documentation/columns/basics">columns</a></code>
                    <code><a href="http://bulma.io/documentation/columns/basics">column</a></code>
                  </td>
                </tr>
                <tr>
                  <th>Layout</th>
                  <td>
                    <code><a href="http://bulma.io/documentation/layout/section">section</a></code>
                    <code><a href="http://bulma.io/documentation/layout/container">container</a></code>
                    <code><a href="http://bulma.io/documentation/layout/footer">footer</a></code>
                  </td>
                </tr>
                <tr>
                  <th>Elements</th>
                  <td>
                    <code><a href="http://bulma.io/documentation/elements/button">button</a></code>
                    <code><a href="http://bulma.io/documentation/elements/content">content</a></code>
                    <code><a href="http://bulma.io/documentation/elements/title">title</a></code>
                    <code><a href="http://bulma.io/documentation/elements/title">subtitle</a></code>
                  </td>
                </tr>
                <tr>
                  <th>Form</th>
                  <td>
                    <code><a href="http://bulma.io/documentation/form/general">field</a></code>
                    <code><a href="http://bulma.io/documentation/form/general">control</a></code>
                  </td>
                </tr>
                <tr>
                  <th>Helpers</th>
                  <td>
                    <code><a href="http://bulma.io/documentation/modifiers/typography-helpers/">has-text-centered</a></code>
                    <code><a href="http://bulma.io/documentation/modifiers/typography-helpers/">has-text-weight-semibold</a></code>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="content">
              <p>
                If you want to <strong>learn more</strong>, follow these links:
              </p>
            </div>
            <div class="field is-grouped">
              <p class="control">
                <a class="button is-medium is-primary" href="http://bulma.io">
                  <strong class="has-text-weight-semibold">Bulma homepage</strong>
                </a>
              </p>
              <p class="control">
                <a class="button is-medium is-link" href="http://bulma.io/documentation/overview/start/">
                  <strong class="has-text-weight-semibold">Documentation</strong>
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <?php
include_once('footer.php');
?>