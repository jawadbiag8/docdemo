<section class="content">
    <div class="container-fluid">
        <!-- Headings -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b> Course</b>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=getting-to-the-intranet">Next</a></li>
                                    <li><a href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=marias-task">Previous</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <h2>Your first .robot</h2>
                        <aside class="sc-hHftDr ewYhue">
                            <div class="m-b-15"><span class="hAIwHX m-r-10">beginner</span><small>Time to complete ~2 hours</small>
                            </div>
                        </aside>
                        <h4 id="view-the-structure">View the structure</h4>
                        <p>Once you have the <code>Training.Autosphere-starter</code> robot open, you will see files on the left of the Autosphere Studio screen.</p>
                        <p><img class="img-responsive" src="../images/Training-Certifications/Beginner-Course/Autosphere-lab-file-navigator.PNG" alt=""></p>
                        <p>Select the Autosphere file under Notebook category. An untitled.ipynb file will open. You can rename it by right-clicking the untitled.ipynb to Tasks.ipynb in directory.</p>
                        <h4 id="open-the-robot-file">Open the robot file</h4>
                        <p><img src="../images/Training-Certifications/Beginner-Course/Autosphere-Navigator.PNG" alt=""></p>
                        <p>Double-click the <code>Tasks.ipynb</code> file to open it in Notebook mode:</p>
                        <p><img src="../images/Training-Certifications/Beginner-Course/Autosphere-lab-robot-file-in-notebook-mode.png" alt="Autosphere Lab - Robot file in Notebook mode" /></p>
                        <h4 id="notebook-mode">Notebook mode?</h4>
                        <p><code>.robot</code> files are text files. Opening them in Autosphere Lab in Notebook mode adds the possibility of running your robot directly from the user interface, and enables more advanced ways of working on your robot code.</p>
                        <p>The Notebook interface is based on the idea of <strong>cells</strong>: cells can be executed individually, rearranged, duplicated, etc.</p>
                        <p>Our starting robot has <strong>two cells</strong>: one for the <code>*** Settings ***</code> section, one for the <code>*** Tasks ***</code> section.</p>
                        <p>You can edit the contents of a cell by clicking on it.</p>
                        <p>You can add a new cell using the <code>+</code> button on the toolbar, and you can remove (cut) a cell using the <code>Scissors</code> button:</p>
                        <p>You can undo the removing or adding of a cell by pressing the <code>Z</code> key.</p>
                        <p><img src="../images/Training-Certifications/Beginner-Course/Autosphere-lab-adding-removing-cells.gif" alt="Autosphere Lab - adding removing cells" /></p>

                        <h4 id="run-the-robot">Run the robot</h4>
                        <p>Great! The robot is ready for action. Press the <code>&gt;&gt;</code> icon in the toolbar. A modal with the question &quot;Restart Kernel?&quot; appears. Click on <code>Restart</code>. The robot completes the task of saying &quot;Hello
                            World!&quot;!
                        </p>
                        <h4 id="view-the-task-log">View the task log</h4>
                        <p>Your robot writes a <em>log</em> of everything it did during the execution of the task. When developing your robot, viewing the log lets you see what your robot did in detail.</p>
                        <p>After the task is completed, a <code>Log</code> button appears at the bottom of the Notebook. Click on it to open the log file.</p>
                        <p><img src="../images/Training-Certifications/Beginner-Course/Autosphere-lab-log-button.png" alt="Autosphere Lab - Log button" /></p>
                        <p>A log window opens. </p>
                        <p><img src="../images/Training-Certifications/Beginner-Course/Log.png" alt=""></p>
                        <p>At the bottom of the window you see &quot;TASK Say Hello to the World&quot;. Hover over it and click the <code>⌄</code> icon (<code>Expand all</code>) on the right to expand it:
                        </p>
                        <p><img src="../images/Training-Certifications/Beginner-Course/Autosphere-lab-log-task-accordion-closed.png" alt="Autosphere Lab - Log - Task accordion, closed" /></p>
                        <p>On the last line in the log, you see &quot;Hello World!&quot;. Hurray! The robot successfully greeted the world!:
                        </p>
                        <p><img src="../images/Training-Certifications/Beginner-Course/Autosphere-lab-log-task-accordion-open.png" alt="Autosphere Lab - Log - Task accordion open" /></p>


                        <h4 id="the-anatomy-of-a-robot">The anatomy of a robot </h4>
                        <p>What are small robots made of? Of <em>settings</em>, <em>tasks</em>, and <em>keywords</em>, mostly! These are placed in <em>sections</em>.</p>
                        <div class="sc-idOhPF kGntgQ">
                            <div class="sc-dIUggk XavQL"></div>
                            <div>
                                <pre><code class="line-numbers language-robot"><code class="language-robot">*** Settings ***
Documentation     Starter robot for the Beginners&#x27; course.

*** Tasks ***
Say hello to the world
    Log    Hello World!

</code></code></pre>
                            </div>
                        </div>
                        <p>This robot has two sections. The <code>*** Settings ***</code> section typically contains documentation, possibly some <em>libraries</em>, and references to other files. This robot contains only documentation. The
                            <code>*** Tasks ***</code> section defines the task for the robot. This robot has one task:
                            <code>Say hello to the world</code>.</p>
                        <p>To complete the task, the robot calls the <code>Log</code> keyword. Think of keywords as functions, if you are familiar with programming. Keywords provide the robot with specific skills. In this case, writing to the log. The <code>Log</code>                        keyword takes one
                            <em>argument</em>. In this case, the argument is the text we want the robot to write to the log (
                            <code>Hello World</code>).</p>

                        <h4 id="what-we-learned">What we learned</h4>
                        <ul>
                            <li>A robot is made of files and possibly directories.</li>
                            <li>In Autosphere Studio, the Notebook mode provides a nice interface to work on your robots.</li>
                            <li>The notebook interface is made of cells that can be added, removed, copied, moved around.
                            </li>
                            <li>To run your robot, you can click on the <code>&gt;&gt;</code> button in the toolbar on the top.
                            </li>
                            <li>When you run your robot, a log file is created with all the details.</li>
                            <li><code>.robot</code> files are made of sections, each with a specific function.</li>
                            <li>Keywords are like functions in other programming languages, and they can accept arguments.
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Headings -->
        <aside class="cdpwWb">
            <div class="float-right m-b-50"><a class="next-btn" href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=getting-to-the-intranet">Next chapter <i class="material-icons">navigate_next</i></a></div>
            <div class="m-b-50"><a class="next-btn" href="documantation.php?page=Trainings-Certifications&node=beginners-course&subnode=marias-task"><i class="material-icons">navigate_before</i> Previous chapter</a></div>
        </aside>
    </div>
</section>


