
<article class="sc-hBEYos dVNWBU">
    <h1>Things to keep in mind while conducting technical feasibility of process</h1>
    <aside class="sc-hHftDr ewYhue">
        <div><span class="sc-dmlrTW hAIwHX">beginner</span><small>Time to complete ~1 hour</small></div>
    </aside>
    <p>The technical feasibility assessment is done to understand if the automation goal is realistic. It is good to find any technical showstoppers early on. In the spirit of agile development, <strong>fail fast</strong> (and save money
        doing so)!</p>

    <p>Think of the following questions to figure out if the process could be technically feasible to automate:
    </p>
    <h2 id="could-a-robot-complete-the-process-by-following-unambiguous-rules"><button type="button"><svg
                height="16" width="16">
            <path
                d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
            </path>
            </svg></button>Rules within the process</h2>
    <ul>
        <li>
            If the business rules are easy to follow, unambiguous, and do not require human judgment, great!
        </li>
        <li>
            If the rules are complex but unambiguous, more effort is necessary during the implementation, but the automation could still be doable.
        </li>
        <li>
            If human judgment is required to complete the process, it might be difficult or costly to automate the process. In those cases, you could think if <em>parts</em> of the process could still be automated.
        </li>
    </ul>

    <h2 id="can-a-robot-easily-read-the-data-required-by-the-process"><button type="button"><svg height="16"
                                                                                                 width="16">
            <path
                d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
            </path>
            </svg></button>Data required by process</h2>
    <ul>
        <li>
            If the input data required by the process is in a digitized format that the robot can read comfortably, wonderful!

        </li>
        <li>
            If the data requires some transformation before the robot can use it, things get more complicated. Still a good chance for success!
        </li>
        <li>
            If the data needs to be extracted from images, PDF documents, or emails, there are solutions for those, but prepare for a bit more intensive implementation. No blockers, still (unless the budget is exceeded)!

        </li>
        <li>
            If the data is not in a digitized format (it&#x27;s on paper, for example), you need to get that data digitized. Depending on your budget, this might be a showstopper.
        </li>
    </ul>

    <h2 id="can-a-robot-operate-all-the-required-software"><button type="button"><svg height="16" width="16">
            <path
                d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
            </path>
            </svg></button>Types of Applications</h2>
    <ul>
        <li>
            <p>If there are only web applications involved, this is usually the best case (plenty of support for automation).
            </p>
        </li>
        <li>
            <p>If the process involves desktop applications or even old fashioned mainframes, the implementation might take more effort (depending on the operating system and the applications).</p>
        </li>
    </ul>

    <h2 id="can-the-robot-access-all-the-required-accounts"><button type="button"><svg height="16" width="16">
            <path
                d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
            </path>
            </svg></button>Systems/Accounts Access</h2>
    <ul>
        <li>
            If the robot can use its own credentials on all systems to complete the process, great!
        </li>
        <li>
            If the authentication can not be automated completely, some human intervention is likely to be needed. This will have an impact on development.
        </li>
    </ul>


    <aside class="sc-kfzAmx cdpwWb">
        <div><a class="pagination" href="docs.php?page=courses/software-robot-delivery-process/the-idea">Previous chapter</a></div>
        <div><a class="pagination" href="docs.php?page=courses/software-robot-delivery-process/business-feasibility-assessment">Next chapter</a></div>
    </aside>
</article>
