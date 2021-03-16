
<article class="sc-hBEYos dVNWBU">
    <h1>Downloading the Excel file</h1>
    <aside class="sc-hHftDr ewYhue">
        <div><span class="sc-dmlrTW hAIwHX">beginner</span><small>Time to complete ~2 hours</small>
        </div>
    </aside>
    <p>Like our Process Definition Document tells us, the &quot;real&quot; sales data is exported from the company&#x27;s sales system each week, and uploaded to the internet website. Our robot will need to get the data out of the Excel file
        and fill the sales form for each of the sales representatives. But first, it needs to download it locally.</p>
    <p>So, as always, we want to add one more line to our <code>*** Tasks ***</code> section. This time we will not add it at the end of the task, but <strong>before</strong> the
        <code>Fill And Submit The Form</code> keyword:</p>
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
    Download The Excel File
    Fill And Submit The Form
</code></code></pre>
        </div>
    </div>
    <p>Then, as you probably guessed by now, we need to add a new <code>*** Keywords ***</code> cell
        <strong>before</strong> the <code>*** Tasks ***</code> one with our new keyword:</p>
    <div class="sc-idOhPF kGntgQ">
        <div class="sc-dIUggk XavQL"><button type="button"><svg height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7 5h2a3 3 0 003-3 2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V4a2 2 0 012-2 3 3 0 003 3zM6 2a2 2 0 114 0 1 1 0 01-1 1H7a1 1 0 01-1-1z">
                    </path>
                </svg></button></div>
        <div>
            <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Download The Excel file
</code></code></pre>
        </div>
    </div>
    <p>Great! Now we have to <em>implement</em> the keyword.</p>
    <h2 id="adding-the-rpa-http-library"><button type="button"><svg height="16" width="16">
                <path
                    d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
                </path>
            </svg></button>Adding the <code>Autosphere.HTTP</code> library</h2>
    <p>Our robot at the moment does not know how to download files from remote web servers, but by now, we know how we can teach an old robot new skills: by <strong>adding a library</strong>!</p>
    <p>Our trusty <code>Autosphere's</code> set of libraries includes the <code>Autosphere.HTTP</code> library that adds many keywords to work with remote web servers, so that&#x27;s just what we need.</p>
    <p>We add a new line to our <code>*** Settings ***</code> section like this:</p>
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
Library           Autosphere.HTTP
</code></code></pre>
        </div>
    </div>
    <p>Now we can use all of the keywords contained in the <code>Autosphere.HTTP</code>, including the
        <code>Download</code> keyword.</p>
    <p>The <code>Download</code> keyword requires a URL as an argument, and we know that we can expect our Excel file at <code>http://training.autosphere.ai/SalesData.xlsx</code> each week.</p>
    <p>In addition to the URL argument, we are also setting the <code>overwrite</code> parameter to
        <code>TRUE</code>, so that we can count on the local file being always the most recent version.
    </p>
    <p>So our keyword becomes:</p>
    <div class="sc-idOhPF kGntgQ">
        <div class="sc-dIUggk XavQL"><button type="button"><svg height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7 5h2a3 3 0 003-3 2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V4a2 2 0 012-2 3 3 0 003 3zM6 2a2 2 0 114 0 1 1 0 01-1 1H7a1 1 0 01-1-1z">
                    </path>
                </svg></button></div>
        <div>
            <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Download The Excel file
    Download    http://training.autosphere.ai/SalesData.xlsx    overwrite=True
</code></code></pre>
        </div>
    </div>
    <p>With these additions, now our robot looks like this:</p>
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
Library           Autosphere.HTTP

*** Keywords ***
Open The Internet Website
    Open Available Browser    http://training.autosphere.ai/#/

*** Keywords ***
Log In
    Input Text    id:username    developer
    Input Password    password    autosphere
    Submit Form
    Wait Until Page Contains Element    id:sales-form

*** Keywords ***
Fill And Submit The Form
    Input Text    firstname    Raymond
    Input Text    lastname    Redington
    Input Text    salesresult    123
    Select From List By Value    salestarget    10000
    Click Button    Submit

*** Keywords ***
Download The Excel file
    Download    http://training.autosphere.ai/SalesData.xlsx    overwrite=True

*** Tasks ***
Insert the sales data for the week and export it as a PDF
    Open The Intranet Website
    Log In
    Download The Excel File
    Fill And Submit The Form
</code></code></pre>
        </div>
    </div>
    <p>Let&#x27;s run our robot now, clicking on the <code>&gt;&gt;</code> button:</p>
    <p>Great! Our robot has downloaded the remote file, and put it alongside our
        <code>Tasks.ipynb</code> script:</p>
    <p><img src="../views/docs/7c7abb6c17818e0b30531969fce1e5df/excel-file-in-file-viewer.png" alt="Excel file in file viewer" /></p>
    <h2 id="what-we-learned"><button type="button"><svg height="16" width="16">
                <path
                    d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
                </path>
            </svg></button>What we learned</h2>
    <ul>
        <li>You can use the <code>Autosphere.HTTP</code> library, part of the <code>Autosphere</code> package, to interact with remote webservers.</li>
        <li>You can use the <code>Download</code> keyword to easily download remote files to your local computer.
        </li>
        <li>The <code>Download</code> keyword can be configured to always overwrite an existing file of the same name, if found.</li>
    </ul>
    <aside class="sc-kfzAmx cdpwWb">
        <div><a class="pagination" href="docs.php?page=courses/beginners-course/filling-in-the-sales-form">Previous chapter</a></div>
        <div><a class="pagination" href="docs.php?page=courses/beginners-course/filling-in-the-sales-form-using-excel-data">Next
                chapter</a></div>
    </aside>
</article>
