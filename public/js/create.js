document.getElementById('createForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "custom-confirm-button",
            cancelButton: "custom-cancel-button"
        },
        buttonsStyling: false
    });

    swalWithBootstrapButtons.fire({
        title: "Apakah Anda Yakin?",
        text: "Data akan disimpan ke sistem!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Ya, Simpan!",
        cancelButtonText: "Tidak, Batal!",
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            this.submit();
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire({
                title: "Batal",
                text: "Data tidak disimpan :)",
                icon: "error"
            });
        }
    });
});