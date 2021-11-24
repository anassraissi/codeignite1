<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
	crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
	integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
	integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
</script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script>
		$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<script>
	$(document).ready(function () {
		$('.confirm-delete').click(function (e) {
			e.preventDefault();
			confirmDialog = confirm('Are you shore ? you want to delete this data');
			if (confirmDialog) {
				var id = $(this).val();
				$.ajax({
					type: "DELETE",
					url: 'Employee/ConfirmDelete/' + id,
					success: function (response) {
						alert("Data deleted successfully");
						window.location.reload();
					}
				});
			}
		});
	});

</script>

</body>

</html>
