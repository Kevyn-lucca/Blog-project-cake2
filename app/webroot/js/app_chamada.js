function HomePage() {
	$.ajax({
		method: "GET",
		url: "posts/index",
		success: (response) => {
			$("#MainContent").html(response);
		},
	});
}

function CallTypePage() {
	$.ajax({
		method: "GET",
		url: "types/type",
		success: (response) => {
			$("#MainContent").html(response);
		},
	});
}


//coloca o before antes de dormir
function buscarPostsAdd() {
	$.ajax({
		method: "GET",
		url: "posts/add/",
		success: (response) => {
			$("#MainModalPost").modal("toggle");
			$("#MainModalPostContent").html(response);
		},
	});
}

function CallDeletePost(id) {
	$.ajax({
		method: "GET",
		url: "posts/delete/" + id,
		success: (response) => {
			$("#MainModalPost").modal("toggle");
			$("#MainModalPostContent").html(response);
		},
	});
}

function buscarPostsEdit(id) {
	$.ajax({
		method: "GET",
		url: "posts/edit/" + id,

		success: (response) => {
			$("#MainModalPost").modal("toggle");
			$("#MainModalPostContent").html(response);
		},
	});
}

function addPost() {
	let formdata = $("#postAdForm").serialize();

	$.ajax({
		method: "POST",
		url: "posts/add/",
		data: formdata,

		success: () => {
			$("#MainModalPost").modal("toggle");
			HomePage();
		},
	});
}

function editpost(id) {
	let formdata = $("#formPostEdit").serialize();
	$.ajax({
		method: "POST",
		url: "posts/edit/" + id,
		data: formdata,

		success: () => {
			$("#MainModalPost").modal("toggle");
			HomePage();
		},
	});
}

function CallDeleteType(id) {
	$.ajax({
		method: "DELETE",
		url: "types/deleteType/" + id,

		success: () => {
			HomePage();
		},
	});
}
function LoadPost(id) {
	$.ajax({
		method: "GET",
		url: `posts/view/${id}`,
		success: (response) => {
			$("#PostContent").html(response);
		},
	});
}

//types,jogar pra outra file

function buscarPostsAdd() {
	$.ajax({
		method: "GET",
		url: "posts/add/",
		success: (response) => {
			$("#MainModalPost").modal("toggle");
			$("#MainModalPostContent").html(response);
		},
	});
}

function buscarTypesEdit(id) {
	$.ajax({
		method: "GET",
		url: "types/edit/" + id,

		success: (response) => {
			$("#MainModalPost").modal("toggle");
			$("#MainModalPostContent").html(response);
		},
	});
}


HomePage();
