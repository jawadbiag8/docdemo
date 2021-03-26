
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
                        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-twitter">Readme</a><a  class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-twitter/keywords">Keywords</a></nav>
                    </div>
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
                </article>
           