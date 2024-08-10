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
			$("#PostContent").html("");
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

function deletePost(id) {
    $.ajax({
        method: "DELETE",
        url: "posts/delete/" + id,

        success: () => {
			HomePage();
        },
    })
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

function buscarTypeAdd() {
	$.ajax({
		method: "GET",
		url: "types/add/",
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

function DeleteType(id) {
	$.ajax({
		method: "DELETE",
		url: "types/delete/" + id,

		success: () => {
			CallTypePage();
		},
	});
}

function addType() {
	let formdata = $("#TypeAdForm").serialize();

	$.ajax({
		method: "POST",
		url: "types/add/",
		data: formdata,

		success: () => {
			$("#MainModalPost").modal("toggle");
			CallTypePage();
		},
	});
}


function editType(id) {
	let formdata = $("#formTypeEdit").serialize();
	$.ajax({
		method: "POST",
		url: "types/edit/" + id,
		data: formdata,

		success: () => {
			$("#MainModalPost").modal("toggle");
			CallTypePage();
		},
	});
}

HomePage();
