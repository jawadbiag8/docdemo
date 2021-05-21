<section id="contentpage" class="content">
    <div class="container-fluid">
        <!-- Headings -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Autosphere.HTTP</b>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="sc-kLgntA iHaOcn">
                            <nav class="sc-bYEvPH khGBIg">
                                <ol class="breadcrumb breadcrumb-col-cyan">
                                    <li><a href="../views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Autosphere Package</a></li>
                                    <li class="active">Autosphere.HTTP</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#home_with_icon_title" data-toggle="tab" aria-expanded="true">
                                    <i class="material-icons">home</i> Readme
                                </a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#profile_with_icon_title" data-toggle="tab" aria-expanded="false">
                                    <i class="material-icons">face</i> Keywords
                                </a>
                            </li>

                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="home_with_icon_title">

                                <div class="sc-jJEJSO laquCT">
                                    <div class="sc-hiSbYr XqbgT">
                                    </div>

                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="sc-jJEJSO laquCT">
                                            <div class="sc-hiSbYr XqbgT">
                                                <div class="sc-gWHgXt bHAbbC keyword-content">
                                                    <div>
                                                        <div class="keyword" id="create-client-cert-session">
                                                            <h2><a href="#create-client-cert-session">Create Client Cert Session</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Create Session: create a HTTP session to a server</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>alias</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>url</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>headers</td>
                                                                            <td></td>
                                                                            <td>{}</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>cookies</td>
                                                                            <td></td>
                                                                            <td>{}</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>client_certs</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>timeout</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>proxies</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>verify</td>
                                                                            <td></td>
                                                                            <td>False</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>debug</td>
                                                                            <td></td>
                                                                            <td>0</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>max_retries</td>
                                                                            <td></td>
                                                                            <td>3</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>backoff_factor</td>
                                                                            <td></td>
                                                                            <td>0.1</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>disable_warnings</td>
                                                                            <td></td>
                                                                            <td>0</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>retry_status_list</td>
                                                                            <td></td>
                                                                            <td>[]</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>retry_method_list</td>
                                                                            <td></td>
                                                                            <td>['DELETE', 'OPTIONS', 'TRACE', 'HEAD', 'PUT', 'GET']</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                                <p><code>url</code> Base url of the server</p>
                                                                <p><code>alias</code> Autosphere alias to identify the session</p>
                                                                <p><code>headers</code> Dictionary of default headers</p>
                                                                <p><code>cookies</code> Dictionary of cookies</p>
                                                                <p><code>client_certs</code> ['client certificate', 'client key'] PEM files containing the client key and certificate</p>
                                                                <p><code>timeout</code> Connection timeout</p>
                                                                <p><code>proxies</code> Dictionary that contains proxy urls for HTTP and HTTPS communication</p>
                                                                <p><code>verify</code> Whether the SSL cert will be verified. A CA_BUNDLE path can also be provided. Defaults to False.</p>
                                                                <p><code>debug</code> Enable http verbosity option more information <a href="https://docs.python.org/2/library/httplib.html#httplib.HTTPConnection.set_debuglevel">https://docs.python.org/2/library/httplib.html#httplib.HTTPConnection.set_debuglevel</a></p>
                                                                <p><code>max_retries</code> Number of maximum retries each connection should attempt. By default it will retry 3 times in case of connection errors only. A 0 value will disable any kind of retries regardless of other retry settings. In case the number of retries is reached a retry exception is raised.</p>
                                                                <p><code>disable_warnings</code> Disable requests warning useful when you have large number of testcases</p>
                                                                <p><code>backoff_factor</code> Introduces a delay time between retries that is longer after each retry. eg. if backoff_factor is set to 0.1 the sleep between attemps will be: 0.0, 0.2, 0.4 More info here: <a href="https://urllib3.readthedocs.io/en/latest/reference/urllib3.util.html">https://urllib3.readthedocs.io/en/latest/reference/urllib3.util.html</a></p>
                                                                <p><code>retry_method_list</code> List of uppercased HTTP method verbs where retries are allowed. By default retries are allowed only on HTTP requests methods that are considered to be idempotent (multiple requests with the same parameters end with the same state). eg. set to ['POST', 'GET'] to retry only those kind of requests.</p>
                                                                <p><code>retry_status_list</code> List of integer HTTP status codes that, if returned, a retry is attempted. eg. set to [502, 503] to retry requests if those status are returned. Note that max_retries must be greater than 0.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="create-custom-session">
                                                            <h2><a href="#create-custom-session">Create Custom Session</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Create Session: create a HTTP session to a server</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>alias</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>url</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>auth</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>headers</td>
                                                                            <td></td>
                                                                            <td>{}</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>cookies</td>
                                                                            <td></td>
                                                                            <td>{}</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>timeout</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>proxies</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>verify</td>
                                                                            <td></td>
                                                                            <td>False</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>debug</td>
                                                                            <td></td>
                                                                            <td>0</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>max_retries</td>
                                                                            <td></td>
                                                                            <td>3</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>backoff_factor</td>
                                                                            <td></td>
                                                                            <td>0.1</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>disable_warnings</td>
                                                                            <td></td>
                                                                            <td>0</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>retry_status_list</td>
                                                                            <td></td>
                                                                            <td>[]</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>retry_method_list</td>
                                                                            <td></td>
                                                                            <td>['DELETE', 'OPTIONS', 'TRACE', 'HEAD', 'PUT', 'GET']</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                                <p><code>url</code> Base url of the server</p>
                                                                <p><code>alias</code> Autosphere alias to identify the session</p>
                                                                <p><code>headers</code> Dictionary of default headers</p>
                                                                <p><code>cookies</code> Dictionary of cookies</p>
                                                                <p><code>auth</code> A Custom Authentication object to be passed on to the requests library. <a href="http://docs.python-requests.org/en/master/user/advanced/#custom-authentication">http://docs.python-requests.org/en/master/user/advanced/#custom-authentication</a></p>
                                                                <p><code>timeout</code> Connection timeout</p>
                                                                <p><code>proxies</code> Dictionary that contains proxy urls for HTTP and HTTPS communication</p>
                                                                <p><code>verify</code> Whether the SSL cert will be verified. A CA_BUNDLE path can also be provided. Defaults to False.</p>
                                                                <p><code>debug</code> Enable http verbosity option more information <a href="https://docs.python.org/2/library/httplib.html#httplib.HTTPConnection.set_debuglevel">https://docs.python.org/2/library/httplib.html#httplib.HTTPConnection.set_debuglevel</a></p>
                                                                <p><code>max_retries</code> Number of maximum retries each connection should attempt. By default it will retry 3 times in case of connection errors only. A 0 value will disable any kind of retries regardless of other retry settings. In case the number of retries is reached a retry exception is raised.</p>
                                                                <p><code>disable_warnings</code> Disable requests warning useful when you have large number of testcases</p>
                                                                <p><code>backoff_factor</code> Introduces a delay time between retries that is longer after each retry. eg. if backoff_factor is set to 0.1 the sleep between attemps will be: 0.0, 0.2, 0.4 More info here: <a href="https://urllib3.readthedocs.io/en/latest/reference/urllib3.util.html">https://urllib3.readthedocs.io/en/latest/reference/urllib3.util.html</a></p>
                                                                <p><code>retry_method_list</code> List of uppercased HTTP method verbs where retries are allowed. By default retries are allowed only on HTTP requests methods that are considered to be idempotent (multiple requests with the same parameters end with the same state). eg. set to ['POST', 'GET'] to retry only those kind of requests.</p>
                                                                <p><code>retry_status_list</code> List of integer HTTP status codes that, if returned, a retry is attempted. eg. set to [502, 503] to retry requests if those status are returned. Note that max_retries must be greater than 0.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="create-digest-session">
                                                            <h2><a href="#create-digest-session">Create Digest Session</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Create Session: create a HTTP session to a server</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>alias</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>url</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>auth</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>headers</td>
                                                                            <td></td>
                                                                            <td>{}</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>cookies</td>
                                                                            <td></td>
                                                                            <td>{}</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>timeout</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>proxies</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>verify</td>
                                                                            <td></td>
                                                                            <td>False</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>debug</td>
                                                                            <td></td>
                                                                            <td>0</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>max_retries</td>
                                                                            <td></td>
                                                                            <td>3</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>backoff_factor</td>
                                                                            <td></td>
                                                                            <td>0.1</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>disable_warnings</td>
                                                                            <td></td>
                                                                            <td>0</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>retry_status_list</td>
                                                                            <td></td>
                                                                            <td>[]</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>retry_method_list</td>
                                                                            <td></td>
                                                                            <td>['DELETE', 'OPTIONS', 'TRACE', 'HEAD', 'PUT', 'GET']</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                                <p><code>url</code> Base url of the server</p>
                                                                <p><code>alias</code> Autosphere alias to identify the session</p>
                                                                <p><code>headers</code> Dictionary of default headers</p>
                                                                <p><code>cookies</code> Dictionary of cookies</p>
                                                                <p><code>auth</code> ['DOMAIN', 'username', 'password'] for NTLM Authentication</p>
                                                                <p><code>timeout</code> Connection timeout</p>
                                                                <p><code>proxies</code> Dictionary that contains proxy urls for HTTP and HTTPS communication</p>
                                                                <p><code>verify</code> Whether the SSL cert will be verified. A CA_BUNDLE path can also be provided. Defaults to False.</p>
                                                                <p><code>debug</code> Enable http verbosity option more information <a href="https://docs.python.org/2/library/httplib.html#httplib.HTTPConnection.set_debuglevel">https://docs.python.org/2/library/httplib.html#httplib.HTTPConnection.set_debuglevel</a></p>
                                                                <p><code>max_retries</code> Number of maximum retries each connection should attempt. By default it will retry 3 times in case of connection errors only. A 0 value will disable any kind of retries regardless of other retry settings. In case the number of retries is reached a retry exception is raised.</p>
                                                                <p><code>disable_warnings</code> Disable requests warning useful when you have large number of testcases</p>
                                                                <p><code>backoff_factor</code> Introduces a delay time between retries that is longer after each retry. eg. if backoff_factor is set to 0.1 the sleep between attemps will be: 0.0, 0.2, 0.4 More info here: <a href="https://urllib3.readthedocs.io/en/latest/reference/urllib3.util.html">https://urllib3.readthedocs.io/en/latest/reference/urllib3.util.html</a></p>
                                                                <p><code>retry_method_list</code> List of uppercased HTTP method verbs where retries are allowed. By default retries are allowed only on HTTP requests methods that are considered to be idempotent (multiple requests with the same parameters end with the same state). eg. set to ['POST', 'GET'] to retry only those kind of requests.</p>
                                                                <p><code>retry_status_list</code> List of integer HTTP status codes that, if returned, a retry is attempted. eg. set to [502, 503] to retry requests if those status are returned. Note that max_retries must be greater than 0.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="create-ntlm-session">
                                                            <h2><a href="#create-ntlm-session">Create Ntlm Session</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Create Session: create a HTTP session to a server</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>alias</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>url</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>auth</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>headers</td>
                                                                            <td></td>
                                                                            <td>{}</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>cookies</td>
                                                                            <td></td>
                                                                            <td>{}</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>timeout</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>proxies</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>verify</td>
                                                                            <td></td>
                                                                            <td>False</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>debug</td>
                                                                            <td></td>
                                                                            <td>0</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>max_retries</td>
                                                                            <td></td>
                                                                            <td>3</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>backoff_factor</td>
                                                                            <td></td>
                                                                            <td>0.1</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>disable_warnings</td>
                                                                            <td></td>
                                                                            <td>0</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>retry_status_list</td>
                                                                            <td></td>
                                                                            <td>[]</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>retry_method_list</td>
                                                                            <td></td>
                                                                            <td>['DELETE', 'OPTIONS', 'TRACE', 'HEAD', 'PUT', 'GET']</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                                <p><code>url</code> Base url of the server</p>
                                                                <p><code>alias</code> Autosphere alias to identify the session</p>
                                                                <p><code>headers</code> Dictionary of default headers</p>
                                                                <p><code>cookies</code> Dictionary of cookies</p>
                                                                <p><code>auth</code> ['DOMAIN', 'username', 'password'] for NTLM Authentication</p>
                                                                <p><code>timeout</code> Connection timeout</p>
                                                                <p><code>proxies</code> Dictionary that contains proxy urls for HTTP and HTTPS communication</p>
                                                                <p><code>verify</code> Whether the SSL cert will be verified. A CA_BUNDLE path can also be provided. Defaults to False.</p>
                                                                <p><code>debug</code> Enable http verbosity option more information <a href="https://docs.python.org/2/library/httplib.html#httplib.HTTPConnection.set_debuglevel">https://docs.python.org/2/library/httplib.html#httplib.HTTPConnection.set_debuglevel</a></p>
                                                                <p><code>max_retries</code> Number of maximum retries each connection should attempt. By default it will retry 3 times in case of connection errors only. A 0 value will disable any kind of retries regardless of other retry settings. In case the number of retries is reached a retry exception is raised.</p>
                                                                <p><code>disable_warnings</code> Disable requests warning useful when you have large number of testcases</p>
                                                                <p><code>backoff_factor</code> Introduces a delay time between retries that is longer after each retry. eg. if backoff_factor is set to 0.1 the sleep between attemps will be: 0.0, 0.2, 0.4 More info here: <a href="https://urllib3.readthedocs.io/en/latest/reference/urllib3.util.html">https://urllib3.readthedocs.io/en/latest/reference/urllib3.util.html</a></p>
                                                                <p><code>retry_method_list</code> List of uppercased HTTP method verbs where retries are allowed. By default retries are allowed only on HTTP requests methods that are considered to be idempotent (multiple requests with the same parameters end with the same state). eg. set to ['POST', 'GET'] to retry only those kind of requests.</p>
                                                                <p><code>retry_status_list</code> List of integer HTTP status codes that, if returned, a retry is attempted. eg. set to [502, 503] to retry requests if those status are returned. Note that max_retries must be greater than 0.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="create-session">
                                                            <h2><a href="#create-session">Create Session</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Create Session: create a HTTP session to a server</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>alias</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>url</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>headers</td>
                                                                            <td></td>
                                                                            <td>{}</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>cookies</td>
                                                                            <td></td>
                                                                            <td>{}</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>auth</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>timeout</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>proxies</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>verify</td>
                                                                            <td></td>
                                                                            <td>False</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>debug</td>
                                                                            <td></td>
                                                                            <td>0</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>max_retries</td>
                                                                            <td></td>
                                                                            <td>3</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>backoff_factor</td>
                                                                            <td></td>
                                                                            <td>0.1</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>disable_warnings</td>
                                                                            <td></td>
                                                                            <td>0</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>retry_status_list</td>
                                                                            <td></td>
                                                                            <td>[]</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>retry_method_list</td>
                                                                            <td></td>
                                                                            <td>['DELETE', 'OPTIONS', 'TRACE', 'HEAD', 'PUT', 'GET']</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                                <p><code>alias</code> Autosphere alias to identify the session</p>
                                                                <p><code>url</code> Base url of the server</p>
                                                                <p><code>headers</code> Dictionary of default headers</p>
                                                                <p><code>cookies</code> Dictionary of cookies</p>
                                                                <p><code>auth</code> List of username &amp; password for HTTP Basic Auth</p>
                                                                <p><code>timeout</code> Connection timeout</p>
                                                                <p><code>proxies</code> Dictionary that contains proxy urls for HTTP and HTTPS communication</p>
                                                                <p><code>verify</code> Whether the SSL cert will be verified. A CA_BUNDLE path can also be provided.</p>
                                                                <p><code>debug</code> Enable http verbosity option more information <a href="https://docs.python.org/2/library/httplib.html#httplib.HTTPConnection.set_debuglevel">https://docs.python.org/2/library/httplib.html#httplib.HTTPConnection.set_debuglevel</a></p>
                                                                <p><code>max_retries</code> Number of maximum retries each connection should attempt. By default it will retry 3 times in case of connection errors only. A 0 value will disable any kind of retries regardless of other retry settings. In case the number of retries is reached a retry exception is raised.</p>
                                                                <p><code>disable_warnings</code> Disable requests warning useful when you have large number of testcases</p>
                                                                <p><code>backoff_factor</code> Introduces a delay time between retries that is longer after each retry. eg. if backoff_factor is set to 0.1 the sleep between attemps will be: 0.0, 0.2, 0.4 More info here: <a href="https://urllib3.readthedocs.io/en/latest/reference/urllib3.util.html">https://urllib3.readthedocs.io/en/latest/reference/urllib3.util.html</a></p>
                                                                <p><code>retry_method_list</code> List of uppercased HTTP method verbs where retries are allowed. By default retries are allowed only on HTTP requests methods that are considered to be idempotent (multiple requests with the same parameters end with the same state). eg. set to ['POST', 'GET'] to retry only those kind of requests.</p>
                                                                <p><code>retry_status_list</code> List of integer HTTP status codes that, if returned, a retry is attempted. eg. set to [502, 503] to retry requests if those status are returned. Note that max_retries must be greater than 0.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="delete-all-sessions">
                                                            <h2><a href="#delete-all-sessions">Delete All Sessions</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Removes all the session objects</p>


                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="delete-request">
                                                            <h2><a href="#delete-request">Delete Request</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Send a DELETE request on the session object found using the given `alias`</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>alias</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>uri</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>data</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>json</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>params</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>headers</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>allow_redirects</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>timeout</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>Send a DELETE request on the session object found using the given alias</p>
                                                                <p><code>alias</code> that will be used to identify the Session object in the cache</p>
                                                                <p><code>uri</code> to send the DELETE request to</p>
                                                                <p><code>json</code> a value that will be json encoded and sent as request data if data is not specified</p>
                                                                <p><code>headers</code> a dictionary of headers to use with the request</p>
                                                                <p><code>allow_redirects</code> Boolean. Set to True if POST/PUT/DELETE redirect following is allowed.</p>
                                                                <p><code>timeout</code> connection timeout</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="download">
                                                            <h2><a href="#download">Download</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">An alias for the ``HTTP Get`` keyword.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>url</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>target_file</td>
                                                                            <td>str, None</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>binary</td>
                                                                            <td>bool</td>
                                                                            <td>True</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>verify</td>
                                                                            <td>bool</td>
                                                                            <td>True</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>force_new_session</td>
                                                                            <td>bool</td>
                                                                            <td>False</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>overwrite</td>
                                                                            <td>bool</td>
                                                                            <td>False</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>An alias for the <code>HTTP Get</code> keyword.</p>
                                                                <p>The difference in use is that the URL is always downloaded based on the URL path (even without <code>target_file</code>). If there is a filename in the path, then that is used as <code>target_file</code> to save to. By default, the filename will be "downloaded.html".</p>
                                                                <p><code>url</code> target URL for GET request</p>
                                                                <p><code>target_file</code> filepath to save request content, default <code>None</code></p>
                                                                <p><code>binary</code> if file is saved as binary, default <code>True</code></p>
                                                                <p><code>verify</code> if SSL verification should be done, default <code>True</code></p>
                                                                <p><code>force_new_session</code> if new HTTP session should be created, default <code>False</code></p>
                                                                <p><code>overwrite</code> used together with <code>target_file</code>, if <code>True</code> will overwrite the target file, default <code>False</code></p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-current-session-alias">
                                                            <h2><a href="#get-current-session-alias">Get Current Session Alias</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Get request session alias that was used with the ``HTTP Get`` keyword.</p>

                                                                <p>Get request session alias that was used with the <code>HTTP Get</code> keyword.</p>
                                                                <p>Return name of session alias.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-file-for-streaming-upload">
                                                            <h2><a href="#get-file-for-streaming-upload">Get File For Streaming Upload</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Opens and returns a file descriptor of a specified file to be passed as ``data`` parameter to other requests keywords.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>path</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>Opens and returns a file descriptor of a specified file to be passed as <code>data</code> parameter to other requests keywords.</p>
                                                                <p>This allows streaming upload of large files without reading them into memory.</p>
                                                                <p>File descriptor is binary mode and read only. Requests keywords will automatically close the file, if used outside this library it's up to the caller to close it.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-request">
                                                            <h2><a href="#get-request">Get Request</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Send a GET request on the session object found using the given `alias`</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>alias</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>uri</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>headers</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>data</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>json</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>params</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>allow_redirects</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>timeout</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>Send a GET request on the session object found using the given alias</p>
                                                                <p><code>alias</code> that will be used to identify the Session object in the cache</p>
                                                                <p><code>uri</code> to send the GET request to</p>
                                                                <p><code>params</code> url parameters to append to the uri</p>
                                                                <p><code>headers</code> a dictionary of headers to use with the request</p>
                                                                <p><code>data</code> a dictionary of key-value pairs that will be urlencoded and sent as GET data or binary data that is sent as the raw body content</p>
                                                                <p><code>json</code> a value that will be json encoded and sent as GET data if data is not specified</p>
                                                                <p><code>allow_redirects</code> Boolean. Set to True if POST/PUT/DELETE redirect following is allowed.</p>
                                                                <p><code>timeout</code> connection timeout</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="head-request">
                                                            <h2><a href="#head-request">Head Request</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Send a HEAD request on the session object found using the given `alias`</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>alias</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>uri</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>headers</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>allow_redirects</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>timeout</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>Send a HEAD request on the session object found using the given alias</p>
                                                                <p><code>alias</code> that will be used to identify the Session object in the cache</p>
                                                                <p><code>uri</code> to send the HEAD request to</p>
                                                                <p><code>allow_redirects</code> Boolean. Set to True if POST/PUT/DELETE redirect following is allowed.</p>
                                                                <p><code>headers</code> a dictionary of headers to use with the request</p>
                                                                <p><code>timeout</code> connection timeout</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="http-get">
                                                            <h2><a href="#http-get">Http Get</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">A helper method for ``Get Request`` that will create a session, perform GET request, and store the target file, if set by the ``target_file`` parameter.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>url</td>
                                                                            <td>str</td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>target_file</td>
                                                                            <td>str, None</td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>binary</td>
                                                                            <td>bool</td>
                                                                            <td>True</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>verify</td>
                                                                            <td>bool</td>
                                                                            <td>True</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>force_new_session</td>
                                                                            <td>bool</td>
                                                                            <td>False</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>overwrite</td>
                                                                            <td>bool</td>
                                                                            <td>False</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>A helper method for <code>Get Request</code> that will create a session, perform GET request, and store the target file, if set by the <code>target_file</code> parameter.</p>
                                                                <p>The old session will be used if the URL scheme and the host are the same as previously, e.g., '<a href="https://www.google.fi">https://www.google.fi</a>' part of the URL.</p>
                                                                <p><code>url</code> target URL for GET request</p>
                                                                <p><code>target_file</code> filepath to save request content, default <code>None</code></p>
                                                                <p><code>binary</code> if file is saved as binary, default <code>True</code></p>
                                                                <p><code>verify</code> if SSL verification should be done, default <code>True</code></p>
                                                                <p><code>force_new_session</code> if new HTTP session should be created, default <code>False</code></p>
                                                                <p><code>overwrite</code> used together with <code>target_file</code>, if <code>True</code> will overwrite the target file, default <code>False</code></p>
                                                                <p>Returns request response.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="options-request">
                                                            <h2><a href="#options-request">Options Request</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Send an OPTIONS request on the session object found using the given `alias`</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>alias</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>uri</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>headers</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>allow_redirects</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>timeout</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>Send an OPTIONS request on the session object found using the given alias</p>
                                                                <p><code>alias</code> that will be used to identify the Session object in the cache</p>
                                                                <p><code>uri</code> to send the OPTIONS request to</p>
                                                                <p><code>allow_redirects</code> Boolean. Set to True if POST/PUT/DELETE redirect following is allowed.</p>
                                                                <p><code>headers</code> a dictionary of headers to use with the request</p>
                                                                <p><code>timeout</code> connection timeout</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="patch-request">
                                                            <h2><a href="#patch-request">Patch Request</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Send a PATCH request on the session object found using the given `alias`</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>alias</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>uri</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>data</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>json</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>params</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>headers</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>files</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>allow_redirects</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>timeout</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>Send a PATCH request on the session object found using the given alias</p>
                                                                <p><code>alias</code> that will be used to identify the Session object in the cache</p>
                                                                <p><code>uri</code> to send the PATCH request to</p>
                                                                <p><code>data</code> a dictionary of key-value pairs that will be urlencoded and sent as PATCH data or binary data that is sent as the raw body content or file descriptor retrieved by Get File For Streaming Upload</p>
                                                                <p><code>json</code> a value that will be json encoded and sent as PATCH data if data is not specified</p>
                                                                <p><code>headers</code> a dictionary of headers to use with the request</p>
                                                                <p><code>files</code> a dictionary of file names containing file data to PATCH to the server</p>
                                                                <p><code>allow_redirects</code> Boolean. Set to True if POST/PUT/DELETE redirect following is allowed.</p>
                                                                <p><code>params</code> url parameters to append to the uri</p>
                                                                <p><code>timeout</code> connection timeout</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="post-request">
                                                            <h2><a href="#post-request">Post Request</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Send a POST request on the session object found using the given `alias`</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>alias</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>uri</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>data</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>json</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>params</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>headers</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>files</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>allow_redirects</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>timeout</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>Send a POST request on the session object found using the given alias</p>
                                                                <p><code>alias</code> that will be used to identify the Session object in the cache</p>
                                                                <p><code>uri</code> to send the POST request to</p>
                                                                <p><code>data</code> a dictionary of key-value pairs that will be urlencoded and sent as POST data or binary data that is sent as the raw body content or passed as such for multipart form data if <code>files</code> is also defined or file descriptor retrieved by Get File For Streaming Upload</p>
                                                                <p><code>json</code> a value that will be json encoded and sent as POST data if files or data is not specified</p>
                                                                <p><code>params</code> url parameters to append to the uri</p>
                                                                <p><code>headers</code> a dictionary of headers to use with the request</p>
                                                                <p><code>files</code> a dictionary of file names containing file data to POST to the server</p>
                                                                <p><code>allow_redirects</code> Boolean. Set to True if POST/PUT/DELETE redirect following is allowed.</p>
                                                                <p><code>timeout</code> connection timeout</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="put-request">
                                                            <h2><a href="#put-request">Put Request</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Send a PUT request on the session object found using the given `alias`</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>alias</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>uri</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>data</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>json</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>params</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>files</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>headers</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>allow_redirects</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>timeout</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <p>Send a PUT request on the session object found using the given alias</p>
                                                                <p><code>alias</code> that will be used to identify the Session object in the cache</p>
                                                                <p><code>uri</code> to send the PUT request to</p>
                                                                <p><code>data</code> a dictionary of key-value pairs that will be urlencoded and sent as PUT data or binary data that is sent as the raw body content or file descriptor retrieved by Get File For Streaming Upload</p>
                                                                <p><code>json</code> a value that will be json encoded and sent as PUT data if data is not specified</p>
                                                                <p><code>headers</code> a dictionary of headers to use with the request</p>
                                                                <p><code>allow_redirects</code> Boolean. Set to True if POST/PUT/DELETE redirect following is allowed.</p>
                                                                <p><code>params</code> url parameters to append to the uri</p>
                                                                <p><code>timeout</code> connection timeout</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="request-should-be-successful">
                                                            <h2><a href="#request-should-be-successful">Request Should Be Successful</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if response status code is a client or server error (4xx, 5xx).</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>response</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                                <p>The <code>response</code> is the output of other requests keywords like <code>Get Request</code>.</p>
                                                                <p>In case of failure an HTTPError will be automatically raised.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="session-exists">
                                                            <h2><a href="#session-exists">Session Exists</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Return True if the session has been already created</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>alias</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                                <p><code>alias</code> that has been used to identify the Session object in the cache</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="status-should-be">
                                                            <h2><a href="#status-should-be">Status Should Be</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Fails if response status code is different than the expected.</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>expected_status</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>response</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>msg</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                                <p><code>expected_status</code> could be the code number as an integer or as string. But it could also be a named status code like 'ok', 'created', 'accepted' or 'bad request', 'not found' etc.</p>
                                                                <p>The <code>response</code> is the output of other requests keywords like <code>Get Request</code>.</p>
                                                                <p>A custom message <code>msg</code> can be added to work like built in keywords.</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="to-json">
                                                            <h2><a href="#to-json">To Json</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Convert a string to a JSON object</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>content</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>pretty_print</td>
                                                                            <td></td>
                                                                            <td>False</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                                <p><code>content</code> String content to convert into JSON</p>
                                                                <p><code>pretty_print</code> If defined, will output JSON is pretty print format</p>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="update-session">
                                                            <h2><a href="#update-session">Update Session</a>

                                                            </h2>

                                                            <div>
                                                                <p class="shortdoc">Update Session Headers: update a HTTP Session Headers</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Argument</th>
                                                                            <th>Type</th>
                                                                            <th>Default value</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>alias</td>
                                                                            <td></td>
                                                                            <td>null</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>headers</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>cookies</td>
                                                                            <td></td>
                                                                            <td>None</td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                                <p><code>alias</code> Autosphere alias to identify the session</p>
                                                                <p><code>headers</code> Dictionary of headers merge into session</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <aside class="sc-iJuUWI jaFBcT">
                                            <form>
                                                <h5>Keywords</h5>
                                                <fieldset class="sc-eCssSg eeeqEu"><input id="myInput" onkeyup="myFunction()" type="text" aria-label="Filter keywords" placeholder="Filter keywords" value="" /><svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.327 11.376L8.846 7.9A4.824 4.824 0 107.483 9.26l3.479 3.48s.661.703 1.365 0c.703-.703 0-1.365 0-1.365zM6.87 7.284a2.897 2.897 0 01-4.093 0 2.897 2.897 0 010-4.093 2.897 2.897 0 014.093 0 2.897 2.897 0 010 4.093z" fill="#fff"></path>
                                                    </svg></fieldset>
                                            </form>
                                            <div class="ps ps--active-y">
                                                <ul id="myUL" style="list-style-type: none; padding: 0; margin: 0;">
                                                    <li><a id="link-create-client-cert-session" href="#create-client-cert-session" class="">Create Client Cert Session</a></li>
                                                    <li><a id="link-create-custom-session" href="#link-create-custom-session" class="">Create Custom Session</a></li>
                                                    <li><a id="link-create-digest-session" href="#create-digest-session" class="">Create Digest Session</a></li>
                                                    <li><a id="link-create-ntlm-session" href="#create-ntlm-session" class="">Create Ntlm Session</a></li>
                                                    <li><a id="link-create-session" href="#create-session" class="">Create Session</a></li>
                                                    <li><a id="link-delete-all-sessions" href="#delete-all-sessions" class="">Delete All Sessions</a></li>
                                                    <li><a id="link-delete-request" href="#delete-request" class="">Delete Request</a></li>
                                                    <li><a id="link-download" href="#download" class="">Download</a></li>
                                                    <li><a id="link-get-current-session-alias" href="#get-current-session-alias" class="">Get Current Session Alias</a></li>
                                                    <li><a id="link-get-file-for-streaming-upload" href="#get-file-for-streaming-upload" class="">Get File For Streaming Upload</a></li>
                                                    <li><a id="link-get-request" href="#get-request" class="">Get Request</a></li>
                                                    <li><a id="link-head-request" href="#head-request" class="">Head Request</a></li>
                                                    <li><a id="link-http-get" href="#http-get" class="">Http Get</a></li>
                                                    <li><a id="link-options-request" href="#options-request" class="">Options Request</a></li>
                                                    <li><a id="link-patch-request" href="#patch-request" class="">Patch Request</a></li>
                                                    <li><a id="link-post-request" href="#post-request" class="">Post Request</a></li>
                                                    <li><a id="link-put-request" href="#put-request" class="">Put Request</a></li>
                                                    <li><a id="link-request-should-be-successful" href="#request-should-be-successful" class="">Request Should Be Successful</a></li>
                                                    <li><a id="link-session-exists" href="#session-exists" class="">Session Exists</a></li>
                                                    <li><a id="link-status-should-be" href="#status-should-be" class="">Status Should Be</a></li>
                                                    <li><a id="link-to-json" href="#to-json" class="">To Json</a></li>
                                                    <li><a id="link-update-session" href="#update-session" class="">Update Session</a></li>
                                                </ul>

                                            </div>
                                        </aside>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- #END# Headings -->

    </div>
</section>