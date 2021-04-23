<section id="contentpage" class="content">
  <div class="container-fluid">
    <!-- Headings -->
    <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          <div class="header">
            <h4>
              <b>Autosphere Security Guidelines</b>
            </h4>

          </div>
          <div class="body">
            <h4 id="Autosphere-cloud"> DEPLOYMENT AND CONFIGURATION CONSIDERATIONS
            </h4>
            <h4 id="how-is-Autosphere-cloud-hosted"> DEPLOYMENT</h4>
            <ul>
              <li>Robots on premises and orchestrator on cloud (VPN between the robot network & orchestrator network is necessary) </li>
              <li>If robots and orchestrator are on cloud they should be in same subnet (Vnet for Azure)</li>
            </ul>
            <p><img class="img-responsive" src="../images/Product-manual/Autosphere-overview.PNG" alt=""></p>

            <h4 id="what-kind-of-security-measures-are-taken-for-Autosphere-cloud"> USER AND ROBOT PERMISSIONS</h4>
            <p>Two possible threats to be prepared for while the configuration process of the user and robot permissions in Orchestrator are:
            </p>
            <ul>
              <li>Malicious user </li>
              <li>Malicious developer</li>
            </ul>
            <p>Authentication among Orchestrator and Robots depends on a mutual key that can be accessed only by the Administrator on the robot machine. On the off chance that the machine user has authoritative rights and can get access to that key,
              at that point, user would likewise have the option to imitate different robots when making several calls to Orchestrator. </p>
            <p>Following guidelines must be followed to mitigate the risks involved with malicious user:</p>
            <ul>
              <li>The users/machines of attended automation must bot have administrative rights</li>
              <li>The permissions should be to execute only particular automation.</li>
              <li>Disable the robot creation for the users of automation.</li>
            </ul>
            <p>A malicious developer could introduce a process which when run by a user could grant unwanted access for data theft. To mitigate the risks involved malicious developer following guidelines must be followed:</p>
            <ul>
              <li>Control and validation over every package deployed in production environment orchestrator</li>
              <li>The robot permissions should be kept to minimum to execute particular automation.</li>
              <li>Disable the creation of robots for the users of automation</li>
              <li>Auditing automations prior to the production deployment. (Code review, Malicious Scripts).</li>
            </ul>
            <h4 id="Autosphere-cloud"> DEPLOYMENT AND CONFIGURATION CONSIDERATIONS
            </h4>
            <h4 id="what-kind-of-security-measures-are-taken-for-Autosphere-cloud"> PASSWORD POLICY</h4>
            <p>The passwords should by default contain at least 8 characters and at least one letter and a digit. You could make your password more complex in orchestrator settings within configure global security.</p>
            <h4 id="what-kind-of-security-measures-are-taken-for-Autosphere-cloud"> CHANGING THE DEFAULT SYSTEM ADMINISTRATOR PASSWORD</h4>
            <p>Change the default system administrator password (that was communicated by the team). In order to do that, edit the user profile information, also while logging in for the first time into the Orchestrator, <strong>Remember Me</strong> password should not be selected, this helps to logout from the current session each time. </p>
            <h4 id="what-kind-of-security-measures-are-taken-for-Autosphere-cloud"> DISABLING THE AUTO-COMPLETE FEATURE IN BROWSER</h4>
            <p>Auto-complete feature accessible in most browsers isn’t totally secure, to ensure that no one can discover the login password of Orchestra, disabling the aforementioned functionality in browser is recommended.</p>
            <p>For Internet Explorer 11</p>
            <ul>
              <li>Click Tools in internet explorer and then Internet Options, Internet Options window will be displayed.</li>
              <li>In the Content tab, select Settings, then AutoComplete Settings window is displayed.</li>
              <li>Clear Passwords and Username from the forms check box.</li>
              <li>Click OK, new settings will be saved.</li>
            </ul>
            <h4 id="what-kind-of-security-measures-are-taken-for-Autosphere-cloud"> CODE REVIEW</h4>
            <p>Code review intends to ensure that the process that will run on live data is safe, and no security breaches are possible. It helps identify and resolve issues related to proper usage of credentials, preventing sending sensitive data
              outside the trusted scope, and hardcoded values like email and password. </p>
            <h4 id="what-kind-of-security-measures-are-taken-for-Autosphere-cloud"> ISOLATING ENVIRONMENTS</h4>
            <ul>
              <li> Isolate the development, testing, and production environment. </li>
              <li> The developer can’t upload the source code.</li>
              <li>The developer doesn’t have the access to the production orchestrator</li>
            </ul>
            <h4 id="Autosphere-cloud"> ROBOT SECURITY
            </h4>
            <h4 id="what-kind-of-security-measures-are-taken-for-Autosphere-cloud"> PROVISIONING & AUTHENTICATION</h4>
            <ul>
              <li>Robot must be provisioned before connected to the Orchestrator.</li>
              <li>Orchestrator generates a unique key for the provisioned robot.</li>
              <li>Robots use the machine key and the robot key provided by the orchestrator to authenticate in the first phase.</li>
            </ul>
            <p>Autosphere Provisioning & Authentication: Orchestrator Generates Unique keys which can only be used to establish connection of machine with the orchestrator and Access to settings page where keys are generated required elevated rights.
            </p>
            <p>Without following information robots cannot be connected to Orchestrator. </p>
            <ul>
              <li>URL: Orchestrator</li>
              <li>Machine ID: Generated through Orchestrator Only</li>
              <li>Machine Key: Generated through Orchestrator Only (Unique)</li>
              <li>Username: Name of user created in Orchestrator</li>
              <li>API Token: Generated through Orchestrator Only (Unique)</li>
            </ul>
            <h4 id="what-kind-of-security-measures-are-taken-for-Autosphere-cloud"> ACCESSING SETTINGS</h4>
            <ul>
              <li>Access the setting to change the URL of the orchestrator or machine key requires elevated rights. Users need elevated rights to disconnect the robot.</li>
            </ul>
            <h4 id="Autosphere-cloud"> DOES AUTOSPHERE ORCHESTRATOR COLLECT SENSITIVE DATA?
            </h4>
            <p>Autosphere Orchestrator is a tool for companies. For the sake of operations, some data is collected from users and usage of Autosphere Orchestrator. Autosphere Orchestrator requires something referred to as control data in order to
              operate.
            </p>
            <p>This data consists of commands and instructions that are sent to the runtime environments along with the packaged code for processes. For different services we may store and process data that is generated by the processes, which is
              referred to as process data. For the convenience of user, this data is stored, error logs that can be viewed within Autosphere Orchestrator. however, it is to be noted that it is ultimately it’s up to the software robot developer
              to choose what is uploaded to Autosphere Orchestrator.</p>
            <p>It is best to remember that sensitive tokens, for example, passwords or personally recognizable data, ought not be hardcoded in robots. </p>
            <p>It is likewise advisable to refrain from printing delicate information into output logs as they could wind up in Autosphere Orchestrator. </p>
            <h4 id="Autosphere-cloud"> HOW IS DATA PROTECTED IN ORCHESTRATOR?
            </h4>
            <p>Any data traveling through the Internet is encrypted in transit using TLS. Furthermore, especially sensitive data such as Orchestrator secrets have two-fold encryption and are also encrypted on the application level. This means application
              logs and proxies cannot view data, even accidentally</p>
            <h4 id="Autosphere-cloud"> SECURITY PRACTICES
            </h4>
            <p>The security of user’s personal data information is essential to us. We utilize various technical, specialized, and physical shield designs to ensure the personal data we gather. Nonetheless, security hazard is natural in all web and
              data technologies and we can’t ensure the security of personal information. </p>
          </div>
        </div>
      </div>
    </div>
    <!-- #END# Headings -->
  </div>
</section>