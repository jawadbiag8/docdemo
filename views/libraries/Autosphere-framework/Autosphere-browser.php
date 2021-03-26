
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                  fill="#002642"></path>
              </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.Browser</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-browser">Readme</a><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-browser/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div>

                                <h2 id="Locating elements">Locating elements</h2>
                                <p>All keywords in the browser library that need to interact with an element on a web page take an argument typically named <code>locator</code> that specifies how to find the element. Most often the locator is given as a
                                    string using the locator syntax described below, but <a href="../../views/docs.php?page=libraries/Autosphere-framework/Autosphere-browser/keywords#get-webelement" class="name">using
                    WebElements</a> is possible too.</p>
                                <h3 id="Locator syntax">Locator syntax</h3>
                                <p>Finding elements can be done using different strategies such as the element id, XPath expressions, or CSS selectors. The strategy can either be explicitly specified with a prefix or the strategy can be implicit.
                                </p>
                                <h4 id="Default locator strategy">Default locator strategy</h4>
                                <p>By default, locators are considered to use the keyword specific default locator strategy. All keywords support finding elements based on <code>id</code> and <code>name</code> attributes, but some keywords support additional
                                    attributes or other values that make sense in their context. For example,
                                    <a href="#Click%20Link" class="name">Click Link</a> supports the <code>href</code> attribute and the link text and addition to the normal <code>id</code> and <code>name</code>.</p>
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
                                    <code>id:foo</code>, <code>id: foo</code> and <code>id : foo</code> are all equivalent.</p>
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
                                    <code>default</code> prefix is only necessary if the locator value itself accidentally matches some of the explicit strategies.</p>
                                <p>Different locator strategies have different pros and cons. Using ids, either explicitly like
                                    <code>id:foo</code> or by using the <a href="../views/docs.php?page=libraries/Autosphere-framework/Autosphere-browser/keywords#add-location-strategy" class="name">default
                    locator strategy</a> simply like <code>foo</code>, is recommended when possible, because the syntax is simple and locating elements by id is fast for browsers. If an element does not have an id or the id is not stable, other solutions
                                    need to be used. If an element has a unique tag name or class, using
                                    <code>tag</code>, <code>class</code> or <code>css</code> strategy like <code>tag:h1</code>,
                                    <code>class:example</code> or <code>css:h1.example</code> is often an easy solution. In more complex cases using XPath expressions is typically the best approach. They are very powerful but a downside is that they can
                                    also get complex.</p>
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
                                    <code>xpath://div</code>.</p>
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
                                <h3 id="Using WebElements">Using WebElements</h3>
                                <p>In addition to specifying a locator as a string, it is possible to use Selenium's WebElement objects. This requires first getting a WebElement, for example, by using the <a href="#Get%20WebElement" class="name">Get WebElement</a>                                    keyword.</p>
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
                                <h3 id="Custom locators">Custom locators</h3>
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
                                    <code>${browser}</code> is a reference to a WebDriver instance and <code>${locator}</code> is the name of the locator strategy. To use this locator, it must first be registered by using the <a href="#Add%20Location%20Strategy"
                                        class="name">Add Location Strategy</a> keyword:</p>
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
                </article>
         
