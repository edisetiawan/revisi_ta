 <?php
$id=$_GET['id'];
$sql_show="select * from buku where kode_buku='".$id."'";
$result1=mysql_query($sql_show);
$data_buku=mysql_fetch_array($result1);
 ?>

  <div class="row"> 
      <div class="container">
    <div class="row">
        <!-- form: -->
        <section>
            <div class="col-lg-12">
                <div class="page-header">
                    <h2>Ubah Data Buku</h2>
                </div>
                <form id="2defaultForm" method="post" class="form-horizontal" action="?page=buku.proces-update" enctype="multipart/form-data">
                <input type="hidden" name="frm_hidden" value="<?php echo $data_buku['kode_buku']; ?>" />   
                    <div class="form-group">
                        <label class="col-lg-1 control-label">Judul</label>
                        <div class="col-lg-5">
                            <input class="form-control" type="text" name="frm_judul" value="<?php echo $data_buku['judul_buku']; ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-1 control-label">Klasifikasi</label>
                        <div class="col-lg-5">
                            <select name="frm_klasifikasi" id="frm_klasifikasi" class="form-control">
                                <?php 
                                $sql_klasifikasi="select * from klasifikasi";
                                $result=mysql_query($sql_klasifikasi);
                                while($data_klasifikasi=mysql_fetch_array($result)){
                                if($data_klasifikasi['klasifikasi_id']==$data_buku['klasifikasi_id']){
                                ?>
                                <option value="<?php echo $data_klasifikasi['klasifikasi_id']; ?>"><?php echo $data_klasifikasi['klasifikasi_nama']; ?></option>
                                <?php 
                                }else{
                                ?>
                                <option value="<?php echo $data_klasifikasi['klasifikasi_id']; ?>"><?php echo $data_klasifikasi['klasifikasi_nama']; ?></option>
                                <?php    
                                }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-1 control-label">Nomor Klasifikasi</label>
                        <div class="col-lg-5">
                            <a href="klasifikasi.php">cari nomor klasifikasi</a>
                            <input class="form-control" type="text" name="nomor_klasifikasi" value="<?php echo $data_buku['nomor_klasifikasi']; ?>" />
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-lg-1 control-label">Foto</label>
                        <div class="col-lg-5">
                            <input type="file" name="fupload" />
                            <span class="help-block" id="Pfupload">
                            <img src="../images/<?php echo $data_buku['foto_buku']; ?>" width="200" height="200"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-1 control-label">Pengarang</label>
                        
                        <div class="col-lg-5">
                        <?php
                        $sql_pengarang="SELECT *
                                FROM
                            pengarang
                                INNER JOIN dikarang 
                            ON (pengarang.kode_pengarang = dikarang.kode_pengarang) WHERE dikarang.kode_buku='".$data_buku['kode_buku']."'";
                            //echo $sql_pengarang; exit;
                            $result1=mysql_query($sql_pengarang);
                            while($data1=mysql_fetch_array($result1)){
                           // echo $data1['nama_pengarang']."<br>";
                            
                        ?>
                            <input class="form-control" type="text" name="textbox[]" value="<?php echo $data1['nama_pengarang'] ?>" />
                            <input class="form-control" type="hidden" name="kodep[]" value="<?php echo $data1['kode_pengarang'] ?>" />
                         <?php
                        }
                        ?>
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
                    
                                <?php 
                                $sql_penerbit="select penerbit_kode,penerbit_nama from penerbit";
                                $result_penerbit=mysql_query($sql_penerbit);
                                while($data_penerbit=mysql_fetch_array($result_penerbit)){
                                    if($data_penerbit['penerbit_kode']==$data_buku['kode_penerbit']){
                                ?>
                                <option value="<?php echo $data_penerbit['penerbit_kode']; ?>"><?php echo $data_penerbit['penerbit_nama']; ?></option>
                                <?php
                                }else{
                                ?>  
                                <option value="<?php echo $data_penerbit['penerbit_kode']; ?>"><?php echo $data_penerbit['penerbit_nama']; ?></option> 
                                <?php
                                }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                     
                      
                   <div class="form-group">
                        <label class="col-lg-1 control-label">Tahun Terbit</label>
                        <div class="col-lg-5">
                            <input class="form-control" type="text" name="frm_tahun" value="<?php echo $data_buku['tahun_terbit']; ?>"/>
                        </div>
                    </div>
                    
                   
                   <div class="form-group">
                        <label class="col-lg-1 control-label">ISBN</label>
                        <div class="col-lg-5">
                            <input class="form-control" type="text" name="frm_isbn" value="<?php echo $data_buku['isbn']; ?>"/>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-lg-1 control-label">Rak</label>
                        <div class="col-lg-5">
                            <input class="form-control" type="text" name="frm_rak" value="<?php echo $data_buku['rak']; ?>"/>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-lg-1 control-label">Jumlah</label>
                        <div class="col-lg-5">
                            <input class="form-control" type="text" name="frm_jumlah" value="<?php echo $data_buku['jumlah_awal']; ?>"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-1 control-label">Sinopsis</label>
                        <div class="col-lg-5">
                             <textarea class="form-control" name="frm_sinopsis">
                             <?php echo $data_buku['sinopsis']; ?>
                             </textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-lg-offset-1 col-lg-3">
                            <button type="submit" class="btn btn-primary">UPDATE</button>
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
                    'frm_thn_terbit': {
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
                    'rak': {
                        validators: {
                            notEmpty: {
                                message: 'Rak tidak boleh kosong'
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
            
            
          