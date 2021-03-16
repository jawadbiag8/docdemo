
<article class="sc-hBEYos dVNWBU">
    <h1>Getting to the intranet</h1>
    <aside class="sc-hHftDr ewYhue">
        <div><span class="sc-dmlrTW hAIwHX">beginner</span><small>Time to complete ~2 hours</small>
        </div>
    </aside>
    <p>Ok, let&#x27;s start using our robot to do something useful!</p>
    <h2 id="defining-our-task"><button type="button"><svg height="16" width="16">
            <path
                d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
            </path>
            </svg></button>Defining our task</h2>
    <p>Consider a scenario where you are responsible for entering sales goals and actual numbers each week, for all of the salespeople individually on a web-based Internet site. Right you could imagine how much of tedious and repetitive task
        this can be. So, let’s build a robot for this scenario. </p>
    <p><strong>Now this Process’s flow will be:</strong></p>
    <ol>
        <li>
            The robot will download the weekly generated sales file excel file from HTTP source Link will be provided : http://training.autosphere.ai/SalesData.xlsx
        </li>
        <li>
            The robot will the open the browser and log in to the web application.
        </li>
        <li>
            The robot will read all the entries from the excel file.
        </li>
        <li>
            The robot will open the web applications and fill the forms with excel file data one by one.
        </li>
        <li>
            After making all the entries the robot collects the results by taking screenshot of the sales summary section and save it in specific directory.
        </li>
        <li>
            The robot will then get all the sales difference and result data from web application and prepare a PDF file.
        </li>
        <li>
            The robot will close the browser and logout of the system.
        </li>
    </ol>
    <p>Let's start by being ambitious and describe the full job that it will need to do in one phrase. That will become our task description.</p>
    <p>We settle on: <code>Insert the sales data for the week and export it as a PDF</code></p>
    <p>In Autosphere Studio, modify the <code>*** Tasks ***</code> cell like this:</p>
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
</code></code></pre>
        </div>
    </div>
    <h2 id="the-first-step-opening-the-intranet"><button type="button"><svg height="16" width="16">
            <path
                d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
            </path>
            </svg></button>The first step: Opening the Internet</h2>
    <p>The robot will need to open a browser and navigate to the Internet website.</p>
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
    Open The Intranet Website
</code></code></pre>
        </div>
    </div>
    <p><code>Open The Intranet Website</code> is clear enough for us, but the robot does not yet know what that means. We explain that to it by specifying through a keyword. </p>
    <blockquote>
        <p>Note that the <code>Open The Intranet Website</code> keyword is indented with four spaces (having four spaces before the keyword). This is called indentation. The default is to use four spaces. You can indent by pressing the <code>TAB</code>                            key on your keyboard.
        </p>
    </blockquote>
    <h3 id="adding-a-new-keyword"><button type="button"><svg height="16" width="16">
            <path
                d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
            </path>
            </svg></button>Adding a new keyword</h3>
    <p>Add a new cell before the <code>*** Tasks ***</code> one by clicking on the <code>+</code> button in the toolbar, and add this code to it:</p>
    <div class="sc-idOhPF kGntgQ">
        <div class="sc-dIUggk XavQL"><button type="button"><svg height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M7 5h2a3 3 0 003-3 2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V4a2 2 0 012-2 3 3 0 003 3zM6 2a2 2 0 114 0 1 1 0 01-1 1H7a1 1 0 01-1-1z">
                </path>
                </svg></button></div>
        <div>
            <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Open The Internet Website
</code></code></pre>
        </div>
    </div>
    <p><img src="../views/docs/2be2d54c2457724a3ee6ab0aea3f89c6/Autosphere-lab-adding-keyword-cell.gif" alt="Adding a new cell before the Tasks cell" /></p>
    <blockquote>
        <p>Note: the order is important here. <code>*** Keywords ***</code> cells need to be positioned before the cells that refer to them, in our case, the <code>*** Tasks ***</code> cell.</p>
    </blockquote>
    <p>Great! Now <code>Open The Intranet Website</code> has become the name of a new keyword. It does not do anything yet though... How can we teach our robot to open a browser and work with it?
    </p>
    <h3 id="adding-our-first-library"><button type="button"><svg height="16" width="16">
            <path
                d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
            </path>
            </svg></button>Adding our first library</h3>
    <p>The answer is by adding a library. Libraries teach our robots new skills by making new keywords available to them. In our case, we want to work with the browser, so we will add the
        <code>Autosphere.Browser</code> library. Libraries are added in the <strong><em>Settings</em></strong> section of robot scripts.</p>
    <p>Edit the <code>*** Settings ***</code> cell so that it reads like this:</p>
    <div class="sc-idOhPF kGntgQ">
        <div class="sc-dIUggk XavQL"><button type="button"><svg height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M7 5h2a3 3 0 003-3 2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V4a2 2 0 012-2 3 3 0 003 3zM6 2a2 2 0 114 0 1 1 0 01-1 1H7a1 1 0 01-1-1z">
                </path>
                </svg></button></div>
        <div>
            <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***
Documentation     Starter robot for the Beginners&#x27; course.
Library           Autosphere.Browser
</code></code></pre>
        </div>
    </div>
    <blockquote>
        <p><code>Autosphere.Browser</code> is part of the Autosphere Framework set of libraries, created and maintained by Autosphere.
        </p>
    </blockquote>
    <h3 id="using-keywords-from-a-library"><button type="button"><svg height="16" width="16">
            <path
                d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
            </path>
            </svg></button>Using keywords from a library</h3>
    <p>To open a browser and navigate to the intranet, we can now use the
        <code>Open Available Browser</code> keyword provided by the <code>Autosphere.Browser</code> library, and give it the address of the intranet as an argument.</p>
    <p>Edit the cell containing our own <code>Open The Intranet Website</code> keyword, so it reads like this:
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
Open The Internet Website
    Open Available Browser     http://training.autosphere.ai/#/
</code></code></pre>
        </div>
    </div>
    <blockquote>
        <p>Note: You need to have at least two spaces before the keyword. This is called
            <em>indentation</em>. The default is to use four spaces. You can indent by pressing the
            <code>TAB</code> key on your keyboard. The spaces are shown here as underscores:</p>
        <div class="sc-idOhPF kGntgQ">
            <div class="sc-dIUggk XavQL"><button type="button"><svg height="16" viewBox="0 0 16 16"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7 5h2a3 3 0 003-3 2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V4a2 2 0 012-2 3 3 0 003 3zM6 2a2 2 0 114 0 1 1 0 01-1 1H7a1 1 0 01-1-1z">
                    </path>
                    </svg></button></div>
            <div>
                <pre><code class="line-numbers language-robot"><code class="language-robot">____Open Available Browser
</code></code></pre>
            </div>
        </div>
        <p>You need to have at least two spaces between the keyword and its arguments. If you only have one space, Autosphere will consider the argument as part of the keyword name. The spaces are shown here as underscores:</p>
        <div class="sc-idOhPF kGntgQ">
            <div class="sc-dIUggk XavQL"><button type="button"><svg height="16" viewBox="0 0 16 16"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7 5h2a3 3 0 003-3 2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V4a2 2 0 012-2 3 3 0 003 3zM6 2a2 2 0 114 0 1 1 0 01-1 1H7a1 1 0 01-1-1z">
                    </path>
                    </svg></button></div>
            <div>
                <pre><code class="line-numbers language-robot"><code class="language-robot">    Open Available Browser____http://training.autosphere.ai/#/
</code></code></pre>
            </div>
        </div>
    </blockquote>

    <h2 id="the-robot-so-far"><button type="button"><svg height="16" width="16">
            <path
                d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
            </path>
            </svg></button>The robot so far</h2>
    <p>Now our robot looks like this:</p>
    <div class="sc-idOhPF kGntgQ">
        <div class="sc-dIUggk XavQL"><button type="button"><svg height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M7 5h2a3 3 0 003-3 2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V4a2 2 0 012-2 3 3 0 003 3zM6 2a2 2 0 114 0 1 1 0 01-1 1H7a1 1 0 01-1-1z">
                </path>
                </svg></button></div>
        <div>
            <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***
Documentation     Robot to enter weekly sales data into the RobotSpareBin Industries Intranet.
Library           Autosphere.Browser

*** Keywords ***
Open The Internet Website
    Open Available Browser    http://training.autosphere.ai/#/

*** Tasks ***
Insert the sales data for the week and export it as a PDF
    Open The Internet Website
</code></code></pre>
        </div>
    </div>
    <p>Let&#x27;s run our robot (by clicking on the <code>&gt;&gt;</code> button in the toolbar at the top), and enjoy the robot starting to work for us:</p>
    <!--<p><img src="" alt="Autosphere Studio - opening the browser gif to be add" /></p>-->
    <h2 id="what-we-learned"><button type="button"><svg height="16" width="16">
            <path
                d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
            </path>
            </svg></button>What we learned</h2>
    <ul>
        <li>You should define the task of your robot in one phrase.</li>
        <li>You can define your own keywords and call them in your task.</li>
        <li>Keywords cells need to appear before other cells that refer to them.</li>
        <li>You can get new keywords for your robot by adding libraries.</li>
        <li>Libraries add new capabilities to your robot.</li>
        <li>Libraries are added in the <code>*** Settings ***</code> section of your <code>.robot</code> file.
        </li>
        <li>Testing your robots often, even after each edit, gives you continuous feedback on how your robot functions.</li>
        <li>You can open a browser with the <code>Open Available Browser</code> keyword, by giving it the URL you want to open as an argument.</li>
        <li>Indentation is important.</li>
        <li>You have to separate arguments and keywords with at least two spaces.</li>
    </ul>
    <aside class="sc-kfzAmx cdpwWb">
        <div><a class="pagination" href="docs.php?page=courses/beginners-course/your-first-robot">Previous chapter</a></div>
        <div><a class="pagination" href="docs.php?page=courses/beginners-course/logging-in">Next chapter</a></div>
    </aside>
</article>