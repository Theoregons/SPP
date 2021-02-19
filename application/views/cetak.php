<title>Cetak Pembayaran SPP</title>

<style type="text/css">

.jarak{
	margin-left: -580px;
}

.jarak1{
	margin-left: -280px;
}

.jarak2{
	margin-left: -100px;
}

.jarak3{
	margin-left: -50px;
}

.jarak5{
	margin-left: 100px;
}

.prtext {
    color: #000000;
    font-family: tahoma;
    font-size: 11px;
    }
    .prhead {
    color: #000000;
    font-family: tahoma;
    font-size: 14px;
    }
   .prtext_blacksmall {
    font-size: 14px;
    color: #00000;
    font-family: tahoma;
    }
    .prtitle {
    font-size: 12pt;
    color: #000000;
    font-family: tahoma;
    font-weight: bold;
    }
    .prtitle2 {
    font-size: 10pt;
    color: #000000;
    font-family: tahoma;
    font-weight: bold;
    }
    .prtitle3 {
    font-size: 10pt;
    color: #000000;
    font-family: tahoma;
    }
    .address {
    font-size: 8pt;
    color: #000000;
    font-family: tahoma;
    }
    .prtitle1 {
    font-size: 20px;
    color: #000000;
    font-family: times new roman;
    font-weight: bold;
    }
    .logo {
      width:70px;
    }
    hr.style-eight { padding: 0; border: outset; border-top: medium double #333; color: #333; text-align: center; } 
    hr.style-eight:after { /*content: "§";*/ display: inline-block; position: relative; top: -0.7em; font-size: 1.5em; padding: 0 0.25em; background: white; }

    .style1 {
    font-family: IDAutomationHC39M;
    font-size: 24px;
  }
  #Layer1 {
    position:absolute;
    width:235px;
    height:110px;                           
    z-index:1;
    left: 11px;
    top: 40px;
  }
</style>

<body onload="window.print()">

<div id="content">
    <table cellspacing="0" cellpadding="0" border="0">
      <tbody>
      <tr>
        <BR><BR>
        <div class="jarak5">
        <td width="1000" align="center"  valign="center" class="prtext_blacksmall">
        <b><div class="prtitle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        TANDA BUKTI PEMBAYARAN</div></b>
        
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laman www.an-nuriyah.ac.id Email :</span> <BR><BR> -->

        </td>
        </div>
       </tr>
      </tbody>
    </table>
    <hr class="style-eight" />
<br><br>
<div style="font-size: 18;font-weight: bold"></div>

  <table width=100%>
				<!-- <?php echo $pb->id_payment ?>
				<?php echo $pb->month_name ?>
				<?php echo $pb->claim ?>
				<?php echo "Tunai" ?>
				<?php echo $pb->school ?> -->
    <tr>

      <td width=15% id="td">NIS</td><td width=75% id="td">: &nbsp; <?php echo $pb->nis ?></td>

    </tr>

    <tr>

      <td id="td">Nama Siswa </td><td id="td">: &nbsp; <?php echo $pb->name ?></td>

    </tr>

    <tr>

      <td id="td">Kelas </td><td id="td">: &nbsp; <?php echo $pb->class ?></td>

    </tr>

    <tr>
      <td>No. Reff </td>
      <td>: &nbsp; #<?php echo $pb->id_payment ?></td>
    </tr>

    <tr>
      <td>Tgl. Bayar </td>
      <td>: &nbsp; <?php echo $pb->date ?></td>
    </tr>

    <tr>
      <td>Jenis Bayar </td>
      <td>: &nbsp; Tunai</td>
    </tr>
   
    <td><Br><Br><Br>
    <div style="padding-left:10%">
    
    <B>#</B>
    <br />
   
    <br />
    <span style="text-decoration:underline"></span>
    <br />1.
  </div>
    </td>

    <td><Br><Br><Br>
    	<div class="jarak3">
    <div style="padding-left:1%" margin-left= "-200px;">
    
    <B>Pembayaran</B>
    <br />
   
    <br />
    <span style="text-decoration:underline"></span>
    <br />SPP
  </div>
</div>

    </td>

    <td><Br><Br><Br>
    	<div class="jarak">
    <div style="padding-left:"-900px">
    
    <b>Keterangan</b>
    <br />
   
    <br />
    <span style="text-decoration:underline"></span>
    <br />Pembayaran SPP Bulan <?php echo $pb->month_name ?>
  </div>
</div>
    </td>

    <td><Br><Br><Br>
    	<div class="jarak1">
    <div style="padding-left:-100%">
    
    <b>Jenis Pembayaran</b>
    <br />
   
    <br />
    <span style="text-decoration:underline"></span>
    <br /> Tunai
  </div>
</div>
    </td>

    <td><Br><Br><Br>
    	<div class="jarak2">
    <div style="padding-left:-50%">
    
    <b>Nomina</b>
    <br />
   
    <br />
    <span style="text-decoration:underline"></span>
    <br />Rp. <?php echo $pb->claim ?>
  </div>
</div>
    </td>
</div>
  </table>
 
      <br/>
    <br>
    <br />
    <!-- <fieldset>
      <legend>    Pembayaran</legend>

      <p>Silahkan melakukan pembayaran pada :<br />
       Bank &nbsp; &nbsp; &nbsp; : BCA<b> </b><br />

         No. Rek &nbsp;: <b> 123 </b> <br />

         a.n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : <b>Fahri</b></p>

  </fieldset> <br />

  <fieldset>

      <legend>    Catatan Pendaftaran Online</legend>

    <p><b>1. Simpan berkas ini sebagai bukti pendaftaran</b><br />
      <b>2. Setelah melakukan pembayaran silahkan cek email aktif anda untuk mendapatkan bukti pendaftaran tunggu 1 x 24 jam</b><br />
      <b>3. Setelah melakukan pendaftaran dan pembayaran silahkan datang ke sekolah untuk melakukan ujian</b><br />
      <b>3. Bawa berkas yang telah di cetak</b><br />
      </p>

  </fieldset> <br /> -->

  <table width="100%">
    <tr>
   

    <td>
    <div style="padding-left:80%">
    
    <br />
    Malang, <?php echo $pb->date ?>
    <br />
    Petugas,
    <br />
    <br /> <br />
    <br />
    <span style="text-decoration:underline"></span>
    <br />.........................................
  </div>
    </td>
    </tr>
    </table>
  <!-- <div style="clear:both";>

  <div align="center">

  <a href="javascript:void()" onclick="print()"><input type="submit" name="cetak" value="Cetak" class="input"/></a></div>

</div> -->
</div>
</div>
</body>