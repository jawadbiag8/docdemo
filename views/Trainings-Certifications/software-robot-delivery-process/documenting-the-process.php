
<article class="sc-hBEYos dVNWBU">
    <h1>Documenting the process</h1>
    <aside class="sc-hHftDr ewYhue">
        <div><span class="sc-dmlrTW hAIwHX">beginner</span><small>Time to complete ~1 hour</small></div>
    </aside>
    <p>After you have identified a process as a good candidate for automation, the first step is to document it in detail. This documentation will then serve as the basis for implementing the software robot that will take over and handle
        the process in the future.</p>
    <p>During this requirements gathering phase, the software robot developer needs to work closely with the business side to get familiar with the current process and the business domain in which it runs. This often means sitting next to
        the user when the process is run, asking all relevant questions, and exploring all possible cases.</p>
    <h2 id="the-process-definition-document"><button type="button"><svg height="16" width="16">
            <path
                d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
            </path>
            </svg></button>Creating Process Definition Document</h2>
    <p>Process definition document (PDD) is a document prepared by business analyst that serves as a source for understanding the process to be implemented for RPA. This document shows high level flow of the manual process. This document
        also serves as a requirement document for RPA development team. PDD should have all of the information that is required by the developers and other stakeholder to jump right into the development process. </p>
    <h3 id="contents-of-the-pdd-document"><button type="button"><svg height="16" width="16">
            <path
                d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
            </path>
            </svg></button>As Is Process Understanding </h3>
    <p>When preparing the PDD first step is to include understandable the As-Is process with complete steps with diagram representation. </p>
    <p>Some organizations would provide BA with their process diagrams. While in some of the cases BA would have to map (Manually Create) the diagrams and steps. </p>
    <h3 id="bonus-download-our-template-for-your-pdd-documents"><button type="button"><svg height="16" width="16">
            <path
                d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
            </path>
            </svg></button>Understanding Process Inputs, Outputs and Flow </h3>
    <p>PDD should include clarity on the process inputs, Outputs and flow. This is required for developers to understand what would be received and what should be delivered. </p>
    <p>Example: Input: Excel file with details -> Output: Excel file with new updated fields. </p>
    <h3 id="lets-write-the-pdd-for-mariax27s-case"><button type="button"><svg height="16" width="16">
            <path
                d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
            </path>
            </svg></button>Understanding Applications involved </h3>
    <p>PDD should include details of all of the applications involved in the process. Examples of Applications </p>
    <ul>
        <li>Mail Client</li>
        <li>Excel</li>
        <li>CRM</li>
        <li>SAP</li>
        <li>Web Application</li>
        <li>Desktop Application</li>
        <li>Self-Built Application </li>
        <li>Terminal</li>
    </ul>
    <h3 id="process-name"><button type="button"><svg height="16" width="16">
            <path
                d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
            </path>
            </svg></button>Understanding Complexity </h3>
    <p>Processes for Autosphere Implementation require complexity assessment. The complexity assessment helps to quantify the development effort and delivery time for every use case.
    </p>
    <p>Factors to consider for complexity factors: </p>
    <ul>
        <li>Number of Screens.</li>
        <li>Variations / Scenarios.</li>
        <li>Standard Inputs.</li>
        <li>Type of Application.</li>
        <li>Structured Inputs.</li>
        <li>Free Texts.</li>
        <li>Image Based Automation.</li>
    </ul>
    <p>Besides the factors above the below table categorizes the complexity of use cases by default. </p>
    <p><img src="../views/Icons/PDD 1.PNG" alt=""></p>
    <h3 id="document-metadata"><button type="button"><svg height="16" width="16">
            <path
                d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
            </path>
            </svg></button>Understanding Exceptions</h3>
    <p>Business Analyst must consider exceptions that can appear in business process. This involves an effort to cover all possible scenarios when things might not go as expected. </p>
    <p>
    <h4>Types of Exceptions</h4>
</p>
<p><img src="../views/Icons/PDD 2.PNG" alt=""></p>
<h3 id="current-process-analysis"><button type="button"><svg height="16" width="16">
        <path
            d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
        </path>
        </svg></button>Mapping To Be Process </h3>
<p>Business Analyst must map process that would show what process would look like after RPA implementation. </p>
<p>To-be process should clarify on every step where RPA robot will be involved for an activity. </p>
<h3 id="possible-exceptions"><button type="button"><svg height="16" width="16">
        <path
            d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z">
        </path>
        </svg></button>Robot License Calculation </h3>
<p>Business Analyst must also include calculation on Autosphere licenses. For calculation of licenses the BA must consider the following parameters: </p>
<ul>
    <li>Frequency of the process </li>
    <li>Average Handling time of the process </li>
    <li>Scheduling time of the process </li>
    <li>Expected Peak Volume of transactions </li>
    <li>Nature of the process (Attended / Unattended) </li>
</ul>
<p>This information must be available to make accurate estimations on license utilization. If any of the factors are missing and client is not able to provide the information, the BA would self-assume based on the experience and nature
    of use cases. </p>
<p>For you help there sample is <strong><a href="#">PDD Document</a></strong></p>

<aside class="sc-kfzAmx cdpwWb">
    <div><a class="pagination" href="docs.php?page=courses/software-robot-delivery-process/business-feasibility-assessment">Previous chapter</a></div>
    <div><a class="pagination" href="docs.php?page=courses/software-robot-delivery-process/implementing-and-testing-the-robot">Next chapter</a></div>
</aside>
</article>
