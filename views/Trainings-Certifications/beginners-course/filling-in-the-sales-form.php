<section id="contentpage" class="content">
    <div class="container-fluid">
        <!-- Headings -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b> Course</b>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-left">
                                    <li><a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=downloading-the-excel-file">Next</a></li>
                                    <li><a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=logging-in">Previous</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <h2>Filling in the sales form</h2>
                        <aside class="sc-hHftDr ewYhue">
                        <div class="m-b-15"><span class="hAIwHX m-r-10">beginner</span><small>Time to complete ~2 hours</small>
                            </div>
                        </aside>

                        <p>Our robot logged in to the internet website!</p>
                        <p>The page now shows a form on the left where User can fill the sales data for one sales representative, and it looks like this:</p>
                        <p><img class ="img-responsive" src="../images/Training-Certifications/Beginner-Course/sales-form.png" alt="Sales form" /></p>
                        <p>The next logical step in our task then, using plain English, will be
                            <code>Fill And Submit The Form</code>.
                        </p>
                        <p>Modify the <code>*** Tasks ***</code> cell like this:</p>
                        <div class="sc-idOhPF kGntgQ">
                            
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
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Fill And Submit The Form
</code></code></pre>
                            </div>
                        </div>
                        <p><img class ="img-responsive" src="../images/Training-Certifications/Beginner-Course/adding-new-cell.gif" alt="Creating the new keyword cell" /></p>






                        <p>There is an <code>Autosphere.Browser</code> keyword we can take advantage of:
                            <code>Wait Until Page Contains Element</code>. Provided with a locator, it will, well, wait until the page contains the said element.
                        </p>
                        <p>Where should we do this waiting? We <em>could</em> add the keyword in our
                            <code>Fill And Submit The Form</code> keyword. Calling it in the <code>Log In</code> keyword might work, too. In the end, we decide that the login operation can be considered successful if the page contains the sales form.
                        </p>
                        <p>Armed with the <code>id</code> attribute of the sales form (we found it by inspecting the HTML markup), we edit our <strong>login keyword</strong> like this:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
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
                            <code>First Name</code>, <code>Last Name</code> and <code>Sales Results</code> fields of this new form. We just need to use the <code>name</code> of each field as the locator:
                        </p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
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
                            <code>Autosphere.Browser</code> and <code>Select From List By Value</code> to the rescue! The keyword takes a locator and a value as arguments:
                        </p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
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
                            <div class="sc-dIUggk XavQL"></div>
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
                        <p><img class ="img-responsive" src="../images/Training-Certifications/Beginner-Course/successful-filling-form.gif" alt="Successful filling form" /></p>

                        <p>We now have the basic outline of our form filling keyword done!</p>
                        <p>Next, we need to figure out how to read real data and how to enter the data for multiple people in sequence (looping).</p>
                        <h4 id="what-we-learned">What we learned</h4>
                        <ul>
                            <li>There is only one way to eat an elephant: a bite at a time.</li>
                            <li>The <code>Click Button</code> keyword can click on buttons using the label as the locator (other locators work, too).</li>
                            <li>Use the <code>Wait Until Page Contains Element</code> to wait before proceeding to avoid failures due to the robot advancing too fast.</li>
                            <li>Hard coding data is an acceptable practice to progress and to find potential technical blockers more quickly.</li>
                            <li>Take small steps. Iterate often.</li>
                        </ul>



                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
        <aside class="cdpwWb">
            <div class="float-right m-b-50"><a class="next-btn" href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=downloading-the-excel-file">Next chapter <i class="material-icons">navigate_next</i></a></div>
            <div class="m-b-50"><a class="next-btn" href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=logging-in"><i class="material-icons">navigate_before</i> Previous chapter</a></div>
        </aside>
    </div>
</section>