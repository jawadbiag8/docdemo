<section class="content">
    <div class="container-fluid">
        <!-- Headings -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h4>
                            <b>Conditional execution in Autosphere</b>
                        </h4>

                    </div>
                    <div class="body">

                        <blockquote>
                            <p>In general, it is not recommended to have conditional logic in tasks, or even in user keywords, because it can make them hard to understand and maintain. Instead, this kind of logic should be in test libraries, where it can be
                                implemented using natural programming language constructs. However, some conditional logic can be useful at times, and even though Autosphere does not have an actual if/else construct, there are several ways to get the
                                same effect. - <em>Autosphere User Guide</em></p>
                        </blockquote>
                        <p>The <a href="documantation.php?page=libraries&node=Autosphere-framework&subnode=Autosphere-tasks"><code>Autosphere.Tasks</code></a> library offers another way for building conditional logic, check it out!</p>
                        <p>See the <a href="documantation.php?page=libraries&node=built-in&subnode=builtin"><code>Run Keyword If</code></a> keyword documentation for more information.</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***
Documentation     IF / ELSE IF / ELSE example.
...               Generate a random number.
...               Do things based on the generated number.
...               Stop (pass) when the condition is met.

*** Variables ***
${MAX_TRIES}=     ${50}
${NUMBER_TO_PASS_ON}=    7

*** Keywords ***
Generate Numbers And Act On Result
    FOR    ${i}    IN RANGE    ${MAX_TRIES}
        ${random}=    Evaluate    random.randint(0, 10)
        ${is_expected}=    Evaluate    ${random} == ${NUMBER_TO_PASS_ON}
        Run Keyword Unless
        ...    ${is_expected}
        ...    Log To Console    Condition not met.
        Run Keyword If
        ...    ${is_expected}
        ...    Pass Execution    &quot;${random} == ${NUMBER_TO_PASS_ON}&quot;
        ...    ELSE IF
        ...    ${random} &gt; ${NUMBER_TO_PASS_ON}
        ...    Log To Console    Too high.
        ...    ELSE
        ...    Log To Console    Too low.
    END

*** Tasks ***
Do if-else logic
    Generate Numbers And Act On Result

</code></code></pre>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
    </div>
</section>