<section class="content">
    <div class="container-fluid">
        <!-- Headings -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h4>
                            <b>Browser and Web Automation</b>
                        </h4>
                    </div>
                    <div class="body">
                        <h3>How to find user interface elements using locators in web applications</h3>

                        <h4 id="what-to-click-that-is-the-question"> What to click, that is the question</h4>
                        <p>Here we have three buttons. To click the (<code>That button!</code>) button, you shout an order at your robot, and it will complete this trivial task, right? As it turns out, it&#x27;s not quite that simple.</p><span id="locator-example"><button name="that-button" style="color:black;padding:0.5em;border:solid 1px"><i>That</i> button!</button><button id="sad-button" name="sad-button" style="color:black;padding:0.5em;border:solid 1px">Sad
                                button 😢</button><button class="mad-button" style="color:black;padding:0.5em;border:solid 1px">Mad button 🤪</button></span>
                        <h4 id="whats-under-the-hood"> What&#x27;s under the hood?</h4>
                        <p>To understand what the robot sees, let&#x27;s take a look at how the above buttons are built. You can use a desktop browser, such as <a href="https://www.mozilla.org/en-US/firefox/new/" target="_blank" rel="noopener noreferrer">Firefox</a> or <a href="https://www.google.com/chrome/" target="_blank" rel="noopener noreferrer">Chrome</a>, or some other browser, as long as it comes with <a href="https://developer.mozilla.org/en-US/docs/Tools" target="_blank" rel="noopener noreferrer">developer tools</a>.
                            Those tools provide developers with great powers, such as inspecting the <a href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank" rel="noopener noreferrer">HTML</a> elements on a web page.</p>
                        <p>Right-click on the <code>That button!</code> button and select <code>Inspect Element</code> (Firefox) or <code>Inspect</code> (Chrome). An <code>Inspector</code> view opens. Moving your mouse cursor over the HTML markup in the inspector
                            highlights the corresponding elements in the browser window.</p>
                        <p><img class="img-responsive" src="../images/Additional-learning/inspect-element-using-browser-developer-tools.png" alt="Inspect element using browser developer tools" /></p>
                        <p>Here is the HTML markup of the buttons:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-html"><code class="language-html">&lt;span id=&quot;locator-example&quot;&gt;
  &lt;button name=&quot;that-button&quot; style=&quot;color: black; padding: 0.5em; border: solid 1px;&quot;&gt;&lt;i&gt;That&lt;/i&gt; button!&lt;/button&gt;
  &lt;button id=&quot;sad-button&quot; name=&quot;sad-button&quot; style=&quot;color: black; padding: 0.5em; border: solid 1px;&quot;&gt;
    Sad button 😢
  &lt;/button&gt;
  &lt;button class=&quot;mad-button&quot; style=&quot;color: black; padding: 0.5em; border: solid 1px;&quot;&gt;Mad button 🤪&lt;/button&gt;
&lt;/span&gt;
</code></code></pre>
                            </div>
                        </div>
                        <h4 id="grabbing-the-css-locator"> Grabbing the CSS locator</h4>
                        <p>To click the button, the robot needs to locate it first. To grab the <em>locator</em>, right-click on the <code>&lt;button name=&quot;that-button&quot;...</code> element in the inspector. Select <code>Copy</code> -&gt; <code>CSS Selector</code> (Firefox), or
                            <code>Copy</code> -&gt; <code>Copy selector</code> (Chrome). The result is the following <a href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank" rel="noopener noreferrer">CSS</a> selector:
                        </p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-css"><code class="language-css">#locator-example &gt; button:nth-child(1)
</code></code></pre>
                            </div>
                        </div>
                        <h4 id="testing-the-css-locator"> Testing the CSS locator</h4>
                        <p>To test the CSS selector (locator), click on the <code>Console</code> tab in the developer tools and run this <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" rel="noopener noreferrer">JavaScript</a> command:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-js"><code class="language-js">document.querySelector(&#x27;#locator-example &gt; button:nth-child(1)&#x27;);
</code></code></pre>
                            </div>
                        </div>
                        <p>The element matching the CSS selector is printed out in the console. Hovering the mouse cursor on the element in the console highlights it on the web browser window. This way, we can verify that the selector matches the correct element.</p>
                        <p><img class="img-responsive" src="../images/Additional-learning/test-css-selector-in-console.png" alt="Testing the CSS selector in developer tools console" /></p>
                        <p>We could use the CSS locator in a robot script like this:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Click That Button
    Click Button    css:#locator-example &gt; button:nth-child(1)
</code></code></pre>
                            </div>
                        </div>

                        <h4 id="done"> Done?</h4>
                        <p>Alright! Commit, push, deploy to production? The locator matches the first <code>button</code> element that has a parent element with an <code>id</code> attribute of
                            <code>locator-example</code> (using the <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/:nth-child" target="_blank" rel="noopener noreferrer"><code>:nth-child()</code></a> <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Pseudo-classes" target="_blank" rel="noopener noreferrer">CSS pseudo-class</a>).
                        </p>
                        <p>What if someone modifies the order of the buttons? The robot would end up clicking on the wrong button since it always clicks the first button! We have to find a more robust locator that will keep working even if the buttons are shuffled
                            around. This is the HTML markup for the button we are interested in:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-html"><code class="language-html">&lt;button name=&quot;that-button&quot; style=&quot;color: black; padding: 0.5em;&quot;&gt;&lt;i&gt;That&lt;/i&gt; button!&lt;/button&gt;
</code></code></pre>
                            </div>
                        </div>
                        <p>There is no way to locate the button using the button text (<code>That button!</code>) if we want to continue using CSS locators. Time to move to other locator strategies? Not yet.</p>
                        <h4 id="finding-a-more-robust-css-locator"> Finding a more robust CSS locator</h4>
                        <p>Locating elements by things that might change, such as their exact position or label, can cause your robot to break easily. For example, your robot breaks if someone decides to change the text on the button or to translate the text
                            into other languages.</p>
                        <p>A good locator is one that is unlikely to break often. Good candidates for robust locators are the <code>id</code> and <code>name</code> attributes of HTML elements. An <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/id" target="_blank" rel="noopener noreferrer"><code>id</code></a> attribute must have a unique value in the whole HTML document. Locating an element using the <code>id</code> attribute is thus a good option (assuming the value is static
                            and does not change dynamically). The
                            <code>name</code> attribute used with many form elements does not have to be unique but is often
                            <em>good enough</em> for automation purposes. We could modify the CSS locator like this to use the value of the <code>name</code> attribute:
                        </p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-css"><code class="language-css">#locator-example &gt; button[name=&#x27;that-button&#x27;];
</code></code></pre>
                            </div>
                        </div>
                        <h4 id="make-it-as-simple-as-possible-but-no-simpler">Make it as simple as possible, but no simpler</h4>
                        <p>If we have only one button named <code>that-button</code> in our HTML document, we can further simplify the locator by omitting the <code>#locator-example &gt;</code> part, making the locator less strict:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-css"><code class="language-css">button[name=&quot;that-button&quot;]
</code></code></pre>
                            </div>
                        </div>
                        <p>Our robot keyword might look like this:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Click That Button
    Click Button    css:button[name=&quot;that-button&quot;]
</code></code></pre>
                            </div>
                        </div>
                        <p>The <code>Click Button</code> keyword has built-in logic for locating buttons by their
                            <code>id</code>, <code>name</code>, and <code>value</code> attributes. We can reduce the locator to a really short form:
                        </p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Click That Button
    Click Button    that-button
</code></code></pre>
                            </div>
                        </div>
                        <p>If you want to communicate that you are relying on the <code>name</code> attribute for locating the button, you can use the <code>name:</code> strategy prefix:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Click That Button
    Click Button    name:that-button
</code></code></pre>
                            </div>
                        </div>
                        <h4 id="one-locator-to-rule-them-all"> One locator to rule them all</h4>
                        <p>Automatic locator extraction works best when the element has a unique <code>id</code> attribute. Right-click on the <code>&lt;button id=&quot;sad-button&quot;...</code> element in the inspector. Select <code>Copy</code> -&gt; <code>CSS Selector</code> (Firefox), or
                            <code>Copy</code> -&gt; <code>Copy selector</code> (Chrome). The result is the following <a href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank" rel="noopener noreferrer">CSS</a> selector:
                        </p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-css"><code class="language-css">#sad-button
</code></code></pre>
                            </div>
                        </div>
                        <p>Whenever possible, use <code>id</code> attribute locators. They are typically the most robust ones and target exactly the elements you want. In this case, both Firefox and Chrome automatically chose the <code>id</code> as the selector
                            (locator). We could use the CSS
                            <code>id</code> locator in a robot script like this:
                        </p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Click That Button
    Click Button    sad-button
</code></code></pre>
                            </div>
                        </div>
                        <p>If you want to communicate that you are relying on the <code>id</code> attribute for locating the button, you can use the <code>id:</code> strategy prefix:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Click That Button
    Click Button    id:sad-button
</code></code></pre>
                            </div>
                        </div>
                        <h4 id="who-are-you-no-one"> Who are you? - No one.</h4>
                        <p>What if the element lacks both <code>id</code> and <code>name</code> attributes? If the element has CSS classes, we could use those for locating. Right-click on the
                            <code>&lt;button class=&quot;mad-button&quot;...</code> element in the inspector. Select
                            <code>Copy</code> -&gt; <code>CSS Selector</code> (Firefox), or <code>Copy</code> -&gt;
                            <code>Copy selector</code> (Chrome). The results are the following <a href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank" rel="noopener noreferrer">CSS</a> selectors:
                        </p>
                        <p>Firefox:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-css"><code class="language-css">.mad-button
</code></code></pre>
                            </div>
                        </div>
                        <p>Chrome:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-css"><code class="language-css">#locator-example &gt; button.mad-button;
</code></code></pre>
                            </div>
                        </div>
                        <p>We could use the CSS class locator in a robot script like this:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Click That Button
    Click Button    css:.mad-button
</code></code></pre>
                            </div>
                        </div>
                        <h4 id="other-locator-strategies-xpath"> Other locator strategies: XPath</h4>
                        <p>Right-click on the <code>&lt;button name=&quot;that-button&quot;...</code> element in the inspector. Select <code>Copy</code> -&gt; <code>XPath</code> (Firefox), or <code>Copy</code> -&gt; <code>Copy XPath</code> (Chrome). The results
                            are the following <a href="https://developer.mozilla.org/en-US/docs/Web/XPath" target="_blank" rel="noopener noreferrer">XPath</a> expressions:</p>
                        <p>Firefox:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers "><code>/html/body/div/div[1]/div/main/div/section/div/article/div/div/span/button[1]
</code></code></pre>
                            </div>
                        </div>
                        <p>Chrome:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers "><code>//*[@id=&quot;locator-example&quot;]/button[1]
</code></code></pre>
                            </div>
                        </div>
                        <h4 id="testing-the-xpath-locator"> Testing the XPath locator</h4>
                        <p>To test the XPath expression (locator), click on the <code>Console</code> tab in the developer tools and run this command:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-js"><code class="language-js">$x(&#x27;//*[@id=&quot;locator-example&quot;]/button[1]&#x27;);
</code></code></pre>
                            </div>
                        </div>
                        <p>The <code>$x(...)</code> statement works in both Firefox and Chrome for executing XPath expressions. We could use the XPath locator in a robot script like this, using the
                            <code>xpath:</code> locator strategy prefix:
                        </p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Click That Button
    Click Button    xpath://*[@id=&quot;locator-example&quot;]/button[1]
</code></code></pre>
                            </div>
                        </div>
                        <h4 id="analyzing-the-xpath-locator"> Analyzing the XPath locator</h4>
                        <p>Firefox provides the full XPath from the root <code>html</code> element to the button. This type of locator will break easily, as any HTML structure changes will cause the locator to fail. Chrome does a better job here (if we consider
                            it better as in &quot;more robust for our use case&quot;). Chrome&#x27;s XPath expression reads: &quot;The first <code>button</code> element under a parent element that has an <code>id</code> attribute with the value of
                            <code>locator-example</code>.&quot;. Neither of these XPath locators is as robust as the
                            <code>id</code> or <code>name</code> attribute CSS locators.
                        </p>
                        <h4 id="use-cases-for-the-xpath-locator-strategy"> Use cases for the XPath locator strategy</h4>
                        <p>XPath is useful in cases where the CSS strategy does not work. XPath works, for example, in cases where you need to select the parent of a child element. CSS works only for cases where you select a specific element or a child element.
                            Traversing to the parent element is not currently supported by the CSS specification.</p>




                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
    </div>
</section>