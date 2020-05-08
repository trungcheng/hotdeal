<?php $__env->startSection('page'); ?>Cập nhật danh mục
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageCss'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div ng-controller="CategoryController" ng-init="loadInitCreate('<?php echo e($category['type']); ?>')">

    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top:30px;">
        <h1>
            Cập nhật danh mục
            <a href="<?php echo e(route('categories')); ?>" class="pull-right btn btn-success btn-sm">Quay lại</a>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-body">
                        <form id="formProcess" onsubmit="return false;" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <input type="hidden" id="id" name="id" value="<?php echo e($category->id); ?>">
                                <div class="form-group">
                                    <label>Tên danh mục</label>
                                    <input value="<?php echo e($category->name); ?>" name="name" type="text" class="form-control title" placeholder="Tên danh mục...">
                                </div>
                                <div class="form-group">
                                    <label>Loại danh mục</label>
                                    <select ng-change="loadChangeCateType(type)" ng-model="type" class="form-control status" name="type">
                                        <option <?php echo e(($category['type'] == 'product') ? 'selected' : ''); ?> value="product">Sản phẩm</option>
                                        <option <?php echo e(($category['type'] == 'article') ? 'selected' : ''); ?> value="article">Bài viết</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Thuộc danh mục</label>
                                    <select class="form-control cate" name="parent_id">
                                        <option ng-selected="<?php echo e($category['parent_id']); ?> == 0" value="0">Không thuộc danh mục nào</option>
                                        <option ng-selected="item.id == <?php echo e($category['parent_id']); ?>" class="cateLevel cate-level-{{ item.depth }}" value="{{ item.id }}" ng-repeat="item in parentCates">
                                            {{ item.depth == 1 ? '----- ' : item.depth == 2 ? '---------- ' : item.depth == 3 ? '--------------- ' : '' }}{{ item.name }}
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Ảnh icon</label>
                                    <input value="<?php echo e($category->icon); ?>" name="icon" type="text" size="48" class="form-control" id="xFilePath" />
                                    <button class="btn btn-primary btn-upload" onclick="openPopup()">Tải ảnh lên</button>
                                </div>
                                <div class="form-group">
                                    <label>Thứ tự</label>
                                    <input class="form-control status" type="number" name="order" max="99" min="1" value="<?php echo e($category->order); ?>" />
                                </div>
                                <div class="form-group">
                                    <label>Hiển thị lên trang chủ</label>
                                    <select class="form-control status" name="is_home">
                                        <option <?php echo e(($category['is_home'] == 1) ? 'selected' : ''); ?> value="1">Có</option>
                                        <option <?php echo e(($category['is_home'] == 0) ? 'selected' : ''); ?> value="0">Không</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select class="form-control status" name="status">
                                        <option <?php echo e(($category['status'] == 1) ? 'selected' : ''); ?> value="1">Hoạt động</option>
                                        <option <?php echo e(($category['status'] == 0) ? 'selected' : ''); ?> value="0">Khóa</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>SEO Title</label>
                                    <input value="<?php echo e($category->seo_title); ?>" name="seo_title" type="text" class="form-control slug" placeholder="SEO Title...">
                                </div>
                                <div class="form-group">
                                    <label>SEO Description</label>
                                    <input value="<?php echo e($category->seo_desc); ?>" name="seo_desc" type="text" class="form-control slug" placeholder="SEO Description...">
                                </div>
                                <div class="form-group">
                                    <label>SEO Keyword</label>
                                    <input value="<?php echo e($category->seo_keyword); ?>" name="seo_keyword" type="text" class="form-control slug" placeholder="SEO Keyword (cách nhau bởi dấu phẩy)...">
                                </div>
                                <div class="form-group">
                                    <label>SEO Content</label>
                                    <textarea class="form-control" id="seo_content"><?php echo $category->seo_content; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>SEO Schema</label>
                                    <textarea class="form-control" id="seo_schema"><?php echo $category->seo_schema; ?></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button ng-click="process('update')" type="button" class="btn btn-primary">Cập nhật</button>
                                <a href="<?php echo e(route('categories')); ?>" class="btn btn-default">Quay lại</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>

        </div>
    </section>

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageJs'); ?>
    <?php echo Html::script('backend/js/angular/controllers/category.controller.js'); ?>


    <script type="text/javascript">
        CKEDITOR.replace('seo_content', {height: 300}); 
        CKEDITOR.replace('seo_schema', {height: 300}); 

        function openPopup() {
            CKFinder.popup( {
                chooseFiles: true,
                onInit: function( finder ) {
                    finder.on( 'files:choose', function( evt ) {
                        var file = evt.data.files.first();
                        document.getElementById( 'xFilePath' ).value = file.getUrl();
                    } );
                    finder.on( 'file:choose:resizedImage', function( evt ) {
                        document.getElementById( 'xFilePath' ).value = evt.data.resizedUrl;
                    } );
                }
            } );
        }
        
        function openPopupMulti(id) {
            CKFinder.popup( {
                chooseFiles: true,
                onInit: function( finder ) {
                    finder.on( 'files:choose', function( evt ) {
                        var file = evt.data.files.first();
                        document.getElementById( 'xFilePath'+id ).value = file.getUrl();
                    });
                    finder.on( 'file:choose:resizedImage', function( evt ) {
                        document.getElementById( 'xFilePath'+id ).value = evt.data.resizedUrl;
                    });
                }
            });
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>