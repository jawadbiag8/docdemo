
                <article class="sc-hBEYos dVNWBU">
                    <div class="sc-kLgntA iHaOcn">
                        <nav class="sc-bYEvPH khGBIg"><a href="docs.php?page=libraries">Keyword libraries</a><svg width="6" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M.528.529c.26-.26.683-.26.943 0l4 4c.26.26.26.682 0 .942l-4 4a.667.667 0 11-.943-.942L4.057 5 .528 1.471a.667.667 0 010-.942z"
                                    fill="#002642"></path>
                            </svg><a href="">Autosphere Package</a></nav>
                        <div class="sc-iktFzd gaGeRK">
                            <h1>Autosphere.Tasks</h1>
                        </div>
                        <nav class="sc-giIncl cuybkK"><a aria-current="page" class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-tasks">Readme</a><a  class="sc-ezrdKe bAYFRD" href="docs.php?page=libraries/Autosphere-framework/Autosphere-tasks/keywords">Keywords</a></nav>
                    </div>
                    <div class="sc-jJEJSO laquCT">
                        <div class="sc-hiSbYr XqbgT">
                            <div>
                                <p><cite>Tasks</cite> is a library for controlling task execution during a Autosphere run.</p>
                                <p>It allows conditional branching between tasks, loops and jumps, and optionally validating the execution through a schema file. It can also be used to visualize the tasks as a graph.</p>
                                <p id="model"><strong>Execution model</strong></p>
                                <p>In a typical Autosphere run, tasks are ordered linearly in a file and they're executed in definition order. Events that happen during the execution can not affect the order and only have the option to fail the task
                                    or continue as defined.</p>
                                <p>Using the <cite>Tasks</cite> library, it's possible to change this model according to different states or inputs. The execution will start by running a single start task from the suite, and then according to user-defined
                                    keywords or schema rules select the next task. Any task which is defined in the same file can be used, and the same task can also be used multiple times during a single execution.
                                </p>
                                <p id="execution-example">Example:</p>
                                <p>As an example, the following Autosphere file describes a process where a task would have to be executed multiple times before a condition is reached. In a real-world scenario, these tasks would be more complicated,
                                    instead of just incrementing numbers.</p>
                                <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">    </span><span class="nn">Autosphere.Tasks</span><span class="p">

</span><span class="gh">*** Variables ***</span><span class="p">
${</span><span class="nv">CURRENT</span><span class="p">}    ${</span><span class="nv">1</span><span class="p">}
${</span><span class="nv">TARGET</span><span class="p">}     ${</span><span class="nv">5</span><span class="p">}

</span><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="gu">Check loop condition</span><span class="p">
    </span><span class="nf">Log</span><span class="p">    </span><span class="s">I'm trying to count to </span><span class="p">${</span><span class="nv">TARGET</span><span class="p">}
    </span><span class="nf">Set next task if</span><span class="p">    ${</span><span class="nv">CURRENT</span><span class="p">}</span><span class="s"> &gt;= </span><span class="p">${</span><span class="nv">TARGET</span><span class="p">}
    ...    </span><span class="s">Target reached</span><span class="p">
    ...    </span><span class="s">Increment current number</span><span class="p">

</span><span class="gu">This will not run</span><span class="p">
    </span><span class="nf">Fail</span><span class="p">    </span><span class="s">This should never run</span><span class="p">

</span><span class="gu">Increment current number</span><span class="p">
    </span><span class="nf">Set suite variable</span><span class="p">    ${</span><span class="nv">CURRENT</span><span class="p">}    ${</span><span class="nv">CURRENT + 1</span><span class="p">}
    </span><span class="nf">Log</span><span class="p">    </span><span class="s">Number is now </span><span class="p">${</span><span class="nv">CURRENT</span><span class="p">}
    </span><span class="nf">Jump to task</span><span class="p">    </span><span class="s">Check loop condition</span><span class="p">

</span><span class="gu">Target reached</span><span class="p">
    </span><span class="nf">Log</span><span class="p">    </span><span class="s">Those are some good numbers!</span>
</pre>
                                <p>The execution for this example would go as follows:</p>
                                <ol class="arabic simple">
                                    <li>It starts from <tt class="docutils literal">Check loop condition</tt>, as it's the first task in the file.</li>
                                    <li>During the first task, the keyword <tt class="docutils literal">Set next task
                                            if</tt> is called, which queues up the next task according to a condition.</li>
                                    <li>In the initial state, we have not reached the target number, and will next run the task <tt class="docutils literal">Increment current number</tt>.</li>
                                    <li>The second task executes normally and in the end jumps back to the first task using the keyword <tt class="docutils literal">Jump to task</tt>.</li>
                                    <li>The above sequence is repeated until the condition is met, and we move to the final task of the file. This final task does not schedule further tasks and the execution ends.</li>
                                </ol>
                                <p>You can also note the task <tt class="docutils literal">This will not run</tt>, which as the name implies is never executed, as no other task schedules or jumps to it.</p>
                                <p>The console log from the above execution shows how the same task is executed multiple times:</p>
                                <pre class="code console literal-block"><span class="go">==============================================================================
Incrementing Process
==============================================================================
</span><span class="m"></span><span class="gp">#</span><span class="m">1</span>   Check loop condition                                             <span class="p">|</span> PASS <span class="p">|</span>
<span class="go">Transition: Set by keyword
------------------------------------------------------------------------------
</span><span class="m"></span><span class="gp">#</span><span class="m">2</span>   Increment current number                                         <span class="p">|</span> PASS <span class="p">|</span>
<span class="go">Transition: Set by keyword
------------------------------------------------------------------------------
</span><span class="m"></span><span class="gp">#</span><span class="m">3</span>   Check loop condition                                             <span class="p">|</span> PASS <span class="p">|</span>
<span class="go">Transition: Set by keyword
------------------------------------------------------------------------------
</span><span class="m"></span><span class="gp">#</span><span class="m">4</span>   Increment current number                                         <span class="p">|</span> PASS <span class="p">|</span>
<span class="go">Transition: Set by keyword
------------------------------------------------------------------------------
</span><span class="m"></span><span class="gp">#</span><span class="m">5</span>   Check loop condition                                             <span class="p">|</span> PASS <span class="p">|</span>
<span class="go">Transition: Set by keyword
------------------------------------------------------------------------------
</span><span class="m"></span><span class="gp">#</span><span class="m">6</span>   Increment current number                                         <span class="p">|</span> PASS <span class="p">|</span>
<span class="go">Transition: Set by keyword
------------------------------------------------------------------------------
</span><span class="m"></span><span class="gp">#</span><span class="m">7</span>   Check loop condition                                             <span class="p">|</span> PASS <span class="p">|</span>
<span class="go">Transition: Set by keyword
------------------------------------------------------------------------------
</span><span class="m"></span><span class="gp">#</span><span class="m">8</span>   Increment current number                                         <span class="p">|</span> PASS <span class="p">|</span>
<span class="go">Transition: Set by keyword
------------------------------------------------------------------------------
</span><span class="m"></span><span class="gp">#</span><span class="m">9</span>   Check loop condition                                             <span class="p">|</span> PASS <span class="p">|</span>
<span class="go">Transition: Set by keyword
------------------------------------------------------------------------------
</span><span class="m"></span><span class="gp">#</span><span class="m">10</span>  Target reached                                                   <span class="p">|</span> PASS <span class="p">|</span>
<span class="go">------------------------------------------------------------------------------
Incrementing Process:: [/graph_incrementing_process.svg]              | PASS |
10 critical tasks, 10 passed, 0 failed
10 tasks total, 10 passed, 0 failed
==============================================================================</span>
</pre>
                                <p id="graph"><strong>Graph</strong></p>
                                <p>A common way to document a process is through a directed graph. These graphs are usually drawn manually and describe the expected higher level steps. The actual implementation itself follows a different path through a graph,
                                    depending on inputs or implementation details. This library visualizes this execution graph using the <a class="reference external" href="https://graphviz.org/">Graphviz</a> tool.</p>
                                <p>After the execution is finished, it will create a
                                    <a class="reference external" href="https://en.wikipedia.org/wiki/DOT_(graph_description_language)">DOT</a> file and render it as an image. This image will automatically be appended to the suite's documentation field.</p>
                                <p><strong>Requirements</strong></p>
                                <p>Drawing the graph requires a working installation of
                                    <a class="reference external" href="https://graphviz.org/">Graphviz</a>. This can be installed through their website or by using <a class="reference external" href="https://docs.conda.io/">Conda</a>.</p>
                                <p>This requirement is optional for the functioning of this library, and will display a warning if the tool is not available. The visualization can be entirely disabled with the <tt class="docutils literal">graph</tt> argument
                                    during library initialization.
                                </p>
                                <p id="schema"><strong>Schema</strong></p>
                                <p>There is an option to define a schema file for the suite, which is written in JSON. This file will be used to validate the actual execution and fail it if an unexpected transition between tasks happens. It can also define
                                    rules for selecting the next task, which allows separating the task and process definitions.</p>
                                <p>Example:</p>
                                <p>The execution-example shown previously used keywords to control the execution. This can also be done using the following schema:</p>
                                <pre class="code json literal-block"><span class="p">{</span>
    <span class="nt">&quot;tasks&quot;</span><span class="p">:</span> <span class="p">{</span>
        <span class="nt">&quot;Check loop condition&quot;</span><span class="p">:</span> <span class="p">{</span>
            <span class="nt">&quot;alias&quot;</span><span class="p">:</span> <span class="s2">&quot;check&quot;</span><span class="p">,</span>
            <span class="nt">&quot;start&quot;</span><span class="p">:</span> <span class="kc">true</span><span class="p">,</span>
            <span class="nt">&quot;next&quot;</span><span class="p">:</span> <span class="p">[</span>
                <span class="s2">&quot;increment&quot;</span><span class="p">,</span>
                <span class="s2">&quot;target&quot;</span>
            <span class="p">],</span>
            <span class="nt">&quot;actions&quot;</span><span class="p">:</span> <span class="p">[</span>
                <span class="p">{</span>
                    <span class="nt">&quot;condition&quot;</span><span class="p">:</span> <span class="s2">&quot;$CURRENT &gt;= $TARGET&quot;</span><span class="p">,</span>
                    <span class="nt">&quot;task&quot;</span><span class="p">:</span> <span class="s2">&quot;target&quot;</span>
                <span class="p">},</span>
                <span class="p">{</span>
                    <span class="nt">&quot;condition&quot;</span><span class="p">:</span> <span class="s2">&quot;$CURRENT &lt; $TARGET&quot;</span><span class="p">,</span>
                    <span class="nt">&quot;task&quot;</span><span class="p">:</span> <span class="s2">&quot;increment&quot;</span>
                <span class="p">}</span>
            <span class="p">]</span>
        <span class="p">},</span>
        <span class="nt">&quot;Increment current number&quot;</span><span class="p">:</span> <span class="p">{</span>
            <span class="nt">&quot;alias&quot;</span><span class="p">:</span> <span class="s2">&quot;increment&quot;</span><span class="p">,</span>
            <span class="nt">&quot;next&quot;</span><span class="p">:</span> <span class="p">[</span>
                <span class="s2">&quot;check&quot;</span>
            <span class="p">],</span>
            <span class="nt">&quot;actions&quot;</span><span class="p">:</span> <span class="p">[</span>
                <span class="p">{</span>
                    <span class="nt">&quot;status&quot;</span><span class="p">:</span> <span class="s2">&quot;PASS&quot;</span><span class="p">,</span>
                    <span class="nt">&quot;task&quot;</span><span class="p">:</span> <span class="s2">&quot;check&quot;</span>
                <span class="p">}</span>
            <span class="p">]</span>
        <span class="p">},</span>
        <span class="nt">&quot;Target reached&quot;</span><span class="p">:</span> <span class="p">{</span>
            <span class="nt">&quot;alias&quot;</span><span class="p">:</span> <span class="s2">&quot;target&quot;</span><span class="p">,</span>
            <span class="nt">&quot;end&quot;</span><span class="p">:</span> <span class="kc">true</span><span class="p">,</span>
            <span class="nt">&quot;next&quot;</span><span class="p">:</span> <span class="p">[]</span>
        <span class="p">}</span>
    <span class="p">}</span>
<span class="p">}</span>
</pre>
                                <p>This has the added benefit of protecting against implementation errors, as the library will validate the start and end tasks, and transitions between different tasks.</p>
                                <p>After this schema has been taken into use, the aforementioned example will reduce to the following:</p>
                                <pre class="code robotframework literal-block"><span class="gh">*** Settings ***</span><span class="p">
</span><span class="kn">Library</span><span class="p">    </span><span class="nn">Autosphere.Tasks</span><span class="p">    </span><span class="s">schema=counter-schema.json</span><span class="p">

</span><span class="gh">*** Variables ***</span><span class="p">
${</span><span class="nv">CURRENT</span><span class="p">}    ${</span><span class="nv">1</span><span class="p">}
${</span><span class="nv">TARGET</span><span class="p">}     ${</span><span class="nv">5</span><span class="p">}

</span><span class="gh">*** Tasks ***</span><span class="p">
</span><span class="gu">Check loop condition</span><span class="p">
    </span><span class="nf">Log</span><span class="p">    </span><span class="s">I'm trying to count to </span><span class="p">${</span><span class="nv">TARGET</span><span class="p">}

</span><span class="gu">This will not run</span><span class="p">
    </span><span class="nf">Fail</span><span class="p">    </span><span class="s">This should never run</span><span class="p">

</span><span class="gu">Increment current number</span><span class="p">
    </span><span class="nf">Set suite variable</span><span class="p">    ${</span><span class="nv">CURRENT</span><span class="p">}    ${</span><span class="nv">CURRENT + 1</span><span class="p">}
    </span><span class="nf">Log</span><span class="p">    </span><span class="s">Number is now </span><span class="p">${</span><span class="nv">CURRENT</span><span class="p">}

</span><span class="gu">Target reached</span><span class="p">
    </span><span class="nf">Log</span><span class="p">    </span><span class="s">Those are some good numbers!</span>
</pre>
                                <p><strong>Format</strong></p>
                                <p>The current format is JSON with the following structure:</p>
                                <pre class="code javascript literal-block"><span class="p">{</span>
    <span class="s2">&quot;tasks&quot;</span><span class="o">:</span> <span class="p">{</span>
        <span class="p">[</span><span class="nx">name</span><span class="o">:</span> <span class="nx">string</span><span class="p">]</span><span class="o">:</span> <span class="p">{</span>
            <span class="s2">&quot;alias&quot;</span><span class="o">:</span> <span class="nx">string</span><span class="p">,</span>
            <span class="s2">&quot;start&quot;</span><span class="o">:</span> <span class="kr">boolean</span><span class="p">,</span>
            <span class="s2">&quot;end&quot;</span><span class="o">:</span> <span class="kr">boolean</span><span class="p">,</span>
            <span class="s2">&quot;next&quot;</span><span class="o">:</span> <span class="nx">string</span><span class="p">[],</span>
            <span class="s2">&quot;actions&quot;</span><span class="o">:</span> <span class="nx">action</span><span class="p">[],</span>
        <span class="p">}</span>
    <span class="p">}</span>
<span class="p">}</span>
</pre>
                                <p>Each schema is a map of tasks with various properties. The keys must match the task names in the Autosphere file definition. All properties inside the task are optional.</p>
                                <p>The available properties and their uses:</p>
                                <ul class="simple">
                                    <li>
                                        <dl class="first docutils">
                                            <dt><em>alias</em>: Define a short name for the task, which can be used as a
                                                reference</dt>
                                            <dd>inside the schema.</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl class="first docutils">
                                            <dt><em>start</em>: Start task for execution. There can be only one task
                                                with this</dt>
                                            <dd>enabled. If not defined, will default to first task in the file.</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl class="first docutils">
                                            <dt><em>end</em>: Valid end task for execution. There can be multiple tasks
                                                with this</dt>
                                            <dd>enabled. Fails the execution if this is defined for any task and the execution stops in a non-end task.</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl class="first docutils">
                                            <dt><em>next</em>: List of valid tasks to transition to from this task.
                                                Supports</dt>
                                            <dd>alias definitions.</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl class="first docutils">
                                            <dt><em>actions</em>: List of actions that are executed at the end of the
                                                task.</dt>
                                            <dd>See section below for details.</dd>
                                        </dl>
                                    </li>
                                </ul>
                                <p>The types of actions:</p>
                                <ul class="simple">
                                    <li>
                                        <dl class="first docutils">
                                            <dt><em>exception</em>: Set the next task if a matching exception occurs.
                                            </dt>
                                            <dd>Matches the exception message as regex.</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl class="first docutils">
                                            <dt><em>condition</em>: Set the next task if a conditional expression is
                                                true.</dt>
                                            <dd>Allows using Autosphere variables.</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl class="first docutils">
                                            <dt><em>status</em>: Set the next task if the current task's result matches,
                                            </dt>
                                            <dd>e.g. PASS or FAIL.</dd>
                                        </dl>
                                    </li>
                                </ul>
                                <p>Examples of actions:</p>
                                <pre class="code json literal-block"><span class="p">[</span>
    <span class="p">{</span><span class="nt">&quot;exception&quot;</span><span class="p">:</span> <span class="s2">&quot;.*ValueError.*&quot;</span><span class="p">,</span> <span class="nt">&quot;task&quot;</span><span class="p">:</span> <span class="s2">&quot;Invalid input values&quot;</span><span class="p">},</span>
    <span class="p">{</span><span class="nt">&quot;condition&quot;</span><span class="p">:</span> <span class="s2">&quot;$ATTEMPTS &gt; 10&quot;</span><span class="p">,</span> <span class="nt">&quot;task&quot;</span><span class="p">:</span> <span class="s2">&quot;Too many attempts&quot;</span><span class="p">},</span>
    <span class="p">{</span><span class="nt">&quot;status&quot;</span><span class="p">:</span> <span class="s2">&quot;PASS&quot;</span><span class="p">,</span> <span class="nt">&quot;task&quot;</span><span class="p">:</span> <span class="s2">&quot;Success state&quot;</span><span class="p">}</span>
<span class="p">]</span>
</pre>
                            </div>
                        </div>
                       
                    </div>
                </article>
           