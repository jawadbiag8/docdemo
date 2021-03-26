
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                  fill="#002642"></path>
              </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.Twitter</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-twitter">Readme</a><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-twitter/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div class="sc-gWHgXt bHAbbC keyword-content">

                                <div>
                                    <div class="keyword" id="authorize">
                                        <h2><a href="#authorize">Authorize</a></h2>

                                        <div>
                                            <p class="shortdoc">Authorize to Twitter API</p>
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                                            <h3>Arguments</h3>
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
                        <aside class="sc-iJuUWI jaFBcT">
                            <form>
                                <h5>Keywords</h5>
                                <fieldset class="sc-eCssSg eeeqEu"><input type="text" aria-label="Filter keywords" placeholder="Filter keywords" value="" /><svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M12.327 11.376L8.846 7.9A4.824 4.824 0 107.483 9.26l3.479 3.48s.661.703 1.365 0c.703-.703 0-1.365 0-1.365zM6.87 7.284a2.897 2.897 0 01-4.093 0 2.897 2.897 0 010-4.093 2.897 2.897 0 014.093 0 2.897 2.897 0 010 4.093z"
                      fill="#fff"></path>
                  </svg></fieldset>
                            </form>
                            <div><a id="link-authorize" href="#authorize" class="">Authorize</a><a id="link-follow" href="#follow" class="">Follow</a><a id="link-get-me" href="#get-me" class="">Get Me</a><a id="link-get-user-profile"
                                    href="#get-user-profile" class="">Get
                  User Profile</a><a id="link-get-user-tweets" href="#get-user-tweets" class="">Get User
                  Tweets</a><a id="link-like" href="#like" class="">Like</a><a id="link-text-search-tweets" href="#text-search-tweets" class="">Text Search Tweets</a><a id="link-tweet" href="#tweet" class="">Tweet</a>
                                <a id="link-unfollow" href="#unfollow" class="">Unfollow</a><a id="link-unlike" href="#unlike" class="">Unlike</a></div>
                        </aside>
                    </div>
                </article>
            </main>
        </div>
        <div id="gatsby-announcer" style="position:absolute;top:0;width:1px;height:1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border:0" aria-live="assertive" aria-atomic="true"></div>
    </div>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-151433780-1"></script>
    <script>
        function gaOptout() {
            document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC;path=/', window[disableStr] = !0
        }
        var gaProperty = 'UA-151433780-1',
            disableStr = 'ga-disable-' + gaProperty;
        document.cookie.indexOf(disableStr + '=true') > -1 && (window[disableStr] = !0);
        if (!(navigator.doNotTrack == "1" || window.doNotTrack == "1")) {
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                window.dataLayer && window.dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-151433780-1', {
                "anonymize_ip": true,
                "send_page_view": false
            });
        }
    </script>
    <script id="gatsby-script-loader">
        /*<![CDATA[*/
        window.pagePath = "/libraries/Autosphere-framework/Autosphere-twitter/keywords"; /*]]>*/
    </script>
    <script id="gatsby-chunk-mapping">
        /*<![CDATA[*/
        window.___chunkMapping = {
            "polyfill": ["/polyfill-8cc5e5a258d0f40450ab.js"],
            "app": ["/app-629904404f06e3ef78ed.js"],
            "component---src-pages-404-tsx": ["/component---src-pages-404-tsx-e6cefbd5096c155caf8c.js"],
            "component---src-templates-apis-api-tsx": ["/component---src-templates-apis-api-tsx-3d01c97d2a34b1aed263.js"],
            "component---src-templates-changelog-tsx": ["/component---src-templates-changelog-tsx-8c98d1499354dd844fea.js"],
            "component---src-templates-default-tsx": ["/component---src-templates-default-tsx-af3e4764082c93fcd5d6.js"],
            "component---src-templates-libraries-category-tsx": ["/component---src-templates-libraries-category-tsx-a413ac48cfda7122e6ab.js"],
            "component---src-templates-libraries-index-tsx": ["/component---src-templates-libraries-index-tsx-f89d7f9506984fa76f51.js"],
            "component---src-templates-libraries-keywords-tsx": ["/component---src-templates-libraries-keywords-tsx-657b6cb76b7a0f89b97a.js"],
            "component---src-templates-libraries-library-tsx": ["/component---src-templates-libraries-library-tsx-de6cd967c7e32dc1f34f.js"],
            "component---src-templates-libraries-materials-tsx": ["/component---src-templates-libraries-materials-tsx-c7b32bca54a62c27ee9b.js"]
        }; /*]]>*/
    </script>
    <script src="../../../polyfill-8cc5e5a258d0f40450ab.js" nomodule=""></script>
    <script src="../../../component---src-templates-libraries-keywords-tsx-657b6cb76b7a0f89b97a.js" async=""></script>
    <script src="../../../99435b3ff8a769fcff1457aa1ff6d8036b7d69e9-3f27eb46404d88e859d5.js" async=""></script>
    <script src="../../../commons-1095cb9f7e0f4d63030a.js" async=""></script>
    <script src="../../../app-629904404f06e3ef78ed.js" async=""></script>

    <script src="../../../webpack-runtime-8f3bc752dca723247a5e.js" async=""></script>
    <script>
        (function() {
            if (document.cookie.indexOf('lab=true') > -1 || window.location.search.indexOf('lab=true') > -1) {
                document.cookie = 'lab=true';
                document.body.classList.add('lab');
            }
            if (window.location.search.indexOf('lab=false') > -1) {
                document.cookie = 'lab= ; expires = Thu, 01 Jan 1970 00:00:00 GMT';
            }
        })();
    </script>
</body>
<!-- Mirrored from Autosphere.com/docs/libraries/Autosphere-framework/Autosphere-twitter/keywords by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Nov 2020 08:45:02 GMT -->

</html>