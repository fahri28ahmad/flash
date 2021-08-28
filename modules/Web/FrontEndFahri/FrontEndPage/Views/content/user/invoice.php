<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example</title>
    <style type="text/css">
    @font-face {
  font-family: SourceSansPro;
  src: url(SourceSansPro-Regular.ttf);
    }

    .clearfix:after {
      content: "";
      display: table;
      clear: both;
    }

    a {
      color: #0087C3;
      text-decoration: none;
    }

    body {
      position: relative;
      width: 21cm;  
      height: 29.7cm; 
      margin: 0 auto; 
      color: #555555;
      background: #FFFFFF; 
      font-family: Arial, sans-serif; 
      font-size: 14px; 
      font-family: SourceSansPro;
    }

    header {
      padding: 10px 0;
      margin-bottom: 20px;
      border-bottom: 1px solid #AAAAAA;
    }

    #logo {
      float: left;
      margin-top: 8px;
    }

    #logo img {
      height: 70px;
    }

    #company {
      float: right;
      text-align: right;
    }


    #details {
      margin-bottom: 50px;
    }

    #client {
      padding-left: 6px;
      border-left: 6px solid #0087C3;
      float: left;
    }

    #client .to {
      color: #777777;
    }

    h2.name {
      font-size: 1.4em;
      font-weight: normal;
      margin: 0;
    }

    #invoice {
      float: right;
      text-align: right;
    }

    #invoice h1 {
      color: #0087C3;
      font-size: 2.4em;
      line-height: 1em;
      font-weight: normal;
      margin: 0  0 10px 0;
    }

    #invoice .date {
      font-size: 1.1em;
      color: #777777;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      border-spacing: 0;
      margin-bottom: 20px;
    }

    table th,
    table td {
      padding: 20px;
      background: #EEEEEE;
      text-align: center;
      border-bottom: 1px solid #FFFFFF;
    }

    table th {
      white-space: nowrap;        
      font-weight: normal;
    }

    table td {
      text-align: right;
    }

    table td h3{
      color: #57B223;
      font-size: 1.2em;
      font-weight: normal;
      margin: 0 0 0.2em 0;
    }

    table .no {
      color: #FFFFFF;
      font-size: 1.6em;
      background: #57B223;
    }

    table .desc {
      text-align: left;
    }

    table .unit {
      background: #DDDDDD;
    }

    table .qty {
    }

    table .total {
      background: #57B223;
      color: #FFFFFF;
    }

    table td.unit,
    table td.qty,
    table td.total {
      font-size: 1.2em;
    }

    table tbody tr:last-child td {
      border: none;
    }

    table tfoot td {
      padding: 10px 20px;
      background: #FFFFFF;
      border-bottom: none;
      font-size: 1.2em;
      white-space: nowrap; 
      border-top: 1px solid #AAAAAA; 
    }

    table tfoot tr:first-child td {
      border-top: none; 
    }

    table tfoot tr:last-child td {
      color: #57B223;
      font-size: 1.4em;
      border-top: 1px solid #57B223; 

    }

    table tfoot tr td:first-child {
      border: none;
    }

    #thanks{
      font-size: 2em;
      margin-bottom: 50px;
    }

    #notices{
      padding-left: 6px;
      border-left: 6px solid #0087C3;  
    }

    #notices .notice {
      font-size: 1.2em;
    }

    footer {
      color: #777777;
      width: 100%;
      height: 30px;
      position: absolute;
      bottom: 0;
      border-top: 1px solid #AAAAAA;
      padding: 8px 0;
      text-align: center;
    }
    </style>
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="logo.png">
      </div>
      <div id="company">
        <h2 class="name">Flashlab.id</h2>
        <div>Jalan Kartini - Kompleks SPBU, Kota Palu<br>Sulawesi Tengah</div>
        <div>(0811-452-1177)</div>
        <div><a href="mailto:company@example.com">company@example.com</a></div>
      </div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">INVOICE TO:</div>
          <h2 class="name">Nama Pasien</h2>
          <div class="address">jl beringin no 12 palu bart</div>
          <div class="tlp">No Tlp Pasien</div>
        </div>
        <div id="invoice">
          <h1>INVOICE 3-2-1</h1>
          <div class="date">Date Invoice: 21/08/2021</div>
          <div class="date">Jatuh Tempo: 21/08/2021</div>
          <div class="date">Metode Pembayaran	Transfer Bank / Cash</div>
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="desc">DESCRIPTION</th>
            <th class="unit">Harga</th>
            <th class="qty">Qty</th>
            <th class="total">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="no">01</td>
            <td class="desc"><h3>Website Design</h3>Creating</td>
            <td class="unit">IDR 195.000</td>
            <td class="qty">1</td>
            <td class="total">IDR 195.000</td>
          </tr>
          <tr>
            <td class="no">02</td>
            <td class="desc"><h3>Website Design</h3>Creating</td>
            <td class="unit">IDR 195.000</td>
            <td class="qty">1</td>
            <td class="total">IDR 195.000</td>
          </tr>
          <tr>
            <td class="no">03</td>
            <td class="desc"><h3>Website Design</h3>Creating</td>
            <td class="unit">IDR 195.000</td>
            <td class="qty">1</td>
            <td class="total">IDR 195.000</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">Subtotal</td>
            <td>-</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">Total</td>
            <td>IDR 195.000</td>
          </tr>
        </tfoot>
      </table>
      <div id="thanks">Thank you!</div>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">Silahkan melakukan pembayaran ke :</div>
        <div class="notice">An. Penerima</div>
        <div class="notice">No Rek :</div>
        <div class="notice">Nama Bank :</div>
      </div>
    </main>
    <footer>
      Terima kasih telah menggunakan layanan Kami, apabila ada kendala silahkan menghubungi kami melalui Whatsapp 0811-452-1177.
    </footer>
  </body>
</html>