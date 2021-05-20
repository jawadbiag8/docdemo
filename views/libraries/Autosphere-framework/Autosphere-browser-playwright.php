<section id="contentpage" class="content">
    <div class="container-fluid">
        <!-- Headings -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h4>
                            <b>Autosphere.Browser.Playwright</b>
                        </h4>
                    </div>
                    <div class="body">
                        <div class="sc-kLgntA iHaOcn">
                            <nav class="sc-bYEvPH khGBIg">
                                <ol class="breadcrumb breadcrumb-col-cyan">
                                    <li><a href="../..//docdemo/views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Autosphere Package</a></li>
                                    <li class="active">Autosphere.Browser.Playwright</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#home_with_icon_title" data-toggle="tab" aria-expanded="true"> <i class="material-icons">home</i> Readme </a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#profile_with_icon_title" data-toggle="tab" aria-expanded="false"> <i class="material-icons">face</i> Keywords </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="home_with_icon_title">
                                <div class="sc-jJEJSO laquCT">
                                    <div class="sc-hiSbYr XqbgT">
                                        <div>
                                            <p>Browser library is a browser automation library for Autosphere.</p>
                                            <p>
                                                This is the keyword documentation for Browser library.
                                            </p>
                                            <p>
                                                Browser library uses <a href="https://github.com/microsoft/playwright">Playwright Node module</a> to automate <a href="https://www.chromium.org/Home">Chromium</a>, <a href="https://www.mozilla.org/en-US/firefox/new/">Firefox</a> and
                                                <a href="https://webkit.org/">WebKit</a> with a single library.
                                            </p>
                                            <h4 id="Table of contents">Table of contents</h4>
                                            <ul>
                                                <li><a href="#Browser%2C-Context-and-Page" class="name">Browser, Context and Page</a></li>
                                                <li><a href="#Finding-elements" class="name">Finding elements</a></li>
                                                <li><a href="#Assertions" class="name">Assertions</a></li>
                                                <li><a href="#Automatic-page-and-context-closing" class="name">Automatic page and context closing</a></li>
                                                <li><a href="#Experimental%3A-Re-using-same-node-process" class="name">Experimental: Re-using same node process</a></li>
                                                <li><a href="#Extending-Browser-library-with-a-JavaScript-module" class="name">Extending Browser library with a JavaScript module</a></li>
                                                <li><a href="#Importing" class="name">Importing</a></li>
                                                <li><a href="#Keywords" class="name">Keywords</a></li>
                                                <li><a href="#Data-types" class="name">Data types</a></li>
                                            </ul>
                                            <h4 id="Browser,-Context-and-Page">Browser, Context and Page</h4>
                                            <p>Browser library works with three different layers that build on each other: <b>Browser</b>, <b>Context</b> and <b>Page</b>.</p>
                                            <h4 id="Browsers">Browsers</h4>
                                            <p>A <b>browser</b> can be started with one of the three different engines Chromium, Firefox or Webkit.</p>
                                            <h4 id="Supported-Browsers">Supported Browsers</h4>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <td>Browser</td>
                                                        <td>Browser with this engine</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>chromium</code></td>
                                                        <td>Google Chrome, Microsoft Edge (since 2020), Opera</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>firefox</code></td>
                                                        <td>Mozilla Firefox</td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>webkit</code></td>
                                                        <td>Apple Safari, Mail, AppStore on MacOS and iOS</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>Since <a href="https://github.com/microsoft/playwright">Playwright</a> comes with a pack of builtin binaries for all browsers, no additional drivers e.g. geckodriver are needed.</p>
                                            <p>All these browsers that cover more than 85% of the world wide used browsers, can be tested on Windows, Linux and MacOS. Theres is not need for dedicated machines anymore.</p>
                                            <p>
                                                A browser process is started <code>headless</code> (without a GUI) by default. Run <a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=Autosphere-browser-playwright#new-browser" class="name">New Browser</a> with specified arguments if a browser with a GUI
                                                is requested or if a proxy has to be configured. A browser process can contain several contexts.
                                            </p>
                                            <h4 id="Contexts">Contexts</h4>
                                            <p>
                                                A <b>context</b> corresponds to set of independent incognito pages in a browser that share cookies, sessions or profile settings. Pages in two separate contexts do not share cookies, sessions or profile settings. Compared to Selenium, these do
                                                <b>not</b> require their own browser process. To get a clean environment a test can just open a new context. Due to this new independent browser sessions can be opened with Autosphere Browser about 10 times faster than with Selenium by just
                                                opening a <a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=Autosphere-browser-playwright#new-context" class="name">New Context</a> within the opened browser.
                                            </p>
                                            <p>
                                                The context layer is useful e.g. for testing different users sessions on the same webpage without opening a whole new browser context. Contexts can also have detailed configurations, such as geo-location, language settings, the viewport size or color
                                                scheme. Contexts do also support http credentials to be set, so that basic authentication can also be tested. To be able to download files within the test, the <code>acceptDownloads</code> argument must be set to <code>True</code> in
                                                <a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=Autosphere-browser-playwright#new-context" class="name">New Context</a> keyword. A context can contain different pages.
                                            </p>
                                            <h4 id="Pages">Pages</h4>
                                            <p>A <b>page</b> does contain the content of the loaded web site and has a browsing history. Pages and browser tabs are the same.</p>
                                            <p>Typical usage could be:</p>
                                            <pre><b>*</b> Test Cases <b>*</b>
Starting a browser with a page
    New Browser    chromium    headless=false
    New Context    viewport={'width': 1920, 'height': 1080}
    Get Title      ==    Browser
</pre>
                                            <p>
                                                The <a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=Autosphere-browser-playwright#open-browser" class="name">Open Browser</a> keyword opens a new browser, a new context and a new page. This keyword is useful for quick experiments or debugging sessions.
                                            </p>
                                            <p>
                                                When a <a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=Autosphere-browser-playwright#new-page" class="name">New Page</a> is called without an open browser,
                                                <a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=Autosphere-browser-playwright#new-browser" class="name">New Browser</a> and
                                                <a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=Autosphere-browser-playwright#new-context" class="name">New Context</a> are executed with default values first.
                                            </p>
                                            <p>
                                                Each Browser, Context and Page has a unique ID with which they can be addressed. A full catalog of what is open can be received by
                                                <a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=Autosphere-browser-playwright#get-browser-catalog" class="name">Get Browser Catalog</a> as dictionary.
                                            </p>
                                            <h4 id="Finding-elements">Finding elements</h4>
                                            <p>All keywords in the library that need to interact with an element on a web page take an argument typically named <code>selector</code> that specifies how to find the element.</p>
                                            <p>Selector strategies that are supported by default are listed in the table below.</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <th>Strategy</th>
                                                        <th>Match based on</th>
                                                        <th>Example</th>
                                                    </tr>
                                                    <tr>
                                                        <td><code>css</code></td>
                                                        <td>CSS selector.</td>
                                                        <td><code>css=.class &gt; #login_btn</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>xpath</code></td>
                                                        <td>XPath expression.</td>
                                                        <td><code>xpath=//input[@id="login_btn"]</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>text</code></td>
                                                        <td>Browser text engine.</td>
                                                        <td><code>text=Login</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>id</code></td>
                                                        <td>Element ID Attribute.</td>
                                                        <td><code>id=login_btn</code></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h4 id="Explicit-Selector-Strategy">Explicit Selector Strategy</h4>
                                            <p>
                                                The explicit selector strategy is specified with a prefix using syntax <code>strategy=value</code>. Spaces around the separator are ignored, so <code>css=foo</code>, <code>css= foo</code> and <code>css = foo</code> are all equivalent.
                                            </p>
                                            <h4 id="Implicit-Selector-Strategy">Implicit Selector Strategy</h4>
                                            <p>
                                                <b>The default selector strategy is <a href="#CSS" class="name">css</a>.</b>
                                            </p>
                                            <p>If selector does not contain one of the know explicit selector strategies, it is assumed to contain css selector.</p>
                                            <p>Selectors that are starting with <code>//</code> or <code>..</code> are considered as xpath selectors.</p>
                                            <p>Selectors that are in quotes are considered as text selectors.</p>
                                            <p>Examples:</p>
                                            <pre><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=Autosphere-browser-playwright#click" class="name">Click</a>  span &gt; button.some_class         # This is equivalent
<a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=Autosphere-browser-playwright#click" class="name">Click</a>  css=span &gt; button.some_class     # to this.


<a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=Autosphere-browser-playwright#click" class="name">Click</a>  //span/button[@class="some_class"]
<a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=Autosphere-browser-playwright#click" class="name">Click</a>  xpath=//span/button[@class="some_class"]


<a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=Autosphere-browser-playwright#click" class="name">Click</a>  "Login"
<a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=Autosphere-browser-playwright#click" class="name">Click</a>  text="Login"
</pre>
                                            <h4 id="CSS">CSS</h4>
                                            <p>As written before, the default selector strategy is <a href="#CSS" class="name">css</a>. See <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Selectors">css selector</a> for more information.</p>
                                            <p>Any malformed selector not starting with <code>//</code> or <code>..</code> nor starting and ending with a quote is assumed to be a css selector.</p>
                                            <p>Example:</p>
                                            <pre><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=Autosphere-browser-playwright#click" class="name">Click</a>  span &gt; button.some_class
</pre>
                                            <h4 id="XPath">XPath</h4>
                                            <p>XPath engine is equivalent to <a href="https://developer.mozilla.org/en/docs/Web/API/Document/evaluate">Document.evaluate</a>. Example: <code>xpath=//html/body//span[text()="Hello World"]</code>.</p>
                                            <p>
                                                Malformed selector starting with <code>//</code> or <code>..</code> is assumed to be an xpath selector. For example, <code>//html/body</code> is converted to <code>xpath=//html/body</code>. More examples are displayed in
                                                <a href="#Examples" class="name">Examples</a>.
                                            </p>
                                            <p>Note that xpath does not pierce <a href="https://developer.mozilla.org/en-US/docs/Web/Web_Components/Using_shadow_DOM">shadow_roots</a>.</p>
                                            <h4 id="Text">Text</h4>
                                            <p>
                                                Text engine finds an element that contains a text node with the passed text. For example, <code>Click text=Login</code> clicks on a login button, and <code>Wait For Elements State text="lazy loaded text"</code> waits for the "lazy loaded text"
                                                to appear in the page.
                                            </p>
                                            <p>Text engine finds fields based on their labels in text inserting keywords.</p>
                                            <p>
                                                Malformed selector starting and ending with a quote (either <code>"</code> or <code>'</code>) is assumed to be a text selector. For example, <code>Click "Login"</code> is converted to <code>Click text="Login"</code>. Be aware that these leads
                                                to exact matches only! More examples are displayed in <a href="#Examples" class="name">Examples</a>.
                                            </p>
                                            <h4 id="Insensitive-match">Insensitive match</h4>
                                            <p>By default, the match is case-insensitive, ignores leading/trailing whitespace and searches for a substring. This means <code>text= Login</code> matches <code>&lt;button&gt;Button loGIN (click me)&lt;/button&gt;</code>.</p>
                                            <h4 id="Exact match">Exact match</h4>
                                            <p>
                                                Text body can be escaped with single or double quotes for precise matching, insisting on exact match, including specified whitespace and case. This means <code>text="Login "</code> will only match
                                                <code>&lt;button&gt;Login &lt;/button&gt;</code> with exactly one space after "Login". Quoted text follows the usual escaping rules, e.g. use <code>\"</code> to escape double quote in a double-quoted string:
                                                <code>text="foo\"bar"</code>.
                                            </p>
                                            <h4 id="RegEx">RegEx</h4>
                                            <p>
                                                Text body can also be a JavaScript-like regex wrapped in / symbols. This means <code>text=/^hello .*!$/i</code> or <code>text=/^Hello .*!$/</code> will match <code>&lt;span&gt;Hello Peter Parker!&lt;/span&gt;</code> with any name after <code>Hello</code>,
                                                ending with <code>!</code>. The first one flagged with <code>i</code> for case-insensitive. See <a href="https://regex101.com/">https://regex101.com</a> for more information about RegEx.
                                            </p>
                                            <h4 id="Button-and-Submit-Values">Button and Submit Values</h4>
                                            <p>Input elements of the type button and submit are rendered with their value as text, and text engine finds them. For example, <code>text=Login</code> matches <code>&lt;input type=button value="Login"&gt;</code>.</p>
                                            <h4 id="Cascaded-selector-syntax">Cascaded selector syntax</h4>
                                            <p>Browser library supports the same selector strategies as the underlying Playwright node module: xpath, css, id and text. The strategy can either be explicitly specified with a prefix or the strategy can be implicit.</p>
                                            <p>A major advantage of Browser is, that multiple selector engines can be used within one selector. It is possible to mix XPath, CSS and Text selectors while selecting a single element.</p>
                                            <p>
                                                Selectors are strings that consists of one or more clauses separated by <code>&gt;&gt;</code> token, e.g. <code>clause1 &gt;&gt; clause2 &gt;&gt; clause3</code>. When multiple clauses are present, next one is queried relative to the previous one's
                                                result. Browser library supports concatination of different selectors seperated by <code>&gt;&gt;</code>.
                                            </p>
                                            <p>For example:</p>
                                            <pre><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=Autosphere-browser-playwright#highlight-elements" class="name">Highlight Elements</a>    "Hello" &gt;&gt; ../.. &gt;&gt; .select_button
<a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=Autosphere-browser-playwright#highlight-elements" class="name">Highlight Elements</a>    text=Hello &gt;&gt; xpath=../.. &gt;&gt; css=.select_button
</pre>
                                            <p>
                                                Each clause contains a selector engine name and selector body, e.g. <code>engine=body</code>. Here <code>engine</code> is one of the supported engines (e.g. css or a custom one). Selector <code>body</code> follows the format of the particular
                                                engine, e.g. for css engine it should be a <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Selectors">css selector</a>. Body format is assumed to ignore leading and trailing white spaces, so that extra whitespace can be added for
                                                readability. If selector engine needs to include <code>&gt;&gt;</code> in the body, it should be escaped inside a string to not be confused with clause separator, e.g.
                                                <code>text="some &gt;&gt; text"</code>.
                                            </p>
                                            <p>
                                                Selector engine name can be prefixed with <code>*</code> to capture element that matches the particular clause instead of the last one. For example, <code>css=article &gt;&gt; text=Hello</code> captures the element with the text
                                                <code>Hello</code>, and <code>*css=article &gt;&gt; text=Hello</code> (note the *) captures the article element that contains some element with the text Hello.
                                            </p>
                                            <p>For convenience, selectors in the wrong format are heuristically converted to the right format. See <a href="#Implicit-Selector-Strategy" class="name">Implicit Selector Strategy</a></p>
                                            <h4 id="Examples">Examples</h4>
                                            <pre>
Get Element    css=div


Get Element    //html/body/div


Get Element    text=foo


Get Element    xpath=//html/body/div &gt;&gt; css=span


Get Element    div


Get Element    //html/body/div


Get Element    "foo"


Get Element    \#foo &gt;&gt; css=span:nth-child(2n+1) &gt;&gt; div
Get Element    id=foo &gt;&gt; css=span:nth-child(2n+1) &gt;&gt; div

    </pre>
                                            <p>Be aware that using <code>#</code> as a starting character in Autosphere would be interpreted as comment. Due to that fact a <code>#id</code> must be escaped as <code>\#id</code>.</p>
                                            <h4 id="Frames">Frames</h4>
                                            <p>
                                                By default, selector chains do not cross frame boundaries. It means that a simple CSS selector is not able to select and element located inside an iframe or a frameset. For this usecase, there is a special selector
                                                <code>&gt;&gt;&gt;</code> which can be used to combine a selector for the frame and a selector for an element inside a frame.
                                            </p>
                                            <p>Given this simple pseudo html snippet:</p>
                                            <pre>
&lt;iframe id="iframe" src="src.html"&gt;
  #document
    &lt;!DOCTYPE html&gt;
    &lt;html&gt;
      &lt;head&gt;&lt;/head&gt;
      &lt;body&gt;
        &lt;button id="btn"&gt;Click Me&lt;/button&gt;
      &lt;/body&gt;
    &lt;/html&gt;
&lt;/iframe&gt;

    </pre>
                                            <p>Here's a keyword call that clicks the button inside the frame.</p>
                                            <pre>
Click   id=iframe &gt;&gt;&gt; id=btn

    </pre>
                                            <p>The selectors on the left and right side of <code>&gt;&gt;&gt;</code> can be any valid selectors. The selector clause directly before the frame opener <code>&gt;&gt;&gt;</code> must select the frame element.</p>
                                            <h4 id="WebComponents-and-Shadow-DOM">WebComponents and Shadow DOM</h4>
                                            <p>Playwright and so also Browser are able to do automatic piercing of Shadow DOMs and therefore are the best automation technology when working with WebComponents.</p>
                                            <p>
                                                Also other technologies claim that they can handle <a href="https://developer.mozilla.org/en-US/docs/Web/Web_Components/Using_shadow_DOM">Shadow DOM and Web Components</a>. However, non of them do pierce shadow roots automatically, which may be
                                                inconvenient when working with Shadow DOM and Web Components.
                                            </p>
                                            <p>
                                                For that reason, css engine pierces shadow roots. More specifically, every <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Descendant_combinator">Descendant combinator</a> pierces an arbitrary number of open shadow roots, including the
                                                implicit descendant combinator at the start of the selector.
                                            </p>
                                            <p>That means, it is not nessesary to select each shadow host, open its shadow root and select the next shadow host until you reach the element that should be controlled.</p>
                                            <h4 id="CSS:light">CSS:light</h4>
                                            <p>
                                                <code>css:light</code> engine is equivalent to <a href="https://developer.mozilla.org/en/docs/Web/API/Document/querySelector">Document.querySelector</a> and behaves according to the CSS spec. However, it does not pierce shadow roots.
                                            </p>
                                            <p><code>css</code> engine first searches for elements in the light dom in the iteration order, and then recursively inside open shadow roots in the iteration order. It does not search inside closed shadow roots or iframes.</p>
                                            <p>Examples:</p>
                                            <pre>
&lt;article&gt;
  &lt;div&gt;In the light dom&lt;/div&gt;
  &lt;div slot='myslot'&gt;In the light dom, but goes into the shadow slot&lt;/div&gt;
  &lt;open mode shadow root&gt;
      &lt;div class='in-the-shadow'&gt;
          &lt;span class='content'&gt;
              In the shadow dom
              &lt;open mode shadow root&gt;
                  &lt;li id='target'&gt;Deep in the shadow&lt;/li&gt;
              &lt;/open mode shadow root&gt;
          &lt;/span&gt;
      &lt;/div&gt;
      &lt;slot name='myslot'&gt;&lt;/slot&gt;
  &lt;/open mode shadow root&gt;
&lt;/article&gt;

    </pre>
                                            <p>Note that <code>&lt;open mode shadow root&gt;</code> is not an html element, but rather a shadow root created with <code>element.attachShadow({mode: 'open'})</code>.</p>
                                            <ul>
                                                <li>Both <code>"css=article div"</code> and <code>"css:light=article div"</code> match the first <code>&lt;div&gt;In the light dom&lt;/div&gt;</code>.</li>
                                                <li>Both <code>"css=article &gt; div"</code> and <code>"css:light=article &gt; div"</code> match two <code>div</code> elements that are direct children of the <code>article</code>.</li>
                                                <li><code>"css=article .in-the-shadow"</code> matches the <code>&lt;div class='in-the-shadow'&gt;</code>, piercing the shadow root, while <code>"css:light=article .in-the-shadow"</code> does not match anything.</li>
                                                <li><code>"css:light=article div &gt; span"</code> does not match anything, because both light-dom <code>div</code> elements do not contain a <code>span</code>.</li>
                                                <li><code>"css=article div &gt; span"</code> matches the <code>&lt;span class='content'&gt;</code>, piercing the shadow root.</li>
                                                <li><code>"css=article &gt; .in-the-shadow"</code> does not match anything, because <code>&lt;div class='in-the-shadow'&gt;</code> is not a direct child of <code>article</code></li>
                                                <li><code>"css:light=article &gt; .in-the-shadow"</code> does not match anything.</li>
                                                <li><code>"css=article li#target"</code> matches the <code>&lt;li id='target'&gt;Deep in the shadow&lt;/li&gt;</code>, piercing two shadow roots.</li>
                                            </ul>
                                            <h4 id="text:light">text:light</h4>
                                            <p>
                                                <code>text</code> engine open pierces shadow roots similarly to <code>css</code>, while <code>text:light</code> does not. Text engine first searches for elements in the light dom in the iteration order, and then recursively inside open shadow
                                                roots in the iteration order. It does not search inside closed shadow roots or iframes.
                                            </p>
                                            <h4 id="id, data-testid, data-test-id, data-test and their :light counterparts">id, data-testid, data-test-id, data-test and their :light counterparts</h4>
                                            <p>
                                                Attribute engines are selecting based on the corresponding attribute value. For example: <code>data-test-id=foo</code> is equivalent to <code>css=[data-test-id="foo"]</code>, and <code>id:light=foo</code> is equivalent to
                                                <code>css:light=[id="foo"]</code>.
                                            </p>
                                            <h4 id="Element-reference-syntax">Element reference syntax</h4>
                                            <p>
                                                It is possible to get a reference to an element by using <a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=Autosphere-browser-playwright#get-element" class="name">Get Element</a> keyword. This reference can be used as a <b>first</b> part of a selector
                                                by using a special selector syntax <span class="name">element=</span> like this:
                                            </p>
                                            <pre>
${ref}=    Get Element    .some_class
           Click          element=${ref} &gt;&gt; .some_child

    </pre>
                                            <p>The <span class="name">.some_child</span> selector in the example is relative to the element referenced by ${ref}.</p>
                                            <h4 id="Assertions">Assertions</h4>
                                            <p>Keywords that accept arguments <code>assertion_operator</code> &lt;<a href="#AssertionOperator" class="name">AssertionOperator</a>&gt; and <code>assertion_expected</code> can optionally assert.</p>
                                            <p>Currently supported assertion operators are:</p>
                                            <table border="1">
                                                <tbody>
                                                    <tr>
                                                        <th>Operator</th>
                                                        <th>Alternative Operators</th>
                                                        <th>Description</th>
                                                        <th>Validate Equivalent</th>
                                                    </tr>
                                                    <tr>
                                                        <td><code>==</code></td>
                                                        <td><code>equal</code>, <code>should be</code></td>
                                                        <td>Checks if returned value is equal to expected value.</td>
                                                        <td><code>value == expected</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>!=</code></td>
                                                        <td><code>inequal</code>, <code>should not be</code></td>
                                                        <td>Checks if returned value is not equal to expected value.</td>
                                                        <td><code>value != expected</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>&gt;</code></td>
                                                        <td><code>greater than</code></td>
                                                        <td>Checks if returned value is greater than expected value.</td>
                                                        <td><code>value &gt; expected</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>&gt;=</code></td>
                                                        <td></td>
                                                        <td>Checks if returned value is greater than or equal to expected value.</td>
                                                        <td><code>value &gt;= expected</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>&lt;</code></td>
                                                        <td><code>less than</code></td>
                                                        <td>Checks if returned value is less than expected value.</td>
                                                        <td><code>value &lt; expected</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>&lt;=</code></td>
                                                        <td></td>
                                                        <td>Checks if returned value is less than or equal to expected value.</td>
                                                        <td><code>value &lt;= expected</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>*=</code></td>
                                                        <td><code>contains</code></td>
                                                        <td>Checks if returned value contains expected value as substring.</td>
                                                        <td><code>expected in value</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td><code>not contains</code></td>
                                                        <td>Checks if returned value does not contain expected value as substring.</td>
                                                        <td><code>expected in value</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>^=</code></td>
                                                        <td><code>should start with</code>, <code>starts</code></td>
                                                        <td>Checks if returned value starts with expected value.</td>
                                                        <td><code>re.search(f"^{expected}", value)</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>$=</code></td>
                                                        <td><code>should end with</code>, <code>ends</code></td>
                                                        <td>Checks if returned value ends with expected value.</td>
                                                        <td><code>re.search(f"{expected}$", value)</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>matches</code></td>
                                                        <td></td>
                                                        <td>Checks if given RegEx matches minimum once in returned value.</td>
                                                        <td><code>re.search(expected, value)</code></td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>validate</code></td>
                                                        <td></td>
                                                        <td>Checks if given Python expression evaluates to <code>True</code>.</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>evaluate</code></td>
                                                        <td><code>then</code></td>
                                                        <td>When using this operator, the keyword does return the evaluated Python expression.</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>
                                                But default the keywords will provide an error message if the assertion fails, but default error message can be overwritten with a <code>message</code> argument. The <code>message</code> argument accepts
                                                <span class="name">{value}</span>, <span class="name">{value_type}</span>, <span class="name">{expected}</span> and <span class="name">{expected_type}</span>
                                                <a href="https://docs.python.org/3/library/stdtypes.html#str.format">format</a> options. The <span class="name">{value}</span> is the value returned by the keyword and the <span class="name">{expected}</span> is the expected value defined by the
                                                user, usually value in the <code>assertion_expected</code> argument. The <span class="name">{value_type}</span> and <span class="name">{expected_type}</span> are the type definitions from
                                                <span class="name">{value}</span> and <span class="name">{expected}</span> arguments. In similar fashion as Python <a href="https://docs.python.org/3/library/functions.html#type">type</a> returns type definition. Assertions will retry until <code>timeout</code> has expired if they do not pass.
                                            </p>
                                            <p>
                                                The assertion <code>assertion_expected</code> value is not converted by the library and is used as is. Therefore when assertion is made, the <code>assertion_expected</code> argument value and value returned the keyword must have same type. If
                                                types are not same, assertion will fail. Example <a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=Autosphere-browser-playwright#get-text" class="name">Get Text</a> always returns a string and has to be compared with a string, even the returnd value might
                                                look like a number.
                                            </p>
                                            <p>
                                                Other Keywords have other specific types they return. <a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=Autosphere-browser-playwright#get-element-count" class="name">Get Element Count</a> always returns an integer.
                                                <a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=Autosphere-browser-playwright#get-boundingbox" class="name">Get Bounding Box</a> and
                                                <a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=Autosphere-browser-playwright#get-viewport-size" class="name">Get Viewport Size</a> can be filtered. They return a dictionary without filter and a number when filtered. These Keywords do autoconvert the
                                                expected value if a number is returned.
                                            </p>
                                            <p>
                                                * &lt; less or greater &gt; With Strings* Compairisons of strings with <code>greater than</code> or <code>less than</code> compares each character, starting from 0 reagarding where it stands in the code page. Example:
                                                <code>A &lt; Z</code>, <code>Z &lt; a</code>,
                                                <code>ac &lt; dc<span class="name"> It does never compare the length of elements. Neither lists nor strings. The comparison stops at the first character that is different. Examples: </span>`'abcde' &lt; 'abd'</code>,
                                                <code>'100.000' &lt; '2'</code> In Python 3 and therefore also in Browser it is not possible to compare numbers with strings with a greater or less operator. On keywords that return numbers, the given expected value is automatically converted
                                                to a number before comparison.
                                            </p>
                                            <p>
                                                The getters <span class="name">Get Page State</span> and <a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=Autosphere-browser-playwright#get-browser-catalog" class="name">Get Browser Catalog</a> return a dictionary. Values of the dictionary can directly
                                                asserted. Pay attention of possible types because they are evaluated in Python. For example:
                                            </p>
                                            <pre>
Get Page State    validate    2020 &gt;= value['year']                     # Compairsion of numbers
Get Page State    validate    "IMPORTANT MESSAGE!" == value['message']  # Compairsion of strings

    </pre>
                                            <h4 id="The-'then'-or-'evaluate'-closure">The 'then' or 'evaluate' closure</h4>
                                            <p>
                                                Keywords that accept arguments <code>assertion_operator</code> and <code>assertion_expected</code> can optionally also use <code>then</code> or <code>evaluate</code> closure to modify the returned value with BuiltIn Evaluate. Actual value can
                                                be accessed with <code>value</code>.
                                            </p>
                                            <p>
                                                For example <code>Get Title then 'TITLE: '+value</code>.
                                            </p>
                                            <h4 id="Examples">Examples</h4>
                                            <pre>
Get Title                                           equal                 Page Title
Get Title                                           ^=                    Page
Get Style    //*[@id="div-element"]      width      &gt;                     100
Get Title                                           matches               \\w+\\s\\w+
Get Title                                           validate              value == "Login Page"
Get Title                                           evaluate              value if value == "some value" else "something else"

    </pre>
                                            <h4 id="Automatic-page-and-context-closing">Automatic page and context closing</h4>
                                            <p>Controls when contexts and pages are closed during the test execution.</p>
                                            <p>
                                                If automatic closing level is <span class="name">TEST</span>, contexts and pages that are created during a single test are automatically closed when the test ends. Contexts and pages that are created during suite setup are closed when the suite
                                                teardown ends.
                                            </p>
                                            <p>If automatic closing level is <span class="name">SUITE</span>, all contexts and pages that are created during the test suite are closed when the suite teardown ends.</p>
                                            <p>If automatic closing level is <span class="name">MANUAL</span>, nothing is closed automatically during the test execution is ongoing.</p>
                                            <p>All browsers are automatically closed, always and regardless of the automatic closing level at the end of the test execution. This will also close all remaining pages and contexts.</p>
                                            <p>Automatic closing can be configured or switched off with the auto_closing_level library import parameter.</p>
                                            <p>See: <a href="#Importing" class="name">Importing</a></p>
                                            <h4 id="Experimental:-Re-using-same-node-process">Experimental: Re-using same node process</h4>
                                            <p>
                                                Browser library integrated nodejs and python. NodeJS side can be also executed as a standalone process. Browser libraries running on the same machine can talk to that instead of starting new node processes. This can speed execution when running tests
                                                parallel. To start node side run on the directory when Browser package is <code>PLAYWRIGHT_BROWSERS_PATH=0 node Browser/wrapper/index.js PORT</code>. <code>PORT</code> is port you want to use for the node process. To execute tests then
                                                with pabot for example do <code>Autosphere_BROWSER_NODE_PORT=PORT pabot ..</code>.
                                            </p>
                                            <h4 id="Extending-Browser-library-with-a-JavaScript-module">Extending Browser library with a JavaScript module</h4>
                                            <p>
                                                Browser library can be extended with JavaScript. Module must be in CommonJS format that Node.js uses. You can translate your ES6 module to Node.js CommonJS style with Babel. Many other languages can be also translated to modules that can be used from
                                                Node.js. For example TypeScript, PureScript and ClojureScript just to mention few.
                                            </p>
                                            <pre>
async function myGoToKeyword(page, args, logger, playwright) {
  logger(args.toString())
  playwright.coolNewFeature()
  return await page.goto(args[0]);
}

    </pre>
                                            <p><code>page</code>: <a href="https://playwright.dev/docs/api/class-page">the playwright Page object</a>.</p>
                                            <p><code>args</code>: list of strings from Autosphere keyword call.</p>
                                            <p>!! A BIT UNSTABLE AND SUBJECT TO API CHANGES !! <code>logger</code>: callback function that takes strings as arguments and writes them to robot log. Can be called multiple times.</p>
                                            <p>
                                                <code>playwright</code>: playwright module (* from 'playwright'). Useful for integrating with Playwright features that Browser library doesn't support with it's own keywords.
                                                <a href="https://playwright.dev/docs/api/class-playwright">API docs</a>
                                            </p>
                                            <h4 id="Example module.js">Example module.js</h4>
                                            <pre>
async function myGoToKeyword(page, args) {
  await page.goto(args[0]);
  return await page.title();
}
exports.__esModule = true;
exports.myGoToKeyword = myGoToKeyword;

    </pre>
                                            <h4 id="Example-Robot-Framework-side">Example Autosphere side</h4>
                                            <pre><b>*</b> Settings <b>*</b>
Library   Browser  jsextension=${CURDIR}/module.js

<b>*</b> Test Cases <b>*</b>
Hello
  New Page
  ${title}=  myGoToKeyword  <a href="https://playwright.dev">https://playwright.dev</a>
  Should be equal  ${title}  Playwright
</pre>
                                            <p>Also selector syntax can be extended withm custom selector with a js module</p>
                                            <h4 id="Example-module-keyword-for-custom-selector-registerin">Example module keyword for custom selector registerin</h4>
                                            <pre>async function registerMySelector(page, args, log, playwright) {
playwright.selectors.register("myselector", () =&gt; ({
   // Returns the first element matching given selector in the root's subtree.
   query(root, selector) {
      return root.querySelector(<span class="name">a[data-title="${selector}"]</span>);
    },

    // Returns all elements matching given selector in the root's subtree.
    queryAll(root, selector) {
      return Array.from(root.querySelectorAll(<span class="name">a[data-title="${selector}"]</span>));
    }
}));
return 1;
}
exports.__esModule = true;
exports.registerMySelector = registerMySelector;
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="sc-jJEJSO laquCT">
                                            <div>
                                                <div class="keyword" id="add-cookie">
                                                    <h4><a href="#add-cookie">Add Cookie</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Adds a cookie to currently active browser context.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>name</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>value</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>url</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>domain</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>path</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>expires</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>httpOnly</td>
                                                                    <td>bool</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>secure</td>
                                                                    <td>bool</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>sameSite</td>
                                                                    <td>CookieSameSite</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><code>name</code> Name of the cookie.</p>
                                                        <p><code>value</code> Given value for the cookie.</p>
                                                        <p><code>url</code> Given url for the cookie. Defaults to None. Either <code>url</code> or
                                                            <code>domain</code> / <code>path</code> pair must be set.
                                                        </p>
                                                        <p><code>domain</code> Given domain for the cookie. Defaults to None. Either <code>url</code> or
                                                            <code>domain</code> / <code>path</code> pair must be set.
                                                        </p>
                                                        <p><code>path</code> Given path for the cookie. Defaults to None. Either <code>url</code> or
                                                            <code>domain</code> / <code>path</code> pair must be set.
                                                        </p>
                                                        <ul>
                                                            <li>example: 2027-09-28 16:21:35</li>
                                                        </ul>
                                                        <p><code>httpOnly</code> Sets the httpOnly token.</p>
                                                        <p><code>secure</code> Sets the secure token.</p>
                                                        <p><code>samesite</code> Sets the samesite mode.</p>
                                                        <h4>Examples</h4>
                                                        <pre><a href="#add-cookie" class="name">Add Cookie</a>   foo   bar   <a href="http://address.com/path/to/site">http://address.com/path/to/site</a>                                     # Using url argument.
  <a href="#add-cookie" class="name">Add Cookie</a>   foo   bar   domain=example.com                path=/foo/bar                     # Using domain and url arguments.
  <a href="#add-cookie" class="name">Add Cookie</a>   foo   bar   <a href="http://address.com/path/to/site">http://address.com/path/to/site</a>   expiry=2027-09-28 16:21:35        # Expiry as timestamp.
  <a href="#add-cookie" class="name">Add Cookie</a>   foo   bar   <a href="http://address.com/path/to/site">http://address.com/path/to/site</a>   expiry=1822137695                 # Expiry as epoch seconds.
  </pre>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="add-style-tag">
                                                    <h4><a href="#add-style-tag">Add Style Tag</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Adds a &lt;style type="text/css"&gt; tag with the content.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>content</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><code>content</code> Raw CSS content to be injected into frame.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="check-checkbox">
                                                    <h4><a href="#check-checkbox">Check Checkbox</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Checks the checkbox or selects radio button found by ``selector``.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Checks the checkbox or selects radio button found by <code>selector</code>.</p>
                                                        <p><code>selector</code> Selector of the checkbox. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p>Does nothing if the element is already checked/selected.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="clear-text">
                                                    <h4><a href="#clear-text">Clear Text</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Clears the text field found by ``selector``.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Clears the text field found by <code>selector</code>.</p>
                                                        <p><code>selector</code> Selector of the text field. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p>See <a href="#type-text" class="name">Type Text</a> for emulating typing text character by character. See
                                                            <a href="#fill-text" class="name">Fill Text</a> for direct filling of the full text at once.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="click">
                                                    <h4><a href="#click">Click</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Simulates mouse click on the element found by ``selector``.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>button</td>
                                                                    <td>MouseButton</td>
                                                                    <td>left</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>clickCount</td>
                                                                    <td>int</td>
                                                                    <td>1</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>delay</td>
                                                                    <td>timedelta</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>position_x</td>
                                                                    <td>float</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>position_y</td>
                                                                    <td>float</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>force</td>
                                                                    <td>bool</td>
                                                                    <td>False</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>noWaitAfter</td>
                                                                    <td>bool</td>
                                                                    <td>False</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>modifiers</td>
                                                                    <td>KeyboardModifier</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Simulates mouse click on the element found by <code>selector</code>.</p>
                                                        <p>This keyword clicks an element matching <code>selector</code> by performing the following steps:</p>
                                                        <ul>
                                                            <li>Find an element matches selector. If there is none, wait until a matching element is attached to the
                                                                DOM.</li>
                                                            <li>Wait for actionability checks on the matched element, unless <code>force</code> option is set. If
                                                                the element is detached during the checks, the whole action is retried.</li>
                                                            <li>Scroll the element into view if needed.</li>
                                                            <li>Use <a href=" #MouseButton" class="name">Mouse
                                                                    Button</a> to click in the center of the element, or the specified position.</li>
                                                            <li>Wait for initiated navigation to either succeed or fail, unless <code>noWaitAfter</code> option is
                                                                set.</li>
                                                        </ul>
                                                        <p><code>selector</code> Selector element to click. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p><code>button</code> Defaults to <code>left</code> if invalid.</p>
                                                        <p><code>clickCount</code> Defaults to 1.</p>
                                                        <p><code>delay</code> Time to wait between mouse-down and mouse-up. Defaults to 0.</p>
                                                        <p><code>position_x</code> &amp; <code>position_y</code> A point to click relative to the top-left corner of
                                                            element bounding-box. Only positive values within the bounding-box are allowed. If not specified, clicks
                                                            to some visible point of the element.</p>
                                                        <p><code>force</code> Set to True to skip Playwright's <a href="https://playwright.dev/docs/actionability">Actionability checks</a>.</p>
                                                        <p><code>noWaitAfter</code> Actions that initiate navigation, are waiting for these navigation to happen and
                                                            for pages to start loading. You can opt out of waiting via setting this flag. You would only need this
                                                            option in the exceptional cases such as navigating to inaccessible pages. Defaults to
                                                            <code>False</code>.
                                                        </p>
                                                        <p><code>*modifiers</code> Modifier keys to press. Ensures that only these modifiers are pressed during the
                                                            click, and then restores current modifiers back. If not specified, currently pressed modifiers are used.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="close-browser">
                                                    <h4><a href="#close-browser">Close Browser</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Closes the current browser. Activated browser is set to first active browser. Closes all
                                                            context and pages belonging to this browser. See `Browser, Context and Page` for more information about
                                                            Browser and related concepts.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>browser</td>
                                                                    <td>str</td>
                                                                    <td>CURRENT</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Closes the current browser. Activated browser is set to first active browser. Closes all context and
                                                            pages belonging to this browser. See <a href=" #Browser%2C-Context-and-Page" class="name">Browser, Context and Page</a> for more information about Browser and related concepts.
                                                        </p>
                                                        <p><code>browser</code> &lt; <code>CURRENT</code> | <code>ALL</code> | str &gt; If value is not
                                                            <code>CURRENT</code> it should be a string referencing the id of the browser to be closed. If
                                                            <code>ALL</code> is provided Close All Browsers is executed.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="close-context">
                                                    <h4><a href="#close-context">Close Context</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Closes a Context. Activated context is set to first active context. Closes pages
                                                            belonging to this context. See `Browser, Context and Page` for more information about Context and
                                                            related concepts.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>context</td>
                                                                    <td>str</td>
                                                                    <td>CURRENT</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>browser</td>
                                                                    <td>str</td>
                                                                    <td>CURRENT</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Closes a Context. Activated context is set to first active context. Closes pages belonging to this
                                                            context. See <a href=" #Browser%2C-Context-and-Page" class="name">Browser, Context and Page</a> for more information about Context and related concepts.
                                                        </p>
                                                        <p><code>context</code> &lt; <code>CURRENT</code> | <code>ALL</code> | str &gt; Close context with specified
                                                            id. If <code>ALL</code> is passed, all contexts of the specified browser are closed. Defaults to
                                                            CURRENT.</p>
                                                        <p><code>browser</code> &lt; <code>CURRENT</code> | <code>ALL</code> | str &gt; Close context in specified
                                                            browser. If value is not "CURRENT" it should be a string referencing the id of the browser where to
                                                            close context.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="close-page">
                                                    <h4><a href="#close-page">Close Page</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Closes the ``page`` in ``context`` in ``browser``. Defaults to current for all three.
                                                            Activated page is set to first active page. See `Browser, Context and Page` for more information about
                                                            Page and related concepts.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>page</td>
                                                                    <td>str</td>
                                                                    <td>CURRENT</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>context</td>
                                                                    <td>str</td>
                                                                    <td>CURRENT</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>browser</td>
                                                                    <td>str</td>
                                                                    <td>CURRENT</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Closes the <code>page</code> in <code>context</code> in <code>browser</code>. Defaults to current for all
                                                            three. Activated page is set to first active page. See <a href=" #Browser%2C-Context-and-Page" class="name">Browser, Context and Page</a> for more information about Page and related concepts.</p>
                                                        <p><code>page</code> &lt; <code>CURRENT</code> | <code>ALL</code> | str &gt; Id of the page to close. If
                                                            value is not "CURRENT" it should be a string referencing the id of the context where to close page. If
                                                            <code>ALL</code> is passed, all pages of the given context are closed. Defaults to CURRENT.
                                                        </p>
                                                        <p><code>context</code> &lt; <code>CURRENT</code> | <code>ALL</code> | str &gt; Id of the context that
                                                            belongs to the page to be closed. If <code>ALL</code> is passed, the requested pages of all contexts are
                                                            closed. Defaults to CURRENT.</p>
                                                        <p><code>browser</code> &lt; <code>CURRENT</code> | <code>ALL</code> | str &gt; Id of the browser that
                                                            belongs to the page to be closed. If <code>ALL</code> is passed, the requested pages depending of the
                                                            context of all browsers are closed. Defaults to CURRENT.</p>
                                                        <p>Returns a list of dictionaries containing id, errors and console messages from the page.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="connect-to-browser">
                                                    <h4><a href="#connect-to-browser">Connect To Browser</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Connect to a playwright Browser. See `Browser, Context and Page` for more information
                                                            about Browser and related concepts.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>wsEndpoint</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>browser</td>
                                                                    <td>SupportedBrowsers</td>
                                                                    <td>chromium</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Connect to a playwright Browser. See <a href=" #Browser%2C-Context-and-Page" class="name">Browser, Context and Page</a> for more information about Browser and related concepts.
                                                        </p>
                                                        <p>Returns a stable identifier for the connected browser.</p>
                                                        <p><code>wsEndpoint</code> Address to connect to.</p>
                                                        <p><code>browser</code> Opens the specified browser. Defaults to chromium.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="delete-all-cookies">
                                                    <h4><a href="#delete-all-cookies">Delete All Cookies</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Deletes all cookies from the currently active browser context.</p>


                                                    </div>
                                                </div>

                                                <div class="keyword" id="deselect-options">
                                                    <h4><a href="#deselect-options">Deselect Options</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Deselects all options from select element found by ``selector``.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Deselects all options from select element found by <code>selector</code>.</p>
                                                        <p><code>selector</code> Selector of the select tag. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="download">
                                                    <h4><a href="#download">Download</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Download given url content.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>url</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p>Keyword returns dictionary which contains downloaded file path and suggested filename as keys (saveAs and
                                                            suggestedFilename). See <a href="#wait-for-download" class="name">Wait For Download</a> for more
                                                            details. Keyword requires that current active page has loaded valid html webpage.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="drag-and-drop">
                                                    <h4><a href="#drag-and-drop">Drag And Drop</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Executes a Drag&amp;Drop operation from the element selected by ``selector_from`` to the
                                                            element selected by ``selector_to``. See the `Finding elements` section for details about the selectors.
                                                        </p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector_from</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector_to</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>steps</td>
                                                                    <td>int</td>
                                                                    <td>1</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Executes a Drag&amp;Drop operation from the element selected by <code>selector_from</code> to the element
                                                            selected by <code>selector_to</code>. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p>First it moves the mouse to the start-point, then presses the left mouse button, then moves to the
                                                            end-point in specified number of steps, then releases the mouse button.</p>
                                                        <p>Start- and end-point are defined by the center of the elements boundingbox.</p>
                                                        <p><code>selector_from</code> identifies the element, which center is the start-point.</p>
                                                        <p><code>selector_to</code> identifies the element, which center is the end-point.</p>
                                                        <p><code>steps</code> defines how many intermediate mouse move events are sent.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="drag-and-drop-by-coordinates">
                                                    <h4><a href="#drag-and-drop-by-coordinates">Drag And Drop By Coordinates</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Executes a Drag&amp;Drop operation from a coordinate to another coordinate.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>from_x</td>
                                                                    <td>float</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>from_y</td>
                                                                    <td>float</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>to_x</td>
                                                                    <td>float</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>to_y</td>
                                                                    <td>float</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>steps</td>
                                                                    <td>int</td>
                                                                    <td>1</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p>First it moves the mouse to the start-point, then presses the left mouse button, then moves to the
                                                            end-point in specified number of steps, then releases the mouse button.</p>
                                                        <p>Start- and end-point are defined by <code>x</code> and <code>y</code> coordinates relative to the top
                                                            left corner of the pages viewport.</p>
                                                        <p><code>from_x</code> &amp; <code>from_y</code> identify the the start-point.</p>
                                                        <p><code>to_x</code> &amp; <code>to_y</code> identify the the end-point.</p>
                                                        <p><code>steps</code> defines how many intermediate mouse move events are sent.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="eat-all-cookies">
                                                    <h4><a href="#eat-all-cookies">Eat All Cookies</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Eat all cookies for all easter.</p>


                                                    </div>
                                                </div>

                                                <div class="keyword" id="execute-javascript">
                                                    <h4><a href="#execute-javascript">Execute JavaScript</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Executes given javascript on the page.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>function</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><code>function</code> A valid javascript function or a javascript function body. For example
                                                            <code>() =&gt; true</code> and <code>true</code> will behave similarly.
                                                        </p>
                                                        <p><code>selector</code> Selector to resolve and pass to the JavaScript function. This will be the first
                                                            argument the function receives. If given a selector a function is necessary, with an argument to capture
                                                            the elementhandle.</p>

                                                    </div>
                                                </div>

                                                <div class="keyword" id="fill-secret">
                                                    <h4><a href="#fill-secret">Fill Secret</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Fills the given secret from ``variable_name`` into the text field found by ``selector``.
                                                        </p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>secret</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Fills the given secret from <code>variable_name</code> into the text field found by
                                                            <code>selector</code>.
                                                        </p>
                                                        <p>This keyword does not log secret in Autosphere logs. If <code>enable_playwright_debug</code> is
                                                            enabled in the library import, secret will be always visible as plain text in the playwright debug logs,
                                                            regardless of the Autosphere log level.</p>
                                                        <p><code>selector</code> Selector of the text field. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p><code>secret</code> Environment variable name with % prefix or a local variable with $ prefix that has
                                                            the secret text value. Variable names can be used with and without curly braces.</p>
                                                        <p>Example: <code>$Password</code> and <code>${Password}</code> resolve the Autosphere variable.
                                                            <code>%ENV_PWD</code> and <code>%{ENV_PWD}</code> resolve to the environment variable
                                                            <code>ENV_PWD</code>.
                                                        </p>
                                                        <p>See <a href="#fill-text" class="name">Fill Text</a> for other details.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="fill-text">
                                                    <h4><a href="#fill-text">Fill Text</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Clears and fills the given ``text`` into the text field found by ``selector``.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>txt</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Clears and fills the given <code>text</code> into the text field found by <code>selector</code>.</p>
                                                        <p>This method waits for an element matching the <code>selector</code> to appear, waits for actionability
                                                            checks, focuses the element, fills it and triggers an input event after filling.</p>
                                                        <p>If the element matching selector is not an &lt;input&gt;, &lt;textarea&gt; or [contenteditable] element,
                                                            this method throws an error. Note that you can pass an empty string as <code>text</code> to clear the
                                                            input field.</p>
                                                        <p><code>selector</code> Selector of the text field. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p><code>txt</code> Text for the text field.</p>
                                                        <p>See <a href="#type-text" class="name">Type Text</a> for emulating typing text character by character.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="focus">
                                                    <h4><a href="#focus">Focus</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Moves focus on to the element found by ``selector``.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Moves focus on to the element found by <code>selector</code>.</p>
                                                        <p><code>selector</code> Selector of the element. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p>If there's no element matching selector, the method waits until a matching element appears in the DOM.
                                                            Timeouts after 10 seconds.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-attribute">
                                                    <h4><a href="#get-attribute">Get Attribute</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Returns the HTML ``attribute`` of the element found by ``selector``.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>attribute</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_operator</td>
                                                                    <td>AssertionOperator</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_expected</td>
                                                                    <td>Any</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>message</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Returns the HTML <code>attribute</code> of the element found by <code>selector</code>.</p>
                                                        <p>Optionally asserts that the attribute value matches the specified assertion.</p>
                                                        <p><code>selector</code> Selector from which the info is to be retrieved. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p><code>attribute</code> Requested attribute name.</p>
                                                        <p>When a attribute is selected that is not present and no assertion operator is set, the keyword fails. If
                                                            an assertion operator is set and the attribute is not present, the returned value is <code>None</code>.
                                                            This can be used to assert check the presents or the absents of an attribute.</p>
                                                        <p><code>message</code> overrides the default error message.</p>
                                                        <p>Example Element:</p>
                                                        <pre>&lt;button class="login button active" id="enabled_button" something&gt;Login&lt;/button&gt;
  </pre>
                                                        <p>Example Code:</p>
                                                        <pre>Get Attribute   id=enabled_button    disabled                   # FAIL =&gt; "Attribute 'disabled' not found!"
  Get Attribute   id=enabled_button    disabled     ==    None     # PASS =&gt; returns: None
  Get Attribute   id=enabled_button    something    evaluate    value is not None    # PASS =&gt;  returns: True
  Get Attribute   id=enabled_button    disabled     evaluate    value is None        # PASS =&gt;  returns: True
  </pre>
                                                        <p>See <a href=" #Assertions" class="name">Assertions</a>
                                                            for further details for the assertion arguments. Defaults to None.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-attribute-names">
                                                    <h4><a href="#get-attribute-names">Get Attribute Names</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Returns all HTML attribute names of an element as a list.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_operator</td>
                                                                    <td>AssertionOperator</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_expected</td>
                                                                    <td></td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>message</td>
                                                                    <td>str, None</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p>Optionally asserts that these match the specified assertion.</p>
                                                        <p><code>selector</code> Selector from which the info is to be retrieved. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p><code>assertion_operator</code> See <a href=" #Assertions" class="name">Assertions</a>
                                                            for further details. Defaults to None.</p>
                                                        <p>Available assertions:</p>
                                                        <ul>
                                                            <li><code>==</code> and <code>!=</code> can work with multiple values</li>
                                                            <li><code>contains</code> / <code>*=</code> only accepts one single expected value</li>
                                                        </ul>
                                                        <p>Other operators are not allowed.</p>
                                                        <p><code>message</code> overrides the default error message.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-boundingbox">
                                                    <h4><a href="#get-boundingbox">Get BoundingBox</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Gets elements size and location as an object ``{x: float, y: float, width: float,
                                                            height: float}``.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>key</td>
                                                                    <td>BoundingBoxFields</td>
                                                                    <td>ALL</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_operator</td>
                                                                    <td>AssertionOperator</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_expected</td>
                                                                    <td>Any</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>message</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Gets elements size and location as an object
                                                            <code>{x: float, y: float, width: float, height: float}</code>.
                                                        </p>
                                                        <p><code>selector</code> Selector from which shall be retrieved. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p><code>key</code> Optionally filters the returned values. If keys is set to <code>ALL</code> (default) it
                                                            will return the BoundingBox as Dictionary, otherwise it will just return the single value selected by
                                                            the key. Note: If a single value is retrieved, an assertion does <b>not</b> need a <code>validate</code>
                                                            combined with a cast of <code>value</code>.</p>
                                                        <p><code>message</code> overrides the default error message.</p>
                                                        <p>See <a href=" #Assertions" class="name">Assertions</a>
                                                            for further details for the assertion arguments. Defaults to None.</p>
                                                        <p>Example use:</p>
                                                        <pre>${bounding_box}=    Get BoundingBox    id=element                 # unfiltered
  Log                 ${bounding_box}                               # {'x': 559.09375, 'y': 75.5, 'width': 188.796875, 'height': 18}
  ${x}=               Get BoundingBox    id=element    x            # filtered
  Log                 X: ${x}                                       # X: 559.09375
  # Assertions:
  Get BoundingBox     id=element         width         &gt;    180
  Get BoundingBox     id=element         ALL           validate    value['x'] &gt; value['y']*2
  </pre>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-browser-catalog">
                                                    <h4><a href="#get-browser-catalog">Get Browser Catalog</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Returns all browsers, open contexts in them and open pages in these contexts. See
                                                            `Browser, Context and Page` for more information about these concepts.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_operator</td>
                                                                    <td>AssertionOperator</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_expected</td>
                                                                    <td>Any</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>message</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Returns all browsers, open contexts in them and open pages in these contexts. See <a href=" #Browser%2C-Context-and-Page" class="name">Browser, Context and Page</a> for more information about these concepts.</p>
                                                        <p><code>message</code> overrides the default error message.</p>
                                                        <p>The data is parsed into a python list containing data representing the open Objects.</p>
                                                        <p>On the root level the data contains a list of open browsers.</p>
                                                        <p>Data can be manipulated also with <code>assertion_operator</code> for example to find a specific id based
                                                            on index or page title with <code>then</code> operator.</p>
                                                        <p>Return value can also be asserted against expected value.</p>
                                                        <p>Sample:</p>
                                                        <pre>[
    {
      "type": "chromium",
      "id": "browser=96207191-8147-44e7-b9ac-5e04f2709c1d",
      "contexts": [
        {
          "type": "context",
          "id": "context=525d8e5b-3c4e-4baa-bfd4-dfdbc6e86089",
          "activePage": "page=f90c97b8-eaaf-47f2-98b2-ccefd3450f12",
          "pages": [
            {
              "type": "page",
              "title": "Autosphere",
              "url": "<a href="https://Autosphere.com/">https://Autosphere.com/</a>",
              "id": "page=7ac15782-22d2-48b4-8591-ff17663fa737",
              "timestamp": 1598607713.858
            },
            {
              "type": "page",
              "title": "Home - Reaktor",
              "url": "<a href="https://www.reaktor.com/">https://www.reaktor.com/</a>",
              "id": "page=f90c97b8-eaaf-47f2-98b2-ccefd3450f12",
              "timestamp": 1598607714.702
            }
          ]
        }
      ],
      "activeContext": "context=525d8e5b-3c4e-4baa-bfd4-dfdbc6e86089",
      "activeBrowser": false
    },
    {
      "type": "firefox",
      "id": "browser=ad99abac-17a9-472b-ac7f-d6352630834e",
      "contexts": [
        {
          "type": "context",
          "id": "context=bc64f1ba-5e76-46dd-9735-4bd344afb9c0",
          "activePage": "page=8baf2991-5eaf-444d-a318-8045f914e96a",
          "pages": [
            {
              "type": "page",
              "title": "Software-Qualitätssicherung und Softwaretest",
              "url": "<a href="https://www.imbus.de/">https://www.imbus.de/</a>",
              "id": "page=8baf2991-5eaf-444d-a318-8045f914e96a",
              "timestamp": 1598607716.828
            }
          ]
        }
      ],
      "activeContext": "context=bc64f1ba-5e76-46dd-9735-4bd344afb9c0",
      "activeBrowser": true
    }
  ]
  </pre>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-browser-ids">
                                                    <h4><a href="#get-browser-ids">Get Browser Ids</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Returns a list of ids from open browsers. See `Browser, Context and Page` for more
                                                            information about Browser and related concepts.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>browser</td>
                                                                    <td>SelectionType</td>
                                                                    <td>ALL</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Returns a list of ids from open browsers. See <a href=" #Browser%2C-Context-and-Page" class="name">Browser, Context and Page</a> for more information about Browser and related concepts.
                                                        </p>
                                                        <p><code>browser</code> Defaults to <code>ALL</code></p>
                                                        <ul>
                                                            <li><code>ALL</code> / <code>ANY</code> Returns all ids as a list.</li>
                                                            <li><code>ACTIVE</code> / <code>CURRENT</code> Returns the id of the currently active browser as list.
                                                            </li>
                                                        </ul>
                                                        <p>The ACTIVE browser is a synonym for the CURRENT Browser.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-checkbox-state">
                                                    <h4><a href="#get-checkbox-state">Get Checkbox State</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Returns the state of the checkbox found by ``selector``.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_operator</td>
                                                                    <td>AssertionOperator</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>expected_state</td>
                                                                    <td>bool, str</td>
                                                                    <td>Unchecked</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>message</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Returns the state of the checkbox found by <code>selector</code>.</p>
                                                        <p><code>selector</code> Selector which shall be examined. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p>Optionally asserts that the state matches the specified assertion.</p>
                                                        <p><code>assertion_operator</code> See <a href=" #Assertions" class="name">Assertions</a>
                                                            for further details. Defaults to None.</p>
                                                        <ul>
                                                            <li><code>==</code> and <code>!=</code> and equivalent are allowed on boolean values</li>
                                                            <li>other operators are not accepted.</li>
                                                        </ul>
                                                        <p><code>expected_state</code> boolean value of expected state. Strings are interpreted as booleans. All
                                                            strings are <code>${True}</code> except of the following FALSE, NO, OFF, 0, UNCHECKED, NONE, ${EMPTY}`.
                                                            (case-insensitive). Defaults to unchecked</p>
                                                        <ul>
                                                            <li><code>checked</code> =&gt; <code>True</code></li>
                                                            <li><code>unchecked</code> =&gt; <code>False</code></li>
                                                        </ul>
                                                        <p><code>message</code> overrides the default error message.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-classes">
                                                    <h4><a href="#get-classes">Get Classes</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Returns all classes of an element as a list.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_operator</td>
                                                                    <td>AssertionOperator</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_expected</td>
                                                                    <td></td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>message</td>
                                                                    <td>str, None</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p>Optionally asserts that the value matches the specified assertion.</p>
                                                        <p><code>selector</code> Selector from which the info is to be retrieved. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p><code>assertion_operator</code> See <a href=" #Assertions" class="name">Assertions</a>
                                                            for further details. Defaults to None.</p>
                                                        <p>Available assertions:</p>
                                                        <ul>
                                                            <li><code>==</code> and <code>!=</code> can work with multiple values</li>
                                                            <li><code>contains</code> / <code>*=</code> only accepts one single expected value</li>
                                                        </ul>
                                                        <p>Other operators are not allowed.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-client-size">
                                                    <h4><a href="#get-client-size">Get Client Size</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Gets elements or pages client size (``clientHeight``, ``clientWidth``) as object {width:
                                                            float, height: float}.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>key</td>
                                                                    <td>SizeFields</td>
                                                                    <td>ALL</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_operator</td>
                                                                    <td>AssertionOperator</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_expected</td>
                                                                    <td>Any</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>message</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Gets elements or pages client size (<code>clientHeight</code>, <code>clientWidth</code>) as object
                                                            {width: float, height: float}.</p>
                                                        <p><code>selector</code> Optional selector from which shall be retrieved. If no selector is given the client
                                                            size of the page itself is used (<code>document.scrollingElement</code>). See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p><code>key</code> Optionally filters the returned values. If keys is set to <code>ALL</code> (default) it
                                                            will return the scroll size as dictionary, otherwise it will just return the single value selected by
                                                            the key.</p>
                                                        <p><code>message</code> overrides the default error message.</p>
                                                        <p>See <a href=" #Assertions" class="name">Assertions</a>
                                                            for further details for the assertion arguments. Defaults to None.</p>
                                                        <p>See <a href="#get-boundingbox" class="name">Get BoundingBox</a> or <a href="#get-scroll-size" class="name">Get Scroll Size</a> for examples.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-context-ids">
                                                    <h4><a href="#get-context-ids">Get Context Ids</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Returns a list of context ids based on the browser selection. See `Browser, Context and
                                                            Page` for more information about Context and related concepts.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>context</td>
                                                                    <td>SelectionType</td>
                                                                    <td>ALL</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>browser</td>
                                                                    <td>SelectionType</td>
                                                                    <td>ALL</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Returns a list of context ids based on the browser selection. See <a href=" #Browser%2C-Context-and-Page" class="name">Browser, Context and Page</a> for more information about Context and related concepts.
                                                        </p>
                                                        <p><code>ALL</code> and <code>ANY</code> are synonyms. <code>ACTIVE</code> and <code>CURRENT</code> are also
                                                            synonyms.</p>
                                                        <p><code>context</code> Defaults to <code>ALL</code></p>
                                                        <ul>
                                                            <li><code>ALL</code> Returns all context ids as a list.</li>
                                                            <li><code>ACTIVE</code> Returns the id of the active context as a list.</li>
                                                        </ul>
                                                        <p><code>browser</code> Defaults to <code>ALL</code></p>
                                                        <ul>
                                                            <li><code>ALL</code> context ids from all open browsers shall be fetched.</li>
                                                            <li><code>ACTIVE</code> only context ids from the active browser shall be fetched.</li>
                                                        </ul>
                                                        <p>The ACTIVE context of the ACTIVE Browser is the <code>Current</code> Context.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-cookie">
                                                    <h4><a href="#get-cookie">Get Cookie</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Returns information of cookie with ``name`` as a Autosphere dot dictionary or a
                                                            string.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>cookie</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>return_type</td>
                                                                    <td>CookieType</td>
                                                                    <td>dictionary</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Returns information of cookie with <code>name</code> as a Autosphere dot dictionary or a string.</p>
                                                        <p><code>cookie</code> Name of the cookie to be retrieved.</p>
                                                        <p>If <code>return_type</code> is <code>dictionary</code> or <code>dict</code> then keyword returns a of
                                                            Autosphere. The dictionary contains all possible key value pairs of the cookie. If
                                                            <code>return_type</code> is <code>string</code> or <code>str</code>, then keyword returns the cookie as
                                                            a string in format: <code>name1=value1</code>. The return value contains only <code>name</code> and
                                                            <code>value</code> keys of the cookie.
                                                        </p>
                                                        <p>If no cookie is found with <code>name</code> keyword fails. The cookie dictionary contains details about
                                                            the cookie. Keys available in the dictionary are documented in the table below.</p>
                                                        <table border="1">
                                                            <tbody>
                                                                <tr>
                                                                    <td><b>Value</b></td>
                                                                    <td><b>Explanation</b></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>name</td>
                                                                    <td>The name of a cookie, mandatory.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>value</td>
                                                                    <td>Value of the cookie, mandatory.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>url</td>
                                                                    <td>Define the scope of the cookie, what URLs the cookies should be sent to.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>domain</td>
                                                                    <td>Specifies which hosts are allowed to receive the cookie.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>path</td>
                                                                    <td>Indicates a URL path that must exist in the requested URL, for example /.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>expiry</td>
                                                                    <td>Lifetime of a cookie. Returned as datatime object.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>httpOnly</td>
                                                                    <td>When true, the cookie is not accessible via JavaScript.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>secure</td>
                                                                    <td>When true, the cookie is only used with HTTPS connections.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>sameSite</td>
                                                                    <td>Attribute lets servers require that a cookie shouldn't be sent with cross-origin requests.
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>See <a href="https://playwright.dev/docs/api/class-browsercontext#browsercontextaddcookiescookies">playwright
                                                                documentation</a> for details about each attribute.</p>
                                                        <h4>Examples</h4>
                                                        <pre>${cookie}=        Get Cookie              Foobar
  Should Be Equal   ${cookie.value}         Tidii
  Should Be Equal   ${cookie.expiry.year}   ${2020}
  </pre>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-cookies">
                                                    <h4><a href="#get-cookies">Get Cookies</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Returns cookies from the current active browser context.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>return_type</td>
                                                                    <td>CookieType</td>
                                                                    <td>dictionary</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p>If <code>return_type</code> is <code>dictionary</code> or <code>dict</code> then keyword returns list of
                                                            Autosphere. The dictionary contains all possible key value pairs of the cookie. See <a href="#get-cookie" class="name">Get Cookie</a> keyword documentation about the dictionary keys and
                                                            values.</p>
                                                        <p>If <code>return_type</code> is <code>string</code> or <code>str</code>, then keyword returns the cookie
                                                            as a string in format: <code>name1=value1; name2=value2; name3=value3</code>. The return value contains
                                                            only <code>name</code> and <code>value</code> keys of the cookie.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-device">
                                                    <h4><a href="#get-device">Get Device</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Get a single device decriptor with name exactly matching name.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>name</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><code>name</code> Given name of the requested device. See Playwright's <a href="https://github.com/Microsoft/playwright/blob/master/src/server/deviceDescriptors.ts">deviceDescriptors.ts</a>
                                                            for a formatted list.</p>
                                                        <p>Allows a concise syntax to set website testing values to exact matches of specific mobile devices.</p>
                                                        <p>Use by passing to a context. After creating a context with devicedescriptor, before using ensure your
                                                            active page is on that context. Usage:</p>
                                                        <pre>${device}=          Get Device       iPhone X
  New Context         &amp;{device}
  New Page
  Get Viewport Size   # returns { "width": 375, "height": 812 }
  </pre>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-devices">
                                                    <h4><a href="#get-devices">Get Devices</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Returns a dict of all playwright device descriptors.</p>


                                                        <p>See Playwright's <a href="https://github.com/Microsoft/playwright/blob/master/src/server/deviceDescriptors.ts">deviceDescriptors.ts</a>
                                                            for a formatted list.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-element">
                                                    <h4><a href="#get-element">Get Element</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Returns a reference to a Playwright element handle.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p>The reference can be used in subsequent selectors.</p>
                                                        <p><code>selector</code> Selector from which shall be retrieved . See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-element-count">
                                                    <h4><a href="#get-element-count">Get Element Count</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Returns the count of elements found with ``selector``.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_operator</td>
                                                                    <td>AssertionOperator</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>expected_value</td>
                                                                    <td>int, str</td>
                                                                    <td>0</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>message</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Returns the count of elements found with <code>selector</code>.</p>
                                                        <p>Optionally asserts that the count matches the specified assertion.</p>
                                                        <p><code>selector</code> Selector which shall be counted. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p><code>assertion_operator</code> See <a href=" #Assertions" class="name">Assertions</a>
                                                            for further details. Defaults to None.</p>
                                                        <p><code>expected_value</code> Expected value for the counting</p>
                                                        <p><code>message</code> overrides the default error message.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-element-state">
                                                    <h4><a href="#get-element-state">Get Element State</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Get the given state from the element found by ``selector``.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>state</td>
                                                                    <td>ElementStateKey</td>
                                                                    <td>visible</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_operator</td>
                                                                    <td>AssertionOperator</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_expected</td>
                                                                    <td>bool</td>
                                                                    <td>True</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>message</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Get the given state from the element found by <code>selector</code>.</p>
                                                        <p>If the selector does satisfy the expected state it will return <code>True</code> otherwise
                                                            <code>False</code>.
                                                        </p>
                                                        <p><code>selector</code> Selector of the corresponding object. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p><code>state</code> Defaults to visible. Possible states are:</p>
                                                        <ul>
                                                            <li><code>attached</code> : to be present in DOM.</li>
                                                            <li><code>visible</code> : to have non-empty bounding box and no visibility:hidden.</li>
                                                            <li><code>disabled</code> : to be <code>disabled</code>. Can be used on &lt;button&gt;,
                                                                &lt;fieldset&gt;, &lt;input&gt;, &lt;optgroup&gt;, &lt;option&gt;, &lt;select&gt; and
                                                                &lt;textarea&gt;.</li>
                                                            <li><code>readonly</code> : to be <code>readOnly</code>. Can be used on &lt;input&gt; and
                                                                &lt;textarea&gt;.</li>
                                                            <li><code>selected</code> : to be <code>selected</code>. Can be used on &lt;option&gt;.</li>
                                                            <li><code>focused</code> : to be the <code>activeElement</code>.</li>
                                                            <li><code>checked</code> : to be <code>checked</code> . Can be used on &lt;input&gt;.</li>
                                                        </ul>
                                                        <p>Note that element must be attached to DOM to be able to fetch the state of <code>readonly</code> ,
                                                            <code>selectec</code> and <code>checked</code>. The other states are false if the requested element is
                                                            not attached.
                                                        </p>
                                                        <p>Note that element without any content or with display:none has an empty bounding box and is not
                                                            considered visible.</p>
                                                        <p><code>message</code> overrides the default error message.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-elements">
                                                    <h4><a href="#get-elements">Get Elements</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Returns a reference to playwright element handle for all matched elements by
                                                            ``selector``.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Returns a reference to playwright element handle for all matched elements by <code>selector</code>.</p>
                                                        <p><code>selector</code> Selector from which shall be retrieved. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-page-ids">
                                                    <h4><a href="#get-page-ids">Get Page Ids</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Returns a list of page ids based on the context and browser selection. See `Browser,
                                                            Context and Page` for more information about Page and related concepts.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>page</td>
                                                                    <td>SelectionType</td>
                                                                    <td>ALL</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>context</td>
                                                                    <td>SelectionType</td>
                                                                    <td>ALL</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>browser</td>
                                                                    <td>SelectionType</td>
                                                                    <td>ALL</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Returns a list of page ids based on the context and browser selection. See <a href=" #Browser%2C-Context-and-Page" class="name">Browser, Context and Page</a> for more information about Page and related concepts.</p>
                                                        <p><code>ALL</code> and <code>ANY</code> are synonyms. <code>ACTIVE</code> and <code>CURRENT</code> are also
                                                            synonyms.</p>
                                                        <p><code>page</code></p>
                                                        <ul>
                                                            <li><code>ALL</code> Returns all page ids as a list.</li>
                                                            <li><code>ACTIVE</code> Returns the id of the active page as a list.</li>
                                                        </ul>
                                                        <p><code>context</code></p>
                                                        <ul>
                                                            <li><code>ALL</code> page ids from all contexts shall be fetched.</li>
                                                            <li><code>ACTIVE</code> only page ids from the active context shall be fetched.</li>
                                                        </ul>
                                                        <p><code>browser</code></p>
                                                        <ul>
                                                            <li><code>ALL</code> page ids from all open browsers shall be fetched.</li>
                                                            <li><code>ACTIVE</code> only page ids from the active browser shall be fetched.</li>
                                                        </ul>
                                                        <h4>Examples</h4>
                                                        <pre>Test Case
      <a href="#new-page" class="name">New Page</a>    <a href="http://www.imbus.de">http://www.imbus.de</a>
      <a href="#new-page" class="name">New Page</a>    <a href="http://www.reaktor.com">http://www.reaktor.com</a>
      ${current_page}=   Get Page IDs    ACTIVE    ACTIVE    ACTIVE
      Log                Current page ID is: ${current_page}[0]
      ${all_pages}=      Get Page IDs    CURRENT   CURRENT   ALL
      Log Many           These are all Page IDs    @{all_pages}
  </pre>
                                                        <p>The ACTIVE page of the ACTIVE context of the ACTIVE Browser is the <code>Current</code> Page.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-page-source">
                                                    <h4><a href="#get-page-source">Get Page Source</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Gets pages HTML source as a string.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_operator</td>
                                                                    <td>AssertionOperator</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_expected</td>
                                                                    <td>Any</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>message</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><code>message</code> overrides the default error message.</p>
                                                        <p>Optionally does a string assertion.</p>
                                                        <p>See <a href=" #Assertions" class="name">Assertions</a>
                                                            for further details for the assertion arguments. Defaults to None.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-property">
                                                    <h4><a href="#get-property">Get Property</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Returns the ``property`` of the element found by ``selector``.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>property</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_operator</td>
                                                                    <td>AssertionOperator</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_expected</td>
                                                                    <td>Any</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>message</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Returns the <code>property</code> of the element found by <code>selector</code>.</p>
                                                        <p>Optionally asserts that the property value matches the specified assertion.</p>
                                                        <p><code>selector</code> Selector from which the info is to be retrieved. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p><code>property</code> Requested property name.</p>
                                                        <p>If <code>assertion_operator</code> is set and property is not found, <code>value</code> is
                                                            <code>None</code> and Keyword does not fail. See <a href="#get-attribute" class="name">Get Attribute</a>
                                                            for examples.
                                                        </p>
                                                        <p>See <a href=" #Assertions" class="name">Assertions</a>
                                                            for further details for the assertion arguments. Defaults to None.</p>
                                                        <p><code>message</code> overrides the default error message.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-scroll-position">
                                                    <h4><a href="#get-scroll-position">Get Scroll Position</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Gets elements or pages current scroll position as object ``{top: float, left: float,
                                                            bottom: float, right: float}``.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>key</td>
                                                                    <td>AreaFields</td>
                                                                    <td>ALL</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_operator</td>
                                                                    <td>AssertionOperator</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_expected</td>
                                                                    <td>Any</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>message</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Gets elements or pages current scroll position as object
                                                            <code>{top: float, left: float, bottom: float, right: float}</code>.
                                                        </p>
                                                        <p>It describes the rectangle which is visible of the scrollable content of that element. all values are
                                                            measured from position {top: 0, left: 0}.</p>
                                                        <p><code>top</code> uses js function scrollTop, <code>left</code> uses scrollLeft and <code>bottom</code>
                                                            and <code>right</code> are calculated with the client size.</p>
                                                        <p><code>selector</code> Optional selector from which shall be retrieved. If no selector is given the client
                                                            size of the page itself is used (<code>document.scrollingElement</code>). See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p><code>key</code> Optionally filters the returned values. If keys is set to <code>ALL</code> (default) it
                                                            will return the scroll position as dictionary, otherwise it will just return the single value selected
                                                            by the key.</p>
                                                        <p><code>message</code> overrides the default error message.</p>
                                                        <p>See <a href=" #Assertions" class="name">Assertions</a>
                                                            for further details for the assertion arguments. Defaults to None.</p>
                                                        <p>See <a href="#get-boundingbox" class="name">Get BoundingBox</a> or <a href="#get-scroll-size" class="name">Get Scroll Size</a> for examples.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-scroll-size">
                                                    <h4><a href="#get-scroll-size">Get Scroll Size</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Gets elements or pages scrollable size as object ``{width: float, height: float}``.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>key</td>
                                                                    <td>SizeFields</td>
                                                                    <td>ALL</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_operator</td>
                                                                    <td>AssertionOperator</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_expected</td>
                                                                    <td>Any</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>message</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Gets elements or pages scrollable size as object <code>{width: float, height: float}</code>.</p>
                                                        <p><code>selector</code> Optional selector from which shall be retrieved. If no selector is given the scroll
                                                            size of the page itself is used. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p><code>key</code> Optionally filters the returned values. If keys is set to <code>ALL</code> (default) it
                                                            will return the scroll size as dictionary, otherwise it will just return the single value selected by
                                                            the key.</p>
                                                        <p><code>message</code> overrides the default error message.</p>
                                                        <p>See <a href=" #Assertions" class="name">Assertions</a>
                                                            for further details for the assertion arguments. Defaults to None.</p>
                                                        <p>See <a href="#get-boundingbox" class="name">Get BoundingBox</a> for more similar examples.</p>
                                                        <p>Example use:</p>
                                                        <pre>${height}=         Get Scroll Size    height                          # filtered page by height
  Log                Width: ${height}                                   # Height: 58425
  ${scroll_size}=    Get Scroll Size    id=keyword-shortcuts-container  # unfiltered element
  Log                ${scroll_size}                                     # {'width': 253, 'height': 3036}
  </pre>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-select-options">
                                                    <h4><a href="#get-select-options">Get Select Options</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Returns attributes of options of a ``select`` element as a list of dictionaries.
                                                            Returned dictionaries have the following keys and their values "index", "value", "label" and "selected".
                                                        </p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_operator</td>
                                                                    <td>AssertionOperator</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_expected</td>
                                                                    <td>Any</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>message</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Returns attributes of options of a <code>select</code> element as a list of dictionaries. Returned
                                                            dictionaries have the following keys and their values "index", "value", "label" and "selected".</p>
                                                        <p>Optionally asserts that these match the specified assertion.</p>
                                                        <p><code>selector</code> Selector from which the info is to be retrieved. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p><code>assertion_operator</code> See <a href=" #Assertions" class="name">Assertions</a>
                                                            for further details. Defaults to None.</p>
                                                        <h4>Examples</h4>
                                                        <pre><a href="#get-select-options" class="name">Get Select Options</a>     //select[2]    validate  [v["label"] for v in value] == ["Email", "Mobile"]
  <a href="#get-select-options" class="name">Get Select Options</a>   select#names     validate  any(v["label"] == "Mikko" for v in value)
  </pre>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-selected-options">
                                                    <h4><a href="#get-selected-options">Get Selected Options</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Returns the specified attribute of selected options of the ``select`` element.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>option_attribute</td>
                                                                    <td>SelectAttribute</td>
                                                                    <td>label</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_operator</td>
                                                                    <td>AssertionOperator</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_expected</td>
                                                                    <td></td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Returns the specified attribute of selected options of the <code>select</code> element.</p>
                                                        <p>Optionally asserts that these match the specified assertion.</p>
                                                        <p><code>selector</code> Selector from which the info is to be retrieved. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p><code>option_attribute</code> Which attribute shall be returned/verified. Defaults to label.</p>
                                                        <p><code>assertion_operator</code> See <a href=" #Assertions" class="name">Assertions</a>
                                                            for further details. Defaults to None.</p>
                                                        <ul>
                                                            <li><code>==</code> and <code>!=</code> can work with multiple values</li>
                                                            <li><code>contains</code> / <code>*=</code> only accepts one single expected value</li>
                                                        </ul>
                                                        <p>Other operators are not allowed.</p>
                                                        <h4>Examples</h4>
                                                        <pre><a href="#select-options-by" class="name">Select Options By</a>      label                    //select[2]    Email      Mobile
  ${selected_list}         <a href="#get-selected-options" class="name">Get Selected Options</a>   //select[2]                                         # getter
  <a href="#get-selected-options" class="name">Get Selected Options</a>   //select[2]              label          ==       Mobile             Mail   #assertion content
  <a href="#select-options-by" class="name">Select Options By</a>      label                    select#names   2          4
  <a href="#get-selected-options" class="name">Get Selected Options</a>   select#names             index          ==       2                  4      #assertion index
  <a href="#get-selected-options" class="name">Get Selected Options</a>   select#names             label          *=         Mikko                     #assertion contain
  <a href="#get-selected-options" class="name">Get Selected Options</a>   select#names             label          validate   len(value) == 3           #assertion length
  </pre>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-style">
                                                    <h4><a href="#get-style">Get Style</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Gets the computed style properties of the element selected by ``selector``.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>key</td>
                                                                    <td>str</td>
                                                                    <td>ALL</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_operator</td>
                                                                    <td>AssertionOperator</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_expected</td>
                                                                    <td>Any</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>message</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Gets the computed style properties of the element selected by <code>selector</code>.</p>
                                                        <p>Optionally matches with any sequence assertion operator.</p>
                                                        <p><code>selector</code> Selector from which the style shall be retrieved. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p><code>key</code> Key of the requested CSS property. Retrieves "ALL" styles by default.</p>
                                                        <p>See <a href=" #Assertions" class="name">Assertions</a>
                                                            for further details for the assertion arguments. Defaults to None.</p>
                                                        <p><code>message</code> overrides the default error message.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-text">
                                                    <h4><a href="#get-text">Get Text</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Returns text attribute of the element found by ``selector``. See the `Finding elements`
                                                            section for details about the selectors.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_operator</td>
                                                                    <td>AssertionOperator</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_expected</td>
                                                                    <td>Any</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>message</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Returns text attribute of the element found by <code>selector</code>. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p>Optionally asserts that the text matches the specified assertion.</p>
                                                        <p>See <a href=" #Assertions" class="name">Assertions</a>
                                                            for further details for the assertion arguments. Defaults to None.</p>
                                                        <p><code>message</code> overrides the default error message.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-textfield-value">
                                                    <h4><a href="#get-textfield-value">Get Textfield Value</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">*DEPRECATED!!* Use keyword `Get Text` instead.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_operator</td>
                                                                    <td>AssertionOperator</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_expected</td>
                                                                    <td>Any</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>message</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p><b>DEPRECATED!!</b> Use keyword <a href="#get-text" class="name">Get Text</a> instead.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-title">
                                                    <h4><a href="#get-title">Get Title</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Returns the title of the current page.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_operator</td>
                                                                    <td>AssertionOperator</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_expected</td>
                                                                    <td>Any</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>message</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p>Optionally asserts that it matches the specified assertion.</p>
                                                        <p>See <a href=" #Assertions" class="name">Assertions</a>
                                                            for further details for the assertion arguments. Defaults to None.</p>
                                                        <p><code>message</code> overrides the default error message.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-url">
                                                    <h4><a href="#get-url">Get Url</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Returns the current URL.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_operator</td>
                                                                    <td>AssertionOperator</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_expected</td>
                                                                    <td>Any</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>message</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p>Optionally asserts that it matches the specified assertion.</p>
                                                        <p>See <a href=" #Assertions" class="name">Assertions</a>
                                                            for further details for the assertion arguments. Defaults to None.</p>
                                                        <p><code>message</code> overrides the default error message.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="get-viewport-size">
                                                    <h4><a href="#get-viewport-size">Get Viewport Size</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Returns the current viewport dimensions.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>key</td>
                                                                    <td>SizeFields</td>
                                                                    <td>ALL</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_operator</td>
                                                                    <td>AssertionOperator</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_expected</td>
                                                                    <td>Any</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>message</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p>Optionally asserts that the count matches the specified assertion.</p>
                                                        <p><code>key</code> Optionally filters the returned values. If keys is set to <code>ALL</code> (default) it
                                                            will return the viewport size as dictionary, otherwise it will just return the single value selected by
                                                            the key. Note: If a single value is retrieved, an assertion does <b>not</b> need a <code>validate</code>
                                                            combined with a cast of <code>value</code>.</p>
                                                        <p><code>message</code> overrides the default error message.</p>
                                                        <p>See <a href=" #Assertions" class="name">Assertions</a>
                                                            for further details for the assertion arguments. Defaults to None.</p>
                                                        <h4>Examples</h4>
                                                        <pre>Get Viewport Size    ALL    ==    {'width':1280, 'height':720}
  Get Viewport Size    width    &gt;=    1200
  </pre>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="go-back">
                                                    <h4><a href="#go-back">Go Back</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Navigates to the previous page in history.</p>


                                                    </div>
                                                </div>

                                                <div class="keyword" id="go-forward">
                                                    <h4><a href="#go-forward">Go Forward</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Navigates to the next page in history.</p>


                                                    </div>
                                                </div>

                                                <div class="keyword" id="go-to">
                                                    <h4><a href="#go-to">Go To</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Navigates to the given ``url``.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>url</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>timeout</td>
                                                                    <td>timedelta</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Navigates to the given <code>url</code>.</p>
                                                        <p><code>url</code> &lt;str&gt; URL to be navigated to. <code>timeout</code> &lt;str&gt; time to wait page
                                                            to load. If not defined will use the the library default timeout.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="handle-future-dialogs">
                                                    <h4><a href="#handle-future-dialogs">Handle Future Dialogs</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Handle next dialog on page with ``action``.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>action</td>
                                                                    <td>DialogAction</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>prompt_input</td>
                                                                    <td>str</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Handle next dialog on page with <code>action</code>.</p>
                                                        <p>Dialog can be any of alert, beforeunload, confirm or prompt. Handling dialogue must be called before the
                                                            action, like example click, that triggers the dialogue.</p>
                                                        <p>If a handler is not set dialogs are dismissed by default.</p>
                                                        <p><code>action</code> How to handle the alert.</p>
                                                        <p><code>prompt_input</code> The value to enter into prompt. Only valid if <code>action</code> equals
                                                            accept. Defaults to empty string.</p>
                                                        <h4>Examples</h4>
                                                        <pre>Handle Future Dialogs    action=accept
  Click                    \#alerts
  </pre>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="highlight-elements">
                                                    <h4><a href="#highlight-elements">Highlight Elements</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Adds a highlight to elements matched by the ``selector``. Provides a style adjustment.
                                                        </p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>duration</td>
                                                                    <td>timedelta</td>
                                                                    <td>0:00:05</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>width</td>
                                                                    <td>str</td>
                                                                    <td>2px</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>style</td>
                                                                    <td>str</td>
                                                                    <td>dotted</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>color</td>
                                                                    <td>str</td>
                                                                    <td>blue</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Adds a highlight to elements matched by the <code>selector</code>. Provides a style adjustment.</p>
                                                        <p><code>selector</code> Selectors which shall be highlighted. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p><code>duration</code> Sets for how long the selector shall be highlighted. Defaults to <code>5s</code>
                                                            =&gt; 5 seconds.</p>
                                                        <p><code>width</code> Sets the width of the higlight border. Defaults to 2px.</p>
                                                        <p><code>style</code> Sets the style of the border. Defaults to dotted.</p>
                                                        <p><code>color</code> Sets the color of the border. Valid colors i.e. are: <code>red</code>,
                                                            <code>blue</code>, <code>yellow</code>, <code>pink</code>, <code>black</code>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="hover">
                                                    <h4><a href="#hover">Hover</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Moves the virtual mouse and scrolls to the element found by ``selector``.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>position_x</td>
                                                                    <td>float</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>position_y</td>
                                                                    <td>float</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>force</td>
                                                                    <td>bool</td>
                                                                    <td>False</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>modifiers</td>
                                                                    <td>KeyboardModifier</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Moves the virtual mouse and scrolls to the element found by <code>selector</code>.</p>
                                                        <p>This method hovers over an element matching <code>selector</code> by performing the following steps:</p>
                                                        <ul>
                                                            <li>Find an element match matching <code>selector</code>. If there is none, wait until a matching
                                                                element is attached to the DOM.</li>
                                                            <li>Wait for actionability checks on the matched element, unless <code>force</code> option is set. If
                                                                the element is detached during the checks, the whole action is retried.</li>
                                                            <li>Scroll the element into view if needed.</li>
                                                            <li>Use <a href="#mouse-move" class="name">Mouse Move</a> to hover over the center of the element, or
                                                                the specified <code>position</code>.</li>
                                                        </ul>
                                                        <p><code>selector</code> Selector element to hover. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p><code>position_x</code> &amp; <code>position_y</code> A point to hover relative to the top-left corner of
                                                            element bounding box. If not specified, hovers over some visible point of the element. Only positive
                                                            values within the bounding-box are allowed.</p>
                                                        <p><code>force</code> Set to True to skip Playwright's <a href="https://playwright.dev/docs/actionability">Actionability checks</a>.</p>
                                                        <p><code>*modifiers</code> Modifier keys to press. Ensures that only these modifiers are pressed during the
                                                            hover, and then restores current modifiers back. If not specified, currently pressed modifiers are used.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="http">
                                                    <h4><a href="#http">Http</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Performs an HTTP request in the current browser context</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>url</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>method</td>
                                                                    <td>RequestMethod</td>
                                                                    <td>GET</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>body</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>headers</td>
                                                                    <td>dict</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p>Accepts the following arguments:</p>
                                                        <ul>
                                                            <li><code>url</code> The request url, e.g. <code>/api/foo</code>.</li>
                                                            <li><code>method</code> The HTTP method for the request. Defaults to GET.</li>
                                                            <li><code>body</code> The request body. GET requests cannot have a body. If the body can be parsed as
                                                                JSON, the <code>Content-Type</code> header for the request will be automatically set to
                                                                <code>application/json</code>. Defaults to None.
                                                            </li>
                                                            <li><code>headers</code> A dictionary of additional request headers. Defaults to None.</li>
                                                        </ul>
                                                        <p>The response is a Python dictionary with following attributes:</p>
                                                        <ul>
                                                            <li><code>status</code> &lt;int&gt; The status code of the response.</li>
                                                            <li><code>statusText</code> &lt;str&gt; Status text corresponding to <code>status</code>, e.g OK or
                                                                INTERNAL SERVER ERROR.</li>
                                                            <li><code>body</code> &lt;dict&gt; | &lt;str&gt; The response body. If the body can be parsed as a JSON
                                                                obejct, it will be returned as Python dictionary, otherwise it is returned as a string.</li>
                                                            <li><code>headers</code> &lt;dict&gt; A dictionary containing all response headers.</li>
                                                            <li><code>ok</code> &lt;bool&gt; Whether the request was successfull, i.e. the <code>status</code> is
                                                                range 200-299.</li>
                                                        </ul>
                                                        <p>Here's an example of using Autosphere dictionary variables and extended variable syntax to do
                                                            assertions on the response object:</p>
                                                        <pre>&amp;{res}=             HTTP                       /api/endpoint
  Should Be Equal     ${res.status}              200
  Should Be Equal     ${res.body.some_field}     some value
  </pre>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="keyboard-input">
                                                    <h4><a href="#keyboard-input">Keyboard Input</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Input text into page with virtual keyboard.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>action</td>
                                                                    <td>KeyboardInputAction</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>input</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>delay</td>
                                                                    <td></td>
                                                                    <td>0</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><code>action</code></p>
                                                        <ul>
                                                            <li><code>insertText</code> Dispatches only input event, does not emit the keydown, keyup or keypress
                                                                events.</li>
                                                        </ul>
                                                        <ul>
                                                            <li><code>type</code> Sends a keydown, keypress/input, and keyup event for each character in the text.
                                                            </li>
                                                        </ul>
                                                        <p><code>input</code> The inputstring to be typed. No special keys possible.</p>
                                                        <p>Note: To press a special key, like Control or ArrowDown, use keyboard.press. Modifier keys DO NOT effect
                                                            these methods. For testing modifier effects use single key presses with <code>Keyboard Key press</code>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="keyboard-key">
                                                    <h4><a href="#keyboard-key">Keyboard Key</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Press a keyboard key on the virtual keyboard or set a key up or down.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>action</td>
                                                                    <td>KeyAction</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>key</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><code>action</code> Determine whether the key should be released, hold or pressed. <code>down</code> or
                                                            <code>up</code> are useful for combinations i.e. with Shift.
                                                        </p>
                                                        <p><code>key</code> The key to be pressed. An example of valid keys are:</p>
                                                        <p><code>F1</code> - <code>F12</code>, <code>Digit0</code> - <code>Digit9</code>, <code>KeyA</code> -
                                                            <code>KeyZ</code>, <code>Backquote</code>, <code>Minus</code>, <code>Equal</code>,
                                                            <code>Backslash</code>, <code>Backspace</code>, <code>Tab</code>, <code>Delete</code>,
                                                            <code>Escape</code>, <code>ArrowDown</code>, <code>End</code>, <code>Enter</code>, <code>Home</code>,
                                                            <code>Insert</code>, <code>PageDown</code>, <code>PageUp</code>, <code>ArrowRight</code>,
                                                            <code>ArrowUp</code> , etc.
                                                        </p>
                                                        <p>Useful keys for <code>down</code> and <code>up</code> for example are:</p>
                                                        <p><code>Shift</code>, <code>Control</code>, <code>Alt</code>, <code>Meta</code>, <code>ShiftLeft</code></p>
                                                        <p>Example excecution:</p>
                                                        <pre>Keyboard Key    press    S
  Keyboard Key    down     Shift
  Keyboard Key    press    ArrowLeft
  Keyboard Key    press    Delete
  Keyboard Key    up       Shift
  </pre>
                                                        <p>Note: Capital letters don't need to be written by the help of Shift. You can type them in directly.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="localstorage-clear">
                                                    <h4><a href="#localstorage-clear">LocalStorage Clear</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Remove all saved data from the local storage.</p>


                                                    </div>
                                                </div>

                                                <div class="keyword" id="localstorage-get-item">
                                                    <h4><a href="#localstorage-get-item">LocalStorage Get Item</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Get saved data from the local storage.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>key</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_operator</td>
                                                                    <td>AssertionOperator</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_expected</td>
                                                                    <td>Any</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>message</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><code>key</code> Named key of the item in the storage.</p>
                                                        <p>See <a href=" #Assertions" class="name">Assertions</a>
                                                            for further details for the assertion arguments. Defaults to None.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="localstorage-remove-item">
                                                    <h4><a href="#localstorage-remove-item">LocalStorage Remove Item</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Remove saved data with key from the local storage.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>key</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><code>key</code> Name of the item which shall be deleted.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="localstorage-set-item">
                                                    <h4><a href="#localstorage-set-item">LocalStorage Set Item</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Save data to the local storage.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>key</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>value</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><code>key</code> The name of the key under which it should be saved.</p>
                                                        <p><code>value</code> The value which shall be saved as a string.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="mouse-button">
                                                    <h4><a href="#mouse-button">Mouse Button</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Clicks, presses or releases a mouse button.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>action</td>
                                                                    <td>MouseButtonAction</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>x</td>
                                                                    <td>float</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>y</td>
                                                                    <td>float</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>button</td>
                                                                    <td>MouseButton</td>
                                                                    <td>left</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>clickCount</td>
                                                                    <td>int</td>
                                                                    <td>1</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>delay</td>
                                                                    <td>int</td>
                                                                    <td>0</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><code>action</code> Determines if it is a mouseclick, holding down a key or releasing it.</p>
                                                        <p><code>x</code> and <code>y</code> Coordinates to move before.</p>
                                                        <p><code>button</code> Defaults to <code>left</code>.</p>
                                                        <p><code>clickCount</code> Determine how often shall be clicked. Defaults to 1.</p>
                                                        <p><code>delay</code> Delay in ms between the mousedown and mouseup event. Can only be set if the action is
                                                            click.</p>
                                                        <p>Moving the mouse between holding down and releasing it, is possible with <a href="#mouse-move" class="name">Mouse Move</a>.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="mouse-move">
                                                    <h4><a href="#mouse-move">Mouse Move</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Instead of selectors command mouse with coordinates. The Click commands will leave the
                                                            virtual mouse on the specified coordinates.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>x</td>
                                                                    <td>float</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>y</td>
                                                                    <td>float</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>steps</td>
                                                                    <td>int</td>
                                                                    <td>1</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><code>x</code> <code>y</code> are absolute coordinates starting at the top left of the page.</p>
                                                        <p><code>steps</code> Number of intermediate steps for the mouse event.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="mouse-move-relative-to">
                                                    <h4><a href="#mouse-move-relative-to">Mouse Move Relative To</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Moves the mouse cursor relative to the selected element.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>x</td>
                                                                    <td>float</td>
                                                                    <td>0.0</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>y</td>
                                                                    <td>float</td>
                                                                    <td>0.0</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>steps</td>
                                                                    <td>int</td>
                                                                    <td>1</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><code>x</code> <code>y</code> are relative coordinates to the center of the elements bounding box.</p>
                                                        <p><code>steps</code> Number of intermediate steps for the mouse event. This is sometime needed for websites
                                                            to recognize the movement.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="new-browser">
                                                    <h4><a href="#new-browser">New Browser</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Create a new playwright Browser with specified options. See `Browser, Context and Page`
                                                            for more information about Browser and related concepts.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>browser</td>
                                                                    <td>SupportedBrowsers</td>
                                                                    <td>chromium</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>headless</td>
                                                                    <td>bool</td>
                                                                    <td>True</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>executablePath</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>args</td>
                                                                    <td>List[str]</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>ignoreDefaultArgs</td>
                                                                    <td>List[str]</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>proxy</td>
                                                                    <td>Proxy</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>downloadsPath</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>handleSIGINT</td>
                                                                    <td>bool</td>
                                                                    <td>True</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>handleSIGTERM</td>
                                                                    <td>bool</td>
                                                                    <td>True</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>handleSIGHUP</td>
                                                                    <td>bool</td>
                                                                    <td>True</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>timeout</td>
                                                                    <td>timedelta</td>
                                                                    <td>0:00:30</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>env</td>
                                                                    <td>Dict</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>devtools</td>
                                                                    <td>bool</td>
                                                                    <td>False</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>slowMo</td>
                                                                    <td>timedelta</td>
                                                                    <td>0:00:00</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>channel</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Create a new playwright Browser with specified options. See <a href=" #Browser%2C-Context-and-Page" class="name">Browser, Context and Page</a> for more information about Browser and related concepts.
                                                        </p>
                                                        <p>Returns a stable identifier for the created browser.</p>
                                                        <p><code>browser</code> Opens the specified browser. Defaults to chromium.</p>
                                                        <p><code>headless</code> Set to False if you want a GUI. Defaults to False.</p>
                                                        <p><code>executablePath</code> Path to a browser executable to run instead of the bundled one. If
                                                            executablePath is a relative path, then it is resolved relative to current working directory. Note that
                                                            Playwright only works with the bundled Chromium, Firefox or WebKit, use at your own risk. Defaults to
                                                            None.</p>
                                                        <p><code>args</code> Additional arguments to pass to the browser instance. The list of Chromium flags can be
                                                            found <a href="http://peter.sh/experiments/chromium-command-line-switches/">here</a>. Defaults to None.
                                                        </p>
                                                        <p><code>ignoreDefaultArgs</code> If an array is given, then filters out the given default arguments.
                                                            Defaults to None.</p>
                                                        <p><code>proxy</code> Network proxy settings.</p>
                                                        <ul>
                                                            <li>server &lt;string&gt; Proxy to be used for all requests. HTTP and SOCKS proxies are supported, for
                                                                example <code>http://myproxy.com:3128</code> or <code>socks5://myproxy.com:3128</code>. Short form
                                                                <code>myproxy.com:3128</code> is considered an HTTP proxy.
                                                            </li>
                                                            <li>bypass &lt;string&gt; Optional coma-separated domains to bypass proxy, for example
                                                                <code>".com, chromium.org, .domain.com"</code>.
                                                            </li>
                                                            <li>username &lt;string&gt; Optional username to use if HTTP proxy requires authentication.</li>
                                                            <li>password &lt;string&gt; Optional password to use if HTTP proxy requires authentication.</li>
                                                        </ul>
                                                        <p><code>downloadsPath</code> If specified, accepted downloads are downloaded into this folder. Otherwise,
                                                            temporary folder is created and is deleted when browser is closed.</p>
                                                        <p><code>handleSIGINT</code> Close the browser process on Ctrl-C. Defaults to True.</p>
                                                        <p><code>handleSIGTERM</code> Close the browser process on SIGTERM. Defaults to True.</p>
                                                        <p><code>handleSIGHUP</code> Close the browser process on SIGHUP. Defaults to True.</p>
                                                        <p><code>timeout</code> Maximum time in milliseconds to wait for the browser instance to start. Defaults to
                                                            30000 (30 seconds). Pass 0 to disable timeout.</p>
                                                        <p><code>env</code> &lt;Dict&lt;str, str|int|bool&gt;&gt; Specify environment variables that will be visible
                                                            to the browser. Defaults to None.</p>
                                                        <p><code>devtools</code> Chromium-only Whether to auto-open a Developer Tools panel for each tab. If this
                                                            option is true, the headless option will be set false.</p>
                                                        <p><code>slowMo</code> Slows down Playwright operations by the specified amount of milliseconds. Useful so
                                                            that you can see what is going on. Defaults to no delay.</p>
                                                        <p><code>channel</code> Allows to operate against the stock Google Chrome and Microsoft Edge browsers. For
                                                            more details see: <a href="https://playwright.dev/docs/browsers/#google-chrome--microsoft-edge">Playwright
                                                                documentation</a>.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="new-context">
                                                    <h4><a href="#new-context">New Context</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Create a new BrowserContext with specified options. See `Browser, Context and Page` for
                                                            more information about BrowserContext.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>acceptDownloads</td>
                                                                    <td>bool</td>
                                                                    <td>False</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>ignoreHTTPSErrors</td>
                                                                    <td>bool</td>
                                                                    <td>False</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>bypassCSP</td>
                                                                    <td>bool</td>
                                                                    <td>False</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>viewport</td>
                                                                    <td>ViewportDimensions</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>userAgent</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>deviceScaleFactor</td>
                                                                    <td>float</td>
                                                                    <td>1.0</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>isMobile</td>
                                                                    <td>bool</td>
                                                                    <td>False</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>hasTouch</td>
                                                                    <td>bool</td>
                                                                    <td>False</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>javaScriptEnabled</td>
                                                                    <td>bool</td>
                                                                    <td>True</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>timezoneId</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>geolocation</td>
                                                                    <td>GeoLocation</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>locale</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>permissions</td>
                                                                    <td>List[str]</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>extraHTTPHeaders</td>
                                                                    <td>Dict[str, str]</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>offline</td>
                                                                    <td>bool</td>
                                                                    <td>False</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>httpCredentials</td>
                                                                    <td>HttpCredentials</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>colorScheme</td>
                                                                    <td>ColorScheme</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>proxy</td>
                                                                    <td>Proxy</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>videosPath</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>videoSize</td>
                                                                    <td>ViewportDimensions</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>defaultBrowserType</td>
                                                                    <td>SupportedBrowsers</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>hideRfBrowser</td>
                                                                    <td>bool</td>
                                                                    <td>False</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>recordVideo</td>
                                                                    <td>RecordVideo</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>recordHar</td>
                                                                    <td>RecordHar</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Create a new BrowserContext with specified options. See <a href=" #Browser%2C-Context-and-Page" class="name">Browser, Context and Page</a> for more information about BrowserContext.</p>
                                                        <p>Returns a stable identifier for the created context that can be used in <a href="#switch-context" class="name">Switch Context</a>.</p>
                                                        <p><code>acceptDownloads</code> Whether to automatically downloads all the attachments. Defaults to False
                                                            where all the downloads are canceled.</p>
                                                        <p><code>ignoreHTTPSErrors</code> Whether to ignore HTTPS errors during navigation. Defaults to False.</p>
                                                        <p><code>bypassCSP</code> Toggles bypassing page's Content-Security-Policy. Defaults to False.</p>
                                                        <p><code>viewport</code> Sets a consistent viewport for each page. Defaults to an
                                                            <code>{'width': 1280, 'height': 720}</code> viewport. Value of <code>viewport</code> can be a dict or a
                                                            string representation of a dictionary.
                                                        </p>
                                                        <p><code>userAgent</code> Specific user agent to use in this context.</p>
                                                        <p><code>deviceScaleFactor</code> Specify device scale factor (can be thought of as dpr). Defaults to 1.</p>
                                                        <p><code>isMobile</code> Whether the meta viewport tag is taken into account and touch events are enabled.
                                                            Defaults to False. Not supported in Firefox.</p>
                                                        <p><code>hasTouch</code> Specifies if viewport supports touch events. Defaults to False.</p>
                                                        <p><code>javaScriptEnabled</code> Whether or not to enable JavaScript in the context. Defaults to True.</p>
                                                        <p><code>timezoneId</code> Changes the timezone of the context. See <a href="https://source.chromium.org/chromium/chromium/src/+/master:third_party/icu/source/data/misc/metaZones.txt">ICU’s
                                                                metaZones.txt</a> for a list of supported timezone IDs.</p>
                                                        <p><code>geolocation</code> Sets the geolocation. No location is set by default.</p>
                                                        <ul>
                                                            <li><code>latitude</code> &lt;number&gt; Latitude between -90 and 90.</li>
                                                            <li><code>longitude</code> &lt;number&gt; Longitude between -180 and 180.</li>
                                                            <li><code>accuracy</code> Optional &lt;number&gt; Non-negative accuracy value. Defaults to 0.</li>
                                                        </ul>
                                                        <p>Example usage: <code>{'latitude': 59.95, 'longitude': 30.31667}</code></p>
                                                        <p><code>locale</code> Specify user locale, for example <code>en-GB</code>, <code>de-DE</code>, etc. Locale
                                                            will affect <code>navigator.language</code> value, <code>Accept-Language</code> request header value as
                                                            well as number and date formatting rules.</p>
                                                        <p><code>permissions</code> A list of permissions to grant to all pages in this context. See <a href="https://playwright.dev/docs/api/class-browsercontext#browsercontextgrantpermissionspermissions-options">grantPermissions</a>
                                                            for more details.</p>
                                                        <p><code>extraHTTPHeaders</code> A dictionary containing additional HTTP headers to be sent with every
                                                            request. All header values must be strings.</p>
                                                        <p><code>offline</code> Whether to emulate network being offline. Defaults to False.</p>
                                                        <p><code>httpCredentials</code> Credentials for <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Authentication">HTTP authentication</a>.</p>
                                                        <ul>
                                                            <li>example: <code>{'username': 'admin', 'password': '123456'}</code></li>
                                                            <li><code>username</code></li>
                                                            <li><code>password</code></li>
                                                        </ul>
                                                        <p><code>colorScheme</code> Emulates 'prefers-colors-scheme' media feature, supported values are 'light',
                                                            'dark', 'no-preference'. See <a href="https://playwright.dev/docs/api/class-page#pageemulatemediaparams">emulateMedia(options)</a>
                                                            for more details. Defaults to <code>light</code>.</p>
                                                        <p><code>proxy</code> Network proxy settings to use with this context. Note that browser needs to be
                                                            launched with the global proxy for this option to work. If all contexts override the proxy, global proxy
                                                            will be never used and can be any string</p>
                                                        <p><code>videosPath</code> is deprecated by playwright, use recordVideo instead. Enables video recording for
                                                            all pages to videosPath folder. If videosPath is not existing folder, videosPath folder is created under
                                                            ${OUTPUT_DIR}/browser/video/ folder. If videosPath is not specified, videos are not recorded.</p>
                                                        <p><code>videoSize</code> is deprecated by playwright, use recordVideo instead. Specifies dimensions of the
                                                            automatically recorded video. Can only be used if videosPath is set. If not specified the size will be
                                                            equal to viewport. If viewport is not configured explicitly the video size defaults to 1280x720. Actual
                                                            picture of the page will be scaled down if necessary to fit specified size.</p>
                                                        <ul>
                                                            <li>Example {"width": 1280, "height": 720}</li>
                                                        </ul>
                                                        <p><code>defaultBrowserType</code> If no browser is open and <a href="#new-context" class="name">New
                                                                Context</a> opens a new browser with defaults, it now uses this setting. Very useful together with
                                                            <a href="#get-device" class="name">Get Device</a> keyword:
                                                        </p>
                                                        <p><code>recordVideo</code> enables video recording for all pages into a folder. If not specified videos are
                                                            not recorded. Make sure to close context for videos to be saved. <code>recordVideo</code> is dictionary
                                                            containing dir and size keys. If dir is not existing folder, videosPath folder is created under
                                                            ${OUTPUT_DIR}/browser/video/ folder. size Optional dimensions of the recorded videos. If not specified
                                                            the size will be equal to viewport. If viewport is not configured explicitly the video size defaults to
                                                            1280x720. Actual picture of each page will be scaled down if necessary to fit the specified size. size
                                                            is dictionary containing width (Video frame width) and height (Video frame height) keys.</p>
                                                        <p><code>recordHar</code> Enables <a href="http://www.softwareishard.com/blog/har-12-spec/">HAR</a>
                                                            recording for all pages into to a file. Must be path to file, example ${OUTPUT_DIR}/har.file. If not
                                                            specified, the HAR is not recorded. Make sure to await context to close for the to be saved.</p>
                                                        <p>omitContent: Optional setting to control whether to omit request content from the HAR. Default is False
                                                            path: Path on the filesystem to write the HAR file to.</p>
                                                        <p>The ${OUTPUTDIR}/browser/ is removed at the first suite startup.</p>
                                                        <h4>Examples</h4>
                                                        <pre>Test an iPhone
      ${device}=    <a href="#get-device" class="name">Get Device</a>    iPhone X
      <a href="#new-context" class="name">New Context</a>    &amp;{device}        # unpacking here with &amp;
      <a href="#new-page" class="name">New Page</a>    <a href="http://example.com">http://example.com</a>
  </pre>
                                                        <p>A BrowserContext is the Playwright object that controls a single browser profile. Within a context caches
                                                            and cookies are shared. See <a href="https://playwright.dev/docs/api/class-browser#browsernewcontextoptions">Playwright
                                                                browser.newContext</a> for a list of supported options.</p>
                                                        <p>If there's no open Browser this keyword will open one. Does not create pages.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="new-page">
                                                    <h4><a href="#new-page">New Page</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Open a new Page. A Page is the Playwright equivalent to a tab. See `Browser, Context and
                                                            Page` for more information about Page concept. Returns a stable identifier for the created page.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>url</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Open a new Page. A Page is the Playwright equivalent to a tab. See <a href=" #Browser%2C-Context-and-Page" class="name">Browser, Context and Page</a> for more information about Page concept. Returns a stable
                                                            identifier for the created page.</p>
                                                        <p>When a <a href="#new-page" class="name">New Page</a> is called without an open browser, <a href="#new-browser" class="name">New Browser</a> and <a href="#new-context" class="name">New
                                                                Context</a> are executed with default values first.</p>
                                                        <p><code>url</code> If specified it will open the new page to the specified URL.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="open-browser">
                                                    <h4><a href="#open-browser">Open Browser</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Opens a new browser instance. Use this keyword for quick experiments or debugging
                                                            sessions. Use `New Page` directly instead of `Open Browser` for production and automated execution. See
                                                            `Browser, Context and Page` for more information about Browser and related concepts.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>url</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>browser</td>
                                                                    <td>SupportedBrowsers</td>
                                                                    <td>chromium</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>headless</td>
                                                                    <td>bool</td>
                                                                    <td>False</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>pause_on_failure</td>
                                                                    <td>bool</td>
                                                                    <td>True</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Opens a new browser instance. Use this keyword for quick experiments or debugging sessions. Use <a href="#new-page" class="name">New Page</a> directly instead of <a href="#open-browser" class="name">Open Browser</a> for production and automated execution. See <a href=" #Browser%2C-Context-and-Page" class="name">Browser, Context and Page</a> for more information about Browser and related concepts.
                                                        </p>
                                                        <p>Creates a new browser, context and page with specified settings. Only supports some of the settings
                                                            Create _ Keywords do</p>
                                                        <p><code>url</code> Navigates to URL if provided. Defaults to None.</p>
                                                        <p><code>browser</code> Specifies which browser to use. The supported browsers are listed in the table
                                                            below. The browser names are case-sensitive.</p>
                                                        <table border="1">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Value</th>
                                                                    <th>Name(s)</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>firefox</td>
                                                                    <td><a href="https://www.mozilla.org/en-US/firefox/new">Firefox</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>chromium</td>
                                                                    <td><a href="https://www.chromium.org/Home">Chromium</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>webkit</td>
                                                                    <td><a href="https://webkit.org/">webkit</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p><code>headless</code> If set to False, a GUI is provided otherwise it is hidden. Defaults to False.</p>
                                                        <p><code>pause_on_failure</code> Stop execution when failure detected and leave browser open. Defaults to
                                                            True.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="press-keys">
                                                    <h4><a href="#press-keys">Press Keys</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Types the given key combination into element found by ``selector``.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>keys</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Types the given key combination into element found by <code>selector</code>.</p>
                                                        <p><code>selector</code> Selector of the text field. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p>Supports values like "a, b" which will be automatically typed. . Also supports identifiers for keys like
                                                            <code>ArrowLeft</code> or <code>Backspace</code>. Using + to chain combine modifiers with a single
                                                            keypress <code>Control+Shift+T</code> is supported.
                                                        </p>
                                                        <p>See playwright's documentation for a more comprehensive list of supported input keys. <a href="https://playwright.dev/docs/api/class-page#pagepressselector-key-options">Playwright docs for
                                                                press.</a></p>
                                                        <h4>Examples</h4>
                                                        <pre># Keyword       Selector                    *Keys
  Press Keys      //*[@id="username_field"]    h    e   l   o   ArrowLeft   l
  </pre>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="promise-to">
                                                    <h4><a href="#promise-to">Promise To</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Wrap a Browser library keyword and make it a promise. Returns that promise and executes
                                                            the keyword on background.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>kw</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>args</td>
                                                                    <td></td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><code>kw</code> Keyword that will work async on background.</p>
                                                        <h4>Examples</h4>
                                                        <pre>${promise}=     Promise To            Wait For Response     matcher=     timeout=3
  Click           \#delayed_request
  ${body}=        Wait For              ${promise}
  </pre>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="promise-to-upload-file">
                                                    <h4><a href="#promise-to-upload-file">Promise To Upload File</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Returns a promise that resolves when file from ``path`` has been uploaded. Fails if the
                                                            upload has not happened during timeout.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>path</td>
                                                                    <td>PathLike</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Returns a promise that resolves when file from <code>path</code> has been uploaded. Fails if the upload
                                                            has not happened during timeout.</p>
                                                        <p>Upload file from <code>path</code> into next file chooser dialog on page.</p>
                                                        <p><code>path</code> Path to file to be uploaded.</p>
                                                        <p>Example use:</p>
                                                        <pre>${promise}=  Promise To Upload File    ${CURDIR}/test_upload_file
  Click          \#file_chooser
  ${upload_result}=  Wait For  ${promise}
  </pre>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="promise-to-wait-for-download">
                                                    <h4><a href="#promise-to-wait-for-download">Promise To Wait For Download</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Returns a promise that waits for next download event on page.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>saveAs</td>
                                                                    <td>str</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p>To enable downloads context's <code>acceptDownloads</code> needs to be true.</p>
                                                        <p>With default filepath downloaded files are deleted when Context the download happened in is closed.</p>
                                                        <p><code>saveAs</code> defines path where the file is saved. File will also temporarily be saved in
                                                            playwright context's default download location.</p>
                                                        <p>Waited promise returns a dictionary which contains saveAs and suggestedFilename as keys. The saveAs
                                                            contains where the file is downloaded and suggestedFilename contains the name suggested name for the
                                                            download. The suggestedFilename is typically computed by the browser from the Content-Disposition
                                                            response header or the download attribute. See the spec on <a href="https://html.spec.whatwg.org/#downloading-resources">whatwg</a>. Different browsers can use
                                                            different logic for computing it.</p>
                                                        <p>Example usage:</p>
                                                        <pre>New Context          acceptDownloads=True
  New Page             ${LOGIN_URL}
  ${dl_promise}        Promise To Wait For Download    /path/to/download/folder
  Click                \#file_download
  ${file_obj}=         Wait For  ${dl_promise}
  File Should Exist    ${file_obj}[saveAs]
  Should Be True       ${file_obj.suggestedFilename}
  </pre>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="register-keyword-to-run-on-failure">
                                                    <h4><a href="#register-keyword-to-run-on-failure">Register Keyword To Run On Failure</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Sets the keyword to execute, when a Browser keyword fails.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>keyword</td>
                                                                    <td>str, None</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><code>keyword</code> is the name of a keyword that will be executed if a Browser keyword fails. It is
                                                            possible to use any available keyword, including user keywords or keywords from other libraries, but the
                                                            keyword must not take any arguments.</p>
                                                        <p>The initial keyword to use is set when <a href=" #Importing" class="name">importing</a> the
                                                            library, and the keyword that is used by default is <a href="#take-screenshot" class="name">Take
                                                                Screenshot</a>. Taking a screenshot when something failed is a very useful feature, but notice that
                                                            it can slow down the execution.</p>
                                                        <p>It is possible to use string <code>NONE</code> or any other robot falsy name, case-insensitively, as well
                                                            as Python <code>None</code> to disable this feature altogether.</p>
                                                        <p>This keyword returns the name of the previously registered failure keyword or Python <code>None</code> if
                                                            this functionality was previously disabled. The return value can be always used to restore the original
                                                            value later.</p>
                                                        <h4>Examples</h4>
                                                        <pre><a href="#register-keyword-to-run-on-failure" class="name">Register Keyword To Run On Failure</a>    Take Screenshot
  ${previous kw}=    <a href="#register-keyword-to-run-on-failure" class="name">Register Keyword To Run On Failure</a>    NONE
  <a href="#register-keyword-to-run-on-failure" class="name">Register Keyword To Run On Failure</a>    ${previous kw}
  </pre>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="reload">
                                                    <h4><a href="#reload">Reload</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Reloads current active page.</p>


                                                    </div>
                                                </div>

                                                <div class="keyword" id="scroll-by">
                                                    <h4><a href="#scroll-by">Scroll By</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Scrolls an element or the page relative from current position by the given values.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>vertical</td>
                                                                    <td>str</td>
                                                                    <td>height</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>horizontal</td>
                                                                    <td>str</td>
                                                                    <td>0</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>behavior</td>
                                                                    <td>ScrollBehavior</td>
                                                                    <td>auto</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><code>selector</code> Selector of the element. If the selector is <code>${None}</code> or
                                                            <code>${Empty}</code> the page itself is scrolled. To ensure an element is in view use <a href="#hover" class="name">Hover</a> instead. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.
                                                        </p>
                                                        <p><code>vertical</code> defines how far and in which direction to scroll vertically. It can be a positive
                                                            or negative number. Positive scrolls down, like <code>50</code>, negative scrolls up, like
                                                            <code>-50</code>. It can be a percentage value of the absolute scrollable size, like <code>9.95%</code>
                                                            or negative like <code>-10%</code>. It can be the string <code>height</code> to defining to scroll
                                                            exactly one visible height down or up with <code>-height</code>. <i>Be aware that some pages do lazy
                                                                loading and load more content once you scroll down.</i> The percentage of the current scrollable
                                                            height is used and may change.
                                                        </p>
                                                        <p><code>horizontal</code> defines where to scroll horizontally. Works same as vertical but defines positive
                                                            values for right and negative values for left. <code>width</code> defines to scroll exactly one visible
                                                            range to the right.</p>
                                                        <p><code>behavior</code> defines whether the scroll happens directly or it scrolls smoothly.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="scroll-to">
                                                    <h4><a href="#scroll-to">Scroll To</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Scrolls an element or the page to an absolute position based on given coordinates.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>vertical</td>
                                                                    <td>str</td>
                                                                    <td>top</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>horizontal</td>
                                                                    <td>str</td>
                                                                    <td>left</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>behavior</td>
                                                                    <td>ScrollBehavior</td>
                                                                    <td>auto</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><code>selector</code> Selector of the element. If the selector is <code>${None}</code> or
                                                            <code>${Empty}</code> the page itself is scrolled. To ensure an element is in view use <a href="#hover" class="name">Hover</a> instead. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.
                                                        </p>
                                                        <p><code>vertical</code> defines where to scroll vertically. It can be a positive number, like
                                                            <code>300</code>. It can be a percentage value of the absolute scrollable size, like <code>50%</code>.
                                                            It can be a string defining that top or the bottom of the scroll area. &lt; <code>top</code> |
                                                            <code>bottom</code> &gt; <i>Be aware that some pages do lazy loading and load more content once you
                                                                scroll down.</i> Bottom defines the current known bottom coordinate.
                                                        </p>
                                                        <p><code>horizontal</code> defines where to scroll horizontally. Works same as vertical but defines &lt;
                                                            <code>left</code> | <code>right</code> &gt; as start and end.
                                                        </p>
                                                        <p><code>behavior</code> defines whether the scroll happens directly or it scrolls smoothly.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="select-options-by">
                                                    <h4><a href="#select-options-by">Select Options By</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Selects options from select element found by ``selector``.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>attribute</td>
                                                                    <td>SelectAttribute</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>values</td>
                                                                    <td></td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Selects options from select element found by <code>selector</code>.</p>
                                                        <p><code>selector</code> Selector of the select tag. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p>Matches based on the chosen attribute with list of <code>values</code>. Possible attributes to match
                                                            options by: <code>attribute</code></p>
                                                        <p>If no values to select are passed will deselect options in element.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="sessionstorage-clear">
                                                    <h4><a href="#sessionstorage-clear">SessionStorage Clear</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Remove all saved data from the session storage.</p>


                                                    </div>
                                                </div>

                                                <div class="keyword" id="sessionstorage-get-item">
                                                    <h4><a href="#sessionstorage-get-item">SessionStorage Get Item</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Get saved data from from session storage.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>key</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_operator</td>
                                                                    <td>AssertionOperator</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>assertion_expected</td>
                                                                    <td>Any</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><code>key</code> Named key of the item in the storage.</p>
                                                        <p>See <a href=" #Assertions" class="name">Assertions</a>
                                                            for further details for the assertion arguments. Defaults to None.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="sessionstorage-remove-item">
                                                    <h4><a href="#sessionstorage-remove-item">SessionStorage Remove Item</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Remove saved data with key from the session storage.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>key</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><code>key</code> Name of the item which shall be deleted.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="sessionstorage-set-item">
                                                    <h4><a href="#sessionstorage-set-item">SessionStorage Set Item</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Save data to session storage.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>key</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>value</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><code>key</code> The name of the key under which it should be saved.</p>
                                                        <p><code>value</code> The value which shall be saved as a string.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="set-browser-timeout">
                                                    <h4><a href="#set-browser-timeout">Set Browser Timeout</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Sets the timeout used by most input and getter keywords.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>timeout</td>
                                                                    <td>timedelta</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><code>timeout</code> Timeout of it is for current playwright context.</p>
                                                        <p>Returns the previous value of the timeout.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="set-geolocation">
                                                    <h4><a href="#set-geolocation">Set Geolocation</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Updated the correct Context's geolocation.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>latitude</td>
                                                                    <td>float</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>longitude</td>
                                                                    <td>float</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>accuracy</td>
                                                                    <td>float</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p>Latitude can be between -90 and 90 and longitude can be between -180 and 180.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="set-offline">
                                                    <h4><a href="#set-offline">Set Offline</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Toggles current Context's offline emulation.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>offline</td>
                                                                    <td>bool</td>
                                                                    <td>True</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><code>offline</code> Toggles the offline mode. Set to False to switch back to online mode. Defaults to
                                                            True.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="set-retry-assertions-for">
                                                    <h4><a href="#set-retry-assertions-for">Set Retry Assertions For</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Sets the timeout used in retrying assertions when they fail.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>timeout</td>
                                                                    <td>timedelta</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><code>timeout</code></p>
                                                        <p>Returns the previous value of the retry_assertions_until.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="set-viewport-size">
                                                    <h4><a href="#set-viewport-size">Set Viewport Size</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Sets current Pages viewport size to specified dimensions.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>width</td>
                                                                    <td>int</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>height</td>
                                                                    <td>int</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p>In the case of multiple pages in a single browser, each page can have its own viewport size. However, <a href="#new-context" class="name">New Context</a> allows to set viewport size (and more) for all
                                                            later opened pages in the context at once.</p>
                                                        <p><a href="#set-viewport-size" class="name">Set Viewport Size</a> will resize the page. A lot of websites
                                                            don't expect phones to change size, so you should set the viewport size before navigating to the page
                                                            with <a href="#new-context" class="name">New Context</a> before opening the page itself.</p>
                                                        <p><code>width</code> Sets the width size.</p>
                                                        <p><code>height</code> Sets the heigth size.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="switch-browser">
                                                    <h4><a href="#switch-browser">Switch Browser</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Switches the currently active Browser to another open Browser. Returns a stable
                                                            identifier for the previous browser. See `Browser, Context and Page` for more information about Browser
                                                            and related concepts.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>id</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Switches the currently active Browser to another open Browser. Returns a stable identifier for the
                                                            previous browser. See <a href=" #Browser%2C-Context-and-Page" class="name">Browser, Context and Page</a> for more information about Browser and related concepts.
                                                        </p>
                                                        <p><code>id</code> Id of the browser to be changed to. Starting at 0.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="switch-context">
                                                    <h4><a href="#switch-context">Switch Context</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Switches the active BrowserContext to another open context. Returns a stable identifier
                                                            for the previous context. See `Browser, Context and Page` for more information about Context and related
                                                            concepts.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>id</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>browser</td>
                                                                    <td>str</td>
                                                                    <td>CURRENT</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Switches the active BrowserContext to another open context. Returns a stable identifier for the previous
                                                            context. See <a href=" #Browser%2C-Context-and-Page" class="name">Browser, Context and Page</a> for more information about Context and related concepts.
                                                        </p>
                                                        <p><code>id</code> Id of the context to be changed to. Randomly generated UUID.</p>
                                                        <p><code>browser</code> &lt; <code>CURRENT</code> | str&gt; Switch context in specified browser. If value is
                                                            not "CURRENT" it should be an the id of the browser where to switch context.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="switch-page">
                                                    <h4><a href="#switch-page">Switch Page</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Switches the active browser page to another open page by ``id`` or ``NEW``. Returns a
                                                            stable identifier ``id`` for the previous page. See `Browser, Context and Page` for more information
                                                            about Page and related concepts.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>id</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>context</td>
                                                                    <td>str</td>
                                                                    <td>CURRENT</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>browser</td>
                                                                    <td>str</td>
                                                                    <td>CURRENT</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Switches the active browser page to another open page by <code>id</code> or <code>NEW</code>. Returns a
                                                            stable identifier <code>id</code> for the previous page. See <a href=" #Browser%2C-Context-and-Page" class="name">Browser, Context and Page</a> for more information about Page and related concepts.</p>
                                                        <p><code>id</code> &lt; <code>CURRENT</code> | <code>NEW </code> | str&gt; Id of the page to be changed to
                                                            or</p>
                                                        <p><code>NEW</code> for a page opened after the current page. This may timeout if no new pages exists before
                                                            library timeout. See <a href="#set-browser-timeout" class="name">Set Browser Timeout</a> for how to
                                                            change the timeout.</p>
                                                        <p>With <code>CURRENT</code> you can get the <code>id</code> of the "CURRENT" page</p>
                                                        <p><code>context</code> &lt; <code>CURRENT</code> | str&gt; Switch page in specified context. If value is
                                                            not "CURRENT" it should be the id of the context where to switch page.</p>
                                                        <p><code>browser</code> &lt; <code>CURRENT</code> | str&gt; Switch page in specified browser. If value is
                                                            not "CURRENT" it should be the id of the browser where to switch page.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="take-screenshot">
                                                    <h4><a href="#take-screenshot">Take Screenshot</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Takes a screenshot of the current window and saves it to ``path``. Saves it as a png.
                                                        </p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>filename</td>
                                                                    <td>str</td>
                                                                    <td>Autosphere-browser-screenshot-{index}</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>fullPage</td>
                                                                    <td>bool</td>
                                                                    <td>False</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>fileType</td>
                                                                    <td>ScreenshotFileTypes</td>
                                                                    <td>png</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>quality</td>
                                                                    <td>str</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>timeout</td>
                                                                    <td>timedelta</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Takes a screenshot of the current window and saves it to <code>path</code>. Saves it as a png.</p>
                                                        <p><code>filename</code> Filename into which to save. The file will be saved into the Autosphere
                                                            ${OUTPUTDIR}/browser/screenshot directory by default, but it can overwritten by providing custom path or
                                                            filename. String <code>{index}</code> in filename will be replaced with a rolling number. Use this to
                                                            not override filenames. If filename equals to EMBED (case insensitive), then screenshot is embedded as
                                                            Base64 image to the log.html. The image is saved temporally to the disk and warning is displayed if
                                                            removing the temporary file fails.</p>
                                                        <p>The ${OUTPUTDIR}/browser/ is removed at the first suite startup.</p>
                                                        <p><code>selector</code> Take a screenshot of the element matched by selector. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors. If not provided take a screenshot of current
                                                            viewport.</p>
                                                        <p><code>fullPage</code> When True, takes a screenshot of the full scrollable page, instead of the currently
                                                            visible viewport. Defaults to False.</p>
                                                        <p><code>fileType</code> &lt;"png"|"jpeg"&gt; Specify screenshot type, defaults to png.</p>
                                                        <p><code>quality</code> The quality of the image, between 0-100. Not applicable to png images.</p>
                                                        <p><code>timeout</code> Maximum time in milliseconds, defaults to 30 seconds, pass 0 to disable timeout. The
                                                            default value can be changed by using the <a href="#set-browser-timeout" class="name">Set Browser
                                                                Timeout</a> keyword.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="type-secret">
                                                    <h4><a href="#type-secret">Type Secret</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Types the given secret from ``variable_name`` into the text field found by ``selector``.
                                                        </p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>secret</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>delay</td>
                                                                    <td>timedelta</td>
                                                                    <td>0:00:00</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>clear</td>
                                                                    <td>bool</td>
                                                                    <td>True</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Types the given secret from <code>variable_name</code> into the text field found by
                                                            <code>selector</code>.
                                                        </p>
                                                        <p>This keyword does not log secret in Autosphere logs. If <code>enable_playwright_debug</code> is
                                                            enabled in the library import, secret will be always visible as plain text in the playwright debug logs,
                                                            regardless of the Autosphere log level.</p>
                                                        <p><code>selector</code> Selector of the text field. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p><code>secret</code> Environment variable name with % prefix or a local variable with $ prefix that has
                                                            the secret text value. Variable names can be used with and without curly braces.</p>
                                                        <p>Example: <code>$Password</code> and <code>${Password}</code> resolve the Autosphere variable.
                                                            <code>%ENV_PWD</code> and <code>%{ENV_PWD}</code> resolve to the environment variable
                                                            <code>ENV_PWD</code>.
                                                        </p>
                                                        <p><code>delay</code> Delay between the single key strokes. It may be either a number or a Autosphere
                                                            time string. Time strings are fully explained in an appendix of Autosphere User Guide. Defaults to
                                                            <code>0 ms</code>. Example: <code>50 ms</code>
                                                        </p>
                                                        <p><code>clear</code> Set to false, if the field shall not be cleared before typing. Defaults to true.</p>
                                                        <p>See <a href="#type-text" class="name">Type Text</a> for details.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="type-text">
                                                    <h4><a href="#type-text">Type Text</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Types the given ``txt`` into the text field found by ``selector``.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>txt</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>delay</td>
                                                                    <td>timedelta</td>
                                                                    <td>0:00:00</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>clear</td>
                                                                    <td>bool</td>
                                                                    <td>True</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Types the given <code>txt</code> into the text field found by <code>selector</code>.</p>
                                                        <p>Sends a <code>keydown</code>, <code>keypress/input</code>, and <code>keyup</code> event for each
                                                            character in the text.</p>
                                                        <p><code>selector</code> Selector of the text field. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p><code>txt</code> Text for the text field.</p>
                                                        <p><code>delay</code> Delay between the single key strokes. It may be either a number or a Autosphere
                                                            time string. Time strings are fully explained in an appendix of Autosphere User Guide. Defaults to
                                                            <code>0 ms</code>. Example: <code>50 ms</code>
                                                        </p>
                                                        <p><code>clear</code> Set to false, if the field shall not be cleared before typing. Defaults to true.</p>
                                                        <p>See <a href="#fill-text" class="name">Fill Text</a> for direct filling of the full text at once.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="uncheck-checkbox">
                                                    <h4><a href="#uncheck-checkbox">Uncheck Checkbox</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Unchecks the checkbox found by ``selector``.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Unchecks the checkbox found by <code>selector</code>.</p>
                                                        <p><code>selector</code> Selector of the checkbox. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p>Does nothing if the element is not checked/selected.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="upload-file">
                                                    <h4><a href="#upload-file">Upload File</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">*DEPRECATED!!* Use keyword `Promise To Upload File` instead. Upload file from ``path``
                                                            into next file chooser dialog on page.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>path</td>
                                                                    <td>PathLike</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p><b>DEPRECATED!!</b> Use keyword <a href="#promise-to-upload-file" class="name">Promise To Upload File</a>
                                                            instead. Upload file from <code>path</code> into next file chooser dialog on page.</p>
                                                        <p><code>path</code> Path to file to be uploaded.</p>
                                                        <p>Example use:</p>
                                                        <pre>Upload File    ${CURDIR}/test_upload_file
  Click          \#file_chooser
  </pre>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="wait-for">
                                                    <h4><a href="#wait-for">Wait For</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Waits for promises to finish and returns results from them. Returns one result if one
                                                            promise waited. Otherwise returns an array of results. If one fails, then this keyword will fail.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>promises</td>
                                                                    <td>Future</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><code>promises</code> <b>Work in progress</b></p>
                                                        <h4>Examples</h4>
                                                        <pre>${promise}=     Promise To            Wait For Response     matcher=     timeout=3
  Click           \#delayed_request
  ${body}=        Wait For              ${promise}
  </pre>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="wait-for-all-promises">
                                                    <h4><a href="#wait-for-all-promises">Wait For All Promises</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Waits for all promises to finish. If one fails, then this keyword will fail.</p>


                                                    </div>
                                                </div>

                                                <div class="keyword" id="wait-for-download">
                                                    <h4><a href="#wait-for-download">Wait For Download</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">*DEPRECATED!!* Use keyword `Promise To Wait For Download` instead.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>saveAs</td>
                                                                    <td>str</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p><b>DEPRECATED!!</b> Use keyword <a href="#promise-to-wait-for-download" class="name">Promise To Wait For
                                                                Download</a> instead.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="wait-for-elements-state">
                                                    <h4><a href="#wait-for-elements-state">Wait For Elements State</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Waits for the element found by ``selector`` to satisfy state option.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>state</td>
                                                                    <td>ElementState</td>
                                                                    <td>visible</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>timeout</td>
                                                                    <td>timedelta</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>message</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Waits for the element found by <code>selector</code> to satisfy state option.</p>
                                                        <p>State options could be either appear/disappear from dom, or become visible/hidden. If at the moment of
                                                            calling the keyword, the selector already satisfies the condition, the keyword will return immediately.
                                                        </p>
                                                        <p>If the selector doesn't satisfy the condition within the timeout the keyword will FAIL.</p>
                                                        <p><code>selector</code> Selector of the corresponding object. See the <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.</p>
                                                        <p><code>state</code> See <a href=" #ElementState" class="name">ElementState</a> for explaination.</p>
                                                        <p>Note that element without any content or with display:none has an empty bounding box and is not
                                                            considered visible.</p>
                                                        <p><code>timeout</code> uses default timeout of 10 seconds if not set.</p>
                                                        <p><code>message</code> overrides the default error message. The <code>message</code> argument accepts
                                                            {selector}, {function}, and {timeout} <a href="https://docs.python.org/3/library/stdtypes.html#str.format">format</a> options. The {function}
                                                            formatter is same <code>state</code> argument value.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="wait-for-function">
                                                    <h4><a href="#wait-for-function">Wait For Function</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Polls JavaScript expression or function in browser until it returns a (JavaScript)
                                                            truthy value.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>function</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>selector</td>
                                                                    <td>str</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>polling</td>
                                                                    <td>str, timedelta</td>
                                                                    <td>raf</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>timeout</td>
                                                                    <td>timedelta</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>message</td>
                                                                    <td>str</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><code>function</code> A valid javascript function or a javascript function body. For example
                                                            <code>() =&gt; true</code> and <code>true</code> will behave similarly.
                                                        </p>
                                                        <p><code>selector</code> Selector to resolve and pass to the JavaScript function. This will be the first
                                                            argument the function receives. If given a selector a function is necessary, with an argument to capture
                                                            the elementhandle. For example <code>(element) =&gt; document.activeElement === element</code> See the
                                                            <a href=" #Finding-elements" class="name">Finding
                                                                elements</a> section for details about the selectors.
                                                        </p>
                                                        <p><code>polling</code> Default polling value of "raf" polls in a callback for
                                                            <code>requestAnimationFrame</code>. Any other value for polling will be parsed as a Autosphere time
                                                            for interval between polls.
                                                        </p>
                                                        <p><code>timeout</code> Uses default timeout of 10 seconds if not set.</p>
                                                        <p><code>message</code> overrides the default error message. The <code>message</code> argument accepts
                                                            {selector}, {function}, and {timeout} <a href="https://docs.python.org/3/library/stdtypes.html#str.format">format</a> options.</p>
                                                        <p>Example usage:</p>
                                                        <pre>${promise}    Promise To      Wait For Function    element =&gt; element.style.width=="100%"    selector=\#progress_bar    timeout=4s
  Click         \#progress_bar
  Wait For      ${promise}
  </pre>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="wait-for-navigation">
                                                    <h4><a href="#wait-for-navigation">Wait For Navigation</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Waits until page has navigated to given ``url``.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>url</td>
                                                                    <td>str</td>
                                                                    <td>null</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>timeout</td>
                                                                    <td>timedelta</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Waits until page has navigated to given <code>url</code>.</p>
                                                        <p><code>url</code> expected navigation target address.</p>
                                                        <p><code>timeout</code> Timeout in milliseconds. Uses default timeout of 10 seconds if not set.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="wait-for-request">
                                                    <h4><a href="#wait-for-request">Wait For Request</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Waits for request matching matcher to be made.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>matcher</td>
                                                                    <td>str</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>timeout</td>
                                                                    <td>timedelta</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><code>matcher</code> Request URL string, JavaScript regex or JavaScript function to match request by. By
                                                            default (with empty string) matches first available request.</p>
                                                        <p><code>timeout</code> Timeout in seconds. Uses default timeout if not set.</p>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="wait-for-response">
                                                    <h4><a href="#wait-for-response">Wait For Response</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Waits for response matching matcher and returns python dict with contents.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>matcher</td>
                                                                    <td>str</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>timeout</td>
                                                                    <td>timedelta</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p><code>matcher</code> Request URL string, JavaScript regex or JavaScript function to match request by. By
                                                            default (with empty string) matches first available request.</p>
                                                        <p><code>timeout</code> Timeout in seconds. Uses default timeout if not set.</p>
                                                        <p>The response is a Python dictionary with following attributes:</p>
                                                        <ul>
                                                            <li><code>status</code> &lt;int&gt; The status code of the response.</li>
                                                            <li><code>statusText</code> &lt;str&gt; Status text corresponding to <code>status</code>, e.g OK or
                                                                INTERNAL SERVER ERROR.</li>
                                                            <li><code>body</code> &lt;dict | str&gt; The response body. If the body can be parsed as a JSON obejct,
                                                                it will be returned as Python dictionary, otherwise it is returned as a string.</li>
                                                            <li><code>headers</code> &lt;dict&gt; A dictionary containing all response headers.</li>
                                                            <li><code>ok</code> &lt;bool&gt; Whether the request was successfull, i.e. the <code>status</code> is
                                                                range 200-299.</li>
                                                            <li><code>request</code> &lt;dict&gt; containing <code>method</code> &lt;str&gt;, <code>headers</code>
                                                                &lt;dict&gt; and <code>postData</code> &lt;dict&gt; | &lt;str&gt;</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="keyword" id="wait-until-network-is-idle">
                                                    <h4><a href="#wait-until-network-is-idle">Wait Until Network Is Idle</a>

                                                    </h4>

                                                    <div>
                                                        <p class="shortdoc">Waits until there has been at least one instance of 500 ms of no network traffic on the
                                                            page after loading.</p>
                                                        <h4>Arguments</h4>
                                                        <table class="arguments">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Argument</th>
                                                                    <th>Type</th>
                                                                    <th>Default value</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>timeout</td>
                                                                    <td>timedelta</td>
                                                                    <td>None</td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <p>Doesn't wait for network traffic that wasn't initiated within 500ms of page load.</p>
                                                        <p><code>timeout</code> Timeout in milliseconds. Uses default timeout of 10 seconds if not set.</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <aside class="sc-iJuUWI jaFBcT">
                                            <form>
                                                <h5>Keywords</h5>
                                                <fieldset class="sc-eCssSg eeeqEu">
                                                    <input type="text" id="myInput" onkeyup="myFunction()" aria-label="Filter keywords" placeholder="Filter keywords" value="" />
                                                    <svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.327 11.376L8.846 7.9A4.824 4.824 0 107.483 9.26l3.479 3.48s.661.703 1.365 0c.703-.703 0-1.365 0-1.365zM6.87 7.284a2.897 2.897 0 01-4.093 0 2.897 2.897 0 010-4.093 2.897 2.897 0 014.093 0 2.897 2.897 0 010 4.093z" fill="#fff"></path>
                                                    </svg>
                                                </fieldset>
                                            </form>
                                            <div>
                                                <ul id="myUL" style="list-style-type: none; padding: 0; margin: 0;">
                                                    <li><a id="link-add-cookie" href=" #add-cookie" class="">Add Cookie</a></li>
                                                    <li><a id="link-add-style-tag" href=" #add-style-tag" class="">Add Style Tag</a></li>
                                                    <li><a id="link-check-checkbox" href=" #check-checkbox" class="">Check Checkbox</a></li>
                                                    <li><a id="link-clear-text" href=" #clear-text" class="">Clear Text</a></li>
                                                    <li><a id="link-click" href=" #click" class="">Click</a></li>
                                                    <li><a id="link-close-browser" href=" #close-browser" class="">Close Browser</a></li>
                                                    <li><a id="link-close-context" href=" #close-context" class="">Close Context</a></li>
                                                    <li><a id="link-close-page" href=" #close-page" class="">Close Page</a></li>
                                                    <li><a id="link-connect-to-browser" href=" #connect-to-browser" class="">Connect To Browser</a></li>
                                                    <li><a id="link-delete-all-cookies" href=" #delete-all-cookies" class="">Delete All Cookies</a></li>
                                                    <li><a id="link-deselect-options" href=" #deselect-options" class="">Deselect Options</a></li>
                                                    <li><a id="link-download" href=" #download" class="">Download</a></li>
                                                    <li><a id="link-drag-and-drop" href=" #drag-and-drop" class="">Drag And Drop</a></li>
                                                    <li><a id="link-drag-and-drop-by-coordinates" href=" #drag-and-drop-by-coordinates" class="">Drag And Drop By Coordinates</a></li>
                                                    <li><a id="link-eat-all-cookies" href=" #eat-all-cookies" class="">Eat All Cookies</a></li>
                                                    <li><a id="link-execute-javascript" href=" #execute-javascript" class="">Execute JavaScript</a></li>
                                                    <li><a id="link-fill-secret" href=" #fill-secret" class="">Fill Secret</a></li>
                                                    <li><a id="link-fill-text" href=" #fill-text" class="">Fill Text</a></li>
                                                    <li><a id="link-focus" href=" #focus" class="">Focus</a></li>
                                                    <li><a id="link-get-attribute" href=" #get-attribute" class="">Get Attribute</a></li>
                                                    <li><a id="link-get-attribute-names" href=" #get-attribute-names" class="">Get Attribute Names</a></li>
                                                    <li><a id="link-get-boundingbox" href=" #get-boundingbox" class="">Get BoundingBox</a></li>
                                                    <li><a id="link-get-browser-catalog" href=" #get-browser-catalog" class="">Get Browser Catalog</a></li>
                                                    <li><a id="link-get-browser-ids" href=" #get-browser-ids" class="">Get Browser Ids</a></li>
                                                    <li><a id="link-get-checkbox-state" href=" #get-checkbox-state" class="">Get Checkbox State</a></li>
                                                    <li><a id="link-get-classes" href=" #get-classes" class="">Get Classes</a></li>
                                                    <li><a id="link-get-client-size" href=" #get-client-size" class="">Get Client Size</a></li>
                                                    <li><a id="link-get-context-ids" href=" #get-context-ids" class="">Get Context Ids</a></li>
                                                    <li><a id="link-get-cookie" href=" #get-cookie" class="">Get Cookie</a></li>
                                                    <li><a id="link-get-cookies" href=" #get-cookies" class="">Get Cookies</a></li>
                                                    <li><a id="link-get-device" href=" #get-device" class="">Get Device</a></li>
                                                    <li><a id="link-get-devices" href=" #get-devices" class="">Get Devices</a></li>
                                                    <li><a id="link-get-element" href=" #get-element" class="">Get Element</a></li>
                                                    <li><a id="link-get-element-count" href=" #get-element-count" class="">Get Element Count</a></li>
                                                    <li><a id="link-get-element-state" href=" #get-element-state" class="">Get Element State</a></li>
                                                    <li><a id="link-get-elements" href=" #get-elements" class="">Get Elements</a></li>
                                                    <li><a id="link-get-page-ids" href=" #get-page-ids" class="">Get Page Ids</a></li>
                                                    <li><a id="link-get-page-source" href=" #get-page-source" class="">Get Page Source</a></li>
                                                    <li><a id="link-get-property" href=" #get-property" class="">Get Property</a></li>
                                                    <li><a id="link-get-scroll-position" href=" #get-scroll-position" class="">Get Scroll Position</a></li>
                                                    <li><a id="link-get-scroll-size" href=" #get-scroll-size" class="">Get Scroll Size</a></li>
                                                    <li><a id="link-get-select-options" href=" #get-select-options" class="">Get Select Options</a></li>
                                                    <li><a id="link-get-selected-options" href=" #get-selected-options" class="">Get Selected Options</a></li>
                                                    <li><a id="link-get-style" href=" #get-style" class="">Get Style</a></li>
                                                    <li><a id="link-get-text" href=" #get-text" class="">Get Text</a></li>
                                                    <li><a id="link-get-textfield-value" href=" #get-textfield-value" class="">Get Textfield Value</a></li>
                                                    <li><a id="link-get-title" href=" #get-title" class="">Get Title</a></li>
                                                    <li><a id="link-get-url" href=" #get-url" class="">Get Url</a></li>
                                                    <li><a id="link-get-viewport-size" href=" #get-viewport-size" class="">Get Viewport Size</a></li>
                                                    <li><a id="link-go-back" href=" #go-back" class="">Go Back</a></li>
                                                    <li><a id="link-go-forward" href=" #go-forward" class="">Go Forward</a></li>
                                                    <li><a id="link-go-to" href=" #go-to" class="">Go To</a></li>
                                                    <li><a id="link-handle-future-dialogs" href=" #handle-future-dialogs" class="">Handle Future Dialogs</a></li>
                                                    <li><a id="link-highlight-elements" href=" #highlight-elements" class="">Highlight Elements</a></li>
                                                    <li><a id="link-hover" href=" #hover" class="">Hover</a></li>
                                                    <li><a id="link-http" href=" #http" class="">Http</a></li>
                                                    <li><a id="link-keyboard-input" href=" #keyboard-input" class="">Keyboard Input</a></li>
                                                    <li><a id="link-keyboard-key" href=" #keyboard-key" class="">Keyboard Key</a></li>
                                                    <li><a id="link-localstorage-clear" href=" #localstorage-clear" class="">LocalStorage Clear</a></li>
                                                    <li><a id="link-localstorage-get-item" href=" #localstorage-get-item" class="">LocalStorage Get Item</a></li>
                                                    <li><a id="link-localstorage-remove-item" href=" #localstorage-remove-item" class="">LocalStorage Remove Item</a></li>
                                                    <li><a id="link-localstorage-set-item" href=" #localstorage-set-item" class="">LocalStorage Set Item</a></li>
                                                    <li><a id="link-mouse-button" href=" #mouse-button" class="">Mouse Button</a></li>
                                                    <li><a id="link-mouse-move" href=" #mouse-move" class="">Mouse Move</a></li>
                                                    <li><a id="link-mouse-move-relative-to" href=" #mouse-move-relative-to" class="">Mouse Move Relative To</a></li>
                                                    <li><a id="link-new-browser" href=" #new-browser" class="">New Browser</a></li>
                                                    <li><a id="link-new-context" href=" #new-context" class="">New Context</a></li>
                                                    <li><a id="link-new-page" href=" #new-page" class="">New Page</a></li>
                                                    <li><a id="link-open-browser" href=" #open-browser" class="">Open Browser</a></li>
                                                    <li><a id="link-press-keys" href=" #press-keys" class="">Press Keys</a></li>
                                                    <li><a id="link-promise-to" href=" #promise-to" class="">Promise To</a></li>
                                                    <li><a id="link-promise-to-upload-file" href=" #promise-to-upload-file" class="">Promise To Upload File</a></li>
                                                    <li><a id="link-promise-to-wait-for-download" href=" #promise-to-wait-for-download" class="">Promise To Wait For Download</a></li>
                                                    <li><a id="link-register-keyword-to-run-on-failure" href=" #register-keyword-to-run-on-failure" class="">Register Keyword To Run On Failure</a></li>
                                                    <li><a id="link-reload" href=" #reload" class="">Reload</a></li>
                                                    <li><a id="link-scroll-by" href=" #scroll-by" class="">Scroll By</a></li>
                                                    <li><a id="link-scroll-to" href=" #scroll-to" class="">Scroll To</a></li>
                                                    <li><a id="link-select-options-by" href=" #select-options-by" class="">Select Options By</a></li>
                                                    <li><a id="link-sessionstorage-clear" href=" #sessionstorage-clear" class="">SessionStorage Clear</a></li>
                                                    <li><a id="link-sessionstorage-get-item" href=" #sessionstorage-get-item" class="">SessionStorage Get Item</a></li>
                                                    <li><a id="link-sessionstorage-remove-item" href=" #sessionstorage-remove-item" class="">SessionStorage Remove Item</a></li>
                                                    <li><a id="link-sessionstorage-set-item" href=" #sessionstorage-set-item" class="">SessionStorage Set Item</a></li>
                                                    <li><a id="link-set-browser-timeout" href=" #set-browser-timeout" class="">Set Browser Timeout</a></li>
                                                    <li><a id="link-set-geolocation" href=" #set-geolocation" class="">Set Geolocation</a></li>
                                                    <li><a id="link-set-offline" href=" #set-offline" class="">Set Offline</a></li>
                                                    <li><a id="link-set-retry-assertions-for" href=" #set-retry-assertions-for" class="">Set Retry Assertions For</a></li>
                                                    <li><a id="link-set-viewport-size" href=" #set-viewport-size" class="">Set Viewport Size</a></li>
                                                    <li><a id="link-switch-browser" href=" #switch-browser" class="">Switch Browser</a></li>
                                                    <li><a id="link-switch-context" href=" #switch-context" class="">Switch Context</a></li>
                                                    <li><a id="link-switch-page" href=" #switch-page" class="">Switch Page</a></li>
                                                    <li><a id="link-take-screenshot" href=" #take-screenshot" class="">Take Screenshot</a></li>
                                                    <li><a id="link-type-secret" href=" #type-secret" class="">Type Secret</a></li>
                                                    <li><a id="link-type-text" href=" #type-text" class="">Type Text</a></li>
                                                    <li><a id="link-uncheck-checkbox" href=" #uncheck-checkbox" class="">Uncheck Checkbox</a></li>
                                                    <li><a id="link-upload-file" href=" #upload-file" class="">Upload File</a></li>
                                                    <li><a id="link-wait-for" href=" #wait-for" class="">Wait For</a></li>
                                                    <li><a id="link-wait-for-all-promises" href=" #wait-for-all-promises" class="">Wait For All Promises</a></li>
                                                    <li><a id="link-wait-for-download" href=" #wait-for-download" class="">Wait For Download</a></li>
                                                    <li><a id="link-wait-for-elements-state" href=" #wait-for-elements-state" class="">Wait For Elements State</a></li>
                                                    <li><a id="link-wait-for-function" href=" #wait-for-function" class="">Wait For Function</a></li>
                                                    <li><a id="link-wait-for-navigation" href=" #wait-for-navigation" class="">Wait For Navigation</a></li>
                                                    <li><a id="link-wait-for-request" href=" #wait-for-request" class="">Wait For Request</a></li>
                                                    <li><a id="link-wait-for-response" href=" #wait-for-response" class="">Wait For Response</a></li>
                                                    <li><a id="link-wait-until-network-is-idle" href=" #wait-until-network-is-idle" class="">Wait Until Network Is Idle</a></li>
                                                </ul>
                                            </div>
                                        </aside>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
    </div>
</section>