<?php
	include 'header.php';
?>
<!-- Main Content -->
        <div class="maincontent">
            <div class="section-row home-section-1">
                <div class="hilight-homepage">
                    <img src="images/hilight.jpg">
                </div>
                <div class="bookmark head-title hide">
                    <h3 class="text-title">Bookmark</h3>
                    <i class="material-icons md-light all-next">chevron_right</i>
                    <i class="material-icons md-light all-next">chevron_right</i>
                </div>
                <div class="bookmark-list-row hide">
                <div class="block-row">
                <?php
                    $sql = "SELECT * FROM maread_story order by ID desc limit 6 ";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0){
                        while ($row = $result->fetch_assoc()) {
                            $title = $row['title'];
                            $likes = $row['likes'];
                            $img_path = $row['img_path'];
                            $slug = $row['slug'];
                ?>
                    <div class="col-3">
                        <a href="chapter_list.php?slug=<?php echo $slug;?>">
                        <div class="feature-thumbnail">
                            <img src="<?php echo $img_path; ?>">
                        </div>
                        </a>
                        <div class="title-content">
                            <h3 class="title-article"><a href="chapter_list.php?slug=<?php echo $slug;?>"><?php echo $title;?></a></h3>
                            <div class="favorite-data">
                                <i class="material-icons md-light favorite">favorite</i><span><?php echo $likes > 1000 ? floor_dec($likes/1000)."K" : $likes;?></span>
                            </div>
                        </div>
                    </div>
                <?php
                        }
                    }
                ?>
                    
                    <!-- <div class="col-3">
                        <div class="feature-thumbnail">
                            <img src="images/hilight.jpg">
                        </div>
                        <div class="title-content">
                            <h3 class="title-article">ขอบฟ้า ขอบฝั่ง สายน้ำและทะเล</h3>
                            <div class="favorite-data">
                                <i class="material-icons md-light favorite">favorite</i><span>1234567 </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="feature-thumbnail">
                            <img src="images/hilight.jpg">
                        </div>
                        <div class="title-content">
                            <h3 class="title-article">ขอบฟ้า ขอบฝั่ง สายน้ำและทะเล</h3>
                            <div class="favorite-data">
                                <i class="material-icons md-light favorite">favorite</i><span>1234567 </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="feature-thumbnail">
                            <img src="images/hilight.jpg">
                        </div>
                        <div class="title-content">
                            <h3 class="title-article">ขอบฟ้า ขอบฝั่ง สายน้ำและทะเล</h3>
                            <div class="favorite-data">
                                <i class="material-icons md-light favorite">favorite</i><span>1234567 </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="feature-thumbnail">
                            <img src="images/hilight.jpg">
                        </div>
                        <div class="title-content">
                            <h3 class="title-article">ขอบฟ้า ขอบฝั่ง สายน้ำและทะเล</h3>
                            <div class="favorite-data">
                                <i class="material-icons md-light favorite">favorite</i><span>1234567 </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="feature-thumbnail">
                            <img src="images/hilight.jpg">
                        </div>
                        <div class="title-content">
                            <h3 class="title-article">ขอบฟ้า ขอบฝั่ง สายน้ำและทะเล</h3>
                            <div class="favorite-data">
                                <i class="material-icons md-light favorite">favorite</i><span>1234567 </span>
                            </div>
                        </div>
                    </div> -->
                    </div>
                </div>
            </div>
            <div class="section-row home-section-2">
                <div class="latest head-title">
                    <h3 class="text-title">Latest</h3>
                    <i class="material-icons md-light all-next">chevron_right</i>
                    <i class="material-icons md-light all-next">chevron_right</i>
                </div>
                <div class="latest-list-row">
                <div class="block-row">
                <?php
                    $sql = "SELECT * FROM maread_story order by ID desc limit 12 ";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0){
                        while ($row = $result->fetch_assoc()) {
                            $title = $row['title'];
                            $likes = $row['likes'];
                            $img_path = $row['img_path'];
                            $slug = $row['slug'];
                ?>
                    <div class="col-3">
                        <a href="chapter_list.php?slug=<?php echo $slug;?>">
                        <div class="feature-thumbnail">
                            <img src="<?php echo $img_path; ?>">
                        </div>
                        </a>
                        <div class="title-content">
                            <h3 class="title-article"><a href="chapter_list.php?slug=<?php echo $slug;?>"><?php echo $title;?></a></h3>
                            <div class="favorite-data">
                                <i class="material-icons md-light favorite">favorite</i><span><?php echo $likes;?></span>
                            </div>
                        </div>
                    </div>
                <?php
                        }
                    }
                ?>
                    <!-- <div class="col-3">
                        <div class="feature-thumbnail">
                            <img src="images/hilight.jpg">
                        </div>
                        <div class="title-content">
                            <h3 class="title-article">ขอบฟ้า ขอบฝั่ง สายน้ำและทะเล</h3>
                            <div class="favorite-data">
                                <i class="material-icons md-light favorite">favorite</i><span>1234567 </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="feature-thumbnail">
                            <img src="images/hilight.jpg">
                        </div>
                        <div class="title-content">
                            <h3 class="title-article">ขอบฟ้า ขอบฝั่ง สายน้ำและทะเล</h3>
                            <div class="favorite-data">
                                <i class="material-icons md-light favorite">favorite</i><span>1234567 </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="feature-thumbnail">
                            <img src="images/hilight.jpg">
                        </div>
                        <div class="title-content">
                            <h3 class="title-article">ขอบฟ้า ขอบฝั่ง สายน้ำและทะเล ขอบฟ้า ขอบฝั่ง สายน้ำและทะเล</h3>
                            <div class="favorite-data">
                                <i class="material-icons md-light favorite">favorite</i><span>1234567 </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="feature-thumbnail">
                            <img src="images/hilight.jpg">
                        </div>
                        <div class="title-content">
                            <h3 class="title-article">ขอบฟ้า ขอบฝั่ง สายน้ำและทะเล</h3>
                            <div class="favorite-data">
                                <i class="material-icons md-light favorite">favorite</i><span>1234567 </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="feature-thumbnail">
                            <img src="images/hilight.jpg">
                        </div>
                        <div class="title-content">
                            <h3 class="title-article">ขอบฟ้า ขอบฝั่ง สายน้ำและทะเล ขอบฟ้า ขอบฝั่ง สายน้ำและทะเล</h3>
                            <div class="favorite-data">
                                <i class="material-icons md-light favorite">favorite</i><span>1234567 </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="feature-thumbnail">
                            <img src="images/hilight.jpg">
                        </div>
                        <div class="title-content">
                            <h3 class="title-article">ขอบฟ้า ขอบฝั่ง สายน้ำและทะเล</h3>
                            <div class="favorite-data">
                                <i class="material-icons md-light favorite">favorite</i><span>1234567 </span>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="block-row">
                    <div class="col-3">
                        <div class="feature-thumbnail">
                            <img src="images/hilight.jpg">
                        </div>
                        <div class="title-content">
                            <h3 class="title-article">ขอบฟ้า ขอบฝั่ง สายน้ำและทะเล</h3>
                            <div class="favorite-data">
                                <i class="material-icons md-light favorite">favorite</i><span>1234567 </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="feature-thumbnail">
                            <img src="images/hilight.jpg">
                        </div>
                        <div class="title-content">
                            <h3 class="title-article">ขอบฟ้า ขอบฝั่ง สายน้ำและทะเล</h3>
                            <div class="favorite-data">
                                <i class="material-icons md-light favorite">favorite</i><span>1234567 </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="feature-thumbnail">
                            <img src="images/hilight.jpg">
                        </div>
                        <div class="title-content">
                            <h3 class="title-article">ขอบฟ้า ขอบฝั่ง สายน้ำและทะเล</h3>
                            <div class="favorite-data">
                                <i class="material-icons md-light favorite">favorite</i><span>1234567 </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="feature-thumbnail">
                            <img src="images/hilight.jpg">
                        </div>
                        <div class="title-content">
                            <h3 class="title-article">ขอบฟ้า ขอบฝั่ง สายน้ำและทะเล</h3>
                            <div class="favorite-data">
                                <i class="material-icons md-light favorite">favorite</i><span>1234567 </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="feature-thumbnail">
                            <img src="images/hilight.jpg">
                        </div>
                        <div class="title-content">
                            <h3 class="title-article">ขอบฟ้า ขอบฝั่ง สายน้ำและทะเล</h3>
                            <div class="favorite-data">
                                <i class="material-icons md-light favorite">favorite</i><span>1234567 </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="feature-thumbnail">
                            <img src="images/hilight.jpg">
                        </div>
                        <div class="title-content">
                            <h3 class="title-article">ขอบฟ้า ขอบฝั่ง สายน้ำและทะเล</h3>
                            <div class="favorite-data">
                                <i class="material-icons md-light favorite">favorite</i><span>1234567 </span>
                            </div>
                        </div>
                    </div> -->
                    </div> 
                </div>
            </div>
            <div class="section-row home-section-3 home-popular">
                <div class="popular head-title">
                    <h3 class="text-title">Popular</h3>
                    <i class="material-icons md-light all-next">chevron_right</i>
                    <i class="material-icons md-light all-next">chevron_right</i>
                </div>
                <div class="popular-list">
                    <ul class="list-group pmd-list pmd-card-list">
                    <?php
                        $sql = "SELECT * FROM maread_story order by views desc limit 10 ";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            $i = 0;
                            while ($row = $result->fetch_assoc()) {
                                $i++;
                                $title = $row['title'];
                                $likes = $row['likes'];
                                $img_path = $row['img_path'];
                                $slug = $row['slug'];
                    ?>
                        <li class="list-group-item">
                            <div class="media-left number"><span><?php echo $i;?></span></div>
                            <div class="media-body">
                                <a href="chapter_list.php?slug=<?php echo $slug;?>"><h3 class="list-group-item-heading"><?php echo $title;?></h3></a>
                                <div class="favorite-data"><i class="material-icons md-light favorite">favorite</i><span><?php echo $likes;?></span></div>
                                <div class="category-data"><span>Romantic</span><i class="material-icons md-light">favorite</i></div>
                            </div>
                            <div class="media-right">
                                <div class="thumbnail">
                                    <img src="<?php echo $img_path;?>" />
                                </div>
                            </div>
                        </li>
                    <?php
                            }
                        }
                    ?>
                        <!-- <li class="list-group-item">
                            <div class="media-left number"><span>2</span></div>
                            <div class="media-body">
                                <h3 class="list-group-item-heading">ขอบฟ้า ขอบฝั่ง สายน้ำและทะเล</h3>
                                <div class="favorite-data"><i class="material-icons md-light favorite">favorite</i><span>1234567 </span></div>
                                <div class="category-data"><span>Drama</span><i class="material-icons md-light">favorite</i></div>
                            </div>
                            <div class="media-right">
                                <div class="thumbnail">
                                    <img src="images/hilight.jpg" />
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media-left number"><span>3</span></div>
                            <div class="media-body">
                                <h3 class="list-group-item-heading">ขอบฟ้า ขอบฝั่ง สายน้ำและทะเล</h3>
                                <div class="favorite-data"><i class="material-icons md-light favorite">favorite</i><span>1234567 </span></div>
                                <div class="category-data"><span>Drama</span><i class="material-icons md-light">favorite</i></div>
                            </div>
                            <div class="media-right">
                                <div class="thumbnail">
                                    <img src="images/hilight.jpg" />
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media-left number"><span>4</span></div>
                            <div class="media-body">
                                <h3 class="list-group-item-heading">ขอบฟ้า ขอบฝั่ง สายน้ำและทะเล</h3>
                                <div class="favorite-data"><i class="material-icons md-light favorite">favorite</i><span>1234567 </span></div>
                                <div class="category-data"><span>Drama</span><i class="material-icons md-light">favorite</i></div>
                            </div>
                            <div class="media-right">
                                <div class="thumbnail">
                                    <img src="images/hilight.jpg" />
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media-left number"><span>5</span></div>
                            <div class="media-body">
                                <h3 class="list-group-item-heading">ขอบฟ้า ขอบฝั่ง สายน้ำและทะเล</h3>
                                <div class="favorite-data"><i class="material-icons md-light favorite">favorite</i><span>1234567 </span></div>
                                <div class="category-data"><span>Drama</span><i class="material-icons md-light">favorite</i></div>
                            </div>
                            <div class="media-right">
                                <div class="thumbnail">
                                    <img src="images/hilight.jpg" />
                                </div>
                            </div>
                        </li> -->
                    </ul>
                    <!-- <ul class="list-group pmd-list pmd-card-list">
                        <li class="list-group-item">
                            <div class="media-left number"><span>6</span></div>
                            <div class="media-body">
                                <h3 class="list-group-item-heading">ขอบฟ้า ขอบฝั่ง สายน้ำและทะเล</h3>
                                <div class="favorite-data"><i class="material-icons md-light favorite">favorite</i><span>1234567 </span></div>
                                <div class="category-data"><span>Drama</span><i class="material-icons md-light">favorite</i></div>
                            </div>
                            <div class="media-right">
                                <div class="thumbnail">
                                    <img src="images/hilight.jpg" />
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media-left number"><span>7</span></div>
                            <div class="media-body">
                                <h3 class="list-group-item-heading">ขอบฟ้า ขอบฝั่ง สายน้ำและทะเล</h3>
                                <div class="favorite-data"><i class="material-icons md-light favorite">favorite</i><span>1234567 </span></div>
                                <div class="category-data"><span>Drama</span><i class="material-icons md-light">favorite</i></div>
                            </div>
                            <div class="media-right">
                                <div class="thumbnail">
                                    <img src="images/hilight.jpg" />
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media-left number"><span>8</span></div>
                            <div class="media-body">
                                <h3 class="list-group-item-heading">ขอบฟ้า ขอบฝั่ง สายน้ำและทะเล</h3>
                                <div class="favorite-data"><i class="material-icons md-light favorite">favorite</i><span>1234567 </span></div>
                                <div class="category-data"><span>Drama</span><i class="material-icons md-light">favorite</i></div>
                            </div>
                            <div class="media-right">
                                <div class="thumbnail">
                                    <img src="images/hilight.jpg" />
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media-left number"><span>9</span></div>
                            <div class="media-body">
                                <h3 class="list-group-item-heading">ขอบฟ้า ขอบฝั่ง สายน้ำและทะเล</h3>
                                <div class="favorite-data"><i class="material-icons md-light favorite">favorite</i><span>1234567 </span></div>
                                <div class="category-data"><span>Drama</span><i class="material-icons md-light">favorite</i></div>
                            </div>
                            <div class="media-right">
                                <div class="thumbnail">
                                    <img src="images/hilight.jpg" />
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media-left number"><span>10</span></div>
                            <div class="media-body">
                                <h3 class="list-group-item-heading">ขอบฟ้า ขอบฝั่ง สายน้ำและทะเล</h3>
                                <div class="favorite-data"><i class="material-icons md-light favorite">favorite</i><span>1234567 </span></div>
                                <div class="category-data"><span>Drama</span><i class="material-icons md-light">favorite</i></div>
                            </div>
                            <div class="media-right">
                                <div class="thumbnail">
                                    <img src="images/hilight.jpg" />
                                </div>
                            </div>
                        </li>
                    </ul> -->
                </div>
            </div>
        </div>

<?php
	include 'footer.php';
?>