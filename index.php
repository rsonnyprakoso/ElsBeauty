<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/css/style.css" rel='stylesheet' type='text/css'>
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link
	href='https://fonts.googleapis.com/css?family=Josefin+Sans:300,400'
	rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:300,400'
	rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Arimo:700,400'
	rel='stylesheet' type='text/css'>
<title>ElsBeauty Inventory System</title>
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="/js/jquery-2.2.1.min.js"></script>
<script src="/js/jquery-ui.js"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
<script src="/js/index.js" type="text/javascript"></script>
</head>
<body>

	<div id="wrapper">
		<header id="header">
			<button type="button" id="button-collapse" class="navbar-toggle"
				data-toggle="collapse" data-target="#left-navbar">
				<i class="fa fa-2x fa-bars"></i>
			</button>
			<div id="brand-title"></div>
		</header>

		<div id="left-navbar">
			<nav>
				<ul class="navbar-menu">
					<li>
						<div class="navbar-icon">
							<a class="active" href="#home"> <span> <i class="fa fa-2x fa-home"></i>
									<br /> <small>DEPAN</small>
							</span>
							</a>
						</div>
					</li>
					<li>
						<div class="navbar-icon">
							<a href="#cashier"> <span> <i class="fa fa-2x fa-calculator"></i> <br />
									<small>KASIR</small>
							</span>
							</a>
						</div>
					</li>
					<li>
						<div class="navbar-icon">
							<a href="#"> <span> <i class="fa fa-2x fa-archive"></i> <br /> <small>STOK</small>
							</span>
							</a>
						</div>
					</li>
					<li>
						<div class="navbar-icon">
							<a href="#"> <span> <i class="fa fa-2x fa-envelope"></i> <br /> <small>PESANAN</small>
							</span>
							</a>
						</div>
					</li>
					<li>
						<div class="navbar-icon">
							<a href="#"> <span> <i class="fa fa-2x fa-file-text"></i> <br />
									<small>LAPORAN</small>
							</span>
							</a>
						</div>
					</li>
				</ul>
			</nav>
		</div>

		<div id="content-wrapper">
			<div id="content">
				<div id="content-head">
					<h2>Dashboard</h2>
					<div class="status">
						Halo,
						<strong>Rizal</strong>!
						Bukan kamu? <a id="logout" href="#logout">Keluar</a>
					</div>
					<ul class="nav-tab" id="time-nav">
						<li class="tab-menu"><button class="button-tab active">Harian</button></li>
						<li class="tab-menu"><button class="button-tab">Mingguan</button></li>
						<li class="tab-menu"><button class="button-tab">Bulanan</button></li>
						<li class="tab-menu"><button class="button-tab">Tahunan</button></li>
					</ul>
					<span class="nav-select" id="time-select"> <select id="time-option">
							<option value="Harian">Harian</option>
							<option value="Mingguan">Mingguan</option>
							<option value="Bulanan">Bulanan</option>
							<option value="Tahunan">Tahunan</option>
					</select>
					</span>
				</div>
				<div id="cashier" class="content-main">
					<div id="cashier-left">
						<div id="search-group">
							<div id="search-container">
								<input type="text" placeholder="CARI BARANG" class="input-text"
									name="item-search" />
							</div>
							<button class="search-button" id="btn-item-src">
								<i class="fa fa-search"></i>
							</button>
						</div>
						<div class="item-list">
							<table id="item-add-list" class="list-table">
								<colgroup>
									<col style="width: 10%;" />
									<col style="width: 60%;" />
									<col style="width: 20%;" />
								</colgroup>
								<tr>
									<td>
										<button class="add-button" id="btn-item-add">
											<i class="fa fa-plus"></i>
										</button>
									</td>
									<td>KOSMETIK 1</td>
									<td>120000</td>
								</tr>
								<tr>
									<td>
										<button class="add-button" id="btn-item-add">
											<i class="fa fa-plus"></i>
										</button>
									</td>
									<td>KOSMETIK 2</td>
									<td>96000</td>
								</tr>
								<tr>
									<td>
										<button class="add-button" id="btn-item-add">
											<i class="fa fa-plus"></i>
										</button>
									</td>
									<td>KOSMETIK 3</td>
									<td>53000</td>
								</tr>
								<tr>
									<td>
										<button class="add-button" id="btn-item-add">
											<i class="fa fa-plus"></i>
										</button>
									</td>
									<td>KOSMETIK 1</td>
									<td>120000</td>
								</tr>
								<tr>
									<td>
										<button class="add-button" id="btn-item-add">
											<i class="fa fa-plus"></i>
										</button>
									</td>	
									<td>KOSMETIK 2</td>
									<td>96000</td>
								</tr>
								<tr>
									<td>
										<button class="add-button" id="btn-item-add">
											<i class="fa fa-plus"></i>
										</button>
									</td>
									<td>KOSMETIK 3</td>
									<td>53000</td>
								</tr>
								<tr>
									<td>
										<button class="add-button" id="btn-item-add">
											<i class="fa fa-plus"></i>
										</button>
									</td>
									<td>KOSMETIK 1</td>
									<td>120000</td>
								</tr>
								<tr>
									<td>
										<button class="add-button" id="btn-item-add">
											<i class="fa fa-plus"></i>
										</button>
									</td>
									<td>KOSMETIK 2</td>
									<td>96000</td>
								</tr>
								<tr>
									<td>
										<button class="add-button" id="btn-item-add">
											<i class="fa fa-plus"></i>
										</button>
									</td>
									<td>KOSMETIK 3</td>
									<td>53000</td>
								</tr>
								<tr>
									<td>
										<button class="add-button" id="btn-item-add">
											<i class="fa fa-plus"></i>
										</button>
									</td>
									<td>KOSMETIK 1</td>
									<td>120000</td>
								</tr>
								<tr>
									<td>
										<button class="add-button" id="btn-item-add">
											<i class="fa fa-plus"></i>
										</button>
									</td>
									<td>KOSMETIK 2</td>
									<td>96000</td>
								</tr>
								<tr>
									<td>
										<button class="add-button" id="btn-item-add">
											<i class="fa fa-plus"></i>
										</button>
									</td>
									<td>KOSMETIK 3</td>
									<td>53000</td>
								</tr>
								<tr>
									<td>
										<button class="add-button" id="btn-item-add">
											<i class="fa fa-plus"></i>
										</button>
									</td>
									<td>KOSMETIK 1</td>
									<td>120000</td>
								</tr>
								<tr>
									<td>
										<button class="add-button" id="btn-item-add">
											<i class="fa fa-plus"></i>
										</button>
									</td>
									<td>KOSMETIK 2</td>
									<td>96000</td>
								</tr>
								<tr>
									<td>
										<button class="add-button" id="btn-item-add">
											<i class="fa fa-plus"></i>
										</button>
									</td>
									<td>KOSMETIK 3</td>
									<td>53000</td>
								</tr>
							</table>
						</div>
					</div>
					<div id="cashier-right">
						<table id="item-header" class="list-table">
							<colgroup>
								<col style="width: 15%" />
								<col style="width: 50%" />
								<col style="width: 30%" />
								<col style="width: 5%" />
							</colgroup>
							<tr>
								<th>QTY.</th>
								<th>BARANG</th>
								<th>HARGA</th>
								<th>&nbsp;</th>
							</tr>
						</table>
						<div class="item-list">
							<table id="item-buy-list" class="list-table">
								<colgroup>
									<col style="width: 15%" />
									<col style="width: 50%" />
									<col style="width: 30%" />
									<col style="width: 5%" />
								</colgroup>
								<tr>
									<td><input type="number" class="item-qty" value="1" /></td>
									<td>KOSMETIK 1<br /> <small>@ 120000</small>
									</td>
									<td>120000</td>
									<td>
										<button class="remove-button" id="btn-item-remove">
											<i class="fa fa-times"></i>
										</button>
									</td>
								</tr>
								<tr>
									<td><input type="number" class="item-qty" value="2" /></td>
									<td>KOSMETIK 2 <br /> <small>@ 96000</small>
									</td>
									<td>192000</td>
									<td>
										<button class="remove-button" id="btn-item-remove">
											<i class="fa fa-times"></i>
										</button>
									</td>
								</tr>
								<tr>
									<td><input type="number" class="item-qty" value="1" /></td>
									<td>KOSMETIK 3<br /> <small>@ 53000</small></td>
									<td>53000</td>
									<td>
										<button class="remove-button" id="btn-item-remove">
											<i class="fa fa-times"></i>
										</button>
									</td>
								</tr>
							</table>
						</div>
						<table id="item-footer" class="list-table">
							<colgroup>
								<col style="width: 15%" />
								<col style="width: 50%" />
								<col style="width: 35%" />
							</colgroup>
							<tr>
								<th>
									<button class="save-button" title="simpan">
										<i class="fa fa-floppy-o"></i>
									</button>
									<button class="reset-button" title="ulangi">
										<i class="fa fa-repeat"></i>
									</button>
								</th>
								<th colspan="2">TOTAL</th>
								<th id="total-price">5000000</th>
							</tr>
						</table>
					</div>
				</div>
				<div id="home" class="content-main">
					<div id="sale-summary">
						<div class="summary-item">
							<div class="summary-text summary-title">PEMBELIAN</div>
							<div class="summary-text summary-value" id="transaction-value">40</div>
							<div class="summary-text summary-compare up">
								<i class="fa fa-chevron-circle-up"></i> <label
									id="transaction-compare">Naik 2 dari kemarin</label>
							</div>
							<hr />
							<canvas id="transaction-chart" class="main-chart"></canvas>
						</div>
						<div class="summary-item summary-inverse">
							<div class="summary-text summary-title">PENGEMBALIAN</div>
							<div class="summary-text summary-value" id="return-value">3</div>
							<div class="summary-text summary-compare up">
								<i class="fa fa-chevron-circle-up"></i> <label
									id="return-compare">Naik 1 dari kemarin</label>
							</div>
							<hr />
							<canvas id="return-chart" class="main-chart"></canvas>
						</div>
						<div class="summary-item">
							<div class="summary-text summary-title">OMSET</div>
							<div class="summary-text summary-value" id="omzet-value">Rp
								8.250.000,00</div>
							<div class="summary-text summary-compare down">
								<i class="fa fa-chevron-circle-down"></i> <label
									id="omzet-compare">Turun Rp 15.000.000,00 dari kemarin</label>
							</div>
							<hr />
							<canvas id="omzet-chart" class="main-chart"></canvas>
						</div>
						<div class="summary-item">
							<div class="summary-text summary-title">KEUNTUNGAN</div>
							<div class="summary-text summary-value" id="profit-value">Rp
								1.800.000,00</div>
							<div class="summary-text summary-compare same">
								<i class="fa fa-minus-circle"></i> <label id="profit-compare">Tetap
									dari kemarin</label>
							</div>
							<hr />
							<canvas id="profit-chart" class="main-chart"></canvas>
						</div>
					</div>
				</div>
				<hr />
				<div id="content-foot">
					<p>
						Copyright &copy; 2016 <a href="http://tampilin.id" target="_blank">Tampilin.id:
							One Stop Online Services</a>
					</p>
				</div>
			</div>
		</div>

	</div>

</body>
</html>