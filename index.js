var id;
var spanModal;

document.addEventListener('DOMContentLoaded', function() {
    var deleteModalButton = document.getElementById('buttonDeleteModal');
    spanModal = document.getElementById('spanIdModal');
    // console.log(spanModal)

    deleteModalButton.addEventListener('click', function() {

        var deleteUrl = "delete.php?id=" + id;

        window.location.href = deleteUrl;

    });

});
function openModal(studentId)
{
    // console.log(spanModal);
    id = studentId;
    console.log("id: " + id);
    spanModal.innerHTML = studentId;
   
    // Show modal
    var modal = new bootstrap.Modal(document.getElementById('confirmModal'));
    modal.show();
}

