
<article class="sc-hBEYos dVNWBU">
    <h1>Uploading files to Git Through Autosphere Studio</h1>
    <aside class="sc-hHftDr ewYhue">

    </aside>
    <h2 id="creating-a-safe-environment-for-innovation-and-testing-out-features"><button type="button"><svg
                height="16" width="16">
                <path
                    d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
                </path>
            </svg></button>Opening Autosphere Studio</h2>
    <p>Open Autosphere studio and navigate to WeeklyDataUpdate directory.</p>
    <p><img src="../views/docs/Git/8.PNG" alt=""></p>
    <h2 id="creating-a-safe-environment-for-innovation-and-testing-out-features"><button type="button"><svg
                height="16" width="16">
                <path
                    d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
                </path>
            </svg></button>Creating .ipynb File</h2>
    <p>Create a new <code>.ipynb File</code>, set its name to <code>Task.ipynb</code> and copy the code you develop during the <a href="../beginners-course.html">Beginners&#x27; course.</a></p>
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
    <h2 id="creating-a-safe-environment-for-innovation-and-testing-out-features"><button type="button"><svg
                height="16" width="16">
                <path
                    d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
                </path>
            </svg></button>Commiting and Pushing File to Git</h2>
    <h3 id="creating-a-safe-environment-for-innovation-and-testing-out-features"><button type="button"><svg
                height="16" width="16">
                <path
                    d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
                </path>
            </svg></button>Opening Git</h3>
    <p>Open Git from the sidebar in Autosphere Studio</p>
    <p><img src="../views/docs/Git/opening-git-from-sidebar.gif" alt=""></p>
    <h3 id="creating-a-safe-environment-for-innovation-and-testing-out-features"><button type="button"><svg
                height="16" width="16">
                <path
                    d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
                </path>
            </svg></button>Commiting and Pushing <code>Task.ipynb</code> to Git</h3>
    <p>Commit the <code>Task.ipynb</code> and then push it to Git repository.</p>
    <p><img src="../views/docs/Git/pushing-to-repository.gif" alt=""></p>
    <p>Now the <code>Task.ipynb</code> has been pushed to <code>WeeklyDataUpdate</code> repository. Lets check the repository for the changes.</p>
    <p><img src="../views/docs/Git/checking-new-task-file.gif" alt=""></p>
    <p><code>Task.ipynb</code> has successfully been pushed to <code>WeeklyDataUpdate</code> repository.</p>
    <aside class="sc-kfzAmx cdpwWb">
        <div><a class="pagination" href="docs.php?page=courses/software-robot-project-workflow/can-you-keep-a-secret">Previous chapter</a></div>

    </aside>
</article>
