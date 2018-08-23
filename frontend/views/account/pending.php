<?php
/* @var $this yii\web\View */
?>
<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 page-sidebar">
                <?php echo $this->render('_menu', []) ?>
            </div>

            <div class="col-sm-9 page-content">
                <div class="inner-box">
                    <h2 class="title-2"><i class="icon-hourglass"></i> Chờ duyệt </h2>
                    <div class="table-responsive">
                        <div class="table-action">
                            <label for="checkAll">
                                <input type="checkbox" id="checkAll">
                                Select: All | <a href="#" class="btn btn-sm btn-danger">Delete <i
                                            class="glyphicon glyphicon-remove "></i></a> </label>
                            <div class="table-search pull-right col-xs-7">
                                <div class="form-group">
                                    <label class="col-xs-5 control-label text-right">Search <br>
                                        <a title="clear filter" class="clear-filter" href="#clear">[clear]</a>
                                    </label>
                                    <div class="col-xs-7 searchpan">
                                        <input type="text" class="form-control" id="filter">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table id="addManageTable"
                               class="table table-striped table-bordered add-manage-table table demo"
                               data-filter="#filter" data-filter-text-only="true">
                            <thead>
                            <tr>
                                <th data-type="numeric" data-sort-initial="true"></th>
                                <th> Photo</th>
                                <th data-sort-ignore="true"> Adds Details</th>
                                <th data-type="numeric"> Price</th>
                                <th> Option</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td style="width:2%" class="add-img-selector">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">
                                        </label>
                                    </div>
                                </td>
                                <td style="width:14%" class="add-img-td"><a href="ads-details.html"><img
                                                class="thumbnail  img-responsive"
                                                src="images/item/FreeGreatPicture.com-46407-nexus-4-starts-at-199.jpg"
                                                alt="img"></a></td>
                                <td style="width:58%" class="ads-details-td">
                                    <div>
                                        <p><strong> <a href="ads-details.html" title="Brend New Nexus 4">Brend New
                                                    Nexus 4</a> </strong></p>
                                        <p><strong> Posted On </strong>:
                                            02-Oct-2014, 04:38 PM </p>
                                        <p><strong>Visitors </strong>: 221 <strong>Located In:</strong> Hà Nội
                                        </p>
                                    </div>
                                </td>
                                <td style="width:16%" class="price-td">
                                    <div><strong> $199</strong></div>
                                </td>
                                <td style="width:10%" class="action-td">
                                    <div>
                                        <p><a class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i> Edit </a>
                                        </p>
                                        <p><a class="btn btn-danger btn-sm"> <i class=" fa fa-trash"></i> Delete
                                            </a></p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:2%" class="add-img-selector">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">
                                        </label>
                                    </div>
                                </td>
                                <td style="width:14%" class="add-img-td"><a href="ads-details.html"><img
                                                class="thumbnail  img-responsive"
                                                src="images/item/FreeGreatPicture.com-46403-google-drops-nexus-4-price-now-starts-at-199-on-play-store.jpg"
                                                alt="img"></a></td>
                                <td style="width:58%" class="ads-details-td">
                                    <div>
                                        <p><strong> <a href="ads-details.html"
                                                       title="Google drops price of Nexus 4 smartphone">Google drops
                                                    price of Nexus 4 smartphone </a> </strong></p>
                                        <p><strong> Posted On </strong>:
                                            02-Oct-2014, 04:38 PM </p>
                                        <p><strong>Visitors </strong>: 221 <strong>Located In:</strong> Hà Nội
                                        </p>
                                    </div>
                                </td>
                                <td style="width:16%" class="price-td">
                                    <div><strong> $464</strong></div>
                                </td>
                                <td style="width:10%" class="action-td">
                                    <div>
                                        <p><a class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i> Edit </a>
                                        </p>
                                        <p><a class="btn btn-danger btn-sm"> <i class=" fa fa-trash"></i> Delete
                                            </a></p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:2%" class="add-img-selector">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">
                                        </label>
                                    </div>
                                </td>
                                <td style="width:14%" class="add-img-td"><a href="ads-details.html"><img
                                                class="thumbnail  img-responsive"
                                                src="images/item/FreeGreatPicture.com-46405-google-drops-price-of-nexus-4-smartphone.jpg"
                                                alt="img"></a></td>
                                <td style="width:58%" class="ads-details-td">
                                    <div>
                                        <p><strong> <a href="ads-details.html" title="Brend New Nexus 4">Google
                                                    drops Nexus 4 by $100, offers 15 day price protection refund </a>
                                            </strong></p>
                                        <p><strong> Posted On </strong>:
                                            02-Oct-2014, 04:38 PM </p>
                                        <p><strong>Visitors </strong>: 221 <strong>Located In:</strong> Hà Nội
                                        </p>
                                    </div>
                                </td>
                                <td style="width:16%" class="price-td">
                                    <div><strong> $100</strong></div>
                                </td>
                                <td style="width:10%" class="action-td">
                                    <div>
                                        <p><a class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i> Edit </a>
                                        </p>
                                        <p><a class="btn btn-danger btn-sm"> <i class=" fa fa-trash"></i> Delete
                                            </a></p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:2%" class="add-img-selector">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">
                                        </label>
                                    </div>
                                </td>
                                <td style="width:14%" class="add-img-td"><a href="ads-details.html"><img
                                                class="thumbnail  img-responsive"
                                                src="images/item/FreeGreatPicture.com-46404-google-drops-nexus-4-by-100-offers-15-day-price-protection-refund.jpg"
                                                alt="img"></a></td>
                                <td style="width:58%" class="ads-details-td">
                                    <div>
                                        <p><strong> <a href="ads-details.html" title="Brend New Nexus 4">Brend New
                                                    Nexus 4</a> </strong></p>
                                        <p><strong> Posted On </strong>:
                                            02-Oct-2014, 04:38 PM </p>
                                        <p><strong>Visitors </strong>: 221 <strong>Located In:</strong> Hà Nội
                                        </p>
                                    </div>
                                </td>
                                <td style="width:16%" class="price-td">
                                    <div><strong> $199</strong></div>
                                </td>
                                <td style="width:10%" class="action-td">
                                    <div>
                                        <p><a class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i> Edit </a>
                                        </p>
                                        <p><a class="btn btn-danger btn-sm"> <i class=" fa fa-trash"></i> Delete
                                            </a></p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:2%" class="add-img-selector">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">
                                        </label>
                                    </div>
                                </td>
                                <td style="width:14%" class="add-img-td"><a href="ads-details.html"><img
                                                class="thumbnail  img-responsive" src="images/item/tp/Image00014.jpg"
                                                alt="img"></a></td>
                                <td style="width:58%" class="ads-details-td">
                                    <div>
                                        <p><strong> <a href="ads-details.html" title="SAMSUNG GALAXY S CORE Duos ">SAMSUNG
                                                    GALAXY S CORE Duos </a> </strong></p>
                                        <p><strong> Posted On </strong>:
                                            02-Oct-2014, 04:38 PM </p>
                                        <p><strong>Visitors </strong>: 221 <strong>Located In:</strong> Hà Nội
                                        </p>
                                    </div>
                                </td>
                                <td style="width:16%" class="price-td">
                                    <div><strong> $150</strong></div>
                                </td>
                                <td style="width:10%" class="action-td">
                                    <div>
                                        <p><a class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i> Edit </a>
                                        </p>
                                        <p><a class="btn btn-danger btn-sm"> <i class=" fa fa-trash"></i> Delete
                                            </a></p>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>

    </div>

</div>

