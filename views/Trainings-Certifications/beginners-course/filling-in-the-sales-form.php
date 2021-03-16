
<article class="sc-hBEYos dVNWBU">
    <h1>Filling in the sales form</h1>
    <aside class="sc-hHftDr ewYhue">
        <div><span class="sc-dmlrTW hAIwHX">beginner</span><small>Time to complete ~2 hours</small>
        </div>
    </aside>

    <p>Our robot logged in to the internet website!</p>
    <p>The page now shows a form on the left where User can fill the sales data for one sales representative, and it looks like this:</p>
    <p><img src="../views/docs/f658ec1a815719ba80d06b407d44c9a6/sales-form.png" alt="Sales form" /></p>
    <p>The next logical step in our task then, using plain English, will be
        <code>Fill And Submit The Form</code>.</p>
    <p>Modify the <code>*** Tasks ***</code> cell like this:</p>
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
    Fill And Submit The Form
</code></code></pre>
        </div>
    </div>
    <p>As we have learned, we need to <em>implement</em> the keyword so that our robot knows what to do. Let&#x27;s add a new keyword cell <strong>before the task cell</strong>:</p>
    <div class="sc-idOhPF kGntgQ">
        <div class="sc-dIUggk XavQL"><button type="button"><svg height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7 5h2a3 3 0 003-3 2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V4a2 2 0 012-2 3 3 0 003 3zM6 2a2 2 0 114 0 1 1 0 01-1 1H7a1 1 0 01-1-1z">
                    </path>
                </svg></button></div>
        <div>
            <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Fill And Submit The Form
</code></code></pre>
        </div>
    </div>
    <p><img src="../views/docs/ffdde09e319b05bb49b1f9d1b7b2fe52/adding-new-cell.gif" alt="Creating the new keyword cell" /></p>






    <p>There is an <code>Autosphere.Browser</code> keyword we can take advantage of:
        <code>Wait Until Page Contains Element</code>. Provided with a locator, it will, well, wait until the page contains the said element.</p>
    <p>Where should we do this waiting? We <em>could</em> add the keyword in our
        <code>Fill And Submit The Form</code> keyword. Calling it in the <code>Log In</code> keyword might work, too. In the end, we decide that the login operation can be considered successful if the page contains the sales form.</p>
    <p>Armed with the <code>id</code> attribute of the sales form (we found it by inspecting the HTML markup), we edit our <strong>login keyword</strong> like this:</p>
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
    Input Text    id:username    developer
    Input Password    id:password    autosphere
    Submit Form
    Wait Until Page Contains Element    id:sales-form
</code></code></pre>
        </div>
    </div>
    <p>Using our previous knowledge of the <code>Input Text</code> keyword, we can easily fill the
        <code>First Name</code>, <code>Last Name</code> and <code>Sales Results</code> fields of this new form. We just need to use the <code>name</code> of each field as the locator:</p>
    <div class="sc-idOhPF kGntgQ">
        <div class="sc-dIUggk XavQL"><button type="button"><svg height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7 5h2a3 3 0 003-3 2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V4a2 2 0 012-2 3 3 0 003 3zM6 2a2 2 0 114 0 1 1 0 01-1 1H7a1 1 0 01-1-1z">
                    </path>
                </svg></button></div>
        <div>
            <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Fill And Submit The Form
    Input Text    firstname    Raymond
    Input Text    lastname    Reddington
    Input Text    salesresult    123
    Click Button    Submit
</code></code></pre>
        </div>
    </div>
    <p>The sales target, however, is not a simple text field, but a <code>select</code> HTML element. We need to use a different keyword to select a value from the ones that the field allows.
        <code>Autosphere.Browser</code> and <code>Select From List By Value</code> to the rescue! The keyword takes a locator and a value as arguments:</p>
    <div class="sc-idOhPF kGntgQ">
        <div class="sc-dIUggk XavQL"><button type="button"><svg height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7 5h2a3 3 0 003-3 2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V4a2 2 0 012-2 3 3 0 003 3zM6 2a2 2 0 114 0 1 1 0 01-1 1H7a1 1 0 01-1-1z">
                    </path>
                </svg></button></div>
        <div>
            <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Fill And Submit The Form
    Input Text    firstname    Raymond
    Input Text    lastname    Reddington
    Input Text    salesresult    123
    Select From List By Value    salestarget    10000
    Click Button    Submit
</code></code></pre>
        </div>
    </div>
    <p>Here&#x27;s how our complete robot looks like now:</p>
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
    Open Available Browser    training.autosphere.ai

*** Keywords ***
Log In
    Input Text    id:username    developer
    Input Password    password    autosphere
    Submit Form
    Wait Until Page Contains Element    id:sales-form

*** Keywords ***
Fill And Submit The Form
    Input Text    firstname    Raymond
    Input Text    lastname    Reddington
    Input Text    salesresult    123
    Select From List By Value    salestarget    10000
    Click Button    Submit

*** Tasks ***
Insert the sales data for the week and export it as a PDF
    Open The Internet Website
    Log In
    Fill And Submit The Form

</code></code></pre>
        </div>
    </div>
    <p>We try running our robot again:</p>
    <p><img src="../views/docs/65b25354d71bf24dddab0c477751fbb0/successful-filling-form.gif" alt="Successful filling form" /></p>

    <p>We now have the basic outline of our form filling keyword done!</p>
    <p>Next, we need to figure out how to read real data and how to enter the data for multiple people in sequence (looping).</p>
    <h2 id="what-we-learned"><button type="button"><svg height="16" width="16">
                <path
                    d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
                </path>
            </svg></button>What we learned</h2>
    <ul>
        <li>There is only one way to eat an elephant: a bite at a time.</li>
        <li>The <code>Click Button</code> keyword can click on buttons using the label as the locator (other locators work, too).</li>
        <li>Use the <code>Wait Until Page Contains Element</code> to wait before proceeding to avoid failures due to the robot advancing too fast.</li>
        <li>Hard coding data is an acceptable practice to progress and to find potential technical blockers more quickly.</li>
        <li>Take small steps. Iterate often.</li>
    </ul>
    <aside class="sc-kfzAmx cdpwWb">
        <div><a class="pagination" href="docs.php?page=courses/beginners-course/logging-in">Previous chapter</a></div>
        <div><a class="pagination" href="docs.php?page=courses/beginners-course/downloading-the-excel-file">Next chapter</a></div>
    </aside>
</article>
