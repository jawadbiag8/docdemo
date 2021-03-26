
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                  fill="#002642"></path>
              </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.Netsuite</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-netsuite">Readme</a><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-netsuite/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div class="sc-gWHgXt bHAbbC keyword-content">

                                <div>
                                    <div class="keyword" id="connect">
                                        <h2><a href="#connect">Connect</a></h2>

                                        <div>
                                            <p class="shortdoc">Connect to Netsuite with credentials from environment variables.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>account</td>
                                                    <td> str </td>
                                                    <td> None</td>
                                                    <td>parameter or environment variable NS_ACCOUNT</td>
                                                </tr>
                                                <tr>
                                                    <td>consumer_key</td>
                                                    <td> str </td>
                                                    <td> None</td>
                                                    <td>parameter or environment variable NS_CONSUMER_KEY</td>
                                                </tr>
                                                <tr>
                                                    <td>consumer_secret</td>
                                                    <td> str </td>
                                                    <td> None</td>
                                                    <td>parameter or environment variable NS_CONSUMER_SECRET</td>
                                                </tr>
                                                <tr>
                                                    <td>token_key</td>
                                                    <td> str </td>
                                                    <td> None</td>
                                                    <td>parameter or environment variable NS_TOKEN_KEY</td>
                                                </tr>
                                                <tr>
                                                    <td>token_secret</td>
                                                    <td> str </td>
                                                    <td> None</td>
                                                    <td>parameter or environment variable NS_TOKEN_SECRET</td>
                                                </tr>
                                            </table>

                                            <p>Connect to Netsuite with credentials from environment variables.
                                            </p>
                                            <p>Parameters are not logged into Autosphere log.</p>
                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name">param account:</th>
                                                        <td class="field-body">parameter or environment variable <cite>NS_ACCOUNT</cite></td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param consumer_key:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">parameter or environment variable <cite>NS_CONSUMER_KEY</cite></td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param consumer_secret:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">parameter or environment variable <cite>NS_CONSUMER_SECRET</cite>
                                                        </td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param token_key:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">parameter or environment variable <cite>NS_TOKEN_KEY</cite></td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param token_secret:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">parameter or environment variable <cite>NS_TOKEN_SECRET</cite></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-accounts">
                                        <h2><a href="#get-accounts">Get Accounts</a></h2>

                                        <div>
                                            <p class="shortdoc">Get Accounts of any type or specified type.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>count</td>
                                                    <td> int </td>
                                                    <td> 100</td>
                                                    <td>number of Accounts to return, defaults to 100</td>
                                                </tr>
                                                <tr>
                                                    <td>account_type</td>
                                                    <td> str </td>
                                                    <td> None</td>
                                                    <td>if None returns all account types, example. "_expense", defaults to None</td>
                                                </tr>
                                            </table>


                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name">param count:</th>
                                                        <td class="field-body">number of Accounts to return, defaults to 100</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param account_type:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">if None returns all account types, example. &quot;_expense&quot;, defaults to None</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">return:</th>
                                                        <td class="field-body">accounts</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-classifications">
                                        <h2><a href="#get-classifications">Get Classifications</a></h2>

                                        <div>
                                            <p class="shortdoc">Get all Netsuite Classifications</p>



                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name">return:</th>
                                                        <td class="field-body">classifications</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-currencies">
                                        <h2><a href="#get-currencies">Get Currencies</a></h2>

                                        <div>
                                            <p class="shortdoc">Get all Netsuite Currencies</p>



                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name">return:</th>
                                                        <td class="field-body">currencies</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-currency">
                                        <h2><a href="#get-currency">Get Currency</a></h2>

                                        <div>
                                            <p class="shortdoc">Get all a Netsuite Currency by its ID</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>currency_id</td>
                                                    <td> str</td>
                                                    <td></td>
                                                    <td>ID of the currency to get</td>
                                                </tr>
                                            </table>


                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param currency_id:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">ID of the currency to get</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">return:</th>
                                                        <td class="field-body">currency</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-departments">
                                        <h2><a href="#get-departments">Get Departments</a></h2>

                                        <div>
                                            <p class="shortdoc">Get all Netsuite Departments</p>



                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name">return:</th>
                                                        <td class="field-body">departments</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-locations">
                                        <h2><a href="#get-locations">Get Locations</a></h2>

                                        <div>
                                            <p class="shortdoc">Get all Netsuite Locations</p>



                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name">return:</th>
                                                        <td class="field-body">locations</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-vendor-bills">
                                        <h2><a href="#get-vendor-bills">Get Vendor Bills</a></h2>

                                        <div>
                                            <p class="shortdoc">Get list of vendor bills</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>count</td>
                                                    <td> int </td>
                                                    <td> 10</td>
                                                    <td>number of vendor bills to return, defaults to 10</td>
                                                </tr>
                                            </table>


                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name">param count:</th>
                                                        <td class="field-body">number of vendor bills to return, defaults to 10</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">return:</th>
                                                        <td class="field-body">list of vendor bills</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="get-vendors">
                                        <h2><a href="#get-vendors">Get Vendors</a></h2>

                                        <div>
                                            <p class="shortdoc">Get list of vendors</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>count</td>
                                                    <td> int </td>
                                                    <td> 10</td>
                                                    <td>number of vendors to return, defaults to 10</td>
                                                </tr>
                                            </table>


                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name">param count:</th>
                                                        <td class="field-body">number of vendors to return, defaults to 10</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">return:</th>
                                                        <td class="field-body">list of vendors</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="login">
                                        <h2><a href="#login">Login</a></h2>

                                        <div>
                                            <p class="shortdoc">Login to Netsuite with credentials from environment variables</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>account</td>
                                                    <td> str </td>
                                                    <td> None</td>
                                                    <td>parameter or environment variable NS_ACCOUNT</td>
                                                </tr>
                                                <tr>
                                                    <td>email</td>
                                                    <td> str </td>
                                                    <td> None</td>
                                                    <td>parameter or environment variable NS_EMAIL</td>
                                                </tr>
                                                <tr>
                                                    <td>password</td>
                                                    <td> str </td>
                                                    <td> None</td>
                                                    <td>parameter or environment variable NS_PASSWORD</td>
                                                </tr>
                                                <tr>
                                                    <td>role</td>
                                                    <td> str </td>
                                                    <td> None</td>
                                                    <td>parameter or environment variable NS_ROLE</td>
                                                </tr>
                                                <tr>
                                                    <td>appid</td>
                                                    <td> str </td>
                                                    <td> None</td>
                                                    <td>parameter or environment variable NS_APPID</td>
                                                </tr>
                                            </table>


                                            <p>Parameters are not logged into Autosphere log.</p>
                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name">param account:</th>
                                                        <td class="field-body">parameter or environment variable <cite>NS_ACCOUNT</cite></td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">param email:</th>
                                                        <td class="field-body">parameter or environment variable <cite>NS_EMAIL</cite></td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">param password:</th>
                                                        <td class="field-body">parameter or environment variable <cite>NS_PASSWORD</cite></td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">param role:</th>
                                                        <td class="field-body">parameter or environment variable <cite>NS_ROLE</cite></td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">param appid:</th>
                                                        <td class="field-body">parameter or environment variable <cite>NS_APPID</cite></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="netsuite-get">
                                        <h2><a href="#netsuite-get">Netsuite Get</a></h2>

                                        <div>
                                            <p class="shortdoc">Get all records of given type and internalId and/or externalId.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>record_type</td>
                                                    <td> str </td>
                                                    <td> None</td>
                                                    <td>type of Netsuite record to get</td>
                                                </tr>
                                                <tr>
                                                    <td>internal_id</td>
                                                    <td> str </td>
                                                    <td> None</td>
                                                    <td>internalId of the type, default None</td>
                                                </tr>
                                                <tr>
                                                    <td>external_id</td>
                                                    <td> str </td>
                                                    <td> None</td>
                                                    <td>external_id of the type, default None</td>
                                                </tr>
                                            </table>


                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param record_type:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">type of Netsuite record to get</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param internal_id:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">internalId of the type, default None</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param external_id:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">external_id of the type, default None</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">raises ValueError:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">if record_type is not given</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">return:</th>
                                                        <td class="field-body">records as a list or None</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="netsuite-get-all">
                                        <h2><a href="#netsuite-get-all">Netsuite Get All</a></h2>

                                        <div>
                                            <p class="shortdoc">Get all records of given type.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>record_type</td>
                                                    <td> str</td>
                                                    <td></td>
                                                    <td>type of Netsuite record to get</td>
                                                </tr>
                                            </table>


                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param record_type:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">type of Netsuite record to get</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">raises ValueError:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">if record_type is not given</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">return:</th>
                                                        <td class="field-body">records as a list or None</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="netsuite-search">
                                        <h2><a href="#netsuite-search">Netsuite Search</a></h2>

                                        <div>
                                            <p class="shortdoc">Search Netsuite for value from a type. Default operator is
                                                <cite>contains</cite>.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>type_name</td>
                                                    <td> str</td>
                                                    <td></td>
                                                    <td>search target type name</td>
                                                </tr>
                                                <tr>
                                                    <td>search_value</td>
                                                    <td> str</td>
                                                    <td></td>
                                                    <td>what to search for within type</td>
                                                </tr>
                                                <tr>
                                                    <td>operator</td>
                                                    <td> str </td>
                                                    <td> contains</td>
                                                    <td>name of the operation, defaults to "contains"</td>
                                                </tr>
                                                <tr>
                                                    <td>page_size</td>
                                                    <td> int </td>
                                                    <td> 5</td>
                                                    <td>result items within one page, defaults to 5</td>
                                                </tr>
                                            </table>

                                            <p>Search Netsuite for value from a type. Default operator is
                                                <cite>contains</cite>.</p>
                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param type_name:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">search target type name</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param search_value:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">what to search for within type</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">param operator:</th>
                                                        <td class="field-body">name of the operation, defaults to &quot;contains&quot;</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param page_size:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">result items within one page, defaults to 5</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">return:</th>
                                                        <td class="field-body">paginated search object</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="keyword" id="netsuite-search-all">
                                        <h2><a href="#netsuite-search-all">Netsuite Search All</a></h2>

                                        <div>
                                            <p class="shortdoc">Search Netsuite for a type results.</p>
                                            <h3>Arguments</h3>
                                            <table class="arguments">
                                                <tr>
                                                    <th>Argument</th>
                                                    <th>Type</th>
                                                    <th>Default value</th>
                                                    <th>Description</th>
                                                </tr>
                                                <tr>
                                                    <td>type_name</td>
                                                    <td> str</td>
                                                    <td></td>
                                                    <td>search target type name</td>
                                                </tr>
                                                <tr>
                                                    <td>page_size</td>
                                                    <td> int </td>
                                                    <td> 20</td>
                                                    <td>result items within one page, defaults to 5</td>
                                                </tr>
                                            </table>


                                            <table class="docutils field-list" frame="void" rules="none">
                                                <col class="field-name" />
                                                <col class="field-body" />
                                                <tbody valign="top">
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param type_name:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">search target type name</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name" colspan="2">param page_size:</th>
                                                    </tr>
                                                    <tr class="field">
                                                        <td>&nbsp;</td>
                                                        <td class="field-body">result items within one page, defaults to 5</td>
                                                    </tr>
                                                    <tr class="field">
                                                        <th class="field-name">return:</th>
                                                        <td class="field-body">paginated search object</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <aside class="sc-iJuUWI jaFBcT">
                            <form>
                                <h5>Keywords</h5>
                                <fieldset class="sc-eCssSg eeeqEu"><input type="text" aria-label="Filter keywords" placeholder="Filter keywords" value="" /><svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M12.327 11.376L8.846 7.9A4.824 4.824 0 107.483 9.26l3.479 3.48s.661.703 1.365 0c.703-.703 0-1.365 0-1.365zM6.87 7.284a2.897 2.897 0 01-4.093 0 2.897 2.897 0 010-4.093 2.897 2.897 0 014.093 0 2.897 2.897 0 010 4.093z"
                      fill="#fff"></path>
                  </svg></fieldset>
                            </form>
                            <div><a id="link-connect" href="#connect" class="">Connect</a><a id="link-get-accounts" href="#get-accounts" class="">Get Accounts</a><a id="link-get-classifications" href="#get-classifications"
                                    class="">Get Classifications</a><a id="link-get-currencies" href="#get-currencies" class="">Get Currencies</a><a id="link-get-currency" href="#get-currency" class="">Get Currency</a><a id="link-get-departments"
                                    href="#get-departments" class="">Get Departments</a><a id="link-get-locations" href="#get-locations" class="">Get Locations</a><a id="link-get-vendor-bills" href="#get-vendor-bills"
                                    class="">Get Vendor Bills</a><a id="link-get-vendors" href="#get-vendors" class="">Get Vendors</a><a id="link-login" href="#login" class="">Login</a><a id="link-netsuite-get" href="#netsuite-get"
                                    class="">Netsuite
                  Get</a><a id="link-netsuite-get-all" href="#netsuite-get-all" class="">Netsuite Get
                  All</a><a id="link-netsuite-search" href="#netsuite-search" class="">Netsuite
                  Search</a><a id="link-netsuite-search-all" href="#netsuite-search-all" class="">Netsuite
                  Search All</a></div>
                        </aside>
                    </div>
                </article>
        
