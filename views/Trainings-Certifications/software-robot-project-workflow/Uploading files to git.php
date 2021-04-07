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
                  <li><a href="documantation.php?page=Trainings-Certifications&node=software-robot-project-workflow&subnode=Git-using-Autosphere-studio">Previous</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="body">


            <h2>Uploading files to Git Through Autosphere Studio</h2>
            <aside class="sc-hHftDr ewYhue">
              <div class="m-b-15"><span class="hAIwHX m-r-10">beginner</span><small>Time to complete ~1 hour</small>
              </div>
            </aside>
            <h4 id="creating-a-safe-environment-for-innovation-and-testing-out-features">Opening Autosphere Studio</h4>
            <p>Open Autosphere studio and navigate to WeeklyDataUpdate directory.</p>
            <p><img src="../views/docs/Git/8.PNG" alt=""></p>
            <h4 id="creating-a-safe-environment-for-innovation-and-testing-out-features">Creating .ipynb File</h4>
            <p>Create a new <code>.ipynb File</code>, set its name to <code>Task.ipynb</code> and copy the code you develop during the <a href="../beginners-course.html">Beginners&#x27; course.</a></p>
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
            <h4 id="creating-a-safe-environment-for-innovation-and-testing-out-features">Commiting and Pushing File to Git</h4>
            <h4 id="creating-a-safe-environment-for-innovation-and-testing-out-features">Opening Git</h4>
            <p>Open Git from the sidebar in Autosphere Studio</p>
            <p><img class="img-responsive" src="../images/Training-Certifications/Setting up SCM/opening-git-from-sidebar.gif" alt=""></p>
            <h4 id="creating-a-safe-environment-for-innovation-and-testing-out-features">Commiting and Pushing <code>Task.ipynb</code> to Git</h4>
            <p>Commit the <code>Task.ipynb</code> and then push it to Git repository.</p>
            <p><img class="img-responsive" src="../images/Training-Certifications/Setting up SCM/pushing-to-repository.gif" alt=""></p>
            <p>Now the <code>Task.ipynb</code> has been pushed to <code>WeeklyDataUpdate</code> repository. Lets check the repository for the changes.</p>
            <p><img class="img-responsive" src="../images/Training-Certifications/Setting up SCM/checking-new-task-file.gif" alt=""></p>
            <p><code>Task.ipynb</code> has successfully been pushed to <code>WeeklyDataUpdate</code> repository.</p>

          </div>
        </div>
      </div>
    </div>
    <!-- #END# Headings -->
    <aside class="cdpwWb">
    <div class="m-b-50"><a class="next-btn" href="documantation.php?page=Trainings-Certifications&node=software-robot-project-workflow&subnode=Git-using-Autosphere-studio"><i class="material-icons">navigate_before</i> Previous chapter </a></div>
    </aside>
  </div>
</section>