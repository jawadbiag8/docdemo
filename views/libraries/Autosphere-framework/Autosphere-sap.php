<article class="sc-hBEYos dVNWBU">
    <div class="sc-kLgntA iHaOcn">
        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z" fill="#002642"></path>
            </svg><a href="">Autosphere Package</a></nav>
        <div class="sc-iktFzd gaGeRK">
            <h1>Autosphere.SAP</h1>
        </div>
        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-sap">Readme</a><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-sap/keywords">Keywords</a></nav>
    </div>
    <div class="sc-jJEJSO laquCT">
        <div class="sc-hiSbYr XqbgT">
            <div>
                <p>Autosphere Framework library which is wrapping <cite>SapGuiLibrary</cite> functionality.</p>
                <p>The SapGuiLibrary is a library that enables users to create tests for the Sap Gui application</p>
                <p>The library uses the Sap Scripting Engine, therefore Scripting must be enabled in Sap in order for this
                    library to work.</p>
                <h2 id="Opening a connection / Before running tests">Opening a connection / Before running tests</h2>
                <p>First of all, you have to <b>make sure the Sap Logon Pad is started</b>. You can automate this process by
                    using the AutoIT library or the Process Library.</p>
                <p>After the Sap Login Pad is started, you can connect to the Sap Session using the keyword <a href="#Connect%20To%20Session" class="name">connect to session</a>.</p>
                <p>If you have a successful connection you can use <a href="#Open%20Connection" class="name">Open Connection</a>
                    to open a new connection from the Sap Logon Pad or <a href="#Connect%20To%20Existing%20Connection" class="name">Connect To Existing Connection</a> to connect to a connection that is already open.</p>
                <h2 id="Locating or specifying elements">Locating or specifying elements</h2>
                <p>You need to specify elements starting from the window ID, for example, wnd[0]/tbar[1]/btn[8]. In some cases
                    the SAP ID contains backslashes. Make sure you escape these backslashes by adding another backslash in front
                    of it.</p>
                <h2 id="Screenshots (on error)">Screenshots (on error)</h2>
                <p>The SapGUILibrary offers an option for automatic screenshots on error. Default this option is enabled, use
                    keyword <a href="#Disable%20Screenshots%20On%20Error" class="name">disable screenshots on error</a> to skip
                    the screenshot functionality. Alternatively, this option can be set at import.</p>
            </div>
        </div>
    </div>
</article>