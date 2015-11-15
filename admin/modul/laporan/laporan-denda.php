  <br />
  <div class="row"> 
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Laporan denda
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" action="?page=laporan.show-laporan-denda">
                                    <div class="row">
                                       <div class="col-lg-4">
                                        <div class="form-group">
								            <label>Tanggal Awal</label>
									           <div class="input-group date form_date col-md-10" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
									               <input class="form-control" size="10" type="text" name="frm_tanggal_awal"/>
   
									                   <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                              </div>
										      <input type="hidden" id="dtp_input2" value=""/>
										</div>
                                        </div>
                                        <div class="col-lg-4">
                                        <div class="form-group">
								            <label>Tanggal Selesai</label>
								        	   <div class="input-group date form_date col-md-10" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
									               <input class="form-control" size="10" type="text" name="frm_tanggal_selesai"/>
									               <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
								            </div>
			                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4">
                                        <div class="form-group">
								            <label></label>
								        	   <div class="input-group col-md-10">
									               <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i> Tampilkan</button>
			                            </div>
                                        </div> 
                                      </div> 
                                    </form>
                                
                                <!-- /.col-lg-6 (nested) -->
                        
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            


<script type="text/javascript" src="datatime/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="datatime/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>
<script type="text/javascript">
 $('.form_date').datetimepicker({

        language:  'id',

        weekStart: 1,

        todayBtn:  1,

  autoclose: 1,

  todayHighlight: 1,

  startView: 2,

  minView: 2,

  forceParse: 0

    });

</script> <!-- http://asdyaniarya.blogspot.co.id/2013/11/tugas-2-smbd-database-tkatpa.html -->