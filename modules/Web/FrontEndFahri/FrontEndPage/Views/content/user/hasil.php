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
      width: 24cm;  
      height: 29.7cm; 
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

    #logo img {
      width: 90px;
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
      white-space: nowrap;        
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

    table td.unit,
    table td.qty,
    table td.total {
      font-size: 1.2em;
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
  </style>
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="assets/images/Flashlabdt.png">
      </div>
      <h1>HASIL PEMERIKSAAN LABOLATORIUM<BR><HR>LABORATORY TEST RESULT</h1>
      <div id="project" class="clearfix">
        <div><span>No. Reg</span> 0043</div>
        <div><span>Nama</span> John Doe</div>
        <div><span>Tgl. Lahir</span> 28 November 1997</div>
        <div><span>Jenis Kelamin</span> Laki-Laki</div>
        <div><span>Waktu Sampling</span> 10 Agustus 2021</div>
        <div><span>Waktu Periksa</span> 10 Agustus 2021</div>
        <div><span>Waktu Selesai</span> 10 Agustus 2021</div>
      </div>
      <div id="project2" class="clearfix">
        <div><span>Instansi</span> FlashLab</div>
        <div><span>NIK</span> 72010029328937</div>
        <div><span>No. Passport</span> 1421312321</div>
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
            <td class="service">SARS-CoV-2
              2019-nCov
              VIC / N gene
              FAM / ORF1ab
              </td>
            <td class="desc">Negative
              Undetection
              undetection
              </td>
            <td class="unit">-</td>
            <td class="qty">Negative
              Undetection ct>=35
              Undetection ct>=35
              </td>
            <td class="total">Real Time RT-PCR
              Real Time RT-PCR
              Real Time RT-PCR
              </td>
          </tr>
          <tr>
            <td class="keth" colspan="5">Catatan: - Hasil ini hanya menggambarkan kondisi saat pengambilan spesimen, Jika timbul Gejala klinis atau kontak dengan pasien terindikasi setelah pemeriksaan, silahkan menghubungi Dokter / Fasilitas Kesehatan terdekat. Pemeriksaan Ulang dapat dilakukan berdasarkan rekomendasi dokter. - Hasil PCR tidak dapat dibandingkan antar alat dan gen yang berbeda.</td>
          </tr>
          <tr>
            <td colspan="4"></td>
            <td class="total"></td>
          </tr>
          <tr>
            <td colspan="4" class="grand total">scan</td>
            <td class="grand total"><img src="flashlab.png"></td>
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
