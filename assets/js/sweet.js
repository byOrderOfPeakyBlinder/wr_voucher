const flashData = $(".flash-data").data("flashdata");
const warningData = $(".er-data").data("erdata");
const infoData = $(".info-data").data("infodata");

if (flashData) {
	Swal.fire({
		icon: "success",
		title: flashData,
		showConfirmButton: false,
		timer: 2000,
	});
} 

if (warningData) {
	Swal.fire({
		icon: "error",
		title: warningData,
	});
}

if (infoData) {
	Swal.fire({
		icon: "info",
		title: infoData,
		showCloseButton: true,
		focusConfirm: false,

	});
}

 