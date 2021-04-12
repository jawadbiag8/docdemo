<div class="menu">
    <ul class="list">
        <li class="header">Product Manual</li>
        <li class="<?php
                    if ($node == "Autosphere") {
                        echo 'active';
                    }
                    ?>">
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">business_center</i>   
                <span>Autosphere Overview and Security</span>
            </a>
            <ul class="ml-menu">
                <li class="<?php
                            if ($subnode == "intro" || $subnode == '') {
                                echo 'active';
                            }
                            ?>">
                    <a href="documantation.php?page=product-manual&node=Autosphere&subnode=intro">
                        <span>Autosphere Overview</span>
                    </a>
                </li>
                <li class="<?php
                            if ($subnode == "Autosphere-security-guidelines") {
                                echo 'active';
                            }
                            ?>">
                    <a href="documantation.php?page=product-manual&node=Autosphere&subnode=Autosphere-security-guidelines">
                        <span>Autosphere Security Guidelines</span>
                    </a>
                </li>
                <li class="<?php
                            if ($subnode == "Autosphere-security-features") {
                                echo 'active';
                            }
                            ?>">
                    <a href="documantation.php?page=product-manual&node=Autosphere&subnode=Autosphere-security-features">
                        <span>Autosphere Security Features</span>
                    </a>
                </li>         
            </ul>
        </li>
    </ul>
</div>