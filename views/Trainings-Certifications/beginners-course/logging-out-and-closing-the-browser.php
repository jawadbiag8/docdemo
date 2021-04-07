<section class="content">
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
                                <ul class="dropdown-menu pull-right">
                                    
                                    <li><a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=creating-pdf">Previous</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">

                        <h2>Logging out and closing the browser</h2>
                        <aside class="sc-hHftDr ewYhue">
                            <div class="m-b-15"><span class="hAIwHX m-r-10">beginner</span><small>Time to complete ~2 hours</small>
                            </div>
                        </aside>
                        <h4 id="taking-out-the-trash">Taking out the trash</h4>
                        <p><strong>The process is now automated! Well done, you!</strong></p>
                        <p>Let&#x27;s add the next (last!) step, <code>Log Out And Close The Browser</code>, to our task:
                        </p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Tasks ***
Insert the sales data for the week and export it as a PDF
    Open The Internet Website
    Log In
    Download The Excel File
    Fill The Form Using The Data From The Excel File
    Collect The Results
    Export The Table As A PDF
    Log Out And Close The Browser
</code></code></pre>
                            </div>
                        </div>
                        <p>Then (you guessed it, right?) we add a new cell above the tasks one to implement our new keyword:
                        </p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Log Out And Close The Browser
</code></code></pre>
                            </div>
                        </div>
                        <p>So, two things. Log out. Close the browser. You already know about the <code>Click Button</code> keyword, so let&#x27;s go with that for the logout:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Log Out And Close The Browser
    Click Button    Log out
</code></code></pre>
                            </div>
                        </div>
                        <p>How do we close the browser? There&#x27;s a keyword for that, too (thanks again,
                            <code>Autosphere.Browser</code>!)!:
                        </p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Log Out And Close The Browser
    Click Button    Log out
    Close Browser
</code></code></pre>
                            </div>
                        </div>
                        <p><strong>Done!?</strong></p>
                        <h4 id="tearing-things-down">Tearing things down</h4>
                        <p><strong>Almost.</strong> One more detail before the class is dismissed. We want to ensure that the logout and closing of the browser happens even if some part of our process fails. To do it, we use a special keyword: <code>[Teardown]</code> (the brackets are important!).</p>
                        <p>Let&#x27;s modify our <code>*** Tasks ***</code> cell like this:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Tasks ***
Insert the sales data for the week and export it as a PDF
    Open The Internet Website
    Log In
    Download The Excel File
    Fill The Form Using The Data From The Excel File
    Collect The Results
    Export The Table As A PDF
    [Teardown]    Log Out And Close The Browser
</code></code></pre>
                            </div>
                        </div>
                        <p>What if we decided to leave out the <code>[Teardown]</code>? In that case, the logout and closing of the browser would not happen if one of our keywords happened to fail during execution. Using the <code>[Teardown]</code> keyword and
                            giving our keyword as the argument, we ensure that no matter what, at least the cleanup step always happens. <strong>Neat!</strong></p>
                        <h4 id="it-is-done">It is done!</h4>
                        <p>Our finished robot now looks like this:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***
Library           Autosphere.Browser
Library           Autosphere.Excel.Files
Library           Autosphere.HTTP
Library           Autosphere.PDF

*** Keywords ***
Open The Intranet Website
    Open Available Browser    http://training.autosphere.ai/#/

*** Keywords ***
Log In
    Input Text    id:username    developer
    Input Password    id:password    autosphere
    Submit Form
    Wait Until Page Contains Element    id:sales-form

*** Keywords ***
Download The Excel file
    Download    http://training.autosphere.ai/SalesData.xlsx     overwrite=True

*** Keywords ***
Fill And Submit The Form For One Person
    [Arguments]    ${sales_rep}
    Input Text    firstname    ${sales_rep}[First Name]
    Input Text    lastname    ${sales_rep}[Last Name]
    Input Text    salesresult    ${sales_rep}[Sales]
    ${target_as_string}=    Convert To String    ${sales_rep}[Sales Target]
    Select From List By Value    salestarget    ${target_as_string}
    Click Button    Submit

*** Keywords ***
Fill The Form Using The Data From The Excel File
    Open Workbook    SalesData.xlsx
    ${sales_reps}=    Read Worksheet As Table    header=True
    Close Workbook
    FOR    ${sales_rep}    IN    @{sales_reps}
        Fill And Submit The Form For One Person    ${sales_rep}
    END

*** Keywords ***
Collect The Results
    Screenshot    css:div.sales-summary    ${CURDIR}${/}output${/}sales_summary.png

*** Keywords ***
Export The Table As A PDF
    Wait Until Element Is Visible    id:sales-results
    ${sales_results_html}=    Get Element Attribute    id:sales-results    outerHTML
    Html To Pdf    ${sales_results_html}    ${CURDIR}${/}output${/}sales_results.pdf

*** Keywords ***
Log Out And Close The Browser
    Click Button    Log out
    Close Browser

*** Tasks ***
Insert the sales data for the week and export it as a PDF
    Open The Internet Website
    Log In
    Download The Excel File
    Fill The Form Using The Data From The Excel File
    Collect The Results
    Export The Table As A PDF
    [Teardown]    Log Out And Close The Browser
</code></code></pre>
                            </div>
                        </div>
                        <p>If we run it, we will see that it logs out and closes the browser at the end. Such a polite robot!
                        </p>
                        <h4 id="what-we-learned">What we learned</h4>
                        <ul>
                            <li>The <code>[Teardown]</code> keyword is useful for ensuring that your process does not leave a mess behind. Such as an open browser.</li>
                        </ul>


                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
        <aside class="cdpwWb">
            
            <div class="m-b-50"><a class="next-btn" href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=creating-pdf"><i class="material-icons">navigate_before</i> Previous chapter</a></div>
        </aside>
    </div>
</section>