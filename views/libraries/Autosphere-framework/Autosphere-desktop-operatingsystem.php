
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                                    fill="#002642"></path>
                            </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.Desktop.OperatingSystem</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-desktop-operatingsystem">Readme</a><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-desktop-operatingsystem/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div>
                                <p><cite>OperatingSystem</cite> is a cross-platform library for managing computer properties and actions.</p>
                                <p><strong>Examples</strong></p>
                                <p><strong>Autosphere</strong></p>
                                <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">    </span><span class="nn">Autosphere.Desktop.OperatingSystem</span><span class="p">

</span><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="gu">Get computer information</span><span class="p">
    ${</span><span class="nv">boot_time</span><span class="p">}=   </span><span class="nf">Get Boot Time</span><span class="p">  </span><span class="s">as_datetime=</span><span class="p">${</span><span class="nv">TRUE</span><span class="p">}
    ${</span><span class="nv">machine</span><span class="p">}=     </span><span class="nf">Get Machine Name</span><span class="p">
    ${</span><span class="nv">username</span><span class="p">}=    </span><span class="nf">Get Username</span><span class="p">
    &amp;{</span><span class="nv">memory</span><span class="p">}=      </span><span class="nf">Get Memory Stats</span><span class="p">
    </span><span class="nf">Log Many</span><span class="p">        ${</span><span class="nv">memory</span><span class="p">}</span>
</pre>
                                <p><strong>Python</strong></p>
                                <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">Autosphere.Desktop.OperatingSystem</span> <span class="kn">import</span> <span class="n">OperatingSystem</span>

<span class="k">def</span> <span class="nf">get_computer_information</span><span class="p">():</span>
    <span class="n">ops</span> <span class="o">=</span> <span class="n">OperatingSystem</span><span class="p">()</span>
    <span class="nb">print</span><span class="p">(</span><span class="sa">f</span><span class="s2">&quot;Boot time    : </span><span class="si">{</span> <span class="n">ops</span><span class="o">.</span><span class="n">get_boot_time</span><span class="p">(</span><span class="n">as_datetime</span><span class="o">=</span><span class="kc">True</span><span class="p">)</span> <span class="si">}</span><span class="s2">&quot;</span>
          <span class="sa">f</span><span class="s2">&quot;Machine name : </span><span class="si">{</span> <span class="n">ops</span><span class="o">.</span><span class="n">get_machine_name</span><span class="p">()</span> <span class="si">}</span><span class="s2">&quot;</span>
          <span class="sa">f</span><span class="s2">&quot;Username     : </span><span class="si">{</span> <span class="n">ops</span><span class="o">.</span><span class="n">get_username</span><span class="p">()</span> <span class="si">}</span><span class="s2">&quot;</span>
          <span class="sa">f</span><span class="s2">&quot;Memory       : </span><span class="si">{</span> <span class="n">ops</span><span class="o">.</span><span class="n">get_memory_stats</span><span class="p">()</span> <span class="si">}</span><span class="s2">&quot;</span><span class="p">)</span>

<span class="k">if</span> <span class="vm">__name__</span> <span class="o">==</span> <span class="s2">&quot;__main__&quot;</span><span class="p">:</span>
    <span class="n">get_computer_information</span><span class="p">()</span>
</pre>
                            </div>
                        </div>
                        
                    </div>
                </article>
           