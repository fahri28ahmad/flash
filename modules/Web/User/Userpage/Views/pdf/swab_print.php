<?php 
	$i = 1;
	$data_a = file_get_contents("http://flashlab.local/assets/images/logo.png");
	$data_b = file_get_contents("http://flashlab.local/assets/images/bg-title-01.jpg");
	$base64_a = 'data:image/' . 'png' . ';base64,' . base64_encode($data_a);
	$base64_b = 'data:image/' . 'png' . ';base64,' . base64_encode($data_b);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Hasil</title>
    <style type="text/css">
    .clearfix:after {
      content: "";
      display: table;
      clear: both;
    }

    .clearfix div{
      margin-top: 3px;
    }
    a {
      color: #5D6975;
      text-decoration: underline;
    }

    body {
      position: relative;
      width: 680px;
      margin: 0 auto; 
      color: #001028;
      background: #FFFFFF; 
      font-family: Arial, sans-serif; 
      font-size: 12px; 
      font-family: Arial;
    }

    header {
      padding: 10px 0;
      margin-bottom: 30px;
    }

    #logo {
      text-align: center;
      margin-bottom: 10px;
    }

    h1 {
      border-top: 1px solid  #5D6975;
      border-bottom: 1px solid  #5D6975;
      color: #5D6975;
      font-size: 1.5em;
      line-height: 1em;
      font-weight: normal;
      text-align: center;
      margin: 0 0 20px 0;
      background: url(dimension.png);
    }

    #project {
      float: left;
      margin-left: 30px;
    }

    #project span {
      color: #5D6975;
      text-align: right;
      width: 80px;
      margin-right: 10px;
      display: inline-block;
      font-size: 0.8em;
    }
    #project2 {
      float: right;
      MARGIN-RIGHT: 30PX;
    }

    #project2 span {
      color: #5D6975;
      text-align: right;
      width: 80px;
      margin-right: 10px;
      display: inline-block;
      font-size: 0.8em;
    }

    #company {
      float: right;
      text-align: right;
    }

    #project div,
    #company div {
      white-space: nowrap;    
    }

    table {
      width: 100%;
      border-collapse: collapse;
      border-spacing: 0;
      margin-bottom: 20px;
    }

    table tr:nth-child(2n-1) td {
      background: #F5F5F5;
    }

    table th,
    table td {
      text-align: center;
    }

    table th {
      padding: 5px 20px;
      color: #5D6975;
      border-bottom: 1px solid #C1CED9;
      font-weight: normal;
    }

    table .service,
    table .desc {
      text-align: left;
    }

    table td {
      padding: 20px;
      text-align: right;
    }

    table td.service,
    table td.desc {
      vertical-align: top;
    }

    table td{

    }

    table td.unit p,
    table td.qty p,
    table td.total p,
    table td.service p,
    table td.desc p{
      font-size: 10px;
      line-height: 12px;
    }

    table td.keth{
      text-align: justify;
    }

    table td.grand {
      border-top: 1px solid #5D6975;;
    }

    #notices .notice {
      color: #5D6975;
      font-size: 1.2em;
    }

    footer {
      color: #5D6975;
      width: 100%;
      height: 30px;
      position: absolute;
      bottom: 0;
      border-top: 1px solid #C1CED9;
      padding: 8px 0;
      text-align: center;
    }

    header .logo{
    	margin-left: auto;
    	margin-right: auto;
		height: 60px;
		width: 300px;
        background-image: url(<?php echo $base64_a;?>);
        background-size: 300px 60px;
        background-position: center;
        margin-bottom: 30px;
    }
  </style>
  </head>
  <body>
    <header class="clearfix">
    <div class="logo">
    </div>
      <h1>HASIL PEMERIKSAAN LABOLATORIUM<BR><HR>LABORATORY TEST RESULT</h1>
      <div id="project" class="clearfix">
        <div><span>No. Reg</span> 0043</div>
        <div><span>Nama</span><?php echo $patient_data[0]->get_patient_detail()[0]->complete_name;?></div>
        <div><span>Tgl. Lahir</span><?php echo $patient_data[0]->get_patient_detail()[0]->get_birth_date();?></div>
        <div><span>Jenis Kelamin</span><?php echo $patient_data[0]->get_patient_detail()[0]->get_gender();?></div>
        <div><span>Waktu Sampling</span> <?php echo $patient_data[0]->get_date_inserted();?></div>
        <div><span>Waktu Periksa</span> <?php echo $patient_data[0]->get_date_inserted();?></div>
        <div><span>Waktu Selesai</span> <?php echo $patient_data[0]->get_date_inserted();?>
    </div>
      </div>
      <div id="project2" class="clearfix">
        <div><span>Instansi</span> FlashLab</div>
        <div><span>NIK</span> <?php echo $patient_data[0]->get_patient_detail()[0]->no_ktp; ?></div>
        <div><span>No. Passport</span> - </div>
        <div><span>Kewarganegaraan</span> Indonesia</a></div>
        <div><span>Faskes Asal</span> FlashLab</div>
        <div><span>Kota</span> Kota Palu</div>
      </div>
    </header>
    <main>
      <div class="kett" >
        <div>1. Orofaring & Nasofaring</div>
        <div>2. Sputum</div>
        <div>3. Saliva</div>
      </div>
      <table>
        <thead>
          <tr>
            <th class="service">PEMERIKSAAN</th>
            <th class="desc">DALAM KISARAN RUJUKAN</th>
            <th>DILUAR KISARAN RUJUKAN</th>
            <th>NILAI RUJUKAN</th>
            <th>METODE</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service">
            	<p>SARS-CoV-2</p>
              <p>2019-nCov</p>
              <p>VIC / N gene</p>
              <p>FAM / ORF1ab</p>
              </td>
            <td class="desc">
            	<p>Negative</p>
              <p>Undetection</p>
              <p>undetection</p>
              </td>
            <td class="unit">-</td>
            <td class="qty">
            	<p>Negative</p>
              <p>Undetection ct>=35</p>
              <p>Undetection ct>=35</p>
              </td>
            <td class="total"><p>Real Time RT-PCR</p>
              <p>Real Time RT-PCR</p>
              <p>Real Time RT-PCR</p>
              </td>
          </tr>
          <tr>
            <td class="keth" colspan="5"><p>Catatan: - Hasil ini hanya menggambarkan kondisi saat pengambilan spesimen, Jika timbul Gejala klinis atau kontak dengan pasien terindikasi setelah pemeriksaan, silahkan menghubungi Dokter / Fasilitas Kesehatan terdekat. Pemeriksaan Ulang dapat dilakukan berdasarkan rekomendasi dokter. - Hasil PCR tidak dapat dibandingkan antar alat dan gen yang berbeda.</p></td>
          </tr>
          <tr>
            <td colspan="4"></td>
            <td class="total"></td>
          </tr>
          <tr>
            <td colspan="4" class="grand total">scan</td>
            <td class="grand total"><img style="width: 200px; height: 200px;" src="<?php echo $barcode;?>"></td>
          </tr>
        </tbody>
      </table>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">Petugas Pemeriksa</div>
      </div>
    </main>
    <footer>
      Jalan Kartini - Kompleks SPBU | Kota Palu - Sulawesi Tengah | 0811-452-1177.
    </footer>
  </body>
</html>
<!DOCTYPE html>
