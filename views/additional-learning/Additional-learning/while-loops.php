<section class="content">
    <div class="container-fluid">
        <!-- Headings -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h4>
                            <b>While loops in Autosphere</b>
                        </h4>

                    </div>
                    <div class="body">

                        <p>A common need in programming is repeating one or more operations until a condition is met. This is a
                            <code>while</code> loop.
                        </p>
                        <p>Autosphere, at least for now, <strong>does not support while loops directly</strong>. However, there are ways to achieve very similar results.</p>
                        <h4 id="setting-a-for-loop-to-repeat-a-high-number-of-times"> Setting a for loop to repeat a high number of times</h4>
                        <p>Using the <code>FOR .. IN RANGE</code> syntax, we can set a for
                            loop to repeat for a very high number of times. Then, using the <code>Exit For Loop If</code> keyword, we can specify the condition that we want to &quot;break&quot; the execution.</p>
                        <p>In this simple example, our loop will continue until a random value equals to &quot;5&quot;:</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"> </div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***
Documentation     Demonstrating a while-like loop.
Library           String

*** Tasks ***
For Test
    FOR    ${i}    IN RANGE    9999999
        ${random_value_from_1_to_5}=    Generate Random String    1    12345
        ${random_value_is_5}=    Evaluate    ${random_value_from_1_to_5} == 5
        Exit For Loop If    ${random_value_is_5}
    END
    Log    Exited the loop.
</code></code></pre>
                            </div>
                        </div>
                        <h4 id="using-the-native-python-while-syntax-in-your-custom-library"> Using the native python <code>while</code> syntax in your custom library</h4>

                        <p>You can then use your keywords in your Autosphere script, calling them with the
                            <code>Wait Until Keyword Succeeds</code> keyword.
                        </p>


                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
    </div>
</section>