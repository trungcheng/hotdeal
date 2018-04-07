
(function($, app) {
    "use strict";

    var instance = function() {

        var $table,
            $addBtn,
            self = this;

        var options = {
            object        : '',
            paging        : true,
            search        : true,
            sort          : true,
            extraData     : {},
            serverSide    : true,
            colDefs       : [],
            pageLength    : 10,
            data          : null,
            rowEvents     : {
                add   : true,
                edit  : true,
                delete: true,
                view  : true,
                clone : true
            },
            endpoint      : {
                GET    : null,
                POST   : null,
                DELETE : null,
                FORM   : null,
                VIEW   : null,
                CLONE  : null
            },
            pagingSettings: {
                "lengthMenu": [
                    [10, 25, 50, 1000000],
                    [10, 25, 50, "All"]
                ]
            },
            classes       : {
                loader    : {
                    add  : '.loader-add',
                    edit : '.loader-edit',
                    view : '.loader-view',
                    clone: '.loader-clone'
                },
                handlerRow: {
                    view  : '.view',
                    edit  : '.edit',
                    delete: '.delete',
                    clone : '.clone'
                }
            },
            language : {
                addLoading  : 'Loading Add',
                editLoading : 'Loading Edit',
                viewLoading : 'Loading View',
                cloneLoading: 'Loading Clone'
            },
            callbacks: {
                onSelectedRow    : function () {},
                onDeSelectedRow  : function () {},
                onAfterAddNewRow : function () {},
                onOpenSelectedRow: function () {},
                onEditSelectedRow: function () {},
                onViewSelectedRow: function () {},
                onCloneSelectedRow: function () {},
                onAfterRemoveRow : function () {},
                onAfterUpdateRow : function () {},
                onRowCallback    : function () {},
                onImportCallback : function () {},
                onCtxMenuCallback: function () {},
                onHeaderCallback : function () {},
                onEditPopup      : function () {},
                drawCallback     : function () {},
                onInitComplete   : function () {},
                onBeforSubmit    : function() {},
                onAfterSuccessAdd: function () {},
                onAfterSuccessClone: function () {}
            }
        };

        this.render = function(table, addBtn, opts) {

            if(!table.length || $.isEmptyObject(opts)) return false;

            $table = table;
            $addBtn = addBtn;
            options = $.extend(options, opts);

            $table = $table.dataTable(getOptions());
            $table.data('instance', self);
        };

        this.redraw = function() {
            $table.api().draw(false);
        };

        this.api = function() {
            return $table.api();
        };

        this.rowLoading = function(text, cls) {
            return rowLoading(text, cls);
        };

        this.btnCloseRowHanlde = function(cb){
            var $this = $(this);
            var $row = $this.closest('tr');
            if ($row.length) $row.remove();
            if(typeof cb === 'function') cb();
            return false;
        };

        var bindEvents = function() {

            if(options.rowEvents.clone) {
                $(options.classes.handlerRow.clone, $table).click(cloneRowHandler);
            }

            if(options.rowEvents.view) {
                $(options.classes.handlerRow.view, $table).click(viewRowHandler);
            }

            if(options.rowEvents.edit) {
                $(options.classes.handlerRow.edit, $table).click(editRowHandler);
            }

            if(options.rowEvents.delete) {
                $(options.classes.handlerRow.delete, $table).click(removeRowHandler);
            }

            $table.on('error.dt', function(e, settings, techNote, message) {
                console.log(arguments);
            });
        };

        var rowLoading = function(text, cls) {

            var $loader = $(app.f(ui.loading, {
                text: text
            }));

            $loader = $($loader.outerHTML());
            $loader.removeClass('hide');

            var numCols = $('th', $table).length;

            var $row = $("<tr role='row' class='" + cls + "'><td colspan=" + numCols + "></td></tr>");
            $('td', $row).append($loader);

            return $row;
        };

        var addRowHandler = function() {
            //Remove current form add
            $('.form-add-table').remove();
            $('tr[class^="edit-row-"]', $table).remove();
            $('tr[class^="schedule-"]', $table).remove();
            $('.buttonCancel', $('.edit-form', $table)).trigger('click');
            var $row = rowLoading(options.language.addLoading, 'form-add-table');
            var $this = $(this);
            var cData = $this.data('custom');
            if(!$.isPlainObject(cData)) cData = {};

            //Append to table
            $row.insertBefore($('tbody tr:first', $table));
            var $loader = $('.loader-add', $row);
            app.ajax(
                options.endpoint.FORM,
                cData,
                'GET',
                'html',
                false,
                function(res) {

                    var $content = $(res);
                    $('td', $row).append($content);
                    $loader.fadeOut(
                        400,
                        function() {
                            $content.fadeIn();
                        }
                    );
                    eventFormRow($content);
                    
                    if(options.callbacks.onAfterAddNewRow) options.callbacks.onAfterAddNewRow($row);
                    $('html,body').animate({scrollTop: $row.offset().top}, 1500);
                }
            );
        };

        var removeRowHandler = function() {
            $('.popover').popover('hide');
            var $this = $(this);
            var $selfRow = $this.closest('tr');
            var id = $selfRow.prop('id');

            if(id === '') return false;

            swal({
                title: "Are you sure you want to delete?",
                text: "You will not be able to recover this.",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false,
                showLoaderOnConfirm : true
            }, function(){

                app.ajax(
                    [options.endpoint.DELETE, '/', id].join(''),
                    {},
                    'POST',
                    'json',
                    '',
                    function (response) {

                        if (response.status) {
                            swal('Deleted!', 'Your entry has been been deleted.', "success");
                            self.redraw();
                        }
                        else {
                            sweetAlert("Oops...", response.message, "error");
                        }
                    }
                );
            });
        };

        var cloneRowHandler = function() {
            $('.form-add-table', $table).remove();
            $('.buttonCancel', $('.edit-form', $table)).trigger('click');
            $('.buttonCancel', $('.view-form', $table)).trigger('click');
            $('.buttonCancel', $('.clone-form', $table)).trigger('click');

            var $this = $(this);
            var $selfRow = $this.closest('tr');
            var id = $selfRow.prop('id');
            if(id === '') return false;

            $('.clone-row-' + id, $table).remove();
            $('tr[class$="'+id+'"]', $table).remove();

            var $row = rowLoading(options.language.cloneLoading, 'clone-row-' + id);

            //Append to table
            $row.insertAfter($selfRow);
            var $loader = $('.loader-add', $row);

            app.ajax(
                [options.endpoint.CLONE, '/', $selfRow.prop('id')].join(''),
                {},
                'GET',
                'html',
                false,
                function(res) {

                    var $content = $(res);
                    $('td', $row).append($content);
                    $loader.fadeOut(
                        400,
                        function() {
                            $content.fadeIn();
                        }
                    );

                    eventFormRow($content);

                    if(options.callbacks.onCloneSelectedRow) options.callbacks.onCloneSelectedRow($row);

                    $('html,body').animate({scrollTop: $selfRow.offset().top}, 1500);
                }
            );

            return false;
        };

        var viewRowHandler = function() {
            $('.form-add-table', $table).remove();
            $('.buttonCancel', $('.edit-form', $table)).trigger('click');
            $('.buttonCancel', $('.view-form', $table)).trigger('click');
            var $this = $(this);
            var $selfRow = $this.closest('tr');
            var id = $selfRow.prop('id');
            if(id === '') return false;

            $('.view-row-' + id, $table).remove();
            $('tr[class$="'+id+'"]', $table).remove();

            var $row = rowLoading(options.language.viewLoading, 'view-row-' + id);

            //Append to table
            $row.insertAfter($selfRow);
            var $loader = $('.loader-add', $row);

            app.ajax(
                [options.endpoint.VIEW, '/', $selfRow.prop('id')].join(''),
                {},
                'GET',
                'html',
                false,
                function(res) {

                    var $content = $(res);
                    $('td', $row).append($content);
                    $loader.fadeOut(
                        400,
                        function() {
                            $content.fadeIn();
                        }
                    );

                    eventFormRow($content);

                    if(options.callbacks.onViewSelectedRow) options.callbacks.onViewSelectedRow($row);

                    $('html,body').animate({scrollTop: $selfRow.offset().top}, 1500);
                }
            );

            return false;
        };

        var editRowHandler = function() {
            $('.form-add-table', $table).remove();
            $('.buttonCancel', $('.edit-form', $table)).trigger('click');
            $('.buttonCancel', $('.view-form', $table)).trigger('click');
            var $this = $(this);
            var $selfRow = $this.closest('tr');
            var id = $selfRow.prop('id');
            if(id === '') return false;
            $('.edit-row-' + id, $table).remove();
            $('tr[class$="'+id+'"]', $table).remove();

            var $row = rowLoading(options.language.editLoading, 'edit-row-' + id);

            //Append to table
            $row.insertAfter($selfRow);
            var $loader = $('.loader-add', $row);

            app.ajax(
                [options.endpoint.FORM, '/', $selfRow.prop('id')].join(''),
                {},
                'GET',
                'html',
                false,
                function(res) {

                    var $content = $(res);
                    $('td', $row).append($content);
                    $loader.fadeOut(
                        400,
                        function() {
                            $content.fadeIn();
                        }
                    );

                    eventFormRow($content);

                    if(options.callbacks.onEditSelectedRow) options.callbacks.onEditSelectedRow($row);

                    $('html,body').animate({scrollTop: $selfRow.offset().top}, 1500);
                }
            );

            return false;
        };

        var eventFormRow = function(wrap) {
            $(":input", wrap).inputmask();
            $('.row-form', wrap).parsley({});

            var $chosen = $('.chosen-select', wrap);

            if($chosen.length ) {
                // trigger to parsley apply to chosen box
                $chosen.chosen({disable_search_threshold: 10});
                $chosen.addClass('select-choosen-hidden');
            }

            if($('.filestyle', wrap).length) {
                $('.filestyle', wrap).filestyle();
            }

            wrap.on('click','.buttonCancel, .buttonClose', function(){
                console.log('close');
                $('.popover').popover('hide');
                $(this).closest('tr').remove();
                return false;
            });

            if(options.callbacks.onInitGetRow) options.callbacks.onInitGetRow(wrap);

            wrap.on('click', '.buttonAdd, .buttonUpdate, .buttonClone', formSubmit);
        };

        var formSubmit = function() {
            var $this = $(this);
            var $form = $this.closest('form');
            var id = $form.data('id');

            $('body').trigger('btnAddUpdate.click');

            if($form.valid()) {

                var $chosen = $('.chosen-select', $form);
                if($chosen.length) {
                    // $chosen.closest('div').find('.chosen-single').removeClass('error');
                    $.each($chosen, function(i){
                        var $this = $($chosen[i]);

                        $this.closest('div').find('.chosen-single').removeClass('error');
                        $this.closest('div').find('.chosen-container-multi ul').removeClass('error');
                    });
                }

                if(validUrl($form) > 0) return false;
                if (validLength($form) > 0) return false;

                var formType = 'add';

                if (id != undefined && id !== '') {
                    formType = typeof $form.data('type') === 'undefined' ? 'edit' : $form.data('type');
                }


                if(options.callbacks.onBeforSubmit && typeof options.callbacks.onBeforSubmit === 'function')
                    options.callbacks.onBeforSubmit($form);


                var formRequest = function() {
                    swal.disableButtons();
                    var    urlSave = options.endpoint.POST;
                    if (id) {
                        urlSave = [options.endpoint.POST, '/', id].join('');
                    }
                    $.ajax({
                        url        : urlSave,
                        type       : 'POST',
                        data       : new FormData($form[0]),
                        dataType   : 'json',
                        cache      : false,
                        contentType: false,
                        processData: false,
                        success    : function (response) {
                            if (response.status) {
                                if (formType === 'add' && options.callbacks.onAfterSuccessAdd && typeof options.callbacks.onAfterSuccessAdd === 'function') {
                                    options.callbacks.onAfterSuccessAdd(response, self);
                                } 
                                else if(formType === 'clone' && options.callbacks.onAfterSuccessClone && typeof options.callbacks.onAfterSuccessClone === 'function') {
                                    options.callbacks.onAfterSuccessClone(response, self);
                                }
                                else {
                                    swal(formType === 'add' ? 'Added!' : (formType === 'edit' ? 'Updated!' : 'Cloned!'), response.message, "success");
                                    self.redraw();
                                    setTimeout(function () {
                                        swal.enableButtons();

                                    }, 100);
                                }

                            } else {
                                sweetAlert("Oops...", response.message, "error");
                                setTimeout(function () {
                                    swal.enableButtons();

                                }, 100);
                            }
                        },
                        error      : function () {
                            sweetAlert("Oops...", "An error occurred while processing please try again later!", "error");
                            setTimeout(function () {
                                swal.enableButtons();

                            }, 100);
                        },
                        complete   : function () {

                        }
                    });
                };

                if (formType === 'add') {
                    swal({
                        title: "Are you sure you want to add this entry?",
                        text: "You can change the contents in the table if you want.",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "green",
                        confirmButtonText: "Yes, add it!",
                        closeOnConfirm: false,
                        showLoaderOnConfirm : true
                    }, formRequest);
                } else if (formType === 'edit') {
                    swal({
                        title: "Are you sure you want to update this entry?",
                        text: "You can change the contents in the table if you want.",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "green",
                        confirmButtonText: "Yes, update it!",
                        closeOnConfirm: false,
                        showLoaderOnConfirm : true
                    }, formRequest);
                } else {
                    swal({
                        title: "Are you sure you want to clone this entry?",
                        text: "You can change the contents in the table if you want.",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "green",
                        confirmButtonText: "Yes, clone it!",
                        closeOnConfirm: false,
                        showLoaderOnConfirm : true
                    }, formRequest);
                }
                // hot fix break tab button when use sweet alert
                window.onkeydown = null;
                window.onfocus = null;
            } else {
                var $chosen = $('.chosen-select', $form);

                if($chosen.length) {
                    $.each($chosen, function(i){
                        var $this = $($chosen[i]);
                        if($this.attr('required') === 'required' && !$this.val()) {
                            $this.closest('div').find('.chosen-single').addClass('error');
                            $this.closest('div').find('.chosen-container-multi>ul').addClass('error');
                        }
                    });
                }
            }

            $('input:invalid', $form).removeClass('input-valid').addClass('input-invalid');
            $('input:valid', $form).removeClass('input-invalid').removeClass('input-error').addClass('input-valid');
            $('input.error', $form).removeClass('input-valid').addClass('input-error');

            $('input:invalid', $form).siblings('.error_message').show();
            $('input:valid', $form).siblings('.error_message').hide();

            $('textarea:invalid', $form).removeClass('input-valid').addClass('input-invalid');
            $('textarea:valid', $form).removeClass('input-invalid').addClass('input-valid');

            $('textarea:invalid', $form).siblings('.error_message').show();
            $('textarea:valid', $form).siblings('.error_message').hide();

            $('input[type="file"].input-invalid').each(function() {
                $(this).closest('.row').find('.error-alert').show();
            });
            $('input[type="file"].input-valid').each(function() {
                $(this).closest('.row').find('.error-alert').hide();
            });

            return false;
        };

        var validLength = function (wrap) {
            var isError = 0;

            $('input, textarea', wrap).each(function() {
                var $this = $(this),
                    length = $this.data('length'),
                    ignoreChar = $this.data('ignorechar'),
                    inputLength = $this.val().split(ignoreChar).join('').length;

                if (length != undefined && inputLength != length) {
                    $this.removeClass('valid input-valid').addClass('error input-invalid input-error');
                    isError++;
                } else {
                    $this.removeClass('error input-invalid input-error').addClass('valid input-valid');
                }
            });

            return isError;
        };

        var validUrl = function(wrap) {
            var isError = 0;

            $('.edit-form input[type=url]', wrap).each(function() {
                var str = $(this).val();
                var regex = /^(?:(?:(?:https?|ftp):)?\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})).?)(?::\d{2,5})?(?:[/?#]\S*)?$/i;

                if(!regex .test(str)) {
                    $(this).addClass('error input-invalid input-error');
                    isError++;
                } else {
                    $(this).removeClass('error input-invalid input-error').addClass('valid input-valid');
                }
            });
            return isError;
        };

        var getOptions = function() {

            var opts = {
                autoWidth: false,
                processing: false,
                columns: options.colDefs,
                language: {},
                pageLength: options.pageLength,
                columnDefs: []
            };

            if (options.serverSide) {
                opts.serverSide = true;
                opts.ajax = {
                    url: options.endpoint.GET,
                    data: function (d) {
                        if (typeof options.extraData === 'function') options.extraData(d);
                        else $.extend(d, options.extraData);
                    }
                };
            } else {
                opts.data = settings.data;
            }

            if (options.paging) {
                $.extend(opts, options.pagingSettings);
            } else opts.paging = false;

            if(options.pagingType) opts.pagingType = options.pagingType;

            if (!options.sort) opts.ordering = false;

            if (!options.search) opts.searching = false;

            if(options.language){
                opts.language = options.language
            }
          
            $.fn.dataTable.ext.errMode = 'throw';
            $.fn.dataTable.ext.classes.sWrapper = 'dataTables_wrapper';
            $.fn.dataTable.ext.internal._fnLog = function(settings, level, msg, tn) {

                if(!level) {
                    sweetAlert("Oops...", msg, "error");
                } else if ( window.console && console.log ) {
                    console.log( msg );
                }
            };

            opts.drawCallback = drawCallBack;
            opts.rowCallback = onRowCallback;
            opts.initComplete = initComplete;
            opts.fnPreDrawCallback = onPreDrawCallback;
            opts.dom = '<"top"iflp<"clear">>rt<"bottom"iflp<"clear">>';
                
            return opts;
        };

        var drawCallBack = function() {
            bindEvents();
            if(options.callbacks.drawCallback) options.callbacks.drawCallback($table);

            var pageActive = $('ul.pagination').find('li.active');

            if(pageActive.length == 0) {
                $("ul.pagination li:not('.next'):last ").addClass('active');
            }
        };

        var onRowCallback = function(row, data) {

            if(options.callbacks.onRowCallback) options.callbacks.onRowCallback(row, data);
        };

        var initComplete = function() {

            if(options.rowEvents.add && $addBtn && $addBtn.length) {
                $addBtn.click(addRowHandler);
            }
        };

        var onPreDrawCallback = function() {

        };

    };

    var ui = {
        loading: '<div class="panel-body loader-add hide loader-demo">' +
                    '<h4>{text}</h4>' +
                    '<div class="ball-pulse">' +
                        '<div></div>' +
                        '<div></div>' +
                        '<div></div>' +
                    '</div>' +
                '</div>'
    };

    app.addCls('dataTable', instance);

})($, $.app);