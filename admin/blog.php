<?php
    require('./templates/header.php');
    require('./templates/menu.php');
    require('./list_article.php');
?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                               <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                                <div class="card" id="formarticle" style="display: none;">
                                    <div class="card-header">New Article</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Compose a post</h3>
                                        </div>
                                        <hr>
                                        <form action="publish.php" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="title" class="control-label mb-1">Title</label>
                                                <input type="text" id="title" name="title" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                             <div class="form-group">
                                                <label for="editor" class="control-label mb-1">Content</label>
                                                <textarea id="editor" rows="10" cols="12" name="content"></textarea>
                                            </div>
                                             <div class="form-group">
                                                <div class="col col-md-3">
                                                    <label for="avatar" class=" form-control-label">Image</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="avatar" name="avatar" class="form-control-file">
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm" name="publish">
                                                    <i class="fa fa-dot-circle-o"></i> Publish
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Reset
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        </div>   
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Recent Articles</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <select class="js-select2" name="property">
                                            <option selected="selected">All Properties</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <div class="rs-select2--light rs-select2--sm">
                                        <select class="js-select2" name="time">
                                            <option selected="selected">Today</option>
                                            <option value="">3 Days</option>
                                            <option value="">1 Week</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <button class="au-btn-filter">
                                        <i class="zmdi zmdi-filter-list"></i>filters</button>
                                </div>
                                <div class="table-data__tool-right">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small" id="newarticle">
                                        <i class="zmdi zmdi-plus"></i>Compose</button>
                                    <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                        <select class="js-select2" name="type">
                                            <option selected="selected">Export</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </th>
                                            <th>ID</th>
                                            <th>Author</th>
                                            <th>Title</th>
                                            <th>Date</th>
                                            <th>Comments</th>
                                            <th>Likes</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach ($articles as $article) {
                                        ?>

                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>FWR<?=bin2hex($article['id_article']);?></td>
                                            <td>
                                                <span class="block-email"><?= $article['article_author'];?></span>
                                            </td>
                                            <td class="desc"><?= $article['article_title'];?></td>
                                            <td><?= $article['date_post'];?></td>
                                            <td>
                                                <span class="status--process">0</span>
                                            </td>
                                            <td>0</td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                        <i class="zmdi zmdi-more"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->
                            </div>
                        </div>
    
    <?php
    require('./templates/footer.php');
?>