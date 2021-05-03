<div class="menu">
    <ul class="admin-list list">
        <li class="header">ADMIN Dashboard</li>
        <li class="li-1 active">
            <a href="javascript:postload();" class="menu-toggle">
                <i class="material-icons">supervisor_account</i>   
                <span>Users</span>
            </a>
            <ul class="ml-menu">
                <li class="li-1-1">
                    <a href="javascript:postload();" class="toggled waves-effect waves-block">
                        <i class="material-icons">view_list</i>   
                        <span>List User</span>
                    </a>
                </li>
                <li class="li-1-2 active">
                    <a href="javascript:adduser();">
                        <i class="material-icons">person_add</i>   

                        <span>Add User</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="li-2">
            <a href="javascript:listkeyword();" class="menu-toggle">
                <i class="material-icons">keyboard</i>   
                <span>Keywords</span>
            </a>
            <ul class="ml-menu">
                <li class="li-2-1">
                    <a href="javascript:listkeyword();" class="toggled waves-effect waves-block">
                        <i class="material-icons">view_list</i>   
                        <span>List Keywords</span>
                    </a>
                </li>
                <li class="li-2-2">
                    <a href="javascript:addkeyword();" class="toggled waves-effect waves-block">
                        <i class="material-icons">playlist_add</i>   
                        <span>Add Keywords</span>
                    </a>
                </li>
            </ul>
        </li>
        <?php if ($_SESSION['data']['type'] == 'sadmin') { ?>
            <li class="li-3">
                <a href="javascript:listcategory();" class="menu-toggle">
                    <i class="material-icons">control_point</i>   
                    <span>Categories</span>
                </a>
                <ul class="ml-menu">
                    <li class="li-3-1">
                        <a href="javascript:listcategory();">
                            <i class="material-icons">view_list</i>   
                            <span>List Categories</span>
                        </a>
                    </li>
                    <li class="li-3-2">
                        <a href="javascript:addcategory();">
                            <i class="material-icons">playlist_add</i>   
                            <span>Add Categories</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="li-4">
                <a href="javascript:listsubcategory();" class="menu-toggle">
                    <i class="material-icons">control_point</i>   
                    <span>Subcategories</span>
                </a>
                <ul class="ml-menu">
                    <li class="li-4-1">
                        <a href="javascript:listsubcategory();">
                            <i class="material-icons">view_list</i>   
                            <span>List Subcategories</span>
                        </a>
                    </li>
                    <li class="li-4-2">
                        <a href="javascript:addsubcategory();">
                            <i class="material-icons">playlist_add</i>   
                            <span>Add Subcategories</span>
                        </a>
                    </li>
                </ul>
            </li>
        <?php } ?>
    </ul>
</div>