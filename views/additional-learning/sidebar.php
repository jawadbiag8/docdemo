<div class="menu">
    <ul class="list">
        <li class="header">Additional Learning</li>
        <li class="<?php
                    if ($node == "Additional-learning") {
                        echo 'active';
                    }
                    ?>">
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">business_center</i>   
                <span>Additional Concepts of Autosphere</span>
            </a>
            <ul class="ml-menu">
                <li class="<?php
                            if ($subnode == "intro" || $subnode == '') {
                                echo 'active';
                            }
                            ?>">
                    <a href="documantation.php?page=additional-learning&node=Additional-learning&subnode=intro">
                        <span>Basic Concepts</span>
                    </a>
                </li>
                
                <li class="<?php
                            if ($subnode == "Autosphere-syntax") {
                                echo 'active';
                            }
                            ?>">
                    <a href="documantation.php?page=additional-learning&node=Additional-learning&subnode=Autosphere-syntax">
                        <span>Basic Syntax</span>
                    </a>
                </li>
                <li class="<?php
                            if ($subnode == "Autosphere-keywords") {
                                echo 'active';
                            }
                            ?>">
                    <a href="documantation.php?page=additional-learning&node=Additional-learning&subnode=Autosphere-keywords">
                        <span>Keywords</span>
                    </a>
                </li>    
                <li class="<?php
                            if ($subnode == "Autosphere-tasks") {
                                echo 'active';
                            }
                            ?>">
                    <a href="documantation.php?page=additional-learning&node=Additional-learning&subnode=Autosphere-tasks">
                        <span>Tasks</span>
                    </a>
                </li>  
                <li class="<?php
                            if ($subnode == "Autosphere-variables") {
                                echo 'active';
                            }
                            ?>">
                    <a href="documantation.php?page=additional-learning&node=Additional-learning&subnode=Autosphere-variables">
                        <span>Variables</span>
                    </a>
                </li>  
                <li class="<?php
                            if ($subnode == "how-to-use-for-loops") {
                                echo 'active';
                            }
                            ?>">
                    <a href="documantation.php?page=additional-learning&node=Additional-learning&subnode=how-to-use-for-loops">
                        <span>For Loops</span>
                    </a>
                </li>  
                <li class="<?php
                            if ($subnode == "while-loops") {
                                echo 'active';
                            }
                            ?>">
                    <a href="documantation.php?page=additional-learning&node=Additional-learning&subnode=while-loops">
                        <span>While loops</span>
                    </a>
                </li>  
                <li class="<?php
                            if ($subnode == "conditional-execution") {
                                echo 'active';
                            }
                            ?>">
                    <a href="documantation.php?page=additional-learning&node=Additional-learning&subnode=conditional-execution">
                        <span>Conditional Execution</span>
                    </a>
                </li>       
            </ul>
        </li>
    </ul>
</div>