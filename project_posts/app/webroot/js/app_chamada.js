function HomePage() {
	$.ajax({
		method: "GET",
		url: "posts/index",
		success: (response) => {
			$("#MainContent").html(response);
		},
	});
}

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

function deletePost(id) {
	$.ajax({
		method: "DELETE",
		url: "posts/delete/" + id,

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

HomePage();
