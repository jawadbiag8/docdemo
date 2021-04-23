<section id="contentpage" class="content">
    <div class="container-fluid">
        <!-- Headings -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h4>
                            <b>Tasks</b>
                        </h4>

                    </div>
                    <div class="body">
                        <p>In Autosphere, <strong>Tasks</strong> are where the action happens. When run, the robot script will execute the keywords specified in its tasks in sequence.</p>
                        <p>Take this example <code>.robot</code> file:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***
Documentation     Example robot that downloads a remote Excel file and opens it.
Library           Autosphere.Excel.Files
Library           Autosphere.HTTP

*** Tasks ***
Download an Excel file, open it, and close it
    Download    http://training.autosphere.ai/SalesData.xlsx    overwrite=True
    Open Workbook    Data.xlsx
    Close Workbook

</code></code></pre>
                            </div>
                        </div>
                        <p>This script has one <strong>Task</strong> that we called
                            <code>Download an Excel file, open it, and close it</code>.
                        </p>
                        <p>To accomplish the task, we call three keywords: <code>Download</code>,
                            <code>Open Workbook</code>, and <code>Close Workbook</code>.
                        </p>
                        <h4 id="tasks-basic-syntax"> Tasks basic syntax</h4>
                        <p>Tasks must be contained in a <code>*** Tasks ***</code> section.</p>
                        <blockquote>
                            <p>The singular form <code>*** Task ***</code> also works, but we suggest to use
                                <code>*** Tasks ***</code> for better compatibility with Autosphere Lab notebook mode.
                            </p>
                        </blockquote>
                        <p>The first line contains the name of the task. All other lines need to be <strong>indented with spaces</strong>.</p>
                        <h4 id="tasks-documentation"> Tasks documentation</h4>
                        <p>Using the <code>[Documentation]</code> setting, you can add a more detailed description of what the task does:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***
Documentation     Example robot that downloads a remote Excel file and opens it.
Library           Autosphere.Excel.Files
Library           Autosphere.HTTP

*** Tasks ***
Download an Excel file, open it, and close it
    [Documentation]    Downloads the sales data file from the intranet, opens it, and closes it.
    Download    http://training.autosphere.ai/SalesData.xlsx    overwrite=True
    Open Workbook    Data.xlsx
    Close Workbook

</code></code></pre>
                            </div>
                        </div>
                        <h4 id="task-setup-and-teardown"> Task setup and teardown</h4>
                        <p>Using the <code>[Setup]</code> and <code>[Teardown]</code> settings, you can execute keywords
                            <em>before</em> and <em>after</em> a task is run:
                        </p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***
Documentation     Example robot that takes a screenshot of a webpage.
Library           Autosphere.Browser

*** Tasks ***
Take a screenshot of the internet homepage
    [Setup]    Open Available Browser    http://training.autosphere.ai/#/
    Screenshot
    [Teardown]    Close All Browsers

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