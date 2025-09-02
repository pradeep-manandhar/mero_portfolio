<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<style>
    h1 {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    table,
    th,
    td {
        border: 2px solid black;
    }

    tr:hover {
        background-color: #837f7fff;
    }

    th {
        background-color: #5a5e5aff;
        color: white;
    }

    table {
        width: 100%;
    }

    th,
    td {
        text-align: center;
    }

    tr:nth-child(even) {
        background-color: #b5adadff;
    }
    #insert{

        width: 20%;

        padding: 5px;
        margin: 5px;

    }
    a{
        text-decoration: none;
        color:#273043;

    }
    a:hover{
        color:#9197ae;
    }

</style>

<h1>Projects</h1>
<div id="insert">
    <a class="btn btn-dark"
     href="/core_php/collab-training/index.php?page=create_project&action=create">Insert New Project</a>
</div>



<table class="table table-hover table-striped">
  <thead class="table-dark ">
    <tr>
            <th>Project Name</th>
            <th>User Name</th>
            <th>Project Description</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
  </thead>

</table>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"> </script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function () {
        $(".btn-danger").click(function () {
            let id = $(this).data("id");
            const row = $(this).closest("tr");

            Swal.fire({
                title: "Are you sure you want to delete this project?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "/core_php/collab-training/routes.php?route=project&action=delete",
                        type: "POST",
                        data: { project_id: id },
                        success: function (response) {
                            let res = JSON.parse(response);
                            if (res.status === "success") {
                                Swal.fire(
                                    "Deleted!",
                                    "Deletion successful.",
                                    "success"
                                );
                                row.hide();
                            } else {
                                Swal.fire(
                                    "Error!",
                                    "Deletion failed: " + res.message,
                                    "error"
                                );
                            }
                        }
                    });
                }
            });
        });
    });
</script>
