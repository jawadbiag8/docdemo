<section id="contentpage" class="content">
    <div class="container-fluid">
        <!-- Headings -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Autosphere.Browser</b>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="sc-kLgntA iHaOcn">
                            <nav class="sc-bYEvPH khGBIg">
                                <ol class="breadcrumb breadcrumb-col-cyan">
                                    <li><a href="../views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Autosphere Package</a></li>
                                    <li class="active">Autosphere.Browser</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#home_with_icon_title" data-toggle="tab" aria-expanded="true">
                                    <i class="material-icons">home</i> Readme
                                </a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#profile_with_icon_title" data-toggle="tab" aria-expanded="false">
                                    <i class="material-icons">face</i> Keywords
                                </a>
                            </li>

                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="home_with_icon_title">

                                <div class="sc-jJEJSO laquCT">
                                    <div class="sc-hiSbYr XqbgT">
                                        <div>

                                            <h4 id="Locating elements">Locating elements</h4>
                                            <p>All keywords in the browser library that need to interact with an element on a web page take an argument typically named <code>locator</code> that specifies how to find the element. Most often the locator is given as a
                                                string using the locator syntax described below, but <a href="../../views/docs.php?page=libraries/Autosphere-framework/Autosphere-browser/keywords#get-webelement" class="name">using
                                                    WebElements</a> is possible too.</p>
                                            <h4 id="Locator syntax">Locator syntax</h4>
                                            <p>Finding elements can be done using different strategies such as the element id, XPath expressions, or CSS selectors. The strategy can either be explicitly specified with a prefix or the strategy can be implicit.
                                            </p>
                                            <h4 id="Default locator strategy">Default locator strategy</h4>
                                            <p>By default, locators are considered to use the keyword specific default locator strategy. All keywords support finding elements based on <code>id</code> and <code>name</code> attributes, but some keywords support additional
                                                attributes or other values that make sense in their context. For example,
                                                <a href="#Click%20Link" class="name">Click Link</a> supports the <code>href</code> attribute and the link text and addition to the normal <code>id</code> and <code>name</code>.
                                            </p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td><a href="#Click%20Element" class="name">Click Element</a></td>
                                                    <td>example</td>
                                                    <td># Match based on <code>id</code> or <code>name</code>.</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#Click%20Link" class="name">Click Link</a></td>
                                                    <td>example</td>
                                                    <td># Match also based on link text and <code>href</code>.</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#Click%20Button" class="name">Click Button</a></td>
                                                    <td>example</td>
                                                    <td># Match based on <code>id</code>, <code>name</code> or <code>value</code>.</td>
                                                </tr>
                                            </table>
                                            <p>If a locator accidentally starts with a prefix recognized as <a href="../views/docs.php?page=libraries/Autosphere-framework/Autosphere-browser/keywords#add-location-strategy" class="name">explicit locator strategy</a> or <a href="#Implicit%20XPath%20strategy" class="name">implicit XPath strategy</a>,
                                                it is possible to use the explicit <code>default</code> prefix to enable the default strategy.</p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td><a href="#Click%20Element" class="name">Click Element</a></td>
                                                    <td>name:foo</td>
                                                    <td># Find element with name <code>foo</code>.</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#Click%20Element" class="name">Click Element</a></td>
                                                    <td>default:name:foo</td>
                                                    <td># Use default strategy with value <code>name:foo</code>.</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#Click%20Element" class="name">Click Element</a></td>
                                                    <td>//foo</td>
                                                    <td># Find element using XPath <code>//foo</code>.</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#Click%20Element" class="name">Click Element</a></td>
                                                    <td>default: //foo</td>
                                                    <td># Use default strategy with value <code>//foo</code>.</td>
                                                </tr>
                                            </table>
                                            <h4 id="Explicit locator strategy">Explicit locator strategy</h4>
                                            <p>The explicit locator strategy is specified with a prefix using either syntax
                                                <code>strategy:value</code> or <code>strategy=value</code>. The former syntax is preferred because the latter is identical to Autosphere's <a href="">named
                                                    argument syntax</a> and that can cause problems. Spaces around the separator are ignored, so
                                                <code>id:foo</code>, <code>id: foo</code> and <code>id : foo</code> are all equivalent.
                                            </p>
                                            <p>Locator strategies that are supported by default are listed in the table below. In addition to them, it is possible to register <a href="../views/docs.php?page=libraries/Autosphere-framework/Autosphere-browser/keywords#add-location-strategy" class="name">custom locators</a>.</p>
                                            <table border="1">
                                                <tr>
                                                    <th>Strategy</th>
                                                    <th>Match based on</th>
                                                    <th>Example</th>
                                                </tr>
                                                <tr>
                                                    <td>id</td>
                                                    <td>Element <code>id</code>.</td>
                                                    <td><code>id:example</code></td>
                                                </tr>
                                                <tr>
                                                    <td>name</td>
                                                    <td><code>name</code> attribute.</td>
                                                    <td><code>name:example</code></td>
                                                </tr>
                                                <tr>
                                                    <td>identifier</td>
                                                    <td>Either <code>id</code> or <code>name</code>.</td>
                                                    <td><code>identifier:example</code></td>
                                                </tr>
                                                <tr>
                                                    <td>class</td>
                                                    <td>Element <code>class</code>.</td>
                                                    <td><code>class:example</code></td>
                                                </tr>
                                                <tr>
                                                    <td>tag</td>
                                                    <td>Tag name.</td>
                                                    <td><code>tag:div</code></td>
                                                </tr>
                                                <tr>
                                                    <td>xpath</td>
                                                    <td>XPath expression.</td>
                                                    <td><code>xpath://div[@id="example"]</code></td>
                                                </tr>
                                                <tr>
                                                    <td>css</td>
                                                    <td>CSS selector.</td>
                                                    <td><code>css:div#example</code></td>
                                                </tr>
                                                <tr>
                                                    <td>dom</td>
                                                    <td>DOM expression.</td>
                                                    <td><code>dom:document.images[5]</code></td>
                                                </tr>
                                                <tr>
                                                    <td>link</td>
                                                    <td>Exact text a link has.</td>
                                                    <td><code>link:The example</code></td>
                                                </tr>
                                                <tr>
                                                    <td>partial link</td>
                                                    <td>Partial link text.</td>
                                                    <td><code>partial link:he ex</code></td>
                                                </tr>
                                                <tr>
                                                    <td>sizzle</td>
                                                    <td>Sizzle selector deprecated.</td>
                                                    <td><code>sizzle:div.example</code></td>
                                                </tr>
                                                <tr>
                                                    <td>jquery</td>
                                                    <td>jQuery expression.</td>
                                                    <td><code>jquery:div.example</code></td>
                                                </tr>
                                                <tr>
                                                    <td>default</td>
                                                    <td>Keyword specific default behavior.</td>
                                                    <td><code>default:example</code></td>
                                                </tr>
                                            </table>
                                            <p>See the <a href="../views/docs.php?page=libraries/Autosphere-framework/Autosphere-browser/keywords#add-location-strategy" class="name">Default locator strategy</a> section below for more information about how the default strategy works. Using the explicit
                                                <code>default</code> prefix is only necessary if the locator value itself accidentally matches some of the explicit strategies.
                                            </p>
                                            <p>Different locator strategies have different pros and cons. Using ids, either explicitly like
                                                <code>id:foo</code> or by using the <a href="../views/docs.php?page=libraries/Autosphere-framework/Autosphere-browser/keywords#add-location-strategy" class="name">default
                                                    locator strategy</a> simply like <code>foo</code>, is recommended when possible, because the syntax is simple and locating elements by id is fast for browsers. If an element does not have an id or the id is not stable, other solutions
                                                need to be used. If an element has a unique tag name or class, using
                                                <code>tag</code>, <code>class</code> or <code>css</code> strategy like <code>tag:h1</code>,
                                                <code>class:example</code> or <code>css:h1.example</code> is often an easy solution. In more complex cases using XPath expressions is typically the best approach. They are very powerful but a downside is that they can
                                                also get complex.
                                            </p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td><a href="#Click%20Element" class="name">Click Element</a></td>
                                                    <td>id:foo</td>
                                                    <td># Element with id 'foo'.</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#Click%20Element" class="name">Click Element</a></td>
                                                    <td>css:div#foo h1</td>
                                                    <td># h1 element under div with id 'foo'.</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#Click%20Element" class="name">Click Element</a></td>
                                                    <td>xpath: //div[@id="foo"]//h1</td>
                                                    <td># Same as the above using XPath, not CSS.</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#Click%20Element" class="name">Click Element</a></td>
                                                    <td>xpath: //*[contains(text(), "example")]</td>
                                                    <td># Element containing text 'example'.</td>
                                                </tr>
                                            </table>
                                            <p><b>NOTE:</b></p>
                                            <ul>
                                                <li>Using the <code>sizzle</code> strategy or its alias <code>jquery</code> requires that the system under test contains the jQuery library.</li>
                                            </ul>
                                            <h4 id="Implicit XPath strategy">Implicit XPath strategy</h4>
                                            <p>If the locator starts with <code>//</code> or <code>(//</code>, the locator is considered to be an XPath expression. In other words, using <code>//div</code> is equivalent to using explicit
                                                <code>xpath://div</code>.
                                            </p>
                                            <p>Examples:</p>
                                            <table border="1">
                                                <tr>
                                                    <td><a href="#Click%20Element" class="name">Click Element</a></td>
                                                    <td>//div[@id="foo"]//h1</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#Click%20Element" class="name">Click Element</a></td>
                                                    <td>(//div)[2]</td>
                                                </tr>
                                            </table>
                                            <h4 id="Using WebElements">Using WebElements</h4>
                                            <p>In addition to specifying a locator as a string, it is possible to use Selenium's WebElement objects. This requires first getting a WebElement, for example, by using the <a href="#Get%20WebElement" class="name">Get WebElement</a> keyword.</p>
                                            <table border="1">
                                                <tr>
                                                    <td>${elem} =</td>
                                                    <td><a href="../views/docs.php?page=libraries/Autosphere-framework/Autosphere-browser/keywords#get-webelement" class="name">Get WebElement</a></td>
                                                    <td>id:example</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#Click%20Element" class="name">Click Element</a></td>
                                                    <td>${elem}</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <div id="Custom-locators"><h4>Custom locators</h4></div>
                                            <p>If more complex lookups are required than what is provided through the default locators, custom lookup strategies can be created. Using custom locators is a two part process. First, create a keyword that returns a WebElement
                                                that should be acted on:</p>
                                            <table border="1">
                                                <tr>
                                                    <td>Custom Locator Strategy</td>
                                                    <td>[Arguments]</td>
                                                    <td>${browser}</td>
                                                    <td>${locator}</td>
                                                    <td>${tag}</td>
                                                    <td>${constraints}</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>${element}=</td>
                                                    <td>Execute Javascript</td>
                                                    <td>return window.document.getElementById('${locator}');</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>[Return]</td>
                                                    <td>${element}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                            <p>This keyword is a reimplementation of the basic functionality of the <code>id</code> locator where
                                                <code>${browser}</code> is a reference to a WebDriver instance and <code>${locator}</code> is the name of the locator strategy. To use this locator, it must first be registered by using the <a href="#Add%20Location%20Strategy" class="name">Add Location Strategy</a> keyword:
                                            </p>
                                            <table border="1">
                                                <tr>
                                                    <td><a href="../views/docs.php?page=libraries/Autosphere-framework/Autosphere-browser/keywords#add-location-strategy" class="name">Add Location Strategy</a></td>
                                                    <td>custom</td>
                                                    <td>Custom Locator Strategy</td>
                                                </tr>
                                            </table>
                                            <p>The first argument of <a href="../views/docs.php?page=libraries/Autosphere-framework/Autosphere-browser/keywords#add-location-strategy" class="name">Add Location Strategy</a> specifies the name of the strategy and it must be unique. After registering the strategy, the usage is the same as with other
                                                locators:
                                            </p>
                                            <table border="1">
                                                <tr>
                                                    <td><a href="#Click%20Element" class="name">Click Element</a></td>
                                                    <td>custom:example</td>
                                                </tr>
                                            </table>
                                            <p>See the <a href="../views/docs.php?page=libraries/Autosphere-framework/Autosphere-browser/keywords#add-location-strategy" class="name">Add Location Strategy</a> keyword for more details.
                                            </p>




                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="sc-jJEJSO laquCT">
                                            <div class="sc-hiSbYr XqbgT">
                                                <div class="sc-gWHgXt bHAbbC keyword-content">
                                                    <div>
                                                        <div class="keyword" id="add-cookie">
                                                            <h2><a href="#add-cookie">Add Cookie</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Adds a cookie to your current session.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>value</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>path</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>domain</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>secure</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expiry</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>name</code> and <code>value</code> are required, <code>path</code>, <code>domain</code>,
                                                                    <code>secure</code> and <code>expiry</code> are optional. Expiry supports the same formats as the DateTime library or
                                                                    an epoch timestamp.
                                                                </p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#add-cookie" class="name">Add Cookie</a></td>
                                                                        <td>foo</td>
                                                                        <td>bar</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#add-cookie" class="name">Add Cookie</a></td>
                                                                        <td>foo</td>
                                                                        <td>bar</td>
                                                                        <td>domain=example.com</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#add-cookie" class="name">Add Cookie</a></td>
                                                                        <td>foo</td>
                                                                        <td>bar</td>
                                                                        <td>expiry=2027-09-28 16:21:35</td>
                                                                        <td># Expiry as timestamp.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#add-cookie" class="name">Add Cookie</a></td>
                                                                        <td>foo</td>
                                                                        <td>bar</td>
                                                                        <td>expiry=1822137695</td>
                                                                        <td># Expiry as epoch seconds.</td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="add-location-strategy">
                                                            <h2><a href="#add-location-strategy">Add Location Strategy</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Adds a custom location strategy.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>strategy_name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>strategy_keyword</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>persist</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See <a href="#Custom-locators" class="name ptab" >Custom locators</a> for information on how to create and use custom strategies. <a href="#Remove%20Location%20Strategy" class="name">Remove
                                                                        Location Strategy</a> can be used to remove a registered strategy.</p>
                                                                <p>Location strategies are automatically removed after leaving the current scope by default. Setting <code>persist</code> to a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>)
                                                                    will cause the location strategy to stay registered throughout the life of the test.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="alert-should-be-present">
                                                            <h2><a href="#alert-should-be-present">Alert Should Be Present</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that an alert is present and by default, accepts it.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>action</td>
                                                                        <td></td>
                                                                        <td>ACCEPT</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Fails if no alert is present. If <code>text</code> is a non-empty string, then it is used to verify alert's message. The alert is accepted by default, but that behavior can be controlled by using the <code>action</code> argument same way as with <a href="#Handle%20Alert" class="name">Handle Alert</a>.</p>
                                                                <p><code>timeout</code> specifies how long to wait for the alert to appear. If it is not given, the global default <a href="#Timeout" class="name">timeout</a> is used instead.</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="alert-should-not-be-present">
                                                            <h2><a href="#alert-should-not-be-present">Alert Should Not Be Present</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that no alert is present.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>action</td>
                                                                        <td></td>
                                                                        <td>ACCEPT</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td>0</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>If the alert actually exists, the <code>action</code> argument determines how it should be handled. By default, the alert is accepted, but it can be also dismissed or left open the same way as with the <a href="#Handle%20Alert" class="name">Handle Alert</a> keyword.</p>
                                                                <p><code>timeout</code> specifies how long to wait for the alert to appear. By default, is not waited for the alert at all, but a custom time can be given if alert may be delayed. See the <a href="#Time%20format" class="name">time format</a> section for information about the syntax.
                                                                </p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="assign-id-to-element">
                                                            <h2><a href="#assign-id-to-element">Assign Id To Element</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Assigns a temporary <code>id</code> to the element specified by
                                                                    <code>locator</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>id</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This is mainly useful if the locator is complicated and/or slow XPath expression and it is needed multiple times. Identifier expires when the page is reloaded.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Assign%20Id%20To%20Element" class="name">Assign ID to Element</a></td>
                                                                        <td>//ul[@class='example' and ./li[contains(., 'Stuff')]]</td>
                                                                        <td>my id</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Page%20Should%20Contain%20Element" class="name">Page Should Contain Element</a>
                                                                        </td>
                                                                        <td>my id</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="attach-chrome-browser">
                                                            <h2><a href="#attach-chrome-browser">Attach Chrome Browser</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Attach to an existing instance of Chrome or Chromium.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>port</td>
                                                                        <td> int</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>alias</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Requires that the browser was started with the command line option
                                                                    <code>--remote-debugging-port=&lt;port&gt;</code>, where port is any 4-digit number not being used by other applications.
                                                                </p>
                                                                <p>That port can then be used to connect using this keyword.</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Attach Chrome Browser</td>
                                                                        <td>port=9222</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="capture-element-screenshot">
                                                            <h2><a href="#capture-element-screenshot">Capture Element Screenshot</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Captures a screenshot from the element identified by <code>locator</code> and embeds it into log file.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>filename</td>
                                                                        <td></td>
                                                                        <td>element-screenshot-{index}.png</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See <a href="#Capture%20Page%20Screenshot" class="name">Capture Page Screenshot</a> for details about <code>filename</code> argument. See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <p>An absolute path to the created element screenshot is returned.</p>
                                                                <p>Support for capturing the screenshot from an element has limited support among browser vendors. Please check the browser vendor driver documentation does the browser support capturing a screenshot from an element.</p>

                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Capture%20Element%20Screenshot" class="name">Capture Element Screenshot</a></td>
                                                                        <td>id:image_id</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Capture%20Element%20Screenshot" class="name">Capture Element Screenshot</a></td>
                                                                        <td>id:image_id</td>
                                                                        <td>${OUTPUTDIR}/id_image_id-1.png</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Capture%20Element%20Screenshot" class="name">Capture Element Screenshot</a></td>
                                                                        <td>id:image_id</td>
                                                                        <td>EMBED</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="capture-page-screenshot">
                                                            <h2><a href="#capture-page-screenshot">Capture Page Screenshot</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Takes a screenshot of the current page and embeds it into a log file.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>filename</td>
                                                                        <td></td>
                                                                        <td>screenshot-{index}.png</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>filename</code> argument specifies the name of the file to write the screenshot into. The directory where screenshots are saved can be set when <a href="#Importing" class="name">importing</a> the library
                                                                    or by using the <a href="#Set%20Screenshot%20Directory" class="name">Set Screenshot
                                                                        Directory</a> keyword. If the directory is not configured, screenshots are saved to the same directory where Autosphere's log file is written.</p>
                                                                <p>If <code>filename</code> equals to EMBED (case insensitive), then screenshot is embedded as Base64 image to the log.html. In this case file is not created in the filesystem.</p>

                                                                <p>An absolute path to the created screenshot file is returned or if <code>filename</code> equals to EMBED, word EMBED is returned.</p>

                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Capture%20Page%20Screenshot" class="name">Capture Page Screenshot</a></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>File Should Exist</td>
                                                                        <td>${OUTPUTDIR}/screenshot-1.png</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${path} =</td>
                                                                        <td><a href="#Capture%20Page%20Screenshot" class="name">Capture Page Screenshot</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>File Should Exist</td>
                                                                        <td>${OUTPUTDIR}/screenshot-2.png</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>File Should Exist</td>
                                                                        <td>${path}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Capture%20Page%20Screenshot" class="name">Capture Page Screenshot</a></td>
                                                                        <td>custom_name.png</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>File Should Exist</td>
                                                                        <td>${OUTPUTDIR}/custom_name.png</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Capture%20Page%20Screenshot" class="name">Capture Page Screenshot</a></td>
                                                                        <td>custom_with_index_{index}.png</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>File Should Exist</td>
                                                                        <td>${OUTPUTDIR}/custom_with_index_1.png</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Capture%20Page%20Screenshot" class="name">Capture Page Screenshot</a></td>
                                                                        <td>formatted_index_{index:03}.png</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>File Should Exist</td>
                                                                        <td>${OUTPUTDIR}/formatted_index_001.png</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Capture%20Page%20Screenshot" class="name">Capture Page Screenshot</a></td>
                                                                        <td>EMBED</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>File Should Not Exist</td>
                                                                        <td>EMBED</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="checkbox-should-be-selected">
                                                            <h2><a href="#checkbox-should-be-selected">Checkbox Should Be Selected</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies checkbox <code>locator</code> is selected/checked.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="checkbox-should-not-be-selected">
                                                            <h2><a href="#checkbox-should-not-be-selected">Checkbox Should Not Be Selected</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies checkbox <code>locator</code> is not selected/checked.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="choose-file">
                                                            <h2><a href="#choose-file">Choose File</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Inputs the <code>file_path</code> into the file input field
                                                                    <code>locator</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>file_path</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>



                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Choose%20File" class="name">Choose File</a></td>
                                                                        <td>my_upload_field</td>
                                                                        <td>${CURDIR}/trades.csv</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="clear-all-highlights">
                                                            <h2><a href="#clear-all-highlights">Clear All Highlights</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Remove all highlighting made by <code>Highlight Elements</code>.</p>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="clear-element-text">
                                                            <h2><a href="#clear-element-text">Clear Element Text</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Clears the value of the text-input-element identified by <code>locator</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="click-button">
                                                            <h2><a href="#click-button">Click Button</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Clicks the button identified by <code>locator</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>modifier</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax. When using the default locator strategy, buttons are searched using
                                                                    <code>id</code>, <code>name</code>, and <code>value</code>.
                                                                </p>
                                                                <p>See the <a href="#Click%20Element" class="name">Click Element</a> keyword for details about the
                                                                    <code>modifier</code> argument.
                                                                </p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="click-button-when-visible">
                                                            <h2><a href="#click-button-when-visible">Click Button When Visible</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Click button identified by <code>locator</code>, once it becomes visible.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>modifier</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator</p>
                                                                <p><code>modifier</code> press given keys while clicking the element, e.g. CTRL</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Click Button When Visible</td>
                                                                        <td>//button[@class="mybutton"]</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="click-element">
                                                            <h2><a href="#click-element">Click Element</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Click the element identified by <code>locator</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>modifier</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>action_chain</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>

                                                                <p>If <code>action_chain</code> argument is true, see <a href="#Boolean%20arguments" class="name">Boolean arguments</a> for more details on how to set boolean argument, then keyword uses ActionChain based click
                                                                    instead of the &lt;web_element&gt;.click() function. If both <code>action_chain</code> and
                                                                    <code>modifier</code> are defined, the click will be performed using <code>modifier</code> and
                                                                    <code>action_chain</code> will be ignored.
                                                                </p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Click Element</td>
                                                                        <td>id:button</td>
                                                                        <td></td>
                                                                        <td># Would click element without any modifiers.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Click Element</td>
                                                                        <td>id:button</td>
                                                                        <td>CTRL</td>
                                                                        <td># Would click element with CTLR key pressed down.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Click Element</td>
                                                                        <td>id:button</td>
                                                                        <td>CTRL+ALT</td>
                                                                        <td># Would click element with CTLR and ALT keys pressed down.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Click Element</td>
                                                                        <td>id:button</td>
                                                                        <td>action_chain=True</td>
                                                                        <td># Clicks the button using ActionChains</td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="click-element-at-coordinates">
                                                            <h2><a href="#click-element-at-coordinates">Click Element At Coordinates</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Click the element <code>locator</code> at <code>xoffset/yoffset</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xoffset</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>yoffset</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The Cursor is moved and the center of the element and x/y coordinates are calculated from that point.
                                                                </p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="click-element-if-visible">
                                                            <h2><a href="#click-element-if-visible">Click Element If Visible</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Click element if it is visible</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Click Element If Visible</td>
                                                                        <td>//button[@class="mybutton"]</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="click-element-when-visible">
                                                            <h2><a href="#click-element-when-visible">Click Element When Visible</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Click element identified by <code>locator</code>, once it becomes visible.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>modifier</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>action_chain</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator</p>
                                                                <p><code>modifier</code> press given keys while clicking the element, e.g. CTRL</p>

                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Click Element When Visible</td>
                                                                        <td>q</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Click Element When Visible</td>
                                                                        <td>id:button</td>
                                                                        <td>CTRL+ALT</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Click Element When Visible</td>
                                                                        <td>action_chain=True</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="click-image">
                                                            <h2><a href="#click-image">Click Image</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Clicks an image identified by <code>locator</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>modifier</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax. When using the default locator strategy, images are searched using
                                                                    <code>id</code>, <code>name</code>, <code>src</code> and <code>alt</code>.
                                                                </p>
                                                                <p>See the <a href="#Click%20Element" class="name">Click Element</a> keyword for details about the
                                                                    <code>modifier</code> argument.
                                                                </p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="click-link">
                                                            <h2><a href="#click-link">Click Link</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Clicks a link identified by <code>locator</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>modifier</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax. When using the default locator strategy, links are searched using
                                                                    <code>id</code>, <code>name</code>, <code>href</code> and the link text.
                                                                </p>
                                                                <p>See the <a href="#Click%20Element" class="name">Click Element</a> keyword for details about the
                                                                    <code>modifier</code> argument.
                                                                </p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="close-all-browsers">
                                                            <h2><a href="#close-all-browsers">Close All Browsers</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Closes all open browsers and resets the browser cache.</p>


                                                                <p>After this keyword, new indexes returned from <a href="#Open%20Browser" class="name">Open
                                                                        Browser</a> keyword are reset to 1.</p>
                                                                <p>This keyword should be used in test or suite teardown to make sure all browsers are closed.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="close-browser">
                                                            <h2><a href="#close-browser">Close Browser</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Closes the current browser.</p>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="close-window">
                                                            <h2><a href="#close-window">Close Window</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Closes currently opened and selected browser window/tab.</p>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="cover-element">
                                                            <h2><a href="#cover-element">Cover Element</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Will cover elements identified by <code>locator</code> with a blue div without breaking page layout.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>

                                                                <p>Example: |<a href="#Cover%20Element" class="name">Cover Element</a> | css:div#container |</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="create-webdriver">
                                                            <h2><a href="#create-webdriver">Create Webdriver</a></h2>

                                                            <div>

                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>driver_name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>alias</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>kwargs</td>
                                                                        <td></td>
                                                                        <td>{}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>**init_kwargs</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Like <a href="#Open%20Browser" class="name">Open Browser</a>, but allows passing arguments to the created WebDriver instance directly. This keyword should only be used if the functionality provided by <a href="#Open%20Browser" class="name">Open Browser</a> is not adequate.</p>
                                                                <p><code>driver_name</code> must be a WebDriver implementation name like Firefox, Chrome, Ie, Opera, Safari, PhantomJS, or Remote.</p>

                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td># Use proxy with Firefox</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${proxy}=</td>
                                                                        <td>Evaluate</td>
                                                                        <td>webdriver.Proxy()</td>
                                                                        <td>modules=webdriver</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${proxy.http_proxy}=</td>
                                                                        <td>Set Variable</td>
                                                                        <td>localhost:8888</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Create%20Webdriver" class="name">Create Webdriver</a></td>
                                                                        <td>Firefox</td>
                                                                        <td>proxy=${proxy}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td># Use proxy with PhantomJS</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${service args}=</td>
                                                                        <td>Create List</td>
                                                                        <td>--proxy=192.168.132.104:8888</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Create%20Webdriver" class="name">Create Webdriver</a></td>
                                                                        <td>PhantomJS</td>
                                                                        <td>service_args=${service args}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Returns the index of this browser instance which can be used later to switch back to it. Index starts from 1 and is reset back to it when <a href="#Close%20All%20Browsers" class="name">Close
                                                                        All Browsers</a> keyword is used. See <a href="#Switch%20Browser" class="name">Switch
                                                                        Browser</a> for an example.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="current-frame-should-contain">
                                                            <h2><a href="#current-frame-should-contain">Current Frame Should Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that the current frame contains <code>text</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See <a href="#Page%20Should%20Contain" class="name">Page Should Contain</a> for an explanation about the <code>loglevel</code> argument.</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="current-frame-should-not-contain">
                                                            <h2><a href="#current-frame-should-not-contain">Current Frame Should Not Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that the current frame does not contain <code>text</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See <a href="#Page%20Should%20Contain" class="name">Page Should Contain</a> for an explanation about the <code>loglevel</code> argument.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="delete-all-cookies">
                                                            <h2><a href="#delete-all-cookies">Delete All Cookies</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Deletes all cookies.</p>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="delete-cookie">
                                                            <h2><a href="#delete-cookie">Delete Cookie</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Deletes the cookie matching <code>name</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>If the cookie is not found, nothing happens.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="does-alert-contain">
                                                            <h2><a href="#does-alert-contain">Does Alert Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Does alert contain text.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td> float </td>
                                                                        <td> None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>text</code> check if alert includes text, will raise ValueError is text does not exist
                                                                </p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Does Alert Contain</td>
                                                                        <td>alert message</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="does-alert-not-contain">
                                                            <h2><a href="#does-alert-not-contain">Does Alert Not Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Does alert not contain text.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td> float </td>
                                                                        <td> None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>text</code> check that alert does not include text, will raise ValueError if text does exist
                                                                </p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Does Alert Not Contain</td>
                                                                        <td>unexpected message</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="does-element-contain">
                                                            <h2><a href="#does-element-contain">Does Element Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Does element contain expected text</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ignore_case</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator</p>
                                                                <p><code>expected</code> expected element text</p>
                                                                <p><code>ignore_case</code> should check be case insensitive, default False</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Does Element Contain</td>
                                                                        <td>id:spec</td>
                                                                        <td>specification complete</td>
                                                                        <td>ignore_case=True</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="does-frame-contain">
                                                            <h2><a href="#does-frame-contain">Does Frame Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Does frame contain expected text</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> locator of the frame to check</p>
                                                                <p><code>text</code> does frame contain this text</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Does Frame Contain</td>
                                                                        <td>id:myframe</td>
                                                                        <td>secret</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="does-location-contain">
                                                            <h2><a href="#does-location-contain">Does Location Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Does current URL contain expected</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>expected</code> URL should contain this</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Open Available Browser</td>
                                                                        <td><a href="../../../../index.html">https://Autosphere.com</a></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Does Location Contain</td>
                                                                        <td>Autosphere</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="does-page-contain">
                                                            <h2><a href="#does-page-contain">Does Page Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Does page contain expected text</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>text</code> page should contain this</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Open Available Browser</td>
                                                                        <td><a href="https://google.com/">https://google.com</a></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Does Page Contain</td>
                                                                        <td>Gmail</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="does-page-contain-button">
                                                            <h2><a href="#does-page-contain-button">Does Page Contain Button</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Does page contain expected button</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Does Page Contain Button</td>
                                                                        <td>search-button</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="does-page-contain-checkbox">
                                                            <h2><a href="#does-page-contain-checkbox">Does Page Contain Checkbox</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Does page contain expected checkbox</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Does Page Contain Checkbox</td>
                                                                        <td>random-selection</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="does-page-contain-element">
                                                            <h2><a href="#does-page-contain-element">Does Page Contain Element</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Does page contain expected element</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>count</td>
                                                                        <td> int </td>
                                                                        <td> None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator</p>
                                                                <p><code>count</code> how many times element is expected to appear on page by default one or more
                                                                </p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Does Page Contain Element</td>
                                                                        <td>textarea</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Does Page Contain Element</td>
                                                                        <td>button</td>
                                                                        <td>count=4</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="does-page-contain-image">
                                                            <h2><a href="#does-page-contain-image">Does Page Contain Image</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Does page contain expected image</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Open Available Browser</td>
                                                                        <td><a href="https://google.com/">https://google.com</a></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Does Page Contain Image</td>
                                                                        <td>Google</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="does-page-contain-link">
                                                            <h2><a href="#does-page-contain-link">Does Page Contain Link</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Does page contain expected link</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Does Page Contain Link</td>
                                                                        <td>id:submit</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="does-page-contain-list">
                                                            <h2><a href="#does-page-contain-list">Does Page Contain List</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Does page contain expected list</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Does Page Contain List</td>
                                                                        <td>class:selections</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="does-page-contain-radio-button">
                                                            <h2><a href="#does-page-contain-radio-button">Does Page Contain Radio Button</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Does page contain expected radio button</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Does Page Contain Radio Button</td>
                                                                        <td>male</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="does-page-contain-textfield">
                                                            <h2><a href="#does-page-contain-textfield">Does Page Contain Textfield</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Does page contain expected textfield</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Does Page Contain Textfield</td>
                                                                        <td>id:address</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="does-table-cell-contain">
                                                            <h2><a href="#does-table-cell-contain">Does Table Cell Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Does table cell contain expected text</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>row</td>
                                                                        <td> int</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>column</td>
                                                                        <td> int</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator for the table</p>
                                                                <p><code>row</code> row index starting from 1 (beginning) or -1 (from the end)</p>
                                                                <p><code>column</code> column index starting from 1 (beginning) or -1 (from the end)</p>
                                                                <p><code>expected</code> expected text in table row</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Does Table Cell Contain</td>
                                                                        <td>//table</td>
                                                                        <td>1</td>
                                                                        <td>1</td>
                                                                        <td>Company</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="does-table-column-contain">
                                                            <h2><a href="#does-table-column-contain">Does Table Column Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Does table column contain expected text</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>column</td>
                                                                        <td> int</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator for the table</p>
                                                                <p><code>column</code> column index starting from 1 (beginning) or -1 (from the end)</p>
                                                                <p><code>expected</code> expected text in table column</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Does Table Column Contain</td>
                                                                        <td>//table</td>
                                                                        <td>1</td>
                                                                        <td>Nokia</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="does-table-contain">
                                                            <h2><a href="#does-table-contain">Does Table Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Does table contain expected text</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator</p>
                                                                <p><code>expected</code> expected text in table</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Does Table Contain</td>
                                                                        <td>//table</td>
                                                                        <td>February</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="does-table-footer-contain">
                                                            <h2><a href="#does-table-footer-contain">Does Table Footer Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Does table footer contain expected text</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator for the table</p>
                                                                <p><code>expected</code> expected text in table footer</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Does Table Footer Contain</td>
                                                                        <td>//table</td>
                                                                        <td>Sum</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="does-table-header-contain">
                                                            <h2><a href="#does-table-header-contain">Does Table Header Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Does table header contain expected text</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator for the table</p>
                                                                <p><code>expected</code> expected text in table header</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Does Table Header Contain</td>
                                                                        <td>//table</td>
                                                                        <td>Month</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="does-table-row-contain">
                                                            <h2><a href="#does-table-row-contain">Does Table Row Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Does table row contain expected text</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>row</td>
                                                                        <td> int</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator for the table</p>
                                                                <p><code>row</code> row index starting from 1 (beginning) or -1 (from the end)</p>
                                                                <p><code>expected</code> expected text in table row</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Does Table Row Contain</td>
                                                                        <td>//table</td>
                                                                        <td>1</td>
                                                                        <td>Company</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="does-textarea-contain">
                                                            <h2><a href="#does-textarea-contain">Does Textarea Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Does textarea contain expected text</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator</p>
                                                                <p><code>expected</code> expected text in textarea</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Does Textarea Contain</td>
                                                                        <td>//textarea</td>
                                                                        <td>sincerely</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="does-textfield-contain">
                                                            <h2><a href="#does-textfield-contain">Does Textfield Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Does textfield contain expected text</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator</p>
                                                                <p><code>expected</code> expected text in textfield</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Does Textfield Contain</td>
                                                                        <td>id:lname</td>
                                                                        <td>Last</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="double-click-element">
                                                            <h2><a href="#double-click-element">Double Click Element</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Double clicks the element identified by <code>locator</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="drag-and-drop">
                                                            <h2><a href="#drag-and-drop">Drag And Drop</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Drags the element identified by <code>locator</code> into the
                                                                    <code>target</code> element.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>target</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The <code>locator</code> argument is the locator of the dragged element and the
                                                                    <code>target</code> is the locator of the target. See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.
                                                                </p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Drag%20And%20Drop" class="name">Drag And Drop</a></td>
                                                                        <td>css:div#element</td>
                                                                        <td>css:div.target</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="drag-and-drop-by-offset">
                                                            <h2><a href="#drag-and-drop-by-offset">Drag And Drop By Offset</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Drags the element identified with <code>locator</code> by
                                                                    <code>xoffset/yoffset</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>xoffset</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>yoffset</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <p>The element will be moved by <code>xoffset</code> and <code>yoffset</code>, each of which is a negative or positive number specifying the offset.</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Drag%20And%20Drop%20By%20Offset" class="name">Drag And Drop By Offset</a></td>
                                                                        <td>myElem</td>
                                                                        <td>50</td>
                                                                        <td>-35</td>
                                                                        <td># Move myElem 50px right and 35px down</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="element-attribute-value-should-be">
                                                            <h2><a href="#element-attribute-value-should-be">Element Attribute Value Should Be</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies element identified by <code>locator</code> contains expected attribute value.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>attribute</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <p>Example: <a href="#Element%20Attribute%20Value%20Should%20Be" class="name">Element Attribute
                                                                        Value Should Be</a> | css:img | href | value</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="element-should-be-disabled">
                                                            <h2><a href="#element-should-be-disabled">Element Should Be Disabled</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that element identified by <code>locator</code> is disabled.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This keyword considers also elements that are read-only to be disabled.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="element-should-be-enabled">
                                                            <h2><a href="#element-should-be-enabled">Element Should Be Enabled</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that element identified by <code>locator</code> is enabled.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This keyword considers also elements that are read-only to be disabled.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="element-should-be-focused">
                                                            <h2><a href="#element-should-be-focused">Element Should Be Focused</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that element identified by <code>locator</code> is focused.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="element-should-be-visible">
                                                            <h2><a href="#element-should-be-visible">Element Should Be Visible</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that the element identified by <code>locator</code> is visible.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Herein, visible means that the element is logically visible, not optically visible in the current browser viewport. For example, an element that carries <code>display:none</code> is not logically visible, so
                                                                    using this keyword on that element would fail.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <p>The <code>message</code> argument can be used to override the default error message.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="element-should-contain">
                                                            <h2><a href="#element-should-contain">Element Should Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that element <code>locator</code> contains text
                                                                    <code>expected</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ignore_case</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <p>The <code>message</code> argument can be used to override the default error message.</p>

                                                                <p>Use <a href="#Element%20Text%20Should%20Be" class="name">Element Text Should Be</a> if you want to match the exact text, not a substring.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="element-should-not-be-visible">
                                                            <h2><a href="#element-should-not-be-visible">Element Should Not Be Visible</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that the element identified by <code>locator</code> is NOT visible.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Passes if the element does not exists. See <a href="#Element%20Should%20Be%20Visible" class="name">Element Should Be Visible</a> for more information about visibility and supported arguments.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="element-should-not-contain">
                                                            <h2><a href="#element-should-not-contain">Element Should Not Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that element <code>locator</code> does not contain text
                                                                    <code>expected</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ignore_case</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <p>The <code>message</code> argument can be used to override the default error message.</p>
                                                                <p>The <code>ignore_case</code> argument can be set to True to compare case insensitive, default is False.</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="element-text-should-be">
                                                            <h2><a href="#element-text-should-be">Element Text Should Be</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that element <code>locator</code> contains exact the text
                                                                    <code>expected</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ignore_case</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <p>The <code>message</code> argument can be used to override the default error message.</p>
                                                                <p>The <code>ignore_case</code> argument can be set to True to compare case insensitive, default is False.</p>

                                                                <p>Use <a href="#Element%20Should%20Contain" class="name">Element Should Contain</a> if a substring match is desired.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="element-text-should-not-be">
                                                            <h2><a href="#element-text-should-not-be">Element Text Should Not Be</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that element <code>locator</code> does not contain exact the text
                                                                    <code>not_expected</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>not_expected</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ignore_case</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <p>The <code>message</code> argument can be used to override the default error message.</p>
                                                                <p>The <code>ignore_case</code> argument can be set to True to compare case insensitive, default is False.</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="execute-async-javascript">
                                                            <h2><a href="#execute-async-javascript">Execute Async Javascript</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Executes asynchronous JavaScript code with possible arguments.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*code</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Similar to <a href="#Execute%20Javascript" class="name">Execute Javascript</a> except that scripts executed with this keyword must explicitly signal they are finished by invoking the provided callback. This
                                                                    callback is always injected into the executed function as the last argument.
                                                                </p>
                                                                <p>Scripts must complete within the script timeout or this keyword will fail. See the <a href="#Timeout" class="name">Timeout</a> section for more information.</p>

                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Execute%20Async%20Javascript" class="name">Execute Async JavaScript</a></td>
                                                                        <td>var callback = arguments[arguments.length - 1]; window.setTimeout(callback, 2000);</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Execute%20Async%20Javascript" class="name">Execute Async JavaScript</a></td>
                                                                        <td>${CURDIR}/async_js_to_execute.js</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${result} =</td>
                                                                        <td><a href="#Execute%20Async%20Javascript" class="name">Execute Async JavaScript</a></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>...</td>
                                                                        <td>var callback = arguments[arguments.length - 1];</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>...</td>
                                                                        <td>function answer(){callback("text");};</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>...</td>
                                                                        <td>window.setTimeout(answer, 2000);</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${result}</td>
                                                                        <td>text</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="execute-javascript">
                                                            <h2><a href="#execute-javascript">Execute Javascript</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Executes the given JavaScript code with possible arguments.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*code</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>code</code> may be divided into multiple cells in the test data and <code>code</code> may contain multiple lines of code and arguments. In that case, the JavaScript code parts are concatenated together
                                                                    without adding spaces and optional arguments are separated from
                                                                    <code>code</code>.
                                                                </p>
                                                                <p>If <code>code</code> is a path to an existing file, the JavaScript to execute will be read from that file. Forward slashes work as a path separator on all operating systems.</p>
                                                                <p>The JavaScript executes in the context of the currently selected frame or window as the body of an anonymous function. Use <code>window</code> to refer to the window of your application and
                                                                    <code>document</code> to refer to the document object of the current frame or window, e.g.
                                                                    <code>document.getElementById('example')</code>.
                                                                </p>
                                                                <p>This keyword returns whatever the executed JavaScript code returns. Return values are converted to the appropriate Python types.</p>

                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Execute%20Javascript" class="name">Execute JavaScript</a></td>
                                                                        <td>window.myFunc('arg1', 'arg2')</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Execute%20Javascript" class="name">Execute JavaScript</a></td>
                                                                        <td>${CURDIR}/js_to_execute.js</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Execute%20Javascript" class="name">Execute JavaScript</a></td>
                                                                        <td>alert(arguments[0]);</td>
                                                                        <td>ARGUMENTS</td>
                                                                        <td>123</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Execute%20Javascript" class="name">Execute JavaScript</a></td>
                                                                        <td>ARGUMENTS</td>
                                                                        <td>123</td>
                                                                        <td>JAVASCRIPT</td>
                                                                        <td>alert(arguments[0]);</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="frame-should-contain">
                                                            <h2><a href="#frame-should-contain">Frame Should Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that frame identified by <code>locator</code> contains
                                                                    <code>text</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <p>See <a href="#Page%20Should%20Contain" class="name">Page Should Contain</a> for an explanation about the <code>loglevel</code> argument.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-all-links">
                                                            <h2><a href="#get-all-links">Get All Links</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns a list containing ids of all links found in current page.</p>


                                                                <p>If a link has no id, an empty string will be in the list instead.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-browser-aliases">
                                                            <h2><a href="#get-browser-aliases">Get Browser Aliases</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns aliases of all active browser that has an alias as NormalizedDict. The dictionary contains the aliases as keys and the index as value. This can be accessed as dictionary <code>${aliases.key}</code> or
                                                                    as list <code>@{aliases}[0]</code>.</p>


                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Open%20Browser" class="name">Open Browser</a></td>
                                                                        <td><a href="https://example.com/">https://example.com</a></td>
                                                                        <td>alias=BrowserA</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Open%20Browser" class="name">Open Browser</a></td>
                                                                        <td><a href="https://example.com/">https://example.com</a></td>
                                                                        <td>alias=BrowserB</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>&amp;{aliases}</td>
                                                                        <td><a href="#Get%20Browser%20Aliases" class="name">Get Browser Aliases</a></td>
                                                                        <td></td>
                                                                        <td># &amp;{aliases} = { BrowserA=1|BrowserB=2 }</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Log</td>
                                                                        <td>${aliases.BrowserA}</td>
                                                                        <td></td>
                                                                        <td># logs <code>1</code></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>FOR</td>
                                                                        <td>${alias}</td>
                                                                        <td>IN</td>
                                                                        <td>@{aliases}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Log</td>
                                                                        <td>${alias}</td>
                                                                        <td># logs <code>BrowserA</code> and <code>BrowserB</code></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>END</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>See <a href="#Switch%20Browser" class="name">Switch Browser</a> for more information and examples.
                                                                </p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-browser-capabilities">
                                                            <h2><a href="#get-browser-capabilities">Get Browser Capabilities</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get dictionary of browser properties</p>


                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${caps}=</td>
                                                                        <td>Get Browser Capabilities</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-browser-ids">
                                                            <h2><a href="#get-browser-ids">Get Browser Ids</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns index of all active browser as list.</p>


                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>@{browser_ids}=</td>
                                                                        <td>Get Browser Ids</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>FOR</td>
                                                                        <td>${id}</td>
                                                                        <td>IN</td>
                                                                        <td>@{browser_ids}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>@{window_titles}=</td>
                                                                        <td>Get Window Titles</td>
                                                                        <td>browser=${id}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td>Log</td>
                                                                        <td>Browser ${id} has these windows: ${window_titles}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>END</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>See <a href="#Switch%20Browser" class="name">Switch Browser</a> for more information and examples.
                                                                </p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-cookie">
                                                            <h2><a href="#get-cookie">Get Cookie</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns information of cookie with <code>name</code> as an object.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>If no cookie is found with <code>name</code>, keyword fails. The cookie object contains details about the cookie. Attributes available in the object are documented in the table below.</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <th>Attribute</th>
                                                                        <th>Explanation</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>name</td>
                                                                        <td>The name of a cookie.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>value</td>
                                                                        <td>Value of the cookie.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>path</td>
                                                                        <td>Indicates a URL path, for example <code>/</code>.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>domain</td>
                                                                        <td>The domain, the cookie is visible to.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>secure</td>
                                                                        <td>When true, the cookie is only used with HTTPS connections.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>httpOnly</td>
                                                                        <td>When true, the cookie is not accessible via JavaScript.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expiry</td>
                                                                        <td>Python datetime object indicating when the cookie expires.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>extra</td>
                                                                        <td>Possible attributes outside of the WebDriver specification</td>
                                                                    </tr>
                                                                </table>
                                                                <p>See the <a href="https://w3c.github.io/webdriver/#cookies">WebDriver specification</a> for details about the cookie information. Notice that <code>expiry</code> is specified as a <a href="https://docs.python.org/3/library/datetime.html#datetime.datetime">datetime object</a>,
                                                                    not as seconds since Unix Epoch like WebDriver natively does.</p>

                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#add-cookie" class="name">Add Cookie</a></td>
                                                                        <td>foo</td>
                                                                        <td>bar</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${cookie} =</td>
                                                                        <td><a href="#Get%20Cookie" class="name">Get Cookie</a></td>
                                                                        <td>foo</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${cookie.name}</td>
                                                                        <td>foo</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${cookie.value}</td>
                                                                        <td>bar</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be True</td>
                                                                        <td>${cookie.expiry.year} &gt; 2017</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-cookies">
                                                            <h2><a href="#get-cookies">Get Cookies</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns all cookies of the current page.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>as_dict</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>If <code>as_dict</code> argument evaluates as false, see <a href="#Boolean%20arguments" class="name">Boolean arguments</a> for more details, then cookie information is returned as a single string in format <code>name1=value1; name2=value2; name3=value3</code>.
                                                                    When
                                                                    <code>as_dict</code> argument evaluates as true, cookie information is returned as Autosphere dictionary format. The string format can be used, for example, for logging purposes or in headers when sending
                                                                    HTTP requests. The dictionary format is helpful when the result can be passed to requests library's Create Session keyword's optional cookies parameter.
                                                                </p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-element-attribute">
                                                            <h2><a href="#get-element-attribute">Get Element Attribute</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the value of <code>attribute</code> from the element
                                                                    <code>locator</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>attribute</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${id}=</td>
                                                                        <td><a href="#Get%20Element%20Attribute" class="name">Get Element Attribute</a></td>
                                                                        <td>css:h1</td>
                                                                        <td>id</td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-element-count">
                                                            <h2><a href="#get-element-count">Get Element Count</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the number of elements matching <code>locator</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>If you wish to assert the number of matching elements, use <a href="#Page%20Should%20Contain%20Element" class="name">Page Should Contain Element</a> with
                                                                    <code>limit</code> argument. Keyword will always return an integer.
                                                                </p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${count} =</td>
                                                                        <td><a href="#Get%20Element%20Count" class="name">Get Element Count</a></td>
                                                                        <td>name:div_name</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be True</td>
                                                                        <td>${count} &gt; 2</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-element-size">
                                                            <h2><a href="#get-element-size">Get Element Size</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns width and height of the element identified by <code>locator</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <p>Both width and height are returned as integers.</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${width}</td>
                                                                        <td>${height} =</td>
                                                                        <td><a href="#Get%20Element%20Size" class="name">Get Element Size</a></td>
                                                                        <td>css:div#container</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-element-status">
                                                            <h2><a href="#get-element-status">Get Element Status</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Return dictionary containing element status of:</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <ul>
                                                                    <li>visible</li>
                                                                    <li>enabled</li>
                                                                    <li>disabled</li>
                                                                    <li>focused</li>
                                                                </ul>
                                                                <p><code>locator</code> element locator</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>&amp;{res}</td>
                                                                        <td>Get Element Status</td>
                                                                        <td>class:special</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Log</td>
                                                                        <td>${res.visible}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Log</td>
                                                                        <td>${res.enabled}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Log</td>
                                                                        <td>${res.disabled}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Log</td>
                                                                        <td>${res.focused}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-horizontal-position">
                                                            <h2><a href="#get-horizontal-position">Get Horizontal Position</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the horizontal position of the element identified by
                                                                    <code>locator</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <p>The position is returned in pixels off the left side of the page, as an integer.</p>
                                                                <p>See also <a href="#Get%20Vertical%20Position" class="name">Get Vertical Position</a>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-list-items">
                                                            <h2><a href="#get-list-items">Get List Items</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns all labels or values of selection list <code>locator</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>values</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <p>Returns visible labels by default, but values can be returned by setting the
                                                                    <code>values</code> argument to a true value (see <a href="#Boolean%20arguments" class="name">Boolean arguments</a>).
                                                                </p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${labels} =</td>
                                                                        <td><a href="#Get%20List%20Items" class="name">Get List Items</a></td>
                                                                        <td>mylist</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${values} =</td>
                                                                        <td><a href="#Get%20List%20Items" class="name">Get List Items</a></td>
                                                                        <td>css:#example select</td>
                                                                        <td>values=True</td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-location">
                                                            <h2><a href="#get-location">Get Location</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the current browser window URL.</p>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-locations">
                                                            <h2><a href="#get-locations">Get Locations</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns and logs URLs of all windows of the selected browser.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>browser</td>
                                                                        <td></td>
                                                                        <td>CURRENT</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><b>Browser Scope:</b></p>
                                                                <p>The <code>browser</code> argument specifies the browser that shall return its windows information.
                                                                </p>
                                                                <ul>
                                                                    <li><code>browser</code> can be <code>index_or_alias</code> like in <a href="#Switch%20Browser" class="name">Switch Browser</a>.</li>
                                                                </ul>
                                                                <ul>
                                                                    <li>If <code>browser</code> is <code>CURRENT</code> (default, case-insensitive) the currently active browser is selected.</li>
                                                                </ul>
                                                                <ul>
                                                                    <li>If <code>browser</code> is <code>ALL</code> (case-insensitive) the window information of all windows of all opened browsers are returned.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-selected-list-label">
                                                            <h2><a href="#get-selected-list-label">Get Selected List Label</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the label of selected option from selection list <code>locator</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>If there are multiple selected options, the label of the first option is returned.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-selected-list-labels">
                                                            <h2><a href="#get-selected-list-labels">Get Selected List Labels</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns labels of selected options from selection list <code>locator</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-selected-list-value">
                                                            <h2><a href="#get-selected-list-value">Get Selected List Value</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the value of selected option from selection list <code>locator</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>If there are multiple selected options, the value of the first option is returned.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-selected-list-values">
                                                            <h2><a href="#get-selected-list-values">Get Selected List Values</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns values of selected options from selection list <code>locator</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>




                                                        <div class="keyword" id="get-source">
                                                            <h2><a href="#get-source">Get Source</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the entire HTML source of the current page or frame.</p>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-table-cell">
                                                            <h2><a href="#get-table-cell">Get Table Cell</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns contents of a table cell.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>row</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>column</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The table is located using the <code>locator</code> argument and its cell found using
                                                                    <code>row</code> and <code>column</code>. See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.
                                                                </p>
                                                                <p>Both row and column indexes start from 1, and header and footer rows are included in the count. It is possible to refer to rows and columns from the end by using negative indexes so that -1 is the last row/column,
                                                                    -2 is the second last, and so on.</p>
                                                                <p>All <code>&lt;th&gt;</code> and <code>&lt;td&gt;</code> elements anywhere in the table are considered to be cells.</p>
                                                                <p>See <a href="#Page%20Should%20Contain" class="name">Page Should Contain</a> for an explanation about the <code>loglevel</code> argument.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-testability-status">
                                                            <h2><a href="#get-testability-status">Get Testability Status</a></h2>

                                                            <div>



                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-text">
                                                            <h2><a href="#get-text">Get Text</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the text value of the element identified by <code>locator</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-title">
                                                            <h2><a href="#get-title">Get Title</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the title of the current page.</p>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-value">
                                                            <h2><a href="#get-value">Get Value</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the value attribute of the element identified by <code>locator</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-vertical-position">
                                                            <h2><a href="#get-vertical-position">Get Vertical Position</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the vertical position of the element identified by
                                                                    <code>locator</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <p>The position is returned in pixels off the top of the page, as an integer.</p>
                                                                <p>See also <a href="#Get%20Horizontal%20Position" class="name">Get Horizontal Position</a>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-webelement">
                                                            <h2><a href="#get-webelement">Get WebElement</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns the first WebElement matching the given <code>locator</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-webelements">
                                                            <h2><a href="#get-webelements">Get WebElements</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns a list of WebElement objects matching the <code>locator</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-window-handles">
                                                            <h2><a href="#get-window-handles">Get Window Handles</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns all child window handles of the selected browser as a list.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>browser</td>
                                                                        <td></td>
                                                                        <td>CURRENT</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Can be used as a list of windows to exclude with <a href="#Select%20Window" class="name">Select
                                                                        Window</a>.</p>
                                                                <p>How to select the <code>browser</code> scope of this keyword, see <a href="#Get%20Locations" class="name">Get Locations</a>.</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-window-identifiers">
                                                            <h2><a href="#get-window-identifiers">Get Window Identifiers</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns and logs id attributes of all windows of the selected browser.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>browser</td>
                                                                        <td></td>
                                                                        <td>CURRENT</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>How to select the <code>browser</code> scope of this keyword, see <a href="#Get%20Locations" class="name">Get Locations</a>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-window-names">
                                                            <h2><a href="#get-window-names">Get Window Names</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns and logs names of all windows of the selected browser.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>browser</td>
                                                                        <td></td>
                                                                        <td>CURRENT</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>How to select the <code>browser</code> scope of this keyword, see <a href="#Get%20Locations" class="name">Get Locations</a>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-window-position">
                                                            <h2><a href="#get-window-position">Get Window Position</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns current window position.</p>


                                                                <p>The position is relative to the top left corner of the screen. Returned values are integers. See also <a href="#Set%20Window%20Position" class="name">Set Window Position</a>.</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${x}</td>
                                                                        <td>${y}=</td>
                                                                        <td><a href="#Get%20Window%20Position" class="name">Get Window Position</a></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-window-size">
                                                            <h2><a href="#get-window-size">Get Window Size</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns current window width and height as integers.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>inner</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See also <a href="#Set%20Window%20Size" class="name">Set Window Size</a>.</p>

                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${width}</td>
                                                                        <td>${height}=</td>
                                                                        <td><a href="#Get%20Window%20Size" class="name">Get Window Size</a></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${width}</td>
                                                                        <td>${height}=</td>
                                                                        <td><a href="#Get%20Window%20Size" class="name">Get Window Size</a></td>
                                                                        <td>True</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-window-titles">
                                                            <h2><a href="#get-window-titles">Get Window Titles</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Returns and logs titles of all windows of the selected browser.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>browser</td>
                                                                        <td></td>
                                                                        <td>CURRENT</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>How to select the <code>browser</code> scope of this keyword, see <a href="#Get%20Locations" class="name">Get Locations</a>.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="go-back">
                                                            <h2><a href="#go-back">Go Back</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Simulates the user clicking the back button on their browser.</p>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="go-to">
                                                            <h2><a href="#go-to">Go To</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Navigates the current browser window to the provided <code>url</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>url</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="handle-alert">
                                                            <h2><a href="#handle-alert">Handle Alert</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Handles the current alert and returns its message.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>action</td>
                                                                        <td></td>
                                                                        <td>ACCEPT</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>By default, the alert is accepted, but this can be controlled with the <code>action</code> argument that supports the following case-insensitive values:</p>
                                                                <ul>
                                                                    <li><code>ACCEPT</code>: Accept the alert i.e. press <code>Ok</code>. Default.</li>
                                                                    <li><code>DISMISS</code>: Dismiss the alert i.e. press <code>Cancel</code>.</li>
                                                                    <li><code>LEAVE</code>: Leave the alert open.</li>
                                                                </ul>
                                                                <p>The <code>timeout</code> argument specifies how long to wait for the alert to appear. If it is not given, the global default <a href="#Timeout" class="name">timeout</a> is used instead.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Handle Alert</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td># Accept alert.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Handle Alert</td>
                                                                        <td>action=DISMISS</td>
                                                                        <td></td>
                                                                        <td># Dismiss alert.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Handle Alert</td>
                                                                        <td>timeout=10 s</td>
                                                                        <td></td>
                                                                        <td># Use custom timeout and accept alert.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Handle Alert</td>
                                                                        <td>DISMISS</td>
                                                                        <td>1 min</td>
                                                                        <td># Use custom timeout and dismiss alert.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${message} =</td>
                                                                        <td>Handle Alert</td>
                                                                        <td></td>
                                                                        <td># Accept alert and get its message.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${message} =</td>
                                                                        <td>Handle Alert</td>
                                                                        <td>LEAVE</td>
                                                                        <td># Leave alert open and get its message.</td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="highlight-elements">
                                                            <h2><a href="#highlight-elements">Highlight Elements</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Highlight all matching elements by locator.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>width</td>
                                                                        <td> str </td>
                                                                        <td> 2px</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>style</td>
                                                                        <td> str </td>
                                                                        <td> dotted</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>color</td>
                                                                        <td> str </td>
                                                                        <td> blue</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Highlighing is done by adding a colored outline around the elements with CSS styling.</p>
                                                                <p><code>locator</code> element locator <code>width</code> highlight outline width
                                                                    <code>style</code> highlight outline style <code>color</code> highlight outline color
                                                                </p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Highlight Elements</td>
                                                                        <td><a href="xpath://h2">xpath://h2</a></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="input-password">
                                                            <h2><a href="#input-password">Input Password</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Types the given password into the text field identified by
                                                                    <code>locator</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>password</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>clear</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax. See <a href="#Input%20Text" class="name">Input Text</a> for
                                                                    <code>clear</code> argument details.
                                                                </p>
                                                                <p>Difference compared to <a href="#Input%20Text" class="name">Input Text</a> is that this keyword does not log the given password on the INFO level. Notice that if you use the keyword like</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Input Password</td>
                                                                        <td>password_field</td>
                                                                        <td>password</td>
                                                                    </tr>
                                                                </table>
                                                                <p>the password is shown as a normal keyword argument. A way to avoid that is using variables like
                                                                </p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Input Password</td>
                                                                        <td>password_field</td>
                                                                        <td>${PASSWORD}</td>
                                                                    </tr>
                                                                </table>
                                                                <p>Please notice that Autosphere logs all arguments using the TRACE level and tests must not be executed using level below DEBUG if the password should not be logged in any format.</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="input-text">
                                                            <h2><a href="#input-text">Input Text</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Types the given <code>text</code> into the text field identified by
                                                                    <code>locator</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>clear</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>When <code>clear</code> is true, the input element is cleared before the text is typed into the element. When false, the previous text is not cleared from the element. Use <a href="#Input%20Password" class="name">Input Password</a> if you do not want the given
                                                                    <code>text</code> to be logged.
                                                                </p>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax. See the <a href="#Boolean%20arguments" class="name">Boolean
                                                                        arguments</a> section how Boolean values are handled.</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="input-text-into-alert">
                                                            <h2><a href="#input-text-into-alert">Input Text Into Alert</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Types the given <code>text</code> into an input field in an alert.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>action</td>
                                                                        <td></td>
                                                                        <td>ACCEPT</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The alert is accepted by default, but that behavior can be controlled by using the
                                                                    <code>action</code> argument same way as with <a href="#Handle%20Alert" class="name">Handle
                                                                        Alert</a>.
                                                                </p>
                                                                <p><code>timeout</code> specifies how long to wait for the alert to appear. If it is not given, the global default <a href="#Timeout" class="name">timeout</a> is used instead.</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="input-text-when-element-is-visible">
                                                            <h2><a href="#input-text-when-element-is-visible">Input Text When Element Is Visible</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Input text into locator after it has become visible.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator</p>
                                                                <p><code>text</code> insert text to locator</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Input Text When Element Is Visible</td>
                                                                        <td>//input[@id="freetext"]</td>
                                                                        <td>my feedback</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="is-alert-present">
                                                            <h2><a href="#is-alert-present">Is Alert Present</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Is alert box present, which can be identified with text and action can also be done which by default is ACCEPT.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>action</td>
                                                                        <td> str </td>
                                                                        <td> ACCEPT</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Other possible actions are DISMISS and LEAVE.</p>
                                                                <p><code>text</code> check if alert text is matching to this, if None will check if alert is present at all</p>
                                                                <p><code>action</code> possible action if alert is present, default ACCEPT</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Is Alert Present</td>
                                                                        <td>alert message</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="is-checkbox-selected">
                                                            <h2><a href="#is-checkbox-selected">Is Checkbox Selected</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Is checkbox selected</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Is Checkbox Selected</td>
                                                                        <td>id:taxes-paid</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="is-element-attribute-equal-to">
                                                            <h2><a href="#is-element-attribute-equal-to">Is Element Attribute Equal To</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Is element attribute equal to expected value</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>attribute</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator</p>
                                                                <p><code>attribute</code> element attribute to check for</p>
                                                                <p><code>expected</code> is attribute value equal to this</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Is Element Attribute Equal To</td>
                                                                        <td>h1</td>
                                                                        <td>id</td>
                                                                        <td>main</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="is-element-disabled">
                                                            <h2><a href="#is-element-disabled">Is Element Disabled</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Is element disabled</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>missing_ok</td>
                                                                        <td> bool </td>
                                                                        <td> True</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator <code>missing_ok</code> default True, set to False if keyword should Fail if element does not exist</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Is Element Disabled</td>
                                                                        <td>//input[@type="submit"]</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="is-element-enabled">
                                                            <h2><a href="#is-element-enabled">Is Element Enabled</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Is element enabled</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>missing_ok</td>
                                                                        <td> bool </td>
                                                                        <td> True</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator <code>missing_ok</code> default True, set to False if keyword should Fail if element does not exist</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Is Element Enabled</td>
                                                                        <td>input.field1</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="is-element-focused">
                                                            <h2><a href="#is-element-focused">Is Element Focused</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Is element focused</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>missing_ok</td>
                                                                        <td> bool </td>
                                                                        <td> True</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator <code>missing_ok</code> default True, set to False if keyword should Fail if element does not exist</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Is Element Focused</td>
                                                                        <td>//input[@id="freetext"]</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="is-element-text">
                                                            <h2><a href="#is-element-text">Is Element Text</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Is element text expected</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ignore_case</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator</p>
                                                                <p><code>expected</code> expected element text</p>
                                                                <p><code>ignore_case</code> should check be case insensitive, default False</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Is Element Text</td>
                                                                        <td>id:name</td>
                                                                        <td>john doe</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Is Element Text</td>
                                                                        <td>id:name</td>
                                                                        <td>john doe</td>
                                                                        <td>ignore_case=True</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="is-element-visible">
                                                            <h2><a href="#is-element-visible">Is Element Visible</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Is element visible</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>missing_ok</td>
                                                                        <td> bool </td>
                                                                        <td> True</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator <code>missing_ok</code> default True, set to False if keyword should Fail if element does not exist</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Is Element Visible</td>
                                                                        <td>id:confirmation</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="is-list-selected">
                                                            <h2><a href="#is-list-selected">Is List Selected</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Is any option selected in the</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Is List Selected</td>
                                                                        <td>id:cars</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="is-list-selection">
                                                            <h2><a href="#is-list-selection">Is List Selection</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Is list selected with expected values</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*expected</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator</p>
                                                                <p><code>expected</code> expected selected options</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Is List Selection</td>
                                                                        <td>id:cars</td>
                                                                        <td>Ford</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="is-location">
                                                            <h2><a href="#is-location">Is Location</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Is current URL expected url</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>url</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>url</code> expected current URL</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Open Available Browser</td>
                                                                        <td><a href="../../../../index.html">https://www.Autosphere.com</a></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Is Location</td>
                                                                        <td><a href="../../../../index.html">https://www.Autosphere.com</a></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="is-radio-button-selected">
                                                            <h2><a href="#is-radio-button-selected">Is Radio Button Selected</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Is any radio button selected in the button group</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>group_name</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>group_name</code> radio button group name</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Is Radio Button Selected</td>
                                                                        <td>group_name=gender</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="is-radio-button-set-to">
                                                            <h2><a href="#is-radio-button-set-to">Is Radio Button Set To</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Is radio button group set to expected value</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>group_name</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>value</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>group_name</code> radio button group name</p>
                                                                <p><code>value</code> expected value</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Is Radio Button Set To</td>
                                                                        <td>group_name=gender</td>
                                                                        <td>value=female</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="is-textarea-value">
                                                            <h2><a href="#is-textarea-value">Is Textarea Value</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Is textarea matching expected value</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator</p>
                                                                <p><code>expected</code> expected textarea value</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Is Textarea Value</td>
                                                                        <td>//textarea</td>
                                                                        <td>Yours sincerely</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="is-textfield-value">
                                                            <h2><a href="#is-textfield-value">Is Textfield Value</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Is textfield value expected</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator</p>
                                                                <p><code>expected</code> expected textfield value</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Is Textfield Value</td>
                                                                        <td>id:lname</td>
                                                                        <td>Lastname</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="is-title">
                                                            <h2><a href="#is-title">Is Title</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Is page title expected</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>title</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>title</code> expected title value</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${res}</td>
                                                                        <td>Is Title</td>
                                                                        <td>Webpage title text</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="list-selection-should-be">
                                                            <h2><a href="#list-selection-should-be">List Selection Should Be</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies selection list <code>locator</code> has <code>expected</code> options selected.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*expected</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>It is possible to give expected options both as visible labels and as values. mixing labels and values is not possible. Order of the selected options is not validated.</p>
                                                                <p>If no expected options are given, validates that the list has no selections. A more explicit alternative is using <a href="#List%20Should%20Have%20No%20Selections" class="name">List Should
                                                                        Have No Selections</a>.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#List%20Selection%20Should%20Be" class="name">List Selection Should Be</a></td>
                                                                        <td>gender</td>
                                                                        <td>Female</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#List%20Selection%20Should%20Be" class="name">List Selection Should Be</a></td>
                                                                        <td>interests</td>
                                                                        <td>Test Automation</td>
                                                                        <td>Python</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="list-should-have-no-selections">
                                                            <h2><a href="#list-should-have-no-selections">List Should Have No Selections</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies selection list <code>locator</code> has no options selected.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="location-should-be">
                                                            <h2><a href="#location-should-be">Location Should Be</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that the current URL is exactly <code>url</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>url</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The <code>url</code> argument contains the exact url that should exist in browser.</p>
                                                                <p>The <code>message</code> argument can be used to override the default error message.</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="location-should-contain">
                                                            <h2><a href="#location-should-contain">Location Should Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that the current URL contains <code>expected</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The <code>expected</code> argument contains the expected value in url.</p>
                                                                <p>The <code>message</code> argument can be used to override the default error message.</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="locator-should-match-x-times">
                                                            <h2><a href="#locator-should-match-x-times">Locator Should Match X Times</a></h2>

                                                            <div>

                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>x</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="log-location">
                                                            <h2><a href="#log-location">Log Location</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Logs and returns the current browser window URL.</p>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="log-source">
                                                            <h2><a href="#log-source">Log Source</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Logs and returns the HTML source of the current page or frame.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>INFO</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The <code>loglevel</code> argument defines the used log level. Valid log levels are
                                                                    <code>WARN</code>, <code>INFO</code> (default), <code>DEBUG</code>, <code>TRACE</code> and
                                                                    <code>NONE</code> (no logging).
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="log-title">
                                                            <h2><a href="#log-title">Log Title</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Logs and returns the title of the current page.</p>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="maximize-browser-window">
                                                            <h2><a href="#maximize-browser-window">Maximize Browser Window</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Maximizes current browser window.</p>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="mouse-down">
                                                            <h2><a href="#mouse-down">Mouse Down</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Simulates pressing the left mouse button on the element <code>locator</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <p>The element is pressed without releasing the mouse button.</p>
                                                                <p>See also the more specific keywords <a href="#Mouse%20Down%20On%20Image" class="name">Mouse
                                                                        Down On Image</a> and <a href="#Mouse%20Down%20On%20Link" class="name">Mouse Down On Link</a>.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="mouse-down-on-image">
                                                            <h2><a href="#mouse-down-on-image">Mouse Down On Image</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Simulates a mouse down event on an image identified by <code>locator</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax. When using the default locator strategy, images are searched using
                                                                    <code>id</code>, <code>name</code>, <code>src</code> and <code>alt</code>.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="mouse-down-on-link">
                                                            <h2><a href="#mouse-down-on-link">Mouse Down On Link</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Simulates a mouse down event on a link identified by <code>locator</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax. When using the default locator strategy, links are searched using
                                                                    <code>id</code>, <code>name</code>, <code>href</code> and the link text.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="mouse-out">
                                                            <h2><a href="#mouse-out">Mouse Out</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Simulates moving the mouse away from the element <code>locator</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="mouse-over">
                                                            <h2><a href="#mouse-over">Mouse Over</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Simulates hovering the mouse over the element <code>locator</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="mouse-up">
                                                            <h2><a href="#mouse-up">Mouse Up</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Simulates releasing the left mouse button on the element <code>locator</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="open-available-browser">
                                                            <h2><a href="#open-available-browser">Open Available Browser</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Opens the first available browser in the system in preferred order, or the given browser (<code>browser_selection</code>).</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>url</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>use_profile</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>headless</td>
                                                                        <td> bool </td>
                                                                        <td> None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>maximized</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>browser_selection</td>
                                                                        <td> typing.Any </td>
                                                                        <td> AUTO</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>alias</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>profile_name</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>profile_path</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>preferences</td>
                                                                        <td> dict </td>
                                                                        <td> None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>proxy</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>url</code> URL to open</p>
                                                                <p><code>use_profile</code> Set browser profile, default <code>False</code> (Chrome/Chromium only)
                                                                </p>
                                                                <p><code>headless</code> Run in headless mode, default <code>False</code></p>
                                                                <p><code>maximized</code> Run window maximized, default <code>False</code></p>
                                                                <p><code>browser_selection</code> browser name, default <code>AUTOMATIC_BROWSER_SELECTION</code>
                                                                </p>
                                                                <p><code>alias</code> Custom name for browser</p>
                                                                <p><code>profile_name</code> Name of profile (if profile enabled)</p>
                                                                <p><code>profile_path</code> Path to profiles (if profile enabled)</p>
                                                                <p><code>preferences</code> Profile preferences (Chrome/Chromium only)</p>
                                                                <p><code>proxy</code> Proxy server address (Chrome only)</p>
                                                                <p>Returns an index of the webdriver session.</p>
                                                                <h4>Process of opening a browser</h4>
                                                                <p>1. Get the order of browsers</p>
                                                                <p>2. Loop the list of preferred browsers</p>
                                                                <p>a. Set the webdriver options for the browser</p>
                                                                <p>b. Create the webdriver using existing installation</p>
                                                                <p>c. (If step b. failed) Download and install webdriver, try again</p>
                                                                <p>d. (If step c. failed) Try starting webdriver in headless mode</p>
                                                                <p>3. Open the URL</p>
                                                                <p>Returns index or custom alias for the browser instance.</p>
                                                                <p>Raises <code>BrowserNotFoundError</code> if unable to open the browser.</p>
                                                                <p>For information about Safari webdriver setup, see <a href="https://developer.apple.com/documentation/webkit/testing_with_webdriver_in_safari">https://developer.apple.com/documentation/webkit/testing_with_webdriver_in_safari</a>
                                                                </p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${idx1}</td>
                                                                        <td>Open Available Browser</td>
                                                                        <td><a href="../../../../index.html">https://www.Autosphere.com</a></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${idx2}</td>
                                                                        <td>Open Available Browser</td>
                                                                        <td>${URL}</td>
                                                                        <td>browser_selection=opera,firefox</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Open Available Browser</td>
                                                                        <td>${URL}</td>
                                                                        <td>headless=True</td>
                                                                        <td>proxy=localhost:8899</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="open-browser">
                                                            <h2><a href="#open-browser">Open Browser</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Opens a new browser instance to the optional <code>url</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>url</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>browser</td>
                                                                        <td></td>
                                                                        <td>firefox</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>alias</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>remote_url</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>desired_capabilities</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ff_profile_dir</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>options</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>service_log_path</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>executable_path</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The <code>browser</code> argument specifies which browser to use. The supported browsers are listed in the table below. The browser names are case-insensitive and some browsers have multiple supported names.</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <th>Browser</th>
                                                                        <th>Name(s)</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Firefox</td>
                                                                        <td>firefox, ff</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Google Chrome</td>
                                                                        <td>googlechrome, chrome, gc</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Headless Firefox</td>
                                                                        <td>headlessfirefox</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Headless Chrome</td>
                                                                        <td>headlesschrome</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Internet Explorer</td>
                                                                        <td>internetexplorer, ie</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Edge</td>
                                                                        <td>edge</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Safari</td>
                                                                        <td>safari</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Opera</td>
                                                                        <td>opera</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Android</td>
                                                                        <td>android</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Iphone</td>
                                                                        <td>iphone</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>PhantomJS</td>
                                                                        <td>phantomjs</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>HTMLUnit</td>
                                                                        <td>htmlunit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>HTMLUnit with Javascript</td>
                                                                        <td>htmlunitwithjs</td>
                                                                    </tr>
                                                                </table>
                                                                <p>To be able to actually use one of these browsers, you need to have a matching browser driver available. </p>
                                                                <p>After opening the browser, it is possible to use optional <code>url</code> to navigate the browser to the desired address.</p>
                                                                <p>Optional <code>alias</code> is an alias given for this browser instance and it can be used for switching between browsers. When same <code>alias</code> is given with two <a href="#Open%20Browser" class="name">Open Browser</a> keywords, the first keyword will open a new browser, but the second one will switch to the already opened browser and will not open a new browser. The <code>alias</code> definition overrules <code>browser</code> definition. When same <code>alias</code> is used but a different <code>browser</code> is defined, then switch to a browser with same alias is done and new browser is not opened. An alternative approach for
                                                                    switching is using an index returned by this keyword. These indices start from 1, are incremented when new browsers are opened, and reset back to 1 when <a href="#Close%20All%20Browsers" class="name">Close All Browsers</a> is called. See <a href="#Switch%20Browser" class="name">Switch Browser</a> for more information and examples.
                                                                </p>




                                                                <p>Arguments allow defining Python data types and arguments are evaluated by using Python <a href="https://docs.python.org/3/library/ast.html#ast.literal_eval">ast.literal_eval</a>. Strings must be quoted with
                                                                    single or double quotes, example "value" or 'value'. It is also possible to define other Python builtin data types, example True or None, by not using quotes around the arguments.</p>
                                                                <p>The string format is space friendly. Usually, spaces do not alter the defining methods or attributes. There are two exceptions. In some Autosphere test data formats, two or more spaces are considered as
                                                                    cell separator and instead of defining a single argument, two or more arguments may be defined. Spaces in string arguments are not removed and are left as is. Example add_argument ( "--headless" ) is same
                                                                    as add_argument("--headless"). But add_argument(" --headless ") is not same same as add_argument ( "--headless" ), because spaces inside of quotes are not removed. Please note that if options string contains
                                                                    backslash, example a Windows OS path, the backslash needs escaping both in Autosphere data and in Python side. This means single backslash must be writen using four backslash characters. Example, Windows
                                                                    path: "C:\path\to\profile" must be written as "C:\\\\path\\\to\\\\profile". Another way to write backslash is use Python <a href="https://docs.python.org/3/reference/lexical_analysis.html#string-and-bytes-literals">raw
                                                                        strings</a> and example write: r"C:\\path\\to\\profile".</p>

                                                                <pre>options = webdriver.ChromeOptions()
options.add_argument('--disable-dev-shm-usage')
return options
</code></pre>
                                                                <p>Then the ${options} variable can be used as an argument to <code>options</code>.</p>
                                                                <p>Example the <code>options</code> argument can be used to launch Chomium-based applications which utilize the <a href="https://bitbucket.org/chromiumembedded/cef/wiki/UsingChromeDriver">Chromium Embedded
                                                                        Framework</a> . To lauch Chomium-based application, use <code>options</code> to define binary_location attribute and use add_argument method to define remote-debugging-port port for the application. Once the browser is opened,
                                                                    the test can interact with the embedded web-content of the system under test.</p>
                                                                <p>Optional <code>service_log_path</code> argument defines the name of the file where to write the browser driver logs. If the <code>service_log_path</code> argument contain a marker
                                                                    <code>{index}</code>, it will be automatically replaced with unique running index preventing files to be overwritten. Indices start's from 1, and how they are represented can be customized using Python's
                                                                    <a href="https://docs.python.org/3/library/string.html#format-string-syntax">format string
                                                                        syntax</a>.
                                                                </p>
                                                                <p>Optional <code>executable_path</code> argument defines the path to the driver executable, example to a chromedriver or a geckodriver. If not defined it is assumed the executable is in the <a href="https://en.wikipedia.org/wiki/PATH_(variable)">$PATH</a>.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Open%20Browser" class="name">Open Browser</a></td>
                                                                        <td><a href="http://example.com/">http://example.com</a></td>
                                                                        <td>Chrome</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Open%20Browser" class="name">Open Browser</a></td>
                                                                        <td><a href="http://example.com/">http://example.com</a></td>
                                                                        <td>Firefox</td>
                                                                        <td>alias=Firefox</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Open%20Browser" class="name">Open Browser</a></td>
                                                                        <td><a href="http://example.com/">http://example.com</a></td>
                                                                        <td>Edge</td>
                                                                        <td>remote_url=http://127.0.0.1:4444/wd/hub</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Open%20Browser" class="name">Open Browser</a></td>
                                                                        <td>about:blank</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Open%20Browser" class="name">Open Browser</a></td>
                                                                        <td>browser=Chrome</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Alias examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${1_index} =</td>
                                                                        <td><a href="#Open%20Browser" class="name">Open Browser</a></td>
                                                                        <td><a href="http://example.com/">http://example.com</a></td>
                                                                        <td>Chrome</td>
                                                                        <td>alias=Chrome</td>
                                                                        <td># Opens new browser because alias is new.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${2_index} =</td>
                                                                        <td><a href="#Open%20Browser" class="name">Open Browser</a></td>
                                                                        <td><a href="http://example.com/">http://example.com</a></td>
                                                                        <td>Firefox</td>
                                                                        <td></td>
                                                                        <td># Opens new browser because alias is not defined.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${3_index} =</td>
                                                                        <td><a href="#Open%20Browser" class="name">Open Browser</a></td>
                                                                        <td><a href="http://example.com/">http://example.com</a></td>
                                                                        <td>Chrome</td>
                                                                        <td>alias=Chrome</td>
                                                                        <td># Switches to the browser with Chrome alias.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${4_index} =</td>
                                                                        <td><a href="#Open%20Browser" class="name">Open Browser</a></td>
                                                                        <td><a href="http://example.com/">http://example.com</a></td>
                                                                        <td>Chrome</td>
                                                                        <td>alias=${1_index}</td>
                                                                        <td># Switches to the browser with Chrome alias.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${1_index}</td>
                                                                        <td>${3_index}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${1_index}</td>
                                                                        <td>${4_index}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Should Be Equal</td>
                                                                        <td>${2_index}</td>
                                                                        <td>${2}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Example when using <a href="https://seleniumhq.github.io/selenium/docs/api/py/webdriver_chrome/selenium.webdriver.chrome.options.html#selenium.webdriver.chrome.options.Options">Chrome
                                                                        options</a> method:</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="open-chrome-browser">
                                                            <h2><a href="#open-chrome-browser">Open Chrome Browser</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Open Chrome browser. See <code>Open Available Browser</code> for descriptions of arguments.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>url</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>use_profile</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>headless</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>maximized</td>
                                                                        <td> bool </td>
                                                                        <td> False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>alias</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>profile_name</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>profile_path</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>preferences</td>
                                                                        <td> dict </td>
                                                                        <td> None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>proxy</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="open-context-menu">
                                                            <h2><a href="#open-context-menu">Open Context Menu</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Opens the context menu on the element identified by <code>locator</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="open-headless-chrome-browser">
                                                            <h2><a href="#open-headless-chrome-browser">Open Headless Chrome Browser</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Open Chrome browser in headless mode.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>url</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>url</code> URL to open</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${idx}</td>
                                                                        <td>Open Headless Chrome Browser</td>
                                                                        <td><a href="https://www.google.com/">https://www.google.com</a></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="open-user-browser">
                                                            <h2><a href="#open-user-browser">Open User Browser</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Open URL with user's default browser</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>url</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>tab</td>
                                                                        <td></td>
                                                                        <td>True</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>url</code> URL to open <code>tab</code> defines is url is opened in a tab (default True) or in new window (False)</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Open User Browser</td>
                                                                        <td><a href="https://www.google.com">https://www.google.com</a></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Open User Browser</td>
                                                                        <td><a href="https://www.google.com">https://www.google.com</a></td>
                                                                        <td>tab=False</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="page-should-contain">
                                                            <h2><a href="#page-should-contain">Page Should Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that current page contains <code>text</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>If this keyword fails, it automatically logs the page source using the log level specified with the optional <code>loglevel</code> argument. Valid log levels are <code>DEBUG</code>,
                                                                    <code>INFO</code> (default), <code>WARN</code>, and <code>NONE</code>. If the log level is
                                                                    <code>NONE</code> or below the current active log level the source will not be logged.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="page-should-contain-button">
                                                            <h2><a href="#page-should-contain-button">Page Should Contain Button</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies button <code>locator</code> is found from current page.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See <a href="#Page%20Should%20Contain%20Element" class="name">Page Should Contain Element</a> for an explanation about <code>message</code> and <code>loglevel</code> arguments.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax. When using the default locator strategy, buttons are searched using
                                                                    <code>id</code>, <code>name</code>, and <code>value</code>.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="page-should-contain-checkbox">
                                                            <h2><a href="#page-should-contain-checkbox">Page Should Contain Checkbox</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies checkbox <code>locator</code> is found from the current page.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See <a href="#Page%20Should%20Contain%20Element" class="name">Page Should Contain Element</a> for an explanation about <code>message</code> and <code>loglevel</code> arguments.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="page-should-contain-element">
                                                            <h2><a href="#page-should-contain-element">Page Should Contain Element</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that element <code>locator</code> is found on the current page.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>limit</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <p>The <code>message</code> argument can be used to override the default error message.</p>
                                                                <p>The <code>limit</code> argument can used to define how many elements the page should contain. When <code>limit</code> is <code>None</code> (default) page can contain one or more elements. When limit is a number,
                                                                    page must contain same number of elements.</p>
                                                                <p>See <a href="#Page%20Should%20Contain" class="name">Page Should Contain</a> for an explanation about the <code>loglevel</code> argument.</p>
                                                                <p>Examples assumes that locator matches to two elements.</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Page%20Should%20Contain%20Element" class="name">Page Should Contain Element</a>
                                                                        </td>
                                                                        <td>div_name</td>
                                                                        <td>limit=1</td>
                                                                        <td># Keyword fails.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Page%20Should%20Contain%20Element" class="name">Page Should Contain Element</a>
                                                                        </td>
                                                                        <td>div_name</td>
                                                                        <td>limit=2</td>
                                                                        <td># Keyword passes.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Page%20Should%20Contain%20Element" class="name">Page Should Contain Element</a>
                                                                        </td>
                                                                        <td>div_name</td>
                                                                        <td>limit=none</td>
                                                                        <td># None is considered one or more.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Page%20Should%20Contain%20Element" class="name">Page Should Contain Element</a>
                                                                        </td>
                                                                        <td>div_name</td>
                                                                        <td></td>
                                                                        <td># Same as above.</td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="page-should-contain-image">
                                                            <h2><a href="#page-should-contain-image">Page Should Contain Image</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies image identified by <code>locator</code> is found from current page.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax. When using the default locator strategy, images are searched using
                                                                    <code>id</code>, <code>name</code>, <code>src</code> and <code>alt</code>.
                                                                </p>
                                                                <p>See <a href="#Page%20Should%20Contain%20Element" class="name">Page Should Contain Element</a> for an explanation about <code>message</code> and <code>loglevel</code> arguments.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="page-should-contain-link">
                                                            <h2><a href="#page-should-contain-link">Page Should Contain Link</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies link identified by <code>locator</code> is found from current page.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax. When using the default locator strategy, links are searched using
                                                                    <code>id</code>, <code>name</code>, <code>href</code> and the link text.
                                                                </p>
                                                                <p>See <a href="#Page%20Should%20Contain%20Element" class="name">Page Should Contain Element</a> for an explanation about <code>message</code> and <code>loglevel</code> arguments.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="page-should-contain-list">
                                                            <h2><a href="#page-should-contain-list">Page Should Contain List</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies selection list <code>locator</code> is found from current page.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See <a href="#Page%20Should%20Contain%20Element" class="name">Page Should Contain Element</a> for an explanation about <code>message</code> and <code>loglevel</code> arguments.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="page-should-contain-radio-button">
                                                            <h2><a href="#page-should-contain-radio-button">Page Should Contain Radio Button</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies radio button <code>locator</code> is found from current page.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See <a href="#Page%20Should%20Contain%20Element" class="name">Page Should Contain Element</a> for an explanation about <code>message</code> and <code>loglevel</code> arguments.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax. When using the default locator strategy, radio buttons are searched using <code>id</code>,
                                                                    <code>name</code> and <code>value</code>.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="page-should-contain-textfield">
                                                            <h2><a href="#page-should-contain-textfield">Page Should Contain Textfield</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies text field <code>locator</code> is found from current page.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See <a href="#Page%20Should%20Contain%20Element" class="name">Page Should Contain Element</a> for an explanation about <code>message</code> and <code>loglevel</code> arguments.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="page-should-not-contain">
                                                            <h2><a href="#page-should-not-contain">Page Should Not Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies the current page does not contain <code>text</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See <a href="#Page%20Should%20Contain" class="name">Page Should Contain</a> for an explanation about the <code>loglevel</code> argument.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="page-should-not-contain-button">
                                                            <h2><a href="#page-should-not-contain-button">Page Should Not Contain Button</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies button <code>locator</code> is not found from current page.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See <a href="#Page%20Should%20Contain%20Element" class="name">Page Should Contain Element</a> for an explanation about <code>message</code> and <code>loglevel</code> arguments.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax. When using the default locator strategy, buttons are searched using
                                                                    <code>id</code>, <code>name</code>, and <code>value</code>.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="page-should-not-contain-checkbox">
                                                            <h2><a href="#page-should-not-contain-checkbox">Page Should Not Contain Checkbox</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies checkbox <code>locator</code> is not found from the current page.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See <a href="#Page%20Should%20Contain%20Element" class="name">Page Should Contain Element</a> for an explanation about <code>message</code> and <code>loglevel</code> arguments.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="page-should-not-contain-element">
                                                            <h2><a href="#page-should-not-contain-element">Page Should Not Contain Element</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that element <code>locator</code> is not found on the current page.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <p>See <a href="#Page%20Should%20Contain" class="name">Page Should Contain</a> for an explanation about <code>message</code> and <code>loglevel</code> arguments.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="page-should-not-contain-image">
                                                            <h2><a href="#page-should-not-contain-image">Page Should Not Contain Image</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies image identified by <code>locator</code> is not found from current page.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax. When using the default locator strategy, images are searched using
                                                                    <code>id</code>, <code>name</code>, <code>src</code> and <code>alt</code>.
                                                                </p>
                                                                <p>See <a href="#Page%20Should%20Contain%20Element" class="name">Page Should Contain Element</a> for an explanation about <code>message</code> and <code>loglevel</code> arguments.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="page-should-not-contain-link">
                                                            <h2><a href="#page-should-not-contain-link">Page Should Not Contain Link</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies link identified by <code>locator</code> is not found from current page.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax. When using the default locator strategy, links are searched using
                                                                    <code>id</code>, <code>name</code>, <code>href</code> and the link text.
                                                                </p>
                                                                <p>See <a href="#Page%20Should%20Contain%20Element" class="name">Page Should Contain Element</a> for an explanation about <code>message</code> and <code>loglevel</code> arguments.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="page-should-not-contain-list">
                                                            <h2><a href="#page-should-not-contain-list">Page Should Not Contain List</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies selection list <code>locator</code> is not found from current page.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See <a href="#Page%20Should%20Contain%20Element" class="name">Page Should Contain Element</a> for an explanation about <code>message</code> and <code>loglevel</code> arguments.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="page-should-not-contain-radio-button">
                                                            <h2><a href="#page-should-not-contain-radio-button">Page Should Not Contain Radio Button</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies radio button <code>locator</code> is not found from current page.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See <a href="#Page%20Should%20Contain%20Element" class="name">Page Should Contain Element</a> for an explanation about <code>message</code> and <code>loglevel</code> arguments.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax. When using the default locator strategy, radio buttons are searched using <code>id</code>,
                                                                    <code>name</code> and <code>value</code>.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="page-should-not-contain-textfield">
                                                            <h2><a href="#page-should-not-contain-textfield">Page Should Not Contain Textfield</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies text field <code>locator</code> is not found from current page.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See <a href="#Page%20Should%20Contain%20Element" class="name">Page Should Contain Element</a> for an explanation about <code>message</code> and <code>loglevel</code> arguments.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="press-key">
                                                            <h2><a href="#press-key">Press Key</a></h2>

                                                            <div>

                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>key</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="press-keys">
                                                            <h2><a href="#press-keys">Press Keys</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Simulates the user pressing key(s) to an element or on the active browser.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*keys</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>




                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Press%20Keys" class="name">Press Keys</a></td>
                                                                        <td>text_field</td>
                                                                        <td>AAAAA</td>
                                                                        <td></td>
                                                                        <td># Sends string "AAAAA" to element.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Press%20Keys" class="name">Press Keys</a></td>
                                                                        <td>None</td>
                                                                        <td>BBBBB</td>
                                                                        <td></td>
                                                                        <td># Sends string "BBBBB" to currently active browser.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Press%20Keys" class="name">Press Keys</a></td>
                                                                        <td>text_field</td>
                                                                        <td>E+N+D</td>
                                                                        <td></td>
                                                                        <td># Sends string "END" to element.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Press%20Keys" class="name">Press Keys</a></td>
                                                                        <td>text_field</td>
                                                                        <td>XXX</td>
                                                                        <td>YY</td>
                                                                        <td># Sends strings "XXX" and "YY" to element.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Press%20Keys" class="name">Press Keys</a></td>
                                                                        <td>text_field</td>
                                                                        <td>XXX+YY</td>
                                                                        <td></td>
                                                                        <td># Same as above.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Press%20Keys" class="name">Press Keys</a></td>
                                                                        <td>text_field</td>
                                                                        <td>ALT+ARROW_DOWN</td>
                                                                        <td></td>
                                                                        <td># Pressing "ALT" key down, then pressing ARROW_DOWN and then releasing both keys.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Press%20Keys" class="name">Press Keys</a></td>
                                                                        <td>text_field</td>
                                                                        <td>ALT</td>
                                                                        <td>ARROW_DOWN</td>
                                                                        <td># Pressing "ALT" key and then pressing ARROW_DOWN.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Press%20Keys" class="name">Press Keys</a></td>
                                                                        <td>text_field</td>
                                                                        <td>CTRL+c</td>
                                                                        <td></td>
                                                                        <td># Pressing CTRL key down, sends string "c" and then releases CTRL key.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Press%20Keys" class="name">Press Keys</a></td>
                                                                        <td>button</td>
                                                                        <td>RETURN</td>
                                                                        <td></td>
                                                                        <td># Pressing "ENTER" key to element.</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="radio-button-should-be-set-to">
                                                            <h2><a href="#radio-button-should-be-set-to">Radio Button Should Be Set To</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies radio button group <code>group_name</code> is set to
                                                                    <code>value</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>group_name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>value</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>group_name</code> is the <code>name</code> of the radio button group.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="radio-button-should-not-be-selected">
                                                            <h2><a href="#radio-button-should-not-be-selected">Radio Button Should Not Be Selected</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies radio button group <code>group_name</code> has no selection.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>group_name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>group_name</code> is the <code>name</code> of the radio button group.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="register-keyword-to-run-on-failure">
                                                            <h2><a href="#register-keyword-to-run-on-failure">Register Keyword To Run On Failure</a></h2>

                                                            <div>

                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>keyword</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                                <p>The initial keyword to use is set when <a href="#Importing" class="name">importing</a> the library, and the keyword that is used by default is <a href="#Capture%20Page%20Screenshot" class="name">Capture Page Screenshot</a>.
                                                                    Taking a screenshot when something failed is a very useful feature, but notice that it can slow down the execution.</p>
                                                                <p>It is possible to use string <code>NOTHING</code> or <code>NONE</code>, case-insensitively, as well as Python <code>None</code> to disable this feature altogether.</p>
                                                                <p>This keyword returns the name of the previously registered failure keyword or Python
                                                                    <code>None</code> if this functionality was previously disabled. The return value can be always used to restore the original value later.
                                                                </p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Register%20Keyword%20To%20Run%20On%20Failure" class="name">Register Keyword To
                                                                                Run On Failure</a></td>
                                                                        <td>Log Source</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${previous kw}=</td>
                                                                        <td><a href="#Register%20Keyword%20To%20Run%20On%20Failure" class="name">Register Keyword To
                                                                                Run On Failure</a></td>
                                                                        <td>NONE</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Register%20Keyword%20To%20Run%20On%20Failure" class="name">Register Keyword To
                                                                                Run On Failure</a></td>
                                                                        <td>${previous kw}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <ul>
                                                                    <li>Possible to use string <code>NONE</code> or Python <code>None</code> to disable the functionality.
                                                                    </li>
                                                                    <li>Return Python <code>None</code> when the functionality was disabled earlier. In previous versions special value <code>No Keyword</code> was returned and it could not be used to restore the original state.</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="reload-page">
                                                            <h2><a href="#reload-page">Reload Page</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Simulates user reloading page.</p>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="remove-location-strategy">
                                                            <h2><a href="#remove-location-strategy">Remove Location Strategy</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Removes a previously added custom location strategy.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>strategy_name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See <a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=Autosphere-browser#Custom-locators" class="name">Custom locators</a> for information on how to create and use custom strategies.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="screenshot">
                                                            <h2><a href="#screenshot">Screenshot</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Capture page and/or element screenshot.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>filename</td>
                                                                        <td> str </td>
                                                                        <td> </td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> if defined, take element screenshot, if not takes page screenshot</p>
                                                                <p><code>filename</code> filename for the screenshot, by default creates file screenshot-timestamp-element/page.png if set to None then file is not saved at all</p>
                                                                <h4>Examples</h4>
                                                                <pre>Screenshot | locator=//img[@alt="Google"] | filename=locator.png |             # element screenshot, defined filename
Screenshot | filename=page.png        |                                    # page screenshot, defined filename
Screenshot | filename=${NONE}         |                                    # page screenshot, NO file will be created
Screenshot |                          |                                    # page screenshot, default filename
Screenshot | locator=//img[@alt="Google"] |                                    # element screenshot, default filename
Screenshot | locator=//img[@alt="Google"] | filename=${CURDIR}/subdir/loc.png  # element screenshot, create dirs if not existing
</code></pre>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="scroll-element-into-view">
                                                            <h2><a href="#scroll-element-into-view">Scroll Element Into View</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Scrolls the element identified by <code>locator</code> into view.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="select-all-from-list">
                                                            <h2><a href="#select-all-from-list">Select All From List</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Selects all options from multi-selection list <code>locator</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="select-checkbox">
                                                            <h2><a href="#select-checkbox">Select Checkbox</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Selects the checkbox identified by <code>locator</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Does nothing if checkbox is already selected.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="select-frame">
                                                            <h2><a href="#select-frame">Select Frame</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets frame identified by <code>locator</code> as the current frame.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <p>Works both with frames and iframes. Use <a href="#Unselect%20Frame" class="name">Unselect
                                                                        Frame</a> to cancel the frame selection and return to the main frame.</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Select%20Frame" class="name">Select Frame</a></td>
                                                                        <td>top-frame</td>
                                                                        <td># Select frame with id or name 'top-frame'</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Click%20Link" class="name">Click Link</a></td>
                                                                        <td>example</td>
                                                                        <td># Click link 'example' in the selected frame</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Unselect%20Frame" class="name">Unselect Frame</a></td>
                                                                        <td></td>
                                                                        <td># Back to main frame.</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Select%20Frame" class="name">Select Frame</a></td>
                                                                        <td>//iframe[@name='xxx']</td>
                                                                        <td># Select frame using xpath</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="select-from-list-by-index">
                                                            <h2><a href="#select-from-list-by-index">Select From List By Index</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Selects options from selection list <code>locator</code> by
                                                                    <code>indexes</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*indexes</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Indexes of list options start from 0.</p>
                                                                <p>If more than one option is given for a single-selection list, the last value will be selected. With multi-selection lists all specified options are selected, but possible old selections are not cleared.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="select-from-list-by-label">
                                                            <h2><a href="#select-from-list-by-label">Select From List By Label</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Selects options from selection list <code>locator</code> by
                                                                    <code>labels</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*labels</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>If more than one option is given for a single-selection list, the last value will be selected. With multi-selection lists all specified options are selected, but possible old selections are not cleared.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="select-from-list-by-value">
                                                            <h2><a href="#select-from-list-by-value">Select From List By Value</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Selects options from selection list <code>locator</code> by
                                                                    <code>values</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*values</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>If more than one option is given for a single-selection list, the last value will be selected. With multi-selection lists all specified options are selected, but possible old selections are not cleared.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="select-radio-button">
                                                            <h2><a href="#select-radio-button">Select Radio Button</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets the radio button group <code>group_name</code> to <code>value</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>group_name</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>value</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The radio button to be selected is located by two arguments:</p>
                                                                <ul>
                                                                    <li><code>group_name</code> is the name of the radio button group.</li>
                                                                    <li><code>value</code> is the <code>id</code> or <code>value</code> attribute of the actual radio button.</li>
                                                                </ul>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Select%20Radio%20Button" class="name">Select Radio Button</a></td>
                                                                        <td>size</td>
                                                                        <td>XL</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Select%20Radio%20Button" class="name">Select Radio Button</a></td>
                                                                        <td>contact</td>
                                                                        <td>email</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="select-window">
                                                            <h2><a href="#select-window">Select Window</a></h2>

                                                            <div>

                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td>MAIN</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-browser-implicit-wait">
                                                            <h2><a href="#set-browser-implicit-wait">Set Browser Implicit Wait</a></h2>

                                                            <div>

                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>value</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-download-directory">
                                                            <h2><a href="#set-download-directory">Set Download Directory</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Set browser download directory</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>directory</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>download_pdf</td>
                                                                        <td> bool </td>
                                                                        <td> True</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>directory</code> target directory for downloads, defaults to None which means that setting is removed <code>download_pdf</code> if True then PDF is downloaded instead of shown with browser's internal viewer</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-focus-to-element">
                                                            <h2><a href="#set-focus-to-element">Set Focus To Element</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets the focus to the element identified by <code>locator</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-screenshot-directory">
                                                            <h2><a href="#set-screenshot-directory">Set Screenshot Directory</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets the directory for captured screenshots.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>path</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>path</code> argument specifies the absolute path to a directory where the screenshots should be written to. If the directory does not exist, it will be created. The directory can also be set when <a href="#Importing" class="name">importing</a> the library. If it is not configured anywhere, screenshots are saved to the same directory where Autosphere's log file is written.</p>
                                                                <p>If <code>path</code> equals to EMBED (case insensitive) and <a href="#Capture%20Page%20Screenshot" class="name">Capture Page Screenshot</a> or <a href="#Capture%20Element%20Screenshot" class="name">capture Element Screenshot</a> keywords filename argument is not changed from the default value, then the page or element screenshot is embedded as Base64 image to the log.html.</p>
                                                                <p>The previous value is returned and can be used to restore the original value later if needed.
                                                                </p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-selenium-implicit-wait">


                                                            <h2><a href="#set-window-position">Set Window Position</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets window position using <code>x</code> and <code>y</code> coordinates.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>x</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>y</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The position is relative to the top left corner of the screen, but some browsers exclude possible task bar set by the operating system from the calculation. The actual position may thus be different with different
                                                                    browsers.
                                                                </p>
                                                                <p>Values can be given using strings containing numbers or by using actual numbers. See also <a href="#Get%20Window%20Position" class="name">Get Window Position</a>.</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Set%20Window%20Position" class="name">Set Window Position</a></td>
                                                                        <td>100</td>
                                                                        <td>200</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="set-window-size">
                                                            <h2><a href="#set-window-size">Set Window Size</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets current windows size to given <code>width</code> and <code>height</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>width</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>height</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>inner</td>
                                                                        <td></td>
                                                                        <td>False</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Values can be given using strings containing numbers or by using actual numbers. See also <a href="#Get%20Window%20Size" class="name">Get Window Size</a>.</p>
                                                                <p>Browsers have a limit on their minimum size. Trying to set them smaller will cause the actual size to be bigger than the requested size.</p>
                                                                <p>If <code>inner</code> parameter is set to True, keyword sets the necessary window width and height to have the desired HTML DOM <i>window.innerWidth</i> and <i>window.innerHeight</i>. See
                                                                    <a href="#Boolean%20arguments" class="name">Boolean arguments</a> for more details on how to set boolean arguments.
                                                                </p>

                                                                <p>This <code>inner</code> argument does not support Frames. If a frame is selected, switch to default before running this.</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Set%20Window%20Size" class="name">Set Window Size</a></td>
                                                                        <td>800</td>
                                                                        <td>600</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Set%20Window%20Size" class="name">Set Window Size</a></td>
                                                                        <td>800</td>
                                                                        <td>600</td>
                                                                        <td>True</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="simulate-event">
                                                            <h2><a href="#simulate-event">Simulate Event</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Simulates <code>event</code> on the element identified by
                                                                    <code>locator</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>event</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This keyword is useful if element has <code>OnEvent</code> handler that needs to be explicitly invoked.
                                                                </p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="submit-form">
                                                            <h2><a href="#submit-form">Submit Form</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Submits a form identified by <code>locator</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>If <code>locator</code> is not given, first form on the page is submitted.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="switch-browser">
                                                            <h2><a href="#switch-browser">Switch Browser</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Switches between active browsers using <code>index_or_alias</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>index_or_alias</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Indices are returned by the <a href="#Open%20Browser" class="name">Open Browser</a> keyword and aliases can be given to it explicitly. Indices start from 1.</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Open%20Browser" class="name">Open Browser</a></td>
                                                                        <td><a href="http://google.com/">http://google.com</a></td>
                                                                        <td>ff</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Location%20Should%20Be" class="name">Location Should Be</a></td>
                                                                        <td><a href="http://google.com/">http://google.com</a></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Open%20Browser" class="name">Open Browser</a></td>
                                                                        <td><a href="http://yahoo.com/">http://yahoo.com</a></td>
                                                                        <td>ie</td>
                                                                        <td>alias=second</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Location%20Should%20Be" class="name">Location Should Be</a></td>
                                                                        <td><a href="http://yahoo.com/">http://yahoo.com</a></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Switch%20Browser" class="name">Switch Browser</a></td>
                                                                        <td>1</td>
                                                                        <td># index</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Page%20Should%20Contain" class="name">Page Should Contain</a></td>
                                                                        <td>I'm feeling lucky</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Switch%20Browser" class="name">Switch Browser</a></td>
                                                                        <td>second</td>
                                                                        <td># alias</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Page%20Should%20Contain" class="name">Page Should Contain</a></td>
                                                                        <td>More Yahoo!</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Close%20All%20Browsers" class="name">Close All Browsers</a></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>Above example expects that there was no other open browsers when opening the first one because it used index <code>1</code> when switching to it later. If you are not sure about that, you can store the index
                                                                    into a variable as below.</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>${index} =</td>
                                                                        <td><a href="#Open%20Browser" class="name">Open Browser</a></td>
                                                                        <td><a href="http://google.com/">http://google.com</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td># Do something ...</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Switch%20Browser" class="name">Switch Browser</a></td>
                                                                        <td>${index}</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="switch-window">
                                                            <h2><a href="#switch-window">Switch Window</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Switches to browser window matching <code>locator</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td>MAIN</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>browser</td>
                                                                        <td></td>
                                                                        <td>CURRENT</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>If the window is found, all subsequent commands use the selected window, until this keyword is used again. If the window is not found, this keyword fails. The previous windows handle is returned and can be used
                                                                    to switch back to it later.</p>
                                                                <p>Notice that alerts should be handled with <a href="#Handle%20Alert" class="name">Handle
                                                                        Alert</a> or other alert related keywords.</p>
                                                                <p>The <code>locator</code> can be specified using different strategies somewhat similarly as when
                                                                    <a href="#Locating%20elements" class="name">locating elements</a> on pages.
                                                                </p>
                                                                <ul>
                                                                    <li>By default, the <code>locator</code> is matched against window handle, name, title, and URL. Matching is done in that order and the first matching window is selected.</li>
                                                                </ul>
                                                                <ul>
                                                                    <li>The <code>locator</code> can specify an explicit strategy by using the format
                                                                        <code>strategy:value</code> (recommended) or <code>strategy=value</code>. Supported strategies are <code>name</code>, <code>title</code>, and <code>url</code>. These matches windows using their name,
                                                                        title, or URL, respectively. Additionally, <code>default</code> can be used to explicitly use the default strategy explained above.
                                                                    </li>
                                                                </ul>
                                                                <ul>
                                                                    <li>If the <code>locator</code> is <code>NEW</code> (case-insensitive), the latest opened window is selected. It is an error if this is the same as the current window.</li>
                                                                </ul>
                                                                <ul>
                                                                    <li>If the <code>locator</code> is <code>MAIN</code> (default, case-insensitive), the main window is selected.</li>
                                                                </ul>
                                                                <ul>
                                                                    <li>If the <code>locator</code> is <code>CURRENT</code> (case-insensitive), nothing is done. This effectively just returns the current window handle.</li>
                                                                </ul>
                                                                <ul>
                                                                    <li>If the <code>locator</code> is not a string, it is expected to be a list of window handles
                                                                        <i>to exclude</i>. Such a list of excluded windows can be got from <a href="#Get%20Window%20Handles" class="name">Get Window Handles</a> before doing an action that opens a new window.
                                                                    </li>
                                                                </ul>

                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Click%20Link" class="name">Click Link</a></td>
                                                                        <td>popup1</td>
                                                                        <td></td>
                                                                        <td># Open new window</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Switch%20Window" class="name">Switch Window</a></td>
                                                                        <td>example</td>
                                                                        <td></td>
                                                                        <td># Select window using default strategy</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Title%20Should%20Be" class="name">Title Should Be</a></td>
                                                                        <td>Pop-up 1</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Click%20Button" class="name">Click Button</a></td>
                                                                        <td>popup2</td>
                                                                        <td></td>
                                                                        <td># Open another window</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${handle} =</td>
                                                                        <td><a href="#Switch%20Window" class="name">Switch Window</a></td>
                                                                        <td>NEW</td>
                                                                        <td># Select latest opened window</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Title%20Should%20Be" class="name">Title Should Be</a></td>
                                                                        <td>Pop-up 2</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Switch%20Window" class="name">Switch Window</a></td>
                                                                        <td>${handle}</td>
                                                                        <td></td>
                                                                        <td># Select window using handle</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Title%20Should%20Be" class="name">Title Should Be</a></td>
                                                                        <td>Pop-up 1</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Switch%20Window" class="name">Switch Window</a></td>
                                                                        <td>MAIN</td>
                                                                        <td></td>
                                                                        <td># Select the main window</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Title%20Should%20Be" class="name">Title Should Be</a></td>
                                                                        <td>Main</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>${excludes} =</td>
                                                                        <td><a href="#Get%20Window%20Handles" class="name">Get Window Handles</a></td>
                                                                        <td></td>
                                                                        <td># Get list of current windows</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Click%20Link" class="name">Click Link</a></td>
                                                                        <td>popup3</td>
                                                                        <td></td>
                                                                        <td># Open one more window</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Switch%20Window" class="name">Switch Window</a></td>
                                                                        <td>${excludes}</td>
                                                                        <td></td>
                                                                        <td># Select window using excludes</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Title%20Should%20Be" class="name">Title Should Be</a></td>
                                                                        <td>Pop-up 3</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>
                                                                <p>The <code>browser</code> argument allows with <code>index_or_alias</code> to implicitly switch to a specific browser when switching to a window. See <a href="#Switch%20Browser" class="name">Switch Browser</a></p>
                                                                <ul>
                                                                    <li>If the <code>browser</code> is <code>CURRENT</code> (case-insensitive), no other browser is selected.
                                                                    </li>
                                                                </ul>
                                                                <p><b>NOTE:</b></p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="table-cell-should-contain">
                                                            <h2><a href="#table-cell-should-contain">Table Cell Should Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies table cell contains text <code>expected</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>row</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>column</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See <a href="#Get%20Table%20Cell" class="name">Get Table Cell</a> that this keyword uses internally for an explanation about accepted arguments.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="table-column-should-contain">
                                                            <h2><a href="#table-column-should-contain">Table Column Should Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies table column contains text <code>expected</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>column</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The table is located using the <code>locator</code> argument and its column found using
                                                                    <code>column</code>. See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.
                                                                </p>
                                                                <p>Column indexes start from 1. It is possible to refer to columns from the end by using negative indexes so that -1 is the last column, -2 is the second last, and so on.</p>
                                                                <p>If a table contains cells that span multiple columns, those merged cells count as a single column.
                                                                </p>
                                                                <p>See <a href="#Page%20Should%20Contain%20Element" class="name">Page Should Contain Element</a> for an explanation about the <code>loglevel</code> argument.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="table-footer-should-contain">
                                                            <h2><a href="#table-footer-should-contain">Table Footer Should Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies table footer contains text <code>expected</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Any <code>&lt;td&gt;</code> element inside <code>&lt;tfoot&gt;</code> element is considered to be part of the footer.</p>
                                                                <p>The table is located using the <code>locator</code> argument. See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <p>See <a href="#Page%20Should%20Contain%20Element" class="name">Page Should Contain Element</a> for an explanation about the <code>loglevel</code> argument.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="table-header-should-contain">
                                                            <h2><a href="#table-header-should-contain">Table Header Should Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies table header contains text <code>expected</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Any <code>&lt;th&gt;</code> element anywhere in the table is considered to be part of the header.
                                                                </p>
                                                                <p>The table is located using the <code>locator</code> argument. See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <p>See <a href="#Page%20Should%20Contain%20Element" class="name">Page Should Contain Element</a> for an explanation about the <code>loglevel</code> argument.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="table-row-should-contain">
                                                            <h2><a href="#table-row-should-contain">Table Row Should Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that table row contains text <code>expected</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>row</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The table is located using the <code>locator</code> argument and its column found using
                                                                    <code>column</code>. See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.
                                                                </p>
                                                                <p>Row indexes start from 1. It is possible to refer to rows from the end by using negative indexes so that -1 is the last row, -2 is the second last, and so on.</p>
                                                                <p>If a table contains cells that span multiple rows, a match only occurs for the uppermost row of those merged cells.</p>
                                                                <p>See <a href="#Page%20Should%20Contain%20Element" class="name">Page Should Contain Element</a> for an explanation about the <code>loglevel</code> argument.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="table-should-contain">
                                                            <h2><a href="#table-should-contain">Table Should Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies table contains text <code>expected</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>loglevel</td>
                                                                        <td></td>
                                                                        <td>TRACE</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The table is located using the <code>locator</code> argument. See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <p>See <a href="#Page%20Should%20Contain%20Element" class="name">Page Should Contain Element</a> for an explanation about the <code>loglevel</code> argument.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="textarea-should-contain">
                                                            <h2><a href="#textarea-should-contain">Textarea Should Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies text area <code>locator</code> contains text <code>expected</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>message</code> can be used to override default error message.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="textarea-value-should-be">
                                                            <h2><a href="#textarea-value-should-be">Textarea Value Should Be</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies text area <code>locator</code> has exactly text
                                                                    <code>expected</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>message</code> can be used to override default error message.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="textfield-should-contain">
                                                            <h2><a href="#textfield-should-contain">Textfield Should Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies text field <code>locator</code> contains text <code>expected</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>message</code> can be used to override the default error message.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="textfield-value-should-be">
                                                            <h2><a href="#textfield-value-should-be">Textfield Value Should Be</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies text field <code>locator</code> has exactly text
                                                                    <code>expected</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>message</code> can be used to override default error message.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="title-should-be">
                                                            <h2><a href="#title-should-be">Title Should Be</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Verifies that the current page title equals <code>title</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>title</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The <code>message</code> argument can be used to override the default error message.</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="unselect-all-from-list">
                                                            <h2><a href="#unselect-all-from-list">Unselect All From List</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Unselects all options from multi-selection list <code>locator</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="unselect-checkbox">
                                                            <h2><a href="#unselect-checkbox">Unselect Checkbox</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Removes the selection of checkbox identified by <code>locator</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Does nothing if the checkbox is not selected.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="unselect-frame">
                                                            <h2><a href="#unselect-frame">Unselect Frame</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Sets the main frame as the current frame.</p>


                                                                <p>In practice cancels the previous <a href="#Select%20Frame" class="name">Select Frame</a> call.
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="unselect-from-list-by-index">
                                                            <h2><a href="#unselect-from-list-by-index">Unselect From List By Index</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Unselects options from selection list <code>locator</code> by
                                                                    <code>indexes</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*indexes</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Indexes of list options start from 0. This keyword works only with multi-selection lists.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="unselect-from-list-by-label">
                                                            <h2><a href="#unselect-from-list-by-label">Unselect From List By Label</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Unselects options from selection list <code>locator</code> by
                                                                    <code>labels</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*labels</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This keyword works only with multi-selection lists.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="unselect-from-list-by-value">
                                                            <h2><a href="#unselect-from-list-by-value">Unselect From List By Value</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Unselects options from selection list <code>locator</code> by
                                                                    <code>values</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>*values</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>This keyword works only with multi-selection lists.</p>
                                                                <p>See the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="wait-and-click-button">
                                                            <h2><a href="#wait-and-click-button">Wait And Click Button</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Click button identified by <code>locator</code>, once it becomes visible.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td> str</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>modifier</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p><code>locator</code> element locator</p>
                                                                <p><code>modifier</code> press given keys while clicking the element, e.g. CTRL</p>
                                                                <h4>Examples</h4>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td>Click Button When Visible</td>
                                                                        <td>//button[@class="mybutton"]</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="wait-for-condition">
                                                            <h2><a href="#wait-for-condition">Wait For Condition</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Waits until <code>condition</code> is true or <code>timeout</code> expires.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>condition</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>error</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The condition can be arbitrary JavaScript expression but it must return a value to be evaluated. See <a href="#Execute%20Javascript" class="name">Execute JavaScript</a> for information about accessing content
                                                                    on pages.</p>
                                                                <p>Fails if the timeout expires before the condition becomes true. See the Timeouts section for more information about using timeouts and their default value.</p>
                                                                <p><code>error</code> can be used to override the default error message.</p>
                                                                <p>Examples:</p>
                                                                <table border="1">
                                                                    <tr>
                                                                        <td><a href="#Wait%20For%20Condition" class="name">Wait For Condition</a></td>
                                                                        <td>return document.title == "New Title"</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Wait%20For%20Condition" class="name">Wait For Condition</a></td>
                                                                        <td>return jQuery.active == 0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="#Wait%20For%20Condition" class="name">Wait For Condition</a></td>
                                                                        <td>style = document.querySelector('h1').style; return style.background == "red" &amp;&amp; style.color == "white"</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="wait-until-element-contains">
                                                            <h2><a href="#wait-until-element-contains">Wait Until Element Contains</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Waits until the element <code>locator</code> contains <code>text</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>error</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Fails if <code>timeout</code> expires before the text appears. See the Timeouts section for more information about using timeouts and their default value and the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <p><code>error</code> can be used to override the default error message.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="wait-until-element-does-not-contain">
                                                            <h2><a href="#wait-until-element-does-not-contain">Wait Until Element Does Not Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Waits until the element <code>locator</code> does not contain
                                                                    <code>text</code>.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>error</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Fails if <code>timeout</code> expires before the text disappears. See the Timeouts section for more information about using timeouts and their default value and the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <p><code>error</code> can be used to override the default error message.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="wait-until-element-is-enabled">
                                                            <h2><a href="#wait-until-element-is-enabled">Wait Until Element Is Enabled</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Waits until the element <code>locator</code> is enabled.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>error</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Element is considered enabled if it is not disabled nor read-only.</p>
                                                                <p>Fails if <code>timeout</code> expires before the element is enabled. See the Timeouts section for more information about using timeouts and their default value and the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <p><code>error</code> can be used to override the default error message.</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="wait-until-element-is-not-visible">
                                                            <h2><a href="#wait-until-element-is-not-visible">Wait Until Element Is Not Visible</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Waits until the element <code>locator</code> is not visible.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>error</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Fails if <code>timeout</code> expires before the element is not visible. See the Timeouts section for more information about using timeouts and their default value and the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <p><code>error</code> can be used to override the default error message.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="wait-until-element-is-visible">
                                                            <h2><a href="#wait-until-element-is-visible">Wait Until Element Is Visible</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Waits until the element <code>locator</code> is visible.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>error</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Fails if <code>timeout</code> expires before the element is visible. See the Timeouts section for more information about using timeouts and their default value and the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <p><code>error</code> can be used to override the default error message.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="wait-until-location-contains">
                                                            <h2><a href="#wait-until-location-contains">Wait Until Location Contains</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Waits until the current URL contains <code>expected</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The <code>expected</code> argument contains the expected value in url.</p>
                                                                <p>Fails if <code>timeout</code> expires before the location contains. See the Timeouts section for more information about using timeouts and their default value.</p>
                                                                <p>The <code>message</code> argument can be used to override the default error message.</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="wait-until-location-does-not-contain">
                                                            <h2><a href="#wait-until-location-does-not-contain">Wait Until Location Does Not Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Waits until the current URL does not contains <code>location</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>location</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The <code>location</code> argument contains value not expected in url.</p>
                                                                <p>Fails if <code>timeout</code> expires before the location not contains. See the Timeouts section for more information about using timeouts and their default value.</p>
                                                                <p>The <code>message</code> argument can be used to override the default error message.</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="wait-until-location-is">
                                                            <h2><a href="#wait-until-location-is">Wait Until Location Is</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Waits until the current URL is <code>expected</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>expected</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The <code>expected</code> argument is the expected value in url.</p>
                                                                <p>Fails if <code>timeout</code> expires before the location is. See the Timeouts section for more information about using timeouts and their default value.</p>
                                                                <p>The <code>message</code> argument can be used to override the default error message.</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="wait-until-location-is-not">
                                                            <h2><a href="#wait-until-location-is-not">Wait Until Location Is Not</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Waits until the current URL is not <code>location</code>.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>location</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>message</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>The <code>location</code> argument is the unexpected value in url.</p>
                                                                <p>Fails if <code>timeout</code> expires before the location is not. See the Timeouts section for more information about using timeouts and their default value.</p>
                                                                <p>The <code>message</code> argument can be used to override the default error message.</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="wait-until-page-contains">
                                                            <h2><a href="#wait-until-page-contains">Wait Until Page Contains</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Waits until <code>text</code> appears on the current page.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>error</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Fails if <code>timeout</code> expires before the text appears. See the Timeouts section for more information about using timeouts and their default value.</p>
                                                                <p><code>error</code> can be used to override the default error message.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="wait-until-page-contains-element">
                                                            <h2><a href="#wait-until-page-contains-element">Wait Until Page Contains Element</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Waits until the element <code>locator</code> appears on the current page.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>error</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>limit</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Fails if <code>timeout</code> expires before the element appears. See the Timeouts section for more information about using timeouts and their default value and the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <p><code>error</code> can be used to override the default error message.</p>
                                                                <p>The <code>limit</code> argument can used to define how many elements the page should contain. When <code>limit</code> is None (default) page can contain one or more elements. When limit is a number, page must
                                                                    contain same number of elements.</p>

                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="wait-until-page-does-not-contain">
                                                            <h2><a href="#wait-until-page-does-not-contain">Wait Until Page Does Not Contain</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Waits until <code>text</code> disappears from the current page.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>text</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>error</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Fails if <code>timeout</code> expires before the text disappears. See the Timeouts section for more information about using timeouts and their default value.</p>
                                                                <p><code>error</code> can be used to override the default error message.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="wait-until-page-does-not-contain-element">
                                                            <h2><a href="#wait-until-page-does-not-contain-element">Wait Until Page Does Not Contain Element</a>
                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Waits until the element <code>locator</code> disappears from the current page.
                                                                </p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locator</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>timeout</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>error</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>limit</td>
                                                                        <td></td>
                                                                        <td>None</td>
                                                                        <td></td>
                                                                    </tr>
                                                                </table>

                                                                <p>Fails if <code>timeout</code> expires before the element disappears. See the Timeouts section for more information about using timeouts and their default value and the <a href="#Locating%20elements" class="name">Locating elements</a> section for details about the locator syntax.</p>
                                                                <p><code>error</code> can be used to override the default error message.</p>
                                                                <p>The <code>limit</code> argument can used to define how many elements the page should not contain. When <code>limit</code> is None (default) page can`t contain any elements. When limit is a number, page must
                                                                    not contain same number of elements.</p>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <aside class="sc-iJuUWI jaFBcT">
                                            <form>
                                                <h5>Keywords</h5>
                                                <fieldset class="sc-eCssSg eeeqEu"><input type="text" id="myInput" onkeyup="myFunction()" aria-label="Filter keywords" placeholder="Filter keywords" value="" /><svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.327 11.376L8.846 7.9A4.824 4.824 0 107.483 9.26l3.479 3.48s.661.703 1.365 0c.703-.703 0-1.365 0-1.365zM6.87 7.284a2.897 2.897 0 01-4.093 0 2.897 2.897 0 010-4.093 2.897 2.897 0 014.093 0 2.897 2.897 0 010 4.093z" fill="#fff"></path>
                                                    </svg></fieldset>
                                            </form>
                                            <div>
                                                <ul id="myUL" style="list-style-type: none; padding: 0; margin: 0;">
                                                    <li><a id="link-add-cookie" href="#add-cookie" class="pagelinks">Add Cookie</a></li>
                                                    <li><a id="link-add-location-strategy" href="#add-location-strategy" class="pagelinks">Add Location Strategy</a>
                                                    <li><a id="link-alert-should-be-present" href="#alert-should-be-present" class="pagelinks">Alert Should Be Present</a></li>
                                                    <li><a id="link-alert-should-not-be-present" href="#alert-should-not-be-present" class="pagelinks">Alert Should Not Be Present</a></li>
                                                    <li><a id="link-assign-id-to-element" href="#assign-id-to-element" class="pagelinks">Assign Id To Element</a></li>
                                                    <li><a id="link-attach-chrome-browser" href="#attach-chrome-browser" class="pagelinks">Attach Chrome Browser</a></li>
                                                    <li><a id="link-capture-element-screenshot" href="#capture-element-screenshot" class="pagelinks">Capture Element Screenshot</a></li>
                                                    <li><a id="link-capture-page-screenshot" href="#capture-page-screenshot" class="pagelinks">Capture Page Screenshot</a></li>
                                                    <li><a id="link-checkbox-should-be-selected" href="#checkbox-should-be-selected" class="pagelinks">Checkbox Should Be Selected</a></li>
                                                    <li><a id="link-checkbox-should-not-be-selected" href="#checkbox-should-not-be-selected" class="pagelinks">Checkbox Should Not Be Selected</a></li>
                                                    <li><a id="link-choose-file" href="#choose-file" class="pagelinks">Choose File</a></li>
                                                    <li><a id="link-clear-all-highlights" href="#clear-all-highlights" class="pagelinks">Clear A Highlights</a></li>
                                                    <li><a id="link-clear-element-text" href="#clear-element-text" class="pagelinks">Clear Element Text</a></li>
                                                    <li><a id="link-click-button" href="#click-button" class="pagelinks">Click Button</a></li>
                                                    <li><a id="link-click-button-when-visible" href="#click-button-when-visible" class="pagelinks">Click Button When Visible</a></li>
                                                    <li><a id="link-click-element" href="#click-element" class="pagelinks">Click Element</a></li>
                                                    <li><a id="link-click-element-at-coordinates" href="#click-element-at-coordinates" class="pagelinks">Click Element At Coordinates</a></li>
                                                    <li><a id="link-click-element-if-visible" href="#click-element-if-visible" class="pagelinks">Click Element If Visible</a></li>
                                                    <li><a id="link-click-element-when-visible" href="#click-element-when-visible" class="pagelinks">Click Element When Visible</a></li>
                                                    <li><a id="link-click-image" href="#click-image" class="pagelinks">Click Image</a></li>
                                                    <li><a id="link-click-link" href="#click-link" class="pagelinks">Click Link</a></li>
                                                    <li><a id="link-close-all-browsers" href="#close-all-browsers" class="pagelinks">Close All Browsers</a></li>
                                                    <li><a id="link-close-browser" href="#close-browser" class="pagelinks">Close Browser</a></li>
                                                    <li><a id="link-close-window" href="#close-window" class="pagelinks">Close Window</a></li>
                                                    <li><a id="link-cover-element" href="#cover-element" class="pagelinks">Cover Element</a></li>
                                                    <li><a id="link-create-webdriver" href="#create-webdriver" class="pagelinks">Create Webdriver</a></li>
                                                    <li><a id="link-current-frame-should-contain" href="#current-frame-should-contain" class="pagelinks">Current Frame Should Contain</a></li>
                                                    <li><a id="link-current-frame-should-not-contain" href="#current-frame-should-not-contain" class="pagelinks">Current Frame Should Not Contain</a></li>
                                                    <li><a id="link-delete-all-cookies" href="#delete-all-cookies" class="pagelinks">Delete All Cookies</a></li>
                                                    <li><a id="link-delete-cookie" href="#delete-cookie" class="pagelinks">Delete Cookie</a></li>
                                                    <li><a id="link-does-alert-contain" href="#does-alert-contain" class="pagelinks">Does Alert Contain</a></li>
                                                    <li><a id="link-does-alert-not-contain" href="#does-alert-not-contain" class="pagelinks">Does Alert Not Contain</a></li>
                                                    <li><a id="link-does-element-contain" href="#does-element-contain" class="pagelinks">Does Element Contain</a></li>
                                                    <li><a id="link-does-frame-contain" href="#does-frame-contain" class="pagelinks">Does Frame Contain</a></li>
                                                    <li><a id="link-does-location-contain" href="#does-location-contain" class="pagelinks">Does Location Contain</a></li>
                                                    <li><a id="link-does-page-contain" href="#does-page-contain" class="pagelinks">Does Page Contain</a></li>
                                                    <li><a id="link-does-page-contain-button" href="#does-page-contain-button" class="pagelinks">Does Page Contain Button</a></li>
                                                    <li><a id="link-does-page-contain-checkbox" href="#does-page-contain-checkbox" class="pagelinks">Does Page Contain Checkbox</a></li>
                                                    <li><a id="link-does-page-contain-element" href="#does-page-contain-element" class="pagelinks">Does Page Contain Element</a></li>
                                                    <li><a id="link-does-page-contain-image" href="#does-page-contain-image" class="pagelinks">Does Page Contain Image</a></li>
                                                    <li><a id="link-does-page-contain-link" href="#does-page-contain-link" class="pagelinks">Does Page Contain Link</a></li>
                                                    <li><a id="link-does-page-contain-list" href="#does-page-contain-list" class="pagelinks">Does Page List</a></li>
                                                    <li><a id="link-does-page-contain-radio-button" href="#does-page-contain-radio-button" class="pagelinks">Does Page Contain Radio Button</a></li>
                                                    <li><a id="link-does-page-contain-textfield" href="#does-page-contain-textfield" class="pagelinks">Does Page Contain Textfield</a></li>
                                                    <li><a id="link-does-table-cell-contain" href="#does-table-cell-contain" class="pagelinks">Does Table Cell Contain</a></li>
                                                    <li><a id="link-does-table-column-contain" href="#does-table-column-contain" class="pagelinks">Does Table Column Contain</a></li>
                                                    <li><a id="link-does-table-contain" href="#does-table-contain" class="pagelinks">Does Table Contain</a></li>
                                                    <li><a id="link-does-table-footer-contain" href="#does-table-footer-contain" class="pagelinks">Does Table Footer Contain</a></li>
                                                    <li><a id="link-does-table-header-contain" href="#does-table-header-contain" class="pagelinks">Does Table Header Contain</a></li>
                                                    <li><a id="link-does-table-row-contain" href="#does-table-row-contain" class="pagelinks">Does Table Row Contain</a></li>
                                                    <li><a id="link-does-textarea-contain" href="#does-textarea-contain" class="pagelinks">Does Textarea Contain</a></li>
                                                    <li><a id="link-does-textfield-contain" href="#does-textfield-contain" class="pagelinks">Does Textfield Contain</a></li>
                                                    <li><a id="link-double-click-element" href="#double-click-element" class="pagelinks">Double Click Element</a></li>
                                                    <li><a id="link-drag-and-drop" href="#drag-and-drop" class="pagelinks">Drag And Drop</a></li>
                                                    <li><a id="link-drag-and-drop-by-offset" href="#drag-and-drop-by-offset" class="pagelinks">Drag And Drop By Offset</a></li>
                                                    <li><a id="link-element-attribute-value-should-be" href="#element-attribute-value-should-be" class="pagelinks">Element Attribute Value Should Be</a></li>
                                                    <li><a id="link-element-should-be-disabled" href="#element-should-be-disabled" class="pagelinks">Element Should Be Disabled</a></li>
                                                    <li><a id="link-element-should-be-enabled" href="#element-should-be-enabled" class="pagelinks">Element Should Be Enabled</a></li>
                                                    <li><a id="link-element-should-be-focused" href="#element-should-be-focused" class="pagelinks">Element Should Be Focused</a></li>
                                                    <li><a id="link-element-should-be-visible" href="#element-should-be-visible" class="pagelinks">Element Should Be Visible</a></li>
                                                    <li><a id="link-element-should-contain" href="#element-should-contain" class="pagelinks">Element Should Contain</a></li>
                                                    <li><a id="link-element-should-not-be-visible" href="#element-should-not-be-visible" class="pagelinks">Element Should Not Be Visible</a></li>
                                                    <li><a id="link-element-should-not-contain" href="#element-should-not-contain" class="pagelinks">Element Should Not Contain</a></li>
                                                    <li><a id="link-element-text-should-be" href="#element-text-should-be" class="pagelinks">Element Text Should Be</a></li>
                                                    <li><a id="link-element-text-should-not-be" href="#element-text-should-not-be" class="pagelinks">Element Text Should Not Be</a></li>
                                                    <li><a id="link-execute-async-javascript" href="#execute-async-javascript" class="pagelinks">Execute Async Javascript</a></li>
                                                    <li><a id="link-execute-javascript" href="#execute-javascript" class="pagelinks">Execute Javascript</a></li>
                                                    <li><a id="link-frame-should-contain" href="#frame-should-contain" class="pagelinks">Frame Should Contain</a></li>
                                                    <li><a id="link-get-all-links" href="#get-all-links" class="pagelinks">Get All Links</a></li>
                                                    <li><a id="link-get-browser-aliases" href="#get-browser-aliases" class="pagelinks">Get Browser Aliases</a></li>
                                                    <li><a id="link-get-browser-capabilities" href="#get-browser-capabilities" class="pagelinks">Get Browser Capabilities </a></li>
                                                    <li><a id="link-get-browser-ids" href="#get-browser-ids" class="pagelinks">Get BrowserIds</a></li>
                                                    <li><a id="link-get-cookie" href="#get-cookie" class="pagelinks">Get Cookie</a></li>
                                                    <li><a id="link-get-cookies" href="#get-cookies" class="pagelinks">Get Cookies</a></li>
                                                    <li><a id="link-get-element-attribute" href="#get-element-attribute" class="pagelinks">Get Element Attribute</a></li>
                                                    <li><a id="link-get-element-count" href="#get-element-count" class="pagelinks">Get Element Count</a></li>
                                                    <li><a id="link-get-element-size" href="#get-element-size" class="pagelinks">Get Element Size</a></li>
                                                    <li><a id="link-get-element-status" href="#get-element-status" class="pagelinks">Get Element Status</a></li>
                                                    <li><a id="link-get-horizontal-position" href="#get-horizontal-position" class="pagelinks">Get Horizontal Position</a></li>
                                                    <li><a id="link-get-list-items" href="#get-list-items" class="pagelinks">Get List Items</a></li>
                                                    <li><a id="link-get-location" href="#get-location" class="pagelinks">Get Location</a></li>
                                                    <li><a id="link-get-locations" href="#get-locations" class="pagelinks">Get Locations</a></li>
                                                    <li><a id="link-get-selected-list-label" href="#get-selected-list-label" class="pagelinks">Get Selected List Label</a></li>
                                                    <li><a id="link-get-selected-list-labels" href="#get-selected-list-labels" class="pagelinks">Get Selected List Labels</a></li>
                                                    <li><a id="link-get-selected-list-value" href="#get-selected-list-value" class="pagelinks">Get Selected List Value</a></li>
                                                    <li><a id="link-get-selected-list-values" href="#get-selected-list-values" class="pagelinks">Get Selected List Values</a></li>
                                                    <li><a id="link-get-session-id" href="#get-session-id" class="pagelinks">Get Session Id</a></li>
                                                    <li><a id="link-get-source" href="#get-source" class="pagelinks">Get Source</a></li>
                                                    <li><a id="link-get-table-cell" href="#get-table-cell" class="pagelinks">Get Table Cell</a></li>
                                                    <li><a id="link-get-testability-status" href="#get-testability-status" class="pagelinks">Get Testability Status</a></li>
                                                    <li><a id="link-get-text" href="#get-text" class="pagelinks">Get Text</a></li>
                                                    <li><a id="link-get-title" href="#get-title" class="pagelinks">Get Title</a></li>
                                                    <li><a id="link-get-value" href="#get-value" class="pagelinks">Get Value</a></li>
                                                    <li><a id="link-get-vertical-position" href="#get-vertical-position" class="pagelinks">Get Vertical Position</a></li>
                                                    <li><a id="link-get-webelement" href="#get-webelement" class="pagelinks">Get WebElement</a></li>
                                                    <li><a id="link-get-webelements" href="#get-webelements" class="pagelinks">Get WebElements</a></li>
                                                    <li><a id="link-get-window-handles" href="#get-window-handles" class="pagelinks">Get Window Handles</a></li>
                                                    <li><a id="link-get-window-identifiers" href="#get-window-identifiers" class="pagelinks">Get Window Identifiers</a></li>
                                                    <li><a id="link-get-window-names" href="#get-window-names" class="pagelinks">Get Window Names</a></li>
                                                    <li><a id="link-get-window-position" href="#get-window-position" class="pagelinks">Get Window Position</a></li>
                                                    <li><a id="link-get-window-size" href="#get-window-size" class="pagelinks">Get Window Size</a></li>
                                                    <li><a id="link-get-window-titles" href="#get-window-titles" class="pagelinks">Get Window Titles</a></li>
                                                    <li><a id="link-go-back" href="#go-back" class="pagelinks">Go Back</a></li>
                                                    <li><a id="link-go-to" href="#go-to" class="pagelinks">Go To</a></li>
                                                    <li><a id="link-handle-alert" href="#handle-alert" class="pagelinks">Handle Alert</a></li>
                                                    <li><a id="link-highlight-elements" href="#highlight-elements" class="pagelinks">Highlight Elements</a></li>
                                                    <li><a id="link-input-password" href="#input-password" class="pagelinks">Input Password</a></li>
                                                    <li><a id="link-input-text" href="#input-text" class="pagelinks">Input Text</a></li>
                                                    <li><a id="link-input-text-into-alert" href="#input-text-into-alert" class="pagelinks">Input Text Into Alert</a></li>
                                                    <li><a id="link-input-text-when-element-is-visible" href="#input-text-when-element-is-visible" class="pagelinks">Input Text When Element Is Visible</a></li>
                                                    <li><a id="link-is-alert-present" href="#is-alert-present" class="pagelinks">Is Alert Present</a></li>
                                                    <li><a id="link-is-checkbox-selected" href="#is-checkbox-selected" class="pagelinks">Is Checkbox Selected</a></li>
                                                    <li><a id="link-is-element-attribute-equal-to" href="#is-element-attribute-equal-to" class="pagelinks">Is Element Attribute Equal To</a></li>
                                                    <li><a id="link-is-element-disabled" href="#is-element-disabled" class="pagelinks">Is Element Disabled</a></li>
                                                    <li><a id="link-is-element-enabled" href="#is-element-enabled" class="pagelinks">Is Element Enabled</a></li>
                                                    <li><a id="link-is-element-focused" href="#is-element-focused" class="pagelinks">Is Element Focused</a></li>
                                                    <li><a id="link-is-element-text" href="#is-element-text" class="pagelinks">Is Element Text</a></li>
                                                    <li><a id="link-is-element-visible" href="#is-element-visible" class="pagelinks">Is Element Visible</a></li>
                                                    <li><a id="link-is-list-selected" href="#is-list-selected" class="pagelinks">Is List Selected</a></li>
                                                    <li><a id="link-is-list-selection" href="#is-list-selection" class="pagelinks">Is List Selection</a></li>
                                                    <li><a id="link-is-location" href="#is-location" class="pagelinks">Is Location</a></li>
                                                    <li><a id="link-is-radio-button-selected" href="#is-radio-button-selected" class="pagelinks">Is Radio Button Selected</a></li>
                                                    <li><a id="link-is-radio-button-set-to" href="#is-radio-button-set-to" class="pagelinks">Is Radio Button Set To</a></li>
                                                    <li><a id="link-is-textarea-value" href="#is-textarea-value" class="pagelinks">Is Textarea Value</a></li>
                                                    <li><a id="link-is-textfield-value" href="#is-textfield-value" class="pagelinks">Is Textfield Value</a></li>
                                                    <li><a id="link-is-title" href="#is-title" class="pagelinks">Is Title</a></li>
                                                    <li><a id="link-list-selection-should-be" href="#list-selection-should-be" class="pagelinks">List Selection Should Be</a></li>
                                                    <li><a id="link-list-should-have-no-selections" href="#list-should-have-no-selections" class="pagelinks">List Should Have No Selections</a></li>
                                                    <li><a id="link-location-should-be" href="#location-should-be" class="pagelinks">Location Should Be</a></li>
                                                    <li><a id="link-location-should-contain" href="#location-should-contain" class="pagelinks">Location Should Contain</a></li>
                                                    <li><a id="link-locator-should-match-x-times" href="#locator-should-match-x-times" class="pagelinks">Locator Should Match X Times</a></li>
                                                    <li><a id="link-log-location" href="#log-location" class="pagelinks">Log Location</a></li>
                                                    <li><a id="link-log-source" href="#log-source" class="pagelinks">Log Source</a></li>
                                                    <li><a id="link-log-title" href="#log-title" class="pagelinks">Log Title</a></li>
                                                    <li><a id="link-maximize-browser-window" href="#maximize-browser-window" class="pagelinks">Maximize Browser Window</a></li>
                                                    <li><a id="link-mouse-down" href="#mouse-down" class="pagelinks">Mouse Down</a></li>
                                                    <li><a id="link-mouse-down-on-image" href="#mouse-down-on-image" class="pagelinks">Mouse Down On Image</a></li>
                                                    <li><a id="link-mouse-down-on-link" href="#mouse-down-on-link" class="pagelinks">Mouse Down On Link</a></li>
                                                    <li><a id="link-mouse-out" href="#mouse-out" class="pagelinks">Mouse Out</a></li>
                                                    <li><a id="link-mouse-over" href="#mouse-over" class="pagelinks">Mouse Over</a></li>
                                                    <li><a id="link-mouse-up" href="#mouse-up" class="pagelinks">Mouse Up</a></li>
                                                    <li><a id="link-open-available-browser" href="#open-available-browser" class="pagelinks">Open Available Browser</a></li>
                                                    <li><a id="link-open-browser" href="#open-browser" class="pagelinks">Open Browser</a></li>
                                                    <li><a id="link-open-chrome-browser" href="#open-chrome-browser" class="pagelinks">Open Chrome Browser</a></li>
                                                    <li><a id="link-open-context-menu" href="#open-context-menu" class="pagelinks">Open Context Menu</a></li>
                                                    <li><a id="link-open-headless-chrome-browser" href="#open-headless-chrome-browser" class="pagelinks">Open Headless Chrome Browser</a></li>
                                                    <li><a id="link-open-user-browser" href="#open-user-browser" class="pagelinks">Open User Browser</a></li>
                                                    <li><a id="link-page-should-contain" href="#page-should-contain" class="pagelinks">Page Should Contain</a></li>
                                                    <li><a id="link-page-should-contain-button" href="#page-should-contain-button" class="pagelinks">Page Should Contain Button</a></li>
                                                    <li><a id="link-page-should-contain-checkbox" href="#page-should-contain-checkbox" class="pagelinks">Page Should Contain Checkbox</a></li>
                                                    <li><a id="link-page-should-contain-element" href="#page-should-contain-element" class="pagelinks">Page Should Contain Element</a></li>
                                                    <li><a id="link-page-should-contain-image" href="#page-should-contain-image" class="pagelinks">Page Should Contain Image</a></li>
                                                    <li><a id="link-page-should-contain-link" href="#page-should-contain-link" class="pagelinks">Page Should Contain Link</a></li>
                                                    <li><a id="link-page-should-contain-list" href="#page-should-contain-list" class="pagelinks">Page Should Contain List</a></li>
                                                    <li><a id="link-page-should-contain-radio-button" href="#page-should-contain-radio-button" class="pagelinks">Page Should Contain Radio Button</a></li>
                                                    <li><a id="link-page-should-contain-textfield" href="#page-should-contain-textfield" class="pagelinks">Page Should Contain Textfield</a></li>
                                                    <li><a id="link-page-should-not-contain" href="#page-should-not-contain" class="pagelinks">Page Should Not Contain</a></li>
                                                    <li><a id="link-page-should-not-contain-button" href="#page-should-not-contain-button" class="pagelinks">Page Should Not Contain Button</a></li>
                                                    <li><a id="link-page-should-not-contain-checkbox" href="#page-should-not-contain-checkbox" class="pagelinks">Page Should Not Contain Checkbox</a></li>
                                                    <li><a id="link-page-should-not-contain-element" href="#page-should-not-contain-element" class="pagelinks">Page Should Not Contain Element</a></li>
                                                    <li><a id="link-page-should-not-contain-image" href="#page-should-not-contain-image" class="pagelinks">Page Should Not Contain Image</a></li>
                                                    <li><a id="link-page-should-not-contain-link" href="#page-should-not-contain-link" class="pagelinks">Page Should Not Contain Link</a></li>
                                                    <li><a id="link-page-should-not-contain-list" href="#page-should-not-contain-list" class="pagelinks">Page Should Not Contain List</a></li>
                                                    <li><a id="link-page-should-not-contain-radio-button" href="#page-should-not-contain-radio-button" class="pagelinks">Page Should Not Contain Radio Button </a></li>
                                                    <li><a id="link-page-should-not-contain-textfield" href="#page-should-not-contain-textfield" class="pagelinks">Page Should Not Contain Textfield</a></li>
                                                    <li><a id="link-press-key" href="#press-key" class="pagelinks">Press Key</a></li>
                                                    <li><a id="link-press-keys" href="#press-keys" class="pagelinks">Press Keys</a></li>
                                                    <li><a id="link-radio-button-should-be-set-to" href="#radio-button-should-be-set-to" class="pagelinks">Radio Button Should Be Set To</a></li>
                                                    <li><a id="link-radio-button-should-not-be-selected" href="#radio-button-should-not-be-selected" class="pagelinks">Radio Button Should Not Be Selected</a></li>
                                                    <li><a id="link-register-keyword-to-run-on-failure" href="#register-keyword-to-run-on-failure" class="pagelinks">Register Keyword To Run On Failure</a></li>
                                                    <li><a id="link-reload-page" href="#reload-page" class="pagelinks">Reload Page</a></li>
                                                    <li><a id="link-remove-location-strategy" href="#remove-location-strategy" class="pagelinks">Remove Location Strategy</a></li>
                                                    <li><a id="link-screenshot" href="#screenshot" class="pagelinks">Screenshot</a></li>
                                                    <li><a id="link-scroll-element-into-view" href="#scroll-element-into-view" class="pagelinks">Scroll Element Into View</a>
                                                    <li><a id="link-select-all-from-list" href="#select-all-from-list" class="pagelinks">Select All From List</a></li>
                                                    <li><a id="link-select-checkbox" href="#select-checkbox" class="pagelinks">Select Checkbox</a>
                                                    <li><a id="link-select-frame" href="#select-frame" class="pagelinks">Select Frame</a></li>
                                                    <li><a id="link-select-from-list-by-index" href="#select-from-list-by-index" class="pagelinks">Select From List By Index</a></li>
                                                    <li><a id="link-select-from-list-by-label" href="#select-from-list-by-label" class="pagelinks">Select From List By Label</a></li>
                                                    <li><a id="link-select-from-list-by-value" href="#select-from-list-by-value" class="pagelinks">Select From List By Value</a></li>
                                                    <li><a id="link-select-radio-button" href="#select-radio-button" class="pagelinks">Select Radio Button</a></li>
                                                    <li><a id="link-select-window" href="#select-window" class="pagelinks">Select Window</a></li>
                                                    <li><a id="link-set-browser-implicit-wait" href="#set-browser-implicit-wait" class="pagelinks">Set Browser Implicit Wait</a></li>
                                                    <li><a id="link-set-download-directory" href="#set-download-directory" class="pagelinks">Set Download Directory</a></li>
                                                    <li><a id="link-set-focus-to-element" href="#set-focus-to-element" class="pagelinks">Set Focus To Element</a></li>
                                                    <li><a id="link-set-screenshot-directory" href="#set-screenshot-directory" class="pagelinks">Set Screenshot Directory</a></li>
                                                    <li><a id="link-set-window-position" href="#set-window-position" class="pagelinks">Set Window Position</a></li>
                                                    <li><a id="link-set-window-size" href="#set-window-size" class="pagelinks">Set Window Size</a></li>
                                                    <li><a id="link-simulate-event" href="#simulate-event" class="pagelinks">Simulate Event</a></li>
                                                    <li><a id="link-submit-form" href="#submit-form" class="pagelinks">Submit Form</a></li>
                                                    <li><a id="link-switch-browser" href="#switch-browser" class="pagelinks">Switch Browser</a></li>
                                                    <li><a id="link-switch-window" href="#switch-window" class="pagelinks">Switch Window</a></li>
                                                    <li><a id="link-table-cell-should-contain" href="#table-cell-should-contain" class="pagelinks">Table Cell Should Contain</a></li>
                                                    <li><a id="link-table-column-should-contain" href="#table-column-should-contain" class="pagelinks">Table Column Should Contain</a></li>
                                                    <li><a id="link-table-footer-should-contain" href="#table-footer-should-contain" class="pagelinks">Table Footer Should Contain</a></li>
                                                    <li><a id="link-table-header-should-contain" href="#table-header-should-contain" class="pagelinks">Table Header Should Contain</a></li>
                                                    <li><a id="link-table-row-should-contain" href="#table-row-should-contain" class="pagelinks">Table Row Should Contain</a></li>
                                                    <li><a id="link-table-should-contain" href="#table-should-contain" class="pagelinks">Table Should Contain</a></li>
                                                    <li><a id="link-textarea-should-contain" href="#textarea-should-contain" class="pagelinks">Textarea Should Contain</a></li>
                                                    <li><a id="link-textarea-value-should-be" href="#textarea-value-should-be" class="pagelinks">Textarea Value Should Be</a></li>
                                                    <li><a id="link-textfield-should-contain" href="#textfield-should-contain" class="pagelinks">Textfield Should Contain</a></li>
                                                    <li><a id="link-textfield-value-should-be" href="#textfield-value-should-be" class="pagelinks">Textfield Value Should Be</a></li>
                                                    <li><a id="link-title-should-be" href="#title-should-be" class="pagelinks">Title Should Be</a></li>
                                                    <li><a id="link-unselect-all-from-list" href="#unselect-all-from-list" class="pagelinks">Unselect All From List</a></li>
                                                    <li><a id="link-unselect-checkbox" href="#unselect-checkbox" class="pagelinks">Unselect Checkbox</a></li>
                                                    <li><a id="link-unselect-frame" href="#unselect-frame" class="pagelinks">Unselect Frame</a></li>
                                                    <li><a id="link-unselect-from-list-by-index" href="#unselect-from-list-by-index" class="pagelinks">Unselect From List By Index</a></li>
                                                    <li><a id="link-unselect-from-list-by-label" href="#unselect-from-list-by-label" class="pagelinks">Unselect From List By Label</a></li>
                                                    <li><a id="link-unselect-from-list-by-value" href="#unselect-from-list-by-value" class="pagelinks">Unselect From List By Value</a></li>
                                                    <li><a id="link-wait-and-click-button" href="#wait-and-click-button" class="pagelinks">Wait And Click Button</a></li>
                                                    <li><a id="link-wait-for-condition" href="#wait-for-condition" class="pagelinks">Wait For Condition</a></li>
                                                    <li><a id="link-wait-until-element-contains" href="#wait-until-element-contains" class="pagelinks">Wait Until Element Contains</a></li>
                                                    <li><a id="link-wait-until-element-does-not-contain" href="#wait-until-element-does-not-contain" class="pagelinks">Wait Until Element Does Not Contain</a></li>
                                                    <li><a id="link-wait-until-element-is-enabled" href="#wait-until-element-is-enabled" class="pagelinks">Wait Until Element Is Enabled</a></li>
                                                    <li><a id="link-wait-until-element-is-not-visible" href="#wait-until-element-is-not-visible" class="pagelinks">Wait Until Element Is Not Visible</a></li>
                                                    <li><a id="link-wait-until-element-is-visible" href="#wait-until-element-is-visible" class="pagelinks">Wait Until Element Is Visible</a></li>
                                                    <li><a id="link-wait-until-location-contains" href="#wait-until-location-contains" class="pagelinks">Wait Until Location Contains</a></li>
                                                    <li><a id="link-wait-until-location-does-not-contain" href="#wait-until-location-does-not-contain" class="pagelinks">Wait Until Location Does Not Contain</a></li>
                                                    <li><a id="link-wait-until-location-is" href="#wait-until-location-is" class="pagelinks">Wait Until Location Is</a></li>
                                                    <li><a id="link-wait-until-location-is-not" href="#wait-until-location-is-not" class="pagelinks">Wait Until Location Is Not</a></li>
                                                    <li><a id="link-wait-until-page-contains" href="#wait-until-page-contains" class="pagelinks">Wait Until Page Contains</a></li>
                                                    <li><a id="link-wait-until-page-contains-element" href="#wait-until-page-contains-element" class="pagelinks">Wait Until Page Contains Element</a></li>
                                                    <li><a id="link-wait-until-page-does-not-contain" href="#wait-until-page-does-not-contain" class="pagelinks">Wait Until Page Does Not Contain</a></li>
                                                    <li><a id="link-wait-until-page-does-not-contain-element" href="#wait-until-page-does-not-contain-element" class="pagelinks">Wait Until Page Does Not Contain Element</a></li>
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