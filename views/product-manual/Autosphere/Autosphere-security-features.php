<section class="content">
  <div class="container-fluid">
    <!-- Headings -->
    <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          <div class="header">
            <h4>
              <b>Autosphere Security Features</b>
            </h4>

          </div>
          <div class="body">
            <h4 id="runtime-environments"> ROBOT SECURITY FEATURES</h4>
            <h4 id="Autosphere-app"> SECURING CREDENTIALS</h4>
            <ul>
              <li> Credentials are encrypted before storing them in the database. </li>
            </ul>
            <h4 id="Autosphere-app"> MANIPULATING SENSITIVE DATA</h4>
            <ul>
              <li>Configure a trusted channel: VPN connections, FTP sessions, HTTPS websites.</li>
              <li>Data encryption should be implemented, when using untrusted channels.</li>
              <li>Usage of a limited-access environment.</li>
            </ul>
            <h4 id="runtime-environments"> ORCHESTRATOR SECURITY</h4>
            <h4 id="Autosphere-app"> PRESENTATION LAYER (BROWSER)</h4>
            <ul>
              <li>Correspondence between the client (browser robots) and orchestrator is scrambled using a secured https channel.</li>
              <li>User session is saved in a session cookie (with configurable expiration time)</li>
              <li>The password complexity is configurable.</li>
              <li> Account will automatically lock after a configurable number of failed attempts.</li>
            </ul>
            <h4 id="Autosphere-app"> SERVICE LAYER (BUSINESS LOGIC)</h4>
            <ul>
              <li>Installation of the Orchestrator website only with an SSL certificate.</li>
              <li>Role-based access control (RBAC)</li>
              <li>No data send outside the customer’s network</li>
              <li>Logging - default events are logged for auditing, and so are the user actions</li>
              <li>The section containing the encryption key in the configuration file can be encrypted</li>
            </ul>
            <h4 id="runtime-environments"> USER ROLES</h4>
            <h4 id="Autosphere-app"> PREDEFINED ROLES</h4>
            <p>There are 2 predefined roles in orchestrator, that can be configured by the administrators are: </p>
            <ol>
              <li>Administrator</li>
              <li>Robot </li>
            </ol>
            <h4 id="Autosphere-app"> DEVELOPER</h4>
            <p>Developers have a default role when login on the platform, their rights can vary from one environment to another like almost full access to view-only in UAT, Limited (or non-existent) in production.</p>
            <p>It is recommended to allow enough privileges in UAT so that the monitoring and bug fixes can be efficient. </p>
            <h4 id="Autosphere-app"> SUPPORT (PRODUCTION ONLY ROLE)</h4>
            <p>Production only role given to the support team, lets them monitor the process running in the production environments however it doesn’t allow package uploading or robot editing as those should only be done by the administrators, it
              should only allow starting and stopping of jobs and view robots schedules and logs.</p>
            <h4 id="runtime-environments"> USER ROLES</h4>
            <h4 id="Autosphere-app"> BUSINESS</h4>
            <ul>
              <li>Only limited view rights are available in the production environment (for training and demo purposes).</li>
              <li>The target audience is the business department they might be the ones triggering the jobs and view the status of the job. </li>
            </ul>
            <h4 id="Autosphere-app"> MULTITENANCY</h4>
            <p>Every Orchestrator instance has a separate robot that comprises Separate Data, Configuration, User Roles, each customer either Customer1, Customer2, Customer3 will have separate information.</p>
            <p><img class="img-responsive" src="../images/Product-manual/Multitenancy.PNG" alt=""></p>
            <h4 id="Autosphere-app"> ROBOT LOGGING</h4>
            <ul>
              <li>The tasks performed by robot results in the creation of logs (tasks passed, failed), Robot logging provides tracking of actions and those logs that developers want to track.</li>
              <li>Logs Messages for tracking</li>
              <li>Logs can also be stored in the SQL server or elastic search and different Databases</li>
            </ul>
            <p><img class="img-responsive" src="../images/Product-manual/Robot-logging.PNG" alt=""></p>
          </div>
        </div>
      </div>
    </div>
    <!-- #END# Headings -->
  </div>
</section>