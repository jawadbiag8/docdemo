<section id="contentpage" class="content">
    <div class="container-fluid">
        <!-- Headings -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h4>
                            <b>How to use for loops in Autosphere</b>
                        </h4>

                    </div>
                    <div class="body">
                        
                        <p>When building software robots (and in programming in general), it is a common pattern to have to repeat the same action multiple times based on a list of elements. For example, given a list of email addresses, send a message to each
                            of them. Or, do some processing for each line of an invoice, etc. This is called <strong>for looping</strong>. Let&#x27;s have a look at what you can do with loops in Autosphere!</p>
                        <h4 id="simple-loops">Simple loops</h4>
                        <p>Consider this example:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***
Documentation     An example about for loops.

*** Variables ***
@{ROBOTS}=        Raymond    developer    Terminator    Autosphere

*** Tasks ***
Loop Over A List Of Items And Log Each Of Them
    FOR    ${robot}    IN    @{ROBOTS}
        Log    ${robot}
    END

</code></code></pre>
                            </div>
                        </div>
                        <p>Let&#x27;s go over it line by line:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Variables ***
@{ROBOTS}=        Raymond    developer    Terminator    Autosphere
</code></code></pre>
                            </div>
                        </div>


                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">FOR    ${robot}    IN    @{ROBOTS}
</code></code></pre>
                            </div>
                        </div>
                        <p>Here we are starting our loop. We will loop over our <code>@{ROBOTS}</code> list variable, and we are defining a <code>${robot}</code> local variable, which will be assigned at each iteration.
                        </p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">    Log    ${robot}
</code></code></pre>
                            </div>
                        </div>
                        <p>This is the operation we want to execute at each iteration. In our case, we just want to log the variable&#x27;s value, so we use the <code>Log</code> keyword. <strong>Note the
                                indentation</strong>: this and any other keywords we want to execute inside our loop will need to be indented with at least two spaces.</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">END   ${robot}
</code></code></pre>
                            </div>
                        </div>
                        <p>To signal that we want to close our for loop, we add the <code>END</code> keyword.</p>
                        <p>Our code will now print the name of each of the robots in sequence:</p>

                        <h4 id="controlling-the-execution-of-a-for-loop-manually"> Controlling the execution of a for loop manually</h4>
                        <p>A for loop will execute the same operation for all the elements of a list. Sometimes you might instead want to skip some element or to halt the loop immediately based on some condition. Let&#x27;s see how.</p>
                        <h4 id="skipping-one-element"> Skipping one element</h4>
                        <p>If you want to log the name of each robot in our list, but not <code>Terminator</code>, you can use the <a href="documantation.php?page=libraries&node=built-in&subnode=builtin">Continue For
                                Loop If</a> keyword like this:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***
Documentation     An example executing a loop but skipping one element.

*** Variables ***
@{ROBOTS}=        Raymond    developer    Terminator    Autosphere

*** Tasks ***
Execute a loop only three times
    FOR    ${robot}    IN    @{ROBOTS}
        Continue For Loop If    $robot == &#x27;Terminator&#x27;
        Log    ${robot}
    END

</code></code></pre>
                            </div>
                        </div>
                        <ul>
                            <li><code>Continue For Loop If $robot == &#x27;Terminator&#x27;</code>: Using this keyword, we can skip the current execution of the loop and continue to the next one if the condition is met.
                            </li>
                        </ul>
                        <blockquote>
                            <p>The <a href="documantation.php?page=libraries&node=built-in&subnode=builtin"><code>Continue For Loop</code></a> keyword is also available: It will skip the current iteration of the loop in any case. This is mostly meant to
                                be used inside another keyword.</p>
                        </blockquote>
                        <h4 id="breaking-out-of-the-loop"> Breaking out of the loop</h4>
                        <p>If you want to stop the execution of the loop based on some condition and have your program continue onwards, you can use the <a href="documantation.php?page=libraries&node=built-in&subnode=builtin"><code>Exit For Loop If</code></a> keyword:
                        </p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***
Documentation     An example breaking out of the loop based on some condition.

*** Variables ***
@{ROBOTS}=        Raymond    developer    Terminator    Autosphere

*** Tasks ***
Break out of the loop on condition
    FOR    ${robot}    IN    @{ROBOTS}
        Exit For Loop If    $robot == &#x27;developer&#x27;
        Log    ${robot}
    END
</code></code></pre>
                            </div>
                        </div>
                        <ul>
                            <li><code>Exit For Loop If $robot == &#x27;developer&#x27;</code>: Using this keyword, we can stop the execution of the loop and have our program continue after it.</li>
                        </ul>
                        <blockquote>
                            <p>The <a href="documantation.php?page=libraries&node=built-in&subnode=builtin"><code>Exit For Loop</code></a> keyword is also available: It will stop the execution of the loop in any case. This is mostly meant to be used inside another
                                keyword.
                            </p>
                        </blockquote>
                        <h4 id="executing-a-loop-a-maximum-amount-of-times"> Executing a loop a maximum amount of times</h4>
                        <p>Using the <a href="documantation.php?page=libraries&node=built-in&subnode=builtin"><code>Exit For Loop If</code></a> keyword, you can decide to set the maximum amount of times a for loop should be executed:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***
Documentation     An example executing a loop only two times.

*** Variables ***
@{ROBOTS}=        Raymond    developer    Terminator    Autosphere

*** Tasks ***
Execute a loop only two times
    ${index}=    Set Variable    1
    FOR    ${robot}    IN    @{ROBOTS}
        Exit For Loop If    ${index} &gt; 2
        Log    ${robot}
        ${index}=    Evaluate    ${index} + 1
    END
</code></code></pre>
                            </div>
                        </div>
                        <ul>
                            <li><code>${index}= Set Variable 1</code>: We create a variable called <code>${index}</code> that we set to the value of <code>1</code>.</li>
                            <li><code>${index}= Evaluate ${index} + 1</code>: We increment the value of the index variable by one inside the loop, using the <code>Evaluate</code> keyword.</li>
                            <li><code>Exit For Loop If ${index} &gt; 2</code>: We use the <code>Exit For Loop If</code> keyword to interrupt the execution of the loop if our index variable is bigger than two, effectively limiting the execution of the loop to
                                two times maximum.</li>
                        </ul>

                        <h4 id="nested-loops"> Nested loops</h4>
                        <p>You cannot directly create nested loops, but you can achieve the same result by calling a keyword inside the outer loop that itself contains a loop, for example, if you have a table which contains rows which in turn contain cells:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Keywords ***
Handle Table
    [Arguments]    @{table}
    FOR    ${row}    IN    @{table}
        Handle Row    @{row}
    END

*** Keywords ***
Handle Row
    [Arguments]    @{row}
    FOR    ${cell}    IN    @{row}
        Handle Cell    ${cell}
    END
</code></code></pre>
                            </div>
                        </div>
                        <h4 id="other-practical-examples-and-courses"> Other practical examples and courses</h4>
                        <ul>
                            <li>In our <a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=filling-in-the-sales-form-using-excel-data">Beginners&#x27;
                                    course</a> we use looping to fill a form repeatedly using data from an Excel file.</li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
    </div>
</section>