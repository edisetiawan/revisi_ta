<?php
require_once('menu.php');
$batas=12;
$halaman=$_GET['halaman'];
if (empty($halaman))
{
$posisi=0;
$halaman=1;
}
else
{
$posisi=($halaman-1) * $batas;
}

                        $query=mysql_query("select * from buku LIMIT $posisi,$batas");
                        $no=0;
?>
<br />
 <section id="katalog" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <!--<div style="background-size: 100% auto;" id="demoHeader" class="header1">-->
                        <div class="row">
                            <div class="well header1 text-right" id="demohider" >
                                <!-- Carousel
                                ================================================== -->            
                                <div id="myCarousel" class="carousel slide">
                                    <div class="carousel-inner">
                                    <!-- start -->
                                    
                                      <div class='item active'>
                <div class='row'>
                <?php
function tampilBuku(){
    $query=mysql_query("select * from buku limit 12");//  limit {$start},{$end}");
    while($row=mysql_fetch_array($query))
    $data[]=$row;
    return $data;
}

$arr=tampilBuku();    
    foreach($arr as $key=>$value)
    {
        //if we can divide $key by six without remainder
        if ($key % 4 == 0) 
        {     ?>
            </div>
            </div>
            <div class='item'>
            <div class='row'>
       <?php  } ?>
          <div class="col-xs-6 col-md-3">
          <a href="#" class="thumbnail"><img class="img-responsive" src="images/<?php echo $value['foto_buku'] ?>" alt="Thumb21"></a>
          </div>
  <?php  } ?>
</div>
</div>
                                    <!-- end -->
                      
                                    </div>
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-left fa-2x"></i></a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-right fa-2x"></i></a>
                                    
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                                        <li class="active" data-target="#myCarousel" data-slide-to="1"></li>
                                        <li class="" data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>               
                                </div><!-- End Carousel -->
                                <a href="#">lihat buku lain</a>
                            </div><!-- End Well -->
                                <ol class="breadcrumb">
                                    SORT BUKU: <a href="?page=a-z"> A-Z </a> | <a href="?page=z-a"> Z-A </a>| <a href="?page=terbaru"> TERBARU </a>| <a href="?page=terlama"> TERLAMA</a>
                                </ol> 
                        </div>
                        
                        <!--  Katalog Content Row 1 start -->
                        
                        
                        <?php
                        $batas=12;
                        $halaman=$_GET['halaman'];
                        if (empty($halaman))
                        {
                        $posisi=0;
                    $halaman=1;
                        }
                    else
                     {
            $posisi=($halaman-1) * $batas;
            }           
                        
                        $query=mysql_query("select * from buku ORDER BY kode_buku DESC limit 12");// where  LIMIT $posisi,$batas");
                        $rows=mysql_num_rows($query);
                        if($rows == 0){
                        echo "<h2>data tidak ditemukan</h2>";
                        }else
                        $no=0;
                        while($data=mysql_fetch_array($query)){
                        $no++;
                        if($no % 4 == 1){
                        ?>
                        <div class="row">
                            </div>
                            <?php
                           }
                           
                           ?>
                             <div class="col-xs-6 col-md-3 img-portfolio">
                                <a href="?page=detail_buku">
                            <a href="?page=detail_buku&id=<?php echo $data['kode_buku']; ?>"><img class="img-responsive img-hover thumbnail" src="images/<?php echo $data['foto_buku'] ?>" alt=""></a>
                                <h4>
                                    <a href="?page=detail&id=<?php echo $data['kode_buku']; ?>"><?php echo $data['judul_buku']; ?></a>
                                </h4>
                                <p><small><?php 
                                $sql_pengarang="SELECT *
                                FROM
                            pengarang
                                INNER JOIN dikarang 
                            ON (pengarang.kode_pengarang = dikarang.kode_pengarang) WHERE dikarang.kode_buku='".$data['kode_buku']."'";
                            //echo $sql_pengarang; exit;
                            $result1=mysql_query($sql_pengarang);
                            while($data1=mysql_fetch_array($result1)){
                            echo $data1['nama_pengarang']."<br>";
                            }
                               ?></small></p>
                            </div>
                           <?php
                           }
                           
                            ?>
                        <!--  Katalog Content Row 1 end -->

                                              <!-- Pagination -->
                            <div class="row text-center">
                                <div class="col-lg-12">
                                    <ul class="pagination">
                                        <li>
                                            <a href="#">&laquo;</a>
                                        </li>
                                        <?php
    $query2=mysql_query("select * from buku");
$jmldata=mysql_num_rows($query2);
$jmlhalaman=ceil($jmldata/$batas);
//echo"<br/>Halaman : ";
for ($i=1;$i<=$jmlhalaman;$i++)
if ($i != $halaman)
{  
    echo "<li>";
echo"<a href='?page=content&halaman=$i'>$i</a></li>";
}
else {
echo"<li class='active'><a href='#'>$i</a>";
    echo "</li>";
}
//echo"<p>Total anggota : <b>$jmldata</b> orang</p>";

                                        ?>
                                        
                                        <li>
                                            <a href="#">&raquo;</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Pagination -->       
            </div>
            <?php
            require_once('navigasi.php');
            ?>
                <!-- /.col-sm-8 -->
            </div>
        </div>
    </section>