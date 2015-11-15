 <?php
//require_once('inc-db.php');
$sql_klasifikasi = mysql_query("SELECT * FROM klasifikasi");
 ?>
  <div class="row"> 
      <div class="container">
    <div class="row">
        <!-- form: -->
        <section>
            <div class="col-lg-12">
                <div class="page-header">
                    <h2>Tambah Data Buku</h2>
                </div>
                <form id="defaultForm" method="post" class="form-horizontal" action="?page=buku.proces-save" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-lg-1 control-label">Judul</label>
                        <div class="col-lg-5">
                            <input class="form-control" type="text" name="frm_judul" placeholder="Judul" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-1 control-label">Klasifikasi</label>
                        <div class="col-lg-5">
                            <select name="frm_klasifikasi" id="frm_klasifikasi" class="form-control">
                                <option value="">--pilih klasifikasi--</option>
                                <?php while ($data = mysql_fetch_object($sql_klasifikasi)) : ?>
                                <option value="<?php echo $data->klasifikasi_id; ?>"><?php echo $data->klasifikasi_nama; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-1 control-label">Nomor Klasifikasi</label>
                        <div class="col-lg-5">
                            <a href="klasifikasi.php">cari nomor klasifikasi</a>
                            <input class="form-control" type="text" name="nomor_klasifikasi" placeholder="Nomor Klasifikasi" />
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-lg-1 control-label">Foto</label>
                        <div class="col-lg-5">
                           <input type="file" name="fupload" />
                           <span class="help-block" id="Pfupload">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-1 control-label">Pengarang</label>
                        <div class="col-lg-5">
                            <input class="form-control" type="text" name="textbox[]" placeholder="Pengarang 1" />
                        </div>
                        <div class="col-lg-4">
                            <button type="button" class="btn btn-default btn-sm addButton" data-template="textbox">Add</button>
                        </div>
                    </div>
                    
                     <div class="form-group hide" id="textboxTemplate">
                        <div class="col-lg-offset-1 col-lg-5">
                            <input class="form-control" type="text" />
                        </div>
                        <div class="col-lg-4">
                            <button type="button" class="btn btn-default btn-sm removeButton">Remove</button>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-lg-1 control-label">Penerbit</label>
                        <div class="col-lg-5">
                            <select name="frm_penerbit" class="form-control">
                                <option value="">--pilih penerbit--</option>
                                <?php 
                                $sql_penerbit="select penerbit_kode,penerbit_nama from penerbit";
                                $result_penerbit=mysql_query($sql_penerbit);
                                while($data_penerbit=mysql_fetch_array($result_penerbit)){
                                ?>
                                <option value="<?php echo $data_penerbit['penerbit_kode']; ?>"><?php echo $data_penerbit['penerbit_nama']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                     
                      
                   <div class="form-group">
                        <label class="col-lg-1 control-label">Tahun Terbit</label>
                        <div class="col-lg-5">
                            <input class="form-control" type="text" name="frm_tahun" placeholder="Tahun Terbit" />
                        </div>
                    </div>
                    
                   
                   <div class="form-group">
                        <label class="col-lg-1 control-label">ISBN</label>
                        <div class="col-lg-5">
                            <input class="form-control" type="text" name="frm_isbn" placeholder="ISBN" />
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-lg-1 control-label">Lokasi Rak</label>
                        <div class="col-lg-5">
                            <input class="form-control" type="text" name="frm_rak" placeholder="Lokasi Rak" />  
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-lg-1 control-label">Jumlah</label>
                        <div class="col-lg-5">
                            <input class="form-control" type="text" name="frm_jumlah" placeholder="Jumlah" />
                        </div>
                    </div>
                    
                    
                    
                    <div class="form-group">
                        <label class="col-lg-1 control-label">Sinopsis</label>
                        <div class="col-lg-5">
                             <textarea class="form-control" name="frm_sinopsis"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-lg-offset-1 col-lg-3">
                            <button type="submit" class="btn btn-primary">SAVE</button>
                            <button type="reset" id="resetBtn" class="btn btn-default">RESET</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- :form -->
    </div>
</div>
 <script type="text/javascript">
    $(document).ready(function() {
        $('.addButton').on('click', function() {
            var index = $(this).data('index');
            if (!index) {
                index = 1;
                $(this).data('index', 1);
            }
            index++;
            $(this).data('index', index);

            var template     = $(this).attr('data-template'),
                $templateEle = $('#' + template + 'Template'),
                $row         = $templateEle.clone().removeAttr('id').insertBefore($templateEle).removeClass('hide'),
                $el          = $row.find('input').eq(0).attr('name', template + '[]');
            $('#defaultForm').bootstrapValidator('addField', $el);

            // Set random value for checkbox and textbox
            if ('checkbox' == $el.attr('type') || 'radio' == $el.attr('type')) {
                $el.val('Choice #' + index)
                   .parent().find('span.lbl').html('Choice #' + index);
            } else {
                $el.attr('placeholder', 'Pengarang ' + index);
            }

            $row.on('click', '.removeButton', function(e) {
                $('#defaultForm').bootstrapValidator('removeField', $el);
                $row.remove();
            });
        });

        $('#defaultForm')
            .bootstrapValidator({
                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    'textbox[]': {
                        validators: {
                            notEmpty: {
                                message: 'Pengarang tidak boleh kosong'
                            }
                        }
                    },
                    'frm_judul': {
                        validators: {
                            notEmpty: {
                                message: 'Judul tidak boleh kosong'
                            }
                        }
                    },
                    'frm_sinopsis': {
                        validators: {
                            notEmpty: {
                                message: 'Sinopsis tidak boleh kosong'
                            }
                        }
                    },
                    'frm_penerbit': {
                        validators: {
                            notEmpty: {
                                message: 'Sinopsis tidak boleh kosong'
                            }
                        }
                    },
                    'nomor_klasifikasi': {
                        validators: {
                            notEmpty: {
                                message: 'Sinopsis tidak boleh kosong'
                            }
                        }
                    },
                    'frm_tahun': {
                        validators: {
                            notEmpty: {
                                message: 'Sinopsis tidak boleh kosong'
                            }
                        }
                    },
                    'frm_isbn': {
                        validators: {
                            notEmpty: {
                                message: 'Sinopsis tidak boleh kosong'
                            }
                        }
                    },
                    'frm_klasifikasi': {
                        validators: {
                            notEmpty: {
                                message: 'Klasifikasi tidak boleh kosong'
                            }
                        }
                    },
                    'frm_jumlah': {
                        validators: {
                            notEmpty: {
                                message: 'Klasifikasi tidak boleh kosong'
                            }
                        }
                    },
                    'frm_rak': {
                        validators: {
                            notEmpty: {
                                message: 'Lokasi rak tidak boleh kosong'
                            }
                        }
                    },
                    'fupload': {
                        validators: {
                            notEmpty: {
                                message: 'Foto Tidak Boleh kosong'
                            }
                        }
                    }
                }
            })
            .on('error.field.bv', function(e, data) {
                //console.log('error.field.bv -->', data.element);
            })
            .on('success.field.bv', function(e, data) {
                //console.log('success.field.bv -->', data.element);
            })
            .on('added.field.bv', function(e, data) {
                //console.log('Added element -->', data.field, data.element);
            })
            .on('removed.field.bv', function(e, data) {
                //console.log('Removed element -->', data.field, data.element);
            });
              $('#resetBtn').click(function() {
        $('#defaultForm').data('bootstrapValidator').resetForm(true);
    });
    });
</script>                    