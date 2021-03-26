
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                  fill="#002642"></path>
              </svg><a href="">Built-in</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Screenshot</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/screenshot">Readme</a><a class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/built-in/screenshot/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                        <div class="sc-jcVebW hrCIoP">
    <div>
        <p>Test library for taking screenshots on the machine where tests are run.</p>
        <p>Notice that successfully taking screenshots requires tests to be run with a physical or virtual display.</p>
        <h3 id="Table of contents">Table of contents</h3>
        <ul>
            <li><a href="#Using%20with%20Python" class="name">Using with Python</a></li>
            <li><a href="#Using%20with%20Jython%20and%20IronPython" class="name">Using with Jython and IronPython</a>
            </li>
            <li><a href="#Where%20screenshots%20are%20saved" class="name">Where screenshots are saved</a></li>
            <li><a href="#ScreenCapLibrary" class="name">ScreenCapLibrary</a></li>
            <li><a href="#Importing" class="name">Importing</a></li>
            <li><a href="#Shortcuts" class="name">Shortcuts</a></li>
            <li><a href="#Keywords" class="name">Keywords</a></li>
        </ul>
        <h2 id="Using with Python">Using with Python</h2>
        <p>How screenshots are taken when using Python depends on the operating system. On OSX screenshots are taken using the built-in <code>screencapture</code> utility. On other operating systems you need to have one of the following tools or Python modules
            installed. You can specify the tool/module to use when <a href="#Importing" class="name">importing</a> the library. If no tool or module is specified, the first one found will be used.</p>


        <h2 id="Using with Jython and IronPython">Using with Jython and IronPython</h2>
        <p>With Jython and IronPython this library uses APIs provided by JVM and .NET platforms, respectively. These APIs are always available and thus no external modules are needed.</p>
        <h2 id="Where screenshots are saved">Where screenshots are saved</h2>
        <p>By default screenshots are saved into the same directory where the Autosphere log file is written. If no log is created, screenshots are saved into the directory where the XML output file is written.</p>
        <p>It is possible to specify a custom location for screenshots using <code>screenshot_directory</code> argument when <a href="#Importing" class="name">importing</a> the library and using <a href="#Set%20Screenshot%20Directory" class="name">Set Screenshot Directory</a>            keyword during execution. It is also possible to save screenshots using an absolute path.</p>
        <h2 id="ScreenCapLibrary">ScreenCapLibrary</h2>
        <p>ScreenCapLibrary is an external Autosphere library that can be used as an alternative, which additionally provides support for multiple formats, adjusting the quality, using GIFs and
            video capturing.</p>
    </div>
</div>
                        </div>
                        
                    </div>
                </article>
           