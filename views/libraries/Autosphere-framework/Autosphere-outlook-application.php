
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                  fill="#002642"></path>
              </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.Outlook.Application</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-outlook-application">Readme</a><a  class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-outlook-application/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div>
                                <p><cite>Outlook.Application</cite> is a library for controlling the Outlook application.</p>
                                <p><strong>Examples</strong></p>
                                <p><strong>Autosphere</strong></p>
                                <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">                 </span><span class="nn">Autosphere.Outlook.Application</span><span class="p">
</span><span class="kn">Task Setup</span><span class="p">              </span><span class="nf">Open Application</span><span class="p">
</span><span class="kn">Suite Teardown</span><span class="p">          </span><span class="nf">Quit Application</span><span class="p">

</span><span class="gh">*** Variables ***</span><span class="p">
${</span><span class="nv">RECIPIENT</span><span class="p">}            </span><span class="s">address&#64;domain.com</span><span class="p">

</span><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="gu">Send message</span><span class="p">
    </span><span class="nf">Send Message</span><span class="p">       </span><span class="s">recipients=</span><span class="p">${</span><span class="nv">RECIPIENT</span><span class="p">}
    ...                </span><span class="s">subject=This is the subject</span><span class="p">
    ...                </span><span class="s">body=This is the message body</span><span class="p">
    </span><span class="nf">..</span><span class="p">                 </span><span class="s">attachments=approved.png</span>
</pre>
                                <p><strong>Python</strong></p>
                                <pre class="code python literal-block"><span class="kn">from</span> <span class="nn">Autosphere.Outlook.Application</span> <span class="kn">import</span> <span class="n">Application</span>

<span class="k">def</span> <span class="nf">send_message</span><span class="p">():</span>
    <span class="n">app</span> <span class="o">=</span> <span class="n">Application</span><span class="p">()</span>
    <span class="n">app</span><span class="o">.</span><span class="n">open_application</span><span class="p">()</span>
    <span class="n">app</span><span class="o">.</span><span class="n">send_message</span><span class="p">(</span>
        <span class="n">recipients</span><span class="o">=</span><span class="s1">'EMAILADDRESS_1, EMAILADDRESS_2'</span><span class="p">,</span>
        <span class="n">subject</span><span class="o">=</span><span class="s1">'email subject'</span><span class="p">,</span>
        <span class="n">body</span><span class="o">=</span><span class="s1">'email body message'</span><span class="p">,</span>
        <span class="n">attachments</span><span class="o">=</span><span class="s1">'../orders.csv'</span>
</pre>
                               
                            </div>
                        </div>
                        
                    </div>
                </article>
           