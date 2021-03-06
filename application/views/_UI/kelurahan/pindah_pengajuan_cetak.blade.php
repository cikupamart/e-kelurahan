@layout('_layout/dashboard/index')
@section('title')Cetak Pengajuan Pindah@endsection
@section('nama-kelurahan')Lumajang@endsection

@section('content')
<div class="row">
	<div class="col-xs-12 col-center">
		<div class="panel">
			<div class="panel-body">
				<h5>PEMERINTAH KABUPATEN JEMBER</h5>
				<h5>KECAMATAN : PATRANG</h5>
				<h5>KELURAHAN : GEBANG</h5>
				<div class="break-10"></div>
				<div class="center" style="border: none;">
					<span class="text-size-16"><u><b>SURAT KETERANGAN PINDAH</b></u></span><br>
					<span>Nomor : 475 / 18 / 02.2003 / 2017</span>
				</div>
				<div class="break-20"></div>
				<div class="center table-responsive">
					<table class="table table-condensed borderless">
						<?php $no = 1; ?>
						<tr>
							<td width="5%" class="text-left">{{$no++}}.</td>
							<td width="30%" class="text-left">Nama Lengkap</td>
							<td width="3%" class="text-center">:</td>
							<td class="text-left"><b>MOHAMMAD AINUL YAQIN</b></td>
						</tr>
						<tr>
							<td width="5%" class="text-left">{{$no++}}.</td>
							<td width="30%" class="text-left">Jenis Kelamin</td>
							<td width="3%" class="text-center">:</td>
							<td class="text-left">Laki-laki</td>
						</tr>
						<tr>
							<td width="5%" class="text-left">{{$no++}}.</td>
							<td width="30%" class="text-left">Dilahirkan di</td>
							<td width="3%" class="text-center">:</td>
							<td class="text-left">Bondowoso, 08-11-1992</td>
						</tr>
						<tr>
							<td width="5%" class="text-left">{{$no++}}.</td>
							<td width="30%" class="text-left">Agama</td>
							<td width="3%" class="text-center">:</td>
							<td class="text-left">Islam</td>
						</tr>
						<tr>
							<td width="5%" class="text-left">{{$no++}}.</td>
							<td width="30%" class="text-left">Status Perkawinan</td>
							<td width="3%" class="text-center">:</td>
							<td class="text-left">Belum Menikah</td>
						</tr>
						<tr>
							<td width="5%" class="text-left">{{$no++}}.</td>
							<td width="30%" class="text-left">Pekerjaan</td>
							<td width="3%" class="text-center">:</td>
							<td class="text-left">Mahasiswa</td>
						</tr>
						<tr>
							<td width="5%" class="text-left">{{$no++}}.</td>
							<td width="30%" class="text-left">Tanggal KTP</td>
							<td width="3%" class="text-center">:</td>
							<td class="text-left">354565684540001</td>
						</tr>
						<tr>
							<td width="5%" class="text-left">{{$no++}}.</td>
							<td width="30%" class="text-left">Alamat Lengkap</td>
							<td width="3%" class="text-center">:</td>
							<td class="text-left">
								<span>Jalan PB. Soedirman no.10 Pagah Jember</span>
								<table>
									<tr><td width="50%">Kelurahan</td><td>:&nbsp</td><td>Pagah</td></tr>
									<tr><td width="50%">Kecamatan</td><td>:&nbsp</td><td>Patrang</td></tr>
									<tr><td width="50%">Kabupaten</td><td>:&nbsp</td><td>Jember</td></tr>
									<tr><td width="50%">Provinsi</td><td>:&nbsp</td><td>Jawa Timur</td></tr>
								</table>
							</td>
						</tr>
						<tr>
							<td width="5%" class="text-left">{{$no++}}.</td>
							<td width="30%" class="text-left">Pindah Ke</td>
							<td width="3%" class="text-center">:</td>
							<td class="text-left">
								<span>Jalan PB. Soedirman no.10 Pagah Jember</span>
								<table>
									<tr><td width="50%">Kelurahan / Desa</td><td>&nbsp:&nbsp</td><td>Pagah</td></tr>
									<tr><td width="50%">Kecamatan</td><td>&nbsp:&nbsp</td><td>Patrang</td></tr>
									<tr><td width="50%">Kabupaten / Kota</td><td>&nbsp:&nbsp</td><td>Jember</td></tr>
									<tr><td width="50%">Provinsi</td><td>&nbsp:&nbsp</td><td>Jawa Timur</td></tr>
								</table>
							</td>
						</tr>
						<tr>
							<td width="5%" class="text-left">{{$no++}}.</td>
							<td width="30%" class="text-left">Alasan Pindah</td>
							<td width="3%" class="text-center">:</td>
							<td class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing.</td>
						</tr>
						<tr>
							<td width="5%" class="text-left">{{$no++}}.</td>
							<td width="30%" class="text-left">Pengikut</td>
							<td width="3%" class="text-center">:</td>
							<td class="text-left">2(dua) orang</td>
						</tr>
						<tr>
							<td colspan="4" class="table-responsive">
								<table class="table table-bordered">
									<tr>
										<td rowspan="2">No</td>
										<td rowspan="2">Nama</td>
										<td colspan="2">Kelamin</td>
										<td rowspan="2">Umur</td>
										<td rowspan="2">Status Perkawin</td>
										<td rowspan="2">Ket</td>
									</tr>
									<tr><td>Laki</td><td>Perempuan</td></tr>
									<!-- isi -->
									<tr>
										<td>1.</td>
										<td>Andre Hardika</td>
										<td>&#10004</td>
										<td></td>
										<td>20</td>
										<td>Belum Menikah</td>
										<td></td>
									</tr>
									<tr>
										<td>2.</td>
										<td>Rizki Herdatullah</td>
										<td>&#10004</td>
										<td></td>
										<td>24</td>
										<td>Menikah</td>
										<td></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td colspan="4">
								<p class="text-left">Demikian surat ini dibuat atas permintaan dan keterangan pemohon untuk dipergunakan
								sebagaimana mestinya.<br>Untuk WNI dan WNA pada waktu surat keterangan pindah ini
								diberikan nama yang bersangkutan pada KSK dicoret dan KTP dicabut.</p>
							</td>
						</tr>
						<tr>
							<td colspan="4" class="table table-responsive">
								<table class="table borderless">
									<tr>
										<td colspan="2"></td>
										<td>Pagah, 22 Februari 2017</td></tr>
									<tr>
										<td width="44%">PEMOHON</td>
										<td width="10%"></td>
										<td width="44%">LURAH PAGAH</td>
									</tr>
									<tr>
										<td colspan="3" height="50px"></td>
									</tr>
									<tr>
										<td><u><b>MOHAMMAD AINUL YAQIN</b></u></td>
										<td></td>
										<td><u><b>NAMA LURAH, S.Sos, Msi</b></u></td>
									</tr>
									<tr>
										<td colspan="2"></td>
										<td>JABATAN<br>NIP. 1978798 986986 16986</td>
									</tr>
									<tr>
										<td colspan="3">CAMAT PATRANG</td>
									</tr>
									<tr>
										<td colspan="3" height="50px"></td>
									</tr>
									<tr>
										<td colspan="3">
											<u><b>NAMA CAMAT, S.Sos, Msi</b></u><br>
											<span>PEMBINA</span><br>
											<span>NIP. 1978798 986986 16986</span>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="block">
			<a class="btn btn-warning btn-block"><i class="fa fa-print"></i> cetak</a>
		</div>
	</div>
</div>
@endsection

@section('style')
<style>
	.panel{
		width: 595pt;
		height: 842pt;
		max-width: 595pt;
		max-height: 842pt;
		padding: 30px 70px;
		overflow: hidden;
		font-size: 10pt;
	}

	.panel *{
		font-family: 'Times New Roman', serif;
		line-height: initial;
	}

	.col-center{
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
	}

	.text-size-16{font-size: 16pt}
	.text-size-18{font-size: 18pt}

	.btn-sharp{
		border-radius: 0;
	}

	table.borderless > tbody > tr > td{
		border: none !important;
	}
	table.table-condensed td, table.table-condensed th{
		padding-top: 1px !important;
		padding-bottom: 1px !important;
	}
	
	.center{
		display: block;
		width: 100%;
		text-align: center;
	}

	.block{
		width: 595pt;
	}
</style>
@endsection