const myInput = document.getElementById("my-input");
function stepper(btn) {
	let id = btn.getAttribute("id");
	let min = myInput.getAttribute("min");
	let max = myInput.getAttribute("max");
	let step = myInput.getAttribute("step");
	let val = myInput.getAttribute("value");
	let calcStep = id == "increment" ? step * 1 : step * -1;
	let newValue = parseInt(val) + calcStep;

	if (newValue >= min && newValue <= max) {
		myInput.setAttribute("value", newValue);
	}
}

const myInput2 = document.getElementById("my-input2");
function stepper2(btn) {
	let id = btn.getAttribute("id");
	let min = myInput2.getAttribute("min");
	let max = myInput2.getAttribute("max");
	let step = myInput2.getAttribute("step");
	let val = myInput2.getAttribute("value");
	let calcStep = id == "increment2" ? step * 1 : step * -1;
	let newValue = parseInt(val) + calcStep;

	if (newValue >= min && newValue <= max) {
		myInput2.setAttribute("value", newValue);
	}
}

const myInput3 = document.getElementById("my-input3");
function stepper3(btn) {
	let id = btn.getAttribute("id");
	let min = myInput3.getAttribute("min");
	let max = myInput3.getAttribute("max");
	let step = myInput3.getAttribute("step");
	let val = myInput3.getAttribute("value");
	let calcStep = id == "increment3" ? step * 1 : step * -1;
	let newValue = parseInt(val) + calcStep;

	if (newValue >= min && newValue <= max) {
		myInput3.setAttribute("value", newValue);
	}
}

const myInput4 = document.getElementById("my-input4");
function stepper4(btn) {
	let id = btn.getAttribute("id");
	let min = myInput4.getAttribute("min");
	let max = myInput4.getAttribute("max");
	let step = myInput4.getAttribute("step");
	let val = myInput4.getAttribute("value");
	let calcStep = id == "increment4" ? step * 1 : step * -1;
	let newValue = parseInt(val) + calcStep;

	if (newValue >= min && newValue <= max) {
		myInput4.setAttribute("value", newValue);
	}
}

const myInput5 = document.getElementById("my-input5");
function stepper5(btn) {
	let id = btn.getAttribute("id");
	let min = myInput5.getAttribute("min");
	let max = myInput5.getAttribute("max");
	let step = myInput5.getAttribute("step");
	let val = myInput5.getAttribute("value");
	let calcStep = id == "increment5" ? step * 1 : step * -1;
	let newValue = parseInt(val) + calcStep;

	if (newValue >= min && newValue <= max) {
		myInput5.setAttribute("value", newValue);
	}
}

var angka1 = document.getElementById("angka1");
var angka2 = document.getElementById("angka2");
var angka3 = document.getElementById("angka3");
var hasil = document.getElementById("hasil");

function ftambah() {
	hasil.value = Number(angka1.value) + Number(hasil.value);
}

function fkurang() {
	hasil.value = Number(hasil.value) - Number(angka1.value);
}

function ftambah2() {
	hasil.value = Number(hasil.value) + Number(angka3.value);
}

function fkurang2() {
	hasil.value = Number(hasil.value) - Number(angka3.value);
}

var dua1 = document.getElementById("dua1");
var dua2 = document.getElementById("dua2");
var dua3 = document.getElementById("dua3");
var hasil2 = document.getElementById("hasil2");

function f2tambah() {
	hasil2.value = Number(dua1.value) + Number(hasil2.value);
}

function f2kurang() {
	hasil2.value = Number(hasil2.value) - Number(dua1.value);
}

function f2tambah2() {
	hasil2.value = Number(hasil2.value) + Number(dua3.value);
}

function f2kurang2() {
	hasil2.value = Number(hasil2.value) - Number(dua3.value);
}

var tiga1 = document.getElementById("tiga1");
var tiga2 = document.getElementById("tiga2");
var tiga3 = document.getElementById("tiga3");
var hasil3 = document.getElementById("hasil3");

function f3tambah() {
	hasil3.value = Number(tiga1.value) + Number(hasil3.value);
}

function f3kurang() {
	hasil3.value = Number(hasil3.value) - Number(tiga1.value);
}

function f3tambah2() {
	hasil3.value = Number(hasil3.value) + Number(tiga3.value);
}

function f3kurang2() {
	hasil3.value = Number(hasil3.value) - Number(tiga3.value);
}

var empat1 = document.getElementById("empat1");
var empat2 = document.getElementById("empat2");
var empat3 = document.getElementById("empat3");
var hasil4 = document.getElementById("hasil4");

function f4tambah() {
	hasil4.value = Number(empat1.value) + Number(hasil4.value);
}

function f4kurang() {
	hasil4.value = Number(hasil4.value) - Number(empat1.value);
}

function f4tambah2() {
	hasil4.value = Number(hasil4.value) + Number(empat3.value);
}

function f4kurang2() {
	hasil4.value = Number(hasil4.value) - Number(empat3.value);
}

var lima1 = document.getElementById("lima1");
var lima2 = document.getElementById("lima2");
var lima3 = document.getElementById("lima3");
var hasil5 = document.getElementById("hasil5");

function f5tambah() {
	hasil5.value = Number(lima1.value) + Number(hasil5.value);
}

function f5kurang() {
	hasil5.value = Number(hasil5.value) - Number(lima1.value);
}

function f5tambah2() {
	hasil5.value = Number(hasil5.value) + Number(lima3.value);
}

function f5kurang2() {
	hasil5.value = Number(hasil5.value) - Number(lima3.value);
}
