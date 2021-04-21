<section class="content">
    <div class="container-fluid">
        <!-- Headings -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Autosphere.Twitter</b>
                        </h2>

                    </div>
                    <div class="body">
                        <div class="sc-kLgntA iHaOcn">
                            <nav class="sc-bYEvPH khGBIg">
                                <ol class="breadcrumb breadcrumb-col-cyan">
                                    <li><a href="../..//docdemo/views/index.php">Home</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Keyword libraries</a></li>
                                    <li><a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=intro">Autosphere Package</a></li>
                                    <li class="active">Autosphere.Twitter</li>
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
                                        <div>
                                            <p><cite>Twitter</cite> is a library for accessing Twitter using developer API.</p>
                                            <p>Authorization credentials can be given as parameters for <tt class="docutils literal">authorize</tt> keyword or keyword can read them in as environment variables:</p>
                                            <ul class="simple">
                                                <li><cite>TWITTER_CONSUMER_KEY</cite></li>
                                                <li><cite>TWITTER_CONSUMER_SECRET</cite></li>
                                                <li><cite>TWITTER_ACCESS_TOKEN</cite></li>
                                                <li><cite>TWITTER_ACCESS_TOKEN_SECRET</cite></li>
                                            </ul>
                                            <p>Library usage requires Twitter developer credentials. Those can be requested from <a class="reference external" href="https://developer.twitter.com/">Twitter developer site</a></p>
                                            <p><strong>Examples</strong></p>
                                            <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">   </span><span class="nn">Autosphere.Twitter</span><span class="p">

</span><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="gu">Get user tweets and like them</span><span class="p">
    [</span><span class="kn">Setup</span><span class="p">]   </span><span class="nf">Authorize</span><span class="p">
    &#64;{</span><span class="nv">tweets</span><span class="p">}=   </span><span class="nf">Get User Tweets</span><span class="p">   </span><span class="s">username=niinisto</span><span class="p">   </span><span class="s">count=5</span><span class="p">
    </span><span class="nf">FOR</span><span class="p">   ${</span><span class="nv">tweet</span><span class="p">}  </span><span class="s">IN</span><span class="p">   &#64;{</span><span class="nv">tweets</span><span class="p">}
        </span><span class="nf">Like</span><span class="p">   ${</span><span class="nv">tweet</span><span class="p">}
    </span><span class="nf">END</span>
</pre>
                                            <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">Autosphere.Twitter</span> <span class="kn">import</span> <span class="n">Twitter</span>

<span class="n">library</span> <span class="o">=</span> <span class="n">Twitter</span><span class="p">()</span>
<span class="n">library</span><span class="o">.</span><span class="n">authorize</span><span class="p">()</span>
<span class="n">tweets</span> <span class="o">=</span> <span class="n">library</span><span class="o">.</span><span class="n">get_user_tweets</span><span class="p">(</span><span class="n">username</span><span class="o">=</span><span class="s2">&quot;niinisto&quot;</span><span class="p">,</span> <span class="n">count</span><span class="o">=</span><span class="mi">5</span><span class="p">)</span>
<span class="k">for</span> <span class="n">tw</span> <span class="ow">in</span> <span class="n">tweets</span><span class="p">:</span>
    <span class="n">library</span><span class="o">.</span><span class="n">like</span><span class="p">(</span><span class="n">tw</span><span class="p">)</span>
<span class="n">tweets</span> <span class="o">=</span> <span class="n">library</span><span class="o">.</span><span class="n">text_search_tweets</span><span class="p">(</span><span class="n">query</span><span class="o">=</span><span class="s2">&quot;corona trump&quot;</span><span class="p">)</span>
<span class="k">for</span> <span class="n">tw</span> <span class="ow">in</span> <span class="n">tweets</span><span class="p">:</span>
    <span class="nb">print</span><span class="p">(</span><span class="n">tw</span><span class="o">.</span><span class="n">text</span><span class="p">)</span>
<span class="n">user</span> <span class="o">=</span> <span class="n">library</span><span class="o">.</span><span class="n">get_user_profile</span><span class="p">(</span><span class="s2">&quot;niinisto&quot;</span><span class="p">)</span>
<span class="n">library</span><span class="o">.</span><span class="n">follow</span><span class="p">(</span><span class="n">user</span><span class="p">)</span>
<span class="n">library</span><span class="o">.</span><span class="n">tweet</span><span class="p">(</span><span class="s2">&quot;first tweet&quot;</span><span class="p">)</span>
<span class="n">me</span> <span class="o">=</span> <span class="n">library</span><span class="o">.</span><span class="n">get_me</span><span class="p">()</span>
<span class="nb">print</span><span class="p">(</span><span class="n">me</span><span class="p">)</span>
</pre>
                                        </div>
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
                                                        <div class="keyword" id="authorize">
                                                            <h2><a href="#authorize">Authorize</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Authorize to Twitter API</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>consumer_key</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>app consumer key</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>consumer_secret</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>app consumer secret</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>access_token</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>user access token</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>access_token_secret</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>user access token secret</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param consumer_key:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">app consumer key</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param consumer_secret:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">app consumer secret</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param access_token:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">user access token</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param access_token_secret:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">user access token secret</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="follow">
                                                            <h2><a href="#follow">Follow</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Follow Twitter user</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>user</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>screen name of the user</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param user:</th>
                                                                            <td class="field-body">screen name of the user</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body"><cite>True</cite> if user was followed, <cite>False</cite> if not
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-me">
                                                            <h2><a href="#get-me">Get Me</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get Twitter profile of authenticated user</p>



                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">user profile as dictionary or <cite>None</cite></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-user-profile">
                                                            <h2><a href="#get-user-profile">Get User Profile</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get user's Twitter profile</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>username</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>whose profile to get</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param username:</th>
                                                                            <td class="field-body">whose profile to get</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">profile as dictionary</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="get-user-tweets">
                                                            <h2><a href="#get-user-tweets">Get User Tweets</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Get user tweets</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>username</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>whose tweets to get</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>count</td>
                                                                        <td> int </td>
                                                                        <td> 100</td>
                                                                        <td>maximum number of tweets, defaults to 100</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param username:</th>
                                                                            <td class="field-body">whose tweets to get</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param count:</th>
                                                                            <td class="field-body">maximum number of tweets, defaults to 100</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">list of user tweets</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="like">
                                                            <h2><a href="#like">Like</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Like a tweet</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>tweet</td>
                                                                        <td> Tweet </td>
                                                                        <td> None</td>
                                                                        <td>as a class Tweet</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param tweet:</th>
                                                                            <td class="field-body">as a class <cite>Tweet</cite></td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body"><cite>True</cite> if Tweet was liked, <cite>False</cite> if not</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="text-search-tweets">
                                                            <h2><a href="#text-search-tweets">Text Search Tweets</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Search tweets defined by search query</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>query</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>search query string of 500 characters maximum, including operators</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>count</td>
                                                                        <td> int </td>
                                                                        <td> 100</td>
                                                                        <td>maximum number of tweets, defaults to 100</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>geocode</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>tweets by users located within a given radius of the given latitude/longitude</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>lang</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>language code of tweets</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>locale</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>language of the query you are sending</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>result_type</td>
                                                                        <td> str </td>
                                                                        <td> mixed</td>
                                                                        <td>type of search results you would prefer to receive, default "mixed"</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>until</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>tweets created before the given date</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>since_id</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>Returns only statuses with an ID greater than</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>max_id</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>only statuses with an ID less than</td>
                                                                    </tr>
                                                                </table>


                                                                <p>Results types:</p>
                                                                <ul class="simple">
                                                                    <li>mixed : include both popular and real time results in the response</li>
                                                                    <li>recent : return only the most recent results in the response</li>
                                                                    <li>popular : return only the most popular results in the response</li>
                                                                </ul>
                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param query:</th>
                                                                            <td class="field-body">search query string of 500 characters maximum, including operators</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param count:</th>
                                                                            <td class="field-body">maximum number of tweets, defaults to 100</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param geocode:</th>
                                                                            <td class="field-body">tweets by users located within a given radius of the given latitude/longitude</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param lang:</th>
                                                                            <td class="field-body">language code of tweets</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param locale:</th>
                                                                            <td class="field-body">language of the query you are sending</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name" colspan="2">param result_type:</th>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <td>&nbsp;</td>
                                                                            <td class="field-body">type of search results you would prefer to receive, default &quot;mixed&quot;</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param until:</th>
                                                                            <td class="field-body">tweets created before the given date</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param since_id:</th>
                                                                            <td class="field-body">Returns only statuses with an ID greater than</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">param max_id:</th>
                                                                            <td class="field-body">only statuses with an ID less than</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body">list of matching tweets</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="tweet">
                                                            <h2><a href="#tweet">Tweet</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Make a tweet with content</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>content</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>text for the status update</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param content:</th>
                                                                            <td class="field-body">text for the status update</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="unfollow">
                                                            <h2><a href="#unfollow">Unfollow</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Unfollow Twitter user</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>user</td>
                                                                        <td> str </td>
                                                                        <td> None</td>
                                                                        <td>screen name of the user</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param user:</th>
                                                                            <td class="field-body">screen name of the user</td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body"><cite>True</cite> if user was followed, <cite>False</cite> if not
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="keyword" id="unlike">
                                                            <h2><a href="#unlike">Unlike</a></h2>

                                                            <div>
                                                                <p class="shortdoc">Unlike a tweet</p>
                                                                <h4>Arguments</h4>
                                                                <table class="arguments">
                                                                    <tr>
                                                                        <th>Argument</th>
                                                                        <th>Type</th>
                                                                        <th>Default value</th>
                                                                        <th>Description</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>tweet</td>
                                                                        <td> Tweet </td>
                                                                        <td> None</td>
                                                                        <td>as a class Tweet</td>
                                                                    </tr>
                                                                </table>


                                                                <table class="docutils field-list" frame="void" rules="none">
                                                                    <col class="field-name" />
                                                                    <col class="field-body" />
                                                                    <tbody valign="top">
                                                                        <tr class="field">
                                                                            <th class="field-name">param tweet:</th>
                                                                            <td class="field-body">as a class <cite>Tweet</cite></td>
                                                                        </tr>
                                                                        <tr class="field">
                                                                            <th class="field-name">return:</th>
                                                                            <td class="field-body"><cite>True</cite> if Tweet was unliked, <cite>False</cite> if not
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
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
                                            <div>
                                                <ul id="myUL" style="list-style-type: none; padding: 0; margin: 0;">
                                                    <li><a id="link-authorize" href="#authorize" class="">Authorize</a></li>
                                                    <li><a id="link-follow" href="#follow" class="">Follow</a></li>
                                                    <li><a id="link-get-me" href="#get-me" class="">Get Me</a></li>
                                                    <li><a id="link-get-user-profile" href="#get-user-profile" class="">Get User Profile</a></li>
                                                    <li><a id="link-get-user-tweets" href="#get-user-tweets" class="">Get User Tweets</a></li>
                                                    <li><a id="link-like" href="#like" class="">Like</a></li>
                                                    <li><a id="link-text-search-tweets" href="#text-search-tweets" class="">Text Search Tweets</a></li>
                                                    <li><a id="link-tweet" href="#tweet" class="">Tweet</a></li>
                                                    <li><a id="link-unfollow" href="#unfollow" class="">Unfollow</a></li>
                                                    <li><a id="link-unlike" href="#unlike" class="">Unlike</a></li>
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