<?php
include("../config/database.php");
$search_string = clean_string($_POST['query'], $conn);
$query = "SELECT * FROM `keyword_table` WHERE name LIKE '%$search_string%' OR description LIKE '%$search_string%'";
$searchdata = mysqli_query($conn, $query)or die(mysqli_error($db));
?>
<div class="container-fluid">

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Search Result
                    </h2>

                </div>
                <div class="body">
                    <h4 class="m-b-20">Filter</h4>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            <input type="checkbox" class="filled-in gzHPhu" value="Articles" checked="Articles" id="Articles">
                            <label for="Articles">Articles</label>
                        </span>
                        <span class="input-group-addon">
                            <input type="checkbox" class="filled-in gzHPhu" checked="" value="Libraries" id="Libraries">
                            <label for="Libraries">Libraries</label>
                        </span>
                        <span class="input-group-addon">
                            <input type="checkbox" class="filled-in gzHPhu" checked="" value="Keywords" id="Keywords">
                            <label for="Keywords">Keywords</label>
                        </span>
                    </div>
                    <?php
                    while ($row = mysqli_fetch_array($searchdata)) {
                        ?>
                        <div class="sc-iqHYGH ZQcnW <?php echo $row['type']; ?>">
                            <div class="sc-crrsfI dpELVT">
                                <a href="../views/documantation.php?page=<?php echo $row['page']; ?>&node=<?php echo $row['node']; ?>&subnode=<?php echo $row['subnode']; ?>"><h3><?php echo ucfirst($row['name']); ?></h3></a><span class="sc-dQppl cQZIoF"><?php echo ucfirst($row['type']); ?></span>
                            </div>
                            <!--<span class="sc-bqyKva cbbWnj">RPA Framework / RPA.Browser</span>-->
                            <div class="sc-kstrdz btjemE">
                                <p class="test">
                                    <?php echo ucfirst($row['description']); ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
//        var SlectedList = new Array(['Articles', true], ['Libraries', true], ['Keywords', true]);
        $(".gzHPhu").on('change', function () {
            if (!$(this).prop("checked")) {
                $('.' + $(this).val()).css('display', 'none');
            } else {
                $('.' + $(this).val()).css('display', 'block');
            }

        });

        search = $("#searchtext").val();
        $(".test:contains('" + search + "')").each(function () {
            var regex = new RegExp(search, 'gi');
            $(this).html($(this).text().replace(regex, "<span class='red'>" + search + "</span>"));
        });
        $(".test:contains('" + capitalizeFirstLetter(search) + "')").each(function () {
            var regex = new RegExp(search, 'gi');
            $(this).html($(this).text().replace(regex, "<span class='red'>" + capitalizeFirstLetter(search) + "</span>"));
        });
    });
</script>
<!--while ($row = mysqli_fetch_array($searchdata)) {
$data[] = $row;-->