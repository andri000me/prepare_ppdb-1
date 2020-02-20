<script type="text/javascript">
<!--
window.print();
//-->
</script>
<style>
	h3, h4 {
		margin: 0;
		padding: 0;
	}
</style>
<table width="100%" border="all" style="border-collapse: collapse;">
	<tr>
		<th width="150px"><img src="<?= base_url('assets/template/web/images/kalsel.png') ?>" width="70px" alt=""></th>
		<th><h4>Bukti Pendaftaran Peserta Didik Baru</h4><h3>Dinas Pendidikan dan Kebudayaan Provinsi Kalimantan Selatan</h3><h3><?= $web['company_name'] ?></h3></th>
		<th width="150px"><img src="<?= base_url('assets/template/web/images/dinas_pendidikan.png') ?>" width="50px" alt=""></th>
	</tr>
</table>
<table width="100%"  style="border-collapse: collapse; border-left: 1px solid black; border-right: 1px solid black; <?php if ($query['jalur'] == '1') { echo 'border-bottom: 1px solid black;';} ?> ">
	<tr><th height="20px"></th><th></th><th></th></tr>
	<tr>
		<th width="200px" style="text-align: left;padding-left: 20px; vertical-align: super;">Nomor Pendaftaran</th>
		<td width="10px" style="text-align: left;">:</td>
		<th style="text-align: left"><?= $query['nomor_daftar'] ?></th>
	</tr>
	<tr>
		<th width="200px" style="text-align: left;padding-left: 20px; vertical-align: super;">NISN</th>
		<td width="10px" style="text-align: left;">:</td>
		<th style="text-align: left"><?= $query['nisn'] ?></th>
	</tr>
	<tr>
		<th width="200px" style="text-align: left;padding-left: 20px; vertical-align: super;">Nama Lengkap</th>
		<td width="10px" style="text-align: left;">:</td>
		<th style="text-align: left"><?= ucwords($query['nama']) ?></th>
	</tr>
	<tr>
		<th width="200px" style="text-align: left;padding-left: 20px; vertical-align: super;">Jenis Kelamin</th>
		<td width="10px" style="text-align: left;">:</td>
		<th style="text-align: left"><?php if ( $query['jk'] == '1') { echo 'Laki-laki' ;} else { echo 'Perempuan'; } ?></th>
	</tr>
	<tr>
		<th width="200px" style="text-align: left;padding-left: 20px; vertical-align: super;">Tempat, Tanggal Lahir</th>
		<td width="10px" style="text-align: left;">:</td>
		<th style="text-align: left"><?= ucwords($query['tempat_lahir']).', '.$query['tgl_lahir'].' - '.$query['bln_lahir'].' - '.$query['thn_lahir'] ?></th>
	</tr>
	<tr>
		<th width="200px" style="text-align: left;padding-left: 20px; vertical-align: super;">Agama</th>
		<td width="10px" style="text-align: left;">:</td>
		<th style="text-align: left"><?php if ($query['agama'] == '1') { echo "Islam"; } elseif ($query['agama'] == '2') { echo "Kristen"; } elseif ($query['agama'] == '3') { echo "Protestan"; } elseif ($query['agama'] == '4') { echo "Hindu"; } elseif ($query['agama'] == '5') { echo "Budha"; } ?></th>
	</tr>
	<tr>
		<th width="200px" style="text-align: left;padding-left: 20px; vertical-align: super;">Alamat Lengkap</th>
		<td width="10px" style="text-align: left;">:</td>
		<th style="text-align: left"><?= $query['alamat'].', Kecamatan '.$query['kecamatan']  ?></th>
	</tr>
	<tr>
		<th width="200px" style="text-align: left;padding-left: 20px; vertical-align: super;">Nomor HP</th>
		<td width="10px" style="text-align: left;">:</td>
		<th style="text-align: left"><?= $query['nomor_hp']; ?></th>
	</tr>
	<tr>
		<th width="200px" style="text-align: left;padding-left: 20px; vertical-align: super;">Sekolah Asal</th>
		<td width="10px" style="text-align: left;">:</td>
		<th style="text-align: left"><?= $query['sekolah_asal'] ?></th>
	</tr>
	<tr>
		<th width="200px" style="text-align: left;padding-left: 20px; vertical-align: super;">Jalur Pendaftaran</th>
		<td width="10px" style="text-align: left;">:</td>
		<th style="text-align: left"><?php if ($query['jalur'] == '1') { echo "Zonasi"; } elseif ($query['jalur'] == '2') { echo "Prestasi"; } elseif ($query['jalur'] == '3') {  echo "Perpindahan Orang Tua"; } ?></th>
		
	</tr>
	<?php if ($query['jalur'] == '1') { ?>
	<tr>
		<th width="200px" style="text-align: left;padding-left: 20px; vertical-align: super;">Jarak SMA dengan Rumah</th>
		<td width="10px" style="text-align: left;">:</td>
		<th style="text-align: left"><?= $query['jarak'].' Km' ?></th>
	</tr>
	<?php } ?>
	

	<tr><th height="20px"></th><th></th><th></th></tr>
</table>
<?php if ($query['jalur'] == '2') { ?>

<table style="border-collapse: collapse; width: 100%" border="all">
	<tr>
		<th colspan="5">Nilai Ujian Nasional</th>
	</tr>
	<tr>
		<th width="20%">B. Indonesia</th>
		<th width="20%">B. Inggris</th>
		<th width="20%">Matematika</th>
		<th width="20%">IPA</th>
		<th width="20%">Rerata</th>
	</tr>
	<tr>
		<th style="text-align: center"><?= $query['bin'] ?></th>
		<th style="text-align: center"><?= $query['big'] ?></th>
		<th style="text-align: center"><?= $query['mtk'] ?></th>
		<th style="text-align: center"><?= $query['ipa'] ?></th>
		<th style="text-align: center"><?= $query['rerata_un'] ?></th>

	</tr>
</table>
<table style="border-collapse: collapse; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black; width: 100%;  font-size: 10pt">
	<tr>
		<th colspan="3" style="text-align: center; border-bottom: 1px solid black">Prestasi Non Akademik</th>
	</tr>
	<tr>
		<th width="50px" style="text-align: left;padding-left: 20px; vertical-align: super;">Bidang</th>
		<td width="3px" style="text-align: left; vertical-align: super;">:</td>
		<th style="text-align: left; vertical-align: super;"><?php if($query['bidang'] == '1') { echo 'Sains dan Teknologi'; } elseif ($query['bidang'] == '2') { echo "Seni"; } elseif ($query['bidang'] == '3') { echo "Olahraga"; } ?></th>
	</tr>
	<tr>
		<th width="50px" style="text-align: left;padding-left: 20px; vertical-align: super;">Nama Lomba</th>
		<td width="3px" style="text-align: left; vertical-align: super;">:</td>
		<th width="270px" style="text-align: left;vertical-align: super;"><?= $query['nama_lomba'] ?></th>
	</tr>
	<tr>
		<th width="50px" style="text-align: left;padding-left: 20px; vertical-align: super;">Tingkat</th>
		<td width="3px" style="text-align: left; vertical-align: super;">:</td>
		<th style="text-align: left; vertical-align: super;"><?php if($query['tingkat'] == '1') { echo 'Kabupaten'; } elseif ($query['tingkat'] == '2') { echo "Provinsi"; } elseif ($query['tingkat'] == '3') { echo "Nasional"; } elseif ($query['tingkat'] == '4') { echo "Provinsi"; } ?></th>
		
	</tr>
	<tr>
		<th width="50px" style="text-align: left;padding-left: 20px; vertical-align: super;">Juara</th>
		<td width="3px" style="text-align: left; vertical-align: super;">:</td>
		<th style="text-align: left; vertical-align: super;"><?= $query['juara']; ?></th>
	</tr>
</table>
<?php } ?>
<table style="border-collapse: collapse; width: 100%; border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; font-size: 10pt">
	<tr>
		<th colspan="2" style="text-align: left; padding-left: 10px; padding-top: 10px">Keterangan :</th>
	</tr>
	<tr>
		<td width="30px" style="text-align: right;">1.</td>
		<td style="text-align: left; padding-left: 10px">Ini adalah bukti pendaftaran peserta didik baru SMAN 1 Jorong tahun pelajaran 2020/2021</td>
	</tr>
	<tr>
		<td width="30px" style="text-align: right; vertical-align: super;">2.</td>
		<td style="text-align: left; padding-left: 10px">Pendaftar wajib mengirimkan berkas pendaftaran sesuai dengan ketentuan yang berlaku</td>
	</tr>
	<tr>
		<td width="30px" style="text-align: right; vertical-align: super;">3.</td>
		<td style="text-align: left; padding-left: 10px">Calon peserta didik yang tidak mengirimkan berkas pendaftaran dianggap membatalkan proses pendaftaran</td>
	</tr>
	<tr>
		<td width="30px" style="text-align: right; vertical-align: super; ">4.</td>
		<td style="text-align: left; padding-left: 10px; padding-bottom: 20px">Berkas pendaftaran dikumpulkan di dalam map berwarna biru (peserta didik laki-laki) dan merah (peserta didik perempuan). Berkas pendaftaran berupa :
			<br>- Cetak bukti pendaftaran 1 lembar
			<br>- Pas foto 3 x 4 sebanyak 2 lembar
			<br>- Fotokopi raport semester 1 sampai dengan semester 5
			<br>- Fotokopi akta kelahiran 1 lembar
			<br>- Fotokopi kartu keluarga 1 lembar
			<br>- Peserta didik jalur prestasi melampirkan bukti nilai ujian nasional dan prestasi non akademik
			<br>- Peserta didik jalur perpindahan orang tua menyertakan surat pindah tugas orang tua
		</td>
	</tr>
</table>