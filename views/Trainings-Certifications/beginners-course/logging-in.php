
<article class="sc-hBEYos dVNWBU">
    <h1>Logging into the Internet</h1>
    <aside class="sc-hHftDr ewYhue">
        <div><span class="sc-dmlrTW hAIwHX">beginner</span><small>Time to complete ~2 hours</small>
        </div>
    </aside>
    <p>Now that it has opened the browser, our robot needs to log into the intranet, using User&#x27;s credentials.
    </p>
    <h2 id="the-second-step-logging-in"><button type="button"><svg height="16" width="16">
                <path
                    d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
                </path>
            </svg></button>The second step: logging in</h2>
    <p>Let&#x27;s add the next logical step to our task. We&#x27;ll call it <code>Log In</code>. The
        <code>*** Tasks ***</code> cell should look like this after adding the step:</p>
    <div class="sc-idOhPF kGntgQ">
        <div class="sc-dIUggk XavQL"><button type="button"><svg height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7 5h2a3 3 0 003-3 2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V4a2 2 0 012-2 3 3 0 003 3zM6 2a2 2 0 114 0 1 1 0 01-1 1H7a1 1 0 01-1-1z">
                    </path>
                </svg></button></div>
        <div>
            <pre><code class="line-numbers language-robot"><code class="language-robot">*** Tasks ***
Insert the sales data for the week and export it as a PDF
    Open The Internet Website
    Log In
</code></code></pre>
        </div>
    </div>
    <p>Add a new <code>*** Keywords ***</code> cell before the <code>*** Tasks ***</code> cell and add this code to it:</p>
    <div class="sc-idOhPF kGntgQ">
        <div class="sc-dIUggk XavQL"><button type="button"><svg height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7 5h2a3 3 0 003-3 2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V4a2 2 0 012-2 3 3 0 003 3zM6 2a2 2 0 114 0 1 1 0 01-1 1H7a1 1 0 01-1-1z">
                    </path>
                </svg></button></div>
        <div>
            <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Log In
</code></code></pre>
        </div>
    </div>
    <p><img src="../views/docs/82b0019153c4d126dacc717ab51ecf56/Autosphere-lab-adding-new-cell.gif" alt="Adding new keyword cell" /></p>
    <p>Ok! Now we have to tell our robot to find the correct fields on the page and fill them.</p>
    <blockquote>
        <p>Note: Defining each keyword in a separate Notebook cell makes it possible to execute them individually. This is useful in more complex projects, where you might want to run and edit a single keyword instead of running the full
            robot all the time. You could add the new
            <code>Log In</code> keyword to the existing <code>Open The Internet Website</code> keyword cell, too, but then you would lose the ability to execute the keywords individually.</p>
    </blockquote>
    <h3 id="finding-a-form-field"><button type="button"><svg height="16" width="16">
                <path
                    d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
                </path>
            </svg></button>Finding a form field</h3>
    <p>You, a human being (just assuming!), can see and find things such as forms and fields on a web page. Your robot, however, lacks both vision and the ability to think. It needs very specific instructions to find <em>anything</em>.</p>
    <p>A web page is written in <a href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank" rel="noopener noreferrer">HTML</a> (Hypertext Markup Language). It defines the meaning and structure of web content. The Autosphere
        Training Portal is also built using HTML.
    </p>
    <p>To find forms, fields, and other elements from an HTML web page, your robot needs to know their
        <em>locators</em>. Think of a locator as the street address for an element, such as the username field on the Autosphere Training Portal login page.</p>
    <blockquote>
        <p>If you want, you can go deeper and learn more about how to find interface elements in web applications and the concept of locators <a href="<?php echo $baseusrl; ?>views/docs.php?page=development-howtos/browser/web-scraper-robot">in
                this dedicated article</a>.</p>
    </blockquote>
    <p>This is what the username field HTML markup looks like:</p>
    <p><code>&lt;input type=&quot;text&quot; id=&quot;username&quot; name=&quot;username&quot; required=&quot;&quot; class=&quot;form-control&quot;/&gt;</code>
    </p>
    <p>It is an <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/Input" target="_blank" rel="noopener noreferrer"><code>input</code></a> element. It has several <a href="https://developer.mozilla.org/en-US/docs/Glossary/Attribute"
                                                                                                                                                                                      target="_blank" rel="noopener noreferrer"><code>attributes</code></a>, such as <code>type</code>,
        <code>id</code> and <code>name</code>. We can use these to locate (find) the elements.</p>
    <p>We need to tell the robot to fill in the login form. The <code>Autosphere.Browser</code> library provides a <code>Input Text</code> keyword that can fill in text fields. The keyword takes two arguments: The <code>locator</code> argument
        tells
        <em>where</em> to input. The
        <code>value</code> argument tells <em>what</em> to input.</p>
    <p>In our case, we can call the keyword like this to input <code>developer</code> in the field that has an attribute <code>name</code> with the value of <code>username</code>:</p>
    <div class="sc-idOhPF kGntgQ">
        <div class="sc-dIUggk XavQL"><button type="button"><svg height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7 5h2a3 3 0 003-3 2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V4a2 2 0 012-2 3 3 0 003 3zM6 2a2 2 0 114 0 1 1 0 01-1 1H7a1 1 0 01-1-1z">
                    </path>
                </svg></button></div>
        <div>
            <pre><code class="line-numbers language-robot"><code class="language-robot">    Input Text    username    developer
</code></code></pre>
        </div>
    </div>
    <blockquote>
        <p>Note that you need to have at least two spaces between the keyword and each of the arguments.
        </p>
    </blockquote>
    <h3 id="filling-and-submitting-the-form"><button type="button"><svg height="16" width="16">
                <path
                    d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
                </path>
            </svg></button>Filling and submitting the form</h3>
    <p>Modify the <code>Log in</code> <code>*** Keywords ***</code> cell, so that it looks like this:
    </p>
    <div class="sc-idOhPF kGntgQ">
        <div class="sc-dIUggk XavQL"><button type="button"><svg height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7 5h2a3 3 0 003-3 2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V4a2 2 0 012-2 3 3 0 003 3zM6 2a2 2 0 114 0 1 1 0 01-1 1H7a1 1 0 01-1-1z">
                    </path>
                </svg></button></div>
        <div>
            <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Log In
    Input Text    username    developer
</code></code></pre>
        </div>
    </div>
    <p>Now run the robot, and it will fill the username field:</p>
    <p><img src="../views/docs/75dbfe22ae8de8d8009bd620735f650c/Autosphere-lab-filling-username.gif" alt="Autosphere Lab - Filling the username field" /></p>
    <p>Great! Now we can do the same thing for the password: the only difference is that we should use the more specific <code>Input Password</code> keyword. This keyword accepts the same arguments, with the difference that it will not output
        the value of our secret password in the log.</p>

    <p>So our keyword now is:</p>
    <div class="sc-idOhPF kGntgQ">
        <div class="sc-dIUggk XavQL"><button type="button"><svg height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7 5h2a3 3 0 003-3 2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V4a2 2 0 012-2 3 3 0 003 3zM6 2a2 2 0 114 0 1 1 0 01-1 1H7a1 1 0 01-1-1z">
                    </path>
                </svg></button></div>
        <div>
            <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Log In
    Input Text    username    developer
    Input Password    password    autosphere
</code></code></pre>
        </div>
    </div>
    <p><img src="../views/docs/57e72535f07aa8e6460cf4a4c4dc47e9/Autosphere-lab-filling-username-and-password.gif" alt="Robocorp Lab - Filling the username and password fields" /></p>

    <p>As the last step, the robot needs to submit the form, which we can do by adding the
        <code>Submit Form</code> keyword:</p>
    <div class="sc-idOhPF kGntgQ">
        <div class="sc-dIUggk XavQL"><button type="button"><svg height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7 5h2a3 3 0 003-3 2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V4a2 2 0 012-2 3 3 0 003 3zM6 2a2 2 0 114 0 1 1 0 01-1 1H7a1 1 0 01-1-1z">
                    </path>
                </svg></button></div>
        <div>
            <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Log In
    Input Text    username    developer
    Input Password    password    autosphere
    Submit Form
</code></code></pre>
        </div>
    </div>
    <p>Here&#x27;s how the complete robot code looks like now:</p>
    <div class="sc-idOhPF kGntgQ">
        <div class="sc-dIUggk XavQL"><button type="button"><svg height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7 5h2a3 3 0 003-3 2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V4a2 2 0 012-2 3 3 0 003 3zM6 2a2 2 0 114 0 1 1 0 01-1 1H7a1 1 0 01-1-1z">
                    </path>
                </svg></button></div>
        <div>
            <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***
Library           Autosphere.Browser

*** Keywords ***
Open The Internet Website
    Open Available Browser    http://training.autosphere.ai/#/

*** Keywords ***
Log In
    Input Text    username    developer
    Input Password    password    autosphere
    Submit Form

*** Tasks ***
Insert the sales data for the week and export it as a PDF
    Open The Internet Website
    Log In

</code></code></pre>
        </div>
    </div>
    <p>Run the robot one more time, and you should see it opening the browser, navigating to the internet, and happily logging in.</p>
    <p><img src="../views/docs/54e6e511f5903046a09701c52936de25/Autosphere-lab-logging-in.gif" alt="Robocorp Lab - Logging in" /></p>
     <h2 id="what-we-learned"><button type="button"><svg height="16" width="16">
                <path
                    d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
                </path>
            </svg></button>What we learned</h2>
    <ul>
        <li>You can use the <code>Input Text</code> keyword from the <code>Autosphere.Browser</code> library to fill text input fields.</li>
        <li>You can tell your robots which elements in a webpage to act on by writing
            <code>locators</code>.</li>
        <li>You should use the <code>Input Password</code> keyword to fill password fields.</li>
        <li>You should not commit credentials directly into your <code>.ipynb</code> files. We are doing it here because it&#x27;s a beginner&#x27;s course, but you should never do this in the real world.
        </li>
    </ul>
    <aside class="sc-kfzAmx cdpwWb">
        <div><a class="pagination" href="docs.php?page=courses/beginners-course/getting-to-the-intranet">Previous chapter</a></div>
        <div><a class="pagination" href="docs.php?page=courses/beginners-course/filling-in-the-sales-form">Next chapter</a></div>
    </aside>
</article>
