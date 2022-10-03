$(document).ready(function () {
	$("#dataTablesNamaDownload").DataTable({
		dom: "Bfrtip",
		bLengthChange: false,
		bFilter: false,

		buttons: [
			{
				extend: "excel",
				className: "btn btn-lg btn-primary",
				text: "<i class='fas fa-download'> Download Data</i>",
				titleAttr: "Excel",
			},
		],
		order: [],
		columnDefs: [
			{
				targets: "no-sort", //menghilang sorting pada colom tabel
				orderable: false,
			},
		],
	});
});

$(document).ready(function () {
	$("#dataTablesBotolDownload").DataTable({
		dom: "Bfrtip",
		bLengthChange: false,
		bFilter: false,

		buttons: [
			{
				extend: "excel",
				className: "btn btn-lg btn-primary",
				text: "<i class='fas fa-download'> Download Data</i>",
				titleAttr: "Excel",
			},
		],
		order: [],
		columnDefs: [
			{
				targets: "no-sort", //menghilang sorting pada colom tabel
				orderable: false,
			},
		],
	});
});

$(document).ready(function () {
	$("#dataTablesNama").DataTable({
		order: [],
		columnDefs: [
			{
				targets: "no-sort", //menghilang sorting pada colom tabel
				orderable: false,
			},
		],
	});
});

var start_date;
var end_date;
var DateFilterFunction = function (oSettings, aData, iDataIndex) {
	var dateStart = parseDateValue(start_date);
	var dateEnd = parseDateValue(end_date);
	//Kolom tanggal yang akan kita gunakan berada dalam urutan 2, karena dihitung mulai dari 0
	//nama depan = 0
	//nama belakang = 1
	//tanggal terdaftar =2
	var evalDate = parseDateValue(aData[1]);
	if (
		(isNaN(dateStart) && isNaN(dateEnd)) ||
		(isNaN(dateStart) && evalDate <= dateEnd) ||
		(dateStart <= evalDate && isNaN(dateEnd)) ||
		(dateStart <= evalDate && evalDate <= dateEnd)
	) {
		return true;
	}
	return false;
};

// fungsi untuk converting format tanggal dd/mm/yyyy menjadi format tanggal javascript menggunakan zona aktubrowser
function parseDateValue(rawDate) {
	var dateArray = rawDate.split("/");
	var parsedDate = new Date(
		dateArray[2],
		parseInt(dateArray[1]) - 1,
		dateArray[0]
	); // -1 because months are from 0 to 11
	return parsedDate;
}

$(document).ready(function () {
	//konfigurasi DataTable pada tabel dengan id example dan menambahkan  div class dateseacrhbox dengan dom untuk meletakkan inputan daterangepicker
	var $dTable = $("#dataTablesBotol").DataTable({
		dom:
			"<'row'<'col-sm-4'l><'col-sm-4' <'datesearchbox'>><'col-sm-4'f>>" +
			"<'row'<'col-sm-12'tr>>" +
			"<'row'<'col-sm-5'i><'col-sm-7'p>>",
		order: [],
		columnDefs: [
			{
				targets: "no-sort", //menghilang sorting pada colom tabel
				orderable: false,
			},
		],
	});

	//menambahkan daterangepicker di dalam datatables
	$("div.datesearchbox").html(
		'<div class="input-group align-center"> <div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span> </div><input type="text" class="form-control " id="datesearch" placeholder="Search Data by Date Range.."> </div>'
	);

	document.getElementsByClassName("datesearchbox")[0].style.textAlign = "right";

	//konfigurasi daterangepicker pada input dengan id datesearch
	$("#datesearch").daterangepicker({
		autoUpdateInput: false,
	});

	//menangani proses saat apply date range
	$("#datesearch").on("apply.daterangepicker", function (ev, picker) {
		$(this).val(
			picker.startDate.format("DD/MM/YYYY") +
				" - " +
				picker.endDate.format("DD/MM/YYYY")
		);
		start_date = picker.startDate.format("DD/MM/YYYY");
		end_date = picker.endDate.format("DD/MM/YYYY");
		$.fn.dataTableExt.afnFiltering.push(DateFilterFunction);
		$dTable.draw();
	});

	$("#datesearch").on("cancel.daterangepicker", function (ev, picker) {
		$(this).val("");
		start_date = "";
		end_date = "";
		$.fn.dataTable.ext.search.splice(
			$.fn.dataTable.ext.search.indexOf(DateFilterFunction, 1)
		);
		$dTable.draw();
	});
});
