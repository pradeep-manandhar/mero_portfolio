@extends('layout.admin')
@section('body')
    <h1>Contact Details </h1>
    <table class="table table-hover table-striped">
        <thead class="table-dark ">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email address</th>
                <th>Mobile Number</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>PRADEEP</td>
                <td>MANANDHAR</td>
                <td>pradeepmanandhar2059@gmail.com</td>
                <td>9885149093</td>
                <td>Hello World</td>
                <td>
                    <a href="javascript:void(0);" class="btn btn-danger delete-btn" data-id="">
                        Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
    {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            $(".delete-btn").click(function() {
                let id = $(this).data("id");
                const row = $(this).closest("tr");

                Swal.fire({
                    title: "Are you sure you want to delete this contact?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "" + id,
                            type: "DELETE",
                            data: {
                                _token: "{{ csrf_token() }}"
                            },
                            success: function(response) {
                                if (response.status === "success") {
                                    Swal.fire("Deleted!", response.message, "success");
                                    row.fadeOut();
                                } else {
                                    Swal.fire("Error!", "Something went wrong.",
                                        "error");
                                }
                            },
                            error: function() {
                                Swal.fire("Error!", "Server error occurred.", "error");
                            }
                        });
                    }
                });
            });
        });
    </script> --}}
@endsection
