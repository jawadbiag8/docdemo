<section class="content">
    <div class="container-fluid">
        <!-- Headings -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h4>
                            <b>Simple Robot</b>
                        </h4>

                    </div>
                    <div class="body">
                        <p>This simple Autosphere robot opens a web page, stores some text content, and takes a screenshot of an image element on the web page.</p>
                        <h4 id="run-this-robot-locally-in-Autosphere-lab"> Run this robot locally in Autosphere Lab</h4>
                        <p>You can run this robot on your local machine using <a href="documantation.php?page=guide&node=quickstart-guide">Autosphere Studio</a>:</p>
                        <ol>

                            <li>Open this <code>Simple Automation</code> example.</li>
                            <li>Open the <code>tasks.robot</code> file and run it.</li>
                        </ol>
                        <h4 id="robot-script"> Robot script</h4>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot"># ## Simple web scraper robot
# Opens a web page and stores some content.

*** Settings ***
Documentation     A simple web scraper robot.
...               Opens a website.
...               Stores the web page text in a file in the output directory.
...               Saves a screenshot of an element in the output directory.
Library           Autosphere.Browser
Library           Autosphere.FileSystem

*** Variables ***
${URL}=           https://www.google.com/

*** Tasks ***
Store Web Page Content
Open Available Browser    ${URL}
${text}=    Get Text    scroller
Create File
...    ${CURDIR}${/}output${/}text.txt
...    ${text}
...    overwrite=True
Screenshot
...    css:.img-fluid
...    ${CURDIR}${/}output${/}screenshot.png
[Teardown]    Close Browser

</code></code></pre>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
    </div>
</section>