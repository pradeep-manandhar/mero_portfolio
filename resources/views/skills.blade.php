
<style>
    .btn-secondary{
        margin:10px;
    }
</style>
<h1>Skills</h1>
<a href="/core_php/collab-training/index.php?page=create-skill" class="btn btn-secondary">Insert New Skill</a>

<table class="table table-striped table-bordered align-middle">
    <thead class="table-dark">
        <tr>
            <th>User's Name</th>
            <th>Skill Name</th>
            <th>Skill Category</th>
            <th>Skill Level</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
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
                title: "Are you sure you want to delete this skill?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "/core_php/collab-training/routes.php?route=skills&action=delete",
                        type: "POST",
                        data: { skill_id: id },
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
